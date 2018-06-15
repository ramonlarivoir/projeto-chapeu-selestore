<?php include("navbar-admin.php");?>
<?php include("conexao.php");?>
<div class="container">
    <table class="table table-striped table-texto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * from usuario";
                $resultado = $conexao->query($query);
                if($resultado >0){
                    while($row = $resultado->fetch_assoc()){
                        $nomeUsuario = $row['login'];
                        $idUsuario = $row['id_usuario'];
                        echo 
                            '
                            <tr>
                                <td>'.$idUsuario.'</th>
                                    <td>'.$nomeUsuario.'</td>
                                    <td>
                                        <a href="" role="button" data-toggle="modal" data-target="#excluirUsuario">
                                            <img src="../assets/bootstrap/icons/png/trash-2x.png">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="editar-usuario.php?id='.$idUsuario.'">
                                            <img src="../assets/bootstrap/icons/png/cog-2x.png">
                                        </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="excluirUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    
                                        <button href="" type="submit" class="btn btn-danger">Excluir Usuário</button>
                                    
                                </div>
                                </div>
                            </div>
                            </div>
                            ';
                    }
                }
                mysqli_close($conexao);
            ?>
        
            
        </tbody>
    </table>
</div>
<?php include("footer-admin.php");?>