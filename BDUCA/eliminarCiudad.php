<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $nombre = $_POST["nombre"];
    $my_query = "delete from ciudad where nombre = $nombre";
    $result = $mysql->query($my_query);
    if ($result == true) {
        echo "ciudad Eliminada";
    } else {
        echo "ciudad no Eliminada";
    }
} else {
    echo "Error Desconocido";
}

?>