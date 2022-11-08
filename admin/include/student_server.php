<?php 

include 'config.php';



if (isset($_POST['readrecord'])) {
	$data='';
	$displayQuery="SELECT * FROM register";
	$result=mysqli_query($con,$displayQuery);
	if (mysqli_num_rows($result)>0) {
		while ($rows=mysqli_fetch_array($result)) {

			

			$data .='<tr>
			<td>'.$rows['id'].'</td>
			<td>'.$rows['fullname'].'</td>
			<td>'.$rows['email'].'</td>
			<td>'.$rows['mobile'].'</td>
			<td>'.$rows['address'].'</td>
			<td>'.$rows['education'].'</td>
			<td>

			<a href="std_view.php?id='.$rows['id'].'" class="btn-sm btn btn-success "><i class="fas fa-eye"></i></a>

			</td>

			</tr>';
		}
	}
	echo $data;
}







 ?>

