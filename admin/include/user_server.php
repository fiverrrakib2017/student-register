<?php 

include 'config.php';



if (isset($_POST['readrecord'])) {
	$data='';
	$displayQuery="SELECT * FROM users";
	$result=mysqli_query($con,$displayQuery);
	if (mysqli_num_rows($result)>0) {
		while ($rows=mysqli_fetch_array($result)) {

			

			$data .='<tr>
			<td>'.$rows['id'].'</td>
			<td>'.$rows['username'].'</td>
			<td>'.$rows['password'].'</td>
			<td><span class="badge badge-success">Active Now</span></td>
			
			<td>
			<a data-id='.$rows['id'].' class="btn-sm btn btn-primary editBtn" ><i class="fas fa-edit"></i></a>
			
			</td>
			<td>
			<a data-id='.$rows['id'].' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
			
			</td>

			</tr>';
		}
	}
	echo $data;
}


if (isset($_POST['deleteDataId'])) {
	 $deleteId=$_POST['deleteDataId'];
	$result= $con->query("DELETE FROM users WHERE id =$deleteId ");
	if ($result==true) {
		echo "User Delete Successfully";
	}else{
		echo "Please Try Again";
	}
}
if (isset($_POST['user_detailis_data'])) {
	  $id=$_POST['user_detailis_data'];
	  if ($details=$con->query("SELECT * FROM users WHERE id='$id' ")) {
	  	while ($row=$details->fetch_array()) {
	  		$response=$row;
	  		echo json_encode($response);
	  	}
	  }
}

if (isset($_POST['userUpdateId'])) {
	$id=$_POST['userUpdateId'];
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=$con->query("UPDATE users SET name='$name' ,username='$username',  password='$password' WHERE id='$id' ");
	 if ($result==true) {
 		echo 1;
	 }else{
	 	echo 0;
	}

}


if (isset($_POST['addUserData'])) {

	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$result= $con->query("INSERT INTO users(name,username,password)VALUES('$name','$username','$password')");
	if ($result==true) {
		echo 1;
	}else{
		echo 0;
	}
	
}




 ?>

