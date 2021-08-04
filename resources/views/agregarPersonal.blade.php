<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos | Bordado</title>
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
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Sublimación</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- Off Canvas, elemento desplegable de UiKit -->
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

        <!-- Formulario de Insercion de personal -->
    <div class="uk-padding-small uk-background-muted" style="padding-left: 300px;">

        <div style="text-align: center;" class="uk-padding">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="" width="300" height="300">
        </div>

        <div style="text-align: center; " class="">
            <form class="uk-form-horizontal uk-margin-large">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Primer Nombre</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Segundo Nombre</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Primer Apellido</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Segundo Apellido</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Correo</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="e-mail" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Teléfono</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Cédula</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Rol Asignado</label>
                    <div class="uk-margin">
                        <div uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Seleccionar</option>
                                <option value="1">Impresión Digital</option>
                                <option value="2">Sublimación</option>
                                <option value="3">Bordado</option>
                                <option value="4">Serigrafía</option>
                                <option value="4">Recepcion</option>
                            </select>
                            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>






    <!-- Botones de atrás y guardar -->
    <div class="uk-padding-small uk-background-muted uk-padding">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

            <button class="uk-button uk-button-primary  " uk-icon="check" style="margin-left: 100px">Atrás </button>
            <button class="uk-button uk-button-secondary" uk-icon="close" style="margin-left: 100px">Guardar </button>

        </div>
    </div>
</body>

</html>