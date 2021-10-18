<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body onpageshow="cargarproductos();">

    <!-- Nav Bar -->
    <nav class="uk-navbar uk-navbar-container uk-margin">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Clientes</span>
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
                        <li> <a href="/menu/menuadmon/clientes">clientes</a></li>
                        <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>
                        <li> <a href="/menu/menuadmon/bd">Restaurar y generar Back-up</a></li>
                        <li> <a href="/menu/menuadmon/clientes">Clientes</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>


    <!-- Input para realizar busqueda de un cliente por nombre -->

    <div class="uk-div uk-margin uk-padding">





        <div class="uk-margin">

            <b> <label id="buscar_cliente" for="form-stacked-text" oninput="cargarproductosbusqueda(buscar_cliente.value);" class="uk-form-label">Buscar Cliente</label> </b>
            <div class="uk-inline uk-padding">

                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>
                <input class="uk-input uk-form-width-large" type="text">
            </div>
            <a href="/menu/menuadmon/clientes/agregar_cliente" class="uk-button-primary uk-button uk-margin uk-padding ">agregar Cliente</a>
        </div>




        <!-- Tabla que muestra el listado de clientes con un hipervinculo a su detalle -->
        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
            <thead>
                <tr>
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

        @method('delete')
        @csrf



    </div>


    <div class="uk-padding uk-background-muted uk-padding  ">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>


        </div>
    </div>

    <script>
        let trabajadores = [];


        function peticionapi(data, method, onSuccess) {


            let url = '/api/getcliente';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.id;
            }
            $.ajax({
                url: url
                , method: method
                , data: data,

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

                        '<td>' + '<a class="uk-button" href="/menu/menuadmon/clientes/agregar_cliente/' + trabajadores.IdPersona + '/edit">' + trabajadores.Primer_Nombre + " " + trabajadores.Segundo_Nombre + " " + trabajadores.Primer_Apellido + " " + trabajadores.Segundo_Apellido + '</td>' + '</a>' +




                        '<td>' + '<a href="/menu/menuadmon/clientes/agregar_cliente/' + trabajadores.IdPersona + '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></> <a href="/menu/menuadmon/clientes/' + trabajadores.IDpersona + '" action="" class=" " uk-icon="trash"></a>' + '</td>' +












                        '</tr>'
                });

                $("#tablaclientes").html(html);
            });
        }

    </script>




</body>

</html>
