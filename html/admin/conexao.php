<?php

<<<<<<< HEAD
$conexao = new mysqli("localhost","admin","admin","chapeuselestore","3306");
=======
$conexao = new mysqli("localhost","admin","admin","chapeuSelestore","3306");
>>>>>>> 6c3005b239112ff8ec4c38be5ff1537493a22eba
mysqli_set_charset($conexao,"utf8");


if (mysqli_connect_errno())
  {
  echo
  '<div class="alert alert-danger text-center" role="alert">
      ERRO AO CONECTAR COM O BANCO DE DADOS: '. mysqli_connect_error() .'
  </div>';
  }

?>
