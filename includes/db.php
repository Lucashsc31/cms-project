<?php

$connection = mysqli_connect("localhost", "root", "fiap", "cms");

if(!$connection)
    echo "<script>alert('Falha ao conectar com o banco de dados')</script>";

?>