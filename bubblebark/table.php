 <!DOCTYPE html>
 <html>

<head>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 60%;
			color: #326891;
			font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
			font-size: 25px;
			text-align: left;
		}

		th {
			background-color: #326891;
			color: white;
		}

		tr:nth-child(even) {background-color: #ebeded;
		}

	</style>
</head>

<body> 
 
<table>
	<tr>
		<th> ID </th>
		<th> Name </th>
		<th> Email </th>
		<th> Subject </th>
		<th> Message </th>
	</tr>
	<?php 

	include 'setup.php';

	$sql = "SELECT * FROM contact";
	$result = $conn->query($sql);


	if ($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr>
			<td>" . $row["id"] . "</td>
			<td>" . $row["name"] . "</td>
			<td>" . $row["email"] . "</td>
			<td>" . $row["subject"] . "</td>
			<td>" . $row["message"] . "</td>
				</tr>";

		}
	} 


	$conn->close();
	?>
</table>
</body>
 </html>