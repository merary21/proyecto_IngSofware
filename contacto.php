<?php

include ("Mailer/src/PHPMailer.php");
include("Mailer/src/SMTP.php");
include("Mailer/src/Exception.php");



try {

    $emailTo = $_POST["correo"];
    $subject = $_POST["asunto"];
    $bodyEmail = $_POST["mensaje"];
    
    $fromemail = "julissa21araujo@gmail.com";
    $fromname = "Julissa";
    $host ="smtp.gmail.com";
    $port ="587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "hwqa bauw rmjp lhrk";
    
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port= $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure= $SMTPSecure;
    $mail->Username = $fromemail;
    $mail->Password = $password;
    
    
    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($emailTo);

    //asunto
    $mail->isHTML(true);
    $mail->Subject = $subject;
    //mensaje
    $mail->Body = $bodyEmail;


    if (!$mail->send()) {
        echo "No se envio el correo"; die();
    

        }
        echo "Correo enviado con exito"; die();
        
    } catch (Exception $e) {

   }
    

?>
