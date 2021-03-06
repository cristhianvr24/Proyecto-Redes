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
        <h1 class="text-center mt-3 btn-success text-white">Aplicación TCP/IP</h1>
        <div class="row mt-5">
            <div class="col-md-5 offset-md-1   btn-success p-5 border rounded ">
                <h2 class="text-center">¿Qué es el Protocolo TCP-IP?</h2>
                <p class="text-center">TCP/IP es un conjunto de protocolos que permiten la comunicación entre los
                    ordenadores pertenecientes
                    a una red. La sigla TCP/IP significa Protocolo de control de transmisión/Protocolo de Internet y se
                    pronuncia "T-C-P-I-P". Proviene de los nombres de dos protocolos importantes incluidos en el
                    conjunto TCP/IP, es decir, del protocolo TCP y del protocolo IP.
                    En algunos aspectos, TCP/IP representa todas las reglas de comunicación para Internet y se basa en
                    la noción de dirección IP, es decir, en la idea de brindar una dirección IP a cada equipo de la red
                    para poder enrutar paquetes de datos. Debido a que el conjunto de protocolos TCP/IP originalmente se
                    creó con fines militares, está diseñado para cumplir con una cierta cantidad de criterios, entre
                    ellos, dividir mensajes en paquetes, usar un sistema de direcciones, enrutar datos por la red y
                    detectar errores en las transmisiones de datos.</p>
            </div>
            <div class="col-md-5 offset-md-1 mt-5">
                <img class="a" class="mt-3" src="./imagenes/tcp-ip-t.jpg" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 mt-5 offset-md-1">
                <img class="a" src="./imagenes/1.1.jpg" class="mt-3" alt="">
            </div>
            <div class="col-md-5     btn-success p-5 border rounded">
                <h2 class="text-center">TCP/IP</h2>
                <p class="text-center">El modelo TCP/IP es usado para comunicaciones en redes y, como todo protocolo,
                    describe un conjunto de guías generales de operación para permitir que un equipo pueda comunicarse
                    en una red. TCP/IP provee conectividad de extremo a extremo especificando cómo los datos deberían
                    ser formateados, direccionados, transmitidos, enrutados y recibidos por el destinatario.
                    El modelo TCP/IP y los protocolos relacionados son mantenidos por la Internet Engineering Task
                    Force.
                    Para conseguir un intercambio fiable de datos entre dos equipos, se deben llevar a cabo muchos
                    procedimientos separados. El resultado es que el software de comunicaciones es complejo. Con un
                    modelo en capas o niveles resulta más sencillo agrupar funciones relacionadas e implementar el
                    software modular de comunicaciones.
                    Las capas están jerarquizadas. Cada capa se construye sobre su predecesora. El número de capas y, en
                    cada una de ellas, sus servicios y funciones son variables con cada tipo de red. Sin embargo, en
                    cualquier red, la misión de cada capa es proveer servicios a las capas superiores haciéndoles
                    transparentes el modo en que esos servicios se llevan a cabo. De esta manera, cada capa debe
                    ocuparse exclusivamente de su nivel inmediatamente inferior, a quien solicita servicios, y del nivel
                    inmediatamente superior, a quien devuelve resultados.
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="row mt-5">
           
            <div class="col-md-6 offset-md-3  btn-success p-5 border rounded">
                <h2 class="text-center">¿En qué se diferencian TCP e IP?</h2>
                <p class="text-center">
                    TCP e IP son dos protocolos distintos para redes informáticas.
                    IP es la parte que obtiene la dirección a la que se envían los datos. TCP se encarga de la entrega
                    de los datos una vez hallada dicha dirección IP.
                    Es posible separarlos, pero lo cierto es que no tiene mucho sentido diferenciar entre TCP e IP. Como
                    se usan juntos tan habitualmente, “TCP/IP” y “modelo TCP/IP” son ya terminología reconocida.
                    Mírelo de esta forma: La dirección IP es como el número de teléfono que se asigna a su smartphone.
                    TCP es toda la tecnología que hace que el teléfono emita un timbre al recibir una llamada y que le
                    permite hablar con alguien al otro lado de la línea. Son cosas diferentes, pero tampoco tienen
                    sentido la una sin la otra.
                </p>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>