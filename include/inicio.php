<?php 
include('conexion.php');


session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
 }

$user=$_SESSION['usuario']; 

$sql="SELECT id_clientes, nombre, usuario FROM clientes WHERE usuario='$user'";

$resul=mysqli_query($db,$sql);

$row= $resul->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Estilos/inicios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <nav class="navbar bg-black">
        <div class="container-fluid">
            <label style="color: white;" >
                    Bienvenido a OPTIMIJAC: <?php echo utf8_decode($row['nombre']) ?>,
                    Su Id es: <?php echo utf8_decode($row['id_clientes'])?>
            </label>
            <label >
            <a href="CerrarSesion.php" class="btn btn-danger">Cerrar Sesion</a>
            </label>
        </div>
    </nav>


    <!--******************* -->
    
<div class="formulario">
    <form action="peticion.php" method="POST">

        <h1 style="color:white;">APARTADO DE PETICIONES</h1>
        <?php 
        if (isset($_GET['corret'])) {
        ?>
        <p style="color:white;">
            <?php echo $_GET['corret']  ?>
        </p>
    <?php
        }
    ?>
        <label>Ingrese Su id:</label>
        <input type="text" name="id_clientes" placeholder=" ingrese su ID">
        <label>Gmail:</label>
        <input type="text" name="gmail" placeholder="Ingrese su gmail">
        <label>Peticion:</label>
        <textarea placeholder="Ingrese su peticion" class="form-control" id="exampleFormControlTextarea1" name="peticion"></textarea>
        <input type="submit" name="enviar">
    </form>
</div>

    
</body>
</html>