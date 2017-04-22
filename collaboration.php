<?php
	include 'header.php';
	#date/time format
	date_default_timezone_set('America/Chicago');
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<div id="comments-area">
	<h2>ASTER Collaboration Section</h2>
	<h3>Collaborate here on the topics that matter to us.</h3>
	
	<?php
		echo "<form method='POST' action='".setComments($conn)."'>
				<input type='hidden' name='uid' value='Anonymous'>
				<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
				<textarea name='message' placeholder='Start typing here.'></textarea><br>
				<button type='submit' name='commentSubmit'>Post</button>
			</form>";
			
		echo "<div class='bottom'><h2><a href='#bottom'>Go to bottom!</a></h2></div>";
		
		getComments($conn);
	
	?>
	
	<div class="top"><h2><a href="#top">Go To Top!</a></h2></div> 
	<!-- Go to top of page -->
	
</div>
<!-- end of second discussion-board -->

<a name="bottom"></a> <!-- bottom of page -->

<?php
	include 'footer.php';
?>