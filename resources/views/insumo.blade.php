<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
    <link rel="icon" href="https://img.icons8.com/fluent/48/000000/factory.png" type="image/png" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="uk-container">

        <h3>Trabajadores</h3>
        <button class="uk-button uk-button-primary" id="agregar">Nuevo Trabajador</button>
        <!--Tablas de productos-->
        <table class="uk-table uk-table-hover uk-table-divider">
            <thead>
                <tr>
                    <th>Id_Trabajadores</th>
                    <th>1er Nombre</th>
                    <th>2do Nombre</th>
                    <th>Apellidos</th>
                    <th>sexo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Cargo</th>

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

                            <legend class="uk-legend">Ingresar nuevo trabajador</legend>

                            <div class="uk-margin">
                                <label>IdTrabajador</label>
                                <input class="uk-input" type="number" id="Id_trabajadores"
                                    placeholder="IdTrabajador" disabled>
                            </div>
                            <div class="uk-margin">
                                <label>1er Nombre</label>
                                <input class="uk-input" type="text" id="1Nombre" placeholder="1erNombre">
                            </div>
                            <div class="uk-margin">
                                <label>2do Nombre</label>
                                <input class="uk-input" type="text" id="2Nombre" placeholder="2doNombre">
                            </div>
                            <div class="uk-margin">
                                <label>Apellidos</label>
                                <input class="uk-input" type="text" id="Apellidos" placeholder="Apellidos">
                            </div>

                            <div class="uk-margin">
                                <label>Sexo</label>
                                <select class="uk-select" id="sexo">
                                    <option value='M'>Masculino</option>
                                    <option value='F'>Femenino</option>
                                </select>
                                <br>
                            </div>
                            <div class="uk-margin">
                                <label>Direccion</label>
                                <input class="uk-input" type="text" id="direccion" placeholder="Direccion">
                            </div>
                            <div class="uk-margin">
                                <label>Telefono</label>
                                <input class="uk-input" type="text" id="telefono" placeholder="Telefono">
                            </div>
                            <label>cargo</label>
                            <select class="uk-select" id="Cargo">
                                <option value='A'>Administrador</option>
                                <option value='E'>Empleado</option>
                                <option value='O'>Oportuno</option>
                                <option value='T'>Temporal</option>
                            </select>
                            <br>
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
            let url = 'api/trabajador';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.id;
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
                id: $("#Id_trabajadores").val(),
                nombre1: $("#1Nombre").val(),
                nombre2: $("#2Nombre").val(),
                apellidos: $("#Apellidos").val(),
                sexo: $("#sexo").val(),
                direccion: $("#direccion").val(),
                telefono: $("#telefono").val(),
                Cargo: $("#Cargo").val()
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
                        '<td>' + trabajadores.id + '</td>' +
                        '<td>' + trabajadores.nombre1 + '</td>' +
                        '<td>' + trabajadores.nombre2 + '</td>' +
                        '<td>' + trabajadores.apellidos + '</td>' +
                        '<td>' + trabajadores.sexo + '</td>' +
                        '<td>' + trabajadores.direccion + '</td>' +
                        '<td>' + trabajadores.Telefono + '</td>' +
                        '<td>' + trabajadores.Cargo + '</td>' +
                        '<td><button onclick="editar(' + trabajadores.id +
                        ')" class="uk-icon-button uk-margin-small-right" uk-icon="file-edit"></button></td>' +
                        '<td><button onclick="eliminar(' + trabajadores.id +
                        ')"class="uk-icon-button uk-margin-small-right" uk-icon="trash"></button></td></td>' +
                        '</tr>'
                });
                $("#tablatrabajadores").html(html);
            });


        }

        function editar(id) {
            UIkit.modal('#FormTrabajadores').show();
            let data = trabajadores.filter(trabajadores => {
                return trabajadores.id == id;
            })
            $("#Id_trabajadores").val(data[0].id),
                $("#1Nombre").val(data[0].nombre1),
                $("#2Nombre").val(data[0].nombre2),
                $("#Apellidos").val(data[0].apellidos),
                $("#sexo").val(data[0].sexo),
                $("#direccion").val(data[0].direccion),
                $("#telefono").val(data[0].Telefono),
                $("#Cargo").val(data[0].Cargo);

        }

        function eliminar(id) {
            peticionapi({
                id: id
            }, 'DELETE', function(res) {
                cargarproductos();
            });
        }

        function limpiardatos() {
            $("#Id_trabajadores").val(''),
                $("#1Nombre").val(''),
                $("#2Nombre").val(''),
                $("#Apellidos").val(''),
                $("#sexo").val(''),
                $("#direccion").val(''),
                $("#telefono").val(''),
                $("#Cargo").val('');
        }
    </script>
</body>

</html>
