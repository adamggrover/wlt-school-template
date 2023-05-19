<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

#Receive user input

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$kingsStudent = $_POST['kings-student'];
$dob = $_POST['date-of-birth'];
$address1 = $_POST['address-line1'];
$address2 = $_POST['address-line2'];
$address3 = $_POST['address-line3'];
$postCode = $_POST['post-code'];
$currentSchool = $_POST['current-school'];
$parentName = $_POST['parent-name'];
$parentPhone = $_POST['parent-phone'];
$parentEmail = $_POST['parent-email'];
$tutorGroup = $_POST['tutor-group'];
$subjects1 = $_POST['subjects1'];
$subjects2 = $_POST['subjects2'];
$subjects3 = $_POST['subjects3'];
$subjects4 = $_POST['subjects4'];
$comments = $_POST['comments'];

$epq = $_POST['epq'];
$lv3maths = $_POST['lv3-maths'];


// Assign info to message to be sent



$message = "<p><strong>First Name: </strong>{$firstName}<br>
<strong>Last Name: </strong>{$lastName}<br>
<strong>Email: </strong>{$email}<br>
<strong>Phone: </strong>{$tel}<br> 
<strong>Current Kings Student: </strong>{$kingsStudent}<br>  
<strong>Date of Birth: </strong>{$dob}<br>  
<strong>Address 1: </strong>{$address1}<br> 
<strong>Address 2: </strong>{$address2}<br>  
<strong>Address 3: </strong>{$address3}<br> 
<strong>Post Code: </strong>{$postCode}<br>  
<strong>Current School: </strong>{$currentSchool}<br>  
<strong>Parent/Gaurdian Name: </strong>{$parentName}<br>  
<strong>Parent/Gaurdian Phone: </strong>{$parentPhone}<br>  
<strong>Parent/Gaurdian Email: </strong>{$parentEmail}<br>  
<strong>Tutor Group: </strong>{$tutorGroup}<br>  
<strong>Subject Choice 1: </strong>{$subjects1}<br>  
<strong>Subject Choice 2: </strong>{$subjects2}<br>  
<strong>Subject Choice 3: </strong>{$subjects3}<br>  
<strong>Subject Choice 4: </strong>{$subjects4}<br>  
<strong>Extra Information: </strong>{$comments}<br>  
<strong>Interested in doing an EPQ: </strong>{$epq}<br>  
<strong>Interested in doing Lv 3 Maths: </strong>{$lv3maths}</p>";



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
	    $mail->setFrom('no-reply@kowessex.co.uk', 'New Sixth Form Application');
	    $mail->addAddress('office@kowessex.co.uk', 'Application');     // Add a recipient
#	    $mail->addAddress('ellen@kowessex.co.uk');               // Name is optional
#	    $mail->addReplyTo('info@kowessex.co.uk', 'Information');
#	    $mail->addCC('cc@kowessex.co.uk');
#	    $mail->addBCC('jcorney@kowessex.co.uk');
	    
	    // Attachments
#	    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
#	    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name





    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Sixth Form Application';
    $mail->Body = $message;

        //send the message, check for errors
    
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }

?>