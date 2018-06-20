<?php
	session_start(); 

	$server = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $db_name = 'chapeuSelestore';
    $port = '3306';

	$db_connect = mysqli_connect($server, $user, $password, $dbname, $port);

	if(!$db_connect){
		die("Falha na conexão: " . mysqli_connect_error());
	} else {

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$email = mysqli_real_escape_string($db_connect, $_POST['email']);
		$senha = mysqli_real_escape_string($db_connect, $_POST['senha']);
		$senha = md5($senha);

		$sql = "SELECT * FROM usuario WHERE login = '$email' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($db_connect, $sql);
		$resultado = mysqli_fetch_assoc($result);

		if(empty($resultado)) {
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}elseif(isset($resultado)){
			$_SESSION['usuarioLogin'] = $resultado['login'];
			header("Location: AdminProduto.php");
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}


	} else {
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
}
?>