<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   
   // Code for Forever deletionparmdel
   if($_GET['action']=='del' && $_GET['rid'])
   {
    $id=intval($_GET['rid']);
    $query=mysqli_query($con,"delete from  tbladmin  where id='$id' && userType=0");
   echo "<script>alert('Sub-admin details deleted.');</script>";
   echo "<script type='text/javascript'> document.location = 'manage-subadmins.php'; </script>";
   }
   
   ?>

         <?php include('includes/topheader.php');?>
         <!-- ========== Left Sidebar Start ========== -->
         <?php include('includes/leftsidebar.php');?>
         <!-- Left Sidebar End -->
         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Manage Sub-admins</h4>
                           <ol class="breadcrumb p-0 m-0">
                              <li>
                                 <a href="#">Sub-admins </a>
                              </li>
                              <li class="active">
                                 Manage Sub-admins
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="demo-box m-t-20">
                           <div class="m-b-30">
                              <a href="aadd-subadmins.php">
                              <button id="addToTable" class="btn btn-custom waves-effect waves-light btn-md">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
                              </a>
                           </div>
                           <div class="table-responsive">
                              <table class="table m-0  table-bordered" id="example">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th> Username</th>
                                       <th>Email</th>
                                       <th>Posting Date</th>
                                       <th>Last updation Date</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead><?php include('includes/footer.php');?>
   
                                 <tbody>
                                    <?php 
                                       $query=mysqli_query($con,"Select * from  tbladmin where userType=0");
                                       $cnt=1;
                                       while($row=mysqli_fetch_array($query))
                                       {
                                       ?>
                                    <tr>
                                       <th scope="row"><?php echo htmlentities($cnt);?></th>
                                       <td><?php echo htmlentities($row['AdminUserName']);?></td>
                                       <td><?php echo htmlentities($row['AdminEmailId']);?></td>
                                       <td><?php echo htmlentities($row['CreationDate']);?></td>
                                       <td><?php echo htmlentities($row['UpdationDate']);?></td>
                                       <td><a href="edit-subadmin.php?said=<?php echo htmlentities($row['id']);?>"  class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                                          &nbsp;<a href="manage-subadmins.php?rid=<?php echo htmlentities($row['id']);?>&&action=del" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i></a> 
                                       </td>
                                    </tr>
                                    <?php
                                       $cnt++;
                                        } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--- end row -->
               </div>
               <!-- container -->
            </div>
            <!-- content -->
            <?php include('includes/footer.php');?>
   
       
<?php } ?>