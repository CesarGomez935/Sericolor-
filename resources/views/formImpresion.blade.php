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
    <nav class="uk-navbar uk-navbar-container uk-margin">
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

        <div class="uk-padding uk-background-muted">

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div class="uk-grid-small" uk-grid>

                <div class="uk-inline uk-width-1-2 ">
                    <label for="fecha_fact">Fecha de Facturación</label>
                    <input id="fecha_fact" name="fecha_factiracion" type="date" class="uk-input">
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
                        <td><input id="alto_1" oninput="area1();" class="uk-input area1" min="0" type="number" placeholder="0"></td>
                        <td><input id="ancho_1" oninput="area1();" class="uk-input area1" min="0" type="number" placeholder="0"></td>
                        <td><input id="mt2_1" oninput="costo1();" class="uk-input costo1" min="0" type="number" placeholder="0"></td>
                        <td><input id="costo_1" oninput="costo1();" class="uk-input costo1" min="0" type="number" placeholder="0"></td>
                        <td><input id="precio_mt2_1" oninput="multi1();" class="uk-input monto1" min="0" type="number" placeholder="0"></td>
                        <td><input id="cantidad_1" oninput="multi1();" class="uk-input monto1" min="0" type="number" placeholder="0"></td>
                        <td><input id="total_1" name="total_1" class="uk-input" min="0" value="" type="number" placeholder="0"></td>
                    </tr>
                    <tr>
                        <td><input id="alto_2" oninput="area2();" class="uk-input area2" min="0" type="number" placeholder="0"></td>
                        <td><input id="ancho_2" oninput="area2();" class="uk-input area2" min="0" type="number" placeholder="0"></td>
                        <td><input id="mt2_2" oninput="costo2();" class="uk-input costo2" min="0" type="number" placeholder="0"></td>
                        <td><input id="costo_2" oninput="costo2();" class="uk-input costo2" min="0" type="number" placeholder="0"></td>
                        <td><input id="precio_mt2_2" oninput="multi2();" class="uk-input monto2" min="0" type="number" placeholder="0"></td>
                        <td><input id="cantidad_2" oninput="multi2();" class="uk-input monto2" min="0" type="number" placeholder="0"></td>
                        <td><input id="total_2" name="total_2" class="uk-input" min="0" value="" type="number" placeholder="0"></td>
                    </tr>
                    <tr>
                        <td><input id="alto_3" oninput="area3();" class="uk-input area3" min="0" type="number" placeholder="0"></td>
                        <td><input id="ancho_3" oninput="area3();" class="uk-input area3" min="0" type="number" placeholder="0"></td>
                        <td><input id="mt2_3" oninput="costo3();" class="uk-input costo3" min="0" type="number" placeholder="0"></td>
                        <td><input id="costo_3" oninput="costo3();" class="uk-input costo3" min="0" type="number" placeholder="0"></td>
                        <td><input id="precio_mt2_3" oninput="multi3();" class="uk-input monto3" min="0" type="number" placeholder="0"></td>
                        <td><input id="cantidad_3" oninput="multi3();" class="uk-input monto3" min="0" type="number" placeholder="0"></td>
                        <td><input id="total_3" name="total_1" class="uk-input" min="0" value="" type="number" placeholder="0"></td>
                    </tr>
                    <tr>

                        <td><input id="alto_4" oninput="area4();" class="uk-input area4" min="0" type="number" placeholder="0"></td>
                        <td><input id="ancho_4" oninput="area4();" class="uk-input area4" min="0" type="number" placeholder="0"></td>
                        <td><input id="mt2_4" oninput="costo4();" class="uk-input costo4" min="0" type="number" placeholder="0"></td>
                        <td><input id="costo_4" oninput="costo4();" class="uk-input costo4" min="0" type="number" placeholder="0"></td>
                        <td><input id="precio_mt2_4" oninput="multi4();" class="uk-input monto4" min="0" type="number" placeholder="0" </td>
                        <td><input id="cantidad_4" oninput="multi4();" class="uk-input monto4" min="0" type="number" placeholder="0"></td>
                        <td><input id="total_4" name="total_4" class="uk-input" min="0" value="" type="number" placeholder="0"></td>
                    </tr>

                </tbody>
            </table>

            <script type="text/javascript">
                function area1() {
                    var mt2_1 = 1;
                    var change = false; //
                    $(".area1").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            mt2_1 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    mt2_1 = (change) ? mt2_1 : 0;
                    document.getElementById('mt2_1').value = mt2_1;


                }

                function costo1() {
                    var costo1 = 1;
                    var change = false; //
                    $(".costo1").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            costo1 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    costo1 = (change) ? costo1 : 0;
                    document.getElementById('precio_mt2_1').value = costo1;


                }

                function area2() {
                    var mt2_2 = 1;
                    var change = false; //
                    $(".area2").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            mt2_2 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    mt2_2 = (change) ? mt2_2 : 0;
                    document.getElementById('mt2_2').value = mt2_2;


                }

                function costo2() {
                    var costo2 = 1;
                    var change = false; //
                    $(".costo2").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            costo2 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    costo2 = (change) ? costo2 : 0;
                    document.getElementById('precio_mt2_2').value = costo2;


                }

                function area3() {
                    var mt2_3 = 1;
                    var change = false; //
                    $(".area3").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            mt2_3 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    mt2_3 = (change) ? mt2_3 : 0;
                    document.getElementById('mt2_3').value = mt2_3;


                }

                function costo3() {
                    var costo3 = 1;
                    var change = false; //
                    $(".costo3").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            costo3 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    costo3 = (change) ? costo3 : 0;
                    document.getElementById('precio_mt2_3').value = costo3;


                }

                function area4() {
                    var mt2_4 = 1;
                    var change = false; //
                    $(".area4").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            mt2_4 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    mt2_4 = (change) ? mt2_4 : 0;
                    document.getElementById('mt2_4').value = mt2_4;


                }

                function costo4() {
                    var costo4 = 1;
                    var change = false; //
                    $(".costo4").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            costo4 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    costo4 = (change) ? costo4 : 0;
                    document.getElementById('precio_mt2_4').value = costo4;


                }



                function multi1() {
                    var total1 = 1;
                    var change = false; //
                    $(".monto1").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            total1 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    total1 = (change) ? total1 : 0;
                    document.getElementById('total_1').value = total1;


                }

                function multi2() {
                    var total2 = 1;
                    var change = false; //
                    $(".monto2").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            total2 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    total2 = (change) ? total2 : 0;
                    document.getElementById('total_2').value = total2;


                }

                function multi3() {
                    var total3 = 1;
                    var change = false; //
                    $(".monto3").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            total3 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    total3 = (change) ? total3 : 0;
                    document.getElementById('total_3').value = total3;


                }

                function multi4() {
                    var total4 = 1;
                    var change = false; //
                    $(".monto4").each(function() {
                        if (!isNaN(parseFloat($(this).val()))) {
                            change = true;
                            total4 *= parseFloat($(this).val());
                        }
                    });
                    // Si se modifico el valor , retornamos la multiplicación
                    // caso contrario 0
                    total4 = (change) ? total4 : 0;
                    document.getElementById('total_4').value = total4;


                }
            </script>
        </div>



        <div class="uk-background-muted uk-padding">
            <h1 class="uk-text-center">Notas</h1>

            <div>

                <textarea id="notas" name="Notas" class="uk-textarea" placeholder="Notas"></textarea>

                <table class="uk-table uk-table-hover uk-table-divider">
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
                                    <td><input id="cantidad_pedido_1" min="0" oninput="calculo_pedido1();" placeholder="0" class="uk-input calculo_pedido1" type="number"></td>
                                    <td><input id="especificaciones_pedido_1" class="uk-input" type="text"></td>
                                    <td><input id="precio_und_pedido_1" min="0" oninput="calculo_pedido1();" placeholder="0" class="uk-input calculo_pedido1" type="number"></td>
                                    <td><input id="precio_pedido_1" onchange="pedido();" onclick="pedido();" placeholder="0" min="0" class="uk-input pedido" type="number"></td>

                                </tr>
                                <tr>

                                    <td><input id="cantidad_pedido_2" min="0" oninput="calculo_pedido2();" placeholder="0" class="uk-input calculo_pedido2" type="number"></td>
                                    <td><input id="especificaciones_pedido_2" class="uk-input" type="text"></td>
                                    <td><input id="precio_und_pedido_2" min="0" oninput="calculo_pedido2();" placeholder="0" class="uk-input calculo_pedido2" type="number"></td>
                                    <td><input id="precio_pedido_2" onchange="pedido();" onclick="pedido();" placeholder="0" min="0" class="uk-input pedido" type="number"></td>

                                </tr>
                                <tr>

                                    <td><input id="cantidad_pedido_3" min="0" oninput="calculo_pedido3();" placeholder="0" class="uk-input calculo_pedido3" type="number"></td>
                                    <td><input id="especificaciones_pedido_3" class="uk-input" type="text"></td>
                                    <td><input id="precio_und_pedido_3" min="0" oninput="calculo_pedido3();" placeholder="0" class="uk-input calculo_pedido3" type="number"></td>
                                    <td><input id="precio_pedido_3" onchange="pedido();" onclick="pedido();" placeholder="0" min="0" class="uk-input pedido" type="number"></td>

                                </tr>
                                <tr>


                                    <td><input id="cantidad_pedido_4" min="0" oninput="calculo_pedido4();" placeholder="0" class="uk-input calculo_pedido4" type="number"></td>
                                    <td><input id="especificaciones_pedido_4" class="uk-input" type="text"></td>
                                    <td><input id="precio_und_pedido_4" min="0" oninput="calculo_pedido4();" placeholder="0" class="uk-input calculo_pedido4" type="number"></td>
                                    <td><input id="precio_pedido_4" onchange="pedido();" onclick="pedido();" placeholder="0" min="0" class="uk-input pedido" type="number"></td>



                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="uk-div" style="text-align: center; ">
                                            <h1 class="uk-label" for="total_pedido">Total</h1>
                                        </div>
                                    </td>
                                    <td><input id="total_pedido" type="number" class="uk-input" disabled></td>
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
                </table>

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
                        <div class="uk-form-controls">
                            <input id="banco" name="Banco" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
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

        <!-- Botones atrás y actualizar-->
        <div class="uk-padding uk-background-muted uk-padding  ">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                <a href="/menu/menu_facturacion" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
                <button type="submit" class="uk-button uk-button-secondary" style="margin-left: 100px">Guardar</button>

            </div>
        </div>

    </form>
</body>
<script>
    let detallesdepedido = [];

    cargarpedido();

    $('#guardar').click(function(res) {
        guardarpedido();

    });

    function peticionapi(data, method, onSucess) {
        let url = '/api/detalledelpedido';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.IDdetalledelpedido;
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
            alto1:$("#alto_1").val(),
            ancho1:$("#ancho_1").val(),
            mtscuadrados1:$("#mt2_1").val(),
            precioxmtscuadrados1:$("#").val(),
            costo1:$("#").val(),
            cantidad1:$("#").val(),
            total1:$("#").val(),
            alto2:$("#alto_1").val(),
            ancho2:$("#ancho_1").val(),
            mtscuadrados2:$("#mt2_1").val(),
            precioxmtscuadrados2:$("#").val(),
            costo2:$("#").val(),
            cantidad2:$("#").val(),
            total2:$("#").val(),
            alto3:$("#alto_1").val(),
            ancho3:$("#ancho_1").val(),
            mtscuadrados3:$("#mt2_1").val(),
            precioxmtscuadrados3:$("#").val(),
            costo3:$("#").val(),
            cantidad3:$("#").val(),
            total3:$("#").val(),
            alto4:$("#alto_1").val(),
            ancho4:$("#ancho_1").val(),
            mtscuadrados4:$("#mt2_1").val(),
            precioxmtscuadrados4:$("#").val(),
            costo4:$("#").val(),
            cantidad4:$("#").val(),
            total4:$("#").val(),





        };
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
</script>

</html>