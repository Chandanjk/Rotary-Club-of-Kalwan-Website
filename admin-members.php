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
            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-block">
                <a href="" class="py-5 text-white" data-toggle="modal" data-target="#myModal">
                  <span class="fa fa-plus-square-o fa-2x text-white"></span>
                </a>
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
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <h2 class="serif">Members</h2>
          </div>
        </div>
        <!-- Division for President, Vice president, and Secretary -->
        <div class="row">
          <?php
            include('php/connect.php');
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
                          <div class="float-left primary make-inline" style="width: 50%;">
                            <form method="post" action="edit.php" style="z-index:2;position:relative;">
                              <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                              <button type="submit" name="edit_members" value="edit" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Edit</button>
                            </form>
                          </div>
                          <div class="float-right primary make-inline"style="width: 50%;">
                            <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                              <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                              <button type="submit" name="delete_members" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                            </form>
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
                          <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                            <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                            <button type="submit" name="delete_members" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                          </form>
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
                          <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                            <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                            <button type="submit" name="delete_members" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
                          </form>
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
                          <form method="post" action="php/delete.php" style="z-index:2;position:relative;">
                            <input type="hidden" id="custId" name="id" value="'.$row["id"].'">
                            <button type="submit" name="delete_members" value="delete" class="btn btn-danger white make-inline" style="width:100%;border-radius:0px;">Delete</button>
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

     <!-- Admin Login Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Registration</h4>
          </div>
        
        <!-- Modal body -->
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <article class="card-body">
                  <form method="post" action="php/member_registration.php" enctype="multipart/form-data">
                    <div class="col form-row center file-field">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6" style="height: 160px;float: center;">
                                <img src="#" alt="your image" id="blah" style="width: 123px;">
                              </div>
                              <div class="col-md-6">
                                <input type="file" name="imageupload" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" style="height: 50px;line-height: 50px">
                              </div>
                            </div>
                          </div>
                      </div> <!-- form-group end.// -->
                      <div class="form-group">
                          <label> Name </label>   
                          <input type="text" name="name" class="form-control" placeholder="">
                      </div> <!-- form-group end.// -->
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" name="email" class="form-control" placeholder="">
                      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="male">
                        <span class="form-check-label"> Male </span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <span class="form-check-label"> Female</span>
                      </label>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post" value="president">
                        <span class="form-check-label"> President </span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post" value="treasurer">
                        <span class="form-check-label"> Treasurer </span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post" value="secretary">
                        <span class="form-check-label"> Secretary </span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post" value="member">
                        <span class="form-check-label"> Member </span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label>Extra posts</label>
                      <input type="text" name="extra_post" class="form-control" placeholder="">
                    </div> <!-- form-group end.// -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>DOB</label>
                        <input type="text" name="dob" class="form-control">
                      </div> <!-- form-group end.// -->
                      <div class="form-group col-md-6">
                        <label>WA</label>
                        <input type="text" name="wa" class="form-control">
                      </div> <!-- form-group end.// -->
                      <div class="form-group col-md-6">
                        <label>Phone No.</label>
                        <input type="text" name="phone" class="form-control">
                      </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->                        
                    <!-- Modal footer -->
                    <div class="modal-footer center">
                      <button type="button" class="btn btn-danger white make-inline" data-dismiss="modal">CLOSE</button>
                      <button type="submit" name="save" value="upload" class="btn btn-primary white make-inline">REGISTER</button>
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
    <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(160);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

  </body>

</html>

