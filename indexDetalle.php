<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Autor: Xinia Aguilar, Tema:I parte del Proyecto Desarrolo de Aplicaciones Interactivas II ">
    <meta name="description" content="Virtual Event es una pagina web para comprar tiquetes de eventos en linea ">
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
        <!--SLIDER-->
        <div class="row conta">
            <div class="col"><img class="image" src="./img/1-concierto.png" alt="concierto2">
            </div>
            <div class="row ">
                <div class="ti-event2">
                    <h1 class="ti-event ">CONCIERTO</h1   >
                </div>
            </div> <!-- titulo evento -->
        </div> <!-- titulo evento -->
        <!-- eventos detalle -->
        <div class="row">
            <h2 class="tit_art">CARLOS RIVERA</h2>
        </div>
        <div class=" row container ">
            <!--titulo3-->
            <div class="col-sm"><img class="image_conci" src="./img/1-concierto.png" alt="concierto2">
            </div>
            <div class="col">
                <h4 class="tit-det-event">04 </h4>
                <h4 class="tit-det-event">Junio </h4>
                <h4 class="tit-det-event">2021 </h4>
            </div>
            <div class="col-sm-4 ">
                <h4 class="tit_Lugar">ESTADIO NACIONAL </h4>
                <h4 class="tit_nom_event">CARLOS RIVERA-GUERRA TOUR </h4>
            </div>
            <div class="col-sm">
                <a href="./indexpreventa.php" class="btn btn-primary btnregistro">Registrarse</a>
            </div>
        </div><!--  fin container -->
        <hr size=3>
        <!--  fin container -->
        <!--  formulario -->
        <div class="row  container">
            <div class="col-sm-6">
                <table>
                    <spam class="subtitu2">GUERRA TOUR</spam>
                    <tr>
                        <th class="titutabla">Evento: </th>
                        <td class="subtabla">Concierto</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Lugar: </th>
                        <td class="subtabla">Estadio Nacional</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Fecha: </th>
                        <td class="subtabla">04/junio/2021</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Hora: </th>
                        <td class="subtabla">8:00 pm</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Categor??a: </th>
                        <td class="subtabla">Concierto</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Descripcion: </th>
                        <td class="subtabla">Guerra de Tour|Concierto Online</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Precio: </th>
                        <td class="subtabla">??15.000</td>
                    </tr>
                    <tr>
                        <th class="titutabla">Clasificaci??n: </th>
                        <td class="subtabla">Todo P??blico</td>
                    </tr>
                </table>
            </div>
            <!--Eventos Relacionados-->
            <div class=" contain row">
                <div>
                    <h4 class="otrosevent">EVENTOS RELACIONADOS</h4>
                </div>
                <div class="col-sm"><img class="imag_even_rel" src="./img/2-concierto.png" alt="imagen2">
                </div>
                <div class="col-sm">
                    <a href="./index.php" class="btn btn-primary  pro-event">Ver</a>
                </div>
                <div class="col-sm"><img class="imag_even_rel" src="./img/3-concierto.png" alt="imagen3">
                </div>
                <div class="col-sm">
                    <a href="./index.php" class="btn btn-primary pro-event">Ver</a>
                </div>
                <div class="col-sm"><img class="imag_even_rel" src="./img/4-concierto.png" alt="imagen4">
                </div>
                <div class="col-sm">
                    <a href="./index.php" class="btn btn-primary  pro-event">Ver</a>
                </div>
            </div>
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
                <div class="footer-copy">?? 2021 Copyright:
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