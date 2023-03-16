<?php 
$mysql = new mysqli("localhost", "root", "", "dbuca");
if($mysql ->connect_error){
    echo "Error: ";
    die("Error de conexión");
}
else{
    echo "Conexion exitosa"; 
}
?>