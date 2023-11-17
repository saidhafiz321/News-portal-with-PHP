<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   
   // Code for Add New Sub Admi
   if(isset($_POST['submit'])){
   $username=$_POST['sadminusername'];
   $email=$_POST['emailid'];
   $password=md5($_POST['pwd']);
   $usertype='0';
   $query=mysqli_query($con,"insert into tbladmin(AdminUserName,AdminEmailId,AdminPassword,userType ) values('$username','$email','$password','$usertype')");
   if($query){
   echo "<script>alert('Sub-admin details added successfully.');</script>";
   echo "<script type='text/javascript'> document.location = 'add-subadmins; </script>";
   } else {
   echo "<script>alert('Something went wrong. Please try again.');</script>";
   }
   }
   
   ?>
   

         <?php include('includes/topheader.php');?>
         <!-- Top Bar End -->
         <!-- ========== Left Sidebar Start ========== -->
         <?php include('includes/leftsidebar.php');?>
         <!-- Left Sidebar End -->
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add Subadmin</h4>
                           <ol class="breadcrumb p-0 m-0">
                              <li>
                                 <a href="#">Admin</a>
                              </li>
                              <li>
                                 <a href="#">Subadmin </a>
                              </li>
                              <li class="active">
                                 Add Subadmin
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <h4 class="m-t-0 header-title"><b>Add Subadmin </b></h4>
                           <hr />
                           <div class="row">
                              <form class="row" name="addsuadmin" method="post">
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputusername">Username (used for login)</label>
                                    <input type="text" placeholder="Enter Sub-Admin Username"  name="sadminusername" id="sadminusername" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" title="Username must be alphanumeric 6 to 12 chars" onBlur="checkAvailability()"  required>
                                    <span id="user-availability-status" style="font-size:14px;"></span>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="emailid">Email Id</label>
                                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter email" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-12">
                                       <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" id="submit" name="submit">
                                       Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- container -->
            </div>
            <!-- content -->
            <?php include('includes/footer.php');?>
   
        
<?php } ?>