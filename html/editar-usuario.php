<?php
    include("navbar-admin.php");
    include("conexao.php");
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id = $_GET['id'];
        $query = "SELECT * from usuario WHERE id_usuario = '$id' ";
        $resultado = $conexao->query($query);
        $row = $resultado->fetch_assoc();
        $senhaAtual = $row['senha'];
        $nomeUsuario = $row['login'];
        echo '
            <div class="col-6 mx-auto" id="formulario-usuario">
                <form action="cadastro-usuario.php" method="post">
                    <div class="form-group">
                        <label for="usuario">Nome do usuário</label>
                        <input type="text" class="form-control input-cadastro-usuario" name="usuario" placeholder="'.$nomeUsuario.'" required>
                    </div>
                    <div class="form-group">
                        <label for="Senha">Senha</label>
                        <input type="password" class="form-control input-cadastro-usuario"name="senha" placeholder="Sua Senha" required>
                    </div><div class="form-group">
                        <label for="Confirmar_Senha">Repita sua senha</label>
                        <input type="password" class="form-control input-cadastro-usuario" name="confirmacaoDaSenha" placeholder="Confirme Sua Senha" required>
                    </div>
                    <div class="col-3 mx-auto ">
                        <button type="submit" name="enviar" class="btn btn-primary ">Enviar</button>
                    </div>
                </form>
            
            </div>
        ';
    
    }

    include("footer-admin.php");
?>