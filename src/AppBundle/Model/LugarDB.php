<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 12/01/16
 * Time: 01:58 PM
 */

namespace AppBundle\Model;


use AppBundle\Interfaces\DBConnection;

class LugarDB implements DBConnection
{
    const FIND_LUGAR_BY_NAME = "SELECT * FROM LUGAR WHERE LU_NOMBRE = ?";
    const FIND_BY_ID = "SELECT lu.*, lt.LU_NOMBRE as pais FROM LUGAR lu
LEFT OUTER JOIN LUGAR lt ON lu.FK_LUGAR = lt.LU_ID
WHERE lu.LU_ID = ?";
    const FIND_ALL = "SELECT *FROM LUGAR";
    const UPDATE_LUGAR_WITH_FK = "UPDATE LUGAR SET LU_ID = ?, LU_NOMBRE = ?, LU_TIPO = ?,
LU_UNION_EU = ?, LU_TEMPORADA = ?, FK_LUGAR = ?";
    const UPDATE_LUGAR = "UPDATE LUGAR SET LU_ID = ?, LU_NOMBRE = ?, LU_TIPO = ?,
LU_UNION_EU = ?, LU_TEMPORADA = ?, FK_LUGAR = ?";
    const FIND_MAX_ID_LUGAR = "SELECT MAX(LU_ID) FROM LUGAR";

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
        return $this->conn->fetchAssoc(LugarDB::FIND_BY_ID,array($id));
    }

    public function findAll()
    {
        return $this->conn->fetchAll(LugarDB::FIND_ALL);
    }

    public function insert($fields)
    {
        $insertData = [];
        if(array_key_exists('pais', $fields) && isset($fields['pais'])) {

            $pais = $this->conn->fetchAssoc(DirectorDB::FIND_PLACE_BY_NAME,array($fields['pais']));
            $paisId = null;
            if ($pais == null)
            {
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

            $insertData = [];
            $insertData[ConstantsTableInfo::FK_LUGAR] = $paisId;
        }

        $insertData[ConstantsTableInfo::LU_ID] = intval($this->conn->fetchAssoc(LugarDB::FIND_MAX_ID_LUGAR)['max']) + 1;
        $insertData[ConstantsTableInfo::LU_NOMBRE] = $fields['nombre'];
        $insertData[ConstantsTableInfo::LU_TIPO] = $fields['tipo'];
        $insertData[ConstantsTableInfo::LU_TEMPORADA] = $fields['temporada'];
        $insertData[ConstantsTableInfo::LU_UNION_EU] = $fields['unioneu'];
        $this->conn->insert(ConstantsTableInfo::HISTORIA, $insertData);
    }

    public function edit($fields)
    {
        if(array_key_exists('pais', $fields) && isset($fields['pais']) ) {

            $pais = $this->conn->fetchAssoc(DirectorDB::FIND_PLACE_BY_NAME, array($fields['pais']));
            $paisId = null;
            if ($pais == null) {
                $paisId = intval($this->conn->fetchAssoc(DirectorDB::FIND_MAX_ID_LUGAR)['max']) + 1;
                $insertData[ConstantsTableInfo::LU_ID] = $paisId;
                $insertData[ConstantsTableInfo::LU_NOMBRE] = $fields['pais'];
                $insertData[ConstantsTableInfo::LU_TIPO] = "Pais";
                $this->conn->insert(ConstantsTableInfo::LUGAR, $insertData);
            } else {
                $paisId = $pais[ConstantsTableInfo::LU_ID];
            }

            $this->conn->executeUpdate(LugarDB::UPDATE_LUGAR_WITH_FK, array(intval($fields['newid']),
                $fields['nombre'],  $fields['tipo'], $fields['temporada'], $fields['unioneu'],
                $paisId, $fields['id']));
        }
        else
        {
            $this->conn->executeUpdate(LugarDB::UPDATE_LUGAR, array(intval($fields['newid']),
                $fields['nombre'],  $fields['tipo'], $fields['temporada'], $fields['unioneu'], $fields['id']));
        }


    }

    public function deleteById($id)
    {
        $this->conn->delete(ConstantsTableInfo::LUGAR, array(ConstantsTableInfo::LU_ID => $id));
    }

}