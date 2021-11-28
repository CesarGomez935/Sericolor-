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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/js/uikit.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}

</head>

<body>

    <nav class="uk-navbar uk-navbar-container">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Reportes</span>
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
                        <li> <a href="/menu/menuadmon/insumos">Insumos</a></li>
                        <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>
                        <li> <a href="/menu/menuadmon/clientes">Clientes</a></li>
                        <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                        <li> <a href="/menu/menuadmon/promociones">Menú Principal</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>

    <div class="uk-div uk-padding">
        <div class="uk-section uk-section-primary uk-padding">
            <div class="uk-container">



                <table class="uk-table">
                    <h4 class="uk-heading-line uk-text-center uk-padding-small">Pedidos diarios / Pedidos rango de fechas</h4>

                    <thead>
                        <tr>
                            <th>Fecha de Inicio</th>
                            <th>Fecha Final </th>
                            <th>Descargar reporte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            {{-- <td><select class="uk-select uk-form-width-small" type="select" aria-placeholder="Ingresar estado">
                                        <option>Completado</option>
                                        <option>No completado</option>

                                    </select>
                                </td> --}}
                            <td>
                                <input onchange="validarfechaspedidos()" id="fecha_inicio" class="uk-input uk-form-width-medium" type="date">

                            </td>
                            <td>
                                <input onchange="validarfechaspedidos()" id="fecha_final" class="uk-input uk-form-width-medium" type="date">
                            </td>

                            <td>

                                {{-- <a  href="/pdf" id="descargar" class="uk-button uk-button-secondary" uk-icon="download"></a> --}}
                                <a target="_blank" id="pedidosdiario" class="uk-button uk-button-secondary" uk-icon="download"></a>


                            </td>



                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="uk-div uk-padding">
        <div class="uk-section uk-section-secondary uk-padding">
            <div class="uk-container">



                <table class="uk-table">
                    <h4 class="uk-heading-line uk-text-center uk-padding-small">Reporte ventas por Insumos</h4>

                    <thead>
                        <tr>
                            <th>Fecha de Inicio</th>
                            <th>Fecha Final </th>
                            <th>Insumo</th>
                            <th>Descargar reporte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            {{-- <td><select class="uk-select uk-form-width-small" type="select" aria-placeholder="Ingresar estado">
                                        <option>Completado</option>
                                        <option>No completado</option>

                                    </select>
                                </td> --}}
                            <td>
                                <input onchange="validarfechasinsumos()" id="fecha_inicio_insumos" class="uk-input uk-form-width-medium" type="date">

                            </td>
                            <td>
                                <input onchange="validarfechasinsumos()" id="fecha_final_insumos" class="uk-input uk-form-width-medium" type="date">
                            </td>
                            <td>
                                <select onchange="validarfechasinsumos()" class="uk-select uk-form-width-1-1" name="" id="insumos"></select>


                                <script>
                                    cargarinsumo();

                                    function cargarinsumo() {

                                        peticionapiser({}, 'GET', function(res) {
                                            usuarios = res;
                                            console.log(res);
                                            let html = '<option disabled selected value=""> Seleccionar Insumo </option>';

                                            res.forEach(usuarios => {
                                                html += '<option value="' + usuarios.IdInsumo + '">' + usuarios
                                                    .Tipo + ' ' + usuarios

                                                    .Descripcion +
                                                    '</option>'
                                            });
                                            $("#insumos").html(html);
                                        });







                                    }

                                    function peticionapiser(data, method, onSuccess) {


                                        let url = '/api/getallinsumos';

                                        if (method == 'PUT' || method == 'DELETE') {
                                            url += '/' + data.id;
                                        }
                                        $.ajax({
                                            url: url
                                            , method: method
                                            , data: data,

                                            success(res) {
                                                onSuccess(res);

                                            }

                                        })
                                    }

                                </script>

                            </td>

                            <td>

                                {{-- <a  href="/pdf" id="descargar" class="uk-button uk-button-secondary" uk-icon="download"></a> --}}
                                <a target="_blank" id="pedidosinsumo" class="uk-button uk-button-secondary" uk-icon="download"></a>


                            </td>



                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="uk-div uk-padding">
        <div class="uk-section uk-section-primary uk-padding">
            <div class="uk-container">



                <table class="uk-table">
                    <h4 class="uk-heading-line uk-text-center uk-padding-small">Reporte ventas por Tipo de pago</h4>

                    <thead>
                        <tr>
                            <th>Fecha de Inicio</th>
                            <th>Fecha Final </th>
                            <th>Tipo de pago</th>
                            <th>Descargar reporte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            {{-- <td><select class="uk-select uk-form-width-small" type="select" aria-placeholder="Ingresar estado">
                                        <option>Completado</option>
                                        <option>No completado</option>

                                    </select>
                                </td> --}}
                            <td>
                                <input onchange="validarfechastipopago()" id="fecha_inicio_tipopago" class="uk-input uk-form-width-medium" type="date">


                            </td>
                            <td>
                                <input onchange="validarfechastipopago()" id="fecha_final_tipopago" class="uk-input uk-form-width-medium" type="date">

                            </td>
                            <td>
                                <select onchange="validarfechastipopago()" class="uk-select uk-form-width-1-1" name="" id="tipopago">

                                    <option selected disabled value="">--Selecionar--</option>
                                    <option value="2">Credito</option>
                                    <option value="1">Contado</option>


                                </select>



                            </td>

                            <td>

                                {{-- <a  href="/pdf" id="descargar" class="uk-button uk-button-secondary" uk-icon="download"></a> --}}
                                <a target="_blank" id="pedidostipopago" class="uk-button uk-button-secondary" uk-icon="download"></a>


                            </td>



                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="uk-div uk-padding">
        <div class="uk-section uk-section-secondary uk-padding">
            <div class="uk-container">



                <table class="uk-table">
                    <h4 class="uk-heading-line uk-text-center uk-padding-small">Reporte ventas por Cliente</h4>

                    <thead>
                        <tr>
                            <th>Fecha de Inicio</th>
                            <th>Fecha Final </th>
                            <th>Cliente</th>
                            <th>Descargar reporte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            {{-- <td><select class="uk-select uk-form-width-small" type="select" aria-placeholder="Ingresar estado">
                                        <option>Completado</option>
                                        <option>No completado</option>

                                    </select>
                                </td> --}}
                            <td>
                                <input onchange="validarfechascliente()" id="fecha_inicio_cliente" class="uk-input uk-form-width-medium" type="date">

                            </td>
                            <td>
                                <input onchange="validarfechascliente()" id="fecha_final_cliente" class="uk-input uk-form-width-medium" type="date">

                            </td>
                            <td>
                                <select onchange="validarfechascliente()" class="uk-select uk-form-width-1-1" name="" id="clientes"></select>



                                <script>
                                    cargarcliente();

                                    function peticionapicliente(data, method, onSuccess) {


                                        let url = '/api/getcliente';
                                        if (method == 'PUT' || method == 'DELETE') {
                                            url += '/' + data.id;
                                        }
                                        $.ajax({
                                            url: url
                                            , method: method
                                            , data: data,

                                            success(res) {
                                                onSuccess(res);

                                            }

                                        })
                                    }

                                    function cargarcliente() {

                                        peticionapicliente({}, 'GET', function(res) {
                                            cliente = res;
                                            console.log(res);
                                            let html = '<option value=""> Seleccionar </option>';
                                            res.forEach(cliente => {
                                                html += '<option value="' + cliente.IdCliente + '">' + cliente.Primer_Nombre + ' ' +
                                                    cliente.Segundo_Nombre + ' ' + cliente.Primer_Apellido + ' ' + cliente
                                                    .Segundo_Apellido +
                                                    '</option>'
                                            });

                                            $("#clientes").html(html);
                                        });
                                    }

                                </script>

                            </td>

                            <td>

                                {{-- <a  href="/pdf" id="descargar" class="uk-button uk-button-secondary" uk-icon="download"></a> --}}
                                <a target="_blank" id="pedidoscliente" class="uk-button uk-button-secondary" uk-icon="download"></a>



                            </td>



                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>





    <div style="text-align: center;" class="uk-div">
        <a class="uk-button uk-button-secondary" href="/menu/menuadmon">Atrás</a>
    </div>




</body>

</html>

<script type="text/javascript">
    function validarfechaspedidos() {


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

    function validarfechastipopago() {


        var fecha1 = document.getElementById("fecha_inicio_tipopago").value;
        var fecha2 = document.getElementById("fecha_final_tipopago").value;
        var idtipopago = document.getElementById("tipopago").value;



        if (fecha1 && fecha2 && idtipopago) {

            console.log(fecha1, fecha2, idtipopago);
            document.getElementById("pedidostipopago").href = "/api/pdf/tipodepagoid_entre/" + idtipopago + "/" + fecha1 + "/" + fecha2 + "/descargar";



        } else {
            document.getElementById("pedidostipopago").href = "/api/pdf/tipodepago_entre/" + fecha1 + "/" + fecha2 + "/descargar";



        }




    }

    function validarfechascliente() {


        var fecha1 = document.getElementById("fecha_inicio_cliente").value;
        var fecha2 = document.getElementById("fecha_final_cliente").value;
        var idcliente = document.getElementById("clientes").value;


        if (fecha1 && fecha2 && idcliente) {

            console.log(fecha1, fecha2, idcliente);
            document.getElementById("pedidoscliente").href = "/api/pdf/cliente_entre/" + idcliente + "/" + fecha1 + "/" + fecha2 + "/descargar";





        }




    }

    function validarfechasinsumos() {


        var fecha1 = document.getElementById("fecha_inicio_insumos").value;
        var fecha2 = document.getElementById("fecha_final_insumos").value;
        var idinsumo = document.getElementById("insumos").value;



        if (fecha1 && fecha2 && idinsumo) {
            console.log(fecha1, fecha2, idinsumo);
            document.getElementById("pedidosinsumo").href = "/api/pdf/ventas_insumos/" + idinsumo + "/" + fecha1 + "/" + fecha2 + "/descargar";
        } else {

            console.log(fecha1, fecha2, idinsumo);
            document.getElementById("pedidosinsumo").href = "/api/pdf/ventas_insumos/" + fecha1 + "/" + fecha2 + "/descargar";





        }
    }

</script>
