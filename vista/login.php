<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Advent+Pro&effect=anaglyph" rel="stylesheet"/>
        <title>
            Login
        </title>
        <link href="../modelo/imagenes/avocado.ico" rel="icon" type="image/png"/>
        <link href="../modelo/login.css" rel="stylesheet"/>
    </head>
</html>
<body>
    <a href="javascript: history.go(-1)">
        <input class="Regresar" type="button" value="Regresar"/>
    </a>
</body>
<div class="box">
    <h2>
        Iniciar Sesión
    </h2>
    <form action="../controlador/login.php" method="POST">
        <div class="inputBox">
            <input name="nombreUsuario" required="required" type="text">
                <label>
                    Usuario
                </label>
            </input>
        </div>
        <div class="inputBox">
            <input name="passwordUsuario" required="required" type="password">
                <label>
                    Contraseña
                </label>
            </input>
        </div>
        <center>
            <form class="formulario">
                <a href="">
                    <input class="esta" type="submit" value="Iniciar Sesión"/>
                </a>
                <br/>
                <br/>
                <hr style="width: 60%;"/>
                <br/>
                <a href="registrar.php">
                    <input class="esta" type="button" value="Registrar"/>
                </a>
            </form>
        </center>
    </form>
</div>
