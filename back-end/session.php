<?php 
session_start();
if($_SESSION['status']!="login"){
	header('Location: ..\front-end\login.html');
}
$date = new DateTime();
$result = $date->format('Y-m-d H:i:s');

echo "<h1>Selamat datang ".$_SESSION['username']."! anda telah login pada ".$result."</h1>";
echo "<a href='../back-end/logout.php'> <button class='button'>LOGOUT</button></a>";