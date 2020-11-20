<?php
session_start();

$con = mysqli_connect('localhost', 'root', '' ) or die("Unable to connect");

mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$surname = $_POST['surname'];
$phoneNumber = $_POST['phoneNumber'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from usertable where login = '$login'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($email == '' OR $password == '' OR $name = '' OR $phoneNumber='' OR $login='') { //This part displays errors if no data was filled
    echo "
			<script>
				alert('Some inputs are emty!');
				window.location.assign('registration.php');
			</script>
		";
}
else {
    if(strlen($email)>50 OR strlen($password)>100 OR strlen($login)>50 OR strlen($name)>100){ //This part displays errors if filled data is too long
        echo "
				<script>
					alert('Some inputs are too long!');
					window.location.assign('registration.php');
				</script>
				";
    }
    else {
        //getting record from table that is equal to our email and password
        $sql = "SELECT * FROM usertable WHERE email = '$email' && password='$password'";
        $query = mysqli_query($sql);

        if(mysqli_num_rows($query) != 0) { //This part displays errors if filled data doen't correspond data in the database
            echo "
					<script>
						alert('Email or password is wrong!');
						window.location.assign('registration.php');
					</script>
					" ;
        }
        else {
            if($num == 1){
                echo "Username Already Taken";
            }else{
                $reg = "insert into usertable(name, surname, phoneNumber, login, password) values ('$name','$surname','$phoneNumber','$login','$password')";
                mysqli_query($con, $reg);
                echo"Registration successfull";
                header('location:registration.html');
            }
        }
    }
}
?>