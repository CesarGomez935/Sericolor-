<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
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
    <!-- Nav Bar -->
    <nav class="uk-navbar uk-navbar-container">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span
                    class="uk-margin-small-left">Promociones</span>
            </a>
        </div>

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
                    <li class="uk-active"> <a href="/menu/pedidos_impresion_digital"> Pedidos Impresión digital
                        </a></li>
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

    <div class="uk-section uk-section-muted">





        <div>
            <div class="uk-div uk-padding">
                <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
                    <h1>Cargar Imagen promocional</h1>
                    <div class="uk-margin" uk-margin>
                        <div uk-form-custom="target: true">
                            <input id="imagen" type="file">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Subir Imagen"
                                disabled>
                        </div>
                        <button id="guardar" class="uk-button uk-button-default">Cargar Imagen Promocional</button>

                        <textarea class="form-control" id="descripcion" placeholder="Descripción" rows="3"></textarea>


                    </div>

                </div>
            </div>
        </div>

        <div class="uk-padding">
            <table class="uk-table uk-table-hover uk-table-striped uk-table-divider uk-table-hover ">



                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Descripción</th>

                </thead>
                <tbody id="datos">

                </tbody>
            </table>
        </div>


        <!-- Botón de atrás  -->
        <div class="uk-padding-small uk-background-muted uk-padding">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

                <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>


            </div>
        </div>

    </div>

    {{-- insersion de las imagenes --}}
    <script>
        let pedido = [];

        cargarpedido();

        $('#guardar').click(function(e) {
            guardarpedido();
            

            alert("Se agrego su orden");

        });

        function peticionapi(data, method, onSucess) {
            let url = '/api/promocion';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.IdPromocion;
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

                imagen: $("#imagen").val(),
                descripcion: $("#descripcion").val(),

            };
            peticionapi(data, 'POST', function(res) {
                alert('Guardado con exito')
            });
        }

        function cargarpedido() {
            peticionapi({}, 'GET', function(res) {
                pedido = res;
  //              console.log(res);
                let html = '';
                res.forEach(pedido => {
                    html += '<tr>' +
                        '<td>' + pedido.IdPromocion + '</td>' +
                        '<td>' + pedido.imagen + '</td>' +
                        '<td>' + pedido.descripcion + '</td>' +
                        '<td><button onclick="editar(' + pedido.IdPromocion +
                        ')" class="uk-icon-button uk-margin-small-right" uk-icon="file-edit"></button></td>' +
                        '<td><button onclick="eliminar(' + pedido.IdPromocion +
                        ')"class="uk-icon-button uk-margin-small-right" uk-icon="trash"></button></td></td>' +
                        '</tr>'
                });
                $("#datos").html(html);
            });
        }
    </script>

    





</body>

</html>
