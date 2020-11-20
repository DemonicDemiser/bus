<?php

session_start();
$con = mysqli_connect('localhost', 'root', '' ) or die("Unable to connect");

mysqli_select_db($con, 'userregistration');

$login = $_POST['login'];
$password = $_POST['password'];

$s = "select * from usertable where login = '$login' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);





if($num == 1){
    $_SESSION['username']=$login;
    header('location:../index.html');
}else{
    $_SESSION['username']=$login;
    header('location:../index.html');
}
?>