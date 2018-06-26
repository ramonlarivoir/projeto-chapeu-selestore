<?php include("navbar-admin.php");?>
<?php include("conexao.php");?>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $query = "DELETE from usuario WHERE id_usuario ='$id'";
        $resultado = $conexao->query($query);
        if($resultado){ 
            echo 
                '<div class="alert alert-success text-center" role="alert">
                    AVISO: USUÁRIO DELETADO COM SUCESSO!!!
                </div>';

        }else{
            echo 
                '<div class="alert alert-danger text-center" role="alert">
                    AVISO: ERRO AO TENTAR DELETAR USUARIO!!!
                </div>';
        }
    }
?>
<div class="container">
    <table class="table table-striped table-texto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col"></th>
                <th scope="col"><a href="cadastro-usuario.php"><img src="../../assets/bootstrap/icons/png/plus-4x.png" alt="adicionar-usuario"></a></th>

            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * from usuario";
                $resultado = $conexao->query($query);
                if($resultado >0){
                    $contador = 0;
                    while($row = $resultado->fetch_assoc()){
                        $nomeUsuario = $row['login'];
                        $idUsuario = $row['id_usuario'];
                        echo 
                            '
                            <tr>
                                <td>'.$idUsuario.'</td>
                                <td>'.$nomeUsuario.'</td>
                                <td>
                                    <a href="" role="button" data-toggle="modal" data-target="#excluirUsuario'.$contador.'">
                                        <img src="../../assets/bootstrap/icons/png/trash-2x.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="editar-usuario.php?id='.$idUsuario.'">
                                        <img src="../../assets/bootstrap/icons/png/cog-2x.png">
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="excluirUsuario'.$contador.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">AVISO</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>      
                                        </div>
                                        
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir este usuário?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <form method="post" action="tabela-usuarios.php">
                                                <button href="" type="submit" name ="id" value="'.$idUsuario.'" class="btn btn-danger">Excluir Usuário</button>
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
        
            
        </tbody>
    </table>
</div>
<?php include("footer-admin.php");?>