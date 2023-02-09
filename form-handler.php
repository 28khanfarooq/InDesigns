<?php
$Name = $_POST['Name'];
$visitor_Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Message = $_POST['Message'];


$Email_form = 'InDesign@InDesign.in';


$Email_Subject = 'New Form Submission';


$Email_body = "User Name: $Name.\n".
               "User Email: $visitor_Email.\n".
               "Subject: $Subject.\n".
               "User Message: $Message.\n".;


   $to = '866farooqkhan@gmail.com';
   
   $headers = "From: $Email_from \r\n";

   $headers .= "Replay-To: $visitor_Email \r\n"


   mail($to,$Email_Subject,$Email_body,$headers);


header("Location: contact.html")

?>