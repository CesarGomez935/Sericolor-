<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body onpageshow="cargarproductos();">
    @if (auth()->user()->Privilegios !== 'Administrador')
        <script>
            window.location = "/menu";
        </script>
    @endif
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




    <div class="uk-div uk-margin uk-padding">

        <div class="uk-div uk-padding">
            <a href="/menu/menuadmon/personal/agregar_personal" class="uk-button uk-button-primary">Agregar personal</a>
        </div>

        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
            <thead>
                @method('delete')
                @csrf
                <tr>
                    <th>Personal</th>
                    <th>
                        <div class="popup" onclick="myFunction()">Estado <span class="uk-margin-small-right"
                                uk-icon="info"></span>

                            <span class="popuptext" id="myPopup">Estados: <br> Activo=1 <br> Inactivo=0</span>
                        </div>

                    </th>
                    <script>
                        // When the user clicks on div, open the popup
                        function myFunction() {
                            var popup = document.getElementById("myPopup");
                            popup.classList.toggle("show");
                        }
                    </script>

                    <style>
                        /* Popup container - can be anything you want */
                        .popup {
                            position: relative;
                            display: inline-block;
                            cursor: pointer;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                        }

                        /* The actual popup */
                        .popup .popuptext {
                            visibility: hidden;
                            width: 160px;
                            background-color: #555;
                            color: #fff;
                            text-align: center;
                            border-radius: 6px;
                            padding: 8px 0;
                            position: absolute;
                            z-index: 1;
                            bottom: 125%;
                            left: 50%;
                            margin-left: -80px;
                        }

                        /* Popup arrow */
                        .popup .popuptext::after {
                            content: "";
                            position: absolute;
                            top: 100%;
                            left: 50%;
                            margin-left: -5px;
                            border-width: 5px;
                            border-style: solid;
                            border-color: #555 transparent transparent transparent;
                        }

                        /* Toggle this class - hide and show the popup */
                        .popup .show {
                            visibility: visible;
                            -webkit-animation: fadeIn 1s;
                            animation: fadeIn 1s;
                        }

                        /* Add animation (fade in the popup) */
                        @-webkit-keyframes fadeIn {
                            from {
                                opacity: 0;
                            }

                            to {
                                opacity: 1;
                            }
                        }

                        @keyframes fadeIn {
                            from {
                                opacity: 0;
                            }

                            to {
                                opacity: 1;
                            }
                        }

                    </style>


                    <th>Privilegios</th>
                    <th>Rol</th>
                    <th>Opciones</th>

                </tr>
            </thead>


            <tbody id="tablatrabajadores">
                <tr>


                </tr>

            </tbody>
        </table>

    </div>


    <div class="uk-padding uk-background-muted uk-padding  ">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>


        </div>
    </div>

    <script>
        let trabajadores = [];


        function peticionapi(data, method, onSuccess) {


            let url = '/api/gettrabajador';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.id;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,

                success(res) {
                    onSuccess(res);

                }

            })
        }

        function cargarproductos() {
            peticionapi({}, 'GET', function(res) {
                trabajadores = res;
                let html = '';
                res.forEach(trabajadores => {
                    html +=
                        '<tr>' +

                        '<td>' + '<a class="uk-button" href="/menu/menuadmon/personal/agregar_personal/' +
                        trabajadores.idpersona + '/edit">' + trabajadores.Primer_Nombre + " " + trabajadores
                        .Segundo_Nombre + " " + trabajadores.Primer_Apellido + " " + trabajadores
                        .Segundo_Apellido + '</td>' + '</a>' +
                        '<td>' + trabajadores.estado + '</td>' +





                        '<td>' + trabajadores.Privilegios + '</td>' +

                        '<td>' + trabajadores.RolAsignado + '</td>' +
                        '<td>' + '<a href="/menu/menuadmon/personal/agregar_personal/' + trabajadores
                        .idpersona +
                        '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></> <a href="/menu/menuadmon/personal/' +
                        trabajadores.idpersona + '" action="" class=" " uk-icon="trash"></a>' + '</td>' +
                        '</tr>'
                });
                $("#tablatrabajadores").html(html);
            });
        }

        function editar(id) {

            let data = trabajadores.filter(trabajadores => {
                return trabajadores.id == id;
            })
            $("#Id_trabajadores").val(data[0].id), $("#1Nombre").val(data[0].nombre1), $("#2Nombre").val(data[0].nombre2),
                $("#Apellidos").val(data[0].apellidos), $("#sexo").val(data[0].sexo), $("#direccion").val(data[0]
                    .direccion), $("#telefono").val(data[0].Telefono), $("#Cargo").val(data[0].Cargo);

        }
    </script>



</body>

</html>
