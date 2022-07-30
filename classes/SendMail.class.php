<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class SendMail {
    
    public function sendApprovalEmail($email, $firstName, $lastName, $userName) {
        $mail = new PHPMailer(true);
        $template_file = $_SERVER['DOCUMENT_ROOT'].'/includes/confirmationEmail.inc.php';

        if(!file_exists($template_file)) {
            header('Location: /admin/pending?error=No template file located.');
            exit();
        }

        try {
            $swap_var = array(
                "{USERNAME}" => $userName,
                "{FIRSTNAME}" => $firstName,
                "{LASTNAME}" => $lastName
            );

            //Server settings
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'emerjoerosas778@gmail.com';                     
            $mail->Password   = 'cctmianolhlkxyrs';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
            $mail->Port       = 587;                                    

            //Sent from
            $mail->setFrom('emerjoerosas778@gmail.com', 'NEUST Clinic');

            //Sent to
            $mail->addAddress($email);               
            $mail->addReplyTo('noreply@noreply.com');
            

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Your account has been approved';
            $mail->Body    = file_get_contents($template_file);
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


            foreach(array_keys($swap_var) as $key) {
                if (strlen($key) > 2 && trim($key) != "") {
                    $mail->Body = str_replace($key, $swap_var[$key], $mail->Body);
                }
            }


            $mail->send();
            $msg = 'Message has been sent';
        } catch (Exception $e) {
            $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function sendPasswordResetEmail($email, $firstName, $lastName, $userName, $url) {
        $mail = new PHPMailer(true);
        $reset_template_file = $_SERVER['DOCUMENT_ROOT'].'/includes/passwordResetEmail.inc.php';


        if(!file_exists($reset_template_file)) {
            header('Location: /reset?error=No template file located.');
            exit();
        }

        try {

            $swap_var = array(
                "{USERNAME}" => $userName,
                "{FIRSTNAME}" => $firstName,
                "{LASTNAME}" => $lastName,
                "{URL}" => $url
            );

            //Server settings
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.gmail.com';     
            $mail->SMTPAuth   = true;                         
            $mail->Username   = 'emerjoerosas778@gmail.com';                 
            $mail->Password   = 'cctmianolhlkxyrs';                             
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
            $mail->Port       = 587;                            

            //Sent from
            $mail->setFrom('emerjoerosas778@gmail.com', 'NEUST Clinic');

            //Sent to
            $mail->addAddress($email);
            $mail->addReplyTo('noreply@noreply.com');
            

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Reset your password for NEUST Clinic';
            $mail->Body    = file_get_contents($reset_template_file);
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


            foreach(array_keys($swap_var) as $key) {
                if (strlen($key) > 2 && trim($key) != "") {
                    $mail->Body = str_replace($key, $swap_var[$key], $mail->Body);
                }
            }

            $mail->send();
            $msg = 'Message has been sent';
        } catch (Exception $e) {
            $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}