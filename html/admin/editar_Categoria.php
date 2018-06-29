<title>Editar Categoria</title>
<?php
    include("navbar-admin.php");
    include("conexao.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $novaCategoria = $_POST['categoria'];

        $query = "UPDATE categoria SET nome_categoria = '$novaCategoria' WHERE id_categoria = $id";

            $resultado = $conexao->query($query);
            if($resultado){
                echo
                    '<div class="alert alert-success text-center" role="alert">
                        CATEGORIA EDITADA COM SUCESSO!!!
                    </div>';
            }else{
                echo
                    '<div class="alert alert-danger text-center" role="alert">
                      AVISO: ERRO AO TENTAR EDITAR CATEGORIA!!!
                     </div>';
            }

            echo '    <div class="col-3 mx-auto">
                      <form action="tabela-Categorias.php">
                    <button type="submit" name="id" value = "'.$id.'" class="btn btn-primary ">Voltar à tabela de categorias</button>
                      </form>
                </div>';

        }
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id = $_GET['id'];
        $query = "SELECT * from categoria WHERE id_categoria = '$id' ";
        $resultado = $conexao->query($query);
        $row = $resultado->fetch_assoc();
        $nomeCategoria = $row['nome_categoria'];
        echo '
            <div class="col-6 mx-auto" id="formulario-categoria">
                <form action="editar_Categoria.php" method="post">
                    <div class="form-group">
                        <label for="categoria">Nome da categoria</label>
                        <input type="text" class="form-control input-cadastro-categoria" name="categoria" value="'.$nomeCategoria.'" required>
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
