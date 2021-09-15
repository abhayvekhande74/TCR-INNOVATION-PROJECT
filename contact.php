<?php
$name =$ _POST['name'];
$visitor_email = $ _POST ['email'];
$message = $ _post ['message'];

$email_from = 'mayurshekade2001@gmail.com';
$email_subject ="new form submission";
$email_body = "user name: $name.\n".
               "user Email: $visitor_email.\n".
               "user Message :$message. \n";

      $to= "mayurshekade2001@gmail.com";
      $headers ="Form:$email_form \r\n";
      $headers .="reply-to: $visitor_email\r\n";
      mail($to.$email_subject,$email_body,headers);

      headers("location: contact.html");

?>