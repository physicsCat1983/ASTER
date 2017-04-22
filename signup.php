<?php
	include 'header.php';
?>

<?php
	
	# Gets the url ex: http://localhost/php/login-system/signup.php?error=empty
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
	# Function "string position" strpos()
	if (strpos($url, 'error=empty') !== false) {
		echo "<p id='error'>Fill out all fields!</p>";
	}
	else if (strpos($url, 'error=username') !== false) {
		echo "<p id='error'>Username already exists!</p>";
	}

	if (isset($_SESSION['sessionName'])) {
		echo $_SESSION['sessionName'];
	}
	else {
		echo "<p id='login-logout'>Join ASTER.<br>Be a part of our team. Be a part of something great.</p>";
	}
?>

<br><br>
<?php
	if (isset($_SESSION['sessionName'])) {
		echo "<p id='login-logout'>You are already logged in!</p>";
	}
	else {
		#signup form
		echo "<form id='signup-form' action='includes/signup.inc.php' method='POST'>
				<input type='text' name='first' placeholder='First name'><br>
				<input type='text' name='last' placeholder='Last name'><br>
				<input type='text' name='uid' placeholder='Username'><br>
				<input type='password' name='pwd' placeholder='Password'><br>
				<button type='submit'>SIGN UP</button>
			</form>";
	}
?>

<?php
	include 'footer.php';
?>
	
</body>
</html>