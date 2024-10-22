<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Advent+Pro&effect=anaglyph" rel="stylesheet"/>
        <title>
            Registrar
        </title>
        <link href="../modelo/imagenes/avocado.ico" rel="icon" type="image/png"/>
        <link href="../modelo/Registrar.css" rel="stylesheet"/>
    </head>
</html>
<body>
    <a href="javascript: history.go(-1)">
        <input class="Regresar" type="button" value="Regresar"/>
    </a>
    <script src="../controlador/main.js">
    </script>
</body>
<div class="box">
    <h2>
        Registrar
    </h2>
    <form action="../controlador/registro.php" class="formulario" id="formlog" method="POST">
        <div class="inputBox">
            <input name="nombre" required="required" type="text">
                <label>
                    Nombre
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="apellido" required="required" type="text">
                <label>
                    Apellido
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="correo" required="required" type="email">
                <label>
                    Correo
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="telefono" required="required" type="number">
                <label>
                    Telefono
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="direccion" required="required" type="text">
                <label>
                    Direccion
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="pass" required="required" type="password">
                <label>
                    Contraseña
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="repass" required="required" type="password">
                <label>
                    Confirmar Contraseña
                </label>
            </input>
        </div>
        <div>
            <a href="">
                <input class="esta" name="registrar" type="submit" value="Crear Usuario"/>
            </a>
        </div>
    </form>
</div>
