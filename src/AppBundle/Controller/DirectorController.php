<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 11/01/16
 * Time: 11:34 AM
 */

namespace AppBundle\Controller;


use AppBundle\Model\Constants;
use AppBundle\Model\DirectorDB;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DirectorController extends Controller
{

    /**
     * @Route("/directores")
     */
    public function getDirectoresAction()
    {
        $db = new DirectorDB($this->get(Constants::DB_CONN));
        $directores = $db->findAll();

        return $this->render('directores/directores.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'directores' => $directores,
        ]);
    }

    /**
     * @Route("/directores/delete/{id}")
     */
    public function deleteDirectorAction($id)
    {
        $db = new DirectorDB($this->get('database_connection'));
        $db->deleteById($id);


        return $this->redirect('http://localhost:8000/directores');
    }

    /**
     * @Route("/directores/create")
     */
    public function createDirectorAction()
    {
        return $this->render('directores/newDirector.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/directores/new")
     *
     * @Method("POST")
     */
    public function newDirectorAction(Request $request)
    {
        $data = $request->query->all();
        $db = new DirectorDB($this->get(Constants::DB_CONN));
        $db->insert($data);

        return $this->redirect('http://localhost:8000/directores');
    }

    /**
     * @Route("/directores/edit/{id}")
     */
    public function getEditDirectorAction($id)
    {
        $db = new DirectorDB($this->get(Constants::DB_CONN));
        $director = $db->findById($id);
        return $this->render('directores/editDirector.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'director' => $director,
        ]);
    }

    /**
     * @Route("/directores/update")
     *
     * @Method("POST")
     *
     */
    public function editDirectorAction(Request $request)
    {
        $data = $request->query->all();
        $db = new DirectorDB($this->get(Constants::DB_CONN));
        $db->edit($data);

        return $this->redirect('http://localhost:8000/directores');
    }

    /**
     * @Route("/directores/{id}")
     */
    public function getDirectorAction($id)
    {
        $db = new DirectorDB($this->get(Constants::DB_CONN));
        $director = $db->findById($id);

        return $this->render('directores/viewDirector.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'director' => $director,
        ]);
    }
}