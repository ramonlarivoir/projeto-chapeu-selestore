<?php
    include("navbar-admin.php");
?>

      <div class = "container">
          <div class ="row">

            <form action="cadastroCategoria.php" method="post" class="form-admin-produto">
              <label for="id_categoria">ID da nova categoria:</label>
              <input type="text" name="id_categoria" id="id_categoria" class="form-control"/required>
              <label for="nomeCategoria">Nome da nova categoria:</label>
              <input type="text" name="nomeCategoria" id="nomeCategoria" class="form-control"/required>

               <button class="mt-3 btn btn-success " type="submit">Salvar</button>

               <?php
               $server = 'localhost';
               $user = 'root';
               $password = 'root';
               $port = '3306';
               $nomeBancoDados = 'chapeuseletor';

               $db_connect = new mysqli($server, $user, $password, $nomeBancoDados, $port);

               if($db_connect->connect_error==true){
                 echo 'falha na conexão'.$db_connect->connect_error;
               }else{
                  echo 'conectou';

                 $nome = $_POST["nomeCategoria"];

                 $id = $_POST["id_categoria"];

                 if($id!=NULL && $nome!=NULL){
                   echo "ooi";
                   $sql2 = "INSERT INTO categoria(id_categoria,nome_categoria) VALUES ($nome,$id)";

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
