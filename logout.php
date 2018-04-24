<?php
	require 'settings.php';
	session_destroy();
	header("Location: index.php");
?>