
<?php 
    include ('navbar.php');
    $server = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $db_name = 'chapeuselestore';
    $port = '3306';

    $db_connect = new mysqli($server, $user,$password,
      $db_name, $port);
    mysqli_set_charset($db_connect,"utf8");

 ?>



      <!-- Produtos -->
<div class="container fonte">
  <div class="row">
    <div class="col-lg-3">
      <h1 class="titulo-categorias">Filtro</h1>
      <!-- campo search -->
        <div  class="col-sm-12 col-10">
          <form class="form-inline">
            <div class="input-group ">
              <input class="form-control form-control-edit  " type="search" placeholder="Procure algo" aria-label="Pesquisar">
              <button class="btn btn-edit" type="submit"><img src="../assets/bootstrap/icons/png/magnifying-glass-2x.png"></i></button>
            </div>
          </form>
        </div>
        <form>
        <div class="checkbox-todas">
          <div class=" form-group form-check  checkbox-individual" >
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label " for="exampleRadios1">
             Categoria 1
            </label>
          </div>

          <div class=" form-group  form-check  checkbox-individual">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
            <label class="form-check-label" for="exampleRadios2">
             Categoria 2
            </label>
          </div>

          <div class="form-check form-group checkbox-individual">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
            <label class="form-check-label" for="exampleRadios3">
             Categoria 3
            </label>
          </div>

          <div class="form-check form-group checkbox-individual">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" checked>
            <label class="form-check-label" for="exampleRadios4">
             Categoria 4
            </label>
          </div>
        </div>
          <div class="aplicar">
            <button type="button" class="btn btn-secondary btn-lg btn-2 btn-edit">Aplicar</button>
          </div>

      </div>
      </form>



              <!-- list group item -> cria um 'menu'  action -> cria efeito quando mouse esta em cima  light -> personalizando cores -->
    

   <div class="col-lg-9">
      <div class="row linha-card">
        <div class="card-deck  card-cascade wider mb-r"> 

      <?php 
      if($db_connect->connect_error){
      echo 'falha: '. $db_connect->connect_error;
    }
    else{
      $sql = "SELECT * from produto limit 0,9"; // limitar 9 por pagina
      $result = $db_connect->query($sql);
      $cou = mysqli_num_rows($result);
      if($result->num_rows > 0){
        $aux = 0 ;
        while($row = $result->fetch_assoc()){            ?>

          <div class="col-lg-3 col-md-5 col-sm-12 text-center card-2">
            <div class="view overlay zoom">
                <img src=" <?php echo $row['url_imagem']; ?>"
                 class="img-fluid  hoverable rounded card-img-top " href="#" alt="">
                <a href="#">
                  <div class="mask flex-center">
                      <p class="grey-text"></p> 
                  </div>
                </a>
            </div>           
            <div class="card-body" >
              <a href="#">
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




        <?php  $aux++; }



      }
      else {
        echo "Não há produtos";
      }

    } 
    ?>





      
        </div>
      </div>
    </div>
  </div>




    


   <nav aria-label="Navegacao de paginas">
  <ul class="pagination justify-content-center">
    <?php $a = $cou/9;
          $a=ceil($a);
          for($b = 1; $b <= $a ; $b++ ) { ?>

          <li class="page-item"><a class="page-link" href="#"><?php echo $a ?>  </a></li>


            <?php 
           }
          ?>
  </ul>
</nav>
  </div>
  
	<?php
		include("footer.php");
	?>
