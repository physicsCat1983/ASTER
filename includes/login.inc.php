<?php
// start a session
session_start();

// Inlude the database file so that we have a connection.
include '../dbh.php';

// Get info from URL which is passed from our front page.
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

// Decryption of password
$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$decrypted_password = password_verify($pwd, $hash_pwd);

// If false
if ($decrypted_password == 0) {
	header("Location: ../index.php?error=empty");
	exit();
}
else {
	// Need an SQL string which we can start passing into database by querying it.
	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn, $sql);

	// Check if logged in properly.
	if (!$row = mysqli_fetch_assoc($result)) {
		echo "<p id='login-logout'>Your username or password is incorrect!</p>";
	}
	else {
		// super global variable
		$_SESSION['sessionName'] = $row['id'];
	}

	// send us back to front page
	header("Location: ../blog.php");
}