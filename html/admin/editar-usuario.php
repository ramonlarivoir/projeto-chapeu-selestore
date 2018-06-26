<?php
    include("navbar-admin.php");
    include("conexao.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $novoUsuario = $_POST['usuario'];
        $novaSenha =   $_POST['senha'];
        $confirmarNovaSenha = $_POST['confirmacaoDaSenha'];
        $query = "UPDATE usuario SET login = '$novoUsuario', senha = MD5('$novaSenha') WHERE id_usuario = $id";
        if($novaSenha != $confirmarNovaSenha){
            echo
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: As senhas não combinam!!!
                </div>';
        }else if(strlen($novaSenha)<4){
            echo
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: A senha é muito curta!!!
                </div>';
        }else{
            $resultado = $conexao->query($query);
            if($resultado){
                echo
                    '<div class="alert alert-success text-center" role="alert">
                        USUÁRIO EDITADO COM SUCESSO!!!
                    </div>';
            }else{
                echo
                    '<div class="alert alert-danger text-center" role="alert">
                      AVISO: ERRO AO TENTAR EDITAR USUÁRIO!!!
                     </div>';
            }
        }

        echo '    <div class="col-3 mx-auto">
                  <form action="tabela-usuarios.php">
                <button type="submit" name="id" value = "'.$id.'" class="btn btn-primary ">Voltar à tabela de usuários</button>
                  </form>
            </div>';


    }
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id = $_GET['id'];
        $query = "SELECT * from usuario WHERE id_usuario = '$id' ";
        $resultado = $conexao->query($query);
        $row = $resultado->fetch_assoc();
        $senhaAtual = $row['senha'];
        $nomeUsuario = $row['login'];
        echo '
            <div class="col-6 mx-auto" id="formulario-usuario">
                <form action="editar-usuario.php" method="post">
                    <div class="form-group">
                        <label for="usuario">Nome do usuário</label>
                        <input type="text" class="form-control input-cadastro-usuario" name="usuario" value="'.$nomeUsuario.'" required>
                    </div>
                    <div class="form-group">
                        <label for="Senha">Senha</label>
                        <input type="password" class="form-control input-cadastro-usuario"name="senha" placeholder="Nova Senha" required>
                    </div><div class="form-group">
                        <label for="Confirmar_Senha">Repita sua senha</label>
                        <input type="password" class="form-control input-cadastro-usuario" name="confirmacaoDaSenha" placeholder="Confirme Sua Senha" required>
                    </div>
                    <div class="col-3 mx-auto ">
                        <button type="submit" name="id" value = "'.$id.'" class="btn btn-primary ">Enviar</button>
                    </div>
                </form>

            </div>
        ';

    }

    include("footer-admin.php");
?>
