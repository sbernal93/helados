<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 01/01/16
 * Time: 05:57 PM
 */

namespace AppBundle\Model;


use AppBundle\Interfaces\DBConnection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SucursalDB implements  DBConnection
{
    const FIND_ALL = "SELECT su.*, lo.lu_nombre as ciudad, lt.lu_nombre as pais FROM SUCURSAL su, LUGAR lo, LUGAR lt WHERE su.FK_LUGAR = lo.LU_ID AND lo.FK_LUGAR = lt.LU_ID";
    const FIND_BY_ID = "SELECT su.*, tl.te_numero, lo.lu_nombre as ciudad, lt.lu_nombre as pais
FROM SUCURSAL su
LEFT OUTER JOIN TELEFONO tl ON su.su_id = tl.fk_sucursal
LEFT OUTER JOIN LUGAR lo ON su.FK_LUGAR = lo.LU_ID
LEFT OUTER JOIN LUGAR lt ON lo.FK_LUGAR = lt.LU_ID
WHERE su.su_id = ?";
    const FIND_PLACE_BY_NAME = "SELECT * FROM LUGAR WHERE LU_NOMBRE = ?";
    const FIND_PEDIDO = "SELECT * FROM PEDIDO WHERE FK_SUCURSAL = ?";
    const INSERT_SUCURSAL = "INSERT INTO SUCURSAL VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    const INSERT_LUGAR = "INSERT INTO LUGAR VALUES (?, ?, ?, ?, ?, ?)";
    const FIND_MAX_ID_LUGAR = "SELECT MAX(LU_ID) FROM LUGAR";
    const FIND_MAX_ID_SUCURSAL = "SELECT MAX(SU_ID) FROM SUCURSAL";
    const UPDATE_SUCURSAL = "UPDATE SUCURSAL SET SU_NOMBRE = ? , SU_COD_POST = ?
 , SU_FECHA_APERT = ? , SU_URBANIZACION = ? , SU_CALLE = ? , SU_EDIFICIO = ?
 , SU_REF_DIR = ? WHERE SU_ID = ?";

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
        return $this->conn->fetchAssoc(SucursalDB::FIND_BY_ID,array($id));
    }

    public function findAll()
    {
        return $this->conn->fetchAll(SucursalDB::FIND_ALL);

    }

    public function findPedidos($id)
    {
        return $this->conn->fetchAll(SucursalDB::FIND_PEDIDO, array($id));
    }

    public function insert($fields)
    {
        $pais = $this->conn->fetchAssoc(SucursalDB::FIND_PLACE_BY_NAME,array($fields['pais']));
        $paisId = null;
        if ($pais == null)
        {
            $insertData = [];
            $paisId = $this->conn->fetchAssoc(SucursalDB::FIND_MAX_ID_LUGAR);
            $insertData[ConstantsTableInfo::LU_ID] = intval($paisId['max']) + 1;
            $insertData[ConstantsTableInfo::LU_NOMBRE] = $fields['pais'];
            $insertData[ConstantsTableInfo::LU_TIPO] = "Pais";
            $this->conn->insert(ConstantsTableInfo::LUGAR, $insertData);
        }
        else
        {
            $paisId = $pais[ConstantsTableInfo::LU_ID];
        }
        $city = $this->conn->fetchAssoc(SucursalDB::FIND_PLACE_BY_NAME,array($fields['ciudad']));
        $cityId = null;
        $cityExists = false;
        if($city == null)
        {
            $insertData = [];
            $cityId = $this->conn->fetchAssoc(SucursalDB::FIND_MAX_ID_LUGAR);
            $insertData[ConstantsTableInfo::LU_ID] = intval($cityId['max']) + 1;
            $insertData[ConstantsTableInfo::LU_NOMBRE] = $fields['ciudad'];
            $insertData[ConstantsTableInfo::LU_TIPO] = "Ciudad";
            $insertData[ConstantsTableInfo::FK_LUGAR] = $paisId;
            $this->conn->insert(ConstantsTableInfo::LUGAR, $insertData);
        }
        else
        {
            $cityId = $city[ConstantsTableInfo::LU_ID];
            $cityExists = true;
        }

        $insertData = [];
        $insertData[ConstantsTableInfo::SU_ID] =  intval($this->conn->fetchAssoc(SucursalDB::FIND_MAX_ID_SUCURSAL)['max']) + 1;
        $insertData[ConstantsTableInfo::SU_NOMBRE] = $fields['name'];
        $insertData[ConstantsTableInfo::SU_FECHA_APERT] = $fields['fecha'];
        $insertData[ConstantsTableInfo::SU_COD_POST] = $fields['codigoPostal'];
        $insertData[ConstantsTableInfo::SU_CALLE] = $fields['calle'];
        $insertData[ConstantsTableInfo::SU_EDIFICIO] = $fields['edificio'];
        $insertData[ConstantsTableInfo::SU_URBANIZACION] = $fields['urbanizacion'];
        $insertData[ConstantsTableInfo::SU_REF_DIR] = $fields['referencia'];

        if($cityExists)
        {
            $insertData[ConstantsTableInfo::FK_LUGAR] = $cityId;
        }
        else {
            $insertData[ConstantsTableInfo::FK_LUGAR] = intval($cityId['max']) + 1;
        }
        $this->conn->insert(ConstantsTableInfo::SUCURSAL, $insertData);


    }

    public function edit($fields)
    {
        $this->conn->executeUpdate(SucursalDB::UPDATE_SUCURSAL, array($fields['name'],
            intval($fields['codigoPostal']),  $fields['fecha'], $fields['calle'], $fields['edificio'],
            $fields['urbanizacion'], $fields['referencia'], intval($fields['id'])));
    }

    public function deleteById($id)
    {
        $this->conn->delete(ConstantsTableInfo::SUCURSAL, array(ConstantsTableInfo::SU_ID => $id));
    }

}