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


    <form action="post">

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
            <h1 class="uk-text-center">Especificaciones</h1>
            <table class="uk-table uk-table-divider">
                <thead>
                    <tr>
                        <th>Alto</th>
                        <th>Ancho</th>
                        <th>Precio por metro cuadrado</th>
                        <th>cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="alto_1" class="uk-input" min="0" type="number"></td>
                        <td><input id="ancho_1" class="uk-input" min="0" type="number"></td>
                        <td><input id="precio_mt2_1" class="uk-input" min="0" type="number"></td>
                        <td><input id="cantidad_1" class="uk-input" min="0" type="number"></td>
                        <td><input id="total_1" class="uk-input" min="0" type="number"></td>
                    </tr>
                    <tr>
                        <td><input id="alto_2" class="uk-input" min="0" type="number"></td>
                        <td><input id="ancho_2" class="uk-input" min="0" type="number"></td>
                        <td><input id="precio_mt2_2" class="uk-input" min="0" type="number"></td>
                        <td><input id="cantidad_2" class="uk-input" min="0" type="number"></td>
                        <td><input id="total_2" class="uk-input" min="0" type="number"></td>
                    </tr>
                    <tr>
                        <td><input id="alto_3" class="uk-input" min="0" type="number"></td>
                        <td><input id="ancho_3" class="uk-input" min="0" type="number"></td>
                        <td><input id="precio_mt2_3" class="uk-input" min="0" type="number"></td>
                        <td><input id="cantidad_3" class="uk-input" min="0" type="number"></td>
                        <td><input id="total_3" class="uk-input" min="0" type="number"></td>
                    </tr>
                    <tr>
                    
                        <td><input id="alto_4" class="uk-input" min="0" type="number"></td>
                        <td><input id="ancho_4" class="uk-input" min="0" type="number"></td>
                        <td><input id="precio_mt2_4" class="uk-input" min="0" type="number"></td>
                        <td><input id="cantidad_4" class="uk-input" min="0" type="number"></td>
                        <td><input id="total_4" class="uk-input" min="0" type="number"></td>
                    </tr>

                </tbody>
            </table>
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
                            <tbody id="tablatrabajadores">
                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>

                            </tbody>
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

</html>