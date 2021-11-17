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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="uk-container">

        <h3>Insumos para los servicios de Sericolor</h3>
        <button class="uk-button uk-button-primary" id="agregar">Nuevo Insumo</button>
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
                                </select>
                                <br>
                            </div>


                    </div>
                    <button class="uk-button uk-button-primary " id="guardar" class="uk-align-center">Guardar</button>
                    </fieldset>
                </div>
            </div>
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

        function peticionapi(data, method, onSuccess) {
            let url = '/api/insumo';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.IdInsumo;
            }
            $.ajax({
                url: url,
                method: method,
                data: data,
                error(e) {
                    let error = e.responseJSON.errors;
                    let msj = error[Object.keys(error)[0]][0];
                    alert(msj);
                },
                success(res) {
                    onSuccess(res);
                }
            })
        }

        function guardarproductos() {
            let data = {
                Tipo: $("#2Nombre").val(),
                Descripcion: $("#Apellidos").val(),
                idcategoria: $("#cat").val(),
            };
            let method1 = (data.id == '' ? 'POST' : 'PUT');
            peticionapi(data, method1, function(res) {
                UIkit.modal('#FormTrabajadores').hide();
                cargarproductos();
                limpiardatos();
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
                        '<td><button onclick="eliminar(' + trabajadores.IdInsumo +
                        ')"class="uk-icon-button uk-margin-small-right" uk-icon="trash"></button></td></td>' +
                        '</tr>'
                });
                $("#tablatrabajadores").html(html);
            });


        }

        function editar(id) {
            UIkit.modal('#FormTrabajadores').show();
            let data = trabajadores.filter(trabajadores => {
                return trabajadores.IdInsumo == id;
            })

            $("#2Nombre").val(data[0].Tipo),
                $("#Apellidos").val(data[0].Descripcion),
                $("#cat").val(data[0].descripcion);

        }

        function eliminar(id) {
            peticionapi({
                IdInsumo: id
            }, 'DELETE', function(res) {
                cargarproductos();
            });
        }

        function limpiardatos() {

            $("#2Nombre").val(''),
                $("#Apellidos").val(''),
                $("#cat").val('');

        }
    </script>
</body>

</html>
