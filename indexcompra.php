<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso-Compra</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap"
        rel="stylesheet">
    <!-- Main stylesheet -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar  navbar-expand-sm nav1 ">

                <div class="navbar-brand  " href="#"><img src="./img/logo.png" class="d-inline-block logo" alt="">
                </div>
                <div class="col-sm titubarra">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link titubarra  " aria-current="page" href="#" class="">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titubarra" href="#" class="titubarra ">ABOUT</a>
                            </li>
                            <li class="nav-item dropdown">
                                <select class="form-select form-select-sm  event ">
                                    <option selected>EVENTOS</option>
                                    <option value="1">CONCIERTO</option>
                                    <option value="2">COMEDIA</option>
                                    <option value="3">DEPORTE</option>
                                </select>
                            </li>
                            <li class="nav-item">
                                <a lass="navbar-brand" href="#"><img class="carro" src="./img/carro.png"
                                        class="d-inline-block align-top" alt=""></a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control form" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn" type="submit"><img class="imagebusca" src="./img/buscar.png"
                                    alt="#"></button>
                        </form>
                    </div>
                </div>

            </nav><!-- TERMINA NAV -->

            <nav class="navbar   navbar-expand-sm nav2 ">
                <div class="col-sm">
                    <ul class="navbar-nav">

                        <li class="nav-item "><a href="#" class="nav-link titubarra">CONCIERTOS</a></li>
                        <li class="nav-item "><a href="#" class="nav-link titubarra">COMEDIA</a></li>
                        <li class="nav-item "><a href="#" class="nav-link titubarra">DEPORTE</a></li>
                    </ul>
                </div>
            </nav>


            <!-- compras -->
            <div></div>
            <div class="row">
                <div class col>
                    <h4 class="subtitu2 ">CARLOS RIVERA</h4>
                    <h4 class="subtitu5 compra-datos">Viernes,04 de junio de 2021 - 8pm</h4>
                    <h4 class="subtitu5 compra-datos">Estadio Nacional</h4>

                    <div class="col-sm-6"><img class=" image" src="./img/1-concierto.png" alt="#">
                    </div ><!--Fin compras-->


                    <!-- Footer -->


                    <div class="container-fluid">
                        <!-- Footer -->
                        <footer class="row footer-back">
                            <div class=" footer-icon">
                                <li class="list-inline-item">
                                    <img class=" face" src="./img/facebook2.png" class="" alt="..." />
                                </li>
                                <li class="list-inline-item ">
                                    <img class="tele" src="./img/telegram3.png" class="" alt="..." />
                                </li>

                            </div>

                            <!-- Copyright -->
                            <div class="footer-copy">© 2021 Copyright:
                                <a class="footer-copy" href=""> Virtual Event</a>
                                <a class="footer-copy"> Todos los Derechos Reservados</a>
                            </div>
                            <!-- Copyright -->
                        </footer>
                    </div>



                </div>



</body>

</html>