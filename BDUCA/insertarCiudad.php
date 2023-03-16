<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $Nombre = $_POST["nombre"];
    $Activo = $_POST["activo"];
  
    $my_query = "insert into ciudad(nombre, activo) 
    values('".$Nombre."', '".$Activo."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>