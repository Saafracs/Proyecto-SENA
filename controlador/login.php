<?php

$nombreUsuario   = $_POST['nombreUsuario'];
$passwordUsuario = $_POST['passwordUsuario'];
session_start();
$_SESSION['nombreUsuario'] = $nombreUsuario;

$conexion  = mysqli_connect("localhost", "root", "", "centro_crasia");
$consulta  = "SELECT * FROM usuarios where nombreUsuario='$nombreUsuario' and passwordUsuario='$passwordUsuario'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: ../vista/admi.php");
} else {
    ?>
	<?php
include "../vista/login.php";
    ?>
	<script type="text/javascript">
		alert("Usuario no encontrado");
	</script>
	<?php
}
?>