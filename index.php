<?php
session_start();
$_SESSION['name']='';
$_SESSION['logged']=0;
header("location: home.php");
?>