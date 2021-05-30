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
                            <img class="menu" src="./img/menu.png" alt="menu">
                        </span>
                        <div class="navbar-brand  ">
                            <a href="./index.php"><img src="./img/logo.png" class="logo" alt="logo"></a>
                        </div>
                        <div class="col-sm titubarra">
                            <ul class="col-sm navbar-nav ">
                                <li class="nav-item">
                                    <span onclick="cerrarMenu()">
                                        <img class="cerrar" src="./img/cancel.png" alt="cerrar">
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra" aria-current="page">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra">ACERCA DE</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <select class="form-select form-select-sm  event ">
                                        <option selected class="sub">EVENTOS</option>
                                        <option value="1" class="sub">CONCIERTO</option>
                                        <option value="2" class="sub">COMEDIA</option>
                                        <option value="3" class="sub">DEPORTE</option>
                                    </select>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand"><img class="carro" src="./img/carro.png" alt=""></a>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex">
                                        <input class="form-control form" type="search" placeholder="Buscar"
                                            aria-label="buscar">
                                        <button class="btn" type="submit"><img class="imagebusca" src="./img/buscar.png"
                                                alt="#"></button>
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
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner carou">
                <div class="item active ">
                    <img class="carou" src="./img/CONCIERTO.jpg" alt="#">
                </div>
                <div class="item">
                    <img class="carou" src="./img/COMEDIA.jpg" alt="#">
                </div>
                <div class="item">
                    <img class="carou" src="./img/DEPORTES.jpg" alt="#">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- FIN CARROUSEL-->
        <!-- titulo evento -->
        <div class="row ">
            <div class="ti-event2">
                <h3 class="ti-event ">EVENTOS</h3>
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
                                <img src="./img/1.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">CARLOS RIVERA</h5>
                                    <p class="card-text lugar-evento">4 JUNIO | 8PM </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento2-->
                        <div class="col-sm-3  d-lg-block">
                            <div class="card">
                                <img src="./img/2.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento"> Lugar
                                    </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento3-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/3.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
                                    <p class="card-text lugar-evento"> Lugar </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento4-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
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
                                <img src="./img/1.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento">Lugar
                                    </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento2-->
                        <div class="col-sm-3  d-lg-block">
                            <div class="card">
                                <img src="./img/2.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento"> Lugar
                                    </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento3-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/3.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
                                    <p class="card-text lugar-evento"> Lugar </p>
                                    <a href="./indexDetalle.php" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento4-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
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
                        <img class=" face" src="./img/facebook2.png" alt="face" />
                    </li>
                    <li>
                        <img class="tele" src="./img/telegram3.png" alt="tele" />
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