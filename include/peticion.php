<?php
include('conexion.php');

$id=$_POST['id_clientes'];
$gmail=$_POST['gmail'];
$peticion=$_POST['peticion'];
$Estado=$_POST['Estado'];

$sql="INSERT INTO pqrs VALUE(NULL,'$id','$gmail','$peticion', '$Estado')";

$resul=mysqli_query($db,$sql);
if ($resul) {
    header("Location: inicio.php?corret=Peticion enviada correctamente");
}

