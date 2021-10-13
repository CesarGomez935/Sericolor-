<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body onpageshow="cambiarselect();">


    <form action="{{route("cliente.update",$cliente)}}" method="POST">

        @csrf

        @method('put')


        <!-- NavBar que muestra los distintos elementos de la apliaciión web -->
        <nav class="uk-navbar uk-navbar-container ">
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" href="#">
                    <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Agregar Clientes</span>
                </a>
            </div>

            <a href="#my-id" uk-toggle></a>

            <!-- Off Canvas, Elemento desplegabe de uiKit -->
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

        <!-- Formulario para agregar cliente -->



        <div class="uk-padding-small uk-background-muted" style="padding-left: 300px;">

            <div style="text-align: center;" class="uk-padding">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="" width="300" height="300">
            </div>

            <div style="text-align: center; " class="">
                <div class="uk-form-horizontal uk-margin-large">
                    <select class="uk-select" id="Rol" disabled hidden>
                        <option value='Cliente'>Cliente</option>
                    </select>
                    <div class="uk-margin">
                        <label for="primer_nombre_cliente" class="uk-form-label" for="form-horizontal-text">Primer Nombre</label>
                        <div class="uk-form-controls">
                            <input name="primer_nombre_cliente" value="{{$cliente->primer_nombre}}" id="primer_nombre_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">


                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="segundo_nombre_cliente" class="uk-form-label" for="form-horizontal-text">Segundo Nombre</label>
                        <div class="uk-form-controls">
                            <input name="segundo_nombre_cliente" value="{{$cliente->segundo_nombre}}" id="segundo_nombre_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">


                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="primer_apellido_cliente" class="uk-form-label" for="form-horizontal-text">Primer Apellido</label>
                        <div class="uk-form-controls">
                            <input name="primer_apellido_cliente" value="{{$cliente->primer_apellido}}" id="primer_apellido_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">


                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="segundo_apellido_cliente" class="uk-form-label" for="form-horizontal-text">Segundo Apellido</label>
                        <div class="uk-form-controls">
                            <input name="segundo_apellido_cliente" value="{{$cliente->segundo_apellido}}" id="segundo_apellido_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">


                        </div>
                    </div>



                    <div class="uk-margin">
                        <label for="telefono_cliente" class="uk-form-label" for="form-horizontal-text">Teléfono</label>
                        <div class="uk-form-controls">
                            <input name="telefono_cliente" value="{{$cliente->telefono}}" id="telefono_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">


                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="cedula_cliente" class="uk-form-label" for="form-horizontal-text">Cédula</label>
                        <div class="uk-form-controls">
                            <input name="cedula_cliente" value="{{$cliente->cedula}}" id="cedula_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Some text...">


                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="tipo_cliente" class="uk-form-label" for="form-horizontal-text">Tipo de Cliente</label>
                        <div class="uk-margin">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select name="tipo_cliente" id="tipo_cliente">
                                    <option value="">Seleccionar</option>
                                    <option value="Persona_Natural">Persona Natural</option>
                                    <option value="Empresa">Empresa</option>

                                </select>
                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>







        <div class="uk-padding-small uk-background-muted uk-padding">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

                <a href="/menu/menuadmon/clientes" class="uk-button uk-button-primary  " style="margin-left: 100px">Atrás </a>
                <button id="guardar" onclick="return confirm('¿Está seguro que desea continuar?')" class="uk-button uk-button-secondary" uk-icon="check" style="margin-left: 100px">Guardar </button>

            </div>
        </div>

    </form>

</body>
<script>
    function cambiarselect() {

        var val = "{{$cliente->tipodepersona}}";

        // document.querySelector('#rol_asignado_trabajador [value="' + val + '"]').selected = true;

        $('#tipo_cliente').val(val).change();









        // $('#rol_asignado_trabajador option:contains(' + val + ')').prop({
        //     selected: true
        // });







    }

    function alert() {
        alert("está seguro que desea continuar?");
    }

</script>


</html>