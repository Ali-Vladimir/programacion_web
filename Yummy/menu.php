<?php
$hamburguesas=array(
                      array("id"=>1,"nombre"=>"Clasica","Descripcion"=>"Hambugursa clasica con queso","precio"=>"60","url"=>"","imagen"=>"programacion_web\Yummy\images\hamburguesas_sencilla.png","alt"=>"Imagen de hamgurquesa sencilla"),  
                      array("id"=>2,"nombre"=>"Triple","Descipcion"=>"Hamburguesa de res triple con 3 pisos de carne","precio"=>"70","url"=>"","imagen"=>"programacion_web\Yummy\images\hamburguesas_triple.png","alt"=>"Imagen de Hamburgesa Triple"),
                      array("id"=>3,"nombre"=>"Pollo","Descipcion"=>"Hamburguesa de pollo triple con condimentos","precio"=>"75","url"=>"","imagen"=>"programacion_web\Yummy\images\hambuguesa_pollo.png","alt"=>"Imagen de Hamburgesa de ¨Pollo")

);
/*echo"<pre>";
print_r($hamburguesas);
die();*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main2.css">
    <title>Burger lince</title>
  </head>
  <body>
    <div>
        <div class="container">
            <header>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-2">
                      <img src="images/logo.png" alt="Logo de la pagina" class="logo-img">
                    </div>
                    <div class="col-md-7">
                      <nav class="navbar navbar-expand-lg custom-navbar">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="quienes.phpindex.php">¿Quienes Somos?</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="sucursales.phpindex.php">Sucursales</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contacto.phpindex.php">Contacto</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>
                    <div class="col-md-3 text-end">
                      <span id="perfil"><div class="user-menu">
                        <img src="images/floats/014-usuario.png" alt="Usuario" class="user-icon">
                        <div class="dropdown-menu">
                          <a href="#" class="dropdown-item">Perfil</a>
                          <a href="#" class="dropdown-item">Ajustes</a>
                          <a href="#" class="dropdown-item">Cerrar Sesión</a>
                        </div>
                      </div>
                    </span>
                    </div>
                  </div>                           
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="images/hearder_hamburger.png" class="img-fluid w-100" alt="Bienvenido a Burguer Lince">
                    </div>                    
                </div>
            </header>
                <nav class="navbar navbar-expand-lg bg-dark bg-body-tertiary" data-bs-theme="dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.php">Inicio</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" href="promociones.phpindex.php">Promociones</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="menu.phpindex.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Menu
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="hamburgusesas.phpindex.php">Hamburguesa</a></li>
                              <li><a class="dropdown-item" href="ensaladas.phpindex.php">Ensaladas</a></li>
                              <li><a class="dropdown-item" href="bebidas.phpindex.php">Bebidas</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="combos.phpindex.php">Combos</a></li>
                            </ul>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Busca Aqui Tu Producto" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            <main>
                <section>
                    <div class="row">
                        <div class="col-md-8">
                            <button class="btn promocion_1">Promoción 1</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn promocion_paquetes">Promoción Paquetes</button>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row text-center">
                      <?php foreach($hamburguesas as $hamburguesa); ?>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hamburguesas_sencilla.png" class="card-img-top" alt="Hamburguesa Sencilla">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Sencilla</h5>
                                    <p class="card-text">Dos jugosas carnes a la parrilla, perfectamente sazonadas, suave por dentro y crujiente por fuera.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                      <?php ?>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hamburguesa_triple.png" class="card-img-top" alt="Hamburguesa Triple">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Triple</h5>
                                    <p class="card-text">Tres suculentas capas de carne perfectamente sazonadas, vegetales frescos y nuestras salsas exclusivas.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hambuguesa_pollo.png" class="card-img-top" alt="Hamburguesa de Pollo">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa de Pollo</h5>
                                    <p class="card-text">Acompañada de lechuga fresca, rodajas de tomate, queso cheddar derretido y nuestro aderezo especial.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hamburgusa_dobletocino.png" class="card-img-top" alt="Hamburguesa Doble Tocino">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Doble Tocino</h5>
                                    <p class="card-text">Dos capas de carne jugosa con crujiente tocino ahumado, queso cheddar fundido y un toque de salsa BBQ.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hamburguesas_sencilla.png" class="card-img-top" alt="Hamburguesa Sencilla">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Sencilla</h5>
                                    <p class="card-text">Dos jugosas carnes a la parrilla, perfectamente sazonadas, suave por dentro y crujiente por fuera.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hamburguesa_triple.png" class="card-img-top" alt="Hamburguesa Triple">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Triple</h5>
                                    <p class="card-text">Tres suculentas capas de carne perfectamente sazonadas, vegetales frescos y nuestras salsas exclusivas.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hambuguesa_pollo.png" class="card-img-top" alt="Hamburguesa de Pollo">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa de Pollo</h5>
                                    <p class="card-text">Acompañada de lechuga fresca, rodajas de tomate, queso cheddar derretido y nuestro aderezo especial.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="images/hamburgusa_dobletocino.png" class="card-img-top" alt="Hamburguesa Doble Tocino">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Doble Tocino</h5>
                                    <p class="card-text">Dos capas de carne jugosa con crujiente tocino ahumado, queso cheddar fundido y un toque de salsa BBQ.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </main>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu_inferior">
                                <p>Menu Inferior</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="datos_empresa">
                                <p>Datos de la Empresa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>