<?php
session_start();
include("conexion.php");

if (!$conn)

    {
        die ("¡Error al conectar a la BD :" .mysqli_connect_error());
    }
    
if (isset($_POST['enviar'])){    
    $usr = trim($_POST['usuario']);
    $pss = trim($_POST['contrasena']);
    $query = mysqli_query($conn, "select * from login where log_user ='$usr' and log_pss = '$pss'");
    $fila = mysqli_num_rows($query);
    
        
        if ($fila)
        {            
            header("location: ../programacion/Pedidos.php");
        }

        else
        {
            ?>
            <h3 class="no_connect">¡Usuario y contraseña no coinciden!</h3>            
            <?php
        }
    }
        
?>