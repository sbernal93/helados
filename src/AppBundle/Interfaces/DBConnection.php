<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 01/01/16
 * Time: 05:54 PM
 */

namespace AppBundle\Interfaces;


interface DBConnection
{
    public function findById($id);

    public function findAll();

    public function insert($fields);

    public function edit($fields);

    public function deleteById($id);
}