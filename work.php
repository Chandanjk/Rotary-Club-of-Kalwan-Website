<?php
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

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
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
                <ul class="site-menu main-menu js-clone-nav ml-auto " style="height: auto;overflow: scroll; margin-bottom: 20px;">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
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
      <div class="overlay" style="height: 100px;overflow: hidden;">
        <img src="images/panel.jpg">
      </div>
    </div>



    <!-- About the work and projects -->
    <!-- About the News and Meetings -->
      <div class="container" style="margin-top: 40px;">
        <ul class="nav nav-tabs" id="myTab row" role="tablist">
          <li class="nav-item col-lg-2">
            <a class="nav-link active" id="projects-tab" data-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="true">Projects</a>
          </li>
          <li class="nav-item col-lg-2">
            <a class="nav-link" id="members-tab" data-toggle="tab" href="#members" role="tab" aria-controls="members" aria-selected="false">Members</a>
          </li>
          <li class="nav-item col-lg-2">
            <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="false">News</a>
          </li>
          <li class="nav-item col-lg-2">
            <a class="nav-link" id="meetings-tab" data-toggle="tab" href="#meetings" role="tab" aria-controls="meetings" aria-selected="false">Meetings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="meetings1-tab" data-toggle="tab" href="#meetings1" role="tab" aria-controls="meetings1" aria-selected="false">Visitors Meetings</a>
          </li>
          <li class="nav-item col-lg-2">
            <a class="nav-link" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false">Documents</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- Projects -->
          <div class="tab-pane fade show active" id="projects" role="tabpanel" aria-labelledby="projects-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Our Work And Projects</h2>
              </div>
            </div>
            <div class="row">
              <?php
                  include('php/connect.php');
                  $sql = "SELECT * FROM posts ORDER BY id DESC";
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
          </div>

          <!-- Members -->
          <div class="tab-pane fade" id="members" role="tabpanel" aria-labelledby="members-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Members</h2>
              </div>
            </div>
            <!-- Division for President, Vice president, and Secretary -->
            <div class="row">
              <?php
                /* For President */
                $sql1 = "SELECT * FROM members WHERE post='president'";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                      echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <a>
                                <div class="profile-userpic center" style="height:242px;background-color:#fcf5dc;">
                                  <img src="php/upload/'.$row["image"].'" style="height:202px;" class="img-responsive" alt="">
                                </div>
                              </a>
                              <div class="post-entry-1-contents center" style="overflow:scroll;">      
                                <h5><a>'.$row["name"].'</a></h5>
                                <p>'.$row["extra_post"].'</p>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    <a>'.$row["post"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    DOB: <a>'.$row["dob"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    WA: <a>'.$row["wa"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    Mob: <a>'.$row["phone"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left secondary make-inline">
                                    Email: <a>'.$row["email"].'</a>
                                  </div>
                                </span>
                              </div>
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
                      echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <a>
                                <div class="profile-userpic center" style="height:242px;background-color:#fcf5dc;">
                                  <img src="php/upload/'.$row["image"].'" style="height:202px;" class="img-responsive" alt="">
                                </div>
                              </a>
                              <div class="post-entry-1-contents center" style="overflow:scroll;">      
                                <h5><a>'.$row["name"].'</a></h5>
                                <p>'.$row["extra_post"].'</p>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    <a>'.$row["post"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    DOB: <a>'.$row["dob"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    WA: <a>'.$row["wa"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    Mob: <a>'.$row["phone"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left secondary make-inline">
                                    Email: <a>'.$row["email"].'</a>
                                  </div>
                                </span>
                              </div>
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
                      echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <a>
                                <div class="profile-userpic center" style="height:242px;background-color:#fcf5dc;">
                                  <img src="php/upload/'.$row["image"].'" style="height:202px;" class="img-responsive" alt="">
                                </div>
                              </a>
                              <div class="post-entry-1-contents center" style="overflow:scroll;">      
                                <h5><a>'.$row["name"].'</a></h5>
                                <p>'.$row["extra_post"].'</p>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    <a>'.$row["post"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    DOB: <a>'.$row["dob"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    WA: <a>'.$row["wa"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    Mob: <a>'.$row["phone"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block mb-2" style="width: 100%;">
                                  <div class="float-left secondary make-inline">
                                    Email: <a>'.$row["email"].'</a>
                                  </div>
                                </span>
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
              <?php
                $sql1 = "SELECT * FROM members";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                    if($row["post"] != "president" && $row["post"] != "treasurer" && $row["post"] != "secretary")
                    {
                      echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <a>
                                <div class="profile-userpic center" style="height:242px;">
                                  <img src="php/upload/'.$row["image"].'" style="height:202px;" class="img-responsive" alt="">
                                </div>
                              </a>
                              <div class="post-entry-1-contents center" style="overflow:scroll;">      
                                <h5><a>'.$row["name"].'</a></h5>
                                <p>'.$row["extra_post"].'</p>
                                <span class="meta d-inline-block" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    <a>'.$row["post"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    DOB: <a>'.$row["dob"].'</a>
                                  </div>
                                </span>
                                <p>'.$row["extra_post"].'</p>
                                <span class="meta d-inline-block" style="width: 100%;">
                                  <div class="float-left primary make-inline">
                                    WA: <a>'.$row["wa"].'</a>
                                  </div>
                                  <div class="float-right primary make-inline">
                                    Mob: <a>'.$row["phone"].'</a>
                                  </div>
                                </span>
                                <span class="meta d-inline-block" style="width: 100%;">
                                  <div class="float-left secondary make-inline">
                                    Email: <a>'.$row["email"].'</a>
                                  </div>
                                </span>
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
          </div>

          <!-- News -->
          <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Our News</h2>
              </div>
            </div>
       
            <div class="row">
              <?php
                $sql1 = "SELECT * FROM news ORDER BY id DESC";
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
          </div>

          <!-- Meetings -->
          <div class="tab-pane fade" id="meetings" role="tabpanel" aria-labelledby="meetings-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Our Meetings</h2>
              </div>
            </div>
       
            <div class="row">
              <?php
                $sql1 = "SELECT * FROM meetings ORDER BY id DESC";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-1-contents" style="overflow:scroll;">      
                                <span class="meta d-inline-block mb-3" style="width: 100%;">Date:'.$row["date0"].'<div class="float-right primary make-inline">Time:<a>'.$row["time0"].'</a></div></span>
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
          </div>

          <!-- Visitors Meetings -->
          <div class="tab-pane fade" id="meetings1" role="tabpanel" aria-labelledby="meetings1-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Visitors Meetings</h2>
              </div>
            </div>
       
            <div class="row">
              <?php
                $sql1 = "SELECT * FROM outside_meetings ORDER BY id DESC";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row = $result1->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100 post-entry-design">
                              <div class="post-entry-1-contents" style="overflow:scroll;">      
                                <span class="meta d-inline-block mb-3" style="width: 100%;">Date:'.$row["date0"].'<div class="float-right primary make-inline">Time:<a>'.$row["time0"].'</a></div></span>
                                <p class="secondary">Place: '.$row["place"].'</p>
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
          </div>

          <!-- Documents -->
          <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Documents</h2>
              </div>
            </div>
            <div class="row">
              <?php
                  $sql = "SELECT * FROM documents ORDER BY id DESC";
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
                  mysqli_close($con);
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="work.php">Works</a></li>
                  <li><a href="gallary.php">Gallary</a></li>
                  <li><a href="kalwan.html">About Kalwan</a></li>
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

  </body>

</html>

