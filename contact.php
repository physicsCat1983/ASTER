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
			<h2>Contact Us</h2>
			<p class="heading">
				<b>"To do the things no one else will."</b></br>
			</p>
		
			<div id="content">
				<div id="contact_us">
					<div id="sect_contact">
						<p>
							Contact us to bring forth your ideas, suggestions, questions and anything else related to the cause and interests of this site.
							Just fill out the form below and we'll get back with you as soon as we can. We look forward to hearing from you.
						</p>
					</div> 
					<!-- End of sect_contact -->
			
				</div> 
				<!-- End of contact_us -->
		
				<div id="form">
					<div id="section1">
						<div id="contact">
							<form id="contact_form" action="mailto:aster.researchanddevelopment@gmail.com?subject=email from ASTER.com" method="post" enctype="text/plain">
								<div class="row">
									<label for="name">Your name:</label><br />
									<input id="name" class="input" name="name" type="text" value="" size="40" /><br />
								</div> 
								<!-- End of row -->
			
								<div class="row">
									<label for="email">Your email:</label><br />
									<input id="email" class="input" name="email" type="text" value="" size="40" /><br />
								</div> <!-- End of row -->
			
								<div class="row">
									<label for="message">Your message:</label><br />
									<textarea id="message" class="input" name="message" rows="7" cols="36"></textarea><br />
								</div> <!-- End of row -->
			
								<input id="submit_button" type="submit" value="Send" />
			
							</form>
			
						</div> 
						<!-- End of contact -->
			
					</div> 
					<!-- End of section1 -->
			
				</div> <!-- End of form -->
		
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
					<li class="active"><a href="contact.php">Contact us</a></li>
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
	include 'footer.php';
?>