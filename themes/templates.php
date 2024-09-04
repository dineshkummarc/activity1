<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Activity Logger</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo web_root;?>plugins/homepage/img/favicon.png" rel="icon">
  <link href="<?php echo web_root;?>plugins/homepage/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo web_root;?>plugins/homepage/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo web_root;?>plugins/homepage/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo web_root;?>plugins/homepage/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style type="text/css">
    .notiflbl{
      background-color: #DC5145;
      padding: 0px 10px;
      border-radius: 5px;
      color: #ffff;
    }
  </style>
</head>
 
 <?php
  // $q = isset($_GET['q']) ? $_GET['q'] : ""; 

  //   $IDNO = $_SESSION['IDNO']; 
  //   $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}'";
  //   $mydb->setQuery($sql);
  //   $cur = $mydb->executeQuery(); 
  //   $notifcnt = $mydb->num_rows($cur); 
 ?> 


<?php
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 

    $IDNO = $_SESSION['IDNO']; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Event'";
    $mydb->setQuery($sql);
    $cur = $mydb->executeQuery(); 
    $notifcnt_event = $mydb->num_rows($cur); 
 ?>


 <?php
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 

    $IDNO = isset($_SESSION['IDNO'])?$_SESSION['IDNO']:""; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Announcement'";
    $mydb->setQuery($sql);
    $cur = $mydb->executeQuery(); 
    $notifcnt_announcement = $mydb->num_rows($cur); 
 ?>

<body >
 <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><!-- <img src="<?php echo web_root;?>plugins/homepage/img/logo.png" alt="" class="img-fluid"> --></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo web_root;?>index.php">Home</a></li>
          <li><?php echo isset($_GET['q']) ? '<a href="index.php?#announcement">' : '<a href="#announcement">' ; ?>Announcements <label id="countnotifannouncement" class="label label-danger notiflbl"><?php echo $notifcnt_announcement; ?></label> </a></li>
          <li><?php echo isset($_GET['q']) ? '<a href="index.php?#event">' : '<a href="#event">'; ?>Events <label id="countnotifevent" class="label label-danger notiflbl"><?php echo $notifcnt_event; ?></label> </a></li>
          <li><?php echo isset($_GET['q']) ? '<a href="index.php?#contact">' : '<a href="#contact">' ;?>Contact</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->

            <?php if(isset($_SESSION['IDNO'])){ 
                    ?>  
                    <?php $student = New Student();
                    $singlestudent = $student->single_students($_SESSION['IDNO']);

                    ?>

          <li class="drop-down"><a href="#">User</a>
            <ul>
             <!--  <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="<?php echo web_root;?>index.php?q=profile">Profile</a></li>
              <li><a href="<?php echo web_root; ?>logout.php">Logout</a></li>
              <!-- <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>

          <?php }else{ ?> 
              <li class="<?php echo ($q=='login') ? 'active' : ''; ?>"><a href="#login"> Login</a></li> 
          <?php } ?>
          <!-- <li><a href="#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->



 

 <section id="content"> 
      <?php require_once $content; ?>   
 </section>

  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>NewBiz</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo web_root;?>plugins/homepage/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/easing/easing.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/wow/wow.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo web_root;?>plugins/homepage/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo web_root;?>plugins/homepage/js/main.js"></script>

</body>
</html>



 

<script type="text/javascript"> 
setInterval(function(){loadnotification()},3000); 
function loadnotification(){

  // alert('asdsa')

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",   
        url: <?php echo web_root; ?>+"loadnotification.php?type=event",                      
        dataType: "text",   //expect html to be returned  
        data:{action:''},               
        success: function(data){                    
          $("#countnotifevent").html(data); 
             // alert(data);
            
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",   
        url: <?php echo web_root; ?>+"loadnotification.php?type=announcement",                      
        dataType: "text",   //expect html to be returned  
        data:{action:''},               
        success: function(data){                    
          $("#countnotifannouncement").html(data); 
             // alert(data);
            
        }

    });
}
 
          
 

  </script>     

</body>
</html>