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
			
		</div>
		<!-- end of sidebar -->
	
	</div>
	<!-- End of column-left -->
	
	<div class="column-center">

		<div id="discussion-board">
			<h1>ASTER</h1>
			<p class="heading">
				<b>Welcome to ASTER</b>
			</p>
		
			<div id="content">
				<h3>Contributing to the cause</h3>
				<p class="we">
					<b><u>NOTE:</u></b> "We" is used in the context of us all; you, your friends, family, neighbour, countryman (and women), anyone, everyone, all peoples sharing the
					same goals, dreams and ambitions of ASTER.
				</p>
				
				<p id="paragraph">
					We are in the beginning stages of something great and we're confident that our vision for ASTER and the community
					is going to go far to take us all far. Since we are just beginning we are in the process of getting the word out on what we here at ASTER are about. We continue
					to become better at vocalizing what it is we are wanting to do and continue to show the world what our intentions are and where we are going. As we have said, this is
					a community effort and all eyes and ears are just beginning to be upon us as we also hope that in the near future they will be upon <em>you</em> as well, those of you who
					help contribute to advance humans farther and transform our imaginations that we have for humanity into reality.
				</p>
				
				<p id="paragraph">
					If you feel the need to see that ASTER succeeds, so that we may push forth, right now we say contribute by coming to this site as often as you can. Watch ASTER grow and as it does
					know that you were one of the lucky first to have seen it from its beginning. You are also encouraged to get in contact with us by going to the <a href="contact.html">Contact</a>
					page and sending us your thoughts, ideas and suggestions. Let's keep a dialogue going, share ideas, create an electricity of excitement amongst our peers and get the future in gear!
				</p>
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
					<li class="active"><a href="contribute.php">Contribute</a></li>
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
	include 'social.php';
	include 'footer.php';
?>