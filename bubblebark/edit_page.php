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

     




<?php include"setup.php";
    print_r($_GET);
    $pageID= $_GET["id"]; ?>

    
</head>

<body>




<div class="latest-products">
      <div class="container">

<!-- Table Code -->



     

<!-- end of the table -->

<!-- PHP -->

     <?php
    
    $sql = "SELECT * FROM pages where id= $pageID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {
        print_r($row);
        $id=$row["id"];
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["image1"];
        }
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>    

<!-- End of PHP -->

</div>
</div>

<div class="formmargin">

<form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Page Number</label>
      </div>
      <div class="col-75">
    <?php print $pageID ?>
          <input type="hidden" id="pageID" name="pageID" value= "<?php print $pageID ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title1">Title One</label>
      </div>
      <div class="col-75">
        <input type="text" id="title1" name="title1" value="<?php print $title1 ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $image1 ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

</div>

<?php include 'footer.php';?>

</body>



</html>
