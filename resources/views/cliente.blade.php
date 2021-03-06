<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
    <!-- Nav Bar -->
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
                    <a href="/menu">Men??</a>
                    <hr class="uk-divider-icon">

                    <ul class="uk-nav uk-parent">

                        <li class="uk-parent"> <a href="/menu">Men??</a></li>


                        <ul class="uk-nav-sub">
                            <li class="uk-parent"> <a href="/menu/facturacion"> Facturaci??n </a></li>
                            <li> <a href="/menu/resumen_pedidos">Pedidos </a></li>
                            <li> <a href="/menu/clientes">Clientes </a></li>
                            <li> <a href="/menu/insumos">Insumos </a></li>

                        </ul>
                        <hr class="uk-divider-icon">
                        <li class="uk-parent"> <a href="/menu/menuadmon"> Administraci??n </a></li>

                        <ul class="uk-nav-sub">

                            <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                            <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>

                            <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>


                            <li> <a href="/menu/menuadmon/promociones">P??gina de Inicio</a></li>
                        </ul>
                        <hr class="uk-divider-icon">

                        <li class="uk-parent"> Sesi??n </li>
                        <ul class="uk-nav-sub">
                            <li><a href="/login/cerrar"><b> Cerrar Sesi??n </b></a></li>
                        </ul>

                    </ul>

                </div>
            </div>
    </nav>


    <!-- Input para realizar busqueda de un cliente por nombre -->
    <form action="">



        <div class="uk-div uk-margin uk-padding">





            <div class="uk-margin">

                <b> <label id="buscar_cliente" for="form-stacked-text"
                        oninput="cargarproductosbusqueda(buscar_cliente.value);" class="uk-form-label">Buscar
                        Cliente</label> </b>
                <div class="uk-inline uk-padding">

                    <a onclick="getnombre();" class="uk-form-icon uk-form-icon-flip" href="#"
                        uk-icon="icon: search"></a>


                    <input oninput="getnombre();" id="nombre_busqueda" placeholder="Busqueda por C??digo o Nombre"
                        class="uk-input uk-form-width-large" type="text">
                </div>
                <a href="/menu/menuadmon/clientes/agregar_cliente"
                    class="uk-button-primary uk-button uk-margin uk-padding ">agregar Cliente</a>
            </div>



            @method('delete')
            @csrf



            <!-- Tabla que muestra el listado de clientes con un hipervinculo a su detalle -->
            <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
                <thead>



                    <tr>
                        <th>Cod. Cliente</th>
                        <th>Cliente</th>
                        <th>Opciones</th>


                    </tr>
                </thead>
                <tbody id="tablaclientes">
                    <tr>
                        <u>

                        </u>
                    </tr>

                </tbody>
            </table>












        </div>


        <div class="uk-padding uk-background-muted uk-padding  ">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                <a href="/menu" class="uk-button uk-button-primary " style="margin-left: 100px">Atr??s</a>


            </div>
        </div>
    </form>


    <script>
        let trabajadores = [];
        let Nombre = "";


        function peticionapi(data, method, onSuccess) {


            let url = '/api/getcliente';
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
                        '<td>' + trabajadores.IdPersona + '</td>' +


                        '<td>' + '<a class="uk-button" href="/menu/menuadmon/clientes/agregar_cliente/' +
                        trabajadores.IdPersona + '/edit">' + trabajadores.Primer_Nombre + " " + trabajadores
                        .Segundo_Nombre + " " + trabajadores.Primer_Apellido + " " + trabajadores
                        .Segundo_Apellido + '</td>' + '</a>' +




                        '<td>' + '<a href="/menu/menuadmon/clientes/agregar_cliente/' + trabajadores
                        .IdPersona + '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></> ' +
                        '</td>' +

                        '</tr>'
                });

                $("#tablaclientes").html(html);
            });
        }

        function getnombre() {

            Nombre = document.getElementById("nombre_busqueda").value;



            if (Nombre == "") {
                cargarproductos();
            } else {
                console.log(Nombre);
                cargarclientesbusqueda();


            }

        }

        function peticionapi2(data, method, onSuccess) {


            let url = '/api/getclientebusqueda/' + Nombre;

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

        function cargarclientesbusqueda() {
            peticionapi2({}, 'GET', function(res) {
                trabajadores = res;
                let html = '';
                res.forEach(trabajadores => {
                    html +=
                        '<tr>' +
                        '<td>' + trabajadores.IdPersona + '</td>' +


                        '<td>' + '<a class="uk-button" href="/menu/menuadmon/clientes/agregar_cliente/' +
                        trabajadores.IdPersona + '/edit">' + trabajadores.Primer_Nombre + " " + trabajadores
                        .Segundo_Nombre + " " + trabajadores.Primer_Apellido + " " + trabajadores
                        .Segundo_Apellido + '</td>' + '</a>' +




                        '<td>' + '<a href="/menu/menuadmon/clientes/agregar_cliente/' + trabajadores
                        .IdPersona + '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></>  ' +
                        '</td>' +

                        '</tr>'
                });


                $("#tablaclientes").html(html);
            });
        }
    </script>




</body>

</html>
