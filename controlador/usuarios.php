<!DOCTYPE html>
<html>
    <head>
        <link href="../modelo/imagenes/avocado.ico" rel="icon" type="image/png"/>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Advent+Pro&effect=anaglyph" rel="stylesheet"/>
        <title>
            Usuarios
        </title>
        <link href="../modelo/Usuarios.css" rel="stylesheet"/>
    </head>
    <script type="text/javascript">
        function ConfirmDelete(){
            var respuesta = confirm("Estas seguro que deseas eleminar al Usuario?");
            if (respuesta == true) {
                return true
            } else {
                return false
            }
        }
    </script>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <a href="javascript: history.go(-1)">
            <input class="goback" type="button" value="Regresar"/>
        </a>
        <div align="center" class="box">
            <h1>
                Usuarios
            </h1>
            <br/>
            <table border="4" class="tabla">
                <td class="cell">
                    ID
                </td>
                <td align="center" class="cell">
                    Nombre
                </td>
                <td align="center" class="cell">
                    Apellido
                </td>
                <td align="center" class="cell">
                    Correo
                </td>
                <td align="center" class="cell">
                    Teléfono
                </td>
                <td align="center" class="cell">
                    Dirección
                </td>
                <td align="center" class="cell">
                    Contraseña
                </td>
                <td align="center" class="cell">
                    Editar
                </td>
                <td align="center" class="cell">
                    Borrar
                </td>
                <?php
$conexion = mysqli_connect("localhost", "root", "", "centro_crasia");

$consulta = "SELECT * FROM usuarios";
$guardar  = mysqli_query($conexion, $consulta);
$contador = 0;

while ($dato = mysqli_fetch_array($guardar)) {
    $id        = $dato['idUsuario'];
    $nombre    = $dato['nombreUsuario'];
    $apellido  = $dato['apellidoUsuario'];
    $correo    = $dato['correoUsuario'];
    $telefono  = $dato['telefonoUsuario'];
    $direccion = $dato['direccionUsuario'];
    $pass      = $dato['passwordUsuario'];
    // $repass    = $dato[];
    $contador++;
    ?>
                <tr align="center">
                    <td>
                        <?php echo $id; ?>
                    </td>
                    <td>
                        <?php echo $nombre; ?>
                    </td>
                    <td>
                        <?php echo $apellido; ?>
                    </td>
                    <td>
                        <?php echo $correo; ?>
                    </td>
                    <td>
                        <?php echo $telefono; ?>
                    </td>
                    <td>
                        <?php echo $direccion; ?>
                    </td>
                    <td>
                        <?php echo $pass; ?>
                    </td>
                    <td>
                        <a href="editar.php?editar=<?php echo $id ?>">
                            ✏️
                        </a>
                    </td>
                    <td>
                        <a href="borrar.php?borrar=<?php echo $id ?>" onclick="return ConfirmDelete()">
                            🗑️
                        </a>
                    </td>
                </tr>
            <?php }?>
            </table>
            <br/>
            <a href="../vista/registrar.php">
                <input class="botonregistro" name="borrar" type="button" value="Registrar Usuario"/>
            </a>
        </div>
    </body>
</html>
