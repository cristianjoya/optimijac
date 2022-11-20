<?php
session_start();
include('conexion.php');

if( isset($_POST['usuario']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $usuario = validate($_POST['usuario']);
    $password =validate($_POST['password']);

    if (empty($usuario)) {
        header("Location: ../index.php?error=El usuaio es requerido");
        exit();
    }elseif (empty($password)){
        header("Location: ../index.php?error=La Contraseña es requerida");
        exit();
    }else{
        //$password =md5($password);
        $sql ="SELECT * FROM clientes WHERE usuario='$usuario' AND password='$password'";
        $resul=mysqli_query($db,$sql);
        if (mysqli_num_rows($resul)){
            $row= mysqli_fetch_assoc($resul);
            if ($row['usuario'] === $usuario && $row['password'] === $password) {
               $_SESSION['usuario'] = $row['usuario'];
               $_SESSION['nombre'] = $row['nombre'];
               $_SESSION['id_clientes'] = $row['id_clientes'];
            header("Location: inicio.php");
            exit();
            } else{
                header("Location: ../index.php?error=EL usuario o la contraseña son incorrectos");
                exit();
            }
        }else{
            header("Location: ../index.php?error=EL usuario o la contraseña son incorrectos");
            exit();
        }
    }
}else{
    header("Location: ../index.php");
    exit();
}