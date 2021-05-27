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
    <!-- container -->
    <div class="container-fluit ">
        <!-- header -->
        <header class="row menu-nav">
            <div class="col-sm">
                <div class="row  ">
                    <!-- nav -->
                    <nav class=" navbar-static-top navbar navbar-expand-sm  ">
                        <div class="navbar-brand  ">
                            <a href="./index.php"><img src="./img/logo.png" class="d-inline-block logo" alt="logo"></a>

                        </div>

                        <div class="col-sm titubarra">

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <ul class="col-sm navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link titubarra  " aria-current="page" href="#" class="">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra" href="#" class="titubarra ">ACERCA DE</a>
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
                                    <a class="navbar-brand" href="#"><img class="carro" src="./img/carro.png"
                                            class="d-inline-block align-top" alt=""></a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control form" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn" type="submit"><img class="imagebusca" src="./img/buscar.png"
                                        alt="#"></button>
                            </form>
                        </div>
                </div>

                </nav>
                <!-- FIN NAV-->



            </div>
        </header>



        <!--SLIDER-->
        <div class="row conta">

            <div class="col"><img class="image" src="./img/1-concierto.png" alt="#">
            </div>

            <div class="row ">
                <div class="ti-event2 ti-event3">
                    <h3 class="ti-event ">CONCIERTO</h3>
                </div>
            </div> <!-- titulo evento -->



        </div> <!-- titulo evento -->


        <!-- eventos detalle -->
        <div class="row">
            <h4 class="subtitu2">CARLOS RIVERA</h4>
        </div>
        <div class=" row container ">
            <!--titulo3-->
            <div class="col-sm"><img class=" image2" src="./img/1-concierto.png" alt="#">
            </div>
            <div class="col">
                <h4 class="subtitu4">04 </h4>
                <h4 class="subtitu4">Junio </h4>
                <h4 class="subtitu4">2021 </h4>
            </div>
            <div class="col-sm-4 ">
                <h6 class="subtitu5">ESTADIO NACIONAL </h4>
                    <h4 class="subtitu6">CARLOS RIVERA-GUERRA TOUR </h4>
            </div>

            <div class="col-sm">
                <a href="./indexpreventa.php" class="btn btn-primary botton-evento">Registrarse</a>

            </div>

        </div><!--  fin container -->

        <hr size=3>
        <!--  fin container -->
        <!--  formulario -->

        <div class="row  container">

            <div class="col-sm-6">



                <table>
                    <h4 class="subtitu2">GUERRA TOUR</h4>
                    <tr>
                        <td class="titutabla">Evento: </td>
                        <td class="subtabla">Concierto</td>

                    </tr>
                    <tr>
                        <td class="titutabla">Lugar: </td>
                        <td class="subtabla">Estadio Nacional</td>

                    </tr>
                    <tr>
                        <td class="titutabla">Fecha: </td>
                        <td class="subtabla">04/junio/2021</td>

                    </tr>
                    <tr>
                        <td class="titutabla">Hora: </td>
                        <td class="subtabla">8:00 pm</td>
                    </tr>
                    <tr>
                        <td class="titutabla">Categoría: </td>
                        <td class="subtabla">Concierto</td>
                    </tr>

                    <tr>
                        <td class="titutabla">Descripcion: </td>
                        <td class="subtabla">Guerra de Tour,concierto Online</td>

                    </tr>
                    <tr>
                        <td class="titutabla">Precio: </td>
                        <td class="subtabla">¢15.000</td>
                    </tr>
                    <tr>
                        <td class="titutabla">Clasificación: </td>
                        <td class="subtabla">Todo Público</td>
                    </tr>
                </table>

            </div>

            <!--Eventos Relacionados-->
            <div class=" contain   row">
                <div>
                    <h4 class="otrosevent">EVENTOS RELACIONADOS</h4>
                </div>

                <div class="col-sm"><img class="otraimage" src="./img/2-concierto.png" alt="#">
                </div>
                <div class="col-sm">
                    <a href="./index.php" class="btn btn-primary botton-event pro-event">PROXIMAMENTE</a>

                </div>
                <div class="col-sm"><img class="otraimage" src="./img/3-concierto.png" alt="#">
                </div>
                <div class="col-sm">
                    <a href="./index.php" class="btn btn-primary botton-event pro-event">PROXIMAMENTE</a>

                </div>
                <div class="col-sm"><img class="otraimage" src="./img/4-concierto.png" alt="#">
                </div>
                <div class="col-sm">
                    <a href="./index.php" class="btn btn-primary botton-event pro-event">PROXIMAMENTE</a>

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