<?php

include_once('conexion.php');
$Nombre = $_POST('nomb');
$corre = $_POST('email');
$contra = $_POST('password');

echo "Gracias por llenar este cuestionario";
$connectar = conn();    

$sql = "INSERT INTO registroos(Nombre, correo, contraseña) VALUES('$Nombre', '$correo', '$contra');";
$result = mysqli_query($connectar, $sql);
?>
