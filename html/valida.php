<?php
    session_start(); 

    $erro = NULL;
    $server = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $dbname = 'chapeuSelestore';
    $port = '3306';

    $conn = mysqli_connect($server, $user, $password, $dbname, $port);

    if(!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    } else {

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        $sql = "SELECT * FROM usuario WHERE login = '$email' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);

        if(empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: ".$_SERVER['HTTP_REFERER']."");
            
        }elseif(isset($resultado)){
            $_SESSION['usuarioLogin'] = $resultado['login'];
            header("Location: admin/tabela-produtos.php");
        }else{
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: ".$_SERVER['HTTP_REFERER']."");
        }


    } else {
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: ".$_SERVER['HTTP_REFERER']."");
    }
}

?>