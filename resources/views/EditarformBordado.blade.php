<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación|Bordado</title>
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


<body onpageshow="">
    <!-- Nav Bar-->
    <nav class="uk-navbar uk-navbar-container">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span
                    class="uk-margin-small-left">Facturación Bordado</span>

            </a>
        </div>
        <a href="#my-id" uk-toggle></a>

        <!-- Off canvas, Elemento desplegable de UiKit -->
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
                        <li> <a href="/menu/menuadmon/bd">Restaurar y generar Back-up</a></li>
                        <li> <a href="/menu/menuadmon/clientes">Clientes</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>

    <form action="{{ route('maestro.update', $edit) }}" method="post">
        @csrf

        @method('put')
        <div>

            <div class="uk-padding uk-background-muted">

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_fact">Fecha de Facturación</label>
                        <input id="fecha_fact" value="{{ $edit->fecha }}" name="fecha_facturacion" type="date"
                            class="uk-input">
                    </div>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_ent">Nombre del cliente</label>
                        <select name="" class="uk-select uk-width-1-1" id="cliente" value=""></select>
                    </div>
                </div>
            </div>
        </div>


        <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
            <div>

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->

                <div class="uk-form-horizontal uk-margin-large">
                    <div class="uk-margin">
                        <label for="pecho_izq" class="uk-form-label" for="form-horizontal-text">Pecho Izquierdo</label>
                        <div class="uk-form-controls">
                            <input id="pecho_izq" name="pecho_izquierdo" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="pecho_der" class="uk-form-label" for="form-horizontal-text">Pecho Derecho</label>
                        <div class="uk-form-controls">
                            <input id="pecho_der" name="pecho_derecho" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="manga_izq" class="uk-form-label" for="form-horizontal-text">Manga Izquierda</label>
                        <div class="uk-form-controls">
                            <input id="manga_izq" name="manga_izquierda" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="manga_der" class="uk-form-label" for="form-horizontal-text">Manga Derecha</label>
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
                                        <th>Talla</th>
                                        <th>Cantidad | precio</th>
                                        <th>Observacion</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>
                                            {{-- <select onchange="Validacion();" name="Tallas"
                                                class="uk-select uk-form-width-xsmall" id="Tallas">


                                                <option value="2">2</option>
                                                <option value="4">4</option>
                                                <option value="6">6</option>
                                                <option value="8">8</option>
                                                <option value="10">10</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="2XL">2XL</option>
                                                <option value="3XL">3XL</option>
                                                <option value="5XL">5XL</option>




                                            </select>




                                            <select name="Genero" class="uk-select uk-form-width-xsmall" id="Genero">
                                                <option value="Dama">Dama</option>
                                                <option value="Caballero">Caballero</option>
                                            </select> --}}
                                            {{-- <select onchange="Validacion();" name="Tallas"
                                                class="uk-select uk-form-width-xsmall" id="Tallas">


                                                <option value="2">2</option>
                                                <option value="4">4</option>
                                                <option value="6">6</option>
                                                <option value="8">8</option>
                                                <option value="10">10</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="2XL">2XL</option>
                                                <option value="3XL">3XL</option>
                                                <option value="5XL">5XL</option>




                                            </select> --}}
                                            <select class="uk-select" id="tallacambio1">
                                                <option value="1">2</option>
                                                <option value="2">4</option>
                                                <option value="3">6</option>
                                                <option value="4">8</option>
                                                <option value="5">10</option>
                                                <option value="6">12</option>
                                                <option value="7">14</option>
                                                <option value="8">16</option>
                                                <option value="9">18</option>
                                                <option value="10">S Dama</option>
                                                <option value="11">S Caballero</option>
                                                <option value="12">M Dama</option>
                                                <option value="13">M Caballero</option>
                                                <option value="14">L Dama</option>
                                                <option value="15">L Caballero</option>
                                                <option value="16">XL Dama</option>
                                                <option value="17">XL Caballero</option>
                                                <option value="18">2XL Dama</option>
                                                <option value="19">2XL Caballero</option>
                                                <option value="20">3XL Dama</option>
                                                <option value="21">3XL Caballero</option>
                                                <option value="22">5XL Dama</option>
                                                <option value="23">5xL Caballero</option>

                                            </select>



                                            {{-- <select name="Genero" class="uk-select uk-form-width-xsmall" id="Genero">
                                                <option value="Dama">Dama</option>
                                                <option value="Caballero">Caballero</option>
                                            </select> --}}


                                        </td>
                                        <td>
                                            <input id="cantidad" onchange="monto();" type="number" min="0"
                                                class="uk-input uk-form-width-xsmall monto">


                                            <input id="precio" onchange="monto();" type="number" min="0"
                                                class=" monto uk-input uk-form-width-small  ">







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
                                            <input disabled id="sub_total" type="number" min="0"
                                                class="uk-input uk-form-width-small ">
                                        </td>
                                        <td>
                                            <a class="uk-button uk-button-primary" id="guardarnuevodetalle"
                                                onclick="insertar();">Insertar
                                                Pedido</a>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <div class="uk-background-muted">
                        <h1 class="uk-text-center">Notas</h1>

                        <div>


                            <textarea id="notas" value=" " name="Notas" class="uk-textarea"
                                placeholder="Notas">{{ $edit->idmaestro }}</textarea>



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
                            <th>Pecho Izq.</th>
                            <th>Pecho Der.</th>
                            <th>Manga Izq.</th>
                            <th>Manga Der.</th>
                            <th>Espalda</th>
                            <th>Talla</th>

                            <th>Cantidad</th>
                            <th>precio</th>
                            <th>Sub-Total</th>
                            <th>Observación</th>
                            <th>Opciones</th>


                        </tr>
                    </thead>


                    <tfoot>
                        <tr>

                            <td colspan="8"><label for="Total" class="uk-label">Total</label></td>
                            <td><input class="uk-form-width-xsmall saldo" disabled id="total"></input></td>



                        </tr>
                    </tfoot>
                    <tbody id="Tabladetalle">
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


                // function Validacion() {
                //     var Tallas = document.getElementById("Tallas");
                //     var Genero = document.getElementById("Genero");


                //     if (Tallas.value == "2" || Tallas.value == "4" || Tallas.value == "6" || Tallas.value == "8" || Tallas.value ==
                //         "10" || Tallas.value == "12" || Tallas.value == "14" || Tallas.value == "16" || Tallas.value == "18") {








                //         Genero.style.visibility = "hidden";
                //         Genero.value = "";

                //     } else {
                //         Genero.style.visibility = "visible";



                //     }

                // }


                function insertar(pecho_izq, pecho_der, manga_izq, manga_der, espalda, talla, cant, obs) {





                    var pecho_izq = document.getElementById("pecho_izq").value;
                    var pecho_der = document.getElementById("pecho_der").value;
                    var manga_izq = document.getElementById("manga_izq").value;
                    var manga_der = document.getElementById("manga_der").value;
                    var espalda = document.getElementById("espalda").value;
                    var talla = document.getElementById("Tallas").value;
                    var Genero = document.getElementById("Genero").value;
                    var cant = document.getElementById("cantidad").value;
                    var precio = document.getElementById("precio").value;
                    var sub_total = document.getElementById("sub_total").value;
                    var obs = document.getElementById("Observacion").value;


                    var htmlTags = '<tr>' +
                        '<td>' + pecho_izq + '</td>' +
                        '<td>' + pecho_der + '</td>' +
                        '<td>' + manga_izq + '</td>' +
                        '<td>' + manga_der + '</td>' +
                        '<td>' + espalda + '</td>' +
                        '<td>' + talla + " " + Genero + '</td>' +

                        '<td>' + cant + '</td>' +
                        '<td>' + precio + '</td>' +
                        '<td>' + sub_total + '</td>' +
                        '<td>' + obs + '</td>' +
                        '<td>' + '<a class="borrar uk-icon-button" onclick="borrar();" uk-icon="icon: trash; ratio: 0.9"></a>' +
                        '</td>' +




                        '</tr>';

                    $('#Tabla tbody').append(htmlTags);

                    // document.getElementById("pecho_izq").value = null;
                    // document.getElementById("pecho_der").value = null;
                    // document.getElementById("manga_izq").value = null;
                    // document.getElementById("manga_der").value = null;
                    // document.getElementById("espalda").value = null;
                    // document.getElementById("Tallas").value = null;
                    // document.getElementById("Genero").value = null;
                    // document.getElementById("cantidad").value = null;
                    // document.getElementById("precio").value = null;
                    // document.getElementById("sub_total").value = null;
                    // document.getElementById("Observacion").value = null;


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
                    document.getElementById('sub_total').value = total;


                }

                function monto_taza() {
                    var total = 1;
                    var change = false; //
                    $(".monto_taza").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            total *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    total = (change) ? total : 0;
                    document.getElementById('sub_total_taza').value = total;


                }





                function Validacion_taza() {
                    var Tallas = document.getElementById("Tallas");
                    var Genero = document.getElementById("Genero");


                    if (Tallas.value == "2" || Tallas.value == "4" || Tallas.value == "6" || Tallas.value == "8" || Tallas.value ==
                        "10" || Tallas.value == "12" || Tallas.value == "14" || Tallas.value == "16" || Tallas.value == "18") {








                        Genero.style.visibility = "hidden";
                        Genero.value = "";

                    } else {
                        Genero.style.visibility = "visible";
                        Genero.value = "Caballero";




                    }


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





                function insertar_taza() {






                    var Insumo = document.getElementById("Insumos").value;
                    var cant = document.getElementById("cantidad_taza").value;
                    var sub_total = document.getElementById("sub_total_taza").value;
                    var obs = document.getElementById("Observacion_taza").value;
                    var precio = document.getElementById("precio_taza").value;


                    var htmlTags = '<tr>' +
                        '<td>' + '</td>' +
                        '<td>' + '</td>' +
                        '<td>' + '</td>' +
                        '<td>' + '</td>' +
                        '<td>' + '</td>' +
                        '<td>' + '</td>' +
                        '<td>' + Insumo + '</td>' +
                        '<td>' + cant + '</td>' +
                        '<td>' + precio + '</td>' +
                        '<td>' + sub_total + '</td>' +
                        '<td>' + obs + '</td>' +
                        '<td>' + '<button class=" uk-icon-button" uk-icon="icon: trash; ratio: 0.9"></button>' + '</td>' +



                        '</tr>';

                    $('#Tabla tbody').append(htmlTags);

                    calcular();

                    document.getElementById("Insumos").value = null;
                    document.getElementById("cantidad_taza").value = null;
                    document.getElementById("sub_total_taza").value = null;
                    document.getElementById("Observacion_taza").value = null;
                    document.getElementById("precio_taza").value = null;


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



                        var importe = parseFloat(columnas[8].textContent);

                        // mostramos el total por fila
                        // columnas[12].textContent = (cantidad * importe).toFixed(2);

                        total += importe;
                        console.log(total);
                    })
                    // mostramos la suma total
                    var filas = document.querySelectorAll("#Tabla tfoot tr td");
                    console.log(total);
                    document.getElementById("total").value = total;

                }
            </script>

            </table>
        </div>


        <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
            <div>

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label for="abono" class="uk-form-label" for="form-horizontal-text">Abono</label>
                        <div class="uk-form-controls">
                            <input id="abono" min="0" name="Abono" onchange="abonos();"
                                class="uk-input uk-form-width-large" value="{{ $edit->abono }}"
                                id="form-horizontal-text" type="number" placeholder="">

                            <script>
                                function abonos() {
                                    var sub_total = document.getElementById("total").value;
                                    var abono = document.getElementById("abono").value;
                                    var total = 0;

                                    total = sub_total - abono;

                                    console.log(sub_total, abono, total); //


                                    document.getElementById('saldo').value = total;



                                }
                            </script>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="saldo" class="uk-form-label" for="form-horizontal-text">Saldo</label>
                        <div class="uk-form-controls">
                            <input id="saldo" name="Saldo" value="{{ $edit->saldo }}"
                                class="uk-input uk-form-width-large" id="form-horizontal-text" type="text"
                                placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="banco" class="uk-form-label" for="form-horizontal-text">Metodo de pago</label>
                        <div class="uk-form-controls">

                            <select class="uk-select uk-form-width-large" id="Banco">


                                <option @if ($edit->Id_Metodo_de_Pago == '1') selected @endif value='1'>Efectivo</option>
                                <option @if ($edit->Id_Metodo_de_Pago == '2') selected @endif value='2'>Tarjeta</option>
                                <option @if ($edit->Id_Metodo_de_Pago == '3') selected @endif value='3'>Transferencia Bancaria</option>
                                <option @if ($edit->Id_Metodo_de_Pago == '4') selected @endif value='4'>Movil</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="estado" class="uk-form-label" for="form-horizontal-text">Estado del Pedido</label>
                        <div class="uk-form-controls">

                            <select class="uk-select uk-form-width-large" name="" id="estado">
                                <option @if ($edit->Estado == 'No Completado') selected @endif value="No Completado">No Completado</option>
                                <option @if ($edit->Estado == 'Completado') selected @endif value="Completado">Completado</option>

                            </select>
                        </div>

                    </div>


                </div>

            </div>
            <div>

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label for="autriza" class="uk-form-label" for="form-horizontal-text">Autoriza Pedido</label>
                        <div class="uk-form-controls">
                            <select class="uk-select uk-form-width-large" name="" id="autorizapedido">
                                <option value="">Seleccionar</option>
                            </select>
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
                                id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="recibo" class="uk-form-label" for="form-horizontal-text">N° Recibo</label>
                        <div class="uk-form-controls">
                            <input id="recibo" name="numero_recibo" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Seccion que contiene los botones de atrás y guardar-->
        <div class="uk-padding uk-background-muted uk-padding " style="text-align: center;">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                <a href="/menu/menu_facturacion" class="uk-button uk-button-primary "
                    style="margin-left: 100px">Atrás</a>
                <a id="guardar" class="uk-button uk-button-secondary" style="margin-left: 100px">Guardar</a>


            </div>

            <select class="uk-select" id="cat" disabled hidden>
                <option value='4'>Serigrafía</option>
            </select>
        </div>
    </form>
    {{-- script para ingresar datos en los formularios --}}
    {{-- formulario modal --}}
    <div class="uk-container">
        <div id="formdetalles" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div uk-height-viewport>
                    <div class="uk-width-1-2 uk-align-center">
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Cambiar Detalles</legend>
                            <div class="uk-margin">
                                <label>Numero de detalle</label>
                                <input class="uk-input" type="number" id="Id_trabajadores"
                                    placeholder="Numero de detalle" disabled>
                            </div>
                            <div class="uk-margin">
                                <label>Pecho izquierda</label>
                                <input class="uk-input" type="text" id="pechoizq1" placeholder="Manga Izquierda">
                            </div>
                            <div class="uk-margin">
                                <label>Pecho Derecha</label>
                                <input class="uk-input" type="text" id="pechoder1" placeholder="Pecho Derecho">
                            </div>
                            <div class="uk-margin">
                                <label>Manga Izquierda</label>
                                <input class="uk-input" type="text" id="mangaizq1" placeholder="Manga Izquierda">
                            </div>
                            <div class="uk-margin">
                                <label>Manga Derecha</label>
                                <input class="uk-input" type="text" id="mangader1" placeholder="Manga Derecha">
                            </div>
                            <div class="uk-margin">
                                <label>Espalda</label>
                                <input class="uk-input" type="text" id="espalda1" placeholder="Espalda">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" disabled type="text" value="{{ $edit->idmaestro }}"
                                    id="id" placeholder="nada">
                            </div>
                            <div class="uk-margin">
                                <label>Cantidad</label>
                                <input onchange="monto2();" type="number" class="uk-input monto2" type="text"
                                    id="cantidad1" placeholder="Cantidad">
                            </div>

                            <div class="uk-margin">
                                <label>Precio</label>
                                <input onchange="monto2();" type="number" class="uk-input monto2" type="text"
                                    id="precio1" placeholder="precio">
                            </div>
                            <div class="uk-margin">
                                <label>Observacion</label>
                                <input class="uk-input" type="text" id="observacioncambio"
                                    placeholder="Observacion">
                            </div>
                            <div class="uk-margin">
                                <label>Total</label>
                                <input class="uk-input" type="number" id="sub_total2" disabled>
                            </div>
                            <label>Talla</label>
                            <select class="uk-select" id="tallacambio">
                                <option value="1">2</option>
                                <option value="2">4</option>
                                <option value="3">6</option>
                                <option value="4">8</option>
                                <option value="5">10</option>
                                <option value="6">12</option>
                                <option value="7">14</option>
                                <option value="8">16</option>
                                <option value="9">18</option>
                                <option value="10">S Dama</option>
                                <option value="11">S Caballero</option>
                                <option value="12">M Dama</option>
                                <option value="13">M Caballero</option>
                                <option value="14">L Dama</option>
                                <option value="15">L Caballero</option>
                                <option value="16">XL Dama</option>
                                <option value="17">XL Caballero</option>
                                <option value="18">2XL Dama</option>
                                <option value="19">2XL Caballero</option>
                                <option value="20">3XL Dama</option>
                                <option value="21">3XL Caballero</option>
                                <option value="22">5XL Dama</option>
                                <option value="23">5xL Caballero</option>

                            </select>
                            <br>

                            <script>
                                function monto2() {
                                    var total = 1;
                                    var change = false; //
                                    $(".monto2").each(function() {
                                        if (!isNaN(parseFloat($(this).val()))) {
                                            change = true;
                                            total *= parseFloat($(this).val());
                                        }
                                    });
                                    // Si se modifico el valor , retornamos la multiplicación
                                    // caso contrario 0
                                    total = (change) ? total : 0;
                                    document.getElementById('sub_total2').value = total;


                                }
                            </script>
                    </div>
                    <div style="text-align: center">
                        <button class="uk-button uk-button-primary " id="guardar1"
                            class="uk-align-center">Guardar</button>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        let pedido = [];
        const arreglo = [];
        let detalle = [];
        cargarpedido();
        cargarusuario();
        cargarcliente();
        cargarpedido3();
        //cargar_detalle_pedido();
        cargardatosdetalle();



        $('#guardar').click(function(e) {

            guardarpedido();
            cargardatosdetalle();


            alert("Se agrego su orden");

        });

        $('#guardarnuevodetalle').click(function(e) {

            agregarotrodetalle();
            cargardatosdetalle();
            abonos();

        });


        $('#guardar1').click(function(e) {


            updatedetalle();

            cargardatosdetalle();
            alert("Se agrego su orden");

        });

        function peticionapi3(data, method, onSuccess) {


            let url = '/api/getcliente';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
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
                url += '/' + data.IdUsuario;
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

        function peticionapi4(data, method, onSuccess) {


            let url = '/api/getdetalles/' + {{ $edit->idmaestro }} + '';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
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

        function peticionapi5(data, method, onSuccess) {


            let url = '/api/updatedetalles';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.iddetalleordensu;
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

        function peticionapi6(data, method, onSuccess) {


            let url = '/api/actualizar';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.iddetalleordensu;
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

        function cargar_detalle_pedido() {

            peticionapi4({}, 'GET', function(res) {
                detalle = res;
                console.log(res);

            });


        }

        function cargarusuario() {

            peticionapi2({}, 'GET', function(res) {
                usuarios = res;
                console.log(res);
                let html = '<option value=""> Seleccionar </option>';
                var valuecliente = "{{ $edit->IdUsuario }}";

                res.forEach(usuarios => {
                    html += '<option   value="' + usuarios.IdUsuario + '">' +
                        usuarios.Primer_Nombre + ' ' +
                        usuarios.Segundo_Nombre + ' ' + usuarios.Primer_Apellido + ' ' + usuarios
                        .Segundo_Apellido +
                        '</option>'
                });
                $("#recibepedido").html(html);

                cambiarvalueUsuario(valuecliente);
            });
        }

        function cambiarvalueUsuario(val) {
            $("#recibepedido").val(val);
        }

        function cargardatosdetalle() {


            peticionapi4({}, 'GET', function(res) {
                detalle = res;
                console.log(detalle);
                let html = '';
                res.forEach(detalle => {
                    html +=
                        '<tr>' +

                        '<td>' + detalle.pecho_izquierdo + '</td>' +
                        '<td>' + detalle.pecho_derecho + '</td>' +
                        '<td>' + detalle.manga_izquierda + '</td>' +
                        '<td>' + detalle.manga_derecha + '</td>' +
                        '<td>' + detalle.espalda + '</td>' +
                        '<td>' + detalle.Descripcion + '</td>' +
                        '<td>' + detalle.Cantidad + '</td>' +
                        '<td>' + detalle.precio + '</td>' +
                        '<td>' + detalle.total + '</td>' +
                        '<td>' + detalle.observacion + '</td>' +
                        '<td>' +
                        '<a onclick="editar(' + detalle.iddetalleordensu +
                        ')"  class="uk-padding-small" uk-icon="pencil"></a> <span></> <a  action=""  onclick="eliminar(' +
                        detalle.iddetalleordensu + ');" class=" " uk-icon="trash"></a>' + '</td>' +

                        '</tr>'
                });
                $("#Tabladetalle").html(html);
                calcular();
            });










        }

        function editar(id) {
            UIkit.modal('#formdetalles').show();
            console.log(detalle);
            let datos = detalle.filter(detalle => {
                return detalle.iddetalleordensu == id;

            })
            console.log(id, datos);

            $("#Id_trabajadores").val(datos[0].iddetalleordensu),
                $("#pechoizq1").val(datos[0].pecho_izquierdo),
                $("#pechoder1").val(datos[0].pecho_derecho),
                $("#mangaizq1").val(datos[0].manga_izquierda),
                $("#mangader1").val(datos[0].manga_derecha),
                $("#espalda1").val(datos[0].espalda),
                $("#cantidad1").val(datos[0].Cantidad),
                $("#precio1").val(datos[0].precio),
                $("#observacioncambio").val(datos[0].observacion)
            $("#tallacambio").val(datos[0].IdInsumos)
            $("#sub_total2").val(datos[0].total)

        }

        function cargarcliente() {

            peticionapi3({}, 'GET', function(res) {
                cliente = res;
                console.log(res);

                var valuecliente = "{{ $edit->IdCliente }}";
                // console.log(valuecliente);

                let html = '<option > Seleccionar </option>';
                res.forEach(cliente => {
                    html += '<option   value="' + cliente.IdCliente + '">' +
                        cliente
                        .Primer_Nombre + ' ' +
                        cliente.Segundo_Nombre + ' ' + cliente.Primer_Apellido + ' ' + cliente
                        .Segundo_Apellido +
                        '</option>'
                });
                //console.log(valuecliente);

                $("#autorizapedido").html(html);
                $("#cliente").html(html);

                cambiarvalue(valuecliente);
            });
        }


        function cambiarvalue(val) {
            $("#cliente").val(val);
            $("#autorizapedido").val(val);
        }

        function peticionapi(data, method, onSucess) {
            let url = '/api/pedido';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,
                error(ext) {
                    let error = e.responseJSON.errors;
                    let msj = error[Object.keys(error)[0]][0];
                    alert(msj);
                },
                success(res) {

                }
            })
        }

        function guardarpedido() {


            let data = {

                idmaestro: $("#id").val(),
                IdCliente: $("#cliente").val(),
                IdUsuario: $("#recibepedido").val(),
                IdCategoria: $("#cat").val(),
                fecha: $("#fecha_fact").val(),
                notas: $("#notas").val(),
                total_costo: $("#total").val(),
                Saldo: $("#saldo").val(),
                abono: $("#abono").val(),
                codseguimiento: $("#abono").val(),
                estado: $("#estado").val(),

            };

            console.log(data);



            peticionapi(data, 'PUT', function(res) {
                alert('Guardado con exito')
            });
        }

        function cargarpedido() {
            peticionapi({}, 'GET', function(res) {
                console.log(res);

            });

        }

        function cargar_detalle() {

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



                var pechoizq_ = columnas[0].textContent;
                var pechoder_ = columnas[1].textContent;
                var mangaizq_ = columnas[2].textContent;
                var mangader_ = columnas[3].textContent;
                var espalda_ = columnas[4].textContent;
                var talla_ = columnas[5].textContent;
                var cantidad_ = parseFloat(columnas[6].textContent);
                var precio_ = parseFloat(columnas[7].textContent);
                var totaldetalle_ = parseFloat(columnas[8].textContent);
                var Observacion_ = columnas[9].textContent;


                var Talla_val = 0;
                if (talla_ == 2) {
                    Talla_val = 1;
                } else if (talla_ == 4) {
                    Talla_val = 2;
                } else
                if (talla_ == 6) {
                    Talla_val = 3;
                } else if (talla_ == 8) {
                    Talla_val = 4;
                } else if (talla_ == 10) {
                    Talla_val = 5;
                } else if (talla_ == 12) {
                    Talla_val = 6;
                } else if (talla_ == 14) {
                    Talla_val = 7;
                } else if (talla_ == 16) {
                    Talla_val = 8;
                } else if (talla_ == 18) {
                    Talla_val = 9;
                } else if (talla_ == "S Dama") {
                    Talla_val = 10;
                } else if (talla_ == "S Caballero") {
                    Talla_val = 11;
                } else if (talla_ == "M Dama") {
                    Talla_val = 12;
                } else if (talla_ == "M Caballero") {
                    Talla_val = 13;
                } else if (talla_ == "L Dama") {
                    Talla_val = 14;
                } else if (talla_ == "L Caballero") {
                    Talla_val = 15;
                } else if (talla_ == "XL Dama") {
                    Talla_val = 16;
                } else if (talla_ == "XL Caballero") {
                    Talla_val = 17;
                } else if (talla_ == "2XL Dama") {
                    Talla_val = 18;
                } else if (talla_ == "2XL Caballero") {
                    Talla_val = 19;
                } else if (talla_ == "3XL Dama") {
                    Talla_val = 20;
                } else if (talla_ == "3XL Caballero") {
                    Talla_val = 21;
                } else if (talla_ == "5XL Dama") {
                    Talla_val = 22;
                } else if (talla_ == "5XL Caballero") {
                    Talla_val = 23;
                } else if (talla_ == "Taza") {
                    Talla_val = 24;
                } else if (talla_ == "Lapicero") {
                    Talla_val = 25;
                } else if (talla_ == "Llavero") {
                    Talla_val = 26;
                } else {}





                pecho_izq[contador] = pechoizq_;
                pecho_der[contador] = pechoder_;
                manga_izq[contador] = mangaizq_;
                manga_der[contador] = mangader_;
                espalda[contador] = espalda_;
                talla[contador] = talla_;
                cantidad[contador] = cantidad_;
                precio[contador] = precio_;
                totaldetalle[contador] = totaldetalle_;
                Observacion[contador] = Observacion_;

                arreglo[contador] = {

                    IdCliente: $("#cliente").val(),
                    IdUsuario: $("#recibepedido").val(),
                    IdCategoria: $("#cat").val(),
                    fecha: $("#fecha_fact").val(),
                    notas: $("#notas").val(),
                    total_costo: $("#total").val(),
                    Saldo: $("#saldo").val(),
                    abono: $("#abono").val(),
                    codseguimiento: $("#tipo_de_pedido").val(),

                    IdInsumos: Talla_val,
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


                console.log(arreglo)




            })


            console.log(filas)






        }

        function cargarpedido3() {
            peticionapi6({}, 'GET', function(res) {
                console.log(res);

            });

        }

        function updatedetalle() {

            let datos = {
                iddetalleordensu: $("#Id_trabajadores").val(),
                pecho_izq: $("#pechoizq1").val(),
                pecho_der: $("#pechoder1").val(),
                manga_izq: $("#mangaizq1").val(),
                manga_der: $("#mangader1").val(),
                espalda: $("#espalda1").val(),
                cantidad: $("#cantidad1").val(),
                precio: $("#precio1").val(),
                observacion: $("#observacioncambio").val(),
                IdInsumos: $("#tallacambio").val(),
                total: $("#sub_total2").val(),

            };
            let method1 = (datos.iddetalleordensu == '' ? 'POST' : 'PUT');
            peticionapi6(datos, method1, function(res) {
                UIkit.modal('#formdetalles').hide();
                //cargardatosdetalle();

            });



        }

        function peticionapi7(data, method, onSuccess) {


            let url = '/api/actualizar';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.iddetalleordensu;
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

        function agregarotrodetalle() {

            let datos = {
                idmaestro: $("#id").val(),
                pecho_izq: $("#pecho_izq").val(),
                pecho_der: $("#pecho_der").val(),
                manga_izq: $("#manga_izq").val(),
                manga_der: $("#manga_der").val(),
                espalda: $("#espalda").val(),
                cantidad: $("#cantidad").val(),
                precio: $("#precio").val(),
                observacion: $("#Observacion").val(),
                IdInsumos: $("#tallacambio1").val(),
                total: $("#sub_total").val(),

            };
            console.log(datos);


            peticionapi6(datos, 'POST', function(res) {
                //    UIkit.modal('#formdetalles').hide();
                //cargardatosdetalle();
                limpiardatos();
            });
            limpiardatos();

        }

        function limpiardatos() {


            $("#pecho_izq").val(''),
                $("#pecho_der").val(''),
                $("#manga_izq").val(''),
                $("#manga_der").val(''),
                $("#espalda").val(''),
                $("#cantidad").val(''),
                $("#precio").val(''),
                $("#Observacion").val(''),
                $("#tallacambio1").val(''),
                $("#sub_total").val('');

        }

        function eliminar(id) {
            console.log(id);
            peticionapi6({
                iddetalleordensu: id
            }, 'DELETE', function(res) {
                cargardatosdetalle();
            });

        }
    </script>


</body>




</html>