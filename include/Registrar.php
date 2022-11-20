<?php
include('conexion.php');

$nombre=$_POST['nombre'];
$user=$_POST['usuario'];
$telefono=$_POST['telefono'];
$pass=$_POST['password'];

$sql="INSERT INTO clientes VALUE(NULL, '$nombre', '$user','$telefono' , '$pass')";
$resul=mysqli_query($db,$sql);

if ($resul) {
    header("Location: RegistrarClientes.php?error=Registrado con exito");
}else{
    header("Location: RegistrarClientes.php?error=Fallo el registro");
}