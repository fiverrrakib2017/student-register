

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN Login  </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link rel="stylesheet" href="css/datatables-select.min.css">
</head>
<body>
    <div class="container ">
        <div class="row justify-content-center d-flex mt-5 mb-5">

        <div class="col-md-10 card">
          <div class="row">
            <div style="height: 450px" class="col-md-6 p-3">
              <form  action=" "  class="m-5 loginForm">

                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                 <input  type="text" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter Your Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input  type="password" class="form-control" id="userPassword" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                  <button id="loginBtnConfirm"  type="button" class="btn btn-block btn-success">Login</button>
                </div>
            </form>
        </div>

        <div  class="col-md-6 bg-light">
         <!-- <img class=" m-5" src="images/bannerImg.png">  -->
        <img class=" img-fluid w-100 mt-5" src="images/bannerImg2.png">
        </div>
        </div>
        </div>




        </div>
        </div>


        <script src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/sidebarmenu.js"></script>
        <script src="js/sticky-kit.min.js"></script>
        <script src="js/custom.min-2.js"></script>
        <script src="js/datatables.min.js"></script>
        <script src="js/datatables-select.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/axios.min.js"></script>
<script type="text/javascript">
    $("#loginBtnConfirm").click(function(){
        var userEmail=$("#userEmail").val();
        var userPassword=$("#userPassword").val();

        if (userEmail.length==0) {
            toastr.error("Email is require");
        }else if(userPassword.length==0){
            toastr.error("Password is require");
        }else{
            loginFunction(userEmail,userPassword);
        }

    });
    function loginFunction(userEmail,userPassword){
        $.ajax({
            url:'include/login_server.php',
            type:'POST',
            data:{userEmail:userEmail,password:userPassword},
            success:function(data,status){
                if (data==1) {
                    toastr.success("Login Successful");
                    toastr.success("Thank You");
                    location.href="index.php";
                }else{
                    toastr.error("Email Or Password Wrong!");
                    //toastr.error("Please Try Again");
                }
            }
        });
        // axios.post("/onLogin",{username:username,password:userPassword})
        // .then(function(response){
        //     if (response.status==200 && response.data==1) {
        //         toastr.success("Login Successful");
        //         toastr.success("Thank You");
        //         window.location.href="/";
        //     }else{
        //         toastr.error("Please Try Again");
        //     }
        // }).catch(function(error){
        //     console.log(error);
        // });
    }
</script>
</body>
</html>
