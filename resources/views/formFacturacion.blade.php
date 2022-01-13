<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación</title>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>


<body onpageshow="fecha();">
    <!-- Nav Bar-->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu
                    Principal</span>
            </a>

        </div>
        <div class="uk-navbar-right">


            <a href="#my-id" uk-toggle></a>

            <!-- Off Canvas, Elemento desplegable de UiKit -->
            <div id="my-id" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <a href="/menu">Menú</a>
                    <hr class="uk-divider-icon">

                    <ul class="uk-nav uk-parent">

                        <li class="uk-parent"> <a href="/menu">Menú</a></li>


                        <ul class="uk-nav-sub">
                            <li class="uk-parent"> <a href="/menu/facturacion"> Facturación </a></li>
                            <li> <a href="/menu/resumen_pedidos">Pedidos </a></li>
                            <li> <a href="/menu/clientes">Clientes </a></li>
                            <li> <a href="/menu/insumos">Insumos </a></li>

                        </ul>
                        <hr class="uk-divider-icon">
                        <li class="uk-parent"> <a href="/menu/menuadmon"> Administración </a></li>

                        <ul class="uk-nav-sub">

                            <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                            <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>

                            <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>


                            <li> <a href="/menu/menuadmon/promociones">Página de Inicio</a></li>
                        </ul>
                        <hr class="uk-divider-icon">

                        <li class="uk-parent"> Sesión </li>
                        <ul class="uk-nav-sub">
                            <li><a href="/login/cerrar"><b> Cerrar Sesión </b></a></li>
                        </ul>

                    </ul>

                </div>
            </div>
    </nav>
    <form action="" method="post">
        <div>

            <div class="uk-padding uk-background-muted">

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_fact">Fecha de Facturación</label>
                        <input disabled id="fecha_fact" name="fecha_facturacion" type="date" class="uk-input">
                        <div style="text-align: center" class="uk-padding">
                            <label><input onchange="validarpedidosimp();" id="chkotros" class="uk-checkbox"
                                    type="checkbox">
                                <b> ¿Desea ingresar ordenes
                                    de
                                    Sublimación, Bordado o Serigrafía? </b></label>

                        </div>

                    </div>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_ent">Nombre del cliente <a href="/menu/menuadmon/clientes/agregar_cliente">
                                ¿Nuevo Cliente?</a></label>
                        <select required name="" class="uk-select uk-width-1-1" id="cliente"></select>

                        <div style="text-align: center" class="uk-padding">
                            <label><input onchange="validarpedidosimp();" id="chkimpresion" class="uk-checkbox"
                                    type="checkbox"> <b> ¿Desea ingresar ordenes
                                    de
                                    Impresion
                                    Digital? </b></label>

                        </div>
                    </div>
                </div>



                <script>
                    function validarpedidosimp() {
                        var chk = document.getElementById('chkimpresion').checked;
                        var chkotros = document.getElementById('chkotros').checked;
                        if (chk) {
                            document.getElementById("impresion").hidden = false;
                        } else {
                            document.getElementById("impresion").hidden = true;
                        }

                        if (chkotros) {
                            document.getElementById("otros").hidden = false;
                        } else {
                            document.getElementById("otros").hidden = true;
                        }

                    }
                </script>
            </div>

        </div>
        <div hidden id="otros">


            <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
                <div>

                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->

                    <div class="uk-form-horizontal uk-margin-large">
                        <div class="uk-margin">
                            <label for="pecho_izq" class="uk-form-label" for="form-horizontal-text">Pecho
                                Izquierdo</label>
                            <div class="uk-form-controls">
                                <input id="pecho_izq" name="pecho_izquierdo" class="uk-input uk-form-width-large"
                                    id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="pecho_der" class="uk-form-label" for="form-horizontal-text">Pecho
                                Derecho</label>
                            <div class="uk-form-controls">
                                <input id="pecho_der" name="pecho_derecho" class="uk-input uk-form-width-large"
                                    id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="manga_izq" class="uk-form-label" for="form-horizontal-text">Manga
                                Izquierda</label>
                            <div class="uk-form-controls">
                                <input id="manga_izq" name="manga_izquierda" class="uk-input uk-form-width-large"
                                    id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="manga_der" class="uk-form-label" for="form-horizontal-text">Manga
                                Derecha</label>
                            <div class="uk-form-controls">
                                <input id="manga_der" name="manga_derecha" class="uk-input uk-form-width-large"
                                    id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="espalda" class="uk-form-label" for="form-horizontal-text">Espalda</label>
                            <div class="uk-form-controls">
                                <input id="espalda" name="espalda" class="uk-input uk-form-width-large"
                                    id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="uk-child-width-1-1 " uk-grid>
                        <div>
                            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                            <div class="uk-grid-small" uk-grid>
                                <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
                                    <thead>
                                        <tr>
                                            <th>Categoria <br> Insumo</th>
                                            <th>Cantidad | precio</th>
                                            <th>Observacion</th>

                                        </tr>
                                    </thead>

                                    <script>
                                        let cat = [];
                                        let insumos = [];

                                        cargarinsumo();
                                        cargarcat();

                                        function cargarinsumo() {

                                            peticionapiinsumos({}, 'GET', function(res) {
                                                insumos = res;
                                                console.log(res);
                                                let html = '<option disabled selected value=""> Sel. Insumo </option>';

                                                res.forEach(insumos => {
                                                    html += '<option value="' + insumos.IdInsumo + '">' + insumos
                                                        .Tipo + ' ' + insumos

                                                        .Descripcion +
                                                        '</option>'
                                                });
                                                $("#insumos").html(html);
                                            });







                                        }

                                        function peticionapiinsumos(data, method, onSuccess) {


                                            let url = '/api/getinsumomult';
                                            if (method == 'PUT' || method == 'DELETE') {
                                                url += '/' + data.id;
                                            }
                                            $.ajax({
                                                url: url,
                                                method: method,
                                                data: data,

                                                success(res) {
                                                    onSuccess(res);

                                                }

                                            })
                                        }

                                        function cargarcat() {

                                            peticionapicat({}, 'GET', function(res) {
                                                cat = res;
                                                console.log(res);
                                                let html = '<option disabled selected value=""> Sel. Categoria </option>';

                                                res.forEach(cat => {
                                                    html += '<option value="' + cat.idcategoria + '">' + cat
                                                        .descripcion +
                                                        '</option>'
                                                });
                                                $("#categorias").html(html);
                                            });







                                        }

                                        function peticionapicat(data, method, onSuccess) {


                                            let url = '/api/getcategorias';
                                            if (method == 'PUT' || method == 'DELETE') {
                                                url += '/' + data.id;
                                            }
                                            $.ajax({
                                                url: url,
                                                method: method,
                                                data: data,

                                                success(res) {
                                                    onSuccess(res);

                                                }

                                            })
                                        }
                                    </script>
                                    <tbody>

                                        <tr>

                                            <td>

                                                <select id="categorias" name="categorias"
                                                    class="uk-select uk-form-width-small">

                                                </select>

                                                <select id="insumos" name="Tallas"
                                                    class="uk-select uk-form-width-small">

                                                </select>








                                            </td>
                                            <td>
                                                <input id="cantidad" onchange="monto();" type="number" min="0"
                                                    class="uk-input uk-form-width-small monto" placeholder="Cantidad">

                                                <div class="uk-inline">

                                                    <span class="uk-form-icon">C$</span>


                                                    <input id="precio" onchange="monto();" type="number" min="0"
                                                        class=" monto uk-input uk-form-width-small  ">

                                                </div>





                                            </td>

                                            <td>
                                                <textarea id="Observacion" name="Observacion"
                                                    class="uk-input uk-form-width-1-1" type="text"> </textarea>


                                            </td>




                                        </tr>
                                        <tr>
                                            <td>

                                                <label for="sub_total" class="uk-label">Total</label>
                                            </td>
                                            <td>
                                                <div class="uk-inline">

                                                    <span class="uk-form-icon">C$</span>


                                                    <input disabled id="sub_total" value="0" type="number" min="0"
                                                        class="uk-input uk-form-width-small ">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="uk-button uk-button-primary"
                                                    onclick="insertar(); totalgen();">Insertar
                                                    Pedido</a>
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <div class="uk-background-muted uk-padding">

                <div class="uk-grid-small" uk-grid>
                    <table id="Tabla" class="uk-table uk-table-hover uk-table-divider uk-table-small">
                        <thead>
                            <tr>
                                <th>
                                    <div class="popup" onclick="myFunction()">Categoria <span
                                            class="uk-margin-small-right" uk-icon="info"></span>

                                        <span class="popuptext" id="myPopup">Categorias: <br> Sublimación=1 <br>
                                            Serigrafía=2 <br> Bordado=4</span>
                                    </div>
                                    <script>
                                        // When the user clicks on div, open the popup
                                        function myFunction() {
                                            var popup = document.getElementById("myPopup");
                                            popup.classList.toggle("show");
                                        }
                                    </script>

                                    <style>
                                        /* Popup container - can be anything you want */
                                        .popup {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            -webkit-user-select: none;
                                            -moz-user-select: none;
                                            -ms-user-select: none;
                                            user-select: none;
                                        }

                                        /* The actual popup */
                                        .popup .popuptext {
                                            visibility: hidden;
                                            width: 160px;
                                            background-color: #555;
                                            color: #fff;
                                            text-align: center;
                                            border-radius: 6px;
                                            padding: 8px 0;
                                            position: absolute;
                                            z-index: 1;
                                            bottom: 125%;
                                            left: 50%;
                                            margin-left: -80px;
                                        }

                                        /* Popup arrow */
                                        .popup .popuptext::after {
                                            content: "";
                                            position: absolute;
                                            top: 100%;
                                            left: 50%;
                                            margin-left: -5px;
                                            border-width: 5px;
                                            border-style: solid;
                                            border-color: #555 transparent transparent transparent;
                                        }

                                        /* Toggle this class - hide and show the popup */
                                        .popup .show {
                                            visibility: visible;
                                            -webkit-animation: fadeIn 1s;
                                            animation: fadeIn 1s;
                                        }

                                        /* Add animation (fade in the popup) */
                                        @-webkit-keyframes fadeIn {
                                            from {
                                                opacity: 0;
                                            }

                                            to {
                                                opacity: 1;
                                            }
                                        }

                                        @keyframes fadeIn {
                                            from {
                                                opacity: 0;
                                            }

                                            to {
                                                opacity: 1;
                                            }
                                        }

                                    </style>
                                </th>
                                <th>Pecho Izq.</th>
                                <th>Pecho Der.</th>
                                <th>Manga Izq.</th>
                                <th>Manga Der.</th>
                                <th>Espalda</th>
                                <th>IdInsumo</th>
                                <th>Insumo</th>
                                <th>Cantidad</th>
                                <th>precio</th>
                                <th>Sub-Total</th>
                                <th>Observación</th>

                                <th>Opciones</th>


                            </tr>
                        </thead>


                        <tfoot>
                            <tr>

                                <td colspan="10"><label for="Total" class="uk-label">Total</label></td>
                                <td>
                                    <div class="uk-inline">

                                        <span class="uk-form-icon">C$</span>

                                        <input class="uk-form-width-small uk-input saldo" value="0" disabled id="total">
                                    </div>
                                </td>



                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- <tr hidden>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>

                    </tr> --}}
                        </tbody>






                    </table>

                </div>
                <br>
                <script type="text/javascript">
                    function borrar() {


                        $(document).on('click', '.borrar', function(event) {
                            event.preventDefault();
                            $(this).closest('tr').remove();

                            calcular();
                        });






                    }





                    function insertar() {




                        var cat = document.getElementById("categorias").value;
                        var pecho_izq = document.getElementById("pecho_izq").value;
                        var pecho_der = document.getElementById("pecho_der").value;
                        var manga_izq = document.getElementById("manga_izq").value;
                        var manga_der = document.getElementById("manga_der").value;
                        var espalda = document.getElementById("espalda").value;
                        var Idinsumo = document.getElementById("insumos").value;
                        var insumoselect = document.getElementById("insumos");
                        var insumo = insumoselect.options[insumoselect.selectedIndex].text;
                        var cant = document.getElementById("cantidad").value;
                        var precio = document.getElementById("precio").value;
                        var sub_total = document.getElementById("sub_total").value;
                        var obs = document.getElementById("Observacion").value;






                        var htmlTags = '<tr>' +
                            '<td>' + cat + '</td>' +
                            '<td>' + pecho_izq + '</td>' +
                            '<td>' + pecho_der + '</td>' +
                            '<td>' + manga_izq + '</td>' +
                            '<td>' + manga_der + '</td>' +
                            '<td>' + espalda + '</td>' +
                            '<td>' + Idinsumo + '</td>' +
                            '<td>' + insumo + '</td>' +
                            '<td>' + cant + '</td>' +
                            '<td>' + precio + '</td>' +
                            '<td>' + sub_total + '</td>' +
                            '<td>' + obs + '</td>' +

                            '<td>' + '<a class="borrar uk-icon-button" onclick="borrar();" uk-icon="icon: trash; ratio: 0.9"></a>' +
                            '</td>' +




                            '</tr>';

                        $('#Tabla tbody').append(htmlTags);



                        document.getElementById("categorias").value = null;
                        document.getElementById("pecho_izq").value = null;
                        document.getElementById("pecho_der").value = null;
                        document.getElementById("manga_izq").value = null;
                        document.getElementById("manga_der").value = null;
                        document.getElementById("espalda").value = null;
                        document.getElementById("insumos").value = null;

                        document.getElementById("cantidad").value = null;
                        document.getElementById("precio").value = null;
                        document.getElementById("sub_total").value = null;
                        document.getElementById("Observacion").value = null;


                        calcular();


                    }



                    function monto() {
                        var total = 1;
                        var change = false; //
                        $(".monto").each(function() {
                            if (!isNaN(parseFloat($(this).val()))) {
                                change = true;
                                total *= parseFloat($(this).val());
                            }
                        });
                        // Si se modifico el valor , retornamos la multiplicación
                        // caso contrario 0
                        total = (change) ? total : 0;
                        document.getElementById('sub_total').value = total.toFixed(2);


                    }








                    function fecha() {
                        $(document).ready(function() {
                            var date = new Date();

                            var day = date.getDate();
                            var month = date.getMonth() + 1;
                            var year = date.getFullYear();

                            if (month < 10) month = "0" + month;
                            if (day < 10) day = "0" + day;
                            var today = year + "-" + month + "-" + day;
                            $("#fecha_fact").attr("value", today);
                        });
                    }








                    function calcular() {
                        // obtenemos todas las filas del tbody
                        var filas = document.querySelectorAll("#Tabla tbody tr");


                        var total = 0;
                        console.log(filas);


                        // recorremos cada una de las filas
                        filas.forEach(function(e) {

                            // obtenemos las columnas de cada fila
                            var columnas = e.querySelectorAll("td");
                            console.log(columnas);



                            var importe = parseFloat(columnas[10].textContent);

                            // mostramos el total por fila
                            // columnas[12].textContent = (cantidad * importe).toFixed(2);

                            total += importe;
                            console.log(total);
                        })
                        // mostramos la suma total
                        var filas = document.querySelectorAll("#Tabla tfoot tr td");
                        console.log(total);
                        document.getElementById("total").value = total.toFixed(2);


                    }
                </script>

                </table>

            </div>
        </div>



        <div id="impresion" hidden class="uk-div uk-background-muted uk-padding">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

            </script>

            <h1 class="uk-text-center">Especificaciones Imp. Digital</h1>
            <table class="uk-table uk-table-divider">
                <thead>
                    <tr>
                        <th>Alto</th>
                        <th>Ancho</th>
                        <th>Metros cuadrados</th>
                        <th>Precio por metro cuadrado</th>

                        <th>costo</th>
                        <th>cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="alto" oninput="area();" class="uk-input area" min="0" type="number"
                                placeholder="0" value="0"></td>
                        <td><input id="ancho" oninput="area();" class="uk-input area" min="0" type="number"
                                placeholder="0" value="0"></td>
                        <td><input id="mt2" oninput="costosimp();" class="uk-input costoimp" min="0" type="number"
                                placeholder="0" value="0"></td>
                        <td>
                            <div class="uk-inline">

                                <span class="uk-form-icon">C$</span>

                                <input id="precio_mt2" oninput="costosimp();" class="uk-input costoimp" min="0"
                                    type="number" placeholder="0" value="0">
                            </div>
                        </td>
                        <td>
                            <div class="uk-inline">

                                <span class="uk-form-icon">C$</span>

                                <input id="costoimp" oninput="multiimp();" class="uk-input montoimp" min="0"
                                    type="number" placeholder="0" value="0">
                            </div>
                        </td>
                        <td><input id="cantidadimp" oninput="multiimp();" class="uk-input montoimp" min="0"
                                type="number" placeholder="0" value="0"></td>
                        <td>
                            <div class="uk-inline">

                                <span class="uk-form-icon">C$</span>

                                <input id="sub_totalimp" name="sub_total" class="uk-input" min="0" value=""
                                    type="number" placeholder="0" value="0">
                            </div>
                        </td>


                    </tr>
                    <tr>

                        <td colspan="2"> <select class="uk-select" name="insumos de la tabla" id="insumosimp">
                                <option disabled value="">Insumos</option>
                            </select>
                        </td>
                        <td colspan="3"><textarea type="number" id="observacionimp"
                                class="uk-input uk-form-width-large " placeholder="Observacion"></textarea></td>
                        <td colspan="2"> <a class="uk-button uk-button-primary"
                                onclick="insertarimp(); totalgen();">Ingresar
                                Pedido</a></td>

                    </tr>

                </tbody>
            </table>

            <script type="text/javascript">
                cargarinsumoimp();

                function borrarimp() {


                    $(document).on('click', '.borrarimp', function(event) {
                        event.preventDefault();
                        $(this).closest('tr').remove();

                        calcular();
                    });






                }


                function area() {
                    var mt2 = 1;
                    var change = false; //
                    $(".area").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            mt2 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    mt2 = (change) ? mt2 : 0;
                    document.getElementById('mt2').value = mt2.toFixed(2);



                }

                function costosimp() {
                    var costo = 1;
                    var change = false; //
                    $(".costoimp").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            costo *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    costo = (change) ? costo : 0;
                    document.getElementById('costoimp').value = costo.toFixed(2);;



                }


                function multiimp() {
                    var total = 1;
                    var change = false; //
                    $(".montoimp").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            total *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    total = (change) ? total : 0;
                    document.getElementById('sub_totalimp').value = total.toFixed(2);;



                }

                function cargarinsumoimp() {

                    peticionapimp({}, 'GET', function(res) {
                        usuarios = res;
                        console.log(res);
                        let html = '<option disabled selected value=""> Sel. Insumo </option>';

                        res.forEach(usuarios => {
                            html += '<option value="' + usuarios.IdInsumo + '">' + usuarios
                                .Descripcion +
                                '</option>'
                        });
                        $("#insumosimp").html(html);
                    });







                }

                function peticionapimp(data, method, onSuccess) {


                    let url = '/api/getinsumoimpdigital';
                    if (method == 'PUT' || method == 'DELETE') {
                        url += '/' + data.id;
                    }
                    $.ajax({
                        url: url,
                        method: method,
                        data: data,

                        success(res) {
                            onSuccess(res);

                        }

                    })
                }
            </script>

            <div class="uk-background-muted uk-padding">

                <div class="uk-grid-small" uk-grid>
                    <table id="Tablaimp" class="uk-table uk-table-hover uk-table-divider uk-table-small">
                        <thead>
                            <tr>

                                <th>Alto</th>
                                <th>Ancho</th>
                                <th>Metros cuadrados</th>
                                <th>Precio por metro cuadrado</th>
                                <th>IdInsumo</th>
                                <th>Insumo</th>

                                <th>costo</th>
                                <th>cantidad</th>
                                <th>Sub-Total</th>
                                <th>Observacion</th>


                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>

                                <td colspan="8"><label for="Totalimp" class="uk-label">Total</label></td>
                                <td>
                                    <div class="uk-inline">

                                        <span class="uk-form-icon">C$</span>

                                        <input value="0" class="uk-form-width-small uk-input saldo" disabled
                                            id="totalimp">
                                    </div>
                                </td>



                            </tr>
                        </tfoot>

                    </table>
                </div>
                <br>
                <script type="text/javascript">
                    function insertarimp() {


                        var alto = document.getElementById("alto").value;
                        var ancho = document.getElementById("ancho").value;
                        var mt2 = document.getElementById("mt2").value;
                        var precio_mt2 = document.getElementById("precio_mt2").value;
                        var insumoselect = document.getElementById("insumosimp");
                        var insumo = insumoselect.options[insumoselect.selectedIndex].text;
                        var IdInsumo = document.getElementById("insumosimp").value;

                        var costo = document.getElementById("costoimp").value;
                        var cant = document.getElementById("cantidadimp").value;
                        var sub_total = document.getElementById("sub_totalimp").value;
                        var Observacion = document.getElementById("observacionimp").value;




                        var htmlTags = '<tr>' +
                            '<td>' + alto + '</td>' +
                            '<td>' + ancho + '</td>' +
                            '<td>' + mt2 + '</td>' +
                            '<td>' + precio_mt2 + '</td>' +
                            '<td>' + IdInsumo + '</td>' +
                            '<td>' + insumo + '</td>' +

                            '<td>' + costo + '</td>' +
                            '<td>' + cant + '</td>' +
                            '<td>' + sub_total + '</td>' +
                            '<td>' + Observacion + '</td>' +
                            '<td>' +
                            '<a onclick="borrarimp();" class=" borrarimp uk-icon-button" uk-icon="icon: trash; ratio: 0.9"></a>' +
                            '</td>' +



                            '</tr>';

                        $('#Tablaimp tbody').append(htmlTags);

                        calcularimp();

                        document.getElementById("mt2").value = null;
                        document.getElementById("cantidad").value = null;
                        document.getElementById("sub_total").value = null;
                        document.getElementById("alto").value = null;
                        document.getElementById("ancho").value = null;
                        document.getElementById("costoimp").value = null;
                        document.getElementById("insumosimp").value = null;

                        document.getElementById("precio_mt2").value = null;
                        document.getElementById("observacionimp").value = null;






                    }

                    function Obtener_datosimp() {

                        var filas = document.querySelectorAll("#Tablaimp tbody tr");

                        var contador = 0;

                        const alto = [];
                        const ancho = [];
                        const mt2 = [];
                        const prec_mt2 = [];
                        const costo = [];
                        const cantidad = [];
                        const sub_total = [];
                        const Observacion = [];

                        var total = document.getElementById("totalimp").value;

                        console.log(filas);





                        filas.forEach(function(e) {


                            // obtenemos las columnas de cada fila
                            var columnas = e.querySelectorAll("td");



                            var alto_ = columnas[0].textContent;
                            var ancho_ = columnas[1].textContent;
                            var mt2_ = columnas[2].textContent;
                            var Prec_mt2_ = columnas[3].textContent;
                            var costo_ = columnas[4].textContent;
                            var cantidad_ = parseFloat(columnas[5].textContent);
                            var sub_total_ = parseFloat(columnas[6].textContent);
                            var Observacion_ = columnas[7].textContent;



                            alto[contador] = alto_;
                            ancho[contador] = ancho_
                            mt2[contador] = mt2_;
                            prec_mt2[contador] = Prec_mt2_;
                            costo[contador] = costo_;
                            cantidad[contador] = cantidad_;
                            sub_total[contador] = sub_total_;
                            Observacion[contador] = Observacion_;




                            contador = contador + 1;


                            console.log(contador)




                        })
                        console.log(filas)




                    }

                    function calcularimp() {
                        // obtenemos todas las filas del tbody
                        var filas = document.querySelectorAll("#Tablaimp tbody tr");


                        var total = 0;
                        console.log(filas);


                        // recorremos cada una de las filas
                        filas.forEach(function(e) {

                            // obtenemos las columnas de cada fila
                            var columnas = e.querySelectorAll("td");
                            console.log(columnas);



                            var importe = parseFloat(columnas[8].textContent);

                            // mostramos el total por fila
                            // columnas[12].textContent = (cantidad * importe).toFixed(2);

                            total += importe;
                            console.log(total);
                        })
                        // mostramos la suma total
                        var filas = document.querySelectorAll("#Tablaimp tfoot tr td");
                        console.log(total);
                        document.getElementById("totalimp").value = total.toFixed(2);;


                    }
                </script>
                </table>
            </div>




        </div>
        <div class="uk-div uk-background-muted uk-padding">
            <div class="uk-background-muted">
                <h1 class="uk-text-center">Notas</h1>

                <div>

                    <textarea id="notas" name="Notas" class="uk-textarea" placeholder="Notas"></textarea>

                    <div class="uk-margin" style="text-align: center">
                        <label for="total_gen" class="uk-form-label" for="form-horizontal-text">Total General</label>
                        <div class="uk-form-controls">
                            <div class="uk-inline">

                                <span class="uk-form-icon">C$</span>

                                <input value="0" disabled id="total_gen" name="total_gen"
                                    class="uk-input uk-form-width-large" id="form-horizontal-text" type="number"
                                    placeholder="">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
            <div>

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label for="abono" class="uk-form-label" for="form-horizontal-text">Abono</label>
                        <div class="uk-form-controls">
                            <div class="uk-inline">

                                <span class="uk-form-icon">C$</span>


                                <input id="abono" min="0" name="Abono" oninput="abonos();"
                                    class="uk-input uk-form-width-large" id="form-horizontal-text" type="number"
                                    placeholder="">
                            </div>
                            <script>
                                function totalgen() {
                                    var total_sub = 0;
                                    var total_imp = 0;
                                    var total = 0;

                                    total_sub = parseFloat(document.getElementById("total").value);
                                    total_imp = parseFloat(document.getElementById("totalimp").value);

                                    total = total_imp + total_sub + 0;

                                    console.log(total_sub, total_imp, total, "prueba tota"); //


                                    document.getElementById('total_gen').value = total;
                                    abonos();

                                }

                                function abonos() {
                                    var sub_total = document.getElementById("total_gen").value;
                                    var abono = document.getElementById("abono").value;
                                    var total = 0;

                                    total = sub_total - abono;

                                    console.log(sub_total, abono, total); //


                                    document.getElementById('saldo').value = total.toFixed(2);




                                }
                            </script>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="saldo" class="uk-form-label" for="form-horizontal-text">Saldo</label>
                        <div class="uk-form-controls">
                            <div class="uk-inline">

                                <span class="uk-form-icon">C$</span>

                                <input id="saldo" name="Saldo" class="uk-input uk-form-width-large"
                                    id="form-horizontal-text" type="number" placeholder="">
                            </div>

                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="banco" class="uk-form-label" for="form-horizontal-text">Método de Pago</label>
                        <div class="uk-form-controls">

                            <select class="uk-select uk-form-width-large" id="metodo_de_pago">


                                <option value='1'>Efectivo</option>
                                <option value='2'>Tarjeta</option>
                                <option value='3'>Transferencia Bancaria</option>
                                <option value='4'>Móvil</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="estado" class="uk-form-label" for="form-horizontal-text">Estado del Pedido</label>
                        <div class="uk-form-controls">

                            <select disabled class="uk-select uk-form-width-large" name="" id="estado">
                                <option selected value="No Completado">No Completado</option>
                                <option value="En Proceso">En Proceso</option>
                                <option value="Realizado - No Entregado">Realizado - No Entregado</option>
                                <option value="Finalizado (Entregado)">Finalizado (Entregado)</option>


                            </select>
                        </div>

                    </div>


                </div>

            </div>
            <div>

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label for="autriza" class="uk-form-label" for="form-horizontal-text">Cod. Seguimiento</label>
                        <div class="uk-form-controls">
                            <input disabled id="cod_segi" name="num_factura" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="recibe" class="uk-form-label" for="form-horizontal-text">Recibe Pedido</label>
                        <div class="uk-form-controls">
                            <select class="uk-select uk-form-width-large" name="" id="recibepedido">
                                <option value="">Seleccionar</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="factura" class="uk-form-label" for="form-horizontal-text">N° Factura</label>
                        <div class="uk-form-controls">
                            <input id="factura" name="num_factura" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="number" placeholder="">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="pedido" class="uk-form-label" for="form-horizontal-text">Tipo de pago</label>
                        <div class="uk-form-controls">
                            <select class="uk-select uk-form-width-large" name="" id="tipodepago">
                                <option value="1">Contado</option>
                                <option value="2">Credito</option>
                            </select>


                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- Seccion que contiene los botones de atrás y guardar-->
        <div class="uk-padding uk-background-muted uk-padding " style="text-align: center;">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                <a href="/menu" id="atras" onclick=" " class="uk-button uk-button-primary "
                    style="margin-left: 100px">Atrás</a>
                <a id="guardar" onclick=' validarinsert();' class="uk-button uk-button-secondary"

                    style="margin-left: 100px">Guardar</a>

                <script>
                    $('#atras').click(function() {
                        var clientes = document.getElementById("cliente").value;

                        console.log(clientes)

                        if (clientes) {
                            confirm("¿Está seguro de volver al menú principal?");
                        } else {

                        }
                    });
                </script>


            </div>

            <select class="uk-select" id="cat" disabled hidden>
                <option value='1'>Sublimación</option>
            </select>
        </div>
    </form>
    {{-- script para ingresar datos en los formularios --}}
    <script>
        let pedido = [];
        const arreglosub = [];
        const arregloimp = [];
        var cod_seg_rand = 0;



        function validarpedidosimp() {
            var chk = document.getElementById('chkimpresion').checked;
            var chkotros = document.getElementById('chkotros').checked;

            console.log(chk);

            if (chkotros) {
                document.getElementById("otros").hidden = false;
            } else {
                document.getElementById("otros").hidden = true;
            }

            if (chk) {
                document.getElementById("impresion").hidden = false;


            } else {
                document.getElementById("impresion").hidden = true;
            }

            if (chkotros && chk) {



            }

        }

        function validarinsert() {
            var chk = document.getElementById('chkimpresion').checked;
            var chkotros = document.getElementById('chkotros').checked;



            console.log("chk:", chk, " Otros", chkotros);

            if (chkotros && chk) {
                cargar_detallesub();
                cargar_detalleimp();
                guardarpedidoall();


            }

            if (chk && chkotros == false) {
                document.getElementById("impresion").hidden = false;
                cargar_detalleimp();
                guardarpedidoimp();


            }
            if (chkotros && chk == false) {
                document.getElementById("otros").hidden = false;
                cargar_detallesub();
                guardarpedidosub();
            }



        }





        cargarusuario();
        cargarcliente();
        getRandom();


        function peticionapi3(data, method, onSuccess) {


            let url = '/api/getcliente';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.id;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,

                success(res) {
                    onSuccess(res);

                }

            })
        }

        function peticionapi2(data, method, onSuccess) {


            let url = '/api/usuario';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.id;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,

                success(res) {
                    onSuccess(res);

                }

            })
        }

        function cargarusuario() {

            peticionapi2({}, 'GET', function(res) {
                usuarios = res;
                console.log(res);
                let html = '<option value=""> Seleccionar </option>';

                res.forEach(usuarios => {
                    html += '<option value="' + usuarios.IdUsuario + '">' + usuarios.Primer_Nombre + ' ' +
                        usuarios.Segundo_Nombre + ' ' + usuarios.Primer_Apellido + ' ' + usuarios
                        .Segundo_Apellido +
                        '</option>'
                });
                $("#recibepedido").html(html);
            });
        }

        function cargarcliente() {

            peticionapi3({}, 'GET', function(res) {
                cliente = res;
                console.log(res);
                let html = '<option value=""> Seleccionar </option>';
                res.forEach(cliente => {
                    html += '<option value="' + cliente.IdCliente + '">' + cliente.Primer_Nombre + ' ' +
                        cliente.Segundo_Nombre + ' ' + cliente.Primer_Apellido + ' ' + cliente
                        .Segundo_Apellido +
                        '</option>'
                });

                $("#cliente").html(html);
            });
        }

        function peticionapisub(data, method, onSucess) {
            let url = '/api/pedidosub';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,
               error(e) {
               let error = e.responseJSON.errors;
               let msj = error[Object.keys(error)[0]][0];
               alert(msj);
               },
               success(res) { 
                    alert('Guardado con exito');

               window.location.href = "/menu";

               }

            })
        }

        function peticionapiimp(data, method, onSucess) {
            let url = '/api/pedidoimp';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,
                error(e) {
                    let error = e.responseJSON.errors;
                    let msj = error[Object.keys(error)[0]][0];
                    alert(msj);
                },
                success(res) {
                     alert('Guardado con exito');

                    window.location.href = "/menu";

                }
            })
        }

        function peticionapiall(data, method, onSucess) {
            let url = '/api/pedidoall';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,
                error(e) {
                    let error = e.responseJSON.errors;
                    let msj = error[Object.keys(error)[0]][0];
                    alert(msj);
                },
                success(res) {
 alert('Guardado con exito');

                    window.location.href = "/menu";


                }
            })
        }

        function getRandom() {

            cod_seg_rand = Math.floor((Math.random() * 10000000));
            console.log(cod_seg_rand);

        }

        function cargarpedidosub() {
            peticionapi({}, 'GET', function(res) {
                console.log(res);
                alert('respuesta satisfactoria');
            });

        }
        // Para solo sub y otros
        function guardarpedidosub() {




            let data = {

                IdCliente: $("#cliente").val(),
                IdUsuario: $("#recibepedido").val(),
                IdCategoria: $("#cat").val(),
                fecha: $("#fecha_fact").val(),
                notas: $("#notas").val(),
                total_costo: $("#total_gen").val(),
                Saldo: $("#saldo").val(),
                abono: $("#abono").val(),
                codseguimiento: cod_seg_rand,





                idmetodo: $("#metodo_de_pago").val(),
                cod: $("#factura").val(),

                tipodepago: $("#tipodepago").val(),
                estado: $("#estado").val(),

                //funcion que llama al arreglo que toma los datos
                detallesub: JSON.stringify(arreglosub)




            };

            console.log(data);



            peticionapisub(data, 'POST', function(res) {
                alert('Guardado con exito')
            });
        }



        function cargar_detallesub() {

            var filas = document.querySelectorAll("#Tabla tbody tr");

            var contador = 0;

            const pecho_izq = [];
            const pecho_der = [];
            const manga_izq = [];
            const manga_der = [];
            const espalda = [];
            const talla = [];
            const insumo = [];
            const cantidad = [];
            const precio = [];
            const totaldetalle = [];
            const Observacion = [];

            var total = document.getElementById("total").value;

            console.log(filas);






            filas.forEach(function(e) {


                // obtenemos las columnas de cada fila
                var columnas = e.querySelectorAll("td");


                var idcat_ = columnas[0].textContent;
                var pechoizq_ = columnas[1].textContent;
                var pechoder_ = columnas[2].textContent;
                var mangaizq_ = columnas[3].textContent;
                var mangader_ = columnas[4].textContent;
                var espalda_ = columnas[5].textContent;
                var insumo = columnas[6].textContent;
                var cantidad_ = parseFloat(columnas[8].textContent);
                var precio_ = parseFloat(columnas[9].textContent);
                var totaldetalle_ = parseFloat(columnas[10].textContent);
                var Observacion_ = columnas[11].textContent;
                var imagen_ = columnas[12].innerHTML;











                arreglosub[contador] = {

                    IdCliente: $("#cliente").val(),
                    IdUsuario: $("#recibepedido").val(),
                    IdCategoria: $("#cat").val(),
                    fecha: $("#fecha_fact").val(),
                    notas: $("#notas").val(),
                    total_costo: $("#total_gen").val(),
                    Saldo: $("#saldo").val(),
                    abono: $("#abono").val(),
                    codseguimiento: $("#tipo_de_pedido").val(),


                    imagen: imagen_,
                    IdCategoria: idcat_,
                    IdInsumos: insumo,
                    pecho_izq: pechoizq_,
                    pecho_der: pechoder_,
                    manga_izq: mangaizq_,
                    manga_der: mangader_,
                    espalda: espalda_,
                    cantidad: cantidad_,
                    precio: precio_,
                    totaldetalle: totaldetalle_,
                    observacion: Observacion_,


                };




                contador = contador + 1;


                console.log(arreglosub)




            })


            console.log(filas)






        }
        //------------------------------------

        //Para solo Imp digital

        function cargar_detalleimp() {

            var filas = document.querySelectorAll("#Tablaimp tbody tr");

            var contador = 0;

            const alto = [];
            const ancho = [];
            const mt2 = [];
            const prec_mt2 = [];
            const costo = [];
            const cantidad = [];
            const sub_total = [];
            const Observacion = [];

            var total = document.getElementById("totalimp").value;

            console.log(filas);






            filas.forEach(function(e) {


                // obtenemos las columnas de cada fila
                var columnas = e.querySelectorAll("td");



                var alto_ = columnas[0].textContent;
                var ancho_ = columnas[1].textContent;
                var mt2_ = columnas[2].textContent;
                var Prec_mt2_ = columnas[3].textContent;
                var insumo = columnas[4].textContent;

                var costo_ = columnas[6].textContent;
                var cantidad_ = parseFloat(columnas[7].textContent);
                var sub_total_ = parseFloat(columnas[8].textContent);
                var Observacion_ = columnas[9].textContent;





                alto[contador] = alto_;
                ancho[contador] = ancho_
                mt2[contador] = mt2_;
                prec_mt2[contador] = Prec_mt2_;
                costo[contador] = costo_;

                cantidad[contador] = cantidad_;
                sub_total[contador] = sub_total_;
                Observacion[contador] = Observacion_;

                arregloimp[contador] = {

                    IdCliente: $("#cliente").val(),
                    IdUsuario: $("#recibepedido").val(),
                    IdCategoria: $("#cat").val(),
                    fecha: $("#fecha_fact").val(),
                    notas: $("#notas").val(),
                    total_costo: $("#total_gen").val(),
                    Saldo: $("#saldo").val(),
                    abono: $("#abono").val(),
                    codseguimiento: $("#tipo_de_pedido").val(),

                    IdCategoria: 3,
                    IdInsumos: insumo,
                    ancho: ancho_,
                    alto: alto_,
                    mt2: mt2_,
                    p_m: Prec_mt2_,
                    costo: costo_,
                    cantidad: cantidad_,
                    total: sub_total_,
                    observacion: Observacion_,



                };




                contador = contador + 1;


                console.log(arregloimp)




            })


            console.log(filas)






        }

        function guardarpedidoimp() {




            let data = {

                IdCliente: $("#cliente").val(),
                IdUsuario: $("#recibepedido").val(),
                IdCategoria: $("#cat").val(),
                fecha: $("#fecha_fact").val(),
                notas: $("#notas").val(),
                total_costo: $("#total_gen").val(),
                Saldo: $("#saldo").val(),
                abono: $("#abono").val(),
                codseguimiento: cod_seg_rand,


                idmetodo: $("#metodo_de_pago").val(),
                cod: $("#factura").val(),
                estado: $("#estado").val(),
                tipodepago: $("#tipodepago").val(),

                //funcion que llama al ar
                detalleimp: JSON.stringify(arregloimp)




            };

            console.log(data);



            peticionapiimp(data, 'POST', function(res) {
                alert('Guardado con exito')
            });
        }



        // guardar todos



        function guardarpedidoall() {




            let data = {

                IdCliente: $("#cliente").val(),
                IdUsuario: $("#recibepedido").val(),
                fecha: $("#fecha_fact").val(),
                notas: $("#notas").val(),
                total_costo: $("#total_gen").val(),
                Saldo: $("#saldo").val(),
                abono: $("#abono").val(),
                codseguimiento: cod_seg_rand,





                idmetodo: $("#metodo_de_pago").val(),
                cod: $("#factura").val(),

                tipodepago: $("#tipodepago").val(),
                estado: $("#estado").val(),

                //funcion que llama al arreglo que toma los datos
                detallesub: JSON.stringify(arreglosub),
                detalleimp: JSON.stringify(arregloimp)




            };

            console.log(data);



            peticionapiall(data, 'POST', function(res) {
                alert('Guardado con exito')
            });
        }
    </script>


</body>




</html>
