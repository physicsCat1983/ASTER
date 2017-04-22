<?php

# connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'comments-section');

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); #kill connection and show error message
}