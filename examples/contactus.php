<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '' ) or die("Unable to connect");

    mysqli_select_db($con, 'userregistration');

    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];


    $reg = "insert into contactus(name, email, message) values ('$name','$visitor_email','$message')";
    mysqli_query($con, $reg);
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