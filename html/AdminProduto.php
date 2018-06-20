<?php
    include("navbar-admin.php");
?>

<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$port = '3306';
$nomeBancoDados = 'chapeuseletor';
$db_connect = new mysqli($server, $user, $password, $nomeBancoDados, $port);


        $nome = $_POST["nomeC"];
        $preco = $_POST["preço"];
        $descricao = $_POST["descricao"];

         $id = $_GET['id'];


?>

      <div class = "container">
          <div class ="row">

            <div class="divAdmProd col-lg-5 col-md-5 mt-3 mb-3 text-center card">
             <img class="card-img-top" src="../assets/img/produtoHP2.png" alt="Produto 1">
          <!--   <button class="col-lg-3 mt-3 mx-auto  mb-2 file btn btn-primary">Trocar foto</button>
             		<input type="file" name="file"/>-->
                <input class="col-lg-3 mt-3 " type="file" value="Input">
            </div>


            <form action="AdminProduto.php?id=<?php echo $id; ?>" method="POST" class="form-admin-produto">
              <label for="nomeC">Nome:</label>
              <input type="text" name="nomeC" id="nomeC" class="form-control"/required>
              <label for="preço">Preço:</label>
              <input type="text" name="preço" id="preço" class="form-control"/required>

              <label for="descricao">Descrição:</label>
              <textarea type="text" name="descricao" id="descricao" class="form-control field" rows="3" /required></textarea>

               <button class="mt-3 btn btn-success " type="submit">Salvar</button>


               <?php



               $resultado = "UPDATE produto SET nome_produto = '$nome',preco = '$preco', descricao = '$descricao' WHERE id_produto=$id";

          //     $resultadoArquivoImagem = "UPDATE produto SET url_imagem = $novo_nome WHERE id_produto=$id";


               $db_connect->query($resultado);

               echo $descricao;
                ?>



              </form>

            </div>

               <a class="mt-3 mb-3 btn btn-primary" href="produtosTeste.html" role="button">Voltar</a>

         </div>
<?php
    include("footer-admin.php");
?>
