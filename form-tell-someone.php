<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

#Receive user input

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$tutorGroup = $_POST['tutor-group'];
$date = $_POST['date'];
$time = $_POST['time'];
$place = $_POST['place'];
$detail = $_POST['detail'];

// Assign info to message to be sent



$message = "<p><strong>First Name: </strong>{$firstName}<br>
<strong>Last Name: </strong>{$lastName}<br>
<strong>Tutor Group: </strong>{$tutorGroup}<br>  
<strong>Date of Incident: </strong>{$date}<br>  
<strong>Time of Incident: </strong>{$time}<br>  
<strong>Location of Incident: </strong>{$place}<br>  
<strong>Detail: </strong>{$detail}<br>  
 
";

$mail = new PHPMailer();                              // Passing `true` enables exceptions

    //Server settings
	    //Server settings
#	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
#	    $mail->isSMTP();                                            // Send using SMTP
#	    $mail->Host       = 'smtp.123-reg.co.uk';                    // Set the SMTP server to send through
#	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
#	    $mail->Username   = 'no-reply@kowessex.co.uk';                     // SMTP username
#	    $mail->Password   = 'Gibson#22';                               // SMTP password
#	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
#	    $mail->Port       = 465;                                    // TCP port to connect to
	    
	    //Recipients
	    $mail->setFrom('no-reply@kowessex.co.uk', 'New Safeguarding Incident');
	    $mail->addAddress('tellsomeone@kowessex.co.uk', 'Safeguarding Incident');     // Add a recipient
#	    $mail->addAddress('ellen@kowessex.co.uk');               // Name is optional
#	    $mail->addReplyTo('info@kowessex.co.uk', 'Information');
#	    $mail->addCC('cc@kowessex.co.uk');
#	    $mail->addBCC('jcorney@kowessex.co.uk');
	    
	    // Attachments
#	    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
#	    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name





    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New "Tell Someone" Incident';
    $mail->Body = $message;

        //send the message, check for errors
    
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }

?>