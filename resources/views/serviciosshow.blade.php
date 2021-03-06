<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
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

    <div class="uk-section uk-section-muted">








        <div>
            <div class="uk-div uk-padding">


                <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
                    <h1>Servicios</h1>
                    <h6>??Importante! Tama??o Recomendado para ??cono: <br>
                        Alto: 468Px <br>
                        Ancho: 358Px
                    </h6>
                    <h5>-------------------</h5>
                    <h6>??Importante! Tama??o Recomendado para Representaci??n: <br>
                        Alto: 1800Px <br>
                        Ancho: 1440Px
                    </h6>


                    <div class="uk-div uk-padding">
                        <a href="/menu/menuadmon/servicios/create" class="uk-button uk-button-primary">Agregar Nueva
                            Imagen</a>
                    </div>


                </div>
            </div>
        </div>

        <div class="uk-padding">
            <table class="uk-table uk-table-hover uk-table-striped uk-table-divider uk-table-hover ">



                <thead>
                    <th>Id</th>
                    <th>T??tulo</th>
                    <th>??cono</th>
                    <th>Representaci??n</th>
                    <th>Descripci??n</th>
                    <th>opciones</th>


                </thead>
                <tbody id="datos">
                    @foreach ($servicios as $item)


                        <tr>
                            <td>{{ $item->IdServicio }}</td>
                            <td>{{ $item->titulo }}</td>


                            <td><img src="{{ asset('uploads/servicios/' . $item->imagen) }}" width="400" height="200"
                                    srcset=""> </td>


                            <td><img src="{{ asset('uploads/servicios/' . $item->imagenrep) }}" width="400"
                                    height="200" srcset=""> </td>


                            <td>{{ $item->descripcion }}</td>

                            <td>
                                <a href="{{ url('/menu/menuadmon/servicios/edit/' . $item->IdServicio) }}"
                                    class="uk-icon-button  uk-margin-small-right" uk-icon="icon:pencil; ratio: 1.5"></a>





                                <a onclick="return confirm('??Est?? seguro que desea continuar?')"
                                    href="{{ url('/menu/menuadmon/servicios/delete/' . $item->IdServicio) }}"
                                    class="uk-icon-button  uk-margin-small-right" uk-icon="icon:trash; ratio: 1.5"></a>



                            </td>









                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>


        <!-- Bot??n de atr??s  -->
        <div class="uk-padding-small uk-background-muted uk-padding">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

                <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="margin-left: 100px">Atr??s</a>


            </div>
        </div>


    </div>


    {{-- <div class="uk-section uk-section-muted">








        <div>
            <div class="uk-div uk-padding">


                <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
                    <h1>Promociones</h1>
                    <h6>??Importante! Tama??o Recomendado: <br>
                        Alto: 600Px <br>
                        Ancho: 1700Px
                    </h6>


                    <div class="uk-div uk-padding">
                        <a href="/menu/menuadmon/promociones/create" class="uk-button uk-button-primary">Agregar Imagen
                            Promocional</a>
                    </div>


                </div>
            </div>
        </div>

        <div class="uk-padding">
            <table class="uk-table uk-table-hover uk-table-striped uk-table-divider uk-table-hover ">



                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Descripci??n</th>
                    <th>opciones</th>


                </thead>
                <tbody id="datos">
                    @foreach ($promocion as $item)


                        <tr>
                            <td>{{ $item->IdPromocion }}</td>

                            <td><img src="{{ asset('uploads/promocion/' . $item->Imagen) }}" width="400" height="200"
                                    srcset=""> </td>

                            <td>{{ $item->descripcion }}</td>

                            <td>
                                <a href="{{ url('/menu/menuadmon/promociones/edit/' . $item->IdPromocion) }}"
                                    class="uk-icon-button  uk-margin-small-right" uk-icon="icon:pencil; ratio: 1.5"></a>



                                <a onclick="return confirm('??Est?? seguro que desea continuar?')"
                                    href="{{ url('/menu/menuadmon/promociones/delete/' . $item->IdPromocion) }}"
                                    class="uk-icon-button  uk-margin-small-right" uk-icon="icon:trash; ratio: 1.5"></a>

                            </td>









                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>


        <!-- Bot??n de atr??s  -->
        <div class="uk-padding-small uk-background-muted uk-padding">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

                <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="margin-left: 100px">Atr??s</a>


            </div>
        </div>

    </div> --}}



    {{-- insersion de las imagenes --}}
    {{-- <script>
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
                url: url
                , method: method
                , data: data,
                // error(ext) {
                //     let error = e.responseJSON.errors;
                //     let msj = error[Object.keys(error)[0]][0];
                //     alert(msj);
                // },
                success(res) {
                    onSucess(res)

                }
            })
        }

        function guardarpedido() {

            let data = {

                imagen: $("#imagen").val()
                , descripcion: $("#descripcion").val(),

            };
            peticionapi(data, 'POST', function(res) {
                alert('Guardado con exito')
            });
        }





        function cargarpedido() {
            peticionapi({}, "GET", function(res) {
                pedido = res;
                console.log(pedido);
                let html = '';
                res.forEach(pedido => {
                    html += '<tr>' +
                        '<td>' + pedido.IdPromocion + '</td>' +
                        '<td>' + '<img src=' + pedido.Imagen +
                        ' alt="Girl in a jacket" width="500" height="600">' + '</td>' +
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

    </script> --}}







</body>

</html>
