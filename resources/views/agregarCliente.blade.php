<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/gh/RobinHerbots/Inputmask@5.x/dist/jquery.inputmask.js"></script>
</head>

<body>
    <!-- NavBar que muestra los distintos elementos de la apliaciión web -->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu
                    Principal</span>
            </a>

        </div>
        <div class="uk-navbar-right">


            <a href="#my-id" uk-toggle></a>

            <!-- Off Canvas, Elemento desplegable de UiKit -->
            <div id="my-id" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <a href="/menu">Menú</a>
                    <hr class="uk-divider-icon">

                    <ul class="uk-nav uk-parent">

                        <li class="uk-parent"> <a href="/menu">Menú</a></li>


                        <ul class="uk-nav-sub">
                            <li class="uk-parent"> <a href="/menu/facturacion"> Facturación </a></li>
                            <li> <a href="/menu/resumen_pedidos">Pedidos </a></li>
                            <li> <a href="/menu/clientes">Clientes </a></li>
                            <li> <a href="/menu/insumos">Insumos </a></li>

                        </ul>
                        <hr class="uk-divider-icon">
                        <li class="uk-parent"> <a href="/menu/menuadmon"> Administración </a></li>

                        <ul class="uk-nav-sub">

                            <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                            <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>

                            <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>


                            <li> <a href="/menu/menuadmon/promociones">Página de Inicio</a></li>
                        </ul>
                        <hr class="uk-divider-icon">

                        <li class="uk-parent"> Sesión </li>
                        <ul class="uk-nav-sub">
                            <li><a href="/login/cerrar"><b> Cerrar Sesión </b></a></li>
                        </ul>

                    </ul>

                </div>
            </div>
    </nav>

    <!-- Formulario para agregar cliente -->

    <form action="{{ route('cliente.store') }}" method="POST">


        @csrf



        <div class="uk-padding-small uk-background-muted" style="padding-left: 300px;">

            <div style="text-align: center;" class="uk-padding">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="" width="300"
                    height="300">
            </div>

            <div style="text-align: center; " class="">
                <div class="uk-form-horizontal uk-margin-large">
                    <select class="uk-select" id="Rol" disabled hidden>
                        <option value='Cliente'>Cliente</option>
                    </select>

                    <div class="uk-margin">
                        <label for="tipo_cliente" class="uk-form-label" for="form-horizontal-text">Tipo de
                            Cliente</label>
                        <div class="uk-margin">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select required onchange="validarcliente()" name="tipo_de_cliente" id="tipo_cliente">

                                    <option selected disabled value="">--Seleccionar--</option>
                                    <option value="Persona_Natural">Persona Natural</option>
                                    <option value="Empresa">Empresa</option>

                                </select>
                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        @error('tipo_de_cliente')


                            <small>*{{ $message }}</small>

                        @enderror

                    </div>



                    <div class="uk-margin">
                        <label for="primer_nombre_cliente" id="lbl_primernombre" class="uk-form-label"
                            for="form-horizontal-text">Primer Nombre</label>
                        <div class="uk-form-controls">
                            <input required value="" name="primer_nombre" id="primer_nombre_cliente"
                                class="uk-input uk-form-width-large" id="form-horizontal-text" type="text"
                                placeholder="Nombre">
                        </div>

                        @error('primer_nombre')


                            <small>*{{ $message }}</small>

                        @enderror

                    </div>

                    <div class="uk-margin">
                        <label for="segundo_nombre_cliente" class="uk-form-label" for="form-horizontal-text">Segundo
                            Nombre</label>
                        <div class="uk-form-controls">
                            <input value='' name="segundo_nombre" id="segundo_nombre_cliente"
                                class="uk-input uk-form-width-large" id="form-horizontal-text" type="text"
                                placeholder="Segundo Nombre">



                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="primer_apellido_cliente" class="uk-form-label" for="form-horizontal-text">Primer
                            Apellido</label>
                        <div class="uk-form-controls">
                            <input value='' name="primer_apellido" id="primer_apellido_cliente"
                                class="uk-input uk-form-width-large" id="form-horizontal-text" type="text"
                                placeholder="Primer Apellido">



                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="segundo_apellido_cliente" class="uk-form-label" for="form-horizontal-text">Segundo
                            Apellido</label>
                        <div class="uk-form-controls">
                            <input value='' name="segundo_apellido" id="segundo_apellido_cliente"
                                class="uk-input uk-form-width-large" id="form-horizontal-text" type="text"
                                placeholder="Segundo Apellido">



                        </div>
                    </div>



                    <div class="uk-margin">
                        <label for="telefono_cliente" class="uk-form-label" for="form-horizontal-text">Teléfono</label>
                        <div class="uk-form-controls">
                            <input required name="telefono" id="telefono_cliente" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="Teléfono">
                        </div>

                        @error('telefono')


                            <small>*{{ $message }}</small>

                        @enderror

                    </div>

                    <div class="uk-margin">
                        <label for="cedula_cliente" class="uk-form-label" for="form-horizontal-text">Cédula</label>
                        <div class="uk-form-controls">
                            <input name="cedula" id="cedula_cliente" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="Cédula">
                        </div>
                    </div>



                    <div class="uk-margin">
                        <label for="Correo_cliente" class="uk-form-label" for="form-horizontal-text">Correo</label>
                        <div class="uk-form-controls">
                            <input required name="correo" id="correo_cliente" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="email" placeholder="Correo">
                        </div>
                        @error('correo')


                            <small>*{{ $message }}</small>

                        @enderror

                    </div>

                    <div class="uk-margin">
                        <label for="direccion_cliente" class="uk-form-label"
                            for="form-horizontal-text">Dirección</label>
                        <div class="uk-form-controls">
                            <input name="direccion" id="direccion_cliente" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="Dirección">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="cargo_cliente" class="uk-form-label" for="form-horizontal-text">Cargo</label>
                        <div class="uk-form-controls">
                            <input name="cargo" id="cargo_cliente" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="Cargo">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="ruc_cliente" class="uk-form-label" for="form-horizontal-text">R.U.C.</label>
                        <div class="uk-form-controls">
                            <input name="ruc" id="ruc_cliente" class="uk-input uk-form-width-large"
                                id="form-horizontal-text" type="text" placeholder="R.U.C.">
                        </div>
                    </div>



                </div>
            </div>
        </div>







        <div class="uk-padding-small uk-background-muted uk-padding">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

                <a href="/menu/clientes" class="uk-button uk-button-primary  "
                    onclick="return confirm('¿Está seguro que desea continuar?')" style="margin-left: 100px">Atrás </a>
                <button type="submit" id="guardar" onclick="return confirm('¿Está seguro que desea continuar?')"
                    class="uk-button uk-button-secondary" uk-icon="check" style="margin-left: 100px">Guardar </button>


            </div>
        </div>

    </form>

</body>

<script>
    $('#cedula_cliente').inputmask("999-999999-9999a")

    function validarcliente() {
        var tipocliente = document.getElementById("tipo_cliente").value;



        if (tipocliente == "Empresa") {
            document.getElementById("segundo_nombre_cliente").value = " ";
            document.getElementById("primer_apellido_cliente").value = " ";
            document.getElementById("segundo_apellido_cliente").value = " ";
            document.getElementById("lbl_primernombre").innerHTML = "Nombre de la Empresa";



            document.getElementById("segundo_nombre_cliente").disabled = true;
            document.getElementById("primer_apellido_cliente").disabled = true;
            document.getElementById("segundo_apellido_cliente").disabled = true;
            document.getElementById("ruc_cliente").disabled = false;
            document.getElementById("cedula_cliente").disabled = true;





        } else {
            document.getElementById("segundo_nombre_cliente").value = "";
            document.getElementById("primer_apellido_cliente").value = "";
            document.getElementById("segundo_apellido_cliente").value = "";

            document.getElementById("segundo_nombre_cliente").disabled = false;
            document.getElementById("primer_apellido_cliente").disabled = false;
            document.getElementById("segundo_apellido_cliente").disabled = false;
            document.getElementById("ruc_cliente").disabled = true;
            document.getElementById("cedula_cliente").disabled = false;



        }
    }
</script>
{{-- <script>
    let detallesdepedido = [];

    cargarcliente();

    $('#guardar').click(function(res) {
        guardarpedido();
        alert("Se agrego correctamente al trabajador");

    });

    function peticionapi(data, method, onSucess) {
        let url = '/api/cliente';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.IDpersona;
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

    function guardarpedido() {
        let data = {
            Rol: $("#Rol").val()
            , primer_nombre: $("#primer_nombre_cliente").val()
            , segundo_nombre: $("#segundo_nombre_cliente").val()
            , primer_apellido: $("#primer_apellido_cliente").val()
            , segundo_apellido: $("#segundo_apellido_cliente").val()
            , tipodepersona: $("#tipo_cliente").val()
            , telefono: $("#telefono_cliente").val()
            , cedula: $("#cedula_cliente").val()
        , };
        peticionapi(data, 'POST', function(res) {
            alert('Guardado con exito')
        });
    }

    function cargarcliente() {
        peticionapi({}, 'GET', function(res) {
            console.log(res);
            alert('respuesta satisfactoria');
        });

    }

</script> --}}

</html>
