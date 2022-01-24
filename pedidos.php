<?php 
      include("../programacion/query/form-script.php");      
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>Pedidos</title>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
  
    <header class="container-fluid bg-dark position-sticky top-0">
      <ul
        class="nav nav-pills mb-3 py-3 container"
        id="pills-tab"
        role="tablist"
      >
        <li class="nav-item text-primary" role="presentation">
          <a
            class="nav-link active"
            id="pills-home-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-cliente"
            type="button"
            role="tab"
            aria-controls="pills-cliente"
            aria-selected="true"
            >Cliente</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="pills-contact-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-contact"
            type="button"
            role="tab"
            aria-controls="pills-contact"
            aria-selected="false"
            >Carrito</a
          >
        </li>
      </ul>
    </header>

    <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
      ¡Producto Añadido al carrito!
      </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
      ¡Producto removido!
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div        
        class="tab-pane fade show active container"
        data-tab-content
        id="pills-cliente"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
      >
      <form method="post" id="cliente-form">
            <div class="form-cliente">
              
              <div class="grupo">
                <input type="text" name="doc_cli" required><span class="barra"></span></input>
                <label for="">Documento:</label>
              </div>
              <div class="grupo">
                <input type="text" name="nom_cli" required><span class="barra"></span></input>
                <label for="">Nombre:</label>
              </div>
              <div class="grupo">
                <input type="text" name="ape_cli" required><span class="barra"></span></input>
                <label for="">Apellido:</label>
              </div>
              <div class="grupo">
                <input type="text" name="tel_cli" required><span class="barra"></span></input>
                <label for="">Telefono:</label>
              </div>
              <div class="grupo">
                <input type="email" name="email_cli" required><span class="barra"></span></input>
                <label for="">Correo:</label>
              </div>
              <div class="grupo">
                <input type="text" name="dir_cli" required><span class="barra"></span></input>
                <label for="">Dirección de residencia:</label>
              </div>           
                
            <!--boton form-->
            <button class="btn-cliente" type="submit" name="btn_cli">Crear Cliente</button>
              
            </div>
        </form>
    </div>
<form method="post" name="susses-method">
      <div
        class="tab-pane fade"
        data-tab-content
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <h2 class="h4 m-4 text-primary">Productos</h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Pomodoro</h5>
              <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Tomate, extra queso y orégano</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 5500</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Hawaiana BBQ</h5>
              <img src="./img/platillo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Pollo a la parrilla, tocineta, cebolla, piña y salsa BBQ como base</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 6000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Pollo con champiñon</h5>
              <img src="./img/platillo3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Pollo a la parrilla, champiñones frescos y extra queso</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 6500</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza de carnes</h5>
              <img src="./img/platillo4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Pepperoni, salchicha de cerdo, jamón canadiense, tocineta y carne</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 7000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Mexicana</h5>
              <img src="./img/platillo5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description"> Tomate, aguacate, frijoles refritos, jalapeños, carne picada y queso cheddar</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 7000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Pomodoro Familiar</h5>
              <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Lleve 8 porciones grandes de la pizza pomodoro con Tomate, extra queso y orégano</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 39000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Hawaiana Familiar</h5>
              <img src="./img/platillo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Lleve 8 porciones grandes de la pizza Hawaiana con Pollo a la parrilla, tocineta, cebolla, piña y salsa BBQ como base</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 42000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="card-complete">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pizza Pollo con champiñon Familiar</h5>
              <img src="./img/platillo3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Lleve 8 porciones grandes de la pizza de Pollo a la parrilla, champiñones frescos y extra queso</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 46000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        data-tab-content
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
        
          <button class="btn btn-success" type="submit" name="btn-comprar">COMPRAR</button>
        </div>
      </div>
      
      </div>
    </div>
</form>
    <footer class="bg-dark p-3 mt-5">
      <p class="text-center m-0 text-muted">Pie de página</p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
