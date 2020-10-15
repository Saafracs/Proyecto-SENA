<?php

$conexion = mysqli_connect("localhost", "root", "", "centro_crasia");

$borrar_id   = $_GET['borrar'];
$borrardatos = "DELETE FROM usuarios WHERE idUsuario='$borrar_id'";
$ejecutar    = mysqli_query($conexion, $borrardatos);

header('location:usuarios.php');
