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
                $bodyForUom = 
                "<h2>QuizzyPop Answer Submission through Website</h2>
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
                
                
                $bodyForSubmitter = '
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
    
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }

    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    /* MOBILE STYLES */
    @media screen and (max-width:600px){
        h1 {
            font-size: 32px !important;
            line-height: 32px !important;
        }
    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- LOGO -->
    <tr>
        <td bgcolor="#FFA73B" align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                        <a href="http://quizzypop.uomleos.org/" target="_blank">
                            <img alt="Logo" src="http://quizzypop.uomleos.org/assets/images/quizzy_logo.png" width="80" height="80" style="display: block; width: 300px; max-width: 300px; min-width: 300px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;" border="0">
                        </a>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- HERO -->
    <tr>
        <td bgcolor="#FFA73B" align="center" style="padding: 0px 10px 0px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                      <h1 style="font-size: 40px; font-weight: 400; margin: 0;">Submitted Successfully!</h1>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
              <!-- COPY -->
              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family:  Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                  <p style="margin: 0;"><b>Dear '.$name.',</b><br><br>Your Answer successfully submitted for QuizzyPop month '.$month.' in below order,</p>
                  <br>
                  <table style="text-align: left;margin-left:26%;">
                    <tr>
                      <th>QuizzyPop Month</th>
                      <td>:&nbsp;</td>
                      <td>'.$month.'</td>
                    </tr>
                    <tr>
                      <th>Submitter</th>
                      <td>:&nbsp;</td>
                      <td>'.$name.'</td>
                    </tr>
                    <tr>
                      <th>Contact No</th>
                      <td>:&nbsp;</td>
                      <td>'.$contactNo.'</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>:&nbsp;</td>
                      <td>'.$email.'</td>
                    </tr>
                    <tr>
                      <th>Answer</th>
                      <td>:&nbsp;</td>
                      <td>'.$answer.'</td>
                    </tr>
                </table>   
                </td>
              </tr>

              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family:  Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;">Thank You for Being with QuizzyPop.</p>
                </td>
              </tr>
              
              <!-- COPY -->
              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family:  Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                  <p style="margin: 0;">Editorial team,<br>Leo Club of University of Moratuwa.<br>Leo District 306 A2 | Sri Lanka<br></p>
                </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- SUPPORT CALLOUT -->
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
                <!-- HEADLINE -->
                <tr>
                  <td bgcolor="#FFECD1" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family:  Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <h2 style="font-size: 20px; font-weight: 400; color: #111111; margin: 0 0 5px 0;">&copy; <a href="https://www.quizzypop.uomleos.org/">Quizzy Pop</a> 2018 @ <a href="http://www.uomleos.org/">UoM Leos</a>. All right reserved.</h2>
                    <p style="margin: 0;font-size:12px;"><a href="http://www.uomleos.org"><img src="https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/dribbble-24.png"></a>
                        <a href="https://www.facebook.com/uomleos"><img src="https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/facebook-24.png"></a>
                        <a href="https://www.linkedin.com/company/uomleos"><img src="https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/linkedin-24.png"></a>
                        <a href="https://www.youtube.com/uomleos"><img src="https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/youtube-24.png"></a>
                        <a href="https://twitter.com/uomleos"><img src="https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/twitter-24.png"></a>
                        <a href="https://plus.google.com/+UOMLeos"><img src="https://cdn0.iconfinder.com/data/icons/free-social-media-set/24/google-plus-24.png"></a></p>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>
    
</body>
</html>


 ';

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