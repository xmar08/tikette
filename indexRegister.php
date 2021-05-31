<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="desciption"
        content="Autor: Xinia Aguilar, Tema:I parte del Proyecto Desarrolo de Aplicaciones Interactivas II ">
    <meta name="desciption" content="Virtual Event es una pagina web para comprar tiquetes de eventos en linea ">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>Tiquete-Home</title>
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
                        <div class="navbar-brand">
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
                                    <a href="#" class="nav-link titubarra" aria-current="page">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link titubarra">CONTACTO</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <select class="form-select event " alt="select">
                                        <option selected class="sub">EVENTOS</option>
                                        <option value="1" class="sub">CONCIERTO</option>
                                        <option value="2" class="sub">COMEDIA</option>
                                        <option value="3" class="sub">DEPORTE</option>
                                    </select>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="navbar-brand"><img class="carro" src="./img/carro.png"
                                            alt="carrito de compras"></a>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex">
                                        <input class="form-control form" type="search" placeholder="Buscar"  aria-label="Search">
                                        <label for="lupa"></label>
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
                <h1 class="ti-event ">CONFIRMAR REGISTRO</h1>
            </div>
        </div> <!-- titulo evento -->
        <!--  formulario -->
        <div class="container fluid">
            <form action="form-horizontal">
                <!--  nombre -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="nombre " class="tit_regis">Nombre:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro ">
                        <label for="Escriba su nombre"></label>
                    </div>
                </div>
                <!--  apellido -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="apellido" class="tit_regis">Apellido:</label>
                    </div>
                    <div class="col-holder ">
                        <input type="text" class="form-registro">
                        <label for="Escriba su apellidor"></label>
                    </div>
                </div>
                <!--  nacimiento -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="fecha nacimiento" class="tit_regis"> Fecha Nacimiento:</label>
                    </div>
                    <div class="col-holder">
                        <input type="date" class="form-registro">
                        <label for="seleccione su fecha nacimiento"></label>
                    </div>
                </div>
                <!--  telefono -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="Correo" class="tit_regis">Telefono:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro">
                        <label for="Escriba su telegono"></label>
                    </div>
                </div>
                <!--  provincia -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="provincia" class="tit_regis">Provincia:</label>
                    </div>
                    <div class="col-holder ">
                        <select id="provincia" class="placeho" name="provincia">
                            <option value="1">Puntarenas</option>
                            <option value="2">San José</option>
                            <option value="3">Cartago</option>
                            <option value="4">Heredia</option>
                            <option value="5">Guanacaste</option>
                            <option value="6">Limon</option>
                            <option value="7">Alajuela</option>
                        </select>
                    </div>
                </div>
                <!--  correo -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="Correo" class="tit_regis">Correo:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro">
                        <label for="digite un correo"></label>
                    </div>
                </div>
                <!--  tarjeta -->
                <div class="row">
                    <div class="tit_col_regi">
                        <label for="tarjeta de credito" class="tit_regis">Tarjeta Credito:</label>
                    </div>
                    <div class="col-holder">
                        <input type="text" class="form-registro">
                        <label for="Número de tarjeta de credito"></label>
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
                    <spam>
                        <img class=" face" src="./img/facebook2.png" alt="face" />
                    </spam>
                    <spam>
                        <img class="tele" src="./img/telegram3.png" alt="telegran" />
                    </spam>
                </div>
                <!-- Copyright -->
                <div class="footer-copy">© 2021 Copyright:
                    <a href="#" class="footer-copy"> Virtual Event</a>
                    <a href="#" class="footer-copy"> Todos los Derechos Reservados</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div> <!-- Fin container -->
    <script src="./js/main.js"></script>
</body>

</html>