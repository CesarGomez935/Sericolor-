<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <title>Sericolor-Menu</title>

    <meta name="robots" content="noindex">

    <link rel="icon" href="/img/Icono.ico" type="image/ico" />


    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>





    <style class="INLINE_PEN_STYLESHEET_ID">
        body {

            background: rgb(248, 246, 246);
             height: 100%;

        }
        html {
        height: 100%;
        }


        .main-wrapper {
            width: 90%;
            max-width: 900px;
            margin: 3em auto;
            text-align: center;
        }

        .badge {
            position: relative;
            margin: 1.5em 3em;
            width: 8em;
            height: 8em;
            border-radius: 10px;
            display: inline-block;
            top: 0;
            transition: all 0.2s ease;
        }

        .badge:before,
        .badge:after {
            position: absolute;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            background: inherit;
            content: "";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .badge:before {
            transform: rotate(60deg);
        }

        .badge:after {
            transform: rotate(-60deg);
        }

        .badge:hover {
            top: -4px;
        }

        .badge .circle {
            width: 60px;
            height: 60px;
            position: absolute;
            background: #fff;
            z-index: 10;
            border-radius: 50%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .badge .circle i.fa {
            font-size: 2em;
            margin-top: 8px;
        }

        .badge .font {
            display: inline-block;
            margin-top: 1em;
        }

        .badge .ribbon {
            position: absolute;
            border-radius: 4px;
            padding: 5px 5px 4px;
            width: 110px;
            z-index: 11;
            color: #fff;
            bottom: 12px;
            left: 50%;
            margin-left: -55px;
            height: 15px;
            font-size: 14px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.27);
            text-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
            background: linear-gradient(to bottom right, #555 0%, #333 100%);
            cursor: default;
        }

        .yellow {
            background: linear-gradient(to bottom right, #ffeb3b 0%, #fbc02d 100%);
            color: #ffb300;
        }

        .orange {
            background: linear-gradient(to bottom right, #ffc107 0%, #f57c00 100%);
            color: #f68401;
        }

        .pink {
            background: linear-gradient(to bottom right, #F48FB1 0%, #d81b60 100%);
            color: #dc306f;
        }

        .red {
            background: linear-gradient(to bottom right, #f4511e 0%, #b71c1c 100%);
            color: #c62828;
        }

        .purple {
            background: linear-gradient(to bottom right, #ab47bc 0%, #4527a0 100%);
            color: #7127a8;
        }

        .teal {
            background: linear-gradient(to bottom right, #4DB6AC 0%, #00796B 100%);
            color: #34a297;
        }

        .blue {
            background: linear-gradient(to bottom right, #4FC3F7 0%, #2196F3 100%);
            color: #259af3;
        }

        .blue-dark {
            background: linear-gradient(to bottom right, #1976D2 0%, #283593 100%);
            color: #1c68c5;
        }

        .green {
            background: linear-gradient(to bottom right, #cddc39 0%, #8bc34a 100%);
            color: #7cb342;
        }

        .green-dark {
            background: linear-gradient(to bottom right, #4CAF50 0%, #1B5E20 100%);
            color: #00944a;
        }

        .silver {
            background: linear-gradient(to bottom right, #E0E0E0 0%, #BDBDBD 100%);
            color: #9e9e9e;
        }

        .gold {
            background: linear-gradient(to bottom right, #e6ce6a 0%, #b7892b 100%);
            color: #b7892b;
        }

        footer {
            text-align: center;
            margin: 5em auto;
        }

        /* footer a {
            text-decoration: none;
            display: inline-block;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #111;
            border: 0.5px dashed #f8f8f8;
            color: #999;
            margin: 5px;
        } */

        /* footer a:hover {
            background: #222;
        } */

        footer a .icons {
            margin-top: 12px;
            display: inline-block;
            font-size: 20px;
        }

    </style>


    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d0f3648046d2aaca07bd0037b9e061a26c74a8a999b75672ad6a638cca641472.js">
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js">
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js">
    </script>
</head>
<header>
    <div class="uk-flex uk-flex-column">
        <div class="uk-card uk-card-default uk-card-body">

            <div id="cita" class="text-white mb-3 mb-md-0">

                <label style="font-style: italic " for="">

                    "Y me dijo: T?? eres mi siervo, Israel, en quien yo mostrar?? mi gloria."

                    <a href="https://www.biblegateway.com/passage/?search=+Isa%C3%ADas+49%3A3&version=RVR1960"
                        class="uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">
                        Isa??as 49:3
                    </a>
                </label>
            </div>
        </div>
    </div>

    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu
                    Principal</span>
            </a>

        </div>
        <div class="uk-navbar-right">
            <div style="text-align: right;">
                <button class="uk-button uk-padding-remove-bottom uk-form-blank" type="button"> Bienvenido
                    {{ $usuario->Usuario }} </button>
                <div uk-dropdown="pos: bottom-justify">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="">Privilegios</li>
                        <li><a disabled>{{ $usuario->Privilegios }}</a></li>
                        <li class="uk-nav-divider"></li>


                        <li><a href="{{ 'login/cerrar' }}"><b> Cerrar Sesi??n </b></a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-navbar-right">


                <a href="#my-id" uk-toggle></a>

                <!-- Off Canvas, Elemento desplegable de UiKit -->
                <div id="my-id" uk-offcanvas>
                    <div class="uk-offcanvas-bar">

                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                        <a href="/menu">Men??</a>
                        <hr class="uk-divider-icon">

                        <ul class="uk-nav uk-parent">

                            <li class="uk-parent"> <a href="/menu">Men??</a></li>


                            <ul class="uk-nav-sub">
                                <li class="uk-parent"> <a href="/menu/facturacion"> Facturaci??n </a></li>
                                <li> <a href="/menu/resumen_pedidos">Pedidos </a></li>
                                <li> <a href="/menu/clientes">Clientes </a></li>
                                <li> <a href="/menu/insumos">Insumos </a></li>

                            </ul>
                            <hr class="uk-divider-icon">
                            <li class="uk-parent"> <a href="/menu/menuadmon"> Administraci??n </a></li>

                            <ul class="uk-nav-sub">

                                <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                                <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>

                                <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>


                                <li> <a href="/menu/menuadmon/promociones">P??gina de Inicio</a></li>
                            </ul>
                            <hr class="uk-divider-icon">

                            <li class="uk-parent"> Sesi??n </li>
                            <ul class="uk-nav-sub">
                                <li><a href="/login/cerrar"><b> Cerrar Sesi??n </b></a></li>
                            </ul>

                        </ul>

                    </div>
                </div>
    </nav>
</header>

<body class="">


    <div class="main-wrapper">
        <a class="badge purple" href="/menu/facturacion">
            <div class="circle"> <i class="fa fa-shopping-cart"></i></div>
            <div class="ribbon">Facturaci??n</div>
        </a>
        <a class="badge orange" href="/menu/resumen_pedidos">
            <div class="circle"> <i class="fa fa-files-o"></i></div>
            <div class=" ribbon">Pedidos</div>
        </a>
        <a class="badge pink" href="/menu/clientes">
            <div class="circle"> <i class="fa fa-male"></i></div>
            <div class="ribbon">Clientes</div>
        </a>
        <a class="badge green-dark" href="/menu/insumos">
            <div class="circle"> <i class="fa fa-cubes"></i></div>
            <div class="ribbon">Insumos</div>
        </a>
        @if (auth()->user()->Privilegios == 'Administrador')
            <a class="badge blue" href="/menu/menuadmon">
                <div class="circle"> <i class="fa fa-cog"></i></div>
                <div class="ribbon">Admin</div>
            </a>
        @endif
    </div>
    <footer>

    </footer>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js">
    </script>
    <script src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-01eb9f50-ee0d-6e47-8fef-92e1fb15103d"
        crossorigin=""></script>

    <td>
        <tr>

        </tr>
    </td>
</body>
<footer>
    <div>
        <div>

            <a style="color: black" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" class="fa fa-creative-commons"> <br>Esta obra est?? bajo una <br> Licencia Creative Commons

                Atribuci??n-NoComercial-SinDerivadas 4.0 Internacional.</a>
                <br>
                <a target="_blank" href="/resources/Manual_de_Usuario.pdf">Descargar Manual de Usuario</a>


                
                


        </div>
       


    </div>
    
    



</footer>

<script>
    let catalogo = [];
    cargarcatalogo();

    function peticionapicatalogo(data, method, onSucess) {
        let url = '/api/catalogo';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.idcatalogo;
        }
        $.ajax({
            url: url,
            method: method,
            data: data,
            // error(ext) {
            // let error = e.responseJSON.errors;
            // let msj = error[Object.keys(error)[0]][0];
            // alert(msj);
            // },
            success(res) {
                onSucess(res)

            }
        })
    }

    function cargarcatalogo() {
        peticionapicatalogo({}, "GET", function(res) {
            catalogo = res;
            console.log(catalogo);
            let html = '';

            res.forEach(catalogo => {
                html +=


                    '<label style="font-style: italic " for="">' + catalogo.cita + '' +
                    '<a href="https://www.biblegateway.com/passage/?search=' + catalogo.versiculo +
                    '&version=RVR1960"' +
                    'class="uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">' +
                    catalogo.versiculo +
                    '</a>' +
                    '</label>'



            });
            $("#cita").html(html);


        });

    }
</script>

</html>
