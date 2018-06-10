<?php

$conexao = new mysqli("localhost","admin","admin","chapeuSelestore");


if (mysqli_connect_errno())
  {
  echo 
  '<div class="alert alert-danger text-center" role="alert">
      ERRO AO CONECTAR COM O BANCO DE DADOS: '. mysqli_connect_error() .'
  </div>';
  }

?>