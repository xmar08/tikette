<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="desciption"
        content="Autor: Xinia Aguilar, Tema:I parte del Proyecto Desarrolo de Aplicaciones Interactivas II ">
    <meta name="desciption" content="Virtual Event es una pagina web para comprar tiquetes de eventos en linea ">
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
                        <div class="navbar-brand  ">
                            <a href="./index.php"><img src="./img/logo.png" class="logo" alt="logo de la pagina"></a>
                        </div>
                        <div class="col-sm titubarra">
                            <ul class="col-sm navbar-nav ">
                                <li class="nav-item">
                                    <span onclick="cerrarMenu()">
                                        <img class="cerrar" src="./img/cancel.png" alt="cerrar menu hamburguesa">
                                    </span>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link titubarra">INICIO></a>
                                 </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link titubarra">ACERCA DE</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <select class="form-select event ">
                                        <option selected class="sub">EVENTOS</option>
                                        <option value="1" class="sub">CONCIERTO</option>
                                        <option value="2" class="sub">COMEDIA</option>
                                        <option value="3" class="sub">DEPORTE</option>
                                    </select>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="navbar-brand"><img class="carro" src="./img/carro.png"
                                            alt="carrito de copras"></a>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex">
                                        <input class="form-control form" type="search" placeholder="Buscar">
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
                <h2 class="ti-event ">REGISTRAR EVENTO</h2>
            </div>
        </div> <!-- titulo evento -->



        <!-- compras -->


        <div class="row  container-fluit">


            <div class=col-sm>
                <h3 class="ti-preve">PREVENTA DE BOLETOS</h3>

                <h3 class="inf_event">Viernes,04 de junio de 2021 - 8pm</h3>
                <h3 class="inf_event">Estadio Nacional</h3>
                <table class="table">
                    <thead class="tit-tabl-event">
                        <tr>
                            <th class="anchfila">Tipo</th>
                            <th class="anchfila">Cantidad</th>
                            <th class="anchfila">Precio por Persona</th>
                            <th class="anchfila">Total</th>
                        </tr>
                    </thead>
                    <tbody class="tit_det_tabla">
                        <tr>

                            <td>Mayores</td>
                            <td><a href="#" class="mas-menos">+</a>2<a href="#" class="mas-menos">-</a></td>
                            <td>¢15.000</td>
                            <td>¢30.000</td>
                        </tr>

                    </tbody>
                    <tbody class="tit_det_tabla">
                        <tr>

                            <td>Menores</td>
                            <td><a href="#" class="mas-menos">+</a>1<a href="#" class="mas-menos">-</a></td>
                            <td>¢15.000</td>
                            <td>¢15.000</td>
                        </tr>

                    </tbody>


                    <tbody class="tit_det_tabla">
                        <tr>

                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                            <td>¢45.000</td>
                        </tr>

                    </tbody>

                </table>
            </div>


            <div class="col">
                <div class="col-sm"><img class=" evento1" src="./img/1.jpg" alt="evento1">

                    <h3 class="art_event">CARLOS RIVERA</h3>

                    <!-- BOTONES -->

                </div><!-- FIN compras -->
                <div class="col-sm-3">
                    <a href="./indexRegister.php" class="btn btn-primary  btnconfir">Confirmar</a>

                </div>

                <!-- FIN BOTONES -->
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid ">
            <footer class="row footer-back">
                <div class=" footer-icon">
                    <li >
                        <img class="face" src="./img/facebook2.png"alt="face" />
                    </li>
                    <li >
                        <img class="tele" src="./img/telegram3.png"alt="telegran" />
                    </li>

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