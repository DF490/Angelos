<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Login</title>
    <link rel="stylesheet" href="./css/estilo-index.css" type="text/css">
  </head>
  <body>
    
    <?php      
      include("/xampp/htdocs/Proyectos/Angelos/query/script.php")
    ?>

    <div class="form-login">

        <img src="img/login/logo-pizza.jpg" alt="Angelos" class="logo">
         <h1>INICIO DE SESION</h1>

        <form method="post">        
          <input class="controls" type="text" name="usuario" value="" placeholder="Usuario" require>
          <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña" require>
          <input class="buttons" type="submit" name="enviar" value="Ingresar">
          <p><a href="#">¿Olvidastes tu Contraseña?</a></p>
        </form>
      
    </div>
    
  </body>
</html>
	