<?php 

// include './include/config.php';
session_start();

// $username= $_SESSION['username'];

if (empty($_SESSION['village_project_username'])) {
	header("location:login.php");
}

 ?>