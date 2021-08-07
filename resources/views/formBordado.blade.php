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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
 <!-- NavBar -->
    <nav class="uk-navbar uk-navbar-container uk-margin">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Bordado</span>
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



    <div class="uk-padding uk-background-muted">

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
        <form class="uk-grid-small" uk-grid>

            <div class="uk-inline uk-width-1-2 ">
                <label for="">Fecha de Facturación</label>
                <input type="date" class="uk-input">
            </div>
            <div class="uk-inline uk-width-1-2 ">
                <label for="">Fecha de entrega</label>
                <input type="date" class="uk-input">
            </div>


            <div class="uk-inline uk-width-1-2">
                <a class="uk-form-icon uk-form-icon-flip" href="" uk-icon="icon: search"></a>
                <input class="uk-input" placeholder="Cliente">
            </div>

            <div class="uk-inline uk-width-1-2">
                <input class="uk-input" placeholder="N° RUC">
            </div>

            <div class="uk-inline uk-width-1-2">
                <a class="uk-form-icon uk-form-icon-flip" href="" uk-icon="icon: search"></a>
                <input class="uk-input" placeholder="Nombre">
            </div>

            <div class="uk-inline uk-width-1-2">
                <input class="uk-input" placeholder="N° Telefono">
            </div>
    </div>
    </form>
    </div>


    <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
        <div>

        <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->

            <form class="uk-form-horizontal uk-margin-large">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Pecho Izquierdo</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Pecho Derecho</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Manga Izquierda</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Manga Derecha</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Espalda</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>

            </form>

        </div>
        <div>
            <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                <div>
                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <form class="uk-grid-small" uk-grid>
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
                                    <td>S</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                                <tr>
                                    <td>XL</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                                <tr>
                                    <td>2XL</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                                <tr>
                                    <td>3XL</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                                <tr>
                                    <td>5XL</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div>
                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <form class="uk-grid-small" uk-grid>
                        <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
                            <thead>
                                <tr>
                                    <th>Talla Juvenil</th>
                                    <th>Cantidad</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>18</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input class="uk-input uk-form-width-xsmall" type="Number"></td>

                                </tr>
                            </tbody>
                        </table>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="uk-background-muted uk-padding">
        <h1 class="uk-text-center">Notas</h1>
            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->  
        <form>

            <textarea class="uk-textarea" placeholder="Notas"></textarea>
            <table class="uk-table uk-table-hover uk-table-divider">
                <div class="uk-container">

                    <!--Tablas de precios-->
                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th>Cantidad</th>
                                <th>Especificaciones</th>
                                <th>Precio</th>
                                <th>Precio Unitario</th>
                                <th coldspan="2">Opciones</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th coldspan="2"></th>
                            </tr>
                        </thead>
                        <tbody id="tablatrabajadores">
                        </tbody>
                    </table>
                </div>
        </form>
    </div>

    <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
        <div>

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <form class="uk-form-horizontal uk-margin-large">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Abono</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Saldo</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">

                    <div class="uk-form-controls">
                        <label for="">
                            <input class="uk-checkbox" id="form-horizontal-text" type="checkbox"> Transferencia</label>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Banco</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>


            </form>

        </div>
        <div>

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <form class="uk-form-horizontal uk-margin-large">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Autoriza Pedido</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Recibe Pedido</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">N° Factura</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">N° Recibo</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
        </div>




    </div>

    <!-- Seccion que contiene los botones de atrás y guardar-->
    <div class="uk-padding uk-background-muted uk-padding  ">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <a href="/menu/menu_facturacion" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
            <button class="uk-button uk-button-secondary" style="margin-left: 100px">Guardar</button>

        </div>
    </div>
</body>



</html>