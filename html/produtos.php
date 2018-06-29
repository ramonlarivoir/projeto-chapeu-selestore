
<?php 
    include ('navbar.php');
    include('admin/conexao.php');

 ?>



      <!-- Produtos  Search -->

      <?php  
      // listagem de categorias
      $categorias = "SELECT * FROM `categoria`";
      $resultadoCategorias = $conexao->query($categorias);

       ?>

<div class="container fonte">
  <div class="row">
      <div class="col-lg-3 conjunto-categorias"  >
      <div class="card-3">
      <h1 class="titulo-categorias">O que deseja?</h1>
      <!-- campo search -->
        <div  class="col-sm-12 col-10">
          <form class="form-inline"> <!-- metodo post -->
            <div class="input-group ">
              <input class="form-control form-control-edit  " type="text" name = "pesquisa" placeholder="Busque pelo nome" aria-label="Pesquisar">
              <button class="btn btn-edit" type="submit"><img src="../assets/bootstrap/icons/png/magnifying-glass-2x.png" class="icones-navbar"></i></button>
            </div>
          </form>
        </div>
        <form method="get">
            <div class="checkbox-todas">
            <h1 class="subtitulo-categrorias">Categorias</h1>



        <?php  
        //pesquisa por texto
          
          @$pesquisa = $_GET['pesquisa'];

          @$opcaoEscolhida = $_GET['Filtro'];

        //exibir categorias
        if($resultadoCategorias->num_rows > 0){
          while($exibirC = $resultadoCategorias->fetch_assoc()){           
        ?>
            <div class=" form-group form-check  checkbox-individual" >
              <input class="form-check-input" type="radio" name="Filtro" id="<?php echo $exibirC['id_categoria']?>" value="<?php echo $exibirC['id_categoria'];?>">
              <label class="form-check-label " for="<?php echo $numeroLoop?>">
                  <?php echo $exibirC['nome_categoria']; ?>
              </label>
            </div>
            <?php 
          }

        } ?>



          </div>
            <div class="aplicar">
              <button type="submit" name="" class="btn btn-success btn-lg btn-2 btn-edit" >Filtrar</button>
            </div>
        </form>
      </div>
      </div>



              <!-- list group item -> cria um 'menu'  action -> cria efeito quando mouse esta em cima  light -> personalizando cores -->
    

  <div class="col-lg-9 ">
      <div class="row linha-card">
        <div class="card-deck  card-cascade wider mb-r"> 

      <?php 
      if(isset($_GET['page']))
        $cod_pagina = $_GET['page'];
      else $cod_pagina=1;

      $inicioProdutos = ( $cod_pagina-1 )*9;
      $finalProdutos = $cod_pagina*9 - $inicioProdutos;

      //contando quantidade de produtos
      $todosProdutos = "SELECT * from produto";
      $resultadoTodosProdutos =   $conexao->query($todosProdutos);
      $cou = mysqli_num_rows($resultadoTodosProdutos);
        


      if($pesquisa){
          $sql = "SELECT * from produto  WHERE nome_produto LIKE '%$pesquisa%'";   // se houver pesquisa, contar quantos produtos há semelhantes aos termos da pesquisa
          $result =   $conexao->query($sql);
          $cou = mysqli_num_rows($result);
          $sql = "SELECT * from produto  WHERE nome_produto LIKE '%$pesquisa%' limit " . $inicioProdutos . ',' .$finalProdutos;
          $result =   $conexao->query($sql); // mostrar os produtos ja filtrados dentro do limite de 9 por categoria
      }
      else if($opcaoEscolhida){
          $opcaoEscolhida = $_GET['Filtro'];  
          $sql = "SELECT * from produto  WHERE id_categoria LIKE '$opcaoEscolhida'";
          $result =   $conexao->query($sql);
          $cou = mysqli_num_rows($result);
          

          $sql = "SELECT * from produto  WHERE id_categoria LIKE '$opcaoEscolhida' limit ". $inicioProdutos . ',' .$finalProdutos;
          $result = $conexao->query($sql);
         }

      else {      
        $sql = "SELECT * from produto  limit " . $inicioProdutos . ',' .$finalProdutos;
        $result = $conexao->query($sql);   
      }      
      
      
      
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){            ?>

          <div class="col-xl-3 col-md-5 col-sm-12 text-center card-2">
            <div class="view overlay zoom">
                <img src=" <?php echo $row['url_imagem']; ?>"  class="img-fluid  hoverable rounded card-img-top tamanho-padrao-card-imagem-produtos" style="width: 10000px;">
                <a href="produto-individual.php?produto=<?php echo $row['id_produto']; ?>">
                  <div class="mask  waves-effect waves-light rgba-white-slight flex-center">
                      <p class="grey-text "></p> 
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




        <?php  }



      }
      else { ?>
    <div class="col-md-12 text-center">
      <h3 class="erro">Não há nada como isso por aqui. Talvez o produto seja exclusivo para bruxos... ou apenas em falta no nosso estoque.</h3>
    </div>
    <?php 
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
              $bold = "font-weight: bold;" ;
              for($b = 1; $b <= $a ; $b++ ) { 

                if($pesquisa){      ?>

                      <li class="page-item"><a class="page-link"  style="<?php if($b == $cod_pagina)  echo $bold; ?>"   href="produtos.php?page=<?php echo $b ?>&pesquisa=<?php echo $pesquisa ?>" ><?php echo $b ?>  </a></li>
                    <?php
                }
                else if ($opcaoEscolhida){       ?>
                   <li class="page-item"><a class="page-link"  style="<?php if($b == $cod_pagina)  echo $bold; ?>"   href="produtos.php?page=<?php echo $b ?>&Filtro=<?php echo $opcaoEscolhida ?>"><?php echo $b ?>  </a></li>
                    <?php
                }

                else { ?>

                  <li class="page-item"><a class="page-link paginacao" style="<?php if($b == $cod_pagina)  echo $bold; ?>"  href="produtos.php?page=<?php echo $b ?>"><?php echo $b ?>  </a></li>


                <?php 
               }

             }
              ?>
      </ul>
    </nav>
  </div>
  
	<?php
		include("footer.php");
	?>
