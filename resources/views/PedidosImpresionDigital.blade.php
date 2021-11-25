<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos | Impresión Digital</title>
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

</head>

<body onpageshow="cargarproductos();">

    <nav class="uk-navbar uk-navbar-container uk-margin">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Pedidos
                    impresión digital</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- This is the off-canvas -->
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
                        </a>
                    </li>
                    <hr class="uk-divider-icon">
                    <li class="uk-parent"> <a href="/menu/menuadmon"> Administración </a></li>

                    <ul class="uk-nav-sub">
                        <li> <a href="/menu/menuadmon/resumen_pedidos">Resumen de pedidos</a></li>
                        <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                        <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>
                        <li> <a href="/menu/menuadmon/insumos">Insumos</a></li>
                        <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>
                        <li> <a href="/menu/menuadmon/clientes">Clientes</a></li>
                        <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                        <li> <a href="/menu/menuadmon/promociones">Menú Principal</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>




    <div class="uk-div uk-margin uk-padding">

        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
            <thead>
                <tr>
                    <th>N° Pedido</th>
                    <th>Pedidos y Clientes</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>opciones</th>

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

    <script>
        let pedido = [];
        cargarpedido2();

        function cargarpedido2() {
            peticionapi2({}, 'GET', function(res) {
                console.log(res);

            });

        }

        function peticionapi(data, method, onSuccess) {


            let url = '/api/getimpresion';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.id;
            }
            $.ajax({
                url: url
                , method: method
                , data: data,

                success(res) {
                    onSuccess(res);
                    console.log(res);

                }

            })
        }

        function peticionapi2(data, method, onSuccess) {


            let url = '/api/pedido';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
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

        function eliminar(id) {
            console.log(id);
            peticionapi2({
                idmaestro: id
            }, 'DELETE', function(res) {
                cargarproductos();
            });




        }

        function cargarproductos() {
            peticionapi({}, 'GET', function(res) {
                pedido = res;
                let html = '';
                res.forEach(pedido => {
                    html +=
                        '<tr>' + '<td>' +
                        '<a class="uk-button" href="/menu/menu_facturacion/form_impresion_digital/' +
                        pedido.idmaestro + '/edit' +
                        '">' + pedido.idmaestro + '</td>' + '</a>' +


                        '<td>' +
                        '<a class="uk-button" href="/menu/menu_facturacion/form_impresion_digital/' +
                        pedido.idmaestro + '/edit' +
                        '">' + pedido.Primer_Nombre + ' ' + pedido.Segundo_Nombre + ' ' + pedido
                        .Primer_Apellido + ' ' + pedido.Segundo_Apellido + ' ' + '</td>' + '</a>' +
                        '<td>' + pedido.fecha + '</td>' +
                        '<td>' + pedido.Estado + '</td>' + '<td>' +
                        '<a href="/menu/menu_facturacion/form_impresion_digital/' + pedido
                        .idmaestro +
                        '/edit" class="uk-padding-small" uk-icon="pencil"></a> <span></> <a  action=""  onclick="eliminar(' +
                        pedido.idmaestro + ');" class=" " uk-icon="trash"></a>' + '</td>' +

                        '</tr>'
                });
                $("#tablapedidos").html(html);
            });
        }

    </script>

</body>

</html>
