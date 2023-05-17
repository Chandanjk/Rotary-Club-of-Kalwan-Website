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
                <a href="admin-index.php" class="font-weight-bold">Rotary</a>
              </div>
            </div>
            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
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
      <div class="site-section-cover overlay" style="background-image: url('images/panel.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="mb-4 text-white">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center margin-top margin-bottom">
          <div class="col-lg-12">
            <img src="images/certificate.jpeg" class="size-max responsive" style="border:2px solid;border-radius: 20px;overflow: hidden;">
          </div>
        </div>
        <div class="row center margin-top margin-bottom">
          <div class="col-lg-12">
            <h3>ROTARY CLUB OF KALWAN FOUNDED IN 11/05/2001</h3>
            <p class="primary">DISTRICT 3030</p>
            <p class="secondary">CLUB NO. : 55537</p>
          </div>  
        </div>
        <div class="row center margin-top margin-bottom">
          <div class="col-lg-12">
            <p>The prominent citizens of kalwan gathered together to form a social club. Rtn. Dr. Prakash Jagtap, Rtn. Appasaheb Bagad from Satana toon keen interest in the formation of the club. Under the guidance of the District Governer Rtn. Ramesh Khanzode the club started functioning. Dr. S.T. Wagh was the club Charter President and Dr P.H. Kothawade was the Charter Secretary.</p>
            <p>The Objective of Rotary is to encourage and foster the ideal of service as a basis of worthy enterprise and, in particular, to encourage and foster:</p>
            <p>1. The development of acquaintance as an opportunity for service.</p>
            <p>2. High ethical standards in business and professions; the recognition of the worthiness of all useful occupations; and the dignifying of each Rotarian’s occupation as an opportunity to serve society.</p>
            <p>3. The application of the ideal of service in each Rotarian’s personal, business, and community life.</p>
            <p>4. The advancement of international understanding, goodwill, and peace through a world fellowship of business and professional persons united in the ideal of service.</p>
          </div>  
        </div>
        <div class="row center margin-top margin-bottom">
          <div class="col-lg-1"></div>
          <div class="col-lg-10 responsive" style="overflow: hidden;border:0px solid;border-radius: 20px;padding: 0 0;">
            <div id="carouselExampleSlidesOnly" class="carousel size-max" data-ride="carousel" style="z-index:0;">
              <div class="carousel-inner" style="border-radius: 20px;">
                <div class="carousel-item active size-max">
                  <img class="d-block w-100 size-max" src="images/about1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about3.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about4.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about5.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about6.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about7.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about8.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about9.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about10.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about11.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about12.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about13.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about14.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item size-max">
                  <img class="d-block w-100 size-max" src="images/about15.jpeg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-lg-1"></div>  
        </div>
        <div class="row center">
          <div class="col-lg-12">
            <a href="" class="text-white btn btn-danger margin-bottom" data-toggle="modal" data-target="#myModal" style="width: 200px;">Add President</a>
          </div>  
        </div>
        <div class="row align-items-center margin-top margin-bottom">
          <div class="col-lg-12" style="padding: 20px 20px;">
            <div class="row align-items-center">
              <h2 class="center">Past Presidents</h2>
            </div>
            <div class="row align-items-center">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Year</th>
                    <th scope="col">Name</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include('php/connect.php');
                    $sql = "SELECT * FROM presidents";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <th scope="row">'.$row["id"].'</th>
                                <td>'.$row["year"].'</td>
                                <td>'.$row["name"].'</td>
                                <td>
                                  <form method="post" action="php/president_insert.php">
                                    <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                                    <button type="submit" name="delete" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Del</button>
                                  </form>
                                </td>
                              </tr>';
                      }
                    }else {
                      echo "0 results";
                    }
                    mysqli_close($con);
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
      
        <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add President</h4>
          </div>
        
        <!-- Modal body -->
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <article class="card-body">
                  <form method="post" action="php/president_insert.php" enctype="multipart/form-data">
                    <div class="col form-row center file-field">
                        <div class="container col-md-12">
                          <div class="row">
                            <label>Year</label>
                            <input type="text" name="year" class="form-control" placeholder="">
                            <small class="form-text text-muted"></small>
                          </div>
                          <div class="row">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                            <small class="form-text text-muted"></small>
                          </div>
                       <!-- Modal footer -->
                        <div class="modal-footer center">
                          <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
                          <button type="submit" name="save" value="upload" class="btn btn-primary white make-inline">ADD</button>
                        </div>
                  </form>
                </article> <!-- card-body end .// -->
              </div> <!-- card.// -->
            </div> <!-- col.//-->
          </div> <!-- row.//-->
        </div>
      </div>
    </div>

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

    <script src="js/main.js"></script>

  </body>

</html>

