<?php include("navbar-admin.php");?>
<?php
include("conexao.php");

?>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $query = "DELETE from produto WHERE id_produto ='$id'";
        $resultado = $conexao->query($query);
        if($resultado){
            echo
                '<div class="alert alert-success text-center" role="alert">
                    AVISO: PRODUTO DELETADO COM SUCESSO!!!
                </div>';
        }else{
            echo
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: ERRO AO TENTAR DELETAR PRODUTO!!!
                </div>';
        }
    }
?>
<div class="container">
    <table class="table table-striped table-texto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"><a href="cadastraProduto.php"><img src="../../assets/bootstrap/icons/png/plus-4x.png" alt="adicionar-usuario"></a></th>




            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * from produto";
                $resultado = $conexao->query($query);
                if($resultado >0){
                    $contador = 0;
                    while($row = $resultado->fetch_assoc()){
                        $nomeProduto = $row['nome_produto'];
                        $idProduto = $row['id_produto'];
                        $preco = $row['preco'];
                        $descricao = $row['descricao'];
                        if(strlen($descricao)>30){
                            $descricao = substr($descricao, 0, 26);
                            $descricao .=' ...';
                        }
                        $imagem = $row['url_imagem'];
                        echo
                            '
                            <tr>
                                <td>'.$idProduto.'</td>
                                <td>'.$nomeProduto.'</td>
                                <td>'.$preco.'</td>
                                <td>'.$descricao.'</td>
                                <td>
                                    <a href="" role="button" data-toggle="modal" data-target="#exibirImagem'.$contador.'">
                                        <img src="../../assets/bootstrap/icons/png/eye-2x.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="" role="button" data-toggle="modal" data-target="#excluirProduto'.$contador.'">
                                        <img src="../../assets/bootstrap/icons/png/trash-2x.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="AdminProduto.php?id='.$idProduto.'">
                                        <img  src="../../assets/bootstrap/icons/png/cog-2x.png">
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="exibirImagem'.$contador.'" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel">Imagem do Produto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <img  class = "img-responsive img-modal" src= "'.$imagem.'" alt="imagem-do-produto-'.$idProduto.'">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="modal fade" id="excluirProduto'.$contador.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">AVISO</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        Tem certeza que deseja excluir este produto?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <form method="post" action="tabela-produtos.php">
                                            <button href="" type="submit" name ="id" value="'.$idProduto.'" class="btn btn-danger">Excluir produto</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            ';
                            $contador++;
                    }
                }


                mysqli_close($conexao);
            ?>


        </body>
    </table>
</div>
<?php include("footer-admin.php");?>
