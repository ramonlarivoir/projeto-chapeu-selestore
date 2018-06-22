<?php
    include("navbar-admin.php");
    include("conexao.php");
?>

      <div class = "container">
          <div class ="row">


            <form action="cadastraCategoria.php" method="post" class="form-admin-produto">
              <label for="nomeC">Nome da Categoria:</label>
              <input type="text" name="nomeC" id="nomeC" class="form-control"/required>

               <button class="mt-3 btn btn-success " type="submit">Salvar</button>

               <?php


               $nome = $_POST["nomeC"];


              echo $nome;



               if($db_connect->connect_error==true){
                 echo 'falha na conexão'.$db_connect->connect_error;
               }else{
                  echo 'conectou';


                  if($nome != NULL){
                    $sql = "INSERT INTO categoria(nome_categoria) VALUES ('$nome')";

                    $db_connect->query($sql);

                  }

               }




                ?>


              </form>

            </div>

               <a class="mt-3 mb-3 btn btn-primary" href="produtosTeste.html" role="button">Voltar</a>

         </div>
<?php
    include("footer-admin.php");
?>
