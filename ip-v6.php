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
        <h1 class="text-center mt-3 btn-success text-white">IP v6</h1>
        <div class="row mt-5">
            <div class="col-md-5 mt-4 offset-md-1">
                <img src="./img/./ipv6.jpg" class="" alt="">
            </div>
            <div class="col-md-5     btn-success p-5 border rounded">
                <h2 class="text-center">IPv6</h2>
                <p class="text-center">
                    Internet funciona a trav??s de direcciones IP, y cada dispositivo que se conecta a Internet lo hace a
                    trav??s de estas direcciones num??ricas que funcionan a modo de matr??culas. Actualmente, las
                    direcciones que se utilizan son las del Internet Protocol version 4 o IPv4, pero existe el problema
                    de que las direcciones que se generan con este protocolo se han acabado
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 offset-md-1    btn-success p-5 border rounded ">
                <h2 class="text-center">Protocolo IPv6</h2>
                <p class="text-center">
                    Las IPv4 son direcciones de 32 bits, y este protocolo permiti?? que se creasen 4.294.967.296
                    direcciones, una cifra evidentemente insuficiente hoy en d??a. En cambio, el protocolo IPv6 tiene un
                    espacio de 128 bits, lo que le hace capaz de albergar 340 sextillones de direcciones, o lo que es lo
                    mismo, un total de 340.282.366.920.938.463.463.374.607.431.768.211.456 direcciones IP diferentes.
                    Esto tambi??n quiere decir que las direcciones IPv6 son mucho m??s largas y complejas que las IPv4.
                    Las de la cuarta versi??n tienen una estructura de direcciones del estilo 255.255.255.255, mientras
                    que las nuevas de sexta versi??n son del estilo 2001:0db8:85a3:08d3:1319:8a2e:0370:7332.
                    Son m??s largas y tienen letras adem??s de n??meros.
                </p>
            </div>
            <div class="col-md-5  ">
                <img class="mt-3" src="./imagenes/por-que-migrar-ipv6.jpg" style="width: 500px;" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mt-4 offset-md-2">
                <img src="./imagenes/./IPv6_.jpg" class="" style="width: 400px;" alt="">
            </div>
            <div class="col-md-5     btn-success p-5 border rounded">
                <h2 class="text-center">??Qu?? nos garantiza?</h2>
                <p class="text-center">
                    El protocolo IPv6 nos garantiza tener suficientes direcciones IP como para soportar el
                    crecimiento de los dispositivos conectados en los pr??ximos a??os. Todav??a quedan direcciones IPv4, ya
                    que siguen existiendo revendedores de estos paquetes de direcciones que rehabilitan las que ya no se
                    utilizan. Por eso posiblemente muchos de vosotros todav??a las utilic??is. Aun as??, la IPv6 es la
                    garant??a de que podremos seguir teniendo IPs libres en el futuro.
                </p>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>