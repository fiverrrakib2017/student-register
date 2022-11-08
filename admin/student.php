<?php 

include 'include/security_token.php';


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student All List</title>
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

<div id="mainDiv" class="container ">
    <div class="row">
    <div class="col-md-12 p-5">

    

    <div  class="table-responsive">
        <table id="clientDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm"><b>ID</b></th>
                <th class="th-sm"><b>Student Name</b></th>
                <th class="th-sm"><b>Email</b></th>
                <th class="th-sm"><b>Mobile</b></th>
                <th class="th-sm"><b>Address</b></th>
                <th class="th-sm"><b>Education</b></th>
                <th class="th-sm"><b>View</b></th>
              </tr>
            </thead>
            <tbody id="student_table">

            </tbody>
          </table>
    </div>

    </div>
    </div>
    </div>


    <div id="loaderDiv" class="container">
    <div class="row">
    <div class="col-md-12 text-center mt-5 py-5">
        <div class="text-center mt-5 ">
            <div class="spinner-border" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
    </div>
    </div>
    </div>


    <div id="WrongDiv" class="container d-none">
    <div class="row">
    <div class="col-md-12 text-center p-5" style="color: red;">
            <h3>Database Connection Problem !</h3>
    </div>
    </div>
    </div>




<!-----delete modal------>



<!-----delete modal------>


<!-----edit modal------>



<?php include 'footer.php' ; ?>
<script type="text/javascript">
    getStudentDATA()
   function getStudentDATA(){
       var readrecord = "readrecord";
        $.ajax({
           url:'include/student_server.php',
          type: 'post',
          data: {
            readrecord: readrecord
          },
          success: function(response) {
              $('#mainDiv').removeClass('d-none');
              $('#loaderDiv').addClass('d-none');

              $("#student_table").html(response);
            $("#clientDataTable").DataTable();
            $('.dataTables_length').addClass('bs-select');
            
          }
        });  
   }
  
</script>







