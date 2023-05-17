<?php
  session_start();
  include('php/define_vars.php');
  include('php/connect.php');
  $sql1 = "SELECT * FROM admin_login WHERE id='1'";
  $result1 = $con->query($sql1);
  if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
      if($_SESSION["user"] == $row["username"] && $_SESSION["pass"] == $row["password"])
      {
        mysqli_close($con);
      }else{
        mysqli_close($con);
        echo '<script>window.location.replace("index.php");</script>';
      }
    }
  }
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
                <a href="admin-index.php" class="font-weight-bold">Rotary.</a>
              </div>
            </div>
            <div class="col-9 text-right">
              <span class="d-inline-block d-lg-block">
                <a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white">
                  <span class="icon-menu h3 text-white"></span>
                </a>
              </span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto " style="height: auto;overflow: scroll; margin-bottom: 20px;">
                  <li class="active"><a href="admin-index.php" class="nav-link">Home</a></li>
                  <li><a href="admin-about.php" class="nav-link">About</a></li>
                  <li><a href="admin-gallary.php" class="nav-link">Gallary</a></li>
                  <li><a href="admin-work.php" class="nav-link">Projects and Work</a></li>
                  <li><a href="admin-members.php" class="nav-link">Members</a></li>
                  <li><a href="admin-news.php" class="nav-link">News and Meetings</a></li>
                  <li><a href="admin-documents.php" class="nav-link">Documents</a></li>
                  <li><a href="Kalwan.html" class="nav-link">About Kalwan</a></li>
                  <li><a href="" class="nav-link">District 3030</a></li>
                  <li><a href="https://my.rotary.org/en" class="nav-link">My Rotary</a></li>
                  <li>
                    <form method="post" action="admin-index.php">
                      <button type="submit" name="logout" class="btn btn-primary white make-inline" style="width: 100%;border-radius: 0px;">LOGOUT</button>
                    </form>
                  </li>
                  <?php
                    if(isset($_POST['logout']))
                    {
                      session_destroy();
                      header('location: index.php');
                    }
                  ?>
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


    
    <div class="site-section">
      <!-- Buttons to add news and meetings -->
      <div class="container">
        <div class="row center">
          <div class="col-lg-4">
            <a href="" class="text-white btn btn-danger margin-bottom" data-toggle="modal" data-target="#myNewsModal" style="width: 202px;">Add News</a>
          </div>
          <div class="col-lg-4">
            <a href="" class="text-white btn btn-danger margin-bottom" data-toggle="modal" data-target="#myMeetingsModal" style="width: 202px;">Add Meeting</a>
          </div>
          <div class="col-lg-4">
            <a href="" class="text-white btn btn-danger margin-bottom" data-toggle="modal" data-target="#myOutsideMeetingsModal" style="width: 202px;">Add Visitors Meeting</a>
          </div>
        </div>
      </div>

      <!-- About the News and Meetings -->
      <div class="container">
        <ul class="nav nav-tabs center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="meetings-tab" data-toggle="tab" href="#meetings" role="tab" aria-controls="meetings" aria-selected="false">Meetings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="meetings1-tab" data-toggle="tab" href="#meetings1" role="tab" aria-controls="meetings1" aria-selected="false">Visitors Meetings</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <h2 class="serif">Our News</h2>
              </div>
            </div>
       
            <div class="row">
              <?php
                include('php/connect.php');
                /* For President */
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
                              <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                                <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                                <button type="submit" name="delete_news" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                              </form>
                            </div>
                          </div>';
                  }
                  } else {
                    echo "0 results";
                  }
              ?>
            </div>
          </div>
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
                              <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                                <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                                <button type="submit" name="delete_meetings" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                              </form>
                            </div>
                          </div>';
                  }
                  } else {
                    echo "0 results";
                  }
              ?>
            </div>
          </div>
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
                              <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                                <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                                <button type="submit" name="delete_meetings" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                              </form>
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

    <!-- News Modal -->
    <div class="modal fade" id="myNewsModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">News</h4>
          </div>
        
        <!-- Modal body -->
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <article class="card-body">
                  <form method="post" action="php/news_insert.php" enctype="multipart/form-data">
                    <div class="col form-row center file-field">
                        <div class="container col-md-12">
                          <div class="row">
                            <label>Title</label>
                            <input type="text" name="title1" class="form-control" placeholder="">
                            <small class="form-text text-muted"></small>
                          </div>
                           <div class="row">
                            <div class="col-md-6">
                              <label style="float: left;">Date</label>
                              <input type="text" name="date1" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                            <div class="col-md-6">
                              <label style="float: left;">Place</label>
                              <input type="text" name="place1" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                          </div>
                          <div class="row">
                            <label for="exampleFormControlTextarea3">Content</label>
                            <textarea class="form-control" name="content1" id="exampleFormControlTextarea3" rows="7"></textarea>
                          </div>
                        </div> 
                       <!-- Modal footer -->
                        <div class="modal-footer center">
                          <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
                          <button type="submit" name="save1" value="upload" class="btn btn-primary white make-inline">POST</button>
                        </div>
                  </form>
                </article> <!-- card-body end .// -->
              </div> <!-- card.// -->
            </div> <!-- col.//-->
          </div> <!-- row.//-->
        </div>
      </div>
    </div>

    <!-- Meetings Modal -->
    <div class="modal fade" id="myMeetingsModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Meetings</h4>
          </div>
        
        <!-- Modal body -->
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <article class="card-body">
                  <form method="post" action="php/meetings_insert.php" enctype="multipart/form-data">
                    <div class="col form-row center file-field">
                        <div class="container col-md-12">
                           <div class="row">
                            <div class="col-md-6">
                              <label style="float: left;">Date</label>
                              <input type="text" name="date2" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                            <div class="col-md-6">
                              <label style="float: left;">Time</label>
                              <input type="text" name="time2" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                          </div>
                          <div class="row">
                            <label for="exampleFormControlTextarea3">Content</label>
                            <textarea class="form-control" name="content2" id="exampleFormControlTextarea3" rows="7"></textarea>
                          </div>
                        </div> 
                       <!-- Modal footer -->
                        <div class="modal-footer center">
                          <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
                          <button type="submit" name="save2" value="upload" class="btn btn-primary white make-inline">POST</button>
                        </div>
                  </form>
                </article> <!-- card-body end .// -->
              </div> <!-- card.// -->
            </div> <!-- col.//-->
          </div> <!-- row.//-->
        </div>
      </div>
    </div>

    <!-- Outside Meetings Modal -->
    <div class="modal fade" id="myOutsideMeetingsModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Visitors Meetings</h4>
          </div>
        
        <!-- Modal body -->
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <article class="card-body">
                  <form method="post" action="php/meetings_insert.php" enctype="multipart/form-data">
                    <div class="col form-row center file-field">
                        <div class="container col-md-12">
                           <div class="row">
                            <div class="col-md-6">
                              <label style="float: left;">Date</label>
                              <input type="text" name="date3" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                            <div class="col-md-6">
                              <label style="float: left;">Time</label>
                              <input type="text" name="time3" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                          </div>
                          <div class="row">
                            <label for="exampleFormControlTextarea3">Place</label>
                            <input type="text" name="place3" class="form-control" placeholder="">
                          </div>
                          <div class="row">
                            <label for="exampleFormControlTextarea3">Content</label>
                            <textarea class="form-control" name="content3" id="exampleFormControlTextarea3" rows="7"></textarea>
                          </div>
                        </div> 
                       <!-- Modal footer -->
                        <div class="modal-footer center">
                          <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
                          <button type="submit" name="save3" value="upload" class="btn btn-primary white make-inline">POST</button>
                        </div>
                  </form>
                </article> <!-- card-body end .// -->
              </div> <!-- card.// -->
            </div> <!-- col.//-->
          </div> <!-- row.//-->
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
                  <li><a href="admin-about.php">About Us</a></li>
                  <li><a href="admin-members.php">Testimonials</a></li>
                  <li><a href="admin-work.php">Work and Projects</a></li>
                  <li><a href="admin-news.php">News and Meetings</a></li>
                  <li><a href="admin-documents.php">Documents</a></li>
                  <li><a href="admin-gallary.php">Gallary</a></li>
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

