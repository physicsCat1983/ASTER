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
			<h2>About Us</h2>
			<p class="heading">
				<b>Getting the world together to take us all farther.</b>
			</p>
		
			<div id="content">
				<h3>Welcome to ASTER.com</h3>
				<p></br></p>
				<p>
					ASTER is an acronym that stands for Aerospace, Science, Technology, Energy, and Robotics.
					However, ASTER is much more than an acronym. ASTER also focuses on other engineering, scientific, and technological fields. Our
					goal is to do the great things that we know that as a collective group we can achieve for human advancement throughout all fields
					of science, engineering, technology, et cetera.
				</p>
				
				<p class="paragraph-quotes">
					"An open community of thinkers, dreamers, and doers."
				</p>
				
				<p>
					Our vision is to get the global community involved, from any and every background, no matter how educated, experienced, or lack thereof
					<em>you</em> are. We believe that there are many of you that have specific talents, knowledge and experience in your own unique situation
					that could possibly help out in the discussion, research and possible development of the many endeavours we plan to take part in to really push
					our understanding of the universe we are all a part of.
				</p>
				
				<p class="paragraph-quotes">
					"Open discussion, collaborative development, and transparent engineering."
				</p>
				
				<p>
					ASTER has specifically been created to fill a need to get anyone and everyone capable of offering advice, discussion, help, ideas, solutions and the
					like to an array of technological topics. We have yet to have seen a specific source of origin for those like us to go to, to form a camaraderie, to have the availability to come together with
					our common goals, interests and desire we all have for human advancement without all the nonsense and distraction of other areas on the internet. We have a real desire to actually do something about taking control
					as a whole of how we want the future to be and where we'd like to see it go.
				</p>
				
				<p class="paragraph-quotes">
					"To do the things no one else will."
				</p>
				
				<p>
					ASTER is your place of origin to come and see what's being said about all types of topics within the community; what's being done to help bring forth
					advancements, who's building what, who's making strides in their own laboratory, shop, backyard, garage, kitchen, wherever and whenever with their
					local community and comrades. ASTER is the place to show us and everyone what your doing, what we're doing; what we call "transparent science and engineering."
					What we and you offer is for us all. 
					No matter how spread out we are from one another we can come together for the common goals we so all deeply desire to accomplish and we know that we can only do so, together.
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
					<li class="active"><a href="about.php">About</a></li>
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
	include 'social.php';
	include 'footer.php';
?>