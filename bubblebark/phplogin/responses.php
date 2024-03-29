<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bubblebark';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT name, email, subject, message FROM contact WHERE id = 1');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($name, $email, $subject, $message);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Responses Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Bubble Bark</h1>
				<a href="responses.php"><i class="fas fa-user-circle"></i>Responses</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Responses</h2>












			<div>
				<p>Response 1:</p>
				<table>
					<tr>
						<td>Name:</td>
						<td><?=$name ?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email ?></td>
					</tr>
					<tr>
						<td>Subject:</td>
						<td><?=$subject ?></td>
					</tr>
					<tr>
						<td>Message:</td>
						<td><?=$message ?></td>
					</tr>
				</table>
			</div>










		</div>
	</body>
</html>