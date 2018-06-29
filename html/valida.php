<?php
    session_start();

    include("conexao.php");


    if(!$conexao){
        die("Falha na conexão: " . mysqli_conexaoect_error());
    } else {

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $senha = md5($senha);

        $sql = "SELECT * FROM usuario WHERE login = '$email' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conexao, $sql);
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
