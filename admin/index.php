<!--Server Side Scripting Language to inject login code-->
<?php
    session_start();
    include('vendor/inc/config.php');//get configuration file
    if(isset($_POST['admin_login']))
    {
      $a_email=$_POST['a_email'];
      $a_pwd=($_POST['a_pwd']);//
      $stmt=$mysqli->prepare("SELECT a_email, a_pwd, a_id FROM tms_admin WHERE a_email=? and a_pwd=? ");//sql to log in user
      $stmt->bind_param('ss',$a_email,$a_pwd);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($a_email,$a_pwd,$a_id);//bind result
      $rs=$stmt->fetch();
      $_SESSION['a_id']=$a_id;//assaign session to admin id
      //$uip=$_SERVER['REMOTE_ADDR'];
      //$ldate=date('d/m/Y h:i:s', time());
      if($rs)
      {//if its sucessfull
        header("location:admin-dashboard.php");
      }

      else
      {
      #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
      $error = "Access Denied Please Check Your Credentials";
      }
  }
?>
<!--End Server side-->



<!-- <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Vehicle Booking System Transport Saccos, Matatu Industry">
  <meta name="author" content="MartDevelopers">

  <title>Vehicle Booking System - Admin Login</title> -->

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
  <!-- <link href="vendor/css/sb-admin.css" rel="stylesheet"> -->

<!-- </head>

<body class="bg-dark"> -->
  <!--Trigger Sweet Alert-->
  <!-- <?php if(isset($error)) {?> -->
  <!--This code for injecting an alert-->
      <!-- <script>
            setTimeout(function () 
            { 
              swal("Failed!","<?php echo $error;?>!","error");
            },
              100);
      </script>
					
  <?php } ?> -->

  <!-- <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">

        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="a_email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name ="a_pwd" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password 
              </label>
            </div>
          </div>
          <input type="submit"  class="btn btn-success btn-block" name="admin_login" value="Login">
        </form>

        <div class="text-center">
        <a class="d-block small mt-3" href="../index.php">Home</a>
          <a class="d-block small" href="admin-reset-pwd.php">Forgot Password?</a>
        </div> 

      </div>
    </div>
  </div> -->

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
  <!--Sweet alerts js-->
  <!-- <script src="vendor/js/swal.js"></script>


</body>

</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Vehicle Booking System Transport Saccos, Matatu Industry">
  <meta name="author" content="MartDevelopers">
  <title>Vehicle Booking System - Admin Login</title>
  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="vendor/css/sb-admin.css" rel="stylesheet">
  <!-- Custom CSS for the page-->
  <style>
    body {
      background: #f8f9fc;
      font-family: 'Nunito', sans-serif;
    }
    .card {
      border: none;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-header {
      background: #4e73df;
      color: #fff;
      text-align: center;
      font-size: 1.5rem;
    }
    .btn-google, .btn-facebook {
      color: #fff;
      margin-top: 10px;
    }
    .btn-google {
      background: #ea4335;
    }
    .btn-facebook {
      background: #3b5998;
    }
    .form-control {
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <!--Trigger Sweet Alert-->
  <?php if(isset($error)) {?>
  <!--This code for injecting an alert-->
      <script>
            setTimeout(function () 
            { 
              swal("Failed!","<?php echo $error;?>!","error");
            },
              100);
      </script>
  <?php } ?>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="a_email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name ="a_pwd" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password 
              </label>
            </div>
          </div>
          <input type="submit"  class="btn btn-success btn-block" name="admin_login" value="Login">
        </form>
        <hr>
        <div class="text-center">
          <button class="btn btn-google btn-block" onclick="googleLogin()">Login with Google</button>
          <button class="btn btn-facebook btn-block" onclick="facebookLogin()">Login with Facebook</button>
        </div>
        <hr>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Home</a>
          <a class="d-block small" href="admin-reset-pwd.php">Forgot Password?</a>
        </div> 
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Sweet alerts js-->
  <script src="vendor/js/swal.js"></script>
  <!-- Google and Facebook SDKs -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
  <!-- Custom JavaScript for Google and Facebook login -->
  <script>
    function googleLogin() {
      gapi.load('auth2', function() {
        const auth2 = gapi.auth2.init({
          client_id: 'YOUR_GOOGLE_CLIENT_ID',
          cookiepolicy: 'single_host_origin',
        });
        auth2.signIn().then(function(googleUser) {
          const profile = googleUser.getBasicProfile();
          const id_token = googleUser.getAuthResponse().id_token;
          // Send id_token to the server
          console.log('ID: ' + profile.getId());
          console.log('Name: ' + profile.getName());
          console.log('Email: ' + profile.getEmail());
        });
      });
    }

    function facebookLogin() {
      FB.init({
        appId: 'YOUR_FACEBOOK_APP_ID',
        cookie: true,
        xfbml: true,
        version: 'v3.2'
      });

      FB.login(function(response) {
        if (response.authResponse) {
          FB.api('/me', { fields: 'id,name,email' }, function(response) {
            console.log('ID: ' + response.id);
            console.log('Name: ' + response.name);
            console.log('Email: ' + response.email);
            // Send response to the server
          });
        } else {
          console.log('User cancelled login or did not fully authorize.');
        }
      }, { scope: 'email' });
    }
  </script>
</body>

</html>

