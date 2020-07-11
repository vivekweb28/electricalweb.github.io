<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password')
if (!empty($username)){
if(!empty($email)){
if (!empty($password)) {
$host="localhost";
$dbusername="root";
$dbemail="root";
$dbpassword="";
$dbname="youtube";


$conn= new mysqli ($host, $dbusername, $dbemail, $dbpassword, $dbname);
if(mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_error().')'
		. mysqli_connect_error());
}
	else{
		$sql ="INSERT INTO account ( username, email, password)
		values=('$username', 'email', 'password')";
		if($conn->query($sql)){
			echo "New record is inserted sucessfully";
		}
		else{
			echo "Error". $sql."<br>".$conn->error;
		}
		$conn->close();
	}

}
else{
	echo "Plzz enter your password.";
	die();
}
}
else{
	echo "Plzz enter your email.";
	die();
}
}
else{
	echo "Plzz enter your name.";
	die();
}
?>