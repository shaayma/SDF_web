<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../Addons/PHPMailer/src/Exception.php';
require '../Addons/PHPMailer/src/PHPMailer.php';
require '../Addons/PHPMailer/src/SMTP.php';

require 'config.php';

var_dump($_FILES['Mail_File']);





if (!empty($_POST['Mail_Body']) && !empty($_POST['Mail_Title']))
{
  $sql='select Email from client';
  $db=config::getConnexion();
  try{ 
      $Array=$db->query($sql);
     print_r($Array);
  }
  catch(Exception $e)
  {
    die ($e->getMessage());
  }
  foreach ($Array as $row)
  {
    $mail= new PHPMailer();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fantazya.tn@gmail.com';                     // SMTP username
    $mail->Password   = 'fantazya123456789';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

   // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['Mail_Title'];
    $mail->Body    = $_POST['Mail_Body'];
    if (isset($_FILES['Mail_File']['name']) && $_FILES['Mail_File']['name']!="")
    {$file="attachment/".basename($_FILES['Mail_File']['name']);
    move_uploaded_file($_FILES['Mail_File']['tmp_name'],$file);
    var_dump($file);
    var_dump($_FILES['Mail_File']['name']);
    $mail->addEmbeddedImage($file,'logoimg',$_FILES['Mail_File']['name']);
    $mail->Body .= "<p><img src='cid:logoimg'  height='480' width='720'/></p>";
   
  }
   
    
    
    $mail->setFrom('gmail@gmail.com');
     //Recipients
   
     $mail->addAddress($row['Email']); }
     
     var_dump($row['Email']);
     
if(!$mail->Send()) {
    $error = 'Mail error: '.$mail->ErrorInfo;
     
}   

if (isset($_FILES['Mail_File']['name']) && $_FILES['Mail_File']['name']!="")
{unlink($file);}
}


 echo("<script> document.location='../views/promotion.php' </script>");


 







?>