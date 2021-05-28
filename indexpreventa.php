<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preventa boletos</title>
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

            <nav class="navbar   navbar-expand-sm nav2 ">
            <div class="row ">
                    <div class="ti-event2 ti-event3">
                        <h3 class="ti-event ">REGISTRARSE</h3>
                    </div>
                </div> <!-- titulo evento -->
            </nav>

            
           
            <!-- compras -->


            <div class="row  container">


                <div class=col-sm>
                    <h4 class="subtitu2 ti-preve">PREVENTA DE BOLETOS</h4>
                   
                    <h4 class="subtitu7 compra-datos">Viernes,04 de junio de 2021 - 8pm</h4>
                    <h4 class="subtitu7 compra-datos">Estadio Nacional</h4>
                    <table class="table">
                        <thead class="subtitu4">
                            <tr>
                                <th class="anchfila" scope="col ">Tipo</th>
                                <th class="anchfila" scope="col">Cantidad</th>
                                <th class="anchfila" scope="col">Precio por Persona</th>
                                <th class="anchfila" scope="col">Total</th>
                            </tr>
                        </thead >
                        <tbody class="subtitu6">
                            <tr>

                                <td>Mayores</td>
                                <td><a href="#" class="btn3">+</a>2<a href="#" class="btn3">-</a></td>
                                <td>¢15.000</td>
                                <td>¢30.000</td>
                            </tr>

                        </tbody>
                        <tbody class="subtitu6">
                            <tr>

                                <td>Menores</td>
                                <td><a href="#" class="btn3">+</a>1<a href="#" class="btn3">-</a></td>
                                <td>¢15.000</td>
                                <td>¢15.000</td>
                            </tr>

                        </tbody>

                        
                        <tbody class="subtitu6">
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
                    <div class="col-sm-4"><img class=" evento1" src="./img/1.jpg" alt="evento1">

                    </div>
                </div>

                <h4 class="subtitu5 subtitu9 ">CARLOS RIVERA</h4>
            </div><!-- FIN compras -->
            <!-- BOTONES -->

           
            <div class="col-sm-3">
                <a href="./indexRegister.php" class="btn btn-primary botton-evento btncontinuar btnconfir">Confirmar Registro</a>

            </div>
            <div class="col-sm-3">
                <a href="./index.php" class="btn btn-primary botton-evento btncontinuar btnconfir">Cancelar</a>

            </div>
            <!-- FIN BOTONES -->


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