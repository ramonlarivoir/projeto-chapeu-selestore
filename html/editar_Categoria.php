<?php
    include("navbar-admin.php");

    $server = 'localhost';
    $user = 'root';
    $password = 'root';
    $port = '3306';
    $nomeBancoDados = 'chapeuseletor';
    $db_connect = new mysqli($server, $user, $password, $nomeBancoDados, $port);


                   $nome = $_POST['nomeC'];
                   $id = $_GET['id'];

?>

      <div class = "container">
          <div class ="row">


            <form action="editar_Categoria.php?id=<?php echo $id; ?>" method="post" class="form-admin-produto">
              <label for="nomeC">Nome da Categoria:</label>
              <input type="text" name="nomeC" id="nomeC" class="form-control"/required>



               <button class="mt-3 btn btn-success " type="submit">Salvar</button>

               <?php

               if($db_connect->connect_error==true){
                 echo 'falha na conexão'.$db_connect->connect_error;
               }else{

                  if($nome != NULL){
                         $sql = "UPDATE categoria SET nome_categoria='$nome' WHERE id_categoria='$id'";
                    $db_connect->query($sql);
                  }
                    $db_connect->query($sql);

               }


                ?>


              </form>

            </div>

               <a class="mt-3 mb-3 btn btn-primary" href="produtosTeste.html" role="button">Voltar</a>

         </div>
<?php
    include("footer-admin.php");
?>
