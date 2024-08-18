<!DOCTYPE html>
<html lang="en">

<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact Us</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    
    <!-- /.row -->

    <!-- New Section with Text and Image -->
    <section class="py-5">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-md-6">
            <h2 class="mb-4">Why Choose Our Service?</h2>
            <p class="lead">With years of experience in the industry, we are dedicated to providing top-notch services. Our team is constantly innovating and adapting to the latest trends to offer you the best solutions.</p>
            <ul class="list-unstyled">
              <li class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill text-primary me-2" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 0 0-1.08-1.05L7.477 9.417 6.384 8.323a.75.75 0 1 0-1.06 1.06l1.646 1.646z"/>
                </svg> Comprehensive Solutions
              </li>
              <li class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill text-primary me-2" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 0 0-1.08-1.05L7.477 9.417 6.384 8.323a.75.75 0 1 0-1.06 1.06l1.646 1.646z"/>
                </svg> Customer-Centric Approach
              </li>
              <li class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill text-primary me-2" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 0 0-1.08-1.05L7.477 9.417 6.384 8.323a.75.75 0 1 0-1.06 1.06l1.646 1.646z"/>
                </svg> Reliable and Secure
              </li>
              <li class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill text-primary me-2" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 0 0-1.08-1.05L7.477 9.417 6.384 8.323a.75.75 0 1 0-1.06 1.06l1.646 1.646z"/>
                </svg> 24/7 Support
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="vendor/img/contactUs.png" class="img-fluid w-200 rounded" alt="Why Choose Us">
          </div>
        </div>
      </div>
    </section>



    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
        </form>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
          90125
          <br>402 Webster Street
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: (000) 011-1100
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:mail@tms.com">mail@transportmsphp.com</a>
        </p>
        <p>
          <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
