<?php
	include 'header.php';
	#date/time format
	date_default_timezone_set('America/Chicago');
	include 'dbh.inc.php';
	include 'comments.inc.php';
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
							echo "<li><a href='blog.php'><span>B</span>log</a></li>";
						}
						else {
							echo "<li><a href='index.php'><span>B</span>log</a></li>";
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
							echo "<li class='active'><a href='fringe.php'>FRINGE DIVISION</a></li>";
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
			include 'fringe-discussion-board.php';
		?>
	
	</div>
	<!-- End of column-center -->
	
	<div class="column-right">
		
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
	
		<div id="circle-logos">
			<img src="images/logos/fringe.png" alt="Fringe Science" title="Fringe Science Logo">
		</div>
		<!-- end of circle-logos -->
	
	</div>
	<!-- End of column-right -->
	
</div>
<!-- end of wrapper -->

<a name="bottom"></a> 
<!-- bottom of page -->

<?php
	include 'facebook-comments.php';
	include 'social.php';
	include 'footer.php';
?>