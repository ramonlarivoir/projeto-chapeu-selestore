<?php 
    include ('navbar.php');
    $server = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $db_name = 'chapeuSelestore';
    $port = '3306';

    $db_connect = new mysqli($server, $user,$password,
      $db_name, $port);
    mysqli_set_charset($db_connect,"utf8");

 ?>



<div>
  <div id="carouselExampleIndicators" class="carousel slide mt-5 col-lg-10 mx-auto" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/img/harry potter.jpg" alt="Bonecos Harry Potter">
      <div class="carousel-caption d-none d-md-block">
 <h5>Harry Potter e as relíquias da morte em Blu Ray</h5>
 <p>Assista ao último filme da saga em Blu Ray!</p>
</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/img/Harry_Pottah.jpg"  alt="Bonecos diversos Harry Potter">
        <div class="carousel-caption d-none d-md-block">
      <h5>Cansado dos livros? Agora você também pode ver os filmes!</h5>
      <p>Filmes do Harry Potter estão na promoção!!</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/img/bonecosPop.jpg" alt="Bonecos amigos Harry Potter">
        <div class="carousel-caption d-none d-md-block">
      <h5>Os bonecos funko estão bombando!!</h5>
      <p>Compre já o boneco funko do seu personagem favorito!</p>
    </div>
    </div>
  </div>

</div>

<div>


<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>


</div>





</div>

<div>


<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>


</div>





   <div class="col-lg-12  ">
      <div class="row linha-card ">
        <div class="card-deck  card-cascade wider mb-r d-flex justify-content-center"> 
       <?php 
        if($db_connect->connect_error){
        echo 'falha: '. $db_connect->connect_error;
      }
      else{
        //achando os maiores valores de id_produto
        $rowSQL = mysqli_query($db_connect,"SELECT MAX( id_produto ) AS max FROM `produto`;" );
        $row = mysqli_fetch_array( $rowSQL );
        $maiorId = $row['max'];

        $sql = "SELECT * from produto ORDER BY id_produto DESC";
        $result = $db_connect->query($sql);
        if($result->num_rows > 0){
          $i = $maiorId;
          while( $i > $maiorId - 6 && $row = $result->fetch_assoc()){    ?>
          <div class="col-lg-3 col-md-5 col-sm-12 text-center card-2">
            <div class="view overlay zoom">
                <img src=" <?php echo $row['url_imagem']; ?>"
                 class="img-fluid  hoverable rounded card-img-top " href="#" alt="">
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

<?php
}

}
    include("footer.php");
  ?>