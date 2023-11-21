<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tablero de Bingo</title>
    <link rel="stylesheet" href="{{ asset('css/bingo/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bingo/fontello.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Permanent+Marker&family=Rowdies:wght@300&display=swap"
        rel="stylesheet">
    <!-- Utilizar SweetAlert desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

</head>

<body>
    <div class="circle-container">
        <div class="circle-letter">
            <h1 class="letter">B</h1>
        </div>
        <div class="circle-letter">
            <h1 class="letter">I</h1>
        </div>
        <div class="circle-letter">
            <h1 class="letter">N</h1>
        </div>
        <div class="circle-letter">
            <h1 class="letter">G</h1>
        </div>
        <div class="circle-letter">
            <h1 class="letter">O</h1>
        </div>
    </div>

    <div class="medio">

        <div id="generador" class="generador">
            <div class="container">
                <div id="vlgnd">
                    <h1 id="valorGenerado"></h1>
                </div>
                <div id="shadow" class="shadow"></div>
            </div>
        </div>



        <div id="mostrar" class="valores">
        </div>

        <div class="contGM">
            <div class="GM">
                <h1 class="bi">BINGO</h1>
                <div id="patron" class="patron"></div>
            </div>
            <div class="btndiv">
                <button class="btnlimp" onclick="clearCells()">Limpiar</button>
            </div>
        </div>

    </div>


    <div class="contenedor">
        <div class="tabla">
            <table class="bg">
                <tr id="fila1">
                    <th class="bgg1">B</th>
                </tr>
                <tr id="fila2">
                    <th class="bgg2">I</th>
                </tr>
                <tr id="fila3">
                    <th class="bgg3">N</th>
                </tr>
                <tr id="fila4">
                    <th class="bgg4">G</th>
                </tr>
                <tr id="fila5">
                    <th class="bgg5">O</th>
                </tr>
            </table>
        </div>

        <div class="btncon">
            <nav>
                <ul class="nav">
                    <li>
                        <a href="#" id="activarGenerador" onclick="stopGen(), mostrarValor()">
                            <span class="icon-play"></span>
                            <span class="screen-reader-text">Play</span>

                        </a>
                    </li>
                    <li>
                        <a href="#" id="gen" onclick="autoGen()">
                            <span class="icon-loop"></span>
                            <span class="screen-reader-text">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="gen" onclick="stopGen(), confirmReset()">
                            <span class="icon-spin3"></span>
                            <span class="screen-reader-text">Reset</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <script src="{{ asset('js/bingo/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
