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
            <h2 class="serif">Edit</h2>
          </div>
        </div>
        <div class="row center">
          <div class="col-lg-12">
            <div class="card">
              <article class="card-body">
                <form method="post" action="php/update.php" enctype="multipart/form-data">
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
                    <?php
                      $id='';
                      if (isset($_POST['edit_members'])) {
                        $id = $_POST['id'];
                      }
                      include('php/connect.php');
                      $sql1 = "SELECT * FROM members WHERE id=".$id;
                      $result1 = $con->query($sql1);
                      if ($result1->num_rows > 0) {
                        while($row = $result1->fetch_assoc()) {
                            echo '<div class="form-group">
                                      <label> Name </label>   
                                      <input type="text" name="name" class="form-control" placeholder="" value="'.$row["name"].'">
                                  </div> 
                                  <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="" value="'.$row["email"].'">
                                    <small class="form-text text-muted">We will never share your email with anyone else.</small>
                                  </div> 
                                  <div class="form-group">
                                    <label class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="gender" value="male">
                                      <span class="form-check-label"> Male </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="gender" value="female">
                                      <span class="form-check-label"> Female</span>
                                    </label>
                                  </div> 
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
                                    <input type="text" name="extra_post" class="form-control" placeholder="" value="'.$row["extra_post"].'">
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>DOB</label>
                                      <input type="text" name="dob" class="form-control" value="'.$row["dob"].'">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>WA</label>
                                      <input type="text" name="wa" class="form-control" value="'.$row["wa"].'">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Phone No.</label>
                                      <input type="text" name="phone" class="form-control" value="'.$row["phone"].'">
                                    </div>
                                  </div>  
                                  <input type="hidden" id="custId" name="id" value="'.$row["id"].'">                      
                                  <div class="modal-footer center">
                                    <button type="submit" name="update" value="upload" class="btn btn-primary white">Update</button>
                                  </div>';
                        }
                      } else {
                        echo "0 results";
                      }
                    ?>
                </form>
              </article> <!-- card-body end .// -->
            </div> <!-- card.// -->
          </div> <!-- col.//-->
        </div> <!-- row.//-->
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

