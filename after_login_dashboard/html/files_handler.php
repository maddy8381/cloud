<?php
    if(isset($_GET['folder_name']))
    {
        $folder_name= $_GET['folder_name'];
    }
    else
    {
                echo "<script type='text/javascript'>
     window.location.href='index.php'</script>";

    }

?>
<?php
    include_once 'header_after_login_dashboard.php';

?>

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="change_password.php" class="waves-effect"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Change Password</a>
                    </li>
                    <li>
                        <a href="map-google.php" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard / USER FILES</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <a href="" target="_blank" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" data-toggle="modal" data-target="#uploadFileModal"><i class="glyphicon glyphicon-plus"></i>  &nbsp;New File</a>



                            </div>
                            <h3 class="box-title"><?php echo $_GET['folder_name']; ?></h3>
                            <div class="table-responsive">
                                <table class="table hoverTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="color:black;">NAME</th>
                                            <th style="color:black;">SIZE</th>
                                            <th style="color:black;">TYPE</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $con=mysqli_connect("localhost","root","","secured_cloud");
                                            $query = "SELECT * FROM files where user ='".$_SESSION['email']."' and folder_name = '".$_GET['folder_name']."'";
                                            if($result=mysqli_query($con,$query))
                                               {
                                                 if(mysqli_num_rows($result) > 0)
                                                 {
                                                    $sno=1;
                                                    while($row = mysqli_fetch_array($result))
                                                    {

                                                        echo "<tr>";

                                                        echo "<td>" . $sno . "</td>";
                                                        $sno=$sno+1;

                                                            
                                                        echo "<td><i class='glyphicon glyphicon-file'></i> &nbsp;" . $row['file_name'] . "</td>";                                     
                                                        echo "<td>" . $row['file_size'] . "</td>";
                                                        echo "<td>" . $row['file_type'] . " MB</td>";
                                                        
                                                        echo '<td><a href="download.php?file_name='.$row['file_name'].'"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;&nbsp;Download</a></td>';
                                                        echo "</tr>";
                                                     
                                                  }
                                               
                                                }
                                            }
                                           
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <!-- NewFolderModal-->    
       
  <div class="modal fade" id="uploadFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel" style="color: Blue;">Upload File</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="check_folder_creation" style="color: red; font-size: 15px;text-align: center;"></div>
                                
         <div class="container" style="width:100%">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 style="color: green">Upload Your File</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="./upload.php" enctype="multipart/form-data">
            <!-- COMPONENT START -->
                        <div class="form-group">

                            <input type="file" id="fileUpload" name="upfile" class="form-control" accept="application/pdf" MAX_FILE_SIZE="10000000" placeholder='Choose a file...'  />

                       </div>
                  
                    &nbsp;<input type="submit" name="submit" value="FINAL SUBMIT" class="btn btn-primary">
                    </form>
                

                </div>
            </div>
            </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
<?php
    include_once 'footer_after_login_dashboard.php';
?>