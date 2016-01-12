<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 12/01/16
 * Time: 08:18 AM
 */

namespace AppBundle\Controller;

use AppBundle\Model\Constants;
use AppBundle\Model\HistoriaDB;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HistoriaController extends Controller
{
    /**
     * @Route("/historias")
     */
    public function getHistoriasAction()
    {
        $db = new HistoriaDB($this->get(Constants::DB_CONN));
        $historias = $db->findAll();

        return $this->render('historia/historias.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'historias' => $historias,
        ]);
    }

    /**
     * @Route("/historias/delete/{id}")
     */
    public function deleteHistoriaAction($id)
    {
        $db = new HistoriaDB($this->get('database_connection'));
        $db->deleteById($id);


        return $this->redirect('http://localhost:8000/historias');
    }

    /**
     * @Route("/historias/create")
     */
    public function createHistoriaAction()
    {
        return $this->render('historia/newHistoria.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/historias/new")
     *
     * @Method("POST")
     */
    public function newHistoriaAction(Request $request)
    {
        $data = $request->query->all();
        $db = new HistoriaDB($this->get(Constants::DB_CONN));
        $db->insert($data);

        return $this->redirect('http://localhost:8000/historias');
    }

    /**
     * @Route("/helados/edit/{id}")
     */
    public function getEditHistoriaAction($id)
    {
        $db = new HistoriaDB($this->get(Constants::DB_CONN));
        $historia = $db->findById($id);

        return $this->render('historia/editHistoria.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'historia' => $historia,
        ]);
    }

    /**
     * @Route("/historias/update")
     *
     * @Method("POST")
     *
     */
    public function editHistoriaAction(Request $request)
    {
        $data = $request->query->all();
        $db = new HistoriaDB($this->get(Constants::DB_CONN));
        $db->edit($data);

        return $this->redirect('http://localhost:8000/historias/'. $data['id']);
    }


    /**
     * @Route("/historias/{id}")
     */
    public function getHistoriaAction($id)
    {
        $db = new HistoriaDB($this->get(Constants::DB_CONN));
        $historia = $db->findById($id);

        return $this->render('historias/viewHistoria.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'historia' => $historia,
        ]);
    }
}