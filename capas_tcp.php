<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/Styles.css">
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
                            <a class="nav-link" href="./index.php"><TCP>
                            <IP></IP></a>
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
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1   btn-success  p-5 border rounded ">
                <h2 class="text-center">¿Qué hace exactamente TCP/IP? ¿Y cómo funciona?
                </h2>
                <p class="text-center">TCP/IP fue desarrollado por el Departamento de Defensa de EE. UU. para
                    especificar el modo en que los equipos transfieren datos de un dispositivo a otro. TCP/IP incide
                    mucho en la precisión y dispone de varios pasos para garantizar la correcta transmisión de los datos
                    entre ambos equipos.
                    Este es uno de los mecanismos que emplea para ello. Si el sistema enviara un mensaje entero en una
                    pieza y se encontrara cualquier problema, sería necesario enviar de nuevo el mensaje completo. Lo
                    que hace TCP/IP es descomponer cada mensaje en paquetes que se vuelven a ensamblar en el otro
                    extremo. De hecho, cada paquete podría tomar una ruta distinta hasta el equipo de destino si la ruta
                    deja de estar disponible o está muy congestionada.
                    Además, TCP/IP divide las distintas tareas de comunicación en capas. Cada capa tiene una función
                    distinta. Los datos pasan por cuatro capas independientes antes de recibirse en el otro extremo
                    (como se explica en la sección siguiente). A continuación, TCP/IP recorre estas capas en orden
                    inverso para reensamblar los datos y presentárselos al destinatario.
                    El propósito de las capas es crear un sistema estandarizado, sin que los distintos fabricantes de
                    hardware y software tengan que gestionar la comunicación por su cuenta. Es como conducir un coche:
                    todos los fabricantes convienen en la posición de los pedales, así que no tenemos que tener eso en
                    cuenta al cambiar de coche. También significa que es posible actualizar determinadas capas, por
                    ejemplo, para mejorar el rendimiento o la seguridad, sin tener que actualizar todo el sistema.
                </p>
            </div>
        </div>
        <h1 class="text-center mt-3  text-white">Capas TCP/IP</h1>
        <div class="row mt-5">
            <div class="col-md-5 offset-md-1 btn-success p-5 border rounded">
                <h2 class="text-center">Capa de Enlace de Datos</h2>
                <p class="text-center">
                    La capa de enlace de datos (también denominada capa de enlace, capa de interfaz de red o capa
                    física) es la que maneja las partes físicas del envío y recepción de datos mediante el cable
                    Ethernet, la red inalámbrica, la tarjeta de interfaz de red, el controlador del dispositivo en el
                    equipo, etcétera.
                </p>
            </div>
            <div class="col-md-5 offset-md-1">
                <img class="a" src="./imagenes/Captura.PNG" class="mt-3  " alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 offset-md-1">
                <img  src="./imagenes/./01.png" style="width: 500px;" class="mt-3 " alt="">
            </div>
            <div class="col-md-5 offset-md-1 btn-success p-5 border rounded">
                <h2 class="text-center">Capa de Internet</h2>
                <p class="text-center">
                    La capa de Internet (también denominada capa de red) controla el movimiento de los paquetes
                    alrededor de la red. Internet se define como una red global de redes de ordenadores cuya
                    finalidad es permitir el intercambio libre de información entre todos sus usuarios. Pero sería un
                    error considerar Internet únicamente como una red de computadoras.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 offset-md-1  btn-success p-5 border rounded">
                <h2 class="text-center">Capa de Transporte</h2>
                <p class="text-center">
                    La capa de transporte es la que proporciona una conexión de datos fiable entre dos dispositivos.
                    Divide los datos en paquetes, hace acuse de recibo de los paquetes que recibe del otro dispositivo y
                    se asegura de que el otro dispositivo haga acuse de recibo de los paquetes que recibe a su vez.
                </p>
            </div>
            <div class="col-md-5  btn-success p-5 border rounded">
                <h2 class="text-center">Capa de Aplicaciones</h2>
                <p class="text-center">
                    La capa de aplicaciones es el grupo de aplicaciones que requiere comunicación de red. Es con lo que
                    el usuario suele interactuar, como el correo electrónico y la mensajería. Como la capa inferior
                    gestiona los detalles de la comunicación, las aplicaciones no tienen que preocuparse por ello.
                </p>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>