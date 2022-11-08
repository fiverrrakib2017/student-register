<?php 
include 'config.php';


if (isset($_POST['userEmail'])) {
	$email=$_POST['userEmail'];
	$password=$_POST['password'];

	$displayQuery="SELECT * FROM users WHERE username='$email' AND password='$password' LIMIT 1 ";
	$result=mysqli_query($con,$displayQuery);
	if (mysqli_num_rows($result)>0) {
		while ($rows=mysqli_fetch_array($result)) {
			$village_project_username=$rows["username"];
			$password=$rows["password"];
		}
		session_start();
		$_SESSION['village_project_username']=$village_project_username;
		echo 1;
	}else{
		echo 0;
	}
	
}
