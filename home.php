 <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="<?php echo web_root;?>plugins/homepage/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>Updates</span><br>for the school Activities!</h2>
        <div>
          <a href="#announcement" class="btn-get-started scrollto">Get Started</a>
          <a href="#event" class="btn-services scrollto">Our Events</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="announcement">
      <div class="container">

        <header class="section-header">
          <h3>Announcement</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        </header>

        <div class="row about-container"> 
          <?php include 'announcement.php'; ?>
        </div>
 

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="event" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Events</h3>
          <!-- <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p> -->
        </header>

        <div class="row"> 
          <?php include 'event.php'; ?> 
        </div>

      </div>
    </section><!-- #services -->

 

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

        <?php include 'contact.php'; ?> 

        </div>

      </div>
    </section><!-- #contact -->



            <?php if(!isset($_SESSION['IDNO'])){ ?>
    <!--==========================
      login Section
    ============================-->
    <section id="login" class="section-bg" style="background-color: #DDDDDD">
      <div class="container"> 
        <div class="row"> 
          <?php include 'login.php'; ?> 
        </div>

      </div>
    </section><!-- #services -->
 <?php } ?>

  </main>