<?php 
	include("navbar.php");

	$cod_produto = $_GET['produto'];
	$server = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $db_name = 'chapeuSelestore';
    $port = '3306';

    $db_connect = new mysqli($server, $user,$password,$db_name, $port);
    mysqli_set_charset($db_connect,"utf8");

    if($db_connect->connect_error){
      echo 'falha: '. $db_connect->connect_error;
    }
    else{

	      $sql = "SELECT * from produto WHERE id_produto = '$cod_produto'"; 
	      $result = $db_connect->query($sql);

	      if($result->num_rows > 0){

	      	while($row = $result->fetch_assoc()){
	      		$produto_cod = $row['id_produto'];
	      		$produto_nome = $row['nome_produto'];
	      		$produto_preco = $row['preco'];
	      		$produto_desc = $row['descricao'];
	      		$produto_foto = $row['url_imagem'];
	      	}
	      }
	    }

?>

	<?php if ($produto_cod != 	NULL){ ?>
		<div class="container mx-auto " id="produto-box">
			<h1 id="h-produto-indiv"><?php echo $produto_nome ?> </h1>
			<div class="row">
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-8 col-xs-8 text-lg-left text-md-right text-sm-center tex-xs-center" id="img-produto-indiv">
					<img src="<?php echo $produto_foto ?>" width="300" height="350" alt="Imagem do Produto">
				</div>
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-8 col-xs-8 text-lg-right text-md-left text-sm-center text-xs-center" id="texto-produto-indiv">

					<p id="ValorProduto">
						<b>Valor: R$</b><?php echo $produto_preco ?></p>
					<p>
						<?php echo $produto_desc ?>
					</p>
				</div>
				<div class="col-12 text-center" id="btn-produto-indiv">
					<a href="produtos.html" class="btn btn-primary" role="button">Voltar</a>
				</div>
			</div>
		</div>

		<?php
	} else {

		?>
		<div class="col-md-12 text-center">
			<img src="http://www.jb.com.br/media/fotos/2011/07/08/627w/neville-hermione-ron-e-potter-em-cena.jpg"  >;
			<h2 style="color:#333;">Nem os melhores bruxos encontraram esse produto.</h2>
		</div>

		<?php 
	} 
		include("footer.php");
		?>