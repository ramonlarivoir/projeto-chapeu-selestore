<?php include('navbar-admin.php');?>
<?php include('conexao.php');?>
<title>Cadastro de Categoria</title>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $senha = $_POST['senha'];
        $confirmarSenha= $_POST['confirmacaoDaSenha'];
        $categoria = $_POST['categoria'];
        $query = "SELECT * from categoria WHERE nome_categoria = '$categoria' ";
        $resultado = $conexao->query($query);
        if(mysqli_num_rows($resultado)>0){
            echo
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: Nome da categoria já cadastrado!!!
                </div>';
        }else{
            $query = "INSERT INTO categoria(nome_categoria) VALUES('$categoria')";
            $resultado = $conexao->query($query);
            if($resultado){
                echo
                    '<div class="alert alert-success text-center" role="alert">
                        CATEGORIA CADASTRADA COM SUCESSO!!
                     </div>';
            }

        }

    }
    mysqli_close($conexao);

?>
<div class="col-6 mx-auto" id="formulario-categoria">
    <form action="cadastraCategoria.php" method="post">
        <div class="form-group">
            <label for="categoria">Nome da categoria</label>
            <input type="text" class="form-control input-cadastro-categoria" name="categoria" placeholder="Nome da categoria" required>
        </div>
            <button type="submit" name="enviar" class="btn btn-primary ">Enviar</button>
        </div>
    </form>

    <div class="col-3 mx-auto">
             <form action="tabela-Categorias.php">
           <button type="submit" name="id" value = "'.$id.'" class="btn btn-primary ">Voltar à tabela de categorias</button>
             </form>
       </div>'


<?php include('footer-admin.php');?>
