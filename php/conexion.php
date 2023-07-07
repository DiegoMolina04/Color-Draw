
<?php
    $conexion = new mysqli("localhost","root","","bd_cartillaColorear");
    
    if($conexion->connect_errno){

        echo "Sin conexión: (".$conexion->connect_errno . ") " . $conexion->connect_errno;
    }

?>