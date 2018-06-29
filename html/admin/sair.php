<?php
	session_start();

	unset(
		$_SESSION['usuarioLogin'],
		$_SESSION['loginErro']
	);

	header("Location: ../index.php");
?>