<?php

session_start();

$con = mysqli_connect('localhost', 'root', '' );

mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$surname = $_POST['surname'];
$phoneNumber = $_POST['phoneNumber'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from usertable where login - '$login'";

$result = myslqi_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = "insert into usertable(name, surname, phoneNumber, login, password) values ('$name','$surname','$phoneNumber','$login','$password')";
    mysqli_query($con, $reg);
    echo"Registration successfull";
}
?>