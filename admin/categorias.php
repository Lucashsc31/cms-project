<?php ob_start(); ?>

<?php include "includes/header.php";?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bem vindo,
                            <small>Lucas</small>
                        </h1>

                        <?php
                            //Inserindo Categoria
                            if(isset($_POST['enviar'])){
                                $categoria = $_POST['cat_nome'];
                                if(!empty($categoria) or $categoria != ""){
                                    $query = "insert into categorias(cat_nome) values('$categoria')";
                                    mysqli_query($connection, $query);
                                }else if(empty($categoria) or $categoria == ""){
                                    echo "<div class='alert alert-danger' role='alert'>O campo não pode ser vazio.</div>";
                                }
                            }



                            //Deletar Categoria
                            if(isset($_GET['excluir'])){
                                $id = $_GET['excluir'];
                                $query = "delete from categorias where cat_id = $id";
                                mysqli_query($connection, $query);
                                header("location:categorias.php");
                            }
                        ?>


                        <div class="row">
                            <div class="col-sm-6">
                                <form action="categorias.php" method="POST">

                                    <div class="form-group">
                                        <label for="cat_nome">Adicionar Categoria</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="cat_nome">
                                            <span class="input-group-btn">
                                                <input type="submit" class="btn btn-primary" name="enviar" value="Adicionar">
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome da Categoria</th>
                                        <th>Excluir</th>
                                    </tr>
                                    
                                    
                                    <?php
                                        //Looping gerando lista de categorias
                                        $query = "select * from categorias";
                                        $categorias = mysqli_query($connection, $query);
                                        while($cat = mysqli_fetch_assoc($categorias)){
                                            $cat_id = $cat["cat_id"];
                                            $cat_nome = $cat["cat_nome"];
                                    ?>
                                        <tr>
                                            <td><?php echo $cat_id;?></td>
                                            <td><?php echo $cat_nome;?></td>
                                            <td><a href="categorias.php?excluir=<?php echo $cat_id ?>">Apagar</a></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>

                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php"; ?>
