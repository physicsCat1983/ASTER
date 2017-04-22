<?php
	// start a session
	session_start();
?>

<head>
	<title>ASTER</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=divice-width, inital-scale=1.0" />
	<link rel="icon" type="image/png" href="images/logo.png" />
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>

	<header class="header">
		<nav>
			<ul>
				<li class="header-list-item"><a href="blog.php">HOME</a></li>
				<?php
					if (isset($_SESSION['sessionName'])) {
						#logout
						echo "<form action='includes/logout.inc.php'>
								<button>LOG OUT</button>
							</form>";
					}
					else {
						#login form
						echo "<form action='includes/login.inc.php' method='POST'>
								<input id='input-item' type='text' name='uid' placeholder='Username'>
								<input type='password' name='pwd' placeholder='Password'>
								<button type='submit'>LOGIN</button>
							</form>";
					}
				?>
				
				<?php
					if (isset($_SESSION['sessionName'])) {
						echo "";
					}
					else {
						echo "<li class='header-list-item'><a href='signup.php'>SUBSCRIBE</a></li>";
					}
				?>
				
			</ul>
		</nav>
	</header>

	<div id="logo-bar">
	
			<?php
				if (isset($_SESSION['sessionName'])) {
					echo "<img src='images/header/logo-stars.png' alt='ASTER logo' title='ASTER' />";
				}
				else {
					echo "<img src='images/header/logo-stars-moto.png' alt='ASTER logo' title='ASTER' />";
				}
			?>
		
	</div>
	<!-- end of logo-bar -->