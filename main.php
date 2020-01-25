<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Mr.Reporter</title>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./mainstyle.css">
  <link rel="stylesheet" href="cssSlider/animate.css">
  <link href="cssSlider/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar1.css">
  <style type="text/css">
    #map{
      height: 500px;
      width: 85%;
    }
  </style>
</head>
<body>
<!-- partial -->

 <!--/#main-slider-->
 <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/smoke.jpg);background-size: cover;">
          <!--Slider-->


              <div class="container2">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="main.php"><li>Home</li></a>
      <a href="map.php"><li>Map</li></a>
      <a href="mainpolice.php"><li>Police Stations</li></a>
      <a href="maininsurance.php"><li>Insurance Companies</li></a>
      <a href="mainRDA.php"><li>RDA</li></a>
      <a href="bargraph.php"><li>Accidents</li></a>
      <a href="SignUpmain.html"><li>Sign Up</li></a>
      <a href="Signinmain.html"><li>Log In</li></a>
    </ul>
  </div>
</nav>
</div>
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content" style="text-align: left;padding-left: 70px;">
                  <h2 class="animation animated-item-1">Welcome TO <span>Mr.Reporter</span></h2>
                  <p class="animation animated-item-2">login and report your accident.</p>
                  <a class="btn-slide animation animated-item-3" href="Signinmain.html" style="text-decoration: none;">Log in</a>
                </div>
              </div>
              </div>
          </div>
        </div>
      
      </div>
      
    </div>
 
  </section>

<!--services-->
<div style="height: 520px;">
<div class="services" style="background-color: white;z-index: 1;">
    <div class="container" style="height: 520px;z-index: 1;">
    <br>
      <h1 style="color: white;"><b> Mr.Reporter services</b></h1>
      <hr>
      
      <div class="col-md-6">
        <img src="4.svg" class="img-responsive">
        
      </div>

      <div class="col-md-6">
        <div class="media">
          <ul>
            <li>
              <div class="media-left">
                <i class="fa fa-pencil"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading" style="color: white;">Report Accidents</h4>
                <br><br><br><br>
                
              </div>
            </li>
            <li>
              <div class="media-left">
                <i class="fa fa-upload"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading" style="color: white;">Upload Photos</h4>
                <br><br><br><br>
                
              </div>
            </li>
            <li>
              <div class="media-left">
                <i class="fa fa-phone-square"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading" style="color: white;">Contact Authorities</h4>
                <br><br><br><br>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="contact_us text-center">
        <div class="content" style="height: 400px;width: 100%">
            <div class="container" style="height:10px;">
                <h1>Tell Us What You Feel</h1>
                <h4>Feel Free To Contact Us Any Time</h4>
                <div class="row">
                    <div role="form">
                      <form action="info.php" method="post" enctype="multipart/form-data">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="User Name" name="uname" style="width: 500px;margin-left: 50px;" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Email" name="email" style="width: 500px;margin-left: 50px;" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Cell Phone" name="phoneno" style="width: 500px;margin-left: 50px;" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message" name="msg"
                                style="width: 500px;" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger btn-block" value="Contact Us" style="width: 500px;">
                            </div>
                        </div>
                      </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'></script><script  src="./script.js"></script>



</body>
</html>