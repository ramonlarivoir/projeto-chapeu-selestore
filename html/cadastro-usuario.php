<?php include('navbar-admin.php');?>
<?php include('conexao.php');?>
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $senha = $_POST['senha'];
        $confirmarSenha= $_POST['confirmacaoDaSenha'];
        $usuario = $_POST['usuario'];
        $query = "SELECT * from usuario WHERE login = '$usuario' ";
        $resultado = $conexao->query($query);
        if($senha != $confirmarSenha){
            echo 
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: As senhas não combinam!!!
                </div>';
        }else if(strlen($senha)<4){
            echo 
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: A senha é muito curta!!!
                </div>';
        }else if(mysqli_num_rows($resultado)>0){
            echo 
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: Nome do usuário já cadastrado!!!
                </div>';
        }else{
            $query = "INSERT INTO usuario(login,senha) VALUES('$usuario','$senha')";
            $resultado = $conexao->query($query);
            if($resultado){
                echo 
                    '<div class="alert alert-success text-center" role="alert">
                        USUÁRIO CADASTRADO COM SUCESSO!!
                     </div>';
            }

        }

    }
    mysqli_close($conexao);
        
?>
<div class="col-6 mx-auto" id="formulario-usuario">
    <form action="cadastro-usuario.php" method="post">
        <div class="form-group">
            <label for="usuario">Nome do usuário</label>
            <input type="text" class="form-control field" name="usuario" placeholder="Seu Nome" required>
        </div>
        <div class="form-group">
            <label for="Senha">Senha</label>
            <input type="password" class="form-control"name="senha" placeholder="Sua Senha" required>
        </div><div class="form-group">
            <label for="Confirmar_Senha">Repita sua senha</label>
            <input type="password" class="form-control" name="confirmacaoDaSenha" placeholder="Confirme Sua Senha" required>
        </div>
        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
    </form>
 
</div>
<?php include('footer-admin.php');?>