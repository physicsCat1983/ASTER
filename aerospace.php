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
					<li class="active"><a href="aerospace.php"><firstletter>A</firstletter>erospace</a></li>
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
			<h1><letter>A</letter>STER</h1>
			<h2>Aerospace</h2>
			<p class="heading">
				<b>Content for the discussion of all aerospace related topics.</b>
			</p>
			
			<div class="bottom"><h2><a href="#bottom">Go to bottom!</a></h2></div> <!-- Go to bottom of page -->
		
			<div id="content">
				<a name="ULA"></a>
				<p id="paragraph">
					I saw this quote shared in a video (below) by the United Launch Alliance and felt inspired by its words.
					<b>"We set sail on this new sea because their is knowledge to be gained, and new rights to be won, and they may be won and used for the progress of all people."</b> - JFK, 1962
				</p>
				
				<p id="paragraph">
					Keeping in mind this quote made by John F. Kennedy in 1962, we of ASTER feel that with the participation of anyone whose ideals and ambitions similar to that of ASTER have the potential
					to once again spark a new generation of dreamers and ambitious minds to help us create the reality of us being a space faring people.
				</p>
				
				<p id="paragraph">
					With the gathering of a great multitude of individuals here at ASTER anything is possible and can be achieved. With an amalgamation of unique skills, knowledge and resources from
					each of you who become a part of the community, the team of ASTER, we can begin to form a collective mind that will evolve, develop and continue to grow into an unstoppable force
					of people who will take us closer to the goals of giving access to such great technological advancements to all humanity.
				</p>
				
				<p id="paragraph">
					We are an "open-source" collaborative group providing a place for everyone to come share their ideas, their own individual developments and research with our collective group from
					around the world; working with each other, seeking advice and answers to areas of science, engineering, technology and a vast selection of other fields to grow us all into a productive and
					more advanced society. ASTER is meant for research and development amongst peers, being forth coming, transparent, and having full disclosure of our ideas, research, developments, and advancements
					along with yours. We at ASTER feel that true technological advancement comes from the involvment and collaboration of us all, not select individuals, so please join us as we continue to
					strive for the advancements of <b>A</b>erospace, <b>S</b>cience, <b>T</b>echnology, <b>E</b>nergy, <b>R</b>obotics and so much more.
				</p>
				
				<p id="paragraph" class="log">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Dt8bs8E6XOY" frameborder="0" allowfullscreen></iframe>
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
			<img src="images/logos/aerospace.png" alt="Aerospace" title="Aerospace Logo">
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