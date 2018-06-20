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


    <title>Produtos</title>


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
          <img src="../assets/bootstrap/icons/png/home-2x.png" >
          Home<span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item nav-item-2">
        <div class="">
          <a class="nav-link nav-link-2" href="../html/produtos.php">
           <img src="../assets/bootstrap/icons/png/cart-2x.png"> 
          Produtos <span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item nav-item-2">
      <div class="">
        <a class="nav-link nav-link-2" href="../html/Localização.php">
          <img src="../assets/bootstrap/icons/png/location-2x.png"> 
          Localização<span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item nav-item-2">
      <div class="">
        <a class="nav-link nav-link-2" href="../html/quem-somos.php">
          <img src="../assets/bootstrap/icons/png/info-2x.png"> 
          Quem Somos<span class="sr-only">(current)</span></a>
        </div>
      </li>
       <li class="nav-item nav-item-2">
      <div class="">
        <a class="nav-link nav-link-2" href="../html/contato.php"> 
          <img src="../assets/bootstrap/icons/png/envelope-closed-2x.png">
          Contato<span class="sr-only">(current)</span></a>
        </div>
      </li>
    </ul>
    
        <!-- Default dropleft button -->
        <div class="btn-group dropleft">
          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria=expanded="false" href="#" > <img src="../assets/bootstrap/icons/png/person-3x.png"> <span class="sr-only">(current)</span></a>
            <div class="dropdown-menu">
              <form class="px-4 py-3" method="post" action="valida.php">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">E-mail</label>
                  <input type="text" name="email" class="form-control" id="inputEmail" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
          </div>
        </div>
      
  </div>  
</nav>


