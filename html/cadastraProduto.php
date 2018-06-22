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
          $fileDestination = '../assets/img/'.$fileNameNew;
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
  $idDaCategoria = $_POST["select"];

  $arquivo = $_GET['file'];

     $resultado = "INSERT INTO produto(id_categoria,nome_produto,preco,descricao,url_imagem) VALUES ('$idDaCategoria','$nome','$preco','$descricao','$arquivo')";
    $conexao->query($resultado);




 ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>

      <div class = "container">
          <div class ="row">
   <div class="divAdmProd col-lg-5 col-md-5 mt-5 mb-5 text-center card">

      <form  action="cadastraProduto.php?>" method="POST" enctype="multipart/form-data">
        <img class="card-img-top" src="<?php echo $fileDestination; ?>" alt="Produto 1">

           <input type="file" value="Input" name="file" ></input>



     </div>

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

           <button type="submit" name="submit" >Upload</button>


       </form>

    </div>
     <a class="mt-3 mb-3 btn btn-primary" href="tabela-produtos.php" role="button">Voltar</a>
  </div>


    </body>
  </html>


<?php
    include("footer-admin.php");
?>
