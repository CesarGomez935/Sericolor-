<head>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />
    <title>Sericolor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
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
        < script src = "https://code.jquery.com/jquery-3.5.1.min.js"
        integrity = "sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin = "anonymous" >
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </script>
</head>

<body>


    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/Logo_sericolor.png" width="400" height="300" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">
                    <h3>Registrarse</h3>
                    </p>


                    <fieldset class="uk-fieldset">



                        <div class="uk-grid-small" uk-grid>

                            <div class="uk-width-1-2@s">
                                <input id="primer_nombre_personal" class="uk-input" type="text"
                                    placeholder="Primer Nombre">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input id="segundo_nombre_personal" class="uk-input" type="text"
                                    placeholder="Segundo Nombre">
                            </div>

                            <div class="uk-width-1-2@s">
                                <input id="primer_apellido_personal" class="uk-input" type="text"
                                    placeholder="Primer Apellido">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input id="segundo_apellido_personal" class="uk-input" type="text"
                                    placeholder="Segundo Apellido">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <input id="correo_personal" class="uk-input" type="email" placeholder="Correo">
                        </div>
                        <div class="uk-margin">
                            <input id="telefono_personal" class="uk-input" type="number" placeholder="Teléfono">
                        </div>
                        <div class="uk-margin">
                            <input id="cedula_personal" class="uk-input" type="text" placeholder="Cédula">
                        </div>
                        <div class="uk-margin">
                            <input id="direccion_peronal" class="uk-input" type="text" placeholder="Dirección">
                        </div>
                        <div class="uk-margin">
                            <select id="rol_asignado" class="uk-input" type="text" placeholder="Rol">
                                <option value="Impresion Digital">Impresion Digital</option>
                                <option value="Bordado" selected>Bordado</option>
                                <option value="Sublimacion">Sublimacion</option>
                                <option value="Serigrafia">Serigrafia</option>
                                <option value="Recepcion">Recepcion</option>

                            </select>
                        </div>
                        <div class="uk-margin">
                            <input id="usuario_peronal" class="uk-input" type="text"
                                placeholder="Nombre de Usuario">
                        </div>
                        <div class="uk-margin">
                            <input id="password_personal" class="uk-input" type="password"
                                placeholder="Contraseña">
                        </div>
                        <div class="uk-margin">
                            <input id="password_personal_conf" class="uk-input" type="password"
                                placeholder="Confirmar Contraseña">
                        </div>

                        <button type="submit" class="uk-button uk-button-primary">Registrarse</button>

                    </fieldset>


                    <a href="#" class="mx-2" role="button"><i
                            class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i
                            class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                    <hr>

                    <!-- Terms of service -->


                </form>
                <!-- Default form register -->
            </div>
        </div>
    </div>

    {{-- script que guardara al trabajador --}}

    <script>
        let detallesdepedido = [];

        cargarcliente();

        $('#guardar').click(function(res) {
            guardarpedido();
            alert("Se agrego correctamente al trabajador");

        });

        function peticionapi(data, method, onSucess) {
            let url = '/api/trabajador';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.IDpersona;
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
                Rol: $("#Rol").val(),
                primer_nombre: $("#primer_nombre_personal").val(),
                segundo_nombre: $("#segundo_nombre_personal").val(),
                primer_apellido: $("#primer_apellido_personal").val(),
                segundo_apellido: $("#segundo_apellido_personal").val(),
                correo: $("correo_personal").val(),
                telefono: $("#telefono_trabajador").val(),
                cedula: $("#cedula_trabajador").val(),
                RolAsignado: $("#rol_asignado_trabajador").val(),
            };
            peticionapi(data, 'POST', function(res) {
                alert("Guardado con exito")
            });
        }

        function cargarcliente() {
            peticionapi({}, 'GET', function(res) {
                console.log(res);
                alert('respuesta satisfactoria');
            });

        }
    </script>

</body>
