<?php
session_start();
require 'database.php';
if ($_POST['action'] == 'Regis') {
	$user = $_POST['username'];
	$pass = $_POST['username'];
	$query= "SELECT * FROM user";
	$query2="INSERT INTO user (username, password) VALUES(".$username.", ".$pass.")";
	$search = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($search))
	{
		if ($user == $row['username']){
			echo "User sudah ada";
			sleep(10);
			header('Location: ..\front-end\register.html');
		}
		else {
			$regis= mysqli_query($conn,$query2);
			header('Location: ..\front-end\login.html');
		}
	}
} 
else if ($_POST['action'] == 'Login') {
	header('Location: ..\front-end\login.html');
}

?>