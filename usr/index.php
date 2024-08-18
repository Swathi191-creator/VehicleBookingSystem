<?php
session_start();
include('vendor/inc/config.php'); // Get configuration file

if (isset($_POST['Usr-login'])) {
    $u_email = $_POST['u_email'];
    $u_pwd = ($_POST['u_pwd']); // Get the user's email and password
    $stmt = $mysqli->prepare("SELECT u_email, u_pwd, u_id FROM tms_user WHERE u_email=? and u_pwd=?"); // SQL to log in user
    $stmt->bind_param('ss', $u_email, $u_pwd); // Bind fetched parameters
    $stmt->execute(); // Execute bind
    $stmt->store_result(); // Store the result to check if a user exists

    if ($stmt->num_rows > 0) { // If user exists
        $stmt->bind_result($u_email, $u_pwd, $u_id); // Bind result
        $stmt->fetch();
        $_SESSION['u_id'] = $u_id; // Assign session to user id
        $_SESSION['login'] = $u_email;
        $uip = $_SERVER['REMOTE_ADDR'];
        $ldate = date('d/m/Y h:i:s', time());

        // Get user logs
        $uid = $_SESSION['u_id'];
        $uemail = $_SESSION['login'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $geopluginURL = 'http://www.geoplugin.net/php.gp?ip=' . $ip;
        $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
        $city = $addrDetailsArr['geoplugin_city'];
        $country = $addrDetailsArr['geoplugin_countryName'];
        $log = "INSERT INTO userLog (u_id, u_email, u_ip, u_city, u_country) VALUES ('$uid', '$uemail', '$ip', '$city', '$country')";
        
        // Ensure previous query execution is complete
        $stmt->close(); 

        $mysqli->query($log);

        if ($mysqli->affected_rows > 0) {
            header("location:user-dashboard.php");
            exit();
        }
    } else {
        $error = "Access Denied. Please Check Your Credentials";
    }
}
?>
<!--End Server Side Script Injection-->


<!-- <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vehicle Booking System - Client Login</title> -->

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Custom styles for this template-->
  <!-- <link href="vendor/css/sb-admin.css" rel="stylesheet"> -->

<!-- </head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Client Login Panel</div>
      <div class="card-body"> -->
        <!--INJECT SWEET ALERT-->
        <!--Trigger Sweet Alert-->
          <!-- <?php if (isset($error)) { ?> -->
          <!--This code for injecting an alert-->
              <!-- <script>
                    setTimeout(function () 
                    { 
                      swal("Failed!","<?php echo $error;?>!","error");
                    },
                      100);
              </script>
                  
          <?php } ?>
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="u_email" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="u_pwd" id="inputPassword" class="form-control" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" name="Usr-login" class="btn btn-success btn-block" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="usr-register.php">Register an Account</a>
          <a class="d-block small" href="usr-forgot-password.php">Forgot Password?</a>
          <a class="d-block small" href="../index.php">Home</a>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
  <!--Inject Sweet alert js-->
  <!-- <script src="vendor/js/swal.js"></script>

</body>

</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Vehicle Booking System - Client Login</title>
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
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Client Login Panel</div>
      <div class="card-body">
        <!--INJECT SWEET ALERT-->
        <!--Trigger Sweet Alert-->
        <?php if (isset($error)) { ?>
        <!--This code for injecting an alert-->
        <script>
          setTimeout(function() {
            swal("Failed!","<?php echo $error;?>!","error");
          }, 100);
        </script>
        <?php } ?>
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="u_email" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="u_pwd" id="inputPassword" class="form-control" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" name="Usr-login" class="btn btn-success btn-block" value="Login">
        </form>
        <div class="text-center">
          <button class="btn btn-google btn-block" onclick="googleLogin()">
            <i class="fab fa-google"></i> Login with Google
          </button>
          <button class="btn btn-facebook btn-block" onclick="facebookLogin()">
            <i class="fab fa-facebook-f"></i> Login with Facebook
          </button>
          <a class="d-block small mt-3" href="usr-register.php">Register an Account</a>
          <a class="d-block small" href="usr-forgot-password.php">Forgot Password?</a>
          <a class="d-block small" href="../index.php">Home</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!--Inject Sweet alert js-->
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

