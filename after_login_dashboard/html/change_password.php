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
                        <h4 class="page-title">Profile page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Password Change</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/genu.png" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?php echo $_SESSION['f_name'] ?></h4>
                                        <h5 class="text-white"><?php echo $_SESSION['email'] ?></h5> </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box" >
                            <form class="form-horizontal form-material">
                                <div id="checkChangePassword" style="color: red;font-size: 15px;text-align: center;"></div>
                                <div class="form-group">
                                    <label class="col-md-12">Current Password</label>
                                    <div class="col-md-12">
                                        <input type="password" placeholder="Enter Current Password *" id="currPassword" class="form-control form-control-line" >
                                        <small id="errorcurrPassword" style="color: red"></small><br>

                                     </div>

                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  placeholder="Enter New Password *" id="newPassword" class="form-control form-control-line"> 
                                        <small id="errornewPassword" style="color: red"></small><br>

                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-md-12">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  placeholder="Retype Password *" id="confirmNewPassword" class="form-control form-control-line" > </div>
                                        <small id="errorconfirmnewPassword" style="color: red"></small><br>


                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                       
                                    </div>
                                </div>
                            </form>
                             <button type="submit" class="btn btn-success" onclick="changePassword();" id="changePassword">Change Password</button>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
<?php
    include_once 'footer_after_login_dashboard.php';
?>
