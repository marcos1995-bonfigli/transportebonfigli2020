<?php session_start();

if (isset($_SESSION['Usuario'])) {
	header('Location: dashboard.php');
} else {
	header('Location: login.php');
}

?>