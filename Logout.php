<?php
	//Inicianda a session
	session_start();

	//Destroir a session
	session_unset();	

	header("Location:Index.php");
?>