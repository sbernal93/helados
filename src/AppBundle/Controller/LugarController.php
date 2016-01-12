<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 12/01/16
 * Time: 02:35 PM
 */

namespace AppBundle\Controller;


use AppBundle\Model\LugarDB;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\Constants;

class LugarController extends Controller
{

    /**
     * @Route("/lugares")
     */
    public function getLugaresAction()
    {
        $db = new LugarDB($this->get(Constants::DB_CONN));
        $lugares = $db->findAll();

        return $this->render('lugar/lugares.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'lugares' => $lugares,
        ]);
    }

    /**
     * @Route("/lugares/delete/{id}")
     */
    public function deleteLugarAction($id)
    {
        $db = new LugarDB($this->get('database_connection'));
        $db->deleteById($id);


        return $this->redirect('http://localhost:8000/lugares');
    }

    /**
     * @Route("/lugares/create")
     */
    public function createLugarAction()
    {
        return $this->render('lugar/newLugar.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/lugares/new")
     *
     * @Method("POST")
     */
    public function newLugarAction(Request $request)
    {
        $data = $request->query->all();
        $db = new LugarDB($this->get(Constants::DB_CONN));
        $db->insert($data);

        return $this->redirect('http://localhost:8000/lugares');
    }

    /**
     * @Route("/lugares/edit/{id}")
     */
    public function getEditLugarAction($id)
    {
        $db = new LugarDB($this->get(Constants::DB_CONN));
        $lugar = $db->findById($id);
        return $this->render('lugar/editLugar.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'lugar' => $lugar,
        ]);
    }

    /**
     * @Route("/lugares/update")
     *
     * @Method("POST")
     *
     */
    public function editLugarAction(Request $request)
    {
        $data = $request->query->all();
        $db = new LugarDB($this->get(Constants::DB_CONN));
        $db->edit($data);

        return $this->redirect('http://localhost:8000/lugares');
    }

    /**
     * @Route("/lugares/{id}")
     */
    public function getLugarAction($id)
    {
        $db = new LugarDB($this->get(Constants::DB_CONN));
        $lugar = $db->findById($id);

        return $this->render('lugares/viewLugar.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'lugar' => $lugar,
        ]);
    }
}