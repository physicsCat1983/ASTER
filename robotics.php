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
					<li class="active"><a href="robotics.php"><firstletter>R</firstletter>obotics</a></li>
					<li><a href="other.php"><span>O</span>ther</a></li>
					<li><a href="blog.php"><span>B</span>log</a></li>
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

		<div id="discussion-board">
			<h1>ASTE<letter>R</letter></h1>
			<h2>Robotics</h2>
			<p class="heading">
				<b>Content for the discussion of all robotics related topics.</b>
			</p>
			
			<div class="bottom"><h2><a href="#bottom">Go to bottom!</a></h2></div> <!-- Go to bottom of page -->
		
			<div id="content">
				<p id="paragraph">
					Keep checking in for content in our Robotics section. We have many things to discuss, learn and do. We are continually striving to perfect ASTER and are eager to
					get started in our work, research and collaborations with people like you. We always welcome contact from you and expect it,
					since that is what you're hopefully here for, to contribute to the ASTER team. Go over to our <a href="contact.html">Contact</a> section and share your
					ideas, give us your advice, or just leave a comment. We'd sure appreciate it and be pleased to hear from you.
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
			<img src="images/logos/robotics.png" alt="Robotics" title="Robotics Logo">
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