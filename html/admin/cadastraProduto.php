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

  $arquivo = $_GET['file'];
   $id = $_GET['id'];

     $resultado = "INSERT INTO produto(id_categoria,nome_produto,preco,descricao,url_imagem) VALUES ('$idDaCategoria','$nome','$preco','$descricao','$fileDestination')";
    $conexao->query($resultado);




 ?>


      <div class = "container">
          <div class ="row">
   <div class="divAdmProd col-lg-5 col-md-5 mt-5 mb-5 text-center card">

      <form  action="cadastraProduto.php" method="POST" enctype="multipart/form-data">
        <img class="card-img-top" src="<?php echo $fileDestination; ?>" alt="Produto 1">

           <input type="file" value="Input" name="file" ></input>

     </div>

       <div class = "container">
     <label for="nomeC">Nome:</label>
       <input type="text" name="nomeC" id="nomeC" class="form-control"/required>
       <label for="preço">Preço:</label>
       <input type="text" name="preço" id="preço" class="form-control"/required>

       <label for="descricao">Descrição:</label>
       <textarea type="text" name="descricao" id="descricao" class="form-control field" rows="3" /required></textarea>

       <select class="form-control form-control-sm" name="select">
     <?php
     $query = "SELECT * from categoria";
     $resultado = $conexao->query($query);
     if($resultado >0){
         while($row = $resultado->fetch_assoc()){
          $nomeCategoria = $row['nome_categoria'];
          $idCategoria = $row['id_categoria'];
         echo'
           <option>'.$nomeCategoria.'</option>
           ';
         }
       }


        mysqli_close($conexao);
      ?>
      </select>

    <button type="submit" name="submit" class="btn btn-success">Salvar</button>
   <a class="mt-3 mb-3 btn btn-primary" href="tabela-produtos.php" role="button">Voltar</a>
       </form>
     </div>

    </div>


  </div>



<?php
    include("footer-admin.php");
?>
