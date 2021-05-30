<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiquete-Home</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- container -->
    <div class="container-fluit">
        <!-- header -->
        <header class="row menu-nav">
            <div class="col-sm">
                <div class="row  ">
                    <!-- nav -->
                    <nav class=" navbar navbar-expand-sm  ">
                        <span onclick="abrirMenu()">
                            <img class="menu" src="./img/menu.png" alt="menu hamburguesa">
                        </span>
                        <div class="navbar-brand  ">
                            <a href="./index.php"><img src="./img/logo.png" class="logo" alt="logo de la pagina"></a>
                        </div>
                        <div class="col-sm titubarra">
                            <ul class="col-sm navbar-nav ">
                                <li class="nav-item">
                                    <span onclick="cerrarMenu()">
                                        <img class="cerrar" src="./img/cancel.png" alt="cerrar menu">
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra" >INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra">CONTACTO</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <select class="form-select form-select-sm  event "alt="seleccionar eventos">
                                        <option selected class="sub">EVENTOS</option>
                                        <option value="1" class="sub">CONCIERTO</option>
                                        <option value="2" class="sub">COMEDIA</option>
                                        <option value="3" class="sub">DEPORTE</option>
                                    </select>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand"><img class="carro" src="./img/carro.png" alt="carrito de compras"></a>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex">
                                        <input class="form-control form" type="search" placeholder="imagen Buscar">
                                        <button class="btn" type="submit"><img class="imagebusca" src="./img/buscar.png"
                                                alt="botton buscar"></button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <!-- FIN NAV-->
                </div>
            </div>
        </header>
        <!-- CARROUSEL-->

        <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>
            <!-- Wrapper for slides -->
            <div class="carousel-inner carou">
                <div class="item active ">
                    <img class="carou" src="./img/CONCIERTO.jpg" alt="concierto">
                </div>
                <div class="item">
                    <img class="carou" src="./img/COMEDIA.jpg" alt="comedia">
                </div>
                <div class="item">
                    <img class="carou" src="./img/DEPORTES.jpg" alt="deportes">
                </div>
            </div>

        </div>
        <!-- FIN CARROUSEL-->
        <!-- titulo evento -->
        <div class="row ">
            <div class="ti-event2">
                <h2 class="ti-event ">EVENTOS</h2>
            </div>
        </div> <!-- titulo evento -->
        <!-- Galery -->
        <div class="carousel-inner ">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row">
                        <!--Primer fila -->
                        <!-- evento1 -->
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="./img/1.jpg" class="card-img-top" alt="imaagen evento 1" />
                                <div class="card-body">
                                    <h3 class="card-title nombre-evento">CARLOS RIVERA</h3>
                                    <p class="card-text lugar-evento">4 JUNIO | 8PM </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento2-->
                        <div class="col-sm-3  d-lg-block">
                            <div class="card">
                                <img src="./img/2.jpg" class="card-img-top" alt="imagen2" />
                                <div class="card-body">
                                    <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento"> Lugar
                                    </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento3-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/3.jpg" class="card-img-top" alt="imagen evento3" />
                                <div class="card-body">
                                <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento"> Lugar </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento4-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="imagen evento4" />
                                <div class="card-body">
                                <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento"> Lugar </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Segunda fila-->
                <div class="container-fluid">
                    <div class="row">
                        <!--Primer fila -->
                        <!-- evento1 -->
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="./img/1.jpg" class="card-img-top" alt="imagen evento 5" />
                                <div class="card-body">
                                <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento">Lugar
                                    </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento2-->
                        <div class="col-sm-3  d-lg-block">
                            <div class="card">
                                <img src="./img/2.jpg" class="card-img-top" alt="imagen evento6" />
                                <div class="card-body">
                                <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento"> Lugar
                                    </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento3-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/3.jpg" class="card-img-top" alt="imagen evento7" />
                                <div class="card-body">
                                <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento"> Lugar </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento4-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="imagen evento 8" />
                                <div class="card-body">
                                <h3 class="card-title nombre-evento">Nombre Evento</h3>
                                    <p class="card-text lugar-evento"> Lugar </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin Galery-->
        <!-- Footer -->
        <div class="container-fluid">
            <!-- Footer -->
            <footer class="row footer-back">
                <div class=" footer-icon">
                    <li>
                        <img class=" face" src="./img/facebook2.png" alt="logo face" />
                    </li>
                    <li>
                        <img class="tele" src="./img/telegram3.png" alt="logo tele" />
                    </li>
                </div>
                <!-- Copyright -->
                <div class="footer-copy">© 2021 Copyright:
                    <a class="footer-copy"> Virtual Event</a>
                    <a class="footer-copy"> Todos los Derechos Reservados</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div> <!-- Fin container -->
    <script src="./js/main.js"></script>
</body>

</html>