<?php
/**
 * Created by PhpStorm.
 * User: Thilina Prasad
 * Date: 12/21/2017
 * Time: 5:26 PM
 */include_once ("Crud.php");

$crud= new Crud();

$query="SELECT * From quizzypop_data";
$data=$crud->getData($query);
if(!$data){
    $data = array(array( "month" => "Month Not Set <i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i>",
        "question" => "Not Added Yet! <i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> Please Add Question Using Below Form <i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i>"));
}
//print_r($data);
$messege = "";
?>