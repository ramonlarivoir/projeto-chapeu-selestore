<?php
  include("navbar-admin.php")
?>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir este item?
      </div>
      <div class="modal-footer">
        <a  class="btn btn-success" href="produtosTeste.html" role="button">Sim</a>
        <a  class="btn btn-danger" href=" produtosTeste.html" role="button">Não</a>

      </div>
    </div>
  </div>
</div>



<?php
  include("footer-admin.php");
?>