<?php
include("../include/conexion.php");

$id =$_GET['id'];

$consulta="UPDATE pqrs SET Estado= 'Contestado' WHERE id_pqrs='$id' ";
$resultado=mysqli_query($db,$consulta);



    if($resultado){
        Header("Location: inicio.php");
    }

    $sql="INSERT INTO pqrs VALUE(NULL,'$id','$gmail','$peticion', '$Estado')";