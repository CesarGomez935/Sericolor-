<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personal</title>
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

<body>
    <!-- NavBar que muestra los distintos elementos de la apliaciión web -->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Agregar Perosonal</span>
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

    <!-- Formulario para agregar personal -->

    <form action="{{route("trabajador.store")}}" method="POST">


        @csrf



        <div class="uk-padding-small uk-background-muted" style="padding-left: 300px;">

            <div style="text-align: center;" class="uk-padding">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="" width="300" height="300">
            </div>

            <div style="text-align: center; " class="">
                <div class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label for="primer_nombre_cliente" class="uk-form-label" for="form-horizontal-text">Primer Nombre</label>
                        <div class="uk-form-controls">
                            <input name="primer_nombre" id="primer_nombre_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Primer Nombre">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="segundo_nombre_cliente" class="uk-form-label" for="form-horizontal-text">Segundo Nombre</label>
                        <div class="uk-form-controls">
                            <input name="segundo_nombre" id="segundo_nombre_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Segundo Nombre">

                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="primer_apellido_cliente" class="uk-form-label" for="form-horizontal-text">Primer Apellido</label>
                        <div class="uk-form-controls">
                            <input name="primer_apellido" id="primer_apellido_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Primer Apellido">

                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="segundo_apellido_cliente" class="uk-form-label" for="form-horizontal-text">Segundo Apellido</label>
                        <div class="uk-form-controls">
                            <input name="segundo_apellido" id="segundo_apellido_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Segundo Apellido">

                        </div>
                    </div>



                    <div class="uk-margin">
                        <label for="telefono_cliente" class="uk-form-label" for="form-horizontal-text">Teléfono</label>
                        <div class="uk-form-controls">
                            <input type="number" name="telefono" id="telefono_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Teléfono">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="cedula_cliente" class="uk-form-label" for="form-horizontal-text">Cédula</label>
                        <div class="uk-form-controls">
                            <input name="cedula" id="cedula_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Cédula">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="privilegios" class="uk-form-label" for="form-horizontal-text">Privilegios</label>
                        <div class="uk-margin">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select name="privilegios" id="privilegios">


                                    <option value="Administrador">Administrador</option>
                                    <option value="Dependiente">Dependiente</option>

                                </select>
                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="uk-margin">
                        <label for="Correo_cliente" class="uk-form-label" for="form-horizontal-text">Correo</label>
                        <div class="uk-form-controls">
                            <input name="correo" id="correo_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="email" placeholder="Correo">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="direccion_cliente" class="uk-form-label" for="form-horizontal-text">Dirección</label>
                        <div class="uk-form-controls">
                            <input name="direccion" id="direccion_cliente" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Dirección">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="privilegios" class="uk-form-label" for="form-horizontal-text">Rol Asignado</label>
                        <div class="uk-margin">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select name="rol_asignado" id="rol_asignado">


                                    <option value="Impresion_Digital">Impresión Digital</option>
                                    <option value="Bordado">Bordado</option>
                                    <option value="Sublimacion">Sublimación</option>
                                    <option value="Serigrafia">Serigrafía</option>
                                    <option value="Recepcion">Recepción</option>



                                </select>
                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="nombre_de_usuario" class="uk-form-label" for="form-horizontal-text">Nombre de Usuario</label>
                        <div class="uk-form-controls">
                            <input name="nombre_de_usuario" id="nombre_de_usuario" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Nombre de Usuario">

                        </div>
                    </div>



                    <div class="uk-margin">
                        <label for="pass_personal" class="uk-form-label" for="form-horizontal-text">Contraseña</label>
                        <div class="uk-form-controls">
                            <input name="password" id="pass_personal" type="password" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="conf_pass_personal" class="uk-form-label" for="form-horizontal-text">Contraseña</label>
                        <div class="uk-form-controls">
                            <input name="conf_password" id="conf_pass_personal" type="password" class="uk-input uk-form-width-medium" id="form-horizontal-text" type="text" placeholder="Confirmar Contraseña">
                            <a class="uk-button uk-button-primary" onclick="verificarPasswords()">verificar contraseñas</a>


                        </div>
                    </div>






                </div>
            </div>
        </div>







        <div class="uk-padding-small uk-background-muted uk-padding">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

                <a href="/menu/menuadmon/clientes" class="uk-button uk-button-primary  " style="margin-left: 100px">Atrás </a>
                <button disabled type="submit" id="guardar" onclick="return confirm('¿Está seguro que desea continuar?')" class="uk-button uk-button-secondary" uk-icon="check" style="margin-left: 100px">Guardar </button>


            </div>
        </div>

    </form>

</body>
<script>
    function verificarPasswords() {

        pass1 = document.getElementById('pass_personal').value;

        pass2 = document.getElementById('conf_pass_personal').value;

        if (pass1 != pass2) {
            window.alert("Las contraseñas no coinciden")
            document.getElementById("guardar").disabled = true;


        } else {

            document.getElementById("guardar").disabled = false;

        }

        // console.log(pass1, pass2);




    }

</script>

</html>
