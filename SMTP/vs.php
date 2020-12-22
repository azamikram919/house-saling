<?php

#    require 'PHPMailer.php';

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.hbiplhb.com"; // Your SMTP PArameter
    $mail->Port = 465; // Your Outgoing Port
    $mail->SMTPAuth = true; // This Must Be True
    $mail->Username = "admin@hbiplhb.com"; // Your Email Address
    $mail->Password = "H1dd3n@123"; // Your Password
    $mail->SMTPSecure = 'ssl'; // Check Your Server's Connections for TLS or SSL

    $mail->From = "admin@hbiplhb.com";
    $mail->FromName = $name;
    $mail->AddAddress("vasim.sheikh@hiddenbrains.in");

    $mail->IsHTML(true);

    $mail->Subject = $subject;

    $mail->Body = $mail_body = "<html> <body>";
    $mail_body = "<b>Hello Admin,</b><br><br>You have got email from your website.<br><br>";
    $mail_body .= '<table style="" cellpadding="3">';
    $mail_body .= "
                    <tr>
                    <td width='50'> <strong> Name </strong> </td>
                    <td width='5'> : </td>
                    <td> $name </td>
                    </tr>
                    <tr>
                    <td> <strong> Email </strong> </td>
                    <td> : </td>
                    <td> $email </td>
                    </tr>
                    <tr>
                    <td> <strong> Message </strong> </td>
                    <td> : </td>
                    <td> $message </td>
                    </tr>
                    </table>
                    </body> </html>"; 

    if(!$mail->Send())
    {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
        echo 'success';
    }

    ?>
