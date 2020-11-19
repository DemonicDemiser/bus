<?php

session_start();


$con = mysqli_connect('localhost', 'root', '' );

mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$pass = $_POST['surname'];
$pass = $_POST['phoneNumber'];
$pass = $_POST['login'];
$pass = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from "
?>