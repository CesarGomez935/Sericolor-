<head>
    <title>Sericolor | Menú</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

</head> 
<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">

        <label style="font-style: italic " for="">"Yo soy el buen pastor, y conozco mis ovejas y las mías me
            conocen"</label>


    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
        <a href="https://www.biblegateway.com/passage/?search=Juan%2010%3A14&version=RVR1960" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
            Juan 10:14
        </a>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
    <!-- Right -->
</div>

<body>
    <div style="text-align: right;">
        <button class="uk-button uk-padding-remove-bottom uk-form-blank" type="button"> Bienvenido
            {{ $usuario->Usuario }} </button>
        <div uk-dropdown="pos: bottom-justify">
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-active"><a href="">Privilegios</li>
                <li><a disabled>{{ $usuario->Privilegios }}</a></li>
                <li class="uk-nav-divider"></li>


                <li><a href="{{ 'login/cerrar' }}"><b> Cerrar Sesión </b></a></li>
            </ul>
        </div>
    </div>
    <div style="text-align: center;">
        <form class="uk-padding">
            <table class="uk-table uk-padding  uk-margin">
                <tbody>
                    <tr>
                        <td style="padding-left: 100px;">
                            <a href="/menu/menu_facturacion" class="btn btn-lg uk-padding"
                                style="background-color:transparent">
                                <div style="text-align:center"><svg xmlns="http://www.w3.org/2000/svg" width="200"
                                        height="200" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                        <path
                                            d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                        <path
                                            d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                        <path
                                            d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                    </svg></div>
                                Facturación
                            </a>
                        </td>
                        <td style="padding-left: 100px;">
                            <a href="/menu/pedidos_sublimacion" class="btn btn-lg uk-padding "
                                style="background-color:transparent"> <div style="text-align:center">

                                    <img width="200" height="200" src="https://ip-embroidery.com/wp-content/uploads/2020/11/ICONO1_Mesa-de-trabajo-1.png" alt="">

                                </div>

                                Pedidos de Sublimación
                            </a>
                        </td>
                        <td style="padding-left: 100px;">
                            <a href="/menu/pedidos_impresion_digital" class="btn btn-lg"
                                style="background-color:transparent">
                                <div style="text-align:center"><svg xmlns="http://www.w3.org/2000/svg" width="200"
                                        height="200" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                        <path
                                            d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    </svg></div>
                                Pedidos de Impresión Digital
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 100px;">
                            <a href="/menu/pedidos_serigrafia" class="btn btn-lg"
                                style="background-color:transparent">
                                <div style="text-align:center">
                                    <div style="text-align:center">

                                        <img width="200" height="200" src="https://lh3.googleusercontent.com/proxy/HhyAQUEMdpECgUtuhpJu59Vponiaq72MW1Q1ze7WFE6DvwEtktCKZGNCqMJeVD2_iGal8nXpbWEzWjxZGBRe1zorPxxH7bwpMHIwOjZiyGdMSerY7K9F3WcYQ66dgZjq1x-D8Q" alt="">


                                    </div>

</div>
                                Pedidos de Serigrafía
                            </a>
                        </td>
                        <td style="padding-left: 100px;">
                            <a href="/menu/pedidos_bordado" class="btn btn-lg" style="background-color:transparent">
                                <div style="text-align:center">

                                    <img width="200" height="200" src="https://library.kissclipart.com/20180918/gbq/kissclipart-icono-de-maquina-de-coser-png-clipart-la-maquina-d-6cc902fd23badb86.png"



                                        alt="">
                                </div>
                                Pedidos de Bordado
                            </a>
                        </td>
                        <td  style="padding-left: 100px;">

                            <a href="/menu/menuadmon" class="btn btn-lg" style="background-color:transparent">
                                <div style="text-align:center"><svg xmlns="http://www.w3.org/2000/svg" width="200"
                                        height="200" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path fill-rule="evenodd"
                                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                    </svg></div>
                                Administración
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>

    <div class="uk-padding uk-background-muted uk-padding ">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <a href="/Inicio" class="uk-button uk-button-primary " style="">Salir</a>
        </div>
    </div>
</body>
<footer>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img
                    alt="Licencia Creative Commons" style="border-width:0"
                    src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />Esta obra está bajo una <a
                rel="license" style="color: black" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Licencia
                Creative Commons Atribución-NoComercial-SinDerivadas 4.0 Internacional</a>.

        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->


    </div>


</footer>
