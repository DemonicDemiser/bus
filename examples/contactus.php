<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];


    $to = "mukhammedaly7777@gmail.com";
    $body="";

    $body .= "From: ".$name."\r\n";
    $body .= "Email: ".$visitor_email."\r\n";
    $body .= "Message: ".$message."\r\n";

    mail($to,$visitor_email,$message);
//    $email_from='waabaki921642@gmail.com';
//
//    $email_subject="New Form Submission";
//
//    $email_body="User Name: $name.\n".
//                  "User Email: $visitor_email.\n".
//                    "User Message: $message.\n";
//
//    $to="mukhammedaly7777@gmail.com@gmail.com";
//
//    $headers = "From: email_from \r\n";
//
//    $headers .= "Reply-To: $visitor_email \r\n";
//
//    mail($to,$email_subject,$email_body,$headers);

    header("Location: ../index.html");
?>