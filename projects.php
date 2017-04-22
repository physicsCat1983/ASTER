<?php
	include 'header.php';
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
					<li><a href="blog.php"><span>B</span>log</a></li>
					<li class="active-projects"><a href="projects.php">PROJECTS</a></li>
					<li class="fringe"><a href="fringe.php">FRINGE DIVISION</a></li>
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

		<div id="discussion-board">
			<h1>ASTER</h1>
			<h2>Projects</h2>
			
			<p class="heading">
				<b>Getting the world together to take us all farther.</b>
			</p>
			
			<div class="bottom"><h2><a href="#bottom">Go to bottom!</a></h2></div> <!-- Go to bottom of page -->
		
			<div id="content">
				<!------------------- Projects On The Radar ------------------------->
				<h2>Projects On The Radar</h2>
				<p class="log">
					We are currently gathering the list of projects we have in mind to get started on. There are many, so hang in there and check back later.
				</p>
				
				<!------------------- Projects Looking Into ------------------------->
				<h2>Projects Looking Into</h2>
				<p class="log">
					We are looking into several projects and are eager to get the ASTER community involved and started on each of them. We are currently in the
					beginning stages, so hang in there and check in often.
				</p>
				
				<!------------------- Projects In The Works ------------------------->
				<h2>Projects In The Works</h2>
				<p class="log">
					Trust us, we are very eager to get the ball rolling on a list of projects, but we are in the beginning stages right now and are getting everything
					in order for ASTER and its community. Keep coming back and hopefully we'll start having some interesting things for us all to get started on.
				</p>
				
				<div class="top"><h2><a href="#top">Go To Top!</a></h2></div> <!-- Go to top of page -->
				
			</div>
			<!-- end of content -->
			
		</div>
		<!-- end of discussion-board -->
	
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
			<img src="images/projects/projects.png" alt="Projects" title="Projects Logo">
		</div>
		<!-- end of circle-logos -->
	
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