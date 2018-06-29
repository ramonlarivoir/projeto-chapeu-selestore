<?php
    include("navbar-admin.php");
?>


<?php

include("conexao.php");

?>

<?php



  if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTemporaryName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
      if($fileError === 0){
        if($fileSize<1000000){
          $fileNameNew = uniqid('',true).".".$fileActualExt;
          $fileDestination = '../../assets/img/'.$fileNameNew;
          move_uploaded_file($fileTemporaryName,$fileDestination);
        }else{
          echo "arquivo muito grande";
        }

      }else{
        echo "Houve um erro no upload do arquivo";
      }

    }else{
      echo "Este arquivo não é compatível";
    }
  }

  $nome = $_POST["nomeC"];
  $preco = $_POST["preço"];
  $descricao = $_POST["descricao"];
  //$fileDestination = $_POST["file"];
  $nomeDaCategoria = $_POST["select"];

  $query2 = "SELECT * from categoria";
  $resultado2 = $conexao->query($query2);
 while($row = $resultado2->fetch_assoc()){
    if($row['nome_categoria']===$nomeDaCategoria){
      $idDaCategoria = $row['id_categoria'];
    }

   }



   $id = $_GET['id'];

   if($fileDestination!=null){
     $resultado = "UPDATE produto SET id_categoria='$idDaCategoria', nome_produto = '$nome',preco = '$preco', descricao = '$descricao',url_imagem = '$fileDestination' WHERE id_produto='$id'";
   }else{
     $resultado = "UPDATE produto SET id_categoria='$idDaCategoria', nome_produto = '$nome',preco = '$preco', descricao = '$descricao' WHERE id_produto='$id'";
   }
    $conexao->query($resultado);

    $query = "SELECT * from produto WHERE id_produto = '$id'";
    $resultado = $conexao->query($query);

        while($row = $resultado->fetch_assoc()){
            $nomeProduto = $row['nome_produto'];
            $precoProduto = $row['preco'];
            $descricaoProduto = $row['descricao'];
            $arquivineo = $row["url_imagem"];
            $categoriaProduto = $row["id_categoria"];
          }




    echo $nomeCategoria;


 ?>




      <div class = "container">
          <div class ="row">
   <div class="divAdmProd col-lg-5 col-md-5 mx-auto mt-5 mb-5 text-center card">

      <form  action="AdminProduto.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data" class="form-admin-produto">
        <img class="card-img-top" src="<?php echo $arquivineo ?>" alt="Produto 1">

           <input type="file" value="" name="file" ></input>



     </div>
   </div>
 </div>

<div class="container mx-auto">
    <div class = "container col-lg-6 ml-8">

       <label for="nomeC">Nome:</label>
       <input value="<?php echo $nomeProduto; ?>" type="text" name="nomeC" id="nomeC" class="form-control"/required>
       <label for="preço">Preço:</label>
       <input value="<?php echo $precoProduto; ?>" type="text" name="preço" id="preço" class="form-control"/required>




       <label for="descricao">Descrição:</label>
       <textarea type="text" name="descricao" id="descricao" class="form-control field" rows="3"><?php echo $descricaoProduto; ?></textarea>

   <label for="nomeC">Categoria:</label>
       <select class="form-control form-control-sm" name="select">
     <?php
     $query = "SELECT * from categoria";
     $resultado = $conexao->query($query);
     if($resultado >0){
         while($row = $resultado->fetch_assoc()){
          $nomeCategoria = $row['nome_categoria'];
          $idCategoria = $row['id_categoria'];
          if($idCategoria!=$categoriaProduto){
         echo'
           <option>'.$nomeCategoria.'</option>
           ';
         }else{
              echo  '<option selected> '.$nomeCategoria.'</option>';
         }
         }
       }
        mysqli_close($conexao);
      ?>
    </div>
      </select>


          <button class="mt-3 mb-3 btn btn-success" type="submit" name="submit" >Salvar</button>
   <a class="mt-3 mb-3 btn btn-primary" href="tabela-produtos.php" role="button">Voltar</a>

       </form>

    </div>

  </div>




<?php
    include("footer-admin.php");
?>
