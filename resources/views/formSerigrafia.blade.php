<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación | Serigrafía</title>
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
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Nav Bar-->
    <nav class="uk-navbar uk-navbar-container">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Serigrafía</span>
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
                    <li class="uk-active"> <a href="/menu/pedidos_impresion_digital"> Pedidos Impresión digital </a>
                    </li>
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
    <form method="">

        <div class="uk-padding uk-background-muted">

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div class="uk-grid-small" uk-grid>
                <div class="uk-inline uk-width-1-2 ">
                    <label for="fecha_fact">Fecha de Facturación</label>
                    <input id="fecha_fact" name="fecha_facturacion" type="date" class="uk-input">
                </div>
                <div class="uk-inline uk-width-1-2 ">
                    <label for="fecha_ent">Fecha de entrega</label>
                    <input id="fecha_ent" name="fecha_entrega" type="date" class="uk-input">
                </div>


                <div class="uk-inline uk-width-1-2">
                    <button class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></button>
                    <input id="cliente" name="nombre_cliente" class="uk-input" placeholder="Cliente">
                </div>

                <div class="uk-inline uk-width-1-2">
                    <input id="RUC" name="Num_ruc" class="uk-input" placeholder="N° RUC">
                </div>

                <div class="uk-inline uk-width-1-2">
                    <button class="uk-form-icon uk-form-icon-flip" href="" uk-icon="icon: search"></button>
                    <input class="uk-input" id="nombre" name="nombre_emp" placeholder="Nombre">
                </div>

                <div class="uk-inline uk-width-1-2">
                    <input id="telefono" name="Num_telefono" class="uk-input" placeholder="N° Telefono">
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
                            <input id="pecho_izq" name="pecho_izquierdo" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="pecho_der" class="uk-form-label" for="form-horizontal-text">Pecho Derecho</label>
                        <div class="uk-form-controls">
                            <input id="pecho_der" name="pecho_derecho" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="manga_izq" class="uk-form-label" for="form-horizontal-text">Manga Izquierda</label>
                        <div class="uk-form-controls">
                            <input id="manga_izq" name="manga_izquierda" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="manga_der" class="uk-form-label" for="form-horizontal-text">Manga Derecha</label>
                        <div class="uk-form-controls">
                            <input id="manga_der" name="manga_derecha" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="espalda" class="uk-form-label" for="form-horizontal-text">Espalda</label>
                        <div class="uk-form-controls">
                            <input id="espalda" name="espalda" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="tipo_producto" class="uk-form-label" for="form-horizontal-text">Tipo de
                            producto</label>
                        <div class="uk-form-controls">
                            <input id="tipo_producto" name="tipo_producto" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                        </div>
                    </div>

                </div>

            </div>
            <div>
                <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                    <div>
                        <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                        <div class="uk-grid-small" uk-grid>
                            <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
                                <thead>
                                    <tr>
                                        <th>Talla</th>
                                        <th>Caballero</th>
                                        <th>Dama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="tallas">S</td>
                                        <td><input id="talla_s_caballero" name="talla_s" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>
                                        <td><input id="talla_s_dama" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td id="tallam">M</td>
                                        <td><input id="talla_m_caballero" name="" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                        <td><input id="talla_m_dama" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td id="tallal">L</td>
                                        <td><input id="talla_l_caballero" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>
                                        <td><input id="talla_l_dama" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td id="tallaxl">XL</td>
                                        <td><input id="talla_xl_caballero" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                        <td><input id="talla_xl_dama" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td id="talla2xl">2XL</td>
                                        <td><input id="talla_2xl_caballero" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                        <td><input id="talla_2xl_dama" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td id="talla3xl">3XL</td>
                                        <td><input id="talla_3xl_caballero" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                        <td><input id="talla_3xl_dama" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td id="talla5xl">5XL</td>
                                        <td><input id="talla_5xl_caballero" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                        <td><input id="talla_5xl_dama" class="uk-input uk-form-width-xsmall" value="0" type="Number" placeholder="0"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                        <div class="uk-grid-small" uk-grid>
                            <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
                                <thead>
                                    <tr>
                                        <th>Talla Juvenil</th>
                                        <th>Cantidad</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="18">18</td>
                                        <td><input id="talla_18" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="16">16</td>
                                        <td><input id="talla_16" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="14">14</td>
                                        <td><input id="talla_14" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="12">12</td>
                                        <td><input id="talla_12" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="10">10</td>
                                        <td><input id="talla_10" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="8">8</td>
                                        <td><input id="talla_8" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="6">6</td>
                                        <td><input id="talla_6" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="4">4</td>
                                        <td><input id="talla_4" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                    <tr>
                                        <td id="2">2</td>
                                        <td><input id="talla_2" class="uk-input uk-form-width-xsmall" type="Number" value="0" placeholder="0"></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="uk-background-muted uk-padding">
            <h1 class="uk-text-center">Notas</h1>
            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div>

                <textarea rows="5" name="notas" id="notas" class="uk-textarea" placeholder="Notas"></textarea>


                <div class="uk-container">

                    <!--Tablas de precios-->
                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th>Cantidad</th>
                                <th>Especificaciones</th>
                                <th>Precio Unitario</th>
                                <th>Precio</th>

                            </tr>

                        </thead>
                        <tbody id="tabladetalle">
                            <tr>
                                <!--Agregar correcta impresión de datos-->
                                <td><input id="cantidad_pedido_1" min="0" oninput="calculo_pedido1();" placeholder="0" value="0" class="uk-input calculo_pedido1" type="number"></td>
                                <td><input id="especificaciones_pedido_1" class="uk-input" type="text"></td>
                                <td><input id="precio_und_pedido_1" min="0" oninput="calculo_pedido1();" placeholder="0" value="0" class="uk-input calculo_pedido1" type="number"></td>
                                <td><input id="precio_pedido_1" onchange="pedido();" onclick="pedido();" placeholder="0" value="0" min="0" class="uk-input pedido" type="number"></td>

                            </tr>
                            <tr>

                                <td><input id="cantidad_pedido_2" min="0" oninput="calculo_pedido2();" placeholder="0" value="0" class="uk-input calculo_pedido2" type="number"></td>
                                <td><input id="especificaciones_pedido_2" class="uk-input" type="text"></td>
                                <td><input id="precio_und_pedido_2" min="0" oninput="calculo_pedido2();" placeholder="0" value="0" class="uk-input calculo_pedido2" type="number"></td>
                                <td><input id="precio_pedido_2" onchange="pedido();" onclick="pedido();" placeholder="0" value="0" min="0" class="uk-input pedido" type="number"></td>

                            </tr>
                            <tr>

                                <td><input id="cantidad_pedido_3" min="0" oninput="calculo_pedido3();" placeholder="0" value="0" class="uk-input calculo_pedido3" type="number"></td>
                                <td><input id="especificaciones_pedido_3" class="uk-input" type="text"></td>
                                <td><input id="precio_und_pedido_3" min="0" oninput="calculo_pedido3();" placeholder="0" value="0" class="uk-input calculo_pedido3" type="number"></td>
                                <td><input id="precio_pedido_3" onchange="pedido();" onclick="pedido();" placeholder="0" value="0" min="0" class="uk-input pedido" type="number"></td>

                            </tr>
                            <tr>

                                <td><input id="cantidad_pedido_4" min="0" oninput="calculo_pedido4();" placeholder="0" value="0" class="uk-input calculo_pedido4" type="number"></td>
                                <td><input id="especificaciones_pedido_4" class="uk-input" type="text"></td>
                                <td><input id="precio_und_pedido_4" min="0" oninput="calculo_pedido4();" placeholder="0" value="0" class="uk-input calculo_pedido4" type="number"></td>
                                <td><input id="precio_pedido_4" onchange="pedido();" onclick="pedido();" placeholder="0" value="0" min="0" class="uk-input pedido" type="number"></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="uk-div" style="text-align: center; ">
                                        <h1 class="uk-label" for="total_pedido">Total</h1>
                                    </div>
                                </td>
                                <td><input id="total_pedido" type="number" placeholder="0" value="0" class="uk-input" disabled></td>
                            </tr>
                        </tbody>


                        <script type="text/javascript">
                            function pedido() {

                                var total_pedido = 0;
                                var change = false; //
                                $(".pedido").each(function() {
                                    if (!isNaN(parseFloat($(this).val()))) {
                                        change = true;
                                        total_pedido += parseFloat($(this).val());
                                    }
                                });
                                // Si se modifico el valor , retornamos la multiplicación
                                // caso contrario 0
                                total_pedido = (change) ? total_pedido : 0;
                                document.getElementById('total_pedido').value = total_pedido;



                            }

                            function calculo_pedido1() {

                                var calculo_total_pedido1 = 1;
                                var change = false; //
                                $(".calculo_pedido1").each(function() {
                                    if (!isNaN(parseFloat($(this).val()))) {
                                        change = true;
                                        calculo_total_pedido1 *= parseFloat($(this).val());
                                    }
                                });
                                // Si se modifico el valor , retornamos la multiplicación
                                // caso contrario 0
                                calculo_total_pedido1 = (change) ? calculo_total_pedido1 : 0;
                                document.getElementById('precio_pedido_1').value = calculo_total_pedido1;


                            }

                            function calculo_pedido2() {

                                var calculo_total_pedido2 = 1;
                                var change = false; //
                                $(".calculo_pedido2").each(function() {
                                    if (!isNaN(parseFloat($(this).val()))) {
                                        change = true;
                                        calculo_total_pedido2 *= parseFloat($(this).val());
                                    }
                                });
                                // Si se modifico el valor , retornamos la multiplicación
                                // caso contrario 0
                                calculo_total_pedido2 = (change) ? calculo_total_pedido2 : 0;
                                document.getElementById('precio_pedido_2').value = calculo_total_pedido2;


                            }

                            function calculo_pedido3() {

                                var calculo_total_pedido3 = 1;
                                var change = false; //
                                $(".calculo_pedido3").each(function() {
                                    if (!isNaN(parseFloat($(this).val()))) {
                                        change = true;
                                        calculo_total_pedido3 *= parseFloat($(this).val());
                                    }
                                });
                                // Si se modifico el valor , retornamos la multiplicación
                                // caso contrario 0
                                calculo_total_pedido3 = (change) ? calculo_total_pedido3 : 0;
                                document.getElementById('precio_pedido_3').value = calculo_total_pedido3;


                            }

                            function calculo_pedido4() {

                                var calculo_total_pedido4 = 1;
                                var change = false; //
                                $(".calculo_pedido4").each(function() {
                                    if (!isNaN(parseFloat($(this).val()))) {
                                        change = true;
                                        calculo_total_pedido4 *= parseFloat($(this).val());
                                    }
                                });
                                // Si se modifico el valor , retornamos la multiplicación
                                // caso contrario 0
                                calculo_total_pedido4 = (change) ? calculo_total_pedido4 : 0;
                                document.getElementById('precio_pedido_4').value = calculo_total_pedido4;


                            }

                        </script>
                    </table>
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
                            <input id="abono" name="Abono" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
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
                    <div class="uk-margin">
                        <label for="banco" class="uk-form-label" for="form-horizontal-text">Banco</label>
                        <select class="uk-select uk-form-width-large" id="Banco">
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
        </div>
        <!-- Seccion que contiene los botones de atrás y guardar-->
        <div class="uk-padding uk-background-muted uk-padding " style="text-align: center;">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                <a href="/menu/menu_facturacion" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
                <a onclick="return confirm('¿Está seguro que desea continuar?')" id="guardar" class="uk-button uk-button-secondary" style="margin-left: 100px">Guardar</a>


            </div>
            <select class="uk-select" id="tipo_de_pedido" disabled hidden>
                <option value='Serigrafía'>serigrafia</option>
            </select>
        </div>
        </div>
    </form>

</body>
<script>
    let detallesdepedido = [];

    cargarpedido();
    cargarpedido2();
    $('#guardar').click(function(res) {
        guardarpedido();
        guardarpedido2();
        alert("Se agrego su orden");

    });

    function peticionapi(data, method, onSucess) {
        let url = '/api/detalledelpedido';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.IDdetalledelpedido;
        }
        $.ajax({
            url: url
            , method: method
            , data: data
            , error(ext) {
                let error = e.responseJSON.errors;
                let msj = error[Object.keys(error)[0]][0];
                alert(msj);
            }
            , success(res) {

            }
        })
    }

    function peticionapi2(data, method, onSucess) {
        let url = '/api/pedido';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.IDpedido;
        }
        $.ajax({
            url: url
            , method: method
            , data: data
            , error(ext) {
                let error = e.responseJSON.errors;
                let msj = error[Object.keys(error)[0]][0];
                alert(msj);
            }
            , success(res) {

            }
        })
    }

    function guardarpedido2() {

        let data = {
            fechadelpedido: $("#fecha_fact").val(),

        };
        peticionapi2(data, 'POST', function(res) {
            alert('Guardado con exito')
        });
    }

    function guardarpedido() {
        let data = {
            Tipo_de_pedido: $("#tipo_de_pedido").val()
            , tipo_de_producto: $("#tipo_producto").val()
            , pechoizquierdo: $("#pecho_izq").val()
            , pechoderecho: $("#pecho_der").val()
            , mangaizquierda: $("#manga_izq").val()
            , mangaderecha: $("#manga_der").val()
            , espalda: $("#espalda").val()
            , tallasCaballero: $("#talla_s_caballero").val()
            , tallasDama: $("#talla_s_dama").val()
            , tallamCaballero: $("#talla_m_caballero").val()
            , tallamDama: $("#talla_m_dama").val()
            , tallalCaballero: $("#talla_l_caballero").val()
            , tallalDama: $("#talla_l_dama").val()
            , tallaxlCaballero: $("#talla_xl_caballero").val()
            , tallaxlDama: $("#talla_xl_dama").val()
            , talla2xlCaballero: $("#talla_2xl_caballero").val()
            , talla2xlDama: $("#talla_2xl_dama").val()
            , talla3xlCaballero: $("#talla_3xl_caballero").val()
            , talla3xlDama: $("#talla_3xl_dama").val()
            , talla5xlCaballero: $("#talla_5xl_caballero").val()
            , talla5xlDama: $("#talla_5xl_dama").val()
            , talla18: $("#talla_18").val()
            , talla16: $("#talla_16").val()
            , talla14: $("#talla_14").val()
            , talla12: $("#talla_12").val()
            , talla10: $("#talla_10").val()
            , talla8: $("#talla_8").val()
            , talla6: $("#talla_6").val()
            , talla4: $("#talla_4").val()
            , talla2: $("#talla_2").val()
            , preciounitario1: $("#precio_und_pedido_1").val()
            , preciounitario2: $("#precio_und_pedido_2").val()
            , preciounitario3: $("#precio_und_pedido_3").val()
            , preciounitario4: $("#precio_und_pedido_4").val()
            , cantidadespe1: $("#cantidad_pedido_1").val()
            , cantidadespe2: $("#cantidad_pedido_2").val()
            , cantidadespe3: $("#cantidad_pedido_3").val()
            , cantidadespe4: $("#cantidad_pedido_4").val()
            , especificaciones1: $("#especifaciones_pedido_1").val()
            , especificaciones2: $("#especifaciones_pedido_2").val()
            , especificaciones3: $("#especifaciones_pedido_3").val()
            , especificaciones4: $("#especifaciones_pedido_4").val()
            , preciototal1: $("#precio_pedido_1").val()
            , preciototal2: $("#precio_pedido_2").val()
            , preciototal3: $("#precio_pedido_3").val()
            , preciototal4: $("#precio_pedido_4").val()
            , cantidadtotal: $("#total_pedido").val()
            , nota: $("#notas").val()
            , Nombredelcomprador: $("#nombre").val()
            , Telefono: $("#telefono").val()
            , NumeroRuc: $("#Ruc").val()
            , fechadepedido: $("#fecha_fact").val()
        , };
        peticionapi(data, 'POST', function(res) {
            alert('Guardado con exito')
        });
    }

    function cargarpedido() {
        peticionapi({}, 'GET', function(res) {
            console.log(res);
            alert('respuesta satisfactoria');
        });

    }

    function cargarpedido2() {
        peticionapi2({}, 'GET', function(res) {
            console.log(res);
            alert('respuesta satisfactoria');
        });

    }

</script>

</html>
