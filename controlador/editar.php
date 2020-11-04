<!DOCTYPE html>
<html>
    <head>
        <link href="../modelo/imagenes/avocado.ico" rel="icon" type="image/png"/>
        <meta charset="utf-8"/>
        <link href="../modelo/editar.css" rel="stylesheet" type="text/css"/>
        <title>
            Editar Usuario
        </title>
    </head>
    <body>
        <a href="javascript: history.go(-1)">
            <input class="goback" type="button" value="Regresar"/>
        </a>
        <?php
$conexion = mysqli_connect("localhost", "root", "", "centro_crasia");

$editar_id = $_GET['editar'];
$traer     = "SELECT * FROM usuarios WHERE idUsuario='$editar_id'";
$guardar   = mysqli_query($conexion, $traer);

$dato      = mysqli_fetch_array($guardar);
$nombre    = $dato['nombreUsuario'];
$apellido  = $dato['apellidoUsuario'];
$correo    = $dato['correoUsuario'];
$telefono  = $dato['telefonoUsuario'];
$direccion = $dato['direccionUsuario'];
$pass      = $dato['passwordUsuario'];
?>
        <br/>
        <div align="center" class="box">
            <h1>
                Usuarios
            </h1>
            <br/>
            <br/>
            <br/>
            <form action="" method="POST">
                <input name="Nombre" placeholder="Nombre" required="required" type="text" value="<?php echo ($nombre) ?>"/>
                <input name="Apellido" placeholder="Apellido" required="required" type="text" value="<?php echo ($apellido) ?>"/>

                <input name="Correo" placeholder="Correo" required="required" type="text" value="<?php echo ($correo) ?>"/>
                <input name="Telefono" placeholder="Telefono" required="required" type="text" value="<?php echo ($telefono) ?>"/>
                <input name="Direccion" placeholder="Direccion" required="required" type="text" value="<?php echo ($direccion) ?>"/>
                <input name="Contraseña" placeholder="Contraseña" required="required" type="text" value="<?php echo ($pass) ?>"/>
                <br/>
                <br/>

                <input class="botonregistro" name="actualizar" type="submit" value="Actualizar"/>
            </form>
        </div>
        <?php
if (isset($_POST['actualizar'])) {
    $actualizar_nombre    = $_POST['Nombre'];
    $actualizar_apellido  = $_POST['Apellido'];
    $actualizar_correo    = $_POST['Correo'];
    $actualizar_telefono  = $_POST['Telefono'];
    $actualizar_direccion = $_POST['Direccion'];
    $actualizar_pass      = $_POST['Contraseña'];

    $editar = "UPDATE usuarios SET nombreUsuario='$actualizar_nombre', apellidoUsuario='$actualizar_apellido', correoUsuario='$actualizar_correo', telefonoUsuario='$actualizar_telefono', direccionUsuario='$actualizar_direccion', passwordUsuario='$actualizar_pass' WHERE idUsuario='$editar_id'";

    $guardar = mysqli_query($conexion, $editar);
    header('Location:usuarios.php');
}?>
    </body>
</html>