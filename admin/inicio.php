<?php
include('../include/conexion.php');
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$user = $_SESSION['usuario'];

$mensaje = "No contestado";
$contestado = "contestado";

$sql = "SELECT id_admin, usuario FROM admin WHERE usuario='$user'";

$resul = mysqli_query($db, $sql);

$row = $resul->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Estilos/inicios.css">
    <script src="include/CambioEstado.js"></script>

    <title>Inicio</title>
</head>

<body>

    <nav class="navbar bg-black">
        <div class="container-fluid">
            <label style="color: white;">
                Bienvenido a OPTIMIJAC:
                <?php echo utf8_decode($row['usuario']) ?>,
                Su Id es:
                <?php echo utf8_decode($row['id_admin']) ?>
            </label>
            <label>
                <a href="CerrarSesion.php" class="btn btn-danger">Cerrar Sesion</a>
                <a href="https://accounts.google.com/v3/signin/identifier?dsh=S50607286%3A1667066588883981&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWpREe02Nu6z6nOJr2M34j1i52B1TSDUc4mR5nQD1X1A9FgZl5WosC9ZXHGlhZgENnlxGNDyhw"
                    class="btn btn-danger">Ir a gmail</a>
            </label>
        </div>
    </nav>
    <!--*************************** -->


    <div class="contenido">
        <!--CLIENTES-->
        <h1>Clientes</h1>
        <table width="100%">
            <thead class="table-Primary table-striped">
                <tr>
                    <th scope="col">id_clientes</th>
                    <th scope="col">Nombre</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $consulta = "SELECT * FROM clientes WHERE id_clientes='$id'";
                    $resultado = mysqli_query($db, $consulta);
                    while ($row = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id_clientes'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombre'] ?>
                    </td>
                    <td><a href="BorrarC.php?id=<?php echo $row['id_clientes'] ?>" class="btn btn-danger">Eliminar</a>
                        </th>
                </tr>
                <?php
                    }
                } else {
                    echo "Da click en ver para mostar los  clientes seleccionados";
                }
                ?>
            </tbody>
        </table>

        <div style="padding:100px;
background:rgb(65, 196, 196);
"></div>


        <!-- PETICIONES-->
        <h1>Peticiones</h1>
        <table width="100%">
            <thead class="table-Primary table-striped">
                <tr>
                    <th scope="col">id_pqrs</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">gmail</th>
                    <th scope="col">peticion</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>



            <tbody>
                <?php
                $consulta = "SELECT * FROM pqrs";
                $resultado = mysqli_query($db, $consulta);
                while ($row = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id_pqrs'] ?>
                    </td>
                    <td>
                        <?php echo $row['id_clientes'] ?> <a name="ver" href="inicio.php?id=<?php echo $row['id_clientes'] ?>"
                            class="btn btn-primary pl-2">ver</a>
                    </td>
                    <td>
                        <?php echo $row['gmail'] ?>
                    </td>
                    <td>
                        <?php echo $row['peticion'] ?>
                    </td>

                    <td>
                        
                    <?php echo $row['Estado'] ?>
                    </td>

                    <td>
                        <button type="button" class="btn btn-primary">Contestar</button>
                        <a href="BorrarP.php?id=<?php echo $row['id_pqrs'] ?>" class="btn btn-danger">Eliminar</a></th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <script>
            
        </script>

    </div>
</body>

</html>