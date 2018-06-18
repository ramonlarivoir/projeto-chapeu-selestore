<?php
    include("navbar-admin.php");
?>

      <div class = "container">
          <div class ="row">

            <div class="divAdmProd col-lg-5 col-md-5 mt-3 mb-3 text-center card">
             <img class="card-img-top" src="../assets/img/produtoHP2.png" alt="Produto 1">
          <!--   <button class="col-lg-3 mt-3 mx-auto  mb-2 file btn btn-primary">Trocar foto</button>
             		<input type="file" name="file"/>-->
                <input class="col-lg-3 mt-3 mx-auto  mb-2 mt-2" type="file" value="Input">
            </div>


            <form action="AdminProduto.php" method="POST" class="form-admin-produto">
              <label for="nomeC">Nome:</label>
              <input type="text" name="nomeC" id="nomeC" class="form-control"/required>
              <label for="preço">Preço:</label>
              <input type="text" name="preço" id="preço" class="form-control"/required>

              <label for="descrição">Descrição:</label>
              <textarea class="form-control" rows="3"/required></textarea>

               <button class="mt-3 btn btn-success " type="submit">Salvar</button>

               <?php

               $server = 'localhost';
               $user = 'root';
               $password = 'root';
               $port = '3306';
               $nomeBancoDados = 'chapeuseletor';
               $db_connect = new mysqli($server, $user, $password, $nomeBancoDados, $port);


              $msg=false;

              if(isset($_FILES['arquivo'])){
                $extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
                $novo_nome = md5(time()).$extensao;
                $diretorio = "/upload";

                move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);
              }




               $nome = $_POST["nomeC"];
               $preco = $_POST["preço"];


               $resultadoNome = "UPDATE produto SET nome_produto = '$nome' WHERE id_produto=1";
               $resultadoPreco = "UPDATE produto SET preco = $preco WHERE id_produto=1";
               $resultadoArquivoImagem = "UPDATE produto SET url_imagem = $novo_nome WHERE id_produto=1";


               $db_connect->query($resultadoNome);
               $db_connect->query($resultadoPreco);

               echo 'chapeuSeletor2';
                ?>


              </form>

            </div>

               <a class="mt-3 mb-3 btn btn-primary" href="produtosTeste.html" role="button">Voltar</a>

         </div>
<?php
    include("footer-admin.php");
?>
