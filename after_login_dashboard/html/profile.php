<?php
       include_once 'header_after_login_dashboard.php';
?> 


<?php
    
    $email = $_SESSION['email'];
    require '../../include/db_config.php';
    $db = new Database();
    $conn = $db->getConnection();
    
        $query = "SELECT * FROM user WHERE email = '$email'";

        $q = $conn->query($query);
        $cnt=0;     
        if($q->setFetchMode(PDO::FETCH_ASSOC))
        {
            
            while ($r = $q->fetch()) {
                 $email = $r['email'];
                 $f_name = $r['f_name'];
                 $l_name = $r['l_name'];
                 $mobile_no = $r['mobile_no'];
                 $plan_id = $r['plan_id'];
                 $cnt++;
            }
            
        }
            
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['f_name']=$f_name;
                $_SESSION['l_name']=$l_name;
                $_SESSION['mobile_no']=$mobile_no;
                $_SESSION['plan_id']=$plan_id;
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
                            <li class="active">Profile Page</li>
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
                                <div id="checkChangeProfile1" style="color: red;font-size: 15px;text-align: center;"></div>
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text"  placeholder="<?php echo $_SESSION['f_name']." ".$_SESSION['l_name'] ?>" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="<?php echo $_SESSION['email'] ?>" class="form-control form-control-line" name="example-email" id="example-email" disabled> </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="<?php echo $_SESSION['mobile_no'] ?>" id="profile_contact_no" class="form-control form-control-line" > </div>
                                        <small id="error_profile_contact_no" style="color: red" hidden></small><br>


                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Plan Type</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" disabled>
                                            <option><?php echo $_SESSION['plan_id']; ?></option>
                                            <option>London</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-success" onclick="changeProfile();">Update Profile</button>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
<?php
    include_once 'footer_after_login_dashboard.php';
?>
