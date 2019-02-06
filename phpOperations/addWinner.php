<?php
date_default_timezone_set('Asia/Colombo');
include_once 'getData.php';
include_once 'Crud.php';
include_once "phpemail/phpmail.php";



$crud = new Crud();

    $month = $_POST['month'];

    $name = $_POST['name'];

    $pass = sha1($_POST['password']);

    $email = $_POST["email"]; 

    $bodyForWinner = '<!DOCTYPE html>
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
                <td bgcolor="#ffffff" align="center" valign="top" style=\'padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;background-image:url("http://www.uomleos.org/wp-content/uploads/2018/04/winner-back.gif");\'>
                  <img alt="Logo" src="https://www.quizzypop.uomleos.org/assets/images/winner/winner_throphy.png" style=\'margin-bottom:20px;display: block; width: 150px; max-width: 150px; min-width: 150px; font-family: "Lato", Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;\' border="0">
                  <h1 style="font-size: 40px; font-weight: 400; margin: 0;">CONGRATULATIONS!</h1>
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
                      <p style="margin: 0;"><b>Dear '.$name.',</b><br><br>We happy to say, you have selected as the winner of the <b>Quizzypop</b> month <b>'.$month.'</b>. <br>We will send your <b>Sarasavi Gift Voucher</b> in near future.</p>
                      <br>
                     
                    </td>
                  </tr>
                  <tr>
                <td bgcolor="#ffffff" align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <td align="center" style="border-radius: 3px;" bgcolor="#f4a31c"><a href="https://www.quizzypop.uomleos.org/" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #f4a31c; display: inline-block;">Got QuizzyPop</a></td>
                          </tr>
                        </table>
                      </td>
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

    $target_dir = "winners/";
    $target_file = $target_dir . "/winner.jpg";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit2"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
                        echo '<script type="text/javascript" >
                        alert("Only Image Files are allowed here");
                        window.location.href="../editor/index.php";
                   </script>';
         
            $uploadOk = 0;
        }
    }

    // Allow certain file formats
    if($imageFileType != "jpg") {
                        echo '<script type="text/javascript" >
                        alert("Sorry, only JPG, JPEG files are allowed.");
                        window.location.href="../editor/index.php";
                   </script>';
        
        $uploadOk = 0;
    }

    $file = $_FILES["photo"]['tmp_name'];
    list($width, $height) = getimagesize($file);
    if ($width != $height){
        $uploadOk = 0;
                        echo ' <script type="text/javascript" >
                            alert("Need to upload 1:1 aspect ratio image");
                             window.location.href="../editor/index.php";
                        </script>';
    }

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
    $years = array(
        '2018',
        '2019',
        '2020',
        '2021',
        '2022',
        '2023',
        '2024',
        '2025',
    );
    if($month!="" ||  $name !="" || $email !=""){
        if(in_array(strtoupper($month),$months)){

            if($pass==sha1("quizzypop@uomleos")){
                if ($uploadOk != 0) {
                    $delete_table = 'TRUNCATE TABLE quizzypop_winner';
                    $crud->execute($delete_table);
                    $files = glob('winners/*'); //get all file names
                    foreach($files as $file){
                        if(is_file($file))
                        unlink($file); //delete file
                    }
                    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
                    $addQuery = "INSERT INTO quizzypop_winner VALUES ('{$name}','{$month}')";
                    if ($crud->execute($addQuery)){
                        if(!sendMail($email,"Notify UoM Leos QuizzyPop Winner",$bodyForWinner)){

                        echo ' <script type="text/javascript" >
                            alert("Winner Added Successfully !");
                             window.location.href="../editor/index.php";
                        </script>';
                        }

                    }
                }else{
                        echo ' <script type="text/javascript" >
                            alert("Sorry, your file was not uploaded.");
                             window.location.href="../editor/index.php";
                        </script>
                        ';
                    
                }

            }else{
                
                echo ' <script type="text/javascript" >
                            alert("Quizzy Pop Editor Password Mismatch!");
                             window.location.href="../editor/index.php";
                        </script>';
                
            }
        }else{
            echo ' <script type="text/javascript" >
                            alert("Please check month you entered!");
                             window.location.href="../editor/index.php";
                        </script>';
   
        }
    }else{
        echo ' <script type="text/javascript" >
                alert("Please enter required data before you submit!");
                 window.location.href="../editor/index.php";
            </script>';
           
    }



?>

