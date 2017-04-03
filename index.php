<?php 
    include "includes/db.php";
    include "includes/header.php";
    include "includes/navigation.php";
?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                
                <?php
                    $query = "select * from posts";
                    $posts = mysqli_query($connection, $query);
                    while($post = mysqli_fetch_assoc($posts)){
                        $post_nome = $post["post_nome"];
                        $post_autor = $post["post_autor"];
                        $post_data = date('d-m-Y', strtotime($post["post_data"]));
                        $post_imagem = $post['post_imagem'];
                        $post_conteudo = $post['post_conteudo'];
                ?>


                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_nome; ?></a>
                </h2>

                <p class="lead">
                    by <a href="index.php"><?php echo $post_autor; ?></a>
                </p>

                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_data; ?></p>

                <hr>
                <img class="img-responsive" src="images/<?php echo $post_imagem; ?>" alt="">
                <hr>
                <p><?php echo $post_conteudo; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

                <?php
                    }
                ?>
            </div>



            <?php 
                include "includes/sidebar.php"
            ?>

        </div>
        <!-- /.row -->

        <hr>

 <?php 
    include "includes/footer.php";
 ?>
