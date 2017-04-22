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
					<li class="active"><a href="other.php"><span>O</span>ther</a></li>
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
			<h1>ASTER</h1>
			<h2>Other Topics</h2>
			<p class="heading">
				<b>Content for the discussion of other topics related to the goals and interests shared at ASTER.</b>
			</p>
			
			<div class="bottom"><h2><a href="#bottom">Go to bottom!</a></h2></div> <!-- Go to bottom of page -->
		
			<div id="content">
				<!-------------------------------------------------------------------------------------------------------------->
				<section>
					<p class="sect-paragraph">
						<b><u>Topic:</u></b> Earth's Water</br>
						<b><u>Source:</u></b> <a target="_blank" href="https://water.usgs.gov/edu/earthwherewater.html">Distribution of Earth's Water</a></br>
					</p>
				</section>
				<p id="paragraph">
					This is an interesting view of the distribution of earth's water. The use of spheres placed over North America
					makes for an interesting visual representation to see the scale of water resources.
				</p>
				
				<p id="paragraph">
					Water is scarce in many locations throughout the globe and there is still a great need in science and engineering to come up with cleaver ways to obtain and distribute potable water,
					harness water resources that may be available in dry regions, and distribute potable water to regions effectively and efficiently. Making water available
					to everyone is one of many tasks we hope to figure out here at ASTER with the help of many of you.
				</p>
				
				<p id="paragraph" class="log" style="text-align:center">
					<a href="images/other/earthWater.png"><b>Click to enlarge photo</b><img src="images/other/earthWater.png" alt="Earth's Water" title="Earth's Water" /></a>
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