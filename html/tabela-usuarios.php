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
                                            <a href="#">
                                                <img src="../assets/bootstrap/icons/png/trash-2x.png">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="../assets/bootstrap/icons/png/cog-2x.png">
                                            </a>
                                    </td>
                                </tr>
                                ';
                        }
                    }
                ?>
           
                
            </tbody>
        </table>
    </div>
<?php include("footer-admin.php");?>