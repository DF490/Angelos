<?php
session_start();
include ("conexion.php");


if (!$conn)

    {
        die ("¡Error al conectar a la BD :" .mysqli_connect_error());
    }

    if (isset($_POST['btn_cli'])){    
        $doc = trim($_POST['doc_cli']);
        $nom = trim($_POST['nom_cli']);
        $ape = trim($_POST['ape_cli']);
        $tel = trim($_POST['tel_cli']);
        $mail = trim($_POST['email_cli']);
        $dir = trim($_POST['dir_cli']);


        $query = "INSERT INTO cliente (cliDocumento, cliNombre, cliApellido, cliTelefono, cliEmail, cliDireccion_residencia) VALUES ('$doc', '$nom', '$ape', '$tel', '$mail', '$dir')"; 

        $res = mysqli_query($conn, $query);
    
        if($res){

            /*?>  
                  <h3 class="alert regi-usu" role="alert">¡Usuario registrado!</h3>     
                               
            
            <?php*/            
        }



    }

        
?>