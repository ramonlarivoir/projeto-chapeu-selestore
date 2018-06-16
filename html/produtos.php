
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



      <!-- Produtos  Search -->

      <?php  
      // listagem de categorias
      $categorias = "SELECT * FROM `categoria`";
      $resultadoCategorias = $db_connect->query($categorias);
       ?>

<div class="container fonte">
  <div class="row">
    <div class="col-lg-3">
      <h1 class="titulo-categorias">Filtro</h1>
      <!-- campo search -->
        <div  class="col-sm-12 col-10">
          <form class="form-inline" method="POST"> <!-- metodo post -->
            <div class="input-group ">
              <input class="form-control form-control-edit  " type="text" name = "pesquisa" placeholder="Procure algo" aria-label="Pesquisar">
              <button class="btn btn-edit" type="submit"><img src="../assets/bootstrap/icons/png/magnifying-glass-2x.png"></i></button>
            </div>
          </form>
        </div>
        <form method="POST">
          <div class="checkbox-todas">



      <?php  
      //pesquisa por texto
        
        @$pesquisa = $_POST['pesquisa'];

      //exibir categorias
      if($resultadoCategorias->num_rows > 0){
        $numeroLoop = 0;
        while($exibirC = $resultadoCategorias->fetch_assoc()){           
      ?>
          <div class=" form-group form-check  checkbox-individual" >
            <input class="form-check-input" type="radio" name="Filtro" id="<?php echo $numeroLoop?>" value="option<?php echo $numeroLoop;?>">
            <label class="form-check-label " for="<?php echo $numeroLoop?>">
                <?php echo $exibirC['nome_categoria']; ?>
            </label>
          </div>
          <?php 
        $numeroLoop++;
        }
      } ?>



        </div>
          <div class="aplicar">
            <button type="button" class="btn btn-secondary btn-lg btn-2 btn-edit" >Aplicar</button>
          </div>
        </div>
      </form>



              <!-- list group item -> cria um 'menu'  action -> cria efeito quando mouse esta em cima  light -> personalizando cores -->
    

   <div class="col-lg-9">
      <div class="row linha-card">
        <div class="card-deck  card-cascade wider mb-r"> 

      <?php 
      if($pesquisa){

        $sql = "SELECT * from produto  WHERE nome_produto LIKE '%$pesquisa%' limit 0,9"; // limitar 9 por pagina
      }

      else {

        $sql = "SELECT * from produto  limit 0,9";
      
      }
      
      $result = $db_connect->query($sql);
      $cou = mysqli_num_rows($result);
      if($result->num_rows > 0){
        $aux = 0 ;
        while($row = $result->fetch_assoc()){            ?>

          <div class="col-xl-3 col-md-5 col-sm-12 text-center card-2">
            <div class="view overlay zoom">
                <img src=" <?php echo $row['url_imagem']; ?>"  class="img-fluid  hoverable rounded card-img-top" style="width: 10000px;">
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




        <?php  $aux++; }



      }
      else {
        echo "Não há produtos";
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
