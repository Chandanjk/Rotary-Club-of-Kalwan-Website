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
      <!-- Button to add documents -->
      <div class="container">
        <div class="row center">
          <div class="col-lg-12">
            <a href="" class="text-white btn btn-danger margin-bottom" data-toggle="modal" data-target="#myModal" style="width: 150px;">Add Post</a>
          </div>  
        </div>
      </div>

      <!-- About the work and projects -->
      <div class="container">
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
                  echo '<div class="col-lg-4 col-md-6 mb-4"><div class="post-entry-1 h-100 post-entry-design">
                          <div class="post-entry-image">
                            <img src="php/upload/'.$row["image1"].'" alt="Image" class="img-fluid size-max">
                          </div>
                          <div class="post-entry-1-contents" style="z-index:2;position:relative;overflow:scroll;">
                            <h2><a>'.$row["title"].'</a></h2>
                            <span class="meta d-inline-block mb-3" style="width: 100%;">'.$row["date0"].'<div class="float-right primary make-inline"><a>'.$row["place"].'</a></div></span>
                            <p>'.$row["content"].'</p>
                          </div>
                          <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                            <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                            <button type="submit" name="delete_post" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                          </form>
                        </div>
                      </div>';
                }elseif (empty($row["image3"]) && empty($row["image4"]) && empty($row["image5"])) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">
                          <div class="post-entry-1 h-100 post-entry-design">
                            <div class="post-entry-image">
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="z-index:1;">
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
                            <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                              <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                              <button type="submit" name="delete_post" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                            </form>
                          </div>
                        </div>';
                }elseif (empty($row["image4"]) && empty($row["image5"])) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">
                          <div class="post-entry-1 h-100 post-entry-design">
                            <div class="post-entry-image">
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="z-index:1;">
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
                            <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                              <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                              <button type="submit" name="delete_post" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                            </form>
                          </div>
                        </div>';
                }elseif (empty($row["image5"])) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">
                          <div class="post-entry-1 h-100 post-entry-design">
                            <div class="post-entry-image">
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="z-index:1;">
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
                            <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                              <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                              <button type="submit" name="delete_post" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                            </form>
                          </div>
                        </div>';
                }else{
                  echo '<div class="col-lg-4 col-md-6 mb-4">
                          <div class="post-entry-1 h-100 post-entry-design">
                            <div class="post-entry-image">
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="z-index:1;">
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
                            <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                              <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                              <button type="submit" name="delete_post" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                            </form>
                          </div>
                        </div>';
                }
            }
            } else {
              echo "0 results";
            }
            mysqli_close($con);
          ?>

        </div>
      </div>
    </div>

    <!-- Post Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Post</h4>
          </div>
        
        <!-- Modal body -->
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <article class="card-body">
                  <form method="post" action="php/post_insert.php" enctype="multipart/form-data">
                    <div class="col form-row center file-field">
                        <div class="container col-md-12">
                          <div class="row" style="text-align: center;display: inline-block;">
                            <input type="file" name="files[]" multiple accept="image/gif, image/jpeg, image/png" onchange="readURL()" style="height: 60px;text-align: center;line-height: 50px;">
                          </div>
                          <div class="row">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="">
                            <small class="form-text text-muted"></small>
                          </div>
                           <div class="row">
                            <div class="col-md-6">
                              <label style="float: left;">Date</label>
                              <input type="text" name="date" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                            <div class="col-md-6">
                              <label style="float: left;">Place</label>
                              <input type="text" name="place" class="form-control" placeholder="">
                              <small class="form-text text-muted"></small>
                            </div>
                          </div>
                          <div class="row">
                            <label for="exampleFormControlTextarea3">Content</label>
                            <textarea class="form-control" name="content" id="exampleFormControlTextarea3" rows="7"></textarea>
                          </div>
                        </div> 
                       <!-- Modal footer -->
                        <div class="modal-footer center">
                          <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
                          <button type="submit" name="save" value="upload" class="btn btn-primary white make-inline">POST</button>
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

