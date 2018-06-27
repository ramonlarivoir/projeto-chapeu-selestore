
<?php
    include ('navbar.php');
    include('admin/conexao.php');
 ?>


<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <?php
      //achando os maiores valores de id_produto
      $rowSQL = mysqli_query($conexao,"SELECT MAX( id_produto ) AS max FROM `produto`;" );
      $row = mysqli_fetch_array( $rowSQL );
      $maiorId = $row['max'];

      $sql = "SELECT * from produto ORDER BY id_produto DESC"; // ordenando por id_produto decrescente
      $result = $conexao->query($sql);
        if($result->num_rows > 0){
          $i = $maiorId;
            while( $i > $maiorId - 3 && $row = $result->fetch_assoc()){    ?>



        <div class="carousel-item <?php if($i === $maiorId){ echo 'active'; }  ?>">
            <div class="view">
                <img class="d-block w-100 tamanho-padrao-carousel-imagem "  src="<?php echo $row['url_imagem'] ; ?>" alt="">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"><?php echo $row['nome_produto'] ; ?></h3>
                <p><?php echo $row['descricao'] ; ?></p>
            </div>
        </div>



        <?php
        $i--; } //fechando while?>

    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
        <?php } // fechando if ?>
<!--/.Carousel Wrapper-->


<div class="row mb-5 jumb">
    <div class="col-md-12">
        <div class="jumb-bg">
            <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                <div class="py-5">

                    <!--Content-->

                        <h2 class="card-title pt-3 mb-5 font-bold">Confira as maiores novidades do mundo dos Bruxos!</h2>
                        <p class="px-5 pb-4">Sonserina não, sonserina não...</p>

                    <!--Content-->

                </div>
            </div>
        </div>
    </div>
</div>




   <div class="col-lg-12  ">
      <div class="row linha-card ">

        <div class="card-deck  card-cascade wider mb-r d-flex justify-content-center">

        <div class="card-deck  card-cascade wider mb-r d-flex justify-content-center">

       <?php

        if($conexao->connect_error){
        echo 'falha: '. $conexao->connect_error;
      }
      else{
        //achando os maiores valores de id_produto
        $rowSQL = mysqli_query($conexao,"SELECT MAX( id_produto ) AS max FROM `produto`;" );
        $row = mysqli_fetch_array( $rowSQL );
        $maiorId = $row['max'];

        $sql = "SELECT * from produto ORDER BY id_produto DESC";
        $result = $conexao->query($sql);
        if($result->num_rows > 0){
          $i = $maiorId;
          while( $i > $maiorId - 6 && $row = $result->fetch_assoc()){    ?>
          <div class="col-lg-3 col-md-5 col-sm-12 text-center card-2">
            <div class="view overlay zoom">
                <img src=" <?php echo $row['url_imagem']; ?>"
                 class="img-fluid  hoverable rounded card-img-top tamanho-padrao-card-imagem-index "style="width: 1000px;">
                <a href="produto-individual.php?produto=<?php echo $row['id_produto']; ?>">
                  <div class="mask flex-center">
                      <p class="grey-text"></p>
                  </div>
                </a>
            </div>
            <div class="card-body" >
              <a href="produto-individual.php?produto=<?php echo $row['id_produto']; ?>" >
              <p class="card-text informacoes-card">
                <?php echo $row['nome_produto']; ?></p>
              <b><p class="card-text informacoes-card font-weight-bold ">R$<?php echo $row['preco']; ?>

              </p></b>
                <div class="card-footer card-footer-edit">
                  <p class="card-text informacoes-card">Detalhes</p>
                </div>
              </a>
            </div>
          </div>

  <?php
$i--; } ?>
        </div>
      </div>
    </div>
  </div>

<?php
}

}
    include("footer.php");
  ?>
