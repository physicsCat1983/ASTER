<?php

// create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "logintest");

// error handler
if (!$conn) {
	/* *********************************************************************************************
	 *	NOTE: only use mysqli_connect_error() for testing! When you release your site
	 *	online you have to remove this function. Otherwise you are prone to SQL injection (hacking).
	 *	*********************************************************************************************
	 */
	die("Connection failed: ".mysqli_connect_error()); // kills connection and shows error message
}