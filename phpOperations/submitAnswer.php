<?php
/**
 * Created by PhpStorm.
 * User: Thilina Prasad
 * Date: 12/21/2017
 * Time: 8:00 PM
 */
include_once "phpemail/phpmail.php";

$month = $_POST['month'];
$name = $_POST['name'];
$contactNo = $_POST['contact'];
$email = $_POST['email'];
$answer = $_POST['msg'];


if($month=="" || $name =="" || $contactNo =="" || $email == "" || $answer==""){
    echo "Please complete form before submitting";
}else{
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

    if(in_array(strtoupper($month),$months)){
        if (strlen($contactNo)==10 && ctype_digit($contactNo)){
            if(strpos($email,"@") && strpos(@$email,".com")){
                $subjectForUom = "QuizzyPop answer submission for month ".ucfirst($month);
                $subjectForSubmitter="QuizzyPop Answer Submission";
                $bodyForUom = "<h2>QuizzyPop Answer Submission through Website</h2>
  <table class=\"table table-hover\">
      <tr>
        <th>QuizzyPop Month : </th>
        <td>{$month}</td>
      </tr>
      <tr>
        <th>Submitter : </th>
        <td>{$name}</td>
      </tr>
      <tr>
        <th>Contact No : </th>
        <td>{$contactNo}</td>
      </tr>
      <tr>
        <th>Email : </th>
        <td>{$email}</td>
      </tr>
      <tr>
        <th>Answer : </th>
        <td>{$answer}</td>
      </tr>
  </table>               
                ";
                $bodyForSubmitter = "
                <img src='http://quizzypop.uomleos.org/assets/images/quizzy_logo.png'>
                <br>
                Dear {$name} , <br> <h3>Your Answer successfully submitted for QuizzyPop month {$month} in below order</h3>
 <table class=\"table table - hover\">
      <tr>
        <th>QuizzyPop Month : </th>
        <td>{$month}</td>
      </tr>
      <tr>
        <th>Submitter : </th>
        <td>{$name}</td>
      </tr>
      <tr>
        <th>Contact No : </th>
        <td>{$contactNo}</td>
      </tr>
      <tr>
        <th>Email : </th>
        <td>{$email}</td>
      </tr>
      <tr>
        <th>Answer : </th>
        <td>{$answer}</td>
      </tr>
  </table>   
  <br>
 Thank You for Being with QuizzyPop.<br><br>Editorial team,<br>Leo Club of University of Moratuwa.<br>Leo District 306 A2 | Sri Lanka<br>
 <a href='http://www.uomleos.org'><img src='https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/dribbble-24.png'></a>
 <a href='https://www.facebook.com/uomleos'><img src='https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/facebook-24.png'></a>
 <a href='https://www.linkedin.com/company/uomleos'><img src='https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/linkedin-24.png'></a>
 <a href='https://www.youtube.com/uomleos'><img src='https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/youtube-24.png'></a>
 <a href='https://twitter.com/uomleos'><img src='https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/twitter-24.png'></a>
 <a href='https://plus.google.com/+UOMLeos'><img src='https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/google-plus-24.png'></a>
 ";

                if(!sendMail('uomleoclub@gmail.com',$subjectForUom,$bodyForUom)){
                    if(!sendMail($email,$subjectForUom,$bodyForSubmitter)){
                        echo "Answer Submitted Successfully!";
                    }
                }else{
                    echo "Error happened while Submitting ! Please try again !";
                }
            }else{
                echo "Please check email address you entered!";
            }
        }else{
            echo "Please check contact number you entered!";
        }
    }else{
        echo "Please check month you entered!";
    }
}

?>