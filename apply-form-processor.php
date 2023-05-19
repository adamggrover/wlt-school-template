<?php
  $name = $_POST['first-name'];
  $visitor_email = $_POST['email'];
  
?>

<?php
	$email_from = 'donotreply@kowessex.co.uk';

	$email_subject = "New Sixth Form Application";

	$email_body = "You have received a new sixth form application from $name.\n".
                            "Here is the completed form:"
?>

<?php

  $to = "AGrover@wessexlearningtrust.co.uk";

  $headers = "From: donotreply@kowessex.co.uk \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>

<?php
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>