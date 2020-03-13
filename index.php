<?php
include "connections.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Ventura Hunt 3.0</title>

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/d16edb7c21.js" crossorigin="anonymous"></script>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" type="text/css">

  <!-- Favicon-->
  <link rel="icon" href="img\core-img\favicon (2).ico" type="image/gif" size="16x16">

</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area wow fadeInDown" data-wow-delay="500ms">
    <!-- Navbar Area -->
    <div class="ventura-main-menu" id="sticker">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="venturaNav">

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Home"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                  <li><a href="#" data-toggle="modal" data-target="#guidelineModal">Guidelines</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                </ul>
              </div>
              <!-- Nav End -->
            </div>
            <!-- Top Social Info -->
            <div class="top-social-info">
              <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- Guidelines -->

<!-- Modal: guidelineModal -->
<div class="modal fade" id="guidelineModal" tabindex="-1" role="dialog" aria-labelledby="guidelineModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <!--Header-->
     <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Guidelines</h4>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <!--Body-->
     <div class="modal-body" style="max-height:420px;position:relative;overflow-y:auto;">
       Ventura Hunt is an online cryptic hunt game. Participants will be provided with a picture which they
   will have to decipher using deductive skills and adroit reasoning. Answer to these questions can be
   based on movies, books, famous quotes, location, different languages important events and more.
   A question will test your ability to decipher a very simple message hidden
   somewhere in the picture plus you will need to search properly. Remember Search
   Engines are your guns for this intellectual war. Also, you will be provided with
   hints which will ultimately get you on the right path.<br/><br/>
   Exampli Gratia.
   <br/><br/>
   <img src="img/core-img/example.png"/><br/><br/>
   What do you see in the picture?<br/>
   <i class="fa fa-angle-right"></i> A thermometer<br/>
   <i class="fa fa-angle-right"></i> A tank<br/>
   <i class="fa fa-angle-right"></i> A banner of SALE written on it<br/><br/><br/>
   So how do we solve it?<br/><br/>
   <i class="fa fa-hand-o-right"></i> Let's try them all out in the answer box. It says wrong answer.<br/><br/>
   <i class="fa fa-hand-o-right"></i> Searching the 'thermometer tank sale' on google does not land us anywhere conclusive<br/><br/>
   <i class="fa fa-hand-o-right"></i> Let's take them two at a time. In this case googling for 'tanksale' lands us on some LinkedIn id and a wiki page of Shivani Tanksale, a well-known face on TV serials and movies. Trying both them out also gives us wrong answer.<br/><br/>
   <i class="fa fa-hand-o-right"></i> Looking for hints we go on to check the page source where we find a comment - "seek for a 'consort'". Googling the whole thing doesn't do us any good but just consort lands you with the meaning of the word - wife, husband or companion.<br/><br/>
   <i class="fa fa-hand-o-right"></i> We search for the partners of both of the personalities we found above. Luckily we find out that spouse of Shivani Tanksale is Sumeet Vyas, a famous actor from the exciting series 'Permanent Roommates' and 'Tripling' by TVF.  We know we are on the right track as even TVF's logo also has a thermometer in it. We try each one of the out.<br/> <br/>
   <i class="fa fa-hand-o-right"></i> Finally writing 'theviralfever' in the answer box gives us the correct answer message<br/><br/>
   In case you think that above mentioned steps are too complicated and illusive. You will be getting a number of hints for questions to guide you on the right track. Have fun hunting!!!<br/><br/>
     </div>
   </div>
 </div>
</div>

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="guidelineModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <!--Header-->
     <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <!--Body-->
      <div class="modal-body" style="max-height:420px;position:relative;overflow-y:auto;">
        <form name="signup" action="" method="post">
          <input type="text" class="form-control" name="name" placeholder="Name" required="" style="margin: 7px 0px;">
          <input type="text" class="form-control" name="institute" placeholder="Institute/College" style="margin: 7px 0px;">
          <input type="text" class="form-control" name="username" placeholder="Username" required="" style="margin: 7px 0px;">
          <input type="password" class="form-control" name="password" placeholder="Password" required="" style="margin: 7px 0px;">
          <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required="" style="margin: 7px 0px;">
          <input type="text" class="form-control" name="contact" placeholder="Contact No." required="" style="margin: 7px 0px;">
          <input type="text" class="form-control" name="email" placeholder="Email" required="" style="margin: 7px 0px;">
          <input type="submit" name="signup" class="btn ventura-btn mt-15" value="Sign Up"></button>
        </form>
        <?php
          if(isset($_POST['signup'])){

              $count=0;
              $sqlu="SELECT username from `players`";
              $resu = mysqli_query($db,$sqlu);

              while($row=mysqli_fetch_assoc($resu)){
              if($row['username']==$_POST['username']){
              $count = $count + 1;
          }
          }
            if($_POST['password']!=$_POST['cpassword']){
              ?>
            <script type="text/javascript">
              alert('Passwords does not match.Try Again.');
            </script>
            <?php
            }
            else if($count!=0){
            ?>
            <script type="text/javascript">
              alert('Username Taken. Try another Username.');
            </script>
            <?php
          }
          else{
            mysqli_query($db,"INSERT INTO `players` VALUES ('$_POST[name]','$_POST[institute]','$_POST[username]','$_POST[password]','$_POST[contact]','$_POST[email]','0');");

            ?>
            <script type="text/javascript">
              alert('Registration successfull');
            </script>
            <?php
          }
          }
          ?>
      </div>
   </div>
 </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="guidelineModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <!--Header-->
     <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Login</h4>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <!--Body-->
      <div class="modal-body" style="max-height:420px;position:relative;overflow-y:auto;">
        <form name="login" action="" method="post">
          <input type="text" class="form-control" name="username" placeholder="Username" style="margin: 10px 0px;">
          <input type="password" class="form-control" name="password" placeholder="Password" style="margin: 10px 0px;">
          <input type="submit" name="login" class="btn ventura-btn mt-15" value="Login"></button>
        </form>
        <?php

          if(isset($_POST['login'])){
            $count=0;
            $res=mysqli_query($db,"SELECT * FROM `players` WHERE username='$_POST[username]' && password='$_POST[password]';");
            $row = mysqli_fetch_assoc($res);
            $count=mysqli_num_rows($res);

            if($count==0){
            ?>
            <script type="text/javascript">
              alert("The Username and Password doesn't match.");
            </script>
            <?php
          }

          else{
              $_SESSION['login_user'] = $_POST['username'];
            ?>
            <script type="text/javascript">
              window.location="arena.php"
            </script>
            <?php
          }

          }

          ?>
      </div>
   </div>
 </div>
</div>


 <!-- End -->

  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <!-- Img Slides -->
    <div class="img-slides owl-carousel">

      <!-- Single Slide -->
      <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
        <!-- Blog Content -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="400ms">Let's Unravel the Mystery</h2>
                <p><a href="#" class="btn ventura-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Get Started</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Slide -->
      <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/bg2.jpg);">
        <!-- Blog Content -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="400ms">Choose Wisely!</h2>
                <p data-animation="fadeInUp" data-delay="700ms">“Mystery creates wonder and wonder is the basis of man's desire to understand.”<br />― Neil Armstrong</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Single Slide -->
      <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/bg3.jpg);">
        <!-- Blog Content -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="400ms">Look for Clues🔍</h2>
                <p data-animation="fadeInUp" data-delay="700ms">"Come in close, because the more you think you see, the easier it'll to fool you."<br />- Now You See Me Movie</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- ##### Hero Area End ##### -->

  <!-- ##### About Area Start ##### -->
  
  <div class="about-area about-area section-padding-50 bg-pattern2">
    <!-- Main about Area -->
    <div class="main-about-area section-padding-100-0">
      <div class="text-center mb-70 wow fadeInUp single-footer-widget" data-wow-delay="100ms">
        <h2 style="color:black;font-family: Garamond;">What is Ventura Hunt 3.0 ?</h2><br />
        <h4 style="color:black;font-family: Garamond;">An Online Treasure Hunt!</h4>
      </div>
      <div class="container">
        <div class="row">
          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="100ms">
              <div class="widget-title">
                <h4><i class="fas fa-chevron-circle-right"></i></i>Introduction</h4><br>
              </div>
              <div class="widget-content">
                <p>VenturaHunt 3.0 is an online cryptic treasure hunt organised by SIAM(Society for Industrial and Applied Mathematics) Student Chapter IIT(ISM) Dhanbad. It might seem impenetrable at first, but with a little work it’s more like a
                  mental treasure hunt. All you have to do is use your common sense to decipher the clues.</p>
              </div>
            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
              <div class="widget-title">
                <h4><i class="fas fa-chevron-circle-right"></i>What Actually will be happening?</h4>
              </div>
              <div class="widget-content">
                <p>VenturaHunt 3.0 is a 48-hour event taking you through a series of mind-bending puzzles, each step leading to the next.You'll be on a quest, putting heads together, searching for clues. The real idea is to check the divergence and
                  creativity of your thinking, problem solving ability and patience. Participate to discover the Sherlok inside you!</p>
              </div>
            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="500ms">
              <div class="widget-title">
                <h4><i class="fas fa-chevron-circle-right"></i>What will I gain?</h4><br>
              </div>
              <div class="widget-content">
                <p>VenturaHunt is a place where your thirst for mystries and mind games sahll be quenched as you proceed in solving the riddles. Your logical and analytical thinkimg will be put to test while you rack your brains looking for answers.
                  Explore, dissect and win every level to reach to the top where the real mystery awaits and the Sherlock in you shall behold the glory. Hail Hydra!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### About Area End ##### -->

  <!-- ##### Contribution Area Start ##### -->
  <section class="latest-articles-area section-padding-100-0 bg-img bg-pattern bg-fixed" style="background-image: url(img/bg-img/bg6.jpg);">
    <div class="container">
      <!-- Single Column -->
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
            <div class="article-content">
              <h3 class="contri-title">Menu</h3>
              <ul style="color: #FFF;">
                <li><a href="#">Home</a></li>
                <li><a href="#"  data-toggle="modal" data-target="#guidelineModal">Guidelines</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
            <div class="article-content">
              <h3 class="contri-title">Coordinators</h3>
              <ul style="color: #FFF;">
                <li>John</li>
                <li>Sam</li>
                <li>Andy</li>
                <li>Michael</li>
                <li>Jim</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
            <div class="article-content">
              <h3 class="contri-title">Organizers</h3>
              <ul style="color: #FFF;">
                <li>Clent</li>
                <li>Tom</li>
                <li>Dwayne</li>
                <li>Chris</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6  col-6">
          <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
            <div class="article-content">
              <h3 class="contri-title">Special Thanks to</h3>
              <ul style="color: #FFF;">
                <li>Daniel</li>
                <li>Spongebob</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ##### Contribution Area End ##### -->
  <?php
  include 'footer.php';
  ?>
