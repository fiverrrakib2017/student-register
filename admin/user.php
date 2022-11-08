<?php 

include 'include/security_token.php';


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

<div id="mainDiv" class="container ">
    <div class="row">
    <div class="col-md-12 p-5">

    <button id="addNewBtnId" class="btn my-3 btn-sm btn-primary"><span><i class="fas fa-user-plus"></i></span> &nbsp;Add User </button>

    <div  class="table-responsive">
        <table id="clientDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm"><b>ID</b></th>
                <th class="th-sm"><b>username</b></th>
                <th class="th-sm"><b>Password</b></th>
                <th class="th-sm"><b>Status</b></th>
                <th class="th-sm"><b>Edit</b></th>
                <th class="th-sm"><b>Delete</b></th>
              </tr>
            </thead>
            <tbody id="user_table">

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

<div id="deleteModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="fa fa-trash"></i>
                </div>
                <h4 class="modal-title w-100">Are you sure?</h4>
                <h4 class="modal-title w-100 d-none" id="userDeleteId">3</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="userDeleteConfirm">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-----delete modal------>


<!-----edit modal------>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Update User </h5>
            <p id="editUserId" class="d-none"></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>
    <div class="modal-body ">
        <div id="edit-user-form" class="d-none">
            <form >
                        <div class="form-group">
                            <label for=""> Name</label>
                            <input id="editName" type="text"  class="form-control " placeholder="Enter Text Here">
                        </div>
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input id="editUserName" type="text"  class="form-control " placeholder="Enter Text Here">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input id="editUserPass" type="text"  class="form-control " placeholder="Enter Text Here">
                        </div>
            </form>
        </div>
        <div id="editLoaderDiv" class="container ">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="text-center mt-5 ">
                        <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
        <button  id="userEditConfirmBtn" type="button" class="btn  btn-sm  btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-----edit modal------>


    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span><i class="fas fa-user-plus"></i></span> &nbsp;Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
          </div>
          <div class="modal-body">
            <div id="add-user-form" class="d-none">
                <form >
                        <div class="form-group">
                            <label for="">Name</label>
                            <input id="addName" type="text"  class="form-control " placeholder="Enter Text Here">
                        </div>
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input id="addUserName" type="text"  class="form-control " placeholder="Enter Text Here">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input id="addUserPass" type="password"  class="form-control " placeholder="Enter Text Here">
                        </div>
            </form>
            </div>
            <div id="addLoaderDiv" class="container ">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="text-center mt-5 ">
                        <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            <button  id="userAddConfirmBtn" type="button" class="btn  btn-sm  btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>


<?php include 'footer.php' ; ?>
<script type="text/javascript">
    getUserData()
   function getUserData(){
       var readrecord = "readrecord";
        $.ajax({
           url:'include/user_server.php',
          type: 'post',
          data: {
            readrecord: readrecord
          },
          success: function(response) {
              $('#mainDiv').removeClass('d-none');
              $('#loaderDiv').addClass('d-none');

              $("#user_table").html(response);
            $("#clientDataTable").DataTable(deleteProcess(),eidtProcess());
            $('.dataTables_length').addClass('bs-select');
            $("#addBtn").click(function() {
              $("#addModal").modal('show');
            });
          }
        });  
   }
   function deleteProcess(){
        $('.deleteBtn').click(function(){
            var id=$(this).data('id');
            $('#userDeleteId').html(id);
             $('#deleteModal').modal('show');
            
        });
      }

      $('#userDeleteConfirm').click(function(){
        var userDeleteId=$('#userDeleteId').html();
        userDelete(userDeleteId);
      });
      const userDelete=(userDeleteId)=>{
        $.ajax({
            url:'include/user_server.php',
             type: 'post',
             data: { deleteDataId: userDeleteId  },
             success: function(data, status) {
                toastr.success(data);
                $("#deleteModal").modal('hide');
                setTimeout(()=>{location.reload();},1000);
              }
          });
      }
      function eidtProcess() {
        $(".editBtn").click(function() {
            var id=$(this).data('id');
            $("#editUserId").html(id);
          $("#editModal").modal('show');
          $.ajax({
            url:'include/user_server.php',
            type:'post',
            data:{user_detailis_data:id},
            success:function(data,status){
                setTimeout(()=>{
                    $('#edit-user-form').removeClass('d-none');
                $('#editLoaderDiv').addClass('d-none');
                },1000);
                 var jsonData=JSON.parse(data);
                 console.log(jsonData.username);
                  $("#editName").val(jsonData.name);
                  $("#editUserName").val(jsonData.username);
                  $("#editUserPass").val(jsonData.password);
            }
          });
        });
      }
      $('#userEditConfirmBtn').click(function(){
         var userUpdateId= $("#editUserId").html();
         var editName= $("#editName").val();
         var editUserName= $("#editUserName").val();
         var editPass= $("#editUserPass").val();
         userUpdate(userUpdateId,editName,editUserName,editPass);
      });
      const userUpdate=(userUpdateId,editName,editUserName,editPass)=>{
        if (editName.length==0) {
            toastr.error("Name is require");
        }else if (editUserName.length==0){
             toastr.error("Username is require");
        }else if (editPass.length==0){
             toastr.error("Password is require");
        }else{
            $.ajax({
                 url:'include/user_server.php',
                type:'POST',
                data:{userUpdateId:userUpdateId,name:editName,username:editUserName ,password:editPass},
                success:function(response){
                    if (response==1) {
                        toastr.success("Data Successfully Update");
                        $("#editModal").modal('hide');
                        setTimeout(()=>{location.reload();},1000);
                    }else{
                         toastr.success("Data Not Update!!!");
                    }  
                }
            });
        }
      }
      $("#addNewBtnId").click(function(){
        $("#addModal").modal('show');
        setTimeout(()=>{
            $('#add-user-form').removeClass('d-none');
        $('#addLoaderDiv').addClass('d-none');
        });
      });
      $("#userAddConfirmBtn").click(function(){
            var addName= $("#addName").val();
            var addUserName= $("#addUserName").val();
         var addUserPass= $("#addUserPass").val();

            addUser(addName,addUserName,addUserPass);
        });
       function addUser(addName,addUserName,addUserPass) {
        const addUserData="0";
       if (addName.length==0) {
            toastr.error("Name is require");
        }else if (addUserName.length==0){
             toastr.error("Username is require");
        }else if (addUserPass.length==0){
             toastr.error("Password Must be require");
        } else {
          $.ajax({
            url:'include/user_server.php',
            type: 'POST',
            data: {name:addName,username:addUserName,password:addUserPass,addUserData:addUserData},
            success: function(response) {
                if (response==1) {
                     toastr.success("Data Inser Successfully");
                     $('#addModal').modal('hide');
                     setTimeout(()=>{location.reload();},1000);
                }else{
                    toastr.error("Please try again");
                }
             
              
              
            }
          });
        }
      }
</script>







