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
                        <div class="row">
                            <div class="col-sm-6">
                                <form action="" method="">

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
