<?php
include ("conexion.php");

if (!$conn)

    {
        die ("¡Error al conectar a la BD :" .mysqli_connect_error());
    }

    if (isset($_POST['btn-comprar'])){    
        $price = trim($_POST['pecio']);            
    }   

    echo ($price);

?>