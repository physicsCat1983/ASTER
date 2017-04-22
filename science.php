<?php
	include 'header.php';
?>
	
<div id="wrapper">

	<div class="column-left">
	
		<div id="sidebar">
			<nav>
				<ul>
					<li><a href="aerospace.php"><firstletter>A</firstletter>erospace</a></li>
					<li class="active"><a href="science.php"><firstletter>S</firstletter>cience</a></li>
					<li><a href="technology.php"><firstletter>T</firstletter>echnology</a></li>
					<li><a href="energy.php"><firstletter>E</firstletter>nergy</a></li>
					<li><a href="robotics.php"><firstletter>R</firstletter>obotics</a></li>
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
			<h1>A<letter>S</letter>TER</h1>
			<h2>Science</h2>
			<p class="heading">
				<b>Content for the discussion of all science related topics.</b>
			</p>
			
			<div class="bottom"><h2><a href="#bottom">Go to bottom!</a></h2></div> <!-- Go to bottom of page -->
		
			<div id="content">
				<a name="Cassini"></a>
				<h2>Cassini</h2>
				<p id="paragraph">
					Cassini, a truly inspirational journey. Projects like NASA's Cassini mission to Saturn has inspired us over the life of NASA's history. Over the past many years though, it seems there has been slow
					progression to do more for our advancements in space flight and human space travel due to several reasons and obstacles that a federally funded agency like NASA has had to endure.
					The recent years of private funded corporations partaking in the space industry, such as Space-X and Virgin Galactic, the two most well-known private companies has tried to do their part
					to help continue to inspire human space exploration and space flight by performing their own projects.
				</p>
				
				<p id="paragraph">
					We here at ASTER also have this passion to ignite the human desire for space travel and exploration and we feel
					that we offer to do so in our own unique way compared to government agencies or private corporations. ASTER is designed to have not just the privileged few who, through their own
					hard work and dedication, have earned their right to be a part of those entities, but we also seek and indeed encourage the cooperation of anyone who wants to contribute their ideas
					and work to the entire ASTER community. Our goal is to have everyone who can contribute do so and do so often. ASTER is intended for a collaborative location to innovate, inspire, share and
					proceed on to possible developments into areas like aerospace and space science. Collaborative public research and development to create new innovations and inspire current and future generations.
					A collective community helping each other reach for the stars and beyond.
				</p>
				
				<p id="paragraph" class="log">
					<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FNASAJPL%2Fvideos%2F10154630585623924%2F&show_text=0&width=560" style="border:none;overflow:hidden;Left:0;bottom:-10" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
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
			<img src="images/logos/science.png" alt="Science" title="Science Logo">
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