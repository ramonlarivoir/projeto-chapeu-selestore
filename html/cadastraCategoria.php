<?php
    include("navbar-admin.php");
?>

      <div class = "container">
          <div class ="row">


            <form action="cadastraCategoria.php" method="post" class="form-admin-produto">
              <label for="nomeC">Nome da Categoria:</label>
            <!--  <input type="text" name="nomeC" id="nomeC" class="form-control"/required>
              <label for="id_categoria">Novo ID:</label>-->
              <input type="text" name="id_categoria" id="id_categoria" class="form-control"/required>



               <button class="mt-3 btn btn-success " type="submit">Salvar</button>

               <?php

               $server = 'localhost';
               $user = 'root';
               $password = 'root';
               $port = '3306';
               $nomeBancoDados = 'chapeuseletor';
               $db_connect = new mysqli($server, $user, $password, $nomeBancoDados, $port);


               $nome = $_POST["nomeC"];
          //     $id = $_POST["id_categoria"];

               $sqlConsultaID = "SELECT id_categoria FROM categoria";

               $resultado = mysqli_query($db_connect,$sqlConsultaID);







               while()





               if($db_connect->connect_error==true){
                 echo 'falha na conexão'.$db_connect->connect_error;
               }else{
                  echo 'conectou';

               if($id!=NULL && $nome!=NULL){

                   $sql2 = "INSERT INTO categoria(id_categoria,nome_categoria) VALUES (null,'$nome')";
                   $db_connect->query($sql2);

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
