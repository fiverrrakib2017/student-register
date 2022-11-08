<?php 

include 'admin/include/config.php';

if (isset($_POST['addStudentData'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$nid=$_POST['nid'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$edu=$_POST['edu'];
	$computer_know=$_POST['computer_know'];
	$learn=$_POST['learn'];
	$textarea=$_POST['textarea'];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result=$con->query("INSERT INTO register(fullname	,email	,nid,	dob,	mobile,	address	,education,	know_computer,	learn,	textarea)VALUES('$name','$email','$nid',	'$dob',	'$mobile','$address','$edu','$computer_know','$learn','$textarea')")) {
			if ($result==true) {
				echo 1;
		}else{
			echo 0;
		}
	}
	
}


 ?>