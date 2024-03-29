<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Bubble Bark</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

     
<!-- Testing MySQL -->

     <?php include"setup.php";
    
    $sql = "SELECT * FROM pages where pagenum=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["image1"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>

<!-- End of MySQL -->
    
</head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Bubble <em>Bark</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>

                
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item" href="blog.php">Blog</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                      <a class="dropdown-item" href="terms.php">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                <li class="nav-item"><a class="nav-link" href="checkout.php">Cart</a></li>

                <li class="nav-item"><a class="nav-link" href="phplogin/login.php">Log In</a></li>

                
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Keep your four legged friend Happy</h4>
            <h2>Clean and Happy Dog every Day</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>No Footprint on the Environment</h4>
            <h2>While keeping their Paws clean</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Make your best Friend</h4>
            <h2>The happiest dog in the World</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here --> 

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Most Popular Products!</h2>
              <a href="products.php" class="viewcolour">view more <i class=""></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="coc.php"><img src="assets/images/coc-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="coc.php"><h4>Coconut and Lime</h4></a>
                 <h6> $15.95</h6>
                <p>Enjoy this flavour of summer with fresh lime and tropical coconut making for a bright uplifting scent!.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="str.php"><img src="assets/images/str-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="str.php"><h4>Strawberry Guava</h4></a>
                <h6>  $15.95</h6>
                <p>This mouth-watering, juicy fragrance will have your pup smelling delicious!</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="man.php"><img src="assets/images/man-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="man.php"><h4>Mango Tangerine</h4></a>
                <h6>   $15.95</h6>
                <p>This fruity blend is a summer essential with sweet fresh mango and tangy ripe tangerine leaving your pup smelling divine!</p>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p> We are a small local business run by a group of Year 13 students from Mahurangi College. We have designed a sustainable, eco-friendly and Allergen-free dog soap shampoo to offer to all dogs throughout New Zealand.  </p>

             
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>






    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Want to know more about our Business?</h4>
                  <h2>Contact us Today!</h2>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
<?php include 'footer.php';?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>

