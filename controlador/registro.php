<?php
$conexion = mysqli_connect("localhost", "root", "", "centro_crasia");

$nombre    = $_POST["nombre"];
$apellido  = $_POST["apellido"];
$correo    = $_POST["correo"];
$telefono  = $_POST["telefono"];
$direccion = $_POST["direccion"];
$pass      = $_POST["pass"];
// $repass    = $_POST["repass"];

$consulta = "INSERT INTO usuarios (nombreUsuario,apellidoUsuario,correoUsuario,telefonoUsuario,direccionUsuario,passwordUsuario) values ('$nombre','$apellido','$correo','$telefono', '$direccion','$pass')";
$guardar  = mysqli_query($conexion, $consulta);

header('location:../vista/login.php');
