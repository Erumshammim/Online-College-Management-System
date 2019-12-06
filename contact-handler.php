<?php
   $name=$_POST['name'];
   $visitor_email=$_Post['email'];
   $phone=$_Post['phone'];

    $subject=$_Post['subject'];
  $message=$_Post['message'];

$email_from='theEvolutionaryCollege@123.com';

$email_subject="New Form Submission";

$email_body="User Name:$name.\n".
          "User Email:$visitor_email.\n".
           "User Phone:$phone.\n".
           "User Subject:$subject.\n".
          "User Message:$message.\n".
    
$to="erumshammim@gmail.com";

$headers="From:$email_from \r\n";

$headers="Reply-To:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
?>

