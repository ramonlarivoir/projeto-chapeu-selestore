<?php
    include("navbar-admin.php");

    include("conexao.php");


    $nome = $_POST['nomeC'];
    $id = $_GET['id'];

    $query = "SELECT * from categoria WHERE id_categoria = '$id'";
    $resultado = $conexao->query($query);

        while($row = $resultado->fetch_assoc()){
            $nomeCategoria = $row['nome_categoria'];
          }


?>

<div class = "container">
    <div class ="row">


      <form action="editar_Categoria.php?id=<?php echo $id; ?>" method="post" class="form-admin-produto">
        <label for="nomeC">Nome da Categoria:</label>
        <input type="text" name="nomeC" id="nomeC" class="form-control" value="<?php echo $nomeCategoria; ?>"/required>



         <button class="mt-3 btn btn-success " type="submit">Salvar</button>

         <?php

         if($conexao->connect_error==true){
           echo 'falha na conexão'.$conexao->connect_error;
         }else{

            if($nome != NULL){
                   $sql = "UPDATE categoria SET nome_categoria='$nome' WHERE id_categoria='$id'";
              $conexao->query($sql);
            }
              $conexao->query($sql);

         }


          ?>


        </form>

      </div>

         <a class="mt-3 mb-3 btn btn-primary" href="tabela-Categorias.php" role="button">Voltar</a>

   </div>
<?php
    include("footer-admin.php");
?>
