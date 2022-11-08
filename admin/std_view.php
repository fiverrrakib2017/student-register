<?php 

include 'include/security_token.php';
include 'include/config.php';

if (isset($_GET['id'])) {
     $id=$_GET['id'];
     if ($allStudent=$con->query("SELECT * FROM register WHERE id='$id' ")) {
        while ($rows=$allStudent->fetch_assoc()) {
             $id= $rows['id'];
             $fullname= $rows['fullname'];
             $email= $rows['email'];
             $nid= $rows['nid'];
             $dob= $rows['dob'];
             $mobile= $rows['mobile'];
             $address= $rows['address'];
             $education= $rows['education'];
             $know_computer= $rows['know_computer'];
             $learn= $rows['learn'];
             $textarea= $rows['textarea'];
        }
    }
}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Managment</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link rel="stylesheet" href="css/datatables-select.min.css">
    <link rel="stylesheet" href="css/deleteModal.css">
</head>
<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
       <?php include 'header.php'; ?>
       <?php include 'menu.php'; ?>
<div class="page-wrapper">


<div class="container mt-5" id="mainDiv">
            <div class="row">
                <div class="col-md-9 m-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                           Student Details Form
                        </div>
                        <div class="card-body">
                           <form>
                               <div class="row">
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Full Name</label>
                                           <input type="text" id="fullname" class="form-control" value="<?php echo $fullname; ?>" disabled>
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Email</label>
                                           <input type="email" id="email" class="form-control" value="<?php echo $email; ?>"disabled>
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group mb-2">
                                           <label>NID / Birth certificate no.</label>
                                           <input type="text" id="nid" class="form-control" value="<?php echo $nid; ?>"disabled>
                                        </div>
                                   </div>
                                   
                                   <div class="col-md-6">
                                       <div class="form-group mb-2">
                                           <label>Date of birth*</label>
                                           <input type="text" id="dob" class="form-control" value="<?php echo $dob; ?>"disabled/>
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Mobile no.*</label>
                                           <input type="text" id="mobile" class="form-control" value="<?php echo $mobile; ?>"disabled>
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Address*</label>
                                           <input type="text" id="address" class="form-control"value="<?php echo $address; ?>"disabled/>
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Educational Qualifications*</label>
                                           <input type="text" id="edu" class="form-control" value="<?php echo $education; ?>"disabled/>
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Do you know basic computer operating?*</label>
                                           <input type="text" id="computer_know" class="form-control" value="<?php echo $know_computer; ?>" disabled/>
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Interested to learn*</label>
                                           <input type="text" id="learn" class="form-control" value="<?php echo $learn; ?>" disabled/>
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>What would you like to do after complete the course?</label>
                                           <textarea type="text" id="textarea" class="form-control" style="height:70px;"disabled><?php echo $textarea; ?></textarea> 
                                        </div>
                                   </div>
                               </div>
                           </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>









<?php include 'footer.php' ; ?>








