<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['sessionName'])) {
		echo $_SESSION['sessionName'];
	}
	else {
		echo "<p id='login-logout'>
				You can optionally offer a contribution of any size with this subscription.<br>
				Press the Contribute button to help out our cause.<br>
				Press the No Thanks button to skip this.
			</p>";
	}
?>

<div id="wrapper">

	<div id="circle-logos">
		<img src="images/logos/logo.png" alt="Aerospace" title="Aerospace Logo">
	</div>
	
	<div id="discussion-board">
	
		<a href="index.php" onclick="window.open('http://paypal.com')"><img src="images/contribute-btn.png" alt="contribute"></a>
		<a href="index.php"><img src="images/no-thanks-btn.png" alt="no thanks"></a>
	
	</div>
	<!-- end of discussion-board -->
	
</div>
<!-- end of wrapper -->

<?php
	include 'footer.php';
?>