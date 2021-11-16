<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/js/uikit.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}

</head>

<body>

    <nav class="uk-navbar uk-navbar-container">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span
                    class="uk-margin-small-left">Reportes</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- Off Canvas, Elemento desplegable de UiKit -->
        <div id="my-id" uk-offcanvas>
            <div class="uk-offcanvas-bar">

                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <a href="/menu">Menú</a>
                <hr class="uk-divider-icon">

                <ul class="uk-nav uk-parent">
                    <li class="uk-parent"> <a href="/menu/menu_facturacion"> Facturación </a></li>
                    <ul class="uk-nav-sub">
                        <li> <a href="/menu/menu_facturacion/form_bordado">Bordado </a></li>
                        <li> <a href="/menu/menu_facturacion/form_sublimacion">Sublimación </a></li>
                        <li> <a href="/menu/menu_facturacion/form_serigrafia">Serigrafía </a></li>
                        <li> <a href="/menu/menu_facturacion/form_impresion_digital">Impresión digital </a></li>
                    </ul>
                    <hr class="uk-divider-icon">
                    <li class="uk-active"> <a href="/menu/pedidos_bordado"> Pedidos Bordado </a></li>
                    <li class="uk-active"> <a href="/menu/pedidos_sublimacion"> Pedidos Sublimación </a></li>
                    <li class="uk-active"> <a href="/menu/pedidos_serigrafia"> Pedidos Serigrafía </a></li>
                    <li class="uk-active"> <a href="/menu/pedidos_impresion_digital"> Pedidos Impresión digital
                        </a></li>
                    <hr class="uk-divider-icon">
                    <li class="uk-parent"> <a href="/menu/menuadmon"> Administración </a></li>

                    <ul class="uk-nav-sub">
                        <li> <a href="/menu/menuadmon/resumen_pedidos">Resumen de pedidos</a></li>
                        <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                        <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>
                        <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>
                        <li> <a href="/menu/menuadmon/clientes">Clientes</a></li>
                        <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                        <li> <a href="/menu/menuadmon/promociones">Promociones</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>

    <div class="uk-div uk-padding">
        <div class="uk-section uk-section-primary uk-padding">
            <div class="uk-container">

                <form action="">

                    <table class="uk-table">
                        <h1 class="uk-heading-line uk-text-center uk-padding-small">Rango</h1>

                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Estado</th>
                                <th>Fecha Inicio</th>
                                <th>Cliente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="uk-select uk-form-width-small" type="select"
                                        aria-placeholder="Ingresar categoria">
                                        <option>Sublimación</option>
                                        <option>Impresión digital</option>
                                        <option>Bordado</option>
                                        <option>Serigrafía</option>
                                    </select>
                                </td>
                                <td><select class="uk-select uk-form-width-small" type="select"
                                        aria-placeholder="Ingresar estado">
                                        <option>Completado</option>
                                        <option>No completado</option>

                                    </select>
                                </td>
                                <td>
                                    <input onchange="validarfechas()" id="fecha_inicio"
                                        class="uk-input uk-form-width-medium" type="date">

                                </td>
                                <td>
                                    <div class="">
                                        <a class="uk-form-icon uk-form-icon-flip" href="" uk-icon="icon: search"></a>
                                        <input class="uk-input" placeholder="Nombre">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <th>Fecha Final</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input onchange="validarfechas()" id="fecha_final"
                                        class="uk-input uk-form-width-medium" type="date">
                                </td>
                                <td>
                                    <label for="">Ejecutar consulta</label>
                                    <button class="uk-button uk-button-secondary" uk-icon="search"></button>
                                    <label for="">Descargar reporte</label>
                                    {{-- <a  href="/pdf" id="descargar" class="uk-button uk-button-secondary" uk-icon="download"></a> --}}
                                    <a target="_blank" id="pedidosdiario" class="uk-button uk-button-secondary"
                                        uk-icon="download"></a>


                                </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <div class="uk-div uk-margin uk-padding-small">

        <table class="uk-table uk-table-hover uk-table-divider uk-table-striped">

            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>N° Factura</th>
                    <th>Categoria</th>
                    <th>Fecha de recibido</th>
                    <th>Estado</th>
                    <th>Fecha de entrega</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>


    </div>

    <div style="text-align: center;" class="uk-div">
        <a class="uk-button uk-button-secondary" href="/menu/menuadmon">Atrás</a>
    </div>




</body>

</html>

<script type="text/javascript">
    function cambioFecha() {

        var fecha = document.getElementById("fecha_inicio").value;

        document.getElementById("pedidosdiario").href = "/api/pdf/pedidos_diarios/" + fecha + "/descargar";




        console.log(fecha);




    }

    function validarfechas() {


        var fecha1 = document.getElementById("fecha_inicio").value;
        var fecha2 = document.getElementById("fecha_final").value;

        if (fecha1 && fecha2) {
            console.log(fecha1, fecha2);
            document.getElementById("pedidosdiario").href = "/api/pdf/pedidos_entre/" + fecha1 + "/" + fecha2 +
                "/descargar";
        } else {

            document.getElementById("pedidosdiario").href = "/api/pdf/pedidos_diarios/" + fecha1 + "/descargar";
            console.log(fecha1, fecha2);

        }




    }
</script>
