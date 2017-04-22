<?php
	#date/time format
	date_default_timezone_set('America/Chicago');
	include 'dbh.inc.php';
	include 'comments.inc.php';
	include 'header-logged-in.php';
?>

<div id="wrapper">

	<div id="circle-logos">
		<img src="images/logos/logo.png" alt="ASTER logo" title="ASTER" />
	</div>

	<div id="discussion-board">
	
		<?php
			$cid = $_POST['cid'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = addslashes($_POST['message']);
			
			echo "<form method='POST' action='".editComments($conn)."'>
					<input type='hidden' name='cid' value='".$cid."'>
					<input type='hidden' name='uid' value='".$uid."'>
					<input type='hidden' name='date' value='".$date."'>
					<textarea name='message'>".$message."</textarea><br>
					<button type='submit' name='commentSubmit'>Edit</button>
				</form>";
		
		?>
		
	</div>
	<!-- End of discussion-board -->
	
	<div id="circle-logos">
		<img src="images/logos/logo.png" alt="ASTER logo" title="ASTER" />
	</div>
	
</div>
<!-- end of wrapper -->

<?php
	include 'footer.php';
?>