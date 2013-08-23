<?php
	session_start();
	unset($_SESSION['code']);
	unset($_SESSION['adminemail']);
	session_destroy();
	header('Location: ../');

?>