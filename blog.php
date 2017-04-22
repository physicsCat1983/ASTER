<?php
	include 'header-logged-in.php';
?>

<?php
	if (isset($_SESSION['sessionName'])) {
		echo "<p id='login-logout'>
			Welcome aboard!
		</p>";
	}
	else {
		echo "<p id='login-logout'>
				Become a member and Subscribe. Join the crew and Login.
			</p>";
	}
?>

<div id="wrapper">

	<div class="column-left">
	
		<div id="sidebar">
			<nav>
				<ul>
					<li><a href="aerospace.php"><firstletter>A</firstletter>erospace</a></li>
					<li><a href="science.php"><firstletter>S</firstletter>cience</a></li>
					<li><a href="technology.php"><firstletter>T</firstletter>echnology</a></li>
					<li><a href="energy.php"><firstletter>E</firstletter>nergy</a></li>
					<li><a href="robotics.php"><firstletter>R</firstletter>obotics</a></li>
					<li><a href="other.php"><span>O</span>ther</a></li>
					<?php
						if (isset($_SESSION['sessionName'])) {
							echo "<li class='active'><a href='blog.php'><span>B</span>log</a></li>";
						}
						else {
							echo "<li class='active'><a href='index.php'><span>B</span>log</a></li>";
						}
					?>
					<?php
						if (isset($_SESSION['sessionName'])) {
							echo "<li class='projects'><a href='projects.php'>PROJECTS</a></li>";
						}
						else {
							echo "<li class='projects-sub' title='You must login to enter projects page!'><p>PROJECTS</p></li>";
						}
					?>
					<?php
						if (isset($_SESSION['sessionName'])) {
							echo "<li class='fringe'><a href='fringe.php'>FRINGE DIVISION</a></li>";
						}
						else {
							echo "<li class='fringe-sub' title='You must login to enter fringe page!'><p>FRINGE DIVISION</p></li>";
						}
					?>
					
				</ul>
			</nav>
			
			<?php
				if (isset($_SESSION['sessionName'])) {
					echo "<a class='collaborate-btn' href='collaboration.php'>
							<img src='images/collab-btn-green.png' alt='collaborate button' title='Collaborate with all'/>
						</a>";
				}
				else {
					echo "<p class='collaborate-btn' >
							<img src='images/collab-btn.png' alt='collaborate button' title='You must login to press this button!'/>
						</p>";
				}
			?>
			
		</div>
		<!-- end of sidebar -->
	
	</div>
	<!-- End of column-left -->

	<div class="column-center">
		<?php
			include 'blog-discussion-board.php';
		?>
		
	</div>
	<!-- End of column-center -->

	<div class="column-right">
		<?php
			include 'blog-quote-section.php';
		?>
		
		<div id="sidebar">
			<nav>
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="contribute.php">Contribute</a></li>
					<li><a href="signup.php">Subscribe</a></li>
				</ul>
			</nav>
		</div>
		<!-- End of mini-sidebar -->
	
	</div>
	<!-- End of column-right -->
	
</div>
<!-- end of wrapper -->

<?php
	include 'facebook-comments.php';
?>

<div id="social" align="center">
	<a href="https://www.facebook.com/profile.php?id=100016033156797" target="_blank"><img src="images/social/facebook.png" alt="Facebook" title="ASTER Facebook Page" /></a>
	<a href="https://www.youtube.com/channel/UCKC2BUuBMuXli8DZFVuBwYg" target="_blank"><img src="images/social/youtube.png" alt="YouTube" title="ASTER YouTube Page" /></a>
	<a href="https://twitter.com/ASTER_RnD" target="_blank"><img src="images/social/twitter.png" alt="Twitter" title="ASTER Twitter Page" /></a>
					
</div> <!-- End of social -->

<a name="bottom"></a> 
<!-- bottom of page -->

<?php
	include 'footer.php';
?>