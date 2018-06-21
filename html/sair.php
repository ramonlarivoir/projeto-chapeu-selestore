<?php
	session_start();

	unset(
		$_SESSION['usuarioLogin']
	);

	header("Location: index.php");
?>