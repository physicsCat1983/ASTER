<?php
// start a session
session_start();

// Inlude the database file so that we have a connection.
include '../dbh.php';

// Get info from URL which is passed from our front page.
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

# --------------- Error Handlers ---------------
# If $first variable left empty
if (empty($first)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($last)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($uid)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($pwd)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
else {

	$sql = "SELECT uid FROM user WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
	$uidcheck = mysqli_num_rows($result);

	if ($uidcheck > 0) {
		header("Location: ../signup.php?error=username");
		exit();
	}
	else {
	
		# Encrypt the password using hashing
		$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
		
		// Need an SQL string which we can start passing into database by querying it.
		$sql = "INSERT INTO user (first, last, uid, pwd) 
				VALUES ('$first', '$last', '$uid', '$encrypted_password')";

		$result = mysqli_query($conn, $sql);

		// send us back to front page
		header("Location: ../optional-pay.php");
	}
}