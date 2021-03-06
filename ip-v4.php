<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>TCP-IP</title>
</head>
<body>
    <div class="cotainer">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Proyecto de Redes</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">TCP/IP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./capas_tcp.php">Capas de TCP/IP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ip-v4.php">IPV4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ip-v6.php">IPV6</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Calculadora_Ips.php">Calculadora</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="footer mt-5 mb-2 btn-success pt-1">
            <p class="text-center fs-4">Cristhian Varela CI: 27920714</p>
        </div>
        <h1 class="text-center mt-3 btn-success text-white">IP v4</h1>
        <div class="row mt-5">
            <div class="col-md-5 offset-md-1    btn-success p-5 border rounded ">
                <h2 class="text-center">Direccionamiento IPv4</h2>
                <p class="text-center">El direccionamiento IPv4 es actualmente el protocolo de Internet que casi todos
                    utilizamos en nuestros hogares, ya que los ISP a??n no han dado el salto al direccionamiento IPv6.
                    El protocolo IPv4 es uno de los protocolos fundamentales de Internet, ya que es el que identifica
                    los diferentes dispositivos conectados a la red. Una direcci??n IPv4 tiene 32 bits, por lo que
                    tenemos casi 4.300 millones de direcciones ??nicas, aunque muchas de ellas est??n reservadas para
                    tareas espec??ficas, como por ejemplo los rangos de direccionamiento IP privado (LAN) que no son
                    enrutables a trav??s de Internet. Una direcci??n IPv4 se representa normalmente en formato decimal
                    separado por puntos, los 32 bits est??n subdivididos en octetos de 8 bits cada uno.
                </p>
            </div>
            <div class="col-md-5  ">
                <img class="mt-3" src="./imagenes/Qu??-es-IPv4.jpg" style="width: 500px;" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 mt-4 offset-md-1">
                <img src="./imagenes/./ipv4-direccion.png" style="width: 500px;" class="" alt="">
            </div>
            <div class="col-md-5     btn-success p-5 border rounded">
                <h2 class="text-center">??Qu?? Utiliza el IPv4?</h2>
                <p class="text-center">El IPv4 utiliza direcciones de 32 bits que limitan el espacio de direcciones a 4
                    294 967 296 direcciones posibles.
                    El IPv4 (Protocolo de Internet versi??n 4) reserva bloques de direcciones especiales para redes
                    privadas (en total 16 777 216 direcciones, as?? como direcciones de multidifusi??n (268
                    435 456 direcciones).
                    En el dise??o original de IPv4, una direcci??n IP se dividi?? en dos partes: el identificador de red era el octeto m??s significativo de la direcci??n, y por su parte, el identificador de host (anfitri??n o hu??sped) era el resto de la direcci??n. Este ??ltimo tambi??n fue llamado el campo de descanso. Esta estructura permit??a un m??ximo de 256 identificadores de red, que r??pidamente se encontr?? que eran inadecuados.
                </p>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>