<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Nav Bar -->
    <nav class="uk-navbar uk-navbar-container uk-margin">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Base de
                    datos</span>
            </a>
        </div>

        <!-- Off Canvas, elemento desplegable de UiKit -->
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
    <!-- Botones para descargar, subir y restaurar la base de datos -->
    <div>
        <div>
            <h3 class="uk-padding">
                Back-Up
            </h3>
            <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                <a onclick="return confirm('¿Está seguro que desea continuar?')" href="/api/descargarbasededatos" class="uk-button  uk-padding uk-button-primary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">

                    <h1 style="color:white">
                        Descargar Base de Datos
                    </h1>
                </a>
            </div>
        </div>
        <div class="uk-padding uk-width-1-1">

            <div style="text-align: center">
                <h3 class="uk-padding">
                    Archivo Excel
                </h3>
            </div>



            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div>

                    <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                        <a onclick="return confirm('¿Está seguro que desea continuar?')" href="/api/descargarclientes" class="uk-button  uk-padding uk-button-secondary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">


                            <h1 style="color:white">
                                Descargar Clientes
                            </h1>
                        </a>
                    </div>

                </div>
                <div>

                    <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                        <a onclick="return confirm('¿Está seguro que desea continuar?')" href="/api/descargarusuarios" class="uk-button  uk-padding uk-button-primary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">


                            <h1 style="color:white">
                                Descargar Usuarios
                            </h1>
                        </a>
                    </div>

                </div>


                <div hidden class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                    <a hidden onclick="descarga();" class="uk-button  uk-padding uk-button-secondary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">


                        <h1 style="color:white">
                            Descargar Pedidos
                        </h1>
                    </a>
                </div>


                <div>
                    <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                        <a id="descarga1" href="/api/descargarpedidos1" class="uk-button  uk-padding uk-button-secondary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">



                            <h1 style="color:white">
                                Descargar Sublimacion
                            </h1>
                        </a>
                    </div>
                </div>





            </div>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>


                <div>
                    <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                        <a id="descarga2" href="/api/descargarpedidos2" class="uk-button  uk-padding uk-button-primary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">



                            <h1 style="color:white">
                                Descargar Serigrafia
                            </h1>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                        <a id="descarga3" href="/api/descargarpedidos3" class="uk-button  uk-padding uk-button-secondary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">



                            <h1 style="color:white">
                                Descargar impresion
                            </h1>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">

                        <a id="descarga4" href="/api/descargarpedidos4" class="uk-button  uk-padding uk-button-primary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">



                            <h1 style="color:white">
                                Descargar Bordado
                            </h1>
                        </a>
                    </div>
                </div>



            </div>


        </div>



        {{-- <div>
            <div class="uk-div uk-padding">
                <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
                    <h1>Restaurar Base de datos</h1>
                    <div class="uk-margin" uk-margin>
                        <div uk-form-custom="target: true">
                            <input type="file">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Subir Base de datos" disabled>
                        </div>
                        <button class="uk-button uk-button-default">Restaurar Base de Datos</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Botón de atrás  -->
    <div class="uk-padding-small uk-background-muted uk-padding">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

            <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>


        </div>
    </div>


</body>

<script>

</script>

</html>
