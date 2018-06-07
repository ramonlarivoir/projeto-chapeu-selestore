<?php
$conexao = new mysqli("localhost","root","toor","chapeuSelestore");


if (mysqli_connect_errno())
  {
  echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
  }

?>