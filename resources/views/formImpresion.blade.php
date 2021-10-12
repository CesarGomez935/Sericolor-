<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación | Impresión Digital</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>

    <!-- NavBar-->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Impresión Digital</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- Off canvas, Elemento desplegable UiKit -->
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
                    <li class="uk-active"> <a href="/menu/pedidos_impresion_digital"> Pedidos Impresión digital </a></li>
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


    <form action="" method="post">
        <div>

            <div class="uk-padding uk-background-muted">

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_fact">Fecha de Facturación</label>
                        <input id="fecha_fact" name="fecha_facturacion" type="date" class="uk-input">
                    </div>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_ent">Nombre del cliente</label>
                        <input id="cliente" name="nombre_cliente" class="uk-input" placeholder="Cliente">
                    </div>
                </div>
            </div>





            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->

            <div class="uk-div uk-background-muted uk-padding">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

                </script>

                <h1 class="uk-text-center">Especificaciones</h1>
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
                            <td><input id="alto" oninput="area();" class="uk-input area" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="ancho" oninput="area();" class="uk-input area" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="mt2" oninput="costo();" class="uk-input costo" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="costo" oninput="costo();" class="uk-input costo" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="precio_mt2" oninput="multi();" class="uk-input monto" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="cantidad" oninput="multi();" class="uk-input monto" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="sub_total" name="sub_total" class="uk-input" min="0" value="" type="number" placeholder="0" value="0"> </td>
                            <td> <button class=" uk-icon-button" uk-icon="icon: plus; ratio: 1.0" onclick="insertar();"></button></td>

                        </tr>

                    </tbody>
                </table>

                <script type="text/javascript">
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
                        document.getElementById('mt2').value = mt2;


                    }

                    function costo() {
                        var costo = 1;
                        var change = false; //
                        $(".costo").each(function() {
                            if (!isNaN(parseFloat($(this).val()))) {
                                change = true;
                                costo *= parseFloat($(this).val());
                            }
                        });
                        // Si se modifico el valor , retornamos la multiplicación
                        // caso contrario 0
                        costo = (change) ? costo : 0;
                        document.getElementById('precio_mt2').value = costo;


                    }


                    function multi() {
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

                </script>

                <div class="uk-background-muted uk-padding">

                    <div class="uk-grid-small" uk-grid>
                        <table id="Tabla" class="uk-table uk-table-hover uk-table-divider uk-table-small">
                            <thead>
                                <tr>

                                    <th>m²</th>
                                    <th>Cantidad</th>
                                    <th>Sub-Total</th>
                                    <th>Observacion</th>
                                    <th>Opciones</th>


                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>

                                    <td colspan="2"><label for="Total" class="uk-label">Total</label></td>
                                    <td><input class="uk-form-width-xsmall saldo" disabled id="total"></input></td>



                                </tr>
                            </tfoot>

                        </table>
                    </div>
                    <br>
                    <script type="text/javascript">
                        function Validacion() {
                            var Tallas = document.getElementById("Tallas");
                            var Genero = document.getElementById("Genero");


                            if (Tallas.value == "2" || Tallas.value == "4" || Tallas.value == "6" || Tallas.value == "8" || Tallas.value == "10" || Tallas.value == "12" || Tallas.value == "14" || Tallas.value == "16" || Tallas.value == "18") {








                                Genero.style.visibility = "hidden";
                                Genero.value = "";

                            } else {
                                Genero.style.visibility = "visible";
                                Genero.value = "Caballero";




                            }

                        }


                        function insertar() {


                            var mt2 = document.getElementById("mt2").value;
                            var cant = document.getElementById("cantidad").value;
                            var sub_total = document.getElementById("sub_total").value;




                            var htmlTags = '<tr>' +
                                '<td>' + mt2 + '</td>' +
                                '<td>' + cant + '</td>' +
                                '<td>' + sub_total + '</td>' +
                                '<td>' + '<textarea type="number" class="uk-input uk-form-width-large "></textarea>' + '</td>' +
                                '<td>' + '<button class=" uk-icon-button" uk-icon="icon: trash; ratio: 0.9"></button>' + '</td>' +



                                '</tr>';

                            $('#Tabla tbody').append(htmlTags);

                            calcular();

                            document.getElementById("mt2").value = null;
                            document.getElementById("cantidad").value = null;
                            document.getElementById("sub_total").value = null;
                            document.getElementById("alto").value = null;
                            document.getElementById("ancho").value = null;
                            document.getElementById("costo").value = null;
                            document.getElementById("precio_mt2").value = null;






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



                                var importe = parseFloat(columnas[2].textContent);

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

            </div>



            <div class="uk-background-muted uk-padding">
                <h1 class="uk-text-center">Notas</h1>

                <div>

                    <textarea id="notas" name="Notas" class="uk-textarea" placeholder="Notas"></textarea>



                </div>
            </div>

            <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
                <div>


                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <div class="uk-form-horizontal uk-margin-large">

                        <div class="uk-margin">
                            <label for="abono" class="uk-form-label" for="form-horizontal-text">Abono</label>
                            <div class="uk-form-controls">
                                <input id="abono" min="0" name="Abono" onchange="abono();" class="uk-input uk-form-width-large" id="form-horizontal-text" type="number" placeholder="">

                                <script>
                                    function abono() {
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
                                <input id="saldo" name="Saldo" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">

                            <div class="uk-form-controls">

                                <input class="uk-checkbox" id="form-horizontal-text" type="checkbox"> Transferencia</label>
                            </div>
                        </div>
                        <div class="uk-margin uk-form-small">
                            <label for="banco" class="uk-form-label" for="form-horizontal-text">Banco</label>
                            <select class="uk-select uk-form-width-medium" id="Banco">


                                <option value='BAC'>BAC</option>
                                <option value='BDF'>BDF</option>
                                <option value='BANPRO'>BANPRO</option>
                                <option value='BANCENTRO'>LAFISE BANCENTRO</option>
                            </select>
                        </div>



                    </div>

                </div>
                <div>

                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <div class="uk-form-horizontal uk-margin-large">

                        <div class="uk-margin">
                            <label for="autriza" class="uk-form-label" for="form-horizontal-text">Autoriza Pedido</label>
                            <div class="uk-form-controls">
                                <input id="autoriza" name="Autoriza_pedido" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="recibe" class="uk-form-label" for="form-horizontal-text">Recibe Pedido</label>
                            <div class="uk-form-controls">
                                <input id="recibe" name="recibe_pedido" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="factura" class="uk-form-label" for="form-horizontal-text">N° Factura</label>
                            <div class="uk-form-controls">
                                <input id="factura" name="num_factura" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="recibo" class="uk-form-label" for="form-horizontal-text">N° Recibo</label>
                            <div class="uk-form-controls">
                                <input id="recibo" name="numero_recibo" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>


                </div>

                <select class="uk-select" id="tipo_de_pedido" disabled hidden>
                    <option value='Impresion_Digital'>Impresion_Digital</option>
                </select>


            </div>

            <!-- Botones atrás y actualizar-->
            <div class="uk-padding uk-background-muted uk-padding  ">
                <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                    <a href="/menu/menu_facturacion" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
                    <a onclick="return confirm('¿Está seguro que desea continuar?')" type="submit" id="guardar" href="/menu/menu_facturacion/form_impresion_digital" class="uk-button uk-button-secondary" style="margin-left: 100px">Guardar</a>


                </div>
            </div>

        </div>

    </form>

</body>


</html>
