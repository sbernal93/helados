<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 05/01/16
 * Time: 06:54 AM
 */

namespace AppBundle\Controller;

use AppBundle\Model\Constants;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\SucursalDB;

class SucursalController extends Controller
{

    /**
     * @Route("/sucursales")
     */
    public function getSucursalesAction()
    {
        $db = new SucursalDB($this->get('database_connection'));
        $sucursales = $db->findAll();

        return $this->render('sucursales/sucursales.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'sucursales' => $sucursales,
        ]);
    }

    /**
     * @Route("/sucursales/create")
     */
    public function createSurcursalAction()
    {
        return $this->render('sucursales/newSucursal.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/sucursales/delete/{id}")
     */
    public function deleteSucursalAction($id)
    {
        $db = new SucursalDB($this->get('database_connection'));
        $db->deleteById($id);

        $sucursales = $db->findAll();

        return $this->redirect('http://localhost:8000/sucursales');
    }

    /**
     * @Route("/sucursales/new")
     *
     * @Method("POST")
     */
    public function newSucursalAction(Request $request)
    {
        $data = $request->query->all();
        $db = new SucursalDB($this->get(Constants::DB_CONN));
        $db->insert($data);

        return $this->redirect('http://localhost:8000/sucursales');
    }

    /**
     * @Route("/sucursales/update")
     *
     * @Method("POST")
     *
     */
    public function editSucursalAction(Request $request)
    {
        $data = $request->query->all();
        $db = new SucursalDB($this->get(Constants::DB_CONN));
        $db->edit($data);

        return $this->redirect('http://localhost:8000/sucursales/'. $data['id']);
    }

    /**
     * @Route("/sucursales/{id}")
     */
    public function getSucursalAction($id)
    {
        $db = new SucursalDB($this->get(Constants::DB_CONN));
        $sucursal = $db->findById($id);
        $pedidos = $db->findPedidos($id);

        return $this->render('sucursales/viewSucursal.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'sucursal' => $sucursal,
            'pedidos' => $pedidos,
        ]);
    }

    /**
     * @Route("/sucursales/edit/{id}")
     */
    public function getEditSucursalAction($id)
    {
        $db = new SucursalDB($this->get(Constants::DB_CONN));
        $sucursal = $db->findById($id);
        return $this->render('sucursales/editSucursal.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'sucursal' => $sucursal,
        ]);
    }




}