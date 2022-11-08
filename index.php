
<!doctype html>
<html lang="en">
    <head>
    
       <meta charset="utf-8">
        <title>Student Registration </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    
        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    </head>

    <body >




    <div class="">
        <div class="container mt-5" id="mainDiv">
            <div class="row">
                <div class="col-md-7 m-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                           Student Registration Form
                        </div>
                        <div class="card-body">
                           <form>
                               <div class="row">
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Full Name</label>
                                           <input type="text" id="fullname" class="form-control" placeholder="Enter Your Full Name">
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Email</label>
                                           <input type="email" id="email" class="form-control" placeholder="Enter Your Email">
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group mb-2">
                                           <label>NID / Birth certificate no.</label>
                                           <input type="text" id="nid" class="form-control" placeholder="Enter Your NID/Birth certificate no">
                                        </div>
                                   </div>
                                   
                                   <div class="col-md-6">
                                       <div class="form-group mb-2">
                                           <label>Date of birth*</label>
                                           <input type="date" id="dob" class="form-control" />
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Mobile no.*</label>
                                           <input type="text" id="mobile" class="form-control" placeholder="Enter Your Mobile no.">
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Address*</label>
                                           <input type="text" id="address" class="form-control" placeholder="Type Your Address"/>
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Educational Qualifications*</label>
                                           <select type="text" id="edu" class="form-select">
                                            <option value="">Select</option>
                                               <option value="PSC">PSC</option>
                                               <option value="SSC">SSC</option>
                                               <option value="HSC">HSC</option>
                                               <option value="Degree">Degree</option>
                                               <option value="Other">Other</option>
                                           </select>
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Do you know basic computer operating?*</label>
                                           <select type="text" id="computer_know" class="form-select">
                                            <option value="">Select</option>
                                               <option value="Know something">Know something</option>
                                               <option value="Know MS Office">Know MS Office</option>
                                               <option value="Know Graphics">Know Graphics</option>
                                               <option value="Know basic computer hardware & software">Know basic computer hardware & software</option>
                                               <option value="Don't know anything">Don't know anything</option>
                                               <option value="Other">Other</option>
                                           </select>
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>Interested to learn*</label>
                                           <select type="text" id="learn" class="form-select">
                                               <option value="">Select</option>
                                               <option value="Graphics Design">Graphics Design</option>
                                               <option value="Web Design">Web Design</option>
                                               <option value="SEO (Search Engine Optimisation)">SEO (Search Engine Optimisation)</option>
                                               <option value="Video Editing">Video Editing</option>
                                               <option value="Video Blogging/ YouTube,FB etc.">Video Blogging/ YouTube,FB etc.</option>
                                               <option value="Software development">Software development</option>
                                               <option value="Content writing">Content writing</option>
                                               <option value="Blogging Adsense">Blogging Adsense</option>
                                               <option value="Other">Other</option>
                                           </select>
                                        </div>
                                   </div>
                                   <div class="col-sm">
                                       <div class="form-group mb-2">
                                           <label>What would you like to do after complete the course?</label>
                                           <textarea type="text" id="textarea" class="form-control"  value="" style="height:70px;"></textarea> 
                                        </div>
                                   </div>
                               </div>
                           </form> 
                        </div>
                        <div class="card-footer">
                            <button class=" btn btn-success btn-block" id="addBtn" style="width:100%">Register Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


   
    <!-- End Page-content -->







    

    

</div>
         <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/toastr.min.js"></script>
        <script type="text/javascript" src="assets/js/toastr.init.js"></script> 
        

        <script src="assets/js/app.js"></script>
        <script type="text/javascript">
        
        $(document).ready(function(){
            $("#addBtn").click(function(){
                    var fullname=$("#fullname").val();
                    var email=$("#email").val();
                    var nid=$("#nid").val();
                    var dob=$("#dob").val();
                    var mobile=$("#mobile").val();
                    var address=$("#address").val();
                    var edu=$("#edu").val();
                    var computer_know=$("#computer_know").val();
                    var learn=$("#learn").val();
                    var textarea=$("#textarea").val();
                    addData(fullname,email,nid,dob,mobile,address,edu,computer_know,learn,textarea);
                   
                });
                function addData(fullname,email,nid,dob,mobile,address,edu,computer_know,learn,textarea){
                     if (fullname.length==0) {
                        toastr.error("Name is require");
                    }else if(email.length==0){
                         toastr.error("Email is require");
                    }else if(mobile.length==0){
                         toastr.error("Mobile Number is require");
                    }else if(address.length==0){
                         toastr.error("Address is require");
                    }else if(nid.length==0){
                         toastr.error("Nid is require");
                    }else{
                         var addStudentData="0";
                        $.ajax({
                     url:'action.php',
                     type:'POST',
                     data:{addStudentData:addStudentData,name:fullname,email:email,nid:nid,dob:dob,mobile:mobile,address:address,edu:edu,computer_know:computer_know,learn:learn,textarea:textarea},
                     success:function(response){
                        if (response==1) {
                           toastr.success("আপনার রেজিস্ট্রেশন সঠিকভাবে সম্পন্ন হয়েছে । আমরা খুব দ্রুতই আপনার সাথে যোগাযোগ করব।ধন্যবাদ");
                         $("#addModal").modal('hide');
                            setTimeout(()=>{
                                location.reload();
                            },4000); 
                        }else{
                                toastr.error("Please Try Again");
                            }
                        
                        }
                    });
                    }
                }
        });    

         </script>
    </body>
</html>
