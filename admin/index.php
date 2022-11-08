<?php 

include 'include/security_token.php';
include 'include/config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Managment</title>
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


   
<div class="container">
    <div class="row mt-5">


        <div class="col-md-6 text-center ">
            <div class="card "style="border-right: 5px solid blue">
                <div class="card-body">

                    <h4><i class="fas fa-bell" style="border-radius: 50%;background: rgb(255, 255, 255);font-size: 44px;"></i></h4>
                    <h4>Total Student list</h4>

                    <a href="student.php">
                        <p style="font-size: 15px;" class="bg bg-success text-white">
                        Total Student:<?php 
                        if ($allst=$con->query("SELECT * FROM register")) {
                            echo $allst->num_rows;
                        }

                         ?>
                        </p>
                    </a>

                    <a href="#"><p style="font-size: 15px;" class="bg bg-info text-white">Today Admit Student: 

                       

                    </p></a>

                   
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <canvas id="myChart" width="" height=""></canvas>
        </div>


    </div>
    <div class="row mt-3 ">
        <div class="col-md-3 text-center ">
            <div  class="card "style="border-right: 5px solid orange">
                <div class="card-body">
                    <h4><i class="fas fa-users" style="border-radius: 50%;background: rgb(255, 255, 255);font-size: 44px;"></i></h4>
                    <h4>Total Student list</h4>
                    <p style="font-size: 25px">
                       <?php 
                        if ($allst=$con->query("SELECT * FROM register")) {
                            echo $allst->num_rows;
                        }

                         ?> 
                    </p>
                </div>
            </div>
        </div>
         <div class="col-md-3 text-center ">
            <div  class="card "style="border-right: 5px solid red">
                <div class="card-body">
                    <h4><i class="fas fa-user" style="border-radius: 50%;background: rgb(255, 255, 255);font-size: 44px;"></i></h4>
                    <h4>Total User list</h4>
                    <p style="font-size: 25px">
                        <?php 
                        if ($allst=$con->query("SELECT * FROM users")) {
                            echo $allst->num_rows;
                        }

                         ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center ">
            <div class="card " style="border-right: 5px solid black">
                <div class="card-body">
                    <h4><i class="fas  fa-location-arrow" style="border-radius: 50%;background: rgb(255, 255, 255);font-size: 44px;"></i></h4>
                    <h4>Total Visitor </h4>
                    <p style="font-size: 25px">
                      00
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    


<?php include 'footer.php' ; ?>








