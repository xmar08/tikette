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
                <div class="navbar-brand  ">
                    <a href="./index.php"><img src="./img/logo.png" class="d-inline-block logo" alt="logo"></a>

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
                                    <option selected>EVENTS</option>
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
                <div class="col-sm-3">
                    <a href="./indextiket.php" class="btn btn-primary botton-evento btnregister">Register</a>

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

            <!--SLIDER-->


            <!-- eventos detalle -->
           

            <!--  fin container -->
            <!--  formulario -->
            <div class="row  container">
                <div class="col-sm-6">
                    <table>

                        <tr>
                            <td class="titutabla">Evento: </td>
                            <td class="subtitu7">Carlos Rivera</td>

                        </tr>
                        <tr>
                            <td class="titutabla">Lugar: </td>
                            <td class="subtitu7">Estadio Nacional</td>

                        </tr>
                        <tr>
                            <td class="titutabla">Fecha: </td>
                            <td class="subtitu7">04/junio/2021</td>

                        </tr>
                        <tr>
                            <td class="titutabla">Hora: </td>
                            <td class="subtitu7">8:00 pm</td>
                        </tr>
                        <tr>
                            <td class="titutabla">Categoría: </td>
                            <td class="subtitu7">Concierto</td>
                        </tr>

                        <tr>
                            <td class="titutabla">Descripcion: </td>
                            <td class="subtitu7">Guerra de Tour, concierto Carlos Rvera
                            </td>
                        </tr>
                        <tr>
                            <td class="titutabla">Precio: </td>
                            <td class="subtitu7">¢15.000</td>
                        </tr>
                        <tr>
                            <td class="titutabla">Clasificación: </td>
                            <td class="subtitu7">Mayor de Edad</td>
                        </tr>
                    </table>

                </div>

                <!--Eventos Relacionados-->
                <div class=" contain   row">
                    <div>
                        <h4 class="otrosevent">OTROS EVENTOS</h4>
                    </div>

                    <div class="col-sm"><img class="otraimage" src="./img/2-concierto.png" alt="#">
                    </div>
                    <div class="col-sm">
                        <a href="#!" class="btn btn-primary botton-evento">Ver</a>

                    </div>
                    <div class="col-sm"><img class="otraimage" src="./img/3-concierto.png" alt="#">
                    </div>
                    <div class="col-sm">
                        <a href="#!" class="btn btn-primary botton-evento">Ver</a>

                    </div>
                    <div class="col-sm"><img class="otraimage" src="./img/4-concierto.png" alt="#">
                    </div>
                    <div class="col-sm">
                        <a href="#!" class="btn btn-primary botton-evento">Ver</a>

                    </div>
                </div>
                <!--  Eventos Relacionados -->

            </div>

            <!-- Footer -->
            <div class="container-fluid ">
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