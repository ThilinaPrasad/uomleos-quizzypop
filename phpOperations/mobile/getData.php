<?php
/**
 * Created by PhpStorm.
 * User: Thilina Prasad
 * Date: 12/21/2017
 * Time: 5:26 PM
 */include_once ("../Crud.php");

$crud= new Crud();

$query="SELECT * From quizzypop_data";
$data=$crud->getData($query);

    echo json_encode($data[0]);
?>