<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiquete-Detalle</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap"
        rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar  navbar-expand-sm nav1 ">
                <div class="navbar-brand" href="#"><img src="./img/logo.png" class="d-inline-block align-top" alt="">
                </div>

                <div class="col-sm titubarra">
                    <ul class="navbar-nav  navbar-nav2">
                        <li class="nav-item"><a href="#" class="nav-link titubarra ">HOME</a></li>
                        <li class="nav-item"><a href="#" class="nav-link  titubarra">ABOUT</a></li>

                    </ul>

                </div>
                <select class="form-select form-select-sm  event ">
                    <option selected>EVENTOS</option>
                    <option value="1">CONCIERTO</option>
                    <option value="2">COMEDIA</option>
                    <option value="3">DEPORTE</option>
                </select>
                <div class="navbar-brand" href="#"><img class="carro" src="./img/carro.png"
                        class="d-inline-block align-top" alt="">
                </div>



                <!--Boton Buscar-->
                <div class="flexsearch">
                    <div class="flexsearch--wrapper">
                        <form class="flexsearch--form form" action="#" method="post">
                            <div class="flexsearch--input-wrapper">
                                <input class="flexsearch--input" type="search" placeholder="Buscar">
                            </div>
                            <input class="flexsearch--submit" type="submit" value="" />
                            <img class="imagebusca" src="./img/buscar.png" alt="#">
                        </form>
                    </div>
                </div>

            </nav>

            <nav class="navbar  navbar-expand-sm nav2 ">
                <div class="col-sm">
                    <ul class="navbar-nav">
                        <li class="nav-item "><a href="#" class="nav-link titubarra ">CONCIERTO</a></li>
                        <li class="nav-item "><a href="#" class="nav-link titubarra">COMEDIA</a></li>
                        <li class="nav-item "><a href="#" class="nav-link titubarra">DEPORTE</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Fin nav-->

        <!--SLIDER-->
        <div class="row conta">

            <div class="col-sm-6"><img class=" image" src="./img/1-concierto.png" alt="#">
            </div>
            <div class="row ">

                <!-- titulo evento -->
                <h2 class="ti-event">CONCIERTO </h2>
            </div> <!-- titulo evento -->
        </div> <!-- row -->

        <!-- eventos detalle -->
        <div class="row">
            <h4 class="subtitu2">CARLOS RIVERA</h4>
        </div>
        <div class=" row container ">
            <!--titulo3-->
            <div class="col-sm"><img class=" image2" src="./img/1-concierto.png" alt="#">
            </div>
            <div class="col">
                <h4 class="subtitu4">JUNIO </h4>
                <h4 class="subtitu4">04 </h4>
                <h4 class="subtitu4">2021 </h4>
            </div>
            <div class="col-sm-4 ">
                <h6 class="subtitu5">ESTADIO NACIONAL </h4>
                    <h4 class="subtitu6">CARLOS RIVERA-GUERRA TOUR </h4>
            </div>

            <div class="col-sm">
                <a href="#!" class="btn btn-primary botton-evento">Comprar</a>

            </div>

        </div><!--  fin container -->

        <hr size=3>
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
                        <td class="subtitu7">Lo/ren/ipsum</td>

                    </tr>
                    <tr>
                        <td class="titutabla">Hora: </td>
                        <td class="subtitu7">04/junio/2021</td>
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