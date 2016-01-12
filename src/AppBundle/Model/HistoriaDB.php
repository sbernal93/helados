<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 12/01/16
 * Time: 08:31 AM
 */

namespace AppBundle\Model;


use AppBundle\Interfaces\DBConnection;

class HistoriaDB implements DBConnection
{
    const FIND_ALL = "SELECT * FROM HISTORIA";
    const FIND_BY_ID = "SELECT * FROM HISTORIA WHERE HI_ID = ?";
    const UPDATE_HISTORIA = "UPDATE HISTORIA SET HI_ID = ?, HI_EVENTO = ?, HI_FECHA = ? WHERE HI_ID = ?";
    const FIND_MAX_ID_HISTORIA = "SELECT MAX(HI_ID) FROM HISTORIA";

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
        return $this->conn->fetchAssoc(HistoriaDB::FIND_BY_ID,array($id));
    }

    public function findAll()
    {
        return $this->conn->fetchAll(HistoriaDB::FIND_ALL);
    }

    public function insert($fields)
    {
        $insertData = [];
        $insertData[ConstantsTableInfo::HI_ID] = intval($this->conn->fetchAssoc(HistoriaDB::FIND_MAX_ID_HISTORIA)['max']) + 1;
        $insertData[ConstantsTableInfo::HI_EVENTO] = $fields['evento'];
        $insertData[ConstantsTableInfo::HI_FECHA] = $fields['fecha'];
        $this->conn->insert(ConstantsTableInfo::HISTORIA, $insertData);
    }

    public function edit($fields)
    {
        $this->conn->executeUpdate(HistoriaDB::UPDATE_HISTORIA, array(intval($fields['newid']),
            $fields['evento'],  $fields['fecha'], intval($fields['id']) ));
    }

    public function deleteById($id)
    {
        $this->conn->delete(ConstantsTableInfo::HISTORIA, array(ConstantsTableInfo::HI_ID => $id));
    }

}