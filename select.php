<?php
include "setup.php";
//$sql = "SELECT results_id, standardnum, title, core_id, result, date FROM results";
$sql= "SELECT `standardnum`,`title`,`result`,`date`,firstname,surname
FROM results
INNER JOIN Core ON results.core_id = core.core_id
WHERE core.core_id = 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
    
  while($row = $result->fetch_assoc()) {
      //print_r ($row);
    echo "<br>"."id: " . " - Name: " . $row["standardnum"]. " " . $row["title"]." ".$row["firstname"]." ".$row["result"]." ".$row["date"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>