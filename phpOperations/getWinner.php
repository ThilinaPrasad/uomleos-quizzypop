<?php
/**
 * Created by PhpStorm.
 * User: Thilina Prasad
 * Date: 12/21/2017
 * Time: 5:26 PM
 */include_once ("Crud.php");

$crud= new Crud();

$query="SELECT * From quizzypop_winner";
$winner_data=$crud->getData($query);
if(!$data){
    $winnner_data = null;
}
//print_r($data);
$messege = "";
?>