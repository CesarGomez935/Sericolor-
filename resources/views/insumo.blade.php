<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insumo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<header>
    <!-- NavBar-->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Agregar Insumos</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- Off canvas, Elemento desplegable UiKit -->
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
                        <li> <a href="/menu/menuadmon/insumos">Insumos</a></li>
                        <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>
                        <li> <a href="/menu/menuadmon/clientes">Clientes</a></li>
                        <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                        <li> <a href="/menu/menuadmon/promociones">Menú Principal</a></li>
                    </ul>
                    <hr class="uk-divider-icon">

                    <li class="uk-parent">  Sesión </li>
                     <ul class="uk-nav-sub">      
                          <li><a href="/login/cerrar"><b> Cerrar Sesión </b></a></li>
                     </ul>

                </ul>

            </div>
        </div>
    </nav>

</header>

<body>
    <div class="uk-container"><br>

        <h3>Insumos para los servicios de Sericolor</h3>




        <div class="uk-margin">

            <b> <label id="buscar_cliente" for="form-stacked-text" class="uk-form-label">Buscar Insumo</label> </b>
            <div class="uk-inline uk-padding">

                <a onclick="getid();" class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>


                <input placeholder="Busqueda por Codigo, Tipo, Descripcion, Categoria" oninput="getid();" id="id_busqueda" class="uk-input uk-form-width-large" type="text">
            </div>
            <button id="agregar" class="uk-button-primary uk-button uk-margin uk-padding ">Nuevo Insumo</button>

        </div>
        <div class=" ">
            <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                <a href="/menu/menuadmon" class="uk-button uk-button-primary " style="">Atrás</a>

            </div>
        </div>


        <!--Tablas de productos-->
        <table class="uk-table uk-table-hover uk-table-divider">
            <thead>
                <tr>
                    <th>Codigo de Insumo</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>

                    <th coldspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody id="tablatrabajadores">
            </tbody>
        </table>
    </div>
    <!--Formulario Modal-->
    <div class="uk-container">
        <div id="FormTrabajadores" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div uk-height-viewport>
                    <div class="uk-width-1-2 uk-align-center">
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Ingresar nuevo Insumos</legend>

                            <div class="uk-margin">
                                <label>Tipo</label>
                                <input class="uk-input" type="text" id="2Nombre" placeholder="Tipo de Insumo">
                            </div>
                            <div class="uk-margin">
                                <label>Descripcion</label>
                                <input class="uk-input" type="text" id="Apellidos" placeholder="Descripción">
                            </div>

                            <div class="uk-margin">
                                <label>Categoria</label>
                                <select class="uk-select" id="cat">
                                    <option value='1'>Sublimacion</option>
                                    <option value='2'>Serigrafia</option>
                                    <option value='3'>Impresion digital</option>
                                    <option value='4'>Bordado</option>
                                    <option value='5'>Multiple</option>

                                </select>
                                <br>
                            </div>


                    </div>
                    <button class="uk-button uk-button-primary uk-position-center " id="guardar" class="uk-align-center">Guardar</button>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="uk-container">
        <div id="FormEditar" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div uk-height-viewport>
                    <div class="uk-width-1-2 uk-align-center">
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Ingresar nuevo Insumos</legend>

                            <div class="uk-margin">
                                <label>Tipo</label>
                                <input class="uk-input" type="text" id="2Nombre1" placeholder="Tipo de Insumo">
                            </div>
                            <div class="uk-margin">
                                <label>Descripcion</label>
                                <input class="uk-input" type="text" id="Apellidos1" placeholder="Descripción">
                            </div>

                            <div class="uk-margin">
                                <label>Categoria</label>
                                <select class="uk-select" id="cat1">
                                    <option value='1'>Sublimacion</option>
                                    <option value='2'>Serigrafia</option>
                                    <option value='3'>Impresion digital</option>
                                    <option value='4'>Bordado</option>
                                    <option value='5'>Multiple</option>

                                </select>
                                <br>
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="text" id="id" disabled hidden placeholder="Descripción">
                            </div>
                    </div>
                    <button class="uk-button uk-button-primary uk-position-center " id="guardar1" class="uk-align-center">Guardar</button>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <script>
        let trabajadores = [];
        $('#agregar').click(function(e) {
            UIkit.modal('#FormTrabajadores').show();
        });
        cargarproductos();
        $('#guardar').click(function(e) {
            guardarproductos();
        });

        $("#guardar1").click(function(e) {

            updateinsumo();

        });

        function peticionapi(data, method, onSuccess) {
            let url = '/api/insumo';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.IdInsumo;
            }
            $.ajax({
                url: url
                , method: method
                , data: data
                , error(e) {
                    let error = e.responseJSON.errors;
                    let msj = error[Object.keys(error)[0]][0];
                    alert(msj);
                }
                , success(res) {
                    onSuccess(res);
                }
            })
        }

        function guardarproductos() {
            let data = {
                Tipo: $("#2Nombre").val()
                , Descripcion: $("#Apellidos").val()
                , idcategoria: $("#cat").val()
            , };
            peticionapi(data, 'POST', function(res) {
                alert('Guardado con exito')
                UIkit.modal('#FormTrabajadores').hide();
                cargarproductos();
            });
            limpiardatos();
        }

        function updateinsumo() {

            let data = {
                IdInsumo: $("#id").val()
                , Tipo1: $("#2Nombre1").val()
                , Descripcion1: $("#Apellidos1").val()
                , idcategoria1: $("#cat1").val()
            , };

            peticionapi(data, 'PUT', function(res) {
                alert('Guardado con exito')
                UIkit.modal('#FormEditar').hide();
                cargarproductos();
            });
            limpiardatos();
        }

        function cargarproductos() {
            peticionapi({}, 'GET', function(res) {
                trabajadores = res;
                let html = '';
                res.forEach(trabajadores => {
                    html += '<tr>' +
                        '<td>' + trabajadores.IdInsumo + '</td>' +
                        '<td>' + trabajadores.Tipo + '</td>' +
                        '<td>' + trabajadores.Descripcion + '</td>' +
                        '<td>' + trabajadores.descripcion + '</td>' +
                        '<td><button onclick="editar(' + trabajadores.IdInsumo +
                        ')" class="uk-icon-button uk-margin-small-right" uk-icon="file-edit"></button></td>' +
                        '</tr>'
                });
                $("#tablatrabajadores").html(html);
            });


        }

        function editar(id) {
            UIkit.modal('#FormEditar').show();

            let data = trabajadores.filter(trabajadores => {
                return trabajadores.IdInsumo == id;


            })

            $("#id").val(data[0].IdInsumo)
                , $("#2Nombre1").val(data[0].Tipo)
                , $("#Apellidos1").val(data[0].Descripcion)
                , $("#cat1").val(data[0].idcategoria);

        }

        function eliminar(id) {
            peticionapi({
                IdInsumo: id
            }, 'DELETE', function(res) {
                cargarproductos();
            });
        }

        function limpiardatos() {

            $("#2Nombre").val('')
                , $("#Apellidos").val('')
                , $("#cat").val('');

        }


        function getid() {

            id = document.getElementById("id_busqueda").value;



            if (id == "") {
                cargarproductos();
            } else {
                console.log(id);
                cargarinsumosbusqueda();


            }

        }

        function peticionapi2(data, method, onSuccess) {


            let url = '/api/getinsumobusqueda/' + id;


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

        function cargarinsumosbusqueda() {
            peticionapi2({}, 'GET', function(res) {
                trabajadores = res;
                let html = '';
                res.forEach(trabajadores => {
                    html += '<tr>' +
                        '<td>' + trabajadores.IdInsumo + '</td>' +
                        '<td>' + trabajadores.Tipo + '</td>' +
                        '<td>' + trabajadores.Descripcion + '</td>' +
                        '<td>' + trabajadores.descripcion + '</td>' +
                        '<td><button onclick="editar(' + trabajadores.IdInsumo +
                        ')" class="uk-icon-button uk-margin-small-right" uk-icon="file-edit"></button></td>' +
                        '<td><button onclick="eliminar(' + trabajadores.IdInsumo +
                        ')" class="uk-icon-button uk-margin-small-right" uk-icon="trash"></button></td> </td > ' +
                        '</tr>'
                });
                $("#tablatrabajadores").html(html);

            });
        }

    </script>
</body>

</html>
