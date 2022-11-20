<?php
include("../include/conexion.php");

$id =$_GET['id'];

$consulta="DELETE FROM pqrs  WHERE id_pqrs='$id'";
$resultado=mysqli_query($db,$consulta);

    if($resultado){
        Header("Location: inicio.php");
    }