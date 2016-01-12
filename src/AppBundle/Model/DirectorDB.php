<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 11/01/16
 * Time: 11:31 AM
 */

namespace AppBundle\Model;


use AppBundle\Interfaces\DBConnection;

class DirectorDB implements DBConnection
{
    const FIND_ALL = "SELECT * FROM DIRECTOR";
    const FIND_BY_ID = "SELECT di.*, lo.lu_nombre as ciudad, lt.lu_nombre as pais FROM DIRECTOR di
LEFT OUTER JOIN LUGAR lo ON di.FK_LUGAR = lo.LU_ID
LEFT OUTER JOIN LUGAR lt ON lo.FK_LUGAR = lt.LU_ID
WHERE DI_CEDULA = ?";
    const UPDATE_DIRECTOR = "UPDATE DIRECTOR SET DI_CEDULA = ?, DI_NOMBRE = ?, DI_APELLIDO = ?,
DI_CORREO = ?, DI_SEG_NOM = ?, DI_SEG_APE = ?, DI_FECHA_ING = ?, DI_PAIS_NACIM = ? WHERE DI_CEDULA = ?";
    const FIND_MAX_ID_LUGAR = "SELECT MAX(LU_ID) FROM LUGAR";
    const FIND_PLACE_BY_NAME = "SELECT * FROM LUGAR WHERE LU_NOMBRE = ?";

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
        return $this->conn->fetchAssoc(DirectorDB::FIND_BY_ID,array($id));
    }

    public function findAll()
    {
        return $this->conn->fetchAll(DirectorDB::FIND_ALL);
    }

    public function insert($fields)
    {
        $pais = $this->conn->fetchAssoc(DirectorDB::FIND_PLACE_BY_NAME,array($fields['pais']));
        $paisId = null;
        if ($pais == null)
        {
            $insertData = [];
            $paisId = intval($this->conn->fetchAssoc(DirectorDB::FIND_MAX_ID_LUGAR)['max']) + 1;
            $insertData[ConstantsTableInfo::LU_ID] = $paisId;
            $insertData[ConstantsTableInfo::LU_NOMBRE] = $fields['pais'];
            $insertData[ConstantsTableInfo::LU_TIPO] = "Pais";
            $this->conn->insert(ConstantsTableInfo::LUGAR, $insertData);
        }
        else
        {
            $paisId = $pais[ConstantsTableInfo::LU_ID];
        }
        $city = $this->conn->fetchAssoc(DirectorDB::FIND_PLACE_BY_NAME,array($fields['ciudad']));
        $cityId = null;
        $cityExists = false;
        if($city == null)
        {
            $insertData = [];
            $cityId = $this->conn->fetchAssoc(DirectorDB::FIND_MAX_ID_LUGAR);
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
        $insertData[ConstantsTableInfo::DI_CEDULA] =  intval($fields['cedula']);
        $insertData[ConstantsTableInfo::DI_NOMBRE] = $fields['nombre'];
        $insertData[ConstantsTableInfo::DI_APELLIDO] = $fields['apellido'];
        $insertData[ConstantsTableInfo::DI_CORREO] = $fields['correo'];
        $insertData[ConstantsTableInfo::DI_SEG_NON] = $fields['segundonombre'];
        $insertData[ConstantsTableInfo::DI_SEG_APE] = $fields['segundoapellido'];
        $insertData[ConstantsTableInfo::DI_PAIS_NACIM] = $fields['pasinacimiento'];
        $insertData[ConstantsTableInfo::DI_FECHA_ING] = $fields['fechaingreso'];

        if($cityExists)
        {
            $insertData[ConstantsTableInfo::FK_LUGAR] = $cityId;
        }
        else {
            $insertData[ConstantsTableInfo::FK_LUGAR] = intval($cityId['max']) + 1;
        }
        $this->conn->insert(ConstantsTableInfo::DIRECTOR, $insertData);
    }

    public function edit($fields)
    {
        $this->conn->executeUpdate(DirectorDB::UPDATE_DIRECTOR, array(intval($fields['cedula']),
            $fields['nombre'],  $fields['apellido'], $fields['correo'], $fields['segundonombre'],
            $fields['segundoapellido'], $fields['fechaingreso'], $fields['pasinacimiento'],
            $fields['cedulaOriginal']));
    }

    public function deleteById($id)
    {
        $this->conn->delete(ConstantsTableInfo::DIRECTOR, array(ConstantsTableInfo::DI_CEDULA => $id));
    }

}