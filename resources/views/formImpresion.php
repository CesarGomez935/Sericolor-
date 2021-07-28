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

    <nav class="uk-navbar uk-navbar-container uk-margin">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Sublimación</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- This is the off-canvas -->
        <div id="my-id" uk-offcanvas>
            <div class="uk-offcanvas-bar">

                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <a href="/menu">Menú</a>
                <hr class="uk-divider-icon">

                <ul class="uk-nav uk-parent">
                    <li class="uk-parent"> <a href=""> Facturación </a></li>
                    <ul class="uk-nav-sub">
                        <li> <a href="">Bordado </a></li>
                        <li> <a href="">Sublimación </a></li>
                        <li> <a href="">Serigrafía </a></li>
                        <li> <a href="">Impresión digital </a></li>
                    </ul>
                    <hr class="uk-divider-icon">
                    <li class="uk-active"> <a href=""> Pedidos Bordado </a></li>
                    <li class="uk-active"> <a href=""> Pedidos Sublimación </a></li>
                    <li class="uk-active"> <a href=""> Pedidos Serigrafía </a></li>
                    <li class="uk-active"> <a href=""> Pedidos Impresión digital </a></li>
                    <hr class="uk-divider-icon">
                    <li class="uk-parent"> <a href=""> Administración </a></li>

                    <ul class="uk-nav-sub">
                        <li> <a href="">Resumen de pedidos</a></li>
                        <li> <a href="">Personal</a></li>
                        <li> <a href="">Reportes</a></li>
                        <li> <a href="">Restaurar y generar Back-up</a></li>
                        <li> <a href="">Clientes</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>



    <div class="uk-padding uk-background-muted">


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
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                </tr>
                <tr>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                </tr>
                <tr>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                </tr>
                <tr>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                    <td><input class="uk-input" type="number"></td>
                </tr>
            
            </tbody>
            </table>
    </div>
   
    

    <div class="uk-background-muted uk-padding">
        <h1 class="uk-text-center">Notas</h1>

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
            </table>
        </form>
    </div>

    <div class="uk-child-width-1-2 uk-text-center uk-background-muted" uk-grid>
        <div>


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
    
<div class="uk-padding uk-background-muted uk-padding  ">
    <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
        <button class="uk-button uk-button-primary "style="margin-left: 100px">Atrás</button>
        <button class="uk-button uk-button-secondary"style="margin-left: 100px">Guardar</button> 
              
    </div>
</div>
</body>
</html>