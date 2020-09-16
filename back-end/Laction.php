<?php
session_start();
require 'database.php';
if ($_POST['action'] == 'Login') {
	$user = $_POST['username'];
	$pass = $_POST['username'];
	$query= "SELECT * FROM user";
	$login = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($login))
	{
		if ($user == $row['username'] and $pass == $row['password']){
			$date = new DateTime();
			$result = $date->format('Y-m-d H:i:s');
			echo "login";
			$query2="INSERT INTO session (id_user, status, time_log) VALUES(".$row['id'].",'Login', NOW())";
			echo $query2;
			mysqli_query($conn,$query2);
			$_SESSION['username'] = $user;
			$_SESSION['status'] = "login";
			header('Location: ..\front-end\home.html');
		}
		else {
			header('Location: ..\front-end\login.html');	
		}
	}
} 
else if ($_POST['action'] == 'Regis') {
	header('Location: ..\front-end\register.html');
}

?>