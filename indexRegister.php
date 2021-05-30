<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
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
                            <a href="./index.php"><img src="./img/logo.png" class="logo" alt="logo de pagina"></a>
                        </div>
                        <div class="col-sm titubarra">
                            <ul class="col-sm navbar-nav ">
                                <li class="nav-item">
                                    <span onclick="cerrarMenu()">
                                        <img class="cerrar" src="./img/cancel.png" alt="cerrar menu">
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link titubarra">ACERCA DE</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <select class="form-select event ">
                                        <option selected ="0" class="sub">EVENTOS</option>
                                        <option value="1" class="sub">CONCIERTO</option>
                                        <option value="2" class="sub">COMEDIA</option>
                                        <option value="3" class="sub">DEPORTE</option>
                                    </select>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand"><img class="carro" src="./img/carro.png" alt="carro de compras"></a>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex">
                                        <input class="form-control form" type="search" placeholder="Buscar">
                                        <label for="buscar"></label>
                                        <button class="btn" type="submit"><img class="imagebusca" src="./img/buscar.png"
                                                alt="buscar"></button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <!-- FIN NAV-->
                </div>
            </div>
        </header>
           <!-- titulo evento -->
        <div class="row ">
            <div class="ti-event2">
                <h2 class="ti-event ">CONFIRMAR REGISTRO</h2>
            </div>
        </div> <!-- titulo evento -->



        <!--  formulario -->

        <div class="container fluid">
            <form action="form-horizontal">
                <!--  nombre -->
                <div class="row">
                    <div class="tit_col_regi">
                     <label class="tit_regis" for="nombre ">Nombre:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro ">
                        <label for="nombre"></label>
                    </div>
                </div>

                <!--  apellido -->

                <div class="row">
                    <div class="tit_col_regi">
                        <label class="tit_regis" for="apellido">Apellido:</label>
                    </div>
                    <div class="col-holder ">
                        <input type="text" class="form-registro" >
                        <label for="apellidor"></label>
                    </div>
                </div>

                <!--  nacimiento -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label class="tit_regis" for="fecha nacimiento"> Fecha Nacimiento:</label>
                    </div>
                    <div class="col-holder">
                        <input type="date" class="form-registro" >
                        <label for="fecha nacimiento"></label>
                    </div>
                </div>

                <!--  telefono -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label class="tit_regis" for="Correo">Telefono:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro" >
                        <label for="correo"></label>
                    </div>
                </div>

                <!--  provincia -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label class="tit_regis" for="provincia">Provincia:</label>
                    </div>

                    <div class="col-holder ">
                        <select id="provincia" class="placeho" name="provincia">
                            <option value="1"></option>
                            <option value="2">Puntarenas</option>
                            <option value="3">San José</option>
                            <option value="4">Cartago</option>
                            <option value="5">Heredia</option>
                            <option value="#">Guanacaste</option>
                            <option value="#">Limon</option>
                            <option value="#">Alajuela</option>
                        </select>
                    </div>
                </div>

                <!--  correo -->

                <div class="row">
                    <div class="tit_col_regi">
                        <label class="tit_regis" for="Correo">Correo:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro">
                        <label for="correo"></label>
                    </div>
                </div>

                <!--  tarjeta -->

                <div class="row">
                    <div class="tit_col_regi">
                        <label class="tit_regis" for="tarjeta de credito">Tarjeta Credito:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro">
                        <label for="tarjeta de credito"></label>
                    </div>
                </div>
            </form>

        </div>

        <div class="col-sm-12 btn-regis">
            <a href="./indextiket.php" class="btn btn-primary btn_compra">Comprar</a>
        </div>

        <!-- Footer -->
        <div class="container-fluid ">
            <footer class="row footer-back">
                <div class=" footer-icon">
                    <li class="list-inline-item">
                        <img class=" face" src="./img/facebook2.png" class="" alt="logo face" />
                    </li>
                    <li class="list-inline-item ">
                        <img class="tele" src="./img/telegram3.png" class="" alt="logo telegran" />
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