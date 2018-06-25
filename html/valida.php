<?php
	session_start();
	include ('admin/conexao.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){ 
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha = md5($senha);

        $query = "SELECT * FROM usuario WHERE login = '$email' AND senha = '$senha'";
		$resultado = $conexao->query($query);
		$row = $resultado->fetch_assoc();
        //$resultado = mysqli_fetch_assoc($result);

        if (empty($resultado)) {
			
            $_SESSION['loginErro'] = "mandado";
            header("Location: index.php");
        } else{
            $_SESSION['usuarioLogin'] = $row['login'];
            header("Location: admin/tabela-produtos.php");
        }

	}
	

?>