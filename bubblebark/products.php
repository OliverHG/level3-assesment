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

  </head>

<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="products.php">Products</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.php">Cart</a></li>

                <li class="nav-item"><a class="nav-link" href="phplogin/login.php">Log In</a></li>

                
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/prodhead.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              
              <h2>Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <!-- PHP -->

     <?php include"setup.php";
    
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {
        //print_r($row);
        $id=$row["id"];
        $name=$row["name"];
        $photo=$row["photo"];
        $price=$row["price"];
        $description=$row["description"];
        ?>
  

<!-- End of PHP -->
          <div class="col-md-4">
            <div class="product-item">
              <a href="cit.php"><img src="assets/images/<?php print $photo; ?>" alt=""></a>
              <div class="down-content">
                <a href="cit.php"><h4><?php print $name; ?></h4></a>
                <h6><small></small> $<?php print $price; ?></h6>
                <p><?php print $description;?></p>
              </div>
            </div>
          </div>

<?php }
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>  

          <div class="col-md-4">
            <div class="product-item">
              <a href="coc.php"><img src="assets/images/coc-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="coc.php"><h4>Coconut and Lime</h4></a>
                <h6><small></small>  $15.95</h6>
                <p>Enjoy this flavour of summer with fresh lime and tropical coconut making for a bright uplifting scent!</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="jap.php"><img src="assets/images/jap-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="jap.php"><h4>Japanese Cherry Blossom</h4></a>
                <h6><small></small>   $15.95</h6>
                <p>Be transported to springtime with this magnolia and rose intertwined scent.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="man.php"><img src="assets/images/man-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="man.php"><h4>Mango and Tangerine</h4></a>
                <h6><small></small> $15.95</h6>
                <p>This fruity blend is a summer essential with sweet fresh mango and tangy ripe tangerine leaving your pup smelling divine!</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="str.php"><img src="assets/images/str-pro-img.JPEG" alt=""></a>
              <div class="down-content">
                <a href="str.php"><h4>Strawberry Guava</h4></a>
                <h6><small></small>  $15.95</h6>
                <p>This mouth-watering, juicy fragrance will have your pup smelling delicious!</p>
              </div>
            </div>
          </div>

          

          
        </div>
      </div>
    </div>

<?php include 'footer.php';?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>


