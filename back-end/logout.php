<?php
session_start();
$_SESSION['status']='';
$_SESSION['username']='';
session_unset();
session_destroy();
header('Location: ..\front-end\login.html');
?>