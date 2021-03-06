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
        <!-- CARROUSEL-->
        <!-- titulo evento -->
        <div class="row ">
            <div class="ti-event2">
                <h1 class="ti-event ">TU COMPRA SE COMPLETO CON EXITO</h1>
            </div>
        </div> <!-- titulo evento -->
        <!-- eventos detalle -->
        <div class="row">
            <h2 class="nom_art">CARLOS RIVERA</h2>
        </div>
        <div class=" row container fluid">
            <!--titulo3-->
            <div class="col-sm"><img class="imaeven1" src="./img/1-concierto.png" alt="imagen">
            </div>
            <div class="col-sm-4 ">
                <h3 class="tit_tique tik">Tiquete</h3>
            </div>
            <div class="col-sm">
                <p class="btn btn-primary botton-tik"># 46030</p>
            </div><!--  fin container -->
            <hr size=3>
            <!--  fin container -->
            <div class="row">
                <h3 class="subtiket">DETALLE DE LA COMPRA</h3>
                <div class="col-sm">
                    <table>
                        <tr>
                            <th class="col-sm-6 evento_tik">Evento: </th>
                            <td class="col det_tik">Concierto</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Lugar: </th>
                            <td class="det_tik">Estadio Nacional</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Fecha: </th>
                            <td class="det_tik">04/junio/2021</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Hora: </th>
                            <td class="det_tik">8:00 pm</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Categor??a: </th>
                            <td class="det_tik">Concierto</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">N??mero Entradas: </th>
                            <td class="det_tik">3</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Precio: </th>
                            <td class="det_tik">??15.000</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Clasificaci??n: </th>
                            <td class="det_tik">Todo P??blico</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Nombre: </th>
                            <td class="det_tik">Mar??a Quesada</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Fecha Nacimiento: </th>
                            <td class="det_tik">21/05/1992</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Tel??fono: </th>
                            <td class="det_tik">2664-0404</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Provincia: </th>
                            <td class="det_tik">Heredia</td>
                        </tr>
                        <tr>
                            <th class="evento_tik">Correo: </th>
                            <td class="det_tik">mariquesada@gmail.com</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-4">
                    <img class="cod-qr" src="./img/qrcode.png" alt="qr">
                </div>
            </div>
            <!--  fin container -->
            <!--  formulario -->
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