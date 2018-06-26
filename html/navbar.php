<?php session_start(); ?>

<!doctype html>
<html lang="br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styleL.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/icons/font/css/open-iconic.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
    <link rel="icon" type="imagem/png" href="../assets/img/Chapeu.png" >
    <link rel="stylesheet" href="../assets/css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
    <link rel="icon" href="../assets/img/Chapeu.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/img/Chapeu.png" type="image/x-icon" />
    <link href="../assets/bootstrap/css/mdb.min.css" rel="stylesheet">
    <link href="../assets/css/produtoIndiv.css" rel="stylesheet">

  </head>
  <body class="bg">

<nav class="navbar navbar-2 navbar-expand-lg navbar-dark navbar-edit fonte "> 
  <!-- Logo-->
  <div class="col-3 posicao-logo" >
    <a class="" href="../html/index.php" > <img src="../assets/img/Chapeu-Logo-branco.png" class="logo"> </a>
  </div> 
    <!-- Botão para mobile --> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto ">
          <!-- Menus -->
      <li class="nav-item nav-item-2">
        <div class="">
          <a class="nav-link nav-link-2 " href="../html/index.php">
          <img src="../assets/bootstrap/icons/png/home-2x.png" class="icones-navbar">
          Home<span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item nav-item-2">
        <div class="">
          <a class="nav-link nav-link-2" href="../html/produtos.php">
           <img src="../assets/bootstrap/icons/png/cart-2x.png"class="icones-navbar"> 
          Produtos <span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item nav-item-2">
      <div class="">
        <a class="nav-link nav-link-2" href="../html/localização.php">
          <img src="../assets/bootstrap/icons/png/location-2x.png" class="icones-navbar"> 
          Localização<span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item nav-item-2">
      <div class="">
        <a class="nav-link nav-link-2" href="../html/quem-somos.php">
          <img src="../assets/bootstrap/icons/png/info-2x.png" class="icones-navbar"> 
          Quem Somos<span class="sr-only">(current)</span></a>
        </div>
      </li>
       <li class="nav-item nav-item-2">
      <div class="">
        <a class="nav-link nav-link-2" href="../html/contato.php"> 
          <img src="../assets/bootstrap/icons/png/envelope-closed-2x.png" class="icones-navbar">
          Contato<span class="sr-only">(current)</span></a>
        </div>
      </li>
    </ul>
    
        <!-- Button trigger modal -->

    <a href="" role="button" data-toggle="modal" data-target="#exampleModal">
    <img src="../assets/bootstrap/icons/png/person-3x.png" class="icones-navbar"></a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Área administrativa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="px-4 py-3" method="post" action="valida.php">
                    <div class="form-group">
                      <label for="exampleDropdownFormEmail1">Usuário</label>
                      <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Nome de usuário">
                    </div>
                    <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Senha">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                  </form>
        
      </div>
    </div>
  </div>
</div>
      
  </div>  
</nav>
