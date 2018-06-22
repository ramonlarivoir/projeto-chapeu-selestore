<?php include("navbar-admin.php");?>
<?php
include("conexao.php");

?>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $query = "DELETE from categoria WHERE id_categoria ='$id'";
        $resultado = $conexao->query($query);
        if($resultado){
            echo
                '<div class="alert alert-success text-center" role="alert">
                    AVISO: CATEGORIA DELETADA COM SUCESSO!!!
                </div>';
        }else{
            echo
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: ERRO AO TENTAR DELETAR CATEGORIA!!!
                </div>';
        }
    }
?>
<div class="container">
    <table class="table table-striped table-texto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * from categoria";
                $resultado = $conexao->query($query);
                if($resultado >0){
                    $contador = 0;
                    while($row = $resultado->fetch_assoc()){
                        $nomeCategoria = $row['nome_categoria'];
                        $idCategoria = $row['id_categoria'];
                        echo
                            '
                            <tr>
                                <td>'.$idCategoria.'</th>
                                    <td>'.$nomeCategoria.'</td>
                                    <td>
                                        <a href="" role="button" data-toggle="modal" data-target="#excluirCategoria'.$contador.'">
                                            <img src="../assets/bootstrap/icons/png/trash-2x.png">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="editar_Categoria.php?id='.$idCategoria.'">
                                            <img src="../assets/bootstrap/icons/png/cog-2x.png">
                                        </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="excluirCategoria'.$contador.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">AVISO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    Tem certeza que deseja excluir este categoria?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <form method="post" action="tabela-Categorias.php">
                                        <button href="" type="submit" name ="id" value="'.$idCategoria.'" class="btn btn-danger">Excluir categoria</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            ';
                            $contador++;
                    }
                }

                echo'
                <td>
                    <a href="cadastraCategoria.php?id='.$idCategoria.'">
                        <img src="../assets/bootstrap/icons/png/plus-2x.png">
                    </a>
            </td>';



                mysqli_close($conexao);
            ?>


        </tbody>
    </table>
</div>
<?php include("footer-admin.php");?>
