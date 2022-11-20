<?php
include("../include/conexion.php");

$id =$_GET['id'];

$consulta="DELETE FROM clientes  WHERE id_clientes='$id'";
$resultado=mysqli_query($db,$consulta);

    if($resultado){
        Header("Location: inicio.php");
    }