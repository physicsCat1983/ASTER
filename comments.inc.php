<?php

function setComments($conn) {
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		# Need the addslashes method to message variable to include words with punctuation (ex: apostrophes)
		$message = addslashes($_POST['message']);
		
		# first set of parenthesis say: what are the column names that we want to insert these into?
		# second set of parenthesis say: what are the values?
		$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
		$result = mysqli_query($conn, $sql);
		
		header("Location: collaboration.php");
		exit();
	}
}

function getComments($conn) {
	$sql = "SELECT * FROM comments";
	# Want to create a connection and use a method called query and run the sql code.
	$result = mysqli_query($conn, $sql);
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='comment-box'><p>";
			echo $row['uid']."<br>";
			echo $row['date']."<br>";
			echo nl2br($row['message']); #looks for any new lines (nl) and converts them into breaks (br)
		echo "</p>
			<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button type='submit' name='commentDelete'>Delete</button>
			</form>
			<form class='edit-form' method='POST' action='edit-comment.php'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>
				<input type='hidden' name='date' value='".$row['date']."'>
				<input type='hidden' name='message' value='".$row['message']."'>
				<button>Edit</button>
			</form>
		</div>";
	}
}

function editComments($conn) {
	if (isset($_POST['commentSubmit'])) {
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		# Need the addslashes method to message variable to include words with punctuation (ex: apostrophes)
		$message = addslashes($_POST['message']);
		
		# first set of parenthesis say: what are the column names that we want to insert these into?
		# second set of parenthesis say: what are the values?
		$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
		$result = mysqli_query($conn, $sql);
		
		header("Location: collaboration.php");
		exit();
	}
}

function deleteComments($conn) {
	if (isset($_POST['commentDelete'])) {
		$cid = $_POST['cid'];
		
		$sql = "DELETE FROM comments WHERE cid='$cid'";
		$result = mysqli_query($conn, $sql);
		
		header("Location: collaboration.php");
		exit();
	}
}