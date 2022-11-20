<?php
include('conexion.php');

$id=$_POST['id_clientes'];
$gmail=$_POST['gmail'];
$peticion=$_POST['peticion'];


$sql="INSERT INTO pqrs VALUE(NULL,'$id','$gmail','$peticion', 'No contestado')";

$resul=mysqli_query($db,$sql);
if ($resul) {
    header("Location: inicio.php?corret=Peticion enviada correctamente");
}

