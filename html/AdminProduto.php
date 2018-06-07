<?php
    include("navbar-admin.php");
?>

      <div class = "container">
          <div class ="row">

            <div class="divAdmProd col-lg-5 col-md-5 mt-3 mb-3 text-center card">
             <img class="card-img-top" src="../assets/img/produtoHP2.png" alt="Produto 1">
             <button class="col-lg-3 mt-3 mx-auto  mb-2 btn btn-primary">Trocar foto</button>
            </div>


            <form action="" class="form-admin-produto">
              <label for="nome">Nome:</label>
              <input type="text" name="nome" id="nome" class="form-control" >
              <label for="preço">Preço:</label>
              <input type="text" name="preço" id="preço" class="form-control" >

              <label for="descrição">Descrição:</label>
              <textarea class="form-control" rows="3"></textarea>

               <button class="mt-3 btn btn-success ">Salvar</button>


              </form>

            </div>

               <a class="mt-3 mb-3 btn btn-primary" href="produtosTeste.html" role="button">Voltar</a>

         </div>
<?php
    include("footer-admin.php");
?>
