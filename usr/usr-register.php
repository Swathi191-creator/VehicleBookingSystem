<!--Server Side Scripting To inject Login-->
<?php
  //session_start();
  include('vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  //Add USer
  if(isset($_POST['add_user']))
    {

            $u_fname=$_POST['u_fname'];
            $u_lname = $_POST['u_lname'];
            $u_phone=$_POST['u_phone'];
            $u_addr=$_POST['u_addr'];
            $u_email=$_POST['u_email'];
            $u_pwd=$_POST['u_pwd'];
            $u_category=$_POST['u_category'];
            $query="insert into tms_user (u_fname, u_lname, u_phone, u_addr, u_category, u_email, u_pwd) values(?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('sssssss', $u_fname,  $u_lname, $u_phone, $u_addr, $u_category, $u_email, $u_pwd);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Account Created Proceed To Log In";
                }
                else 
                {
                    $err = "Please Try Again Later";
                }
            }
?>
<!--End Server Side Scriptiong-->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Vehicle Booking System Registration">
  <meta name="author" content="MartDevelopers">
  <title>Vehicle Booking System - Register</title>
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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputName" name="name" class="form-control" placeholder="Full Name" required="required" autofocus="autofocus">
              <label for="inputName">Full Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="register" value="Register">
        </form>
        <hr>
        <div class="text-center">
          <button class="btn btn-google btn-block" onclick="googleRegister()">Register with Google</button>
          <button class="btn btn-facebook btn-block" onclick="facebookRegister()">Register with Facebook</button>
        </div>
        <hr>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
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
  <!-- Google and Facebook SDKs -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
  <!-- Custom JavaScript for Google and Facebook login -->
  <script>
    function googleRegister() {
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

    function facebookRegister() {
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
