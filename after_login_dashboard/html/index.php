<?php
    include_once 'header_after_login_dashboard.php';
?>
    <script type="text/javascript" src="js/script.js"></script>

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
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Users</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">1869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <a href="" target="_blank" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" data-toggle="modal" data-target="#newFolderModal"><i class="glyphicon glyphicon-plus"></i>  &nbsp;New Folder</a>
                            </div>
                            <h3 class="box-title">Folders</h3>
                            <div class="table-responsive">
                                <table class="table hoverTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="color:black;">NAME</th>
                                            <th style="color:black;">DATE MODIFIED</th>
                                            <th style="color:black;">SIZE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $con=mysqli_connect("localhost","root","","secured_cloud");
                                            $query = "SELECT * FROM folders where user ='".$_SESSION['email']."' order by creation_date";
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

                                                        $f_name = $row['folder_name'];    
                                                        echo '<td><a href="files_handler.php?folder_name='.$f_name.'"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;&nbsp; '.$f_name.'</a></td>';                                     
                                                        echo "<td>" . $row['creation_date'] . "</td>";
                                                        echo "<td>" . $row['folder_size'] . " MB</td>";
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
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Comments</h3>
                            <div class="comment-center p-t-10">
                                <div class="comment-body">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5><span class="time">10:20 AM   20  october 2018</span>
                                        <br/><span class="mail-desc">I think that this is the best platform to store our data securely as mentioned in the about us section by the developers and I am finding pretty interesting to use this. Thanks a lot. </span> 
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pravin Lambture</h5><span class="time">09:20 AM   20  may 2018</span>
                                        <br/><span class="mail-desc">This platform has the best functionality I have ever seen. The User Interface is at its best. The type of functionality provided make it even better than any other platform.</span>
                                    </div>
                                </div>
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Akash Deshmukh</h5><span class="time">11:20 AM   23  may 2018</span>
                                        <br/><span class="mail-desc">I like the functionality. Dashboard is amazing. But I didn't like the start page.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        CONTACT FOR ANY QUERY
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chatonline">
                                            <li>
                                                <a href=""><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Shubham Madankar<small class="text-success">8381081869</small></span></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Vaibhav Thombare<small class="text-success">7798599426</small></span></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pravin Lambture<small class="text-success">8805299384</small></span></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="../plugins/images/users/sonu.jpg" alt="user-img" class="img-circle"> <span>Akash Deshmukh<small class="text-success">9689750481</small></span></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Pratik Desai<small class="text-success">8087203290</small></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>

 <!-- NewFolderModal-->    
       
  <div class="modal fade" id="newFolderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:90%;">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel" style="color: Blue;">Create New Folder</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="check_folder_creation" style="color: red;font-size: 15px;text-align: center;"></div>
                                
         <form>
              <div class="form-group" >
                <label for="Folder Name">Folder Name</label>
                <input type="text" required class="form-control" id="folder_name" aria-describedby="" placeholder="Enter Folder Name ">
                <small id="error_folder_name" style="color: red"></small>
              </div>
        </form>
        <input type="submit" value="SUBMIT" onclick="new_folder();" id="submit" class="form-control" style="background-color: black;color: white; ">     
          
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