<?php 
    session_start();
    if(!isset($_SESSION['usuarioLogin'])){
      header("Location: area-restrita.php");
    }
    else {}
?>

<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/icons/font/css/open-iconic.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bio.css">
    <link rel="icon" type="imagem/png" href="../assets/img/Chapeu.png" >
    <link rel="stylesheet" type="text/css" href="../assets/css/footerAdmin.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/TabelaStyle.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navbarAdm.css">
</head>

<body>
    <div id="corretor">
            <nav class="navbar navbar-expand-lg navbar-light bg-light  ">

                <h1 id="logo-nav-admin">Chapéu Selestore</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item nav-item-adm">
                            <a class="nav-link" href="tabela-produtos.php">Produtos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-adm">
                            <a class="nav-link" href="tabela-Categorias.php">Categorias
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-adm">
                            <a class="nav-link" href="tabela-usuarios.php">Usuarios
                                <span class="sr-only">(current)</span>
                            </a>

                    </ul>
                    <a class="nav-link " id="nav-adm-icon" href="sair.php">
                            <img src="../assets/bootstrap/icons/png/account-logout-3x.png">
                            <span class="sr-only">(current)</span>
                    </a>
                </div>
            </nav>
    
