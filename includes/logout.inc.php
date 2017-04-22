<?php

session_start();	// start a session to make sure we have one
session_destroy();	// then destroy this session or log out

// send us back to front page
header("Location: ../index.php");