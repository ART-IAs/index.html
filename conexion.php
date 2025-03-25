<?php
function conn(){
    $shostname = "localhost";
    $usuasriodb = "root";
    $passworddb = "";
    $dbname= "registros";

    $connectar = mysqli_connect($shostname, $usuasriodb, $passworddb, $dbname);
    return $connectar;
}
?>