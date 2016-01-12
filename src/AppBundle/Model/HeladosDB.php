<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 11/01/16
 * Time: 07:42 AM
 */

namespace AppBundle\Model;


use AppBundle\Interfaces\DBConnection;
use Symfony\Component\DependencyInjection\Tests\Compiler\H;

class HeladosDB implements DBConnection
{
    const FIND_ALL = "SELECT * FROM PRODUCTO";
    const FIND_MAX_ID_PRODUCTO = "SELECT MAX(PRO_ID) FROM PRODUCTO";
    const FIND_BY_ID = "SELECT * FROM PRODUCTO WHERE PRO_ID = ?";
    const FIND_PROMOCIONES = "SELECT pp.*, prom.* FROM PRODUCTO_PROMOCION pp, PROMOCION prom WHERE pp.fk_producto = ? AND prom.pr_id = pp.fk_promocion";
    const UPDATE_PRODUCTO = "UPDATE PRODUCTO SET PRO_NOMBRE = ?, PRO_TIPO = ?, PRO_DESCRIPCION = ?, PRO_CANT_BOL = ?
WHERE PRO_ID = ?";
    const FIND_MAX_ID_PRODUCTO_PROMOCION = "SELECT MAX(PRP_ID) FROM PRODUCTO_PROMOCION";
    const FIND_MAX_ID_PROMOCION = "SELECT MAX(PR_ID) FROM PROMOCION";

    private $conn;

    /**
     * @param $db
     */
    function __construct($db)
    {
        $this->conn = $db;
    }

    public function findById($id)
    {
        return $this->conn->fetchAssoc(HeladosDB::FIND_BY_ID,array($id));
    }

    public function findAll()
    {
        return $this->conn->fetchAll(HeladosDB::FIND_ALL);
    }

    public function insert($fields)
    {
        $insertData = [];
        $insertData[ConstantsTableInfo::PRO_ID] =  intval($this->conn->fetchAssoc(HeladosDB::FIND_MAX_ID_PRODUCTO)['max']) + 1;
        $insertData[ConstantsTableInfo::PRO_NOMBRE] = $fields['name'];
        $insertData[ConstantsTableInfo::PRO_TIPO] = $fields['tipo'];
        $insertData[ConstantsTableInfo::PRO_DESCRIPCION] = $fields['descripcion'];
        $insertData[ConstantsTableInfo::PRO_CANT_BOL] = intval($fields['bolas']);
        $this->conn->insert(ConstantsTableInfo::PRODUCTO, $insertData);
    }

    public function edit($fields)
    {
        $this->conn->executeUpdate(HeladosDB::UPDATE_PRODUCTO, array($fields['name'],
            $fields['tipo'], $fields['descripcion'], $fields['bolas'],
            intval($fields['id'])));
    }

    public function deleteById($id)
    {
        $this->conn->delete(ConstantsTableInfo::PRODUCTO, array(ConstantsTableInfo::PRO_ID => $id));
    }

    public function findPromociones($id)
    {
        return $this->conn->fetchAll(HeladosDB::FIND_PROMOCIONES, array($id));
    }

    public function insertPromocion($fields)
    {
        $insertData = [];
        $promoId = intval($this->conn->fetchAssoc(HeladosDB::FIND_MAX_ID_PROMOCION)['max']) + 1;
        $insertData[ConstantsTableInfo::PR_ID] = $promoId;
        $insertData[ConstantsTableInfo::PR_PORC_DESC] = intval($fields['porcdesc']);
        $insertData[ConstantsTableInfo::PR_DESCRIPCION] = $fields['descripcion'];
        $this->conn->insert(ConstantsTableInfo::PROMOCION, $insertData);
        $insertData = [];
        $insertData[ConstantsTableInfo::PRP_ID] = intval($this->conn->fetchAssoc(HeladosDB::FIND_MAX_ID_PRODUCTO_PROMOCION)['max']) + 1;
        $insertData[ConstantsTableInfo::PRP_FECHA_INI] = $fields['fechainic'];
        $insertData[ConstantsTableInfo::PRP_FECHA_FIN] = $fields['fechafin'];
        $insertData[ConstantsTableInfo::FK_PROMOCION] = $promoId;
        $insertData[ConstantsTableInfo::FK_PRODUCTO] = $fields['id'];
        $this->conn->insert(ConstantsTableInfo::PRODUCTO_PROMOCION, $insertData);

    }

}