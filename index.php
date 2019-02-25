<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secured Cloud</title>
    <meta name="description" content="Material design landing page template built by TemplateFlip.com"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/script.js"></script>

  </head>
  <body id="top">
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar" style="background-color:">
        <div class="top-left-part" style="margin-left: 25px;">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <img src="img/cloud_logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <img src="img/secured_cloud_name-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
              <li class="nav-item">
                        <a><button class="btn " style="background-color:white;border:2px solid white;"  data-toggle="modal" data-target="#exampleModal"><b style="color:black;">LOGIN</b></button></a>
              </li>
              <li class="nav-item">
                        <a><button class="btn " style="background-color:white;border:2px solid white;"  data-toggle="modal" data-target="#exampleModal1"><b style="color:black;">Register</b></button></a>
              </li>
            </ul><!--a class="btn btn-primary btn-rounded my-0" href="https://templateflip.com/templates/material-landing" target="_blank">Download</a-->
          </div>
        </div>
      </nav>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="checkLogin">
         <form>
			  <div class="form-group">
			    <label for="email1">Email address</label>
			    <input type="email" required class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="errorEmail1" style="color: red"></small>
			   
			  </div>
			  <div class="form-group">
			    <label for="password1">Password</label>
			    <input type="password" class="form-control" id="password1" placeholder="Enter Password" required>
				<small id="errorPassword1" style="color: red"></small>
			  </div>
	      </form>

		<input type="submit" value="LOGIN"  onclick="login();" id="login" class="form-control" style="box-sizing: 100px;">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
        
     <!-- Register-->    
       
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="confirmRegistration">
         <form>
			  <div class="form-group" >
			    <label for="email">Email address</label>
			    <input type="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="errorEmail" style="color: red"></small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
				<small id="errorPassword" style="color: red"></small>
			  </div>

			  <div class="form-group">
			    <label for="f_name">First Name</label>
			    <input type="text" class="form-control" id="f_name" placeholder="Enter First Name" required>
				<small id="errorFName" style="color: red"></small>
			  </div>

			  <div class="form-group">
			    <label for="l_name">Last Name</label>
			    <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" required>
			    <small id="errorLName" style="color: red"></small>
			  </div>

			  <div class="form-group">
			    <label for="mobile_no">Mobile Number</label>
			    <input type="text" class="form-control" id="mobile_no" placeholder="Enter Mobile Number" required>
			    <small id="errorMobileNumber" style="color: red"></small>
			  </div>

			           
		</form>
		<input type="submit" value="SUBMIT" onclick="registration();" id="submit" class="form-control">	    
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
        
        
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="d-flex align-items-center">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s"  style="margin-top:130px; ">
                    <h1 class="h1-responsive font-bold mt-sm-5">Your data Security is Our Mission.</h1>
                    <div class="h6" >
                      Unifying cloud and on-premises security to provide advanced threat protection and information protection across all endpoints, networks, email, and cloud applications.
                      
                    </div>
                  </div><br>
                  
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <div id="content">

<section class="text-center py-5 grey lighten-4" id="about">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Why you should use our platform?</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text">
        We are providing the security for your data in a best possible way. We are using different techinques to store your data in a secure way. Our plans are affordable. 
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".3s"><i class="fa fa-dashboard fa-3x orange-text"></i>
        <h3 class="h4 mt-3">Design</h3>
        <p class="mt-3 blue-grey-text">
          The best user friendly Interface is provided for the user to manage their data on our platform.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">Feedback</h3>
        <p class="mt-3 blue-grey-text">
          Most of the people favour our platform, feedback from all over the world is quite great. 
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-cubes fa-3x red-text"></i>
        <h3 class="h4 mt-3">Execution</h3>
        <p class="mt-3 blue-grey-text">
          Design execution is properly managed by our team. They are working hard for your data security.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="text-center py-5 indigo darken-1 text-white" id="pricing">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Our pricing plans</h2>
      <p class="px-5 mb-5 pb-3 lead">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,
        veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
      </p>
    </div>
    <div class="row wow zoomIn">
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Individual</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">9</span><span class="display-4">/m</span></div>
              <ul class="list-unstyled">
                <li>
                  <p><strong>1</strong> person</p>
                </li>
                <li>
                  <p><strong>10</strong> projects</p>
                </li>
                <li>
                  <p><strong>100</strong> features</p>
                </li>
                <li>
                  <p><strong>20GB</strong> storage</p>
                </li>
              </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Startup</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">29</span><span class="display-4">/m</span></div>
              <ul class="list-unstyled">
                <li>
                  <p><strong>10</strong> person</p>
                </li>
                <li>
                  <p><strong>100</strong> projects</p>
                </li>
                <li>
                  <p><strong>200</strong> features</p>
                </li>
                <li>
                  <p><strong>100GB</strong> storage</p>
                </li>
              </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-red-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Enterprise</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">99</span><span class="display-4">/m</span></div>
              <ul class="list-unstyled">
                <li>
                  <p><strong>10+</strong> person</p>
                </li>
                <li>
                  <p><strong>Unlimited</strong> projects</p>
                </li>
                <li>
                  <p><strong>Unlimited</strong> features</p>
                </li>
                <li>
                  <p><strong>1TB</strong> storage</p>
                </li>
              </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5" id="team">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">Our team members</h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
        We have proper team of 4 members who has worked hard for providing you this platform.
      </p>
    </div>
    <div class="row mb-lg-4 center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/vaibhav.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Vaibhav Thombare</div>
          <h6 class="font-bold blue-grey-text mb-4">Lead Designer</h6>
          <p class="grey-text">Diverse application knowledge, team leading strength, Army Lover.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@vaibhavThombare8186</span></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/shubham.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Shubham Madankar</div>
          <h6 class="font-bold blue-grey-text mb-4">Web Developer, Designer</h6>
          <p class="grey-text">Front-end, Back-end Developer, team worker, traveller, enthusiastic.  </p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@maddy8381</span></a>
        </div>
      </div>
    </div>
    <div class="row center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/pratik.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Pratik Desai</div>
          <h6 class="font-bold blue-grey-text mb-4">?</h6>
          <p class="grey-text">Dont know</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@desaiPratik</span></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/nitin.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Dr. Nitin Gavankar</div>
          <h6 class="font-bold blue-grey-text mb-4">Guider</h6>
          <p class="grey-text">Guider, motivator. </p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@gavankarNitin</span></a>
        </div>
      </div>
    </div>
  </div>
</section-->
<section id="contact" style="background-image:url('img/panorama-3094696_1920.jpg');">
  <div class="rgba-black-strong py-5">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">Contact us</h2>
        <p class="text-white px-5 mb-5 pb-3 lead text-center">
   Unifying cloud and on-premises security to provide advanced threat protection and information protection across all endpoints, networks, email, and cloud applications.
        </p>
      </div>
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s" id="sendEmail">
        <div class="card-body p-5">
          <div class="row">
            <div class="col-md-8">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class ="form-control" id="name" type="text" name="name" required="required"/>
                      <span id="errorName" style="color:red;"></span>
                      <label for="name">Your name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="email" name="_replyto" required="required"/>
                      <span id="errorEmail" style="color:red;"></span>
                      <label for="email">Your email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="phone" type="text" name="phone" required="required"/>
                      <span id="errorPhone" style="color:red;"></span>
                      <label for="phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea class="md-textarea" id="message" name="message" required="required"></textarea>
                      <span id="errorMessage" style="color:red;"></span>
                      <label for="message">Your message</label>
                    </div>
                  </div>
                </div>
                
              </form>
                <div class="center-on-small-only mb-4">
                  <div class="col-xs-3">
                                <input type="submit" onclick="onEmailSubmit();" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" id="send" value="Submit" style="background-color:#4da6ff;">
                  </div>
                  <div class="col-xs-2" id="loading" style="display: none;">
                                    <img src="img/loading.gif" style="max-height: 60px;max-width: 100px;">
                  </div>
                  <div class="col-xs-7"></div>
                </div>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                  <p class="mt-2">WCE, Sangli.</p>
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">+91 8381081869</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">sgmadankar@gmail.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section></div>
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0" style="background-color: black !important;">
      
      <div class="footer-copyright">
        
      <div class="row" >
              <div class="col-md-12 flex-center">
                    <p style="color:white;">Secured Cloud</a> 2018 &copy; VPS Solutions Pvt. Ltd. </p>
              </div>
          </div>

        </div> 
    </footer>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>