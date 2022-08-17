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

<body>




<div class="latest-products">
      <div class="container">

<!-- Table Code -->



     <table id="customers">
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Paragraph</th>
  </tr>


<!-- end of the table -->

<!-- PHP -->

     <?php include"setup.php";
    
    $sql = "SELECT * FROM pages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {
        print_r($row);
        $id=$row["id"];
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["image1"];
        ?>

        <tr>

    <td> <?php print $id; ?> <a href='edit_page.php?id=<?php print $pageID; ?>'>Edit</a> </td>

    <td> <?php print $title1; ?> </td>

    <td> <?php print $para1; ?> </td>

</tr> <?php }
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>    

<!-- End of PHP -->
</table>
</div>
</div>

<form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Page Number</label>
      </div>
      <div class="col-75">
    <?php print $pagenum ?>
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


<?php include 'footer.php';?>

</body>



</html>
