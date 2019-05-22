<?php
session_start();

if(isset($_POST['username'],$_POST['password'])){

  include "db/database.php";
  $db = new database();


  $username = mysqli_real_escape_string($db->connect,htmlspecialchars($_POST['username']));
  $password = mysqli_real_escape_string($db->connect,htmlspecialchars($_POST['password']));
  $flag = $db->login($username,$password);
  
  if(mysqli_num_rows($flag) === 1){
    $_SESSION["login"] = true;
    header("Location: dashboard/index.php");
    exit;
  }
  
  $error = true;
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <script src="dashboard/assets/js/plugins/sweetalert2.js"></script>
</head>

<body class="login-page sidebar-collapse">
  <?php if(isset($error)) :?>
  <script>
  swal.fire({
  type: 'error',
  text: 'Orang Luar dilarang Masuk!'
  });
  
  </script>
  <?php endif ?>
  <div class="page-header" style="background-color: #130f40;; background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
         
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="username" class="form-control" placeholder="First Name..." required>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input  name="password" type="password" class="form-control" placeholder="Password..." required>
                </div>
              </div>
              <div class="footer text-center">
                <Button type="submit" class="btn btn-primary btn-wd btn-lg">Login</Button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--   Core JS Files   -->
  <script src="dashboard/assets/js/plugins/sweetalert2.js"></script>
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>