<?php
  session_start();
  include('php/define_vars.php');
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Rotary &mdash; Kalwan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="exmaple" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">Rotary.</a>
              </div>
            </div>
            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-block">
                <a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white">
                  <span class="icon-menu h3 text-white"></span>
                </a>
              </span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto" style="height: auto;overflow: scroll; margin-bottom: 20px;">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="" class="nav-link" onclick="closeit();" data-toggle="modal" data-target="#myModal">Admin-Login</a></li>
                  <script type="text/javascript">
                    function closeit(){
                    if ( $('body').hasClass('offcanvas-menu') ) {
                        $('body').removeClass('offcanvas-menu');
                      } 
                    }
                  </script>
                  <li><a href="about.php" class="nav-link">About</a></li>
                  <li><a href="gallary.php" class="nav-link">Gallary</a></li>
                  <li><a href="work.php" class="nav-link">Works</a></li>
                  <li><a href="Kalwan.html" class="nav-link">About Kalwan</a></li>
                  <li><a href="" class="nav-link">District 3030</a></li>
                  <li><a href="https://my.rotary.org/en" class="nav-link">My Rotary</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/panel.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <div class="center" id="logo1"><img src="images/logo3.jpeg"></div>
              <h2 class="mb-4 text-white">Rotary Club of Kalwan</h2>
              <h3 class="mb-4 text-white">Maharashtra, India</h3>
              <h5 class="mb-4 secondary responsive">District 3030 &nbsp&nbsp&nbsp&nbspClub No. 55537</h5>
              <h5 class="mb-4 text-white"></h5>
              <h5 class="mb-4 text-white">Service Above Self</h5>
              <div class="text grey"></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="about-us">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2 class="h4 mb-6">About Rotary</h2>
            <p>     Rotary is a global network of 1.2 million neighbors, friends, leaders, and problem-solvers who see a world where people unite and take action to create lasting change – across the globe, in our communities, and in ourselves.</p>
            <p>     The mission of The Rotary Foundation is to enable Rotarians to advance world understanding, goodwill, and peace through the improvement of health, the support of education, and the alleviation of poverty. </p>
            <p>     The Foundation is a not-for-profit corporation supported solely by voluntary contributions from Rotarians and friends of the Foundation who share its vision of a better world.</p>
            <p>     This support is essential to make possible Foundation grant-funded projects that bring sustainable improvement to communities in need</p>
            <p class="right italic bold"><b>Founded by<br>-Paul Harris</b></p>
            <p><a href="#works" class="btn btn-primary text-white px-5 left margin-bottom scrollLink">Our works</a></p>
          </div>
          <div class="col-md-6">
            <img src="images/paul.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <!-- Services -->
    <div class="site-section bg-light" id="services">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <div class="d-block wrap-icon">
                <i class="fa fa-user fa-3x"></i>
              </div>
              <h3>WE CONNECT PEOPLE</h3>
              <p>Rotary unites more than a million people.. Through Rotary clubs, people from all continents and cultures come together to exchange ideas and form friendship.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <div class="d-block wrap-icon">
                <i class="fa fa-users fa-3x"></i>
              </div>
              <h3>WE TRANSFORM COMMUNITIES</h3>
              <p>We take action locally and globally Each day, our members pour their passion, integrity, and intelligence into completing projects.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <div class="d-block wrap-icon">
                <i class="fa fa-ambulance fa-3x"></i>
              </div>
              <h3>WE SOLVE PROBLEMS</h3>
              <p>No challenge is too big for us For more than 110 years, we’ve bridged cultures and connected continents to champion peace, fight illiteracy and poverty.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <div class="d-block wrap-icon">
                <i class="fa fa-hand-peace-o fa-3x"></i>
              </div>
              <h3>WE RPOMOTE PEACE</h3>
              <p>Rotary fosters understanding across cultures. We train adults and young leaders to prevent and mediate conflict and help refugees who have fled dangerous areas. </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- About the work and projects -->
    <div class="site-section" id="works">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Our Projects</h2>
          </div>
        </div>

        <div class="row justify-content-center">

          <?php
              include('php/connect.php');
              $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
              $result = $con->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  if(empty($row["image2"]) && empty($row["image3"]) && empty($row["image4"]) && empty($row["image5"]))
                  {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-image">
                                <img src="php/upload/'.$row["image1"].'" alt="Image" class="img-fluid size-max">
                              </div>
                              <div class="post-entry-1-contents" style="z-index:2;position:relative;overflow:scroll;">
                                <h2><a>'.$row["title"].'</a></h2>
                                <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div></span>
                                <p>'.$row["content"].'</p>
                              </div>
                            </div>
                          </div>';
                  }elseif (empty($row["image3"]) && empty($row["image4"]) && empty($row["image5"])) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-image">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                 <div class="carousel-inner size-max">
                                    <div class="carousel-item active">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image1"].'" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image2"].'" alt="Second slide">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="post-entry-1-contents" style="z-index:2;position:relative;overflow:scroll;">
                                <h2><a>'.$row["title"].'</a></h2>
                                <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div>
                                </span>
                                <p>'.$row["content"].'</p>
                              </div>
                            </div>
                          </div>';
                  }elseif (empty($row["image4"]) && empty($row["image5"])) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-image">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                 <div class="carousel-inner size-max">
                                    <div class="carousel-item active">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image1"].'" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image2"].'" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image3"].'" alt="Third slide">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="post-entry-1-contents" style="z-index:2;position:relative;overflow:scroll;">
                                <h2><a>'.$row["title"].'</a></h2>
                                <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div>
                                </span>
                                <p>'.$row["content"].'</p>
                              </div>
                            </div>
                          </div>';
                  }elseif (empty($row["image5"])) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-image">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner size-max">
                                    <div class="carousel-item active">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image1"].'" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image2"].'" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image3"].'" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image4"].'" alt="Fourth slide">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="post-entry-1-contents" style="z-index:2;position:relative;overflow:scroll;">
                                <h2><a>'.$row["title"].'</a></h2>
                                <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div>
                                </span>
                                <p>'.$row["content"].'</p>
                              </div>
                            </div>
                          </div>';
                  }else{
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-image">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner size-max">
                                    <div class="carousel-item active">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image1"].'" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image2"].'" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image3"].'" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image4"].'" alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block size-max" style="height:232px;" src="php/upload/'.$row["image5"].'" alt="Fifth slide">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="post-entry-1-contents" style="z-index:2;position:relative;overflow:scroll;">
                                <h2><a>'.$row["title"].'</a></h2>
                                <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div>
                                </span>
                                <p>'.$row["content"].'</p>
                              </div>
                            </div>
                          </div>';
                  }
                }
              } else {
                echo "0 results";
              }
            ?>
        </div>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2 text-center more-btn">
            <a href="work.php">see more...</a>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">News</h2>
          </div>
        </div>
        <div class="row">
          <?php
                $sql1 = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-1-contents" style="overflow:scroll;">      
                                <h2><a>'.$row["title"].'</a></h2>
                                <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div></span>
                                <p>'.$row["content"].'</p>
                              </div>
                            </div>
                          </div>';
                  }
                  } else {
                    echo "0 results";
                  }
              ?>
        </div>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2 text-center more-btn">
            <a href="work.php">see more...</a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Our Documents</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php
                  $sql = "SELECT * FROM documents ORDER BY id DESC LIMIT 3";
                  $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<div class="col-lg-4 col-md-6 mb-4">
                              <div class="post-entry-1 h-100 post-entry-design">
                                <div class="post-entry-image">
                                  <img src="php/upload/'.$row["image"].'" alt="Image" class="img-fluid size-max">
                                </div>
                                <div class="post-entry-1-contents" style="max-height:150px;">
                                  <h2><a>'.$row["title"].'</a></h2>
                                  <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'
                                </div>
                              </div>
                            </div>';
                    }
                  } else {
                    echo "0 results";
                  }
              ?>
        </div>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2 text-center more-btn">
            <a href="work.php">see more...</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Information of current president and secretary -->
    <div class="site-section bg-light" id="testimonials">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Testimonials</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php
                /* For President */
                $sql1 = "SELECT * FROM members WHERE post='president'";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                      echo '<div class="col-lg-4 col-md-6">
                              <div style="margin-bottom:20px;">
                                <div class="person-pic-39219 mb-4">
                                  <img src="php/upload/'.$row["image"].'" alt="Image" class="img-fluid" style="height:81px;">
                                </div>  
                                
                                <blockquote class="quote_39823">
                                  <p>The Rotary ideal is within us that makes us know that when we are serving others we are building ourselves.</p>
                                </blockquote>
                                <p class="make-inline">&mdash; '.$row["name"].'</p>
                                <p class="make-inline secondary" style="float:right;"><a>President</a></p>
                              </div>
                            </div>';
                  }
                } else {
                  echo "0 results";
                }
                /* For secretary */
                $sql1 = "SELECT * FROM members WHERE post='secretary'";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                      echo '<div class="col-lg-4 col-md-6">
                              <div style="margin-bottom:20px;">
                                <div class="person-pic-39219 mb-4">
                                  <img src="php/upload/'.$row["image"].'" alt="Image" class="img-fluid" style="height:81px;">
                                </div>  
                                
                                <blockquote class="quote_39823">
                                  <p>Friendship was the foundation rock on which Rotary was built and tolerance is the element which holds it together.</p>
                                </blockquote>
                                <p class="make-inline">&mdash; '.$row["name"].'</p>
                                <p class="make-inline primary" style="float:right;"><a>Secretary</a></p>
                              </div>
                            </div>';
                  }
                } else {
                  echo "0 results";
                }
                /* For Treasurer */
                $sql1 = "SELECT * FROM members WHERE post='treasurer'";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                      echo '<div class="col-lg-4 col-md-6">
                              <div style="margin-bottom:20px;">
                                <div class="person-pic-39219 mb-4">
                                  <img src="php/upload/'.$row["image"].'" alt="Image" class="img-fluid" style="height:81px;">
                                </div>  
                                
                                <blockquote class="quote_39823">
                                  <p>Without goodwill no system can succeed; with it even an imperfect one can scarcely fail.</p>
                                </blockquote>
                                <p class="make-inline">&mdash; '.$row["name"].'</p>
                                <p class="make-inline secondary" style="float:right;"><a>Treasurer</a></p>
                              </div>
                            </div>';
                  }
                } else {
                  echo "0 results";
                }
                mysqli_close($con);
              ?>
        </div>
        
      </div>
    </div>

    <!-- Collaorations -->
    <div class="site-section bg-white" id="collaborations">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Collaborations</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4" style="height: auto;">
            <div class="post-entry-1 h-100" style="height: auto;">
              <div style="width: 100%;" class="center">
                <img src="images/rotract.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="post-entry-1-contents center" style="height: auto;">
                <h2><a>Rotaract Club Of Kalwan</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019  </span>
                <p>Rotaract clubs bring together people ages 18-30 to exchange ideas with leaders in the community, develop leadership and professional skills, and have fun through service.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4" style="height: auto;">
            <div class="post-entry-1 h-100" style="height: auto;">
              <div style="width: 100%;" class="center">
                <img src="images/innerwheel.png" alt="Image" class="img-fluid">
              </div>
              <div class="post-entry-1-contents center" style="height: auto;">
                <h2><a>InnerWheel Club Of Kalwan</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019  </span>
                <p>International Inner Wheel is one of the largest women's service voluntary organisations in the world and are active in more than 104 countries</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" style="height: auto;">
            <div class="post-entry-1 h-100" style="height: auto;">
              <div style="width: 100%;" class="center">
                <img src="images/rcc.png" alt="Image" class="img-fluid">
              </div>
              <div class="post-entry-1-contents center" style="height: auto;">
                <h2><a>RCC Club Of Kalwan</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 </span>
                <p>RCC members plan and carry out projects in their communities and support local Rotary club projects.RCC members plan and carry out projects in their communities and support local Rotary club projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Admin Login Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Sign in</h4>
          </div>
          
          <!-- Modal body -->
          <form method="post" action="index.php">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fa fa-envelope fa-3x prefix grey-text"></i>
                  <div>
                    <label data-error="wrong" data-success="right" for="defaultForm-email" class="make-inline">Your email</label>
                    <input type="text" name="user" id="defaultForm-email" class="form-control make-inline"> 
                  </div>
                </div>

                <div class="md-form mb-4">
                  <i class="fa fa-lock fa-3x prefix grey-text"></i>
                  <div>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass" class="make-inline">Your password</label>
                    <input type="password" name="pass" id="defaultForm-pass" class="form-control validate make-inline">
                  </div>
                </div>

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer center">
              <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
              <button type="submit" name="login" class="btn btn-primary white make-inline" onclick="">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Checking Login Credentials -->
    <?php
      $user="";
      $pass="";
      if(isset($_POST['login']))
      {
        include('php/connect.php');
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $sql1 = "SELECT * FROM admin_login WHERE id='1'";
        $result1 = $con->query($sql1);
        if ($result1->num_rows > 0) {
          // output data of each row
          while($row = $result1->fetch_assoc()) {
            if($user == $row["username"] && $pass == $row["password"])
            {
              $_SESSION["user"] = $row["username"];
              $_SESSION["pass"] = $row["password"];
              mysqli_close($con);
              echo $_SESSION["user"]."<br>".$_SESSION["pass"];
              echo '<script>window.location.replace("admin-index.php");</script>';
            }else{
              echo "Failed";
            }
          }
        }
        mysqli_close($con);
      }
    ?>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-us" class="scrollLink">About Us</a></li>
                  <li><a href="#services" class="scrollLink">Services</a></li>
                  <li><a href="#works" class="scrollLink">Works</a></li>
                  <li><a href="#testimonials" class="scrollLink">Testimonials</a></li>
                  <li><a href="#collaborations" class="scrollLink">Collaborations</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Connect</h2>
                <div class="social_29128 white mb-5">
                  <a href="https://www.facebook.com/groups/1425748980992029/"><span class="icon-facebook"></span></a>  
                  <a href="https://instagram.com/rotaryinternational?igshid=n02kze5ifo76"><span class="icon-instagram"></span></a>  
                  <a href="https://twitter.com/rotary?lang=en"><span class="icon-twitter"></span></a>  
                 </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>Rotary Club Of Kalwan</p>
              <p>
                This site is developed by <a>Chandan Jitendra Kapadne</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>
    <script type="text/javascript" src="js/typed.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scrolltext.js"></script>
    <script type="text/javascript">
      function login()
      {
        var user="rotary"
        var pass="club"
        username=document.getElementById("defaultForm-email").value;
        password=document.getElementById("defaultForm-pass").value;
        if(username==user && password==pass)
        {
          window.location.replace("admin-index.php");
        }else{
          alert("Incorrect Admin username or password");
        }
      }
      /*$(document).ready(function () {
            $("a.scrollLink").click(function (event) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
            });
        });
      $("a.scrollLink").on('click',function(e) {
          var url = e.target.href;
          var hash = url.substring(url.indexOf("#")+1);
          $('html, body').animate({
              scrollTop: $('#'+hash).offset().top
          }, 500);
          return false;
      });*/

      $('html, body').css({
          'overflow': 'hidden',
          'height': '100%'
        });
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
        $('html, body').css({
          'overflow': 'auto',
          'height': 'auto'
        });
      });

    </script>
  </body>

</html>

