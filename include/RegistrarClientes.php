<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Estilos/style.css">
    <title>Registrarse</title>
</head>
<body>

    
    <form action="registrar.php" method="POST">
    <h1>Registrarse a OPTIMIJAC</h1>
    <hr>
    <?php 
        if (isset($_GET['error'])) {
        ?>
        <p class="error">
            <?php echo $_GET['error']  ?>
        </p>
    <?php
        }
    ?>
    <hr>
    <i class="fa-solid fa-user"></i>
    <label for="">Nombre</label>
    <input type="text" name="nombre" placeholder="Ingrese su nombre">
    
    <i class="fa-solid fa-user"></i>
    <label for="">Usuario</label>
    <input type="text" name="usuario" placeholder="Ingrese un usuario">

    <i class="fa fa-phone" aria-hidden="true"></i>
    <label for="">Télefono</label>
    <input type="text" name="telefono" placeholder="Ingrese su télefono">

    <i class="fa-solid fa-unlock"></i>
    <label for="">Contraseña</label>
    <input type="password" name="password" placeholder=" Ingrese una contraseña">
    <hr>
    <a href="../index.php">Regresar</a>
    <button type="submit">Registrarse</button>
    


    </form>