<?php
session_start();
include('admin/vendor/inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>



  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>
  <!--End Navigation-->

  <header>
    <div class="container mt-5">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <div id="textCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption d-md-block">
                  <h3>Experience Luxury</h3>
                  <p>Discover the unparalleled comfort and style of our premium vehicles.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-md-block">
                  <h3>Travel in Style</h3>
                  <p>Our vehicles are designed to provide a perfect blend of elegance and performance.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-md-block">
                  <h3>Unmatched Comfort</h3>
                  <p>Enjoy a smooth and comfortable ride with our top-of-the-line vehicle options.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#textCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#textCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 ml-md-auto rightImage">
          <img src="vendor/img/yellowCar.png" alt="SVG Image" class="carousel-img">
        </div>
      </div>
    </div>
  </header>


<!-- Page Content -->
<div class="container mt-5">
  <!-- <h1 class="my-4 text-center pt-4">Welcome to Vehicle Booking System</h1> -->
  <!-- <div class="typewriter">
      <h1 class="my-4 text-center pt-4" id="typewriterText">Welcome to Vehicle Booking System</h1>
  </div> -->

  <div class="my-4 text-center pt-3 typing-demo">
      Welcome to Vehicle Booking System
  </div>
  <!-- Marketing Icons Section -->
  <div class="row pt-4">
    <div class="col-lg-6 col-md-12 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Why Choose Us?</h4>
        <div class="card-body text-center">
          <blockquote class="blockquote">
            <p class="mb-0">At Vehicle Booking System, we prioritize your comfort and convenience. Our extensive fleet and exceptional customer service ensure a seamless travel experience.</p>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Our Core Values</h4>
        <div class="card-body text-center">
          <blockquote class="blockquote">
            <p class="mb-0">We uphold the highest standards of excellence, integrity, and customer orientation. Trust us to provide reliable and top-notch services every time.</p>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Our Core Values</h4>
        <div class="card-body text-center">
          <blockquote class="blockquote">
            <p class="mb-0">We uphold the highest standards of excellence, integrity, and customer orientation. Trust us to provide reliable and top-notch services every time.</p>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Our Core Values</h4>
        <div class="card-body text-center">
          <blockquote class="blockquote">
            <p class="mb-0">We uphold the highest standards of excellence, integrity, and customer orientation. Trust us to provide reliable and top-notch services every time.</p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <!-- /.row -->

  <!-- Portfolio Section -->
  <h2 class="text-center mb-4 mt-5">Most Hired Vehicles</h2>
  <div class="container">
  <div class="row">
    <div class="col-12">
      <div class="scrolling-wrapper d-flex flex-wrap">
        <div class="col-md-4 col-sm-6 col-12 mb-3">
          <div class="card h-100">
            <a href="#"><img class="card-img-top img-fluid rounded-top" src="vendor/img/2019_honda_accord_angularfront.jpg" alt="Vehicle 1"></a>
            <div class="card-body text-center">
              <h4 class="card-title">Honda Accord 2019</h4>
              <p class="card-text">The 2019 Honda Accord offers a blend of performance, comfort, and cutting-edge technology. Perfect for both city drives and long-distance travel.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-3">
          <div class="card h-100">
            <a href="#"><img class="card-img-top img-fluid rounded-top" src="vendor/img/buscch.jpg" alt="Vehicle 2"></a>
            <div class="card-body text-center">
              <h4 class="card-title">Luxury Coach</h4>
              <p class="card-text">Our Luxury Coach provides spacious seating and top-of-the-line amenities, making it an excellent choice for group travels and tours.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-3">
          <div class="card h-100">
            <a href="#"><img class="card-img-top img-fluid rounded-top" src="vendor/img/buscch.jpg" alt="Vehicle 3"></a>
            <div class="card-body text-center">
              <h4 class="card-title">Executive Bus</h4>
              <p class="card-text">Experience premium travel with our Executive Bus, featuring comfortable seating, Wi-Fi, and entertainment systems for a luxurious journey.</p>
            </div>
          </div>
        </div>
        <!-- Add more cards here if needed -->
      </div>
    </div>
  </div>
</div>



  <!-- /.row -->


    <h1 class="my-4 text-center mt-5">Client Testimonials</h1>

  <div class="container pt-4">
    <div class="row">
      <?php
        $ret = "SELECT * FROM tms_feedback WHERE f_status = 'Published' ORDER BY RAND() LIMIT 3"; // Get all feedbacks
        $stmt = $mysqli->prepare($ret);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
      ?>
      <div class="col-lg-4 mb-4">
        <div class="card testimonial-card h-100 shadow-lg">
          <div class="card-body">
            <p class="card-text"><?php echo $row->f_content; ?></p>
            <footer class="blockquote-footer"><?php echo $row->f_uname; ?></footer>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- /.container -->



  <!-- Footer -->
  <?php include("vendor/inc/footer.php");?>

  <!-- /.Footer -->


  <div class="diamond diamond-top"></div>
  <div class="diamond diamond-top2"></div>
  <div class="diamond diamond-top3"></div>
  <div class="diamond diamond-bottom"></div>
  <div class="diamond diamond-bottom2"></div>
  <div class="diamond diamond-bottom3"></div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 800,
      speedAsDuration: true
    });

    function createDiamond(side) {
    const diamond = document.createElement('div');
    diamond.className = `diamond diamond-${side}`;
    document.body.appendChild(diamond);
    setTimeout(() => {
      document.body.removeChild(diamond);
    }, 5000);
  }

  setInterval(() => {
    createDiamond('left');
    setTimeout(() => createDiamond('right'), 5000);
  }, 10000);
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>



