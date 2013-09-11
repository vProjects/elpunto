<?php
	unset($_SESSION['elpunto']);
	session_destroy();
	header('Location: ../login.php');
?>