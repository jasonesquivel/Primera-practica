<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $nombres = $_POST["nombres"];
    $my_query = "delete from empleado where nombres = $nombres";
    $result = $mysql->query($my_query);
    if ($result == true) {
        echo "empleado Eliminada";
    } else {
        echo "empleado no Eliminada";
    }
} else {
    echo "Error Desconocido";
}

?>