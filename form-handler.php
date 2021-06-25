<?php
$name = $_POST[''];
$Visitors_email = $_POST[''];
$Subject = $_POST[''];
$Message = $_POST[''];

$email_from = '1by18cs197@bmsit.in';

$email_subject = 'New Form Submission';

$email_body = "user Name: $Name.\n".
              "user Email: $Visistor_email.\n".
              "user Subject: $Subject.\n".
              "user message: $Message.\n";

$to = 'kn.of.pw@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $Visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>