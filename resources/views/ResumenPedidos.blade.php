<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos | Resumen</title>
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

<body>

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

    <div class="uk-div  uk-padding uk-background-muted">


        <div class="">

            <b> <label id="buscar_cliente" for="form-stacked-text" class="uk-form-label">Buscar </label> </b>
            <div class="uk-inline uk-padding">

                <a onclick="getid();" class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>


                <input oninput="getid();" placeholder="Por: N° de Pedido, Nombre , Tipo de pago o Estado"
                    id="id_busqueda" class="uk-input uk-form-width-large" type="text">

            </div>

        </div>

    </div>





    <div class="uk-div uk-margin uk-padding">

        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
            <thead>
                <tr>
                    <th>N° Pedido</th>
                    <th>Pedidos y Clientes</th>
                    <th>Fecha</th>

                    <th>Tipo de pago</th>
                    <th>Estado</th>
                    <th>Opciones</th>


                </tr>
            </thead>
            <tbody id="tablapedidos">
                <tr>
                    <u>

                    </u>
                </tr>

            </tbody>
        </table>

    </div>


    <div class="uk-padding uk-background-muted uk-padding  ">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <a href="/menu" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
            <button class="uk-button uk-button-secondary" style="margin-left: 100px">Guardar</button>

        </div>
    </div>
</body>

</html>

<script>
    let pedido = [];
    var id = "";
    cargarproductos();

    function cargarpedido2() {
        peticionapi2({}, 'GET', function(res) {
            console.log(res);

        });

    }

    function peticionapi(data, method, onSuccess) {


        let url = '/api/getallpedidos';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.id;
        }
        $.ajax({
            url: url,
            method: method,
            data: data,

            success(res) {
                onSuccess(res);
                console.log(res);

            }

        })
    }

    function peticionapi2(data, method, onSuccess) {


        let url = '/api/pedidoall';

        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.idmaestro;
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

    function eliminar(id) {
        console.log(id);
        peticionapi2({
            idmaestro: id
        }, 'DELETE', function(res) {
            cargarproductos();
        });




    }


    function getid() {

        id = document.getElementById("id_busqueda").value;



        if (id == "") {
            cargarproductos();
        } else {
            console.log(id);
            cargarpedidobusqueda();


        }

    }


    function cargarproductos() {
        peticionapi({}, 'GET', function(res) {
            pedido = res;
            let html = '';
            res.forEach(pedido => {
                html +=
                    '<tr>' + '<td>' +
                    '<a class="uk-button" href="/menu/facturacion/' +
                    pedido.idmaestro + '/edit' +
                    '">' + pedido.idmaestro + '</td>' + '</a>' +

                    '<td>' + '<a class="uk-button" href="/menu/facturacion/' +
                    pedido.idmaestro + '/edit' +
                    '">' + pedido.Primer_Nombre + ' ' + pedido.Segundo_Nombre + ' ' + pedido
                    .Primer_Apellido + ' ' + pedido.Segundo_Apellido + ' ' + '</td>' + '</a>' +
                    '<td>' + pedido.fecha + '</td>' +

                    '<td>' + pedido.Descripcion + '</td>' +

                    '<td>' + pedido.Estado + '</td>' + '<td>' +
                    '<a target="_blank" href="/api/pdf/Factura_sub/' + pedido

                    .idmaestro + '/descargar" class="uk-padding-small" uk-icon="print"></a>' +
                    '<a href="/menu/facturacion/' + pedido
                    .idmaestro +
                    '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></> <a action="" onclick=" var result = confirm(	&quot; ¿Está seguro que desea eliminar el pedido?  Esta acción no puede ser revertida.	&quot; ); if (result) { eliminar(' + pedido.idmaestro + '); } " class=" " uk-icon="trash"></a>' + '</td>' +



                    '</tr>'


            });
            $("#tablapedidos").html(html);
        });
    }

    function peticionapi3(data, method, onSuccess) {


        let url = '/api/getallpedidosbusqueda/' + id;


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

    function cargarpedidobusqueda() {
        peticionapi3({}, 'GET', function(res) {
            pedido = res;
            let html = '';
            res.forEach(pedido => {



                html +=
                    '<tr>' + '<td>' +
                    '<a class="uk-button" href="/menu/menu_facturacion/form_sublimacion/' +
                    pedido.idmaestro + '/edit' +
                    '">' + pedido.idmaestro + '</td>' + '</a>' +

                    '<td>' + '<a class="uk-button" href="/menu/menu_facturacion/form_sublimacion/' +
                    pedido.idmaestro + '/edit' +
                    '">' + pedido.Primer_Nombre + ' ' + pedido.Segundo_Nombre + ' ' + pedido
                    .Primer_Apellido + ' ' + pedido.Segundo_Apellido + ' ' + '</td>' + '</a>' +
                    '<td>' + pedido.fecha + '</td>' +

                    '<td>' + pedido.Descripcion + '</td>' +

                    '<td>' + pedido.Estado + '</td>' + '<td>' +
                    '<a target="_blank" href="/api/pdf/Factura_sub/' + pedido

                    .idmaestro + '/descargar" class="uk-padding-small" uk-icon="print"></a>' +
                    '<a href="/menu/menu_facturacion/form_sublimacion/' + pedido
                    .idmaestro +
                    '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></> <a action="" onclick="eliminar(' +
                    pedido.idmaestro + ');" class=" " uk-icon="trash"></a>' + '</td>' +
                    '</tr>'


            });
            $("#tablapedidos").html(html);

        });
    }
</script>
