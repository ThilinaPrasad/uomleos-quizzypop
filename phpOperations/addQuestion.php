<?php
date_default_timezone_set('Asia/Colombo');
include_once 'getData.php';
include_once 'Crud.php';
$crud = new Crud();

    $month = $_POST['month'];
    $question = $_POST['question'];
    $up_date = date("j M Y, g:i A");
    $pass = sha1($_POST['password']);

    $months = array(
        'JANUARY',
        'FEBRUARY',
        'MARCH',
        'APRIL',
        'MAY',
        'JUNE',
        'JULY ',
        'AUGUST',
        'SEPTEMBER',
        'OCTOBER',
        'NOVEMBER',
        'DECEMBER'
    );
    if($month!="" || $question !=""){
        if(in_array(strtoupper($month),$months)){
            if($pass==sha1("quizzypop@uomleos")){
                $deleteQuery = "DELETE FROM quizzypop_data";

                if($crud->execute($deleteQuery)){
                    $addQuery = "INSERT INTO quizzypop_data VALUES ('{$month}','{$question}','{$up_date}')";
                    if ($crud->execute($addQuery)){
                        echo "Question Added Successfully !";
                    }
                }else{
                    echo "Error Happened while Adding Data. So, Please Try Again !";
                }

            }else{
                echo "Quizzy Pop Editor Password Mismatch!";
            }
        }else{
            echo "Please check month you entered!";    
        }
    }else{
        echo "Please enter required data before you submit!";            
    }

?>

