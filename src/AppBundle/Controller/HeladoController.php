<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 11/01/16
 * Time: 07:41 AM
 */

namespace AppBundle\Controller;

use AppBundle\Model\Constants;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Model\HeladosDB;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HeladoController extends Controller
{
    /**
     * @Route("/helados")
     */
    public function getHeladosAction()
    {
        $db = new HeladosDB($this->get(Constants::DB_CONN));
        $helados = $db->findAll();

        return $this->render('helados/helados.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'helados' => $helados,
        ]);
    }

    /**
     * @Route("/helados/delete/{id}")
     */
    public function deleteHeladoAction($id)
    {
        $db = new HeladosDB($this->get('database_connection'));
        $db->deleteById($id);


        return $this->redirect('http://localhost:8000/helados');
    }

    /**
     * @Route("/helados/create")
     */
    public function createHeladoAction()
    {
        return $this->render('helados/newHelado.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/helados/new")
     *
     * @Method("POST")
     */
    public function newHeladoAction(Request $request)
    {
        $data = $request->query->all();
        $db = new HeladosDB($this->get(Constants::DB_CONN));
        $db->insert($data);

        return $this->redirect('http://localhost:8000/helados');
    }

    /**
     * @Route("/helados/edit/{id}")
     */
    public function getEditHeladoAction($id)
    {
        $db = new HeladosDB($this->get(Constants::DB_CONN));
        $helado = $db->findById($id);
        return $this->render('helados/editHelado.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'helado' => $helado,
        ]);
    }

    /**
     * @Route("/helados/update")
     *
     * @Method("POST")
     *
     */
    public function editHeladoAction(Request $request)
    {
        $data = $request->query->all();
        $db = new HeladosDB($this->get(Constants::DB_CONN));
        $db->edit($data);

        return $this->redirect('http://localhost:8000/helados/'. $data['id']);
    }

    /**
     * @Route("/helados/{id}/promocion/create")
     */
    public function getCrearPromocionAction($id)
    {

        return $this->render('helados/newPromocion.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'id' => $id,
        ]);
    }

    /**
     * @Route("/helados/{id}/promocion/new")
     *
     * @Method("POST")
     *
     */
    public function getNewPromocionAction(Request $request)
    {
        $data = $request->query->all();
        $db = new HeladosDB($this->get(Constants::DB_CONN));
        $db->insertPromocion($data);

        return $this->redirect('http://localhost:8000/helados/' . $data['id']);
    }

    /**
     * @Route("/helados/{id}")
     */
    public function getHeladoAction($id)
    {
        $db = new HeladosDB($this->get(Constants::DB_CONN));
        $helado = $db->findById($id);
        $promociones = $db->findPromociones($id);

        return $this->render('helados/viewHelados.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'helado' => $helado,
            'promociones' => $promociones,
        ]);
    }
}