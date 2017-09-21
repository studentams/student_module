<?php
	//destroy all sessions
	session_destroy();

	//remove all sessions variables
	session_unset();

	header("location: ../index.php?message=logout");
?>