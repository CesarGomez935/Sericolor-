<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación | Impresión Digital</title>
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

<body onpageshow="fecha();">

    <!-- NavBar-->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Impresión Digital</span>
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


    <form action="" method="">
        <div>

            <div class="uk-padding uk-background-muted">

                <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_fact">Fecha de Facturación</label>
                        <input id="fecha_fact" name="fecha_facturacion" type="date" class="uk-input">
                    </div>
                    <div class="uk-inline uk-width-1-2 ">
                        <label for="fecha_ent">Nombre del cliente <a href="/menu/menuadmon/clientes/agregar_cliente">
                                ¿Nuevo Cliente?</a></label>
                        <select id="cliente" name="cliente" class="uk-select" placeholder="Cliente">

                        </select>
                    </div>
                </div>
            </div>
            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div class="uk-div uk-background-muted uk-padding">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

                </script>

                <h1 class="uk-text-center">Especificaciones</h1>
                <table class="uk-table uk-table-divider">
                    <thead>
                        <tr>
                            <th>Alto</th>
                            <th>Ancho</th>
                            <th>Metros cuadrados</th>
                            <th>Precio por metro cuadrado</th>

                            <th>costo</th>
                            <th>cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input id="alto" oninput="area();" class="uk-input area" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="ancho" oninput="area();" class="uk-input area" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="mt2" oninput="costos();" class="uk-input costo" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="precio_mt2" oninput="costos();" class="uk-input costo" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="costo" oninput="multi();" class="uk-input monto" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="cantidad" oninput="multi();" class="uk-input monto" min="0" type="number" placeholder="0" value="0"></td>
                            <td><input id="sub_total" name="sub_total" class="uk-input" min="0" value="" type="number" placeholder="0" value="0"> </td>


                        </tr>
                        <tr>

                            <td colspan="2"> <select class="uk-select" name="insumos de la tabla" id="insumos">
                                    <option disabled value="">Insumos</option>
                                </select>
                            </td>
                            <td colspan="3"><textarea type="number" id="observacion" class="uk-input uk-form-width-large " placeholder="Observacion"></textarea></td>
                            <td colspan="2"> <a class="uk-button uk-button-primary" onclick="insertar(); abonos();">Ingresar
                                    Pedido</a></td>

                        </tr>

                    </tbody>
                </table>

                <script type="text/javascript">
                    function borrar() {


                        $(document).on('click', '.borrar', function(event) {
                            event.preventDefault();
                            $(this).closest('tr').remove();

                            calcular();
                        });






                    }


                    function area() {
                        var mt2 = 1;
                        var change = false; //
                        $(".area").each(function() {
                            if (!isNaN(parseFloat($(this).val()))) {
                                change = true;
                                mt2 *= parseFloat($(this).val());
                            }
                        });
                        // Si se modifico el valor , retornamos la multiplicación
                        // caso contrario 0
                        mt2 = (change) ? mt2 : 0;
                        document.getElementById('mt2').value = mt2;


                    }

                    function costos() {
                        var costo = 1;
                        var change = false; //
                        $(".costo").each(function() {
                            if (!isNaN(parseFloat($(this).val()))) {
                                change = true;
                                costo *= parseFloat($(this).val());
                            }
                        });
                        // Si se modifico el valor , retornamos la multiplicación
                        // caso contrario 0
                        costo = (change) ? costo : 0;
                        document.getElementById('costo').value = costo;


                    }


                    function multi() {
                        var total = 1;
                        var change = false; //
                        $(".monto").each(function() {
                            if (!isNaN(parseFloat($(this).val()))) {
                                change = true;
                                total *= parseFloat($(this).val());
                            }
                        });
                        // Si se modifico el valor , retornamos la multiplicación
                        // caso contrario 0
                        total = (change) ? total : 0;
                        document.getElementById('sub_total').value = total;


                    }

                </script>

                <div class="uk-background-muted uk-padding">

                    <div class="uk-grid-small" uk-grid>
                        <table id="Tabla" class="uk-table uk-table-hover uk-table-divider uk-table-small">
                            <thead>
                                <tr>

                                    <th>Alto</th>
                                    <th>Ancho</th>
                                    <th>Metros cuadrados</th>
                                    <th>Precio por metro cuadrado</th>
                                    <th>IdInsumo</th>
                                    <th>Insumo</th>

                                    <th>costo</th>
                                    <th>cantidad</th>
                                    <th>Sub-Total</th>
                                    <th>Observacion</th>


                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>

                                    <td colspan="8"><label for="Total" class="uk-label">Total</label></td>
                                    <td><input class="uk-form-width-xsmall saldo" disabled id="total"></input></td>



                                </tr>
                            </tfoot>

                        </table>
                    </div>
                    <br>
                    <script type="text/javascript">
                        function insertar() {


                            var alto = document.getElementById("alto").value;
                            var ancho = document.getElementById("ancho").value;
                            var mt2 = document.getElementById("mt2").value;
                            var precio_mt2 = document.getElementById("precio_mt2").value;
                            var insumoselect = document.getElementById("insumos");
                            var insumo = insumoselect.options[insumoselect.selectedIndex].text;
                            var IdInsumo = document.getElementById("insumos").value;

                            var costo = document.getElementById("costo").value;
                            var cant = document.getElementById("cantidad").value;
                            var sub_total = document.getElementById("sub_total").value;
                            var Observacion = document.getElementById("observacion").value;




                            var htmlTags = '<tr>' +
                                '<td>' + alto + '</td>' +
                                '<td>' + ancho + '</td>' +
                                '<td>' + mt2 + '</td>' +
                                '<td>' + precio_mt2 + '</td>' +
                                '<td>' + IdInsumo + '</td>' +
                                '<td>' + insumo + '</td>' +

                                '<td>' + costo + '</td>' +
                                '<td>' + cant + '</td>' +
                                '<td>' + sub_total + '</td>' +
                                '<td>' + Observacion + '</td>' +
                                '<td>' + '<a onclick="borrar();" class=" borrar uk-icon-button" uk-icon="icon: trash; ratio: 0.9"></a>' +
                                '</td>' +



                                '</tr>';

                            $('#Tabla tbody').append(htmlTags);

                            calcular();

                            document.getElementById("mt2").value = null;
                            document.getElementById("cantidad").value = null;
                            document.getElementById("sub_total").value = null;
                            document.getElementById("alto").value = null;
                            document.getElementById("ancho").value = null;
                            document.getElementById("costo").value = null;
                            document.getElementById("insumos").value = null;

                            document.getElementById("precio_mt2").value = null;
                            document.getElementById("observacion").value = null;






                        }

                        function Obtener_datos() {

                            var filas = document.querySelectorAll("#Tabla tbody tr");

                            var contador = 0;

                            const alto = [];
                            const ancho = [];
                            const mt2 = [];
                            const prec_mt2 = [];
                            const costo = [];
                            const cantidad = [];
                            const sub_total = [];
                            const Observacion = [];

                            var total = document.getElementById("total").value;

                            console.log(filas);





                            filas.forEach(function(e) {


                                // obtenemos las columnas de cada fila
                                var columnas = e.querySelectorAll("td");



                                var alto_ = columnas[0].textContent;
                                var ancho_ = columnas[1].textContent;
                                var mt2_ = columnas[2].textContent;
                                var Prec_mt2_ = columnas[3].textContent;
                                var costo_ = columnas[4].textContent;
                                var cantidad_ = parseFloat(columnas[5].textContent);
                                var sub_total_ = parseFloat(columnas[6].textContent);
                                var Observacion_ = columnas[7].textContent;



                                alto[contador] = alto_;
                                ancho[contador] = ancho_
                                mt2[contador] = mt2_;
                                prec_mt2[contador] = Prec_mt2_;
                                costo[contador] = costo_;
                                cantidad[contador] = cantidad_;
                                sub_total[contador] = sub_total_;
                                Observacion[contador] = Observacion_;




                                contador = contador + 1;


                                console.log(contador)




                            })
                            console.log(filas)




                        }

                        function calcular() {
                            // obtenemos todas las filas del tbody
                            var filas = document.querySelectorAll("#Tabla tbody tr");


                            var total = 0;
                            console.log(filas);


                            // recorremos cada una de las filas
                            filas.forEach(function(e) {

                                // obtenemos las columnas de cada fila
                                var columnas = e.querySelectorAll("td");
                                console.log(columnas);



                                var importe = parseFloat(columnas[8].textContent);

                                // mostramos el total por fila
                                // columnas[12].textContent = (cantidad * importe).toFixed(2);

                                total += importe;
                                console.log(total);
                            })
                            // mostramos la suma total
                            var filas = document.querySelectorAll("#Tabla tfoot tr td");
                            console.log(total);
                            document.getElementById("total").value = total;

                        }

                        function fecha() {
                            $(document).ready(function() {
                                var date = new Date();

                                var day = date.getDate();
                                var month = date.getMonth() + 1;
                                var year = date.getFullYear();

                                if (month < 10) month = "0" + month;
                                if (day < 10) day = "0" + day;
                                var today = year + "-" + month + "-" + day;
                                $("#fecha_fact").attr("value", today);
                            });
                        }

                    </script>
                    </table>
                </div>

            </div>



            <div class="uk-background-muted uk-padding">
                <h1 class="uk-text-center">Notas</h1>

                <div>

                    <textarea id="notas" name="Notas" class="uk-textarea" placeholder="Notas"></textarea>



                </div>
            </div>

            <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
                <div>


                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <div class="uk-form-horizontal uk-margin-large">

                        <div class="uk-margin">
                            <label for="abono" class="uk-form-label" for="form-horizontal-text">Abono</label>
                            <div class="uk-form-controls">
                                <input id="abono" min="0" name="Abono" oninput="abonos();" class="uk-input uk-form-width-large" id="form-horizontal-text" type="number" placeholder="">

                                <script>
                                    function abonos() {
                                        var sub_total = document.getElementById("total").value;
                                        var abono = document.getElementById("abono").value;
                                        var total = 0;

                                        total = sub_total - abono;

                                        console.log(sub_total, abono, total); //


                                        document.getElementById('saldo').value = total;



                                    }

                                </script>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label for="saldo" class="uk-form-label" for="form-horizontal-text">Saldo</label>
                            <div class="uk-form-controls">
                                <input id="saldo" name="Saldo" class="uk-input uk-form-width-large" id="form-horizontal-text" type="number" placeholder="">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label for="banco" class="uk-form-label" for="form-horizontal-text">Método de Pago</label>
                            <div class="uk-form-controls">

                                <select class="uk-select uk-form-width-large" id="metodo_de_pago">


                                    <option value='1'>Efectivo</option>
                                    <option value='2'>Tarjeta</option>
                                    <option value='3'>Transferencia Bancaria</option>
                                    <option value='4'>Móvil</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="estado" class="uk-form-label" for="form-horizontal-text">Estado del
                                Pedido</label>
                            <div class="uk-form-controls">


                                <select disabled class="uk-select uk-form-width-large" name="" id="estado">
                                    <option selected value="No Completado">No Completado</option>
                                    <option value="Completado">Completado</option>

                                </select>
                            </div>

                        </div>



                    </div>

                </div>
                <div>

                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <div class="uk-form-horizontal uk-margin-large">

                        <div class="uk-margin">
                            <label for="autriza" class="uk-form-label" for="form-horizontal-text">Autoriza
                                Pedido</label>
                            <div class="uk-form-controls">
                                <select class="uk-select uk-form-width-large" name="" id="autorizapedido">
                                    <option value="">Seleccionar</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="recibe" class="uk-form-label" for="form-horizontal-text">Recibe Pedido</label>
                            <div class="uk-form-controls">

                                <select class="uk-select uk-form-width-large" name="" id="recibepedido">
                                    <option value="">Seleccionar</option>
                                </select>

                            </div>

                        </div>

                        <div class="uk-margin">
                            <label for="factura" class="uk-form-label" for="form-horizontal-text">N° Factura</label>
                            <div class="uk-form-controls">
                                <input id="factura" name="num_factura" class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label for="pedido" class="uk-form-label" for="form-horizontal-text">Tipo de pago</label>
                            <div class="uk-form-controls">
                                <select class="uk-select uk-form-width-large" name="" id="tipodepago">
                                    <option value="1">Contado</option>
                                    <option value="2">Credito</option>
                                </select>


                            </div>
                        </div>


                    </div>


                </div>

                <select class="uk-select" id="tipo_de_pedido" disabled hidden>
                    <option value='Impresion_Digital'>Impresion_Digital</option>
                </select>

                <select class="uk-select" id="cat" disabled hidden>
                    <option value='3'>Impresion_Digital</option>
                </select>
                <select class="uk-select" id="cat1" disabled hidden>
                    <option value='27'>Impresion_Digital</option>
                </select>



            </div>

            <!-- Botones atrás y actualizar-->
            <div class="uk-padding uk-background-muted uk-padding  ">
                <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
                    <a href="/menu/menu_facturacion" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
                    <a id="guardar" href="/menu/pedidos_impresion_digital" class="uk-button uk-button-secondary guardar" style="margin-left: 100px">Guardar</a>


                </div>
            </div>

        </div>

    </form>

    <script>
        var cod_seg_rand = 0;

        function getRandom() {

            cod_seg_rand = Math.floor((Math.random() * 10000000));
            console.log(cod_seg_rand);

        }
        let pedido = [];
        let usuarios = [];
        var cod_seg_rand = 0;
        const arreglo = [];
        getRandom();
        cargarpedido();
        cargarusuario();
        cargarcliente();
        cargarinsumo();


        $('#guardar').click(function(e) {
            cargar_detalle();
            guardarpedido();



        });

        function peticionapi2(data, method, onSuccess) {


            let url = '/api/usuario';
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

        function peticionapi3(data, method, onSuccess) {


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

        function cargarinsumo() {

            peticionapimp({}, 'GET', function(res) {
                usuarios = res;
                console.log(res);
                let html = '<option disabled selected value=""> Seleccionar Insumo </option>';

                res.forEach(usuarios => {
                    html += '<option value="' + usuarios.IdInsumo + '">' + usuarios
                        .Descripcion +
                        '</option>'
                });
                $("#insumos").html(html);
            });







        }

        function peticionapimp(data, method, onSuccess) {


            let url = '/api/getinsumoimpdigital';
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


        function cargarusuario() {

            peticionapi2({}, 'GET', function(res) {
                usuarios = res;
                console.log(res);
                let html = '<option value=""> Seleccionar </option>';

                res.forEach(usuarios => {
                    html += '<option value="' + usuarios.IdUsuario + '">' + usuarios.Primer_Nombre + ' ' +
                        usuarios.Segundo_Nombre + ' ' + usuarios.Primer_Apellido + ' ' + usuarios
                        .Segundo_Apellido +
                        '</option>'
                });
                $("#recibepedido").html(html);
            });
        }



        function cargarcliente() {

            peticionapi3({}, 'GET', function(res) {
                cliente = res;
                console.log(res);
                let html = '<option value=""> Seleccionar </option>';
                res.forEach(cliente => {
                    html += '<option value="' + cliente.IdCliente + '">' + cliente.Primer_Nombre + ' ' +
                        cliente.Segundo_Nombre + ' ' + cliente.Primer_Apellido + ' ' + cliente
                        .Segundo_Apellido +
                        '</option>'
                });
                $("#cliente").html(html);
                $("#autorizapedido").html(html);

            });
        }


        function peticionapi(data, method, onSucess) {
            let url = '/api/pedidoimp';
            if (method == 'PUT' || method == 'DELETE') {
                url += '/' + data.idmaestro;
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


                }
            })
        }

        function getRandom() {

            cod_seg_rand = Math.floor((Math.random() * 10000000));
            console.log(cod_seg_rand);

        }

        function guardarpedido() {




            let data = {

                IdCliente: $("#cliente").val()
                , IdUsuario: $("#recibepedido").val()
                , IdCategoria: $("#cat").val()
                , fecha: $("#fecha_fact").val()
                , notas: $("#notas").val()
                , total_costo: $("#total").val()
                , Saldo: $("#saldo").val()
                , abono: $("#abono").val()
                , codseguimiento: cod_seg_rand,


                idmetodo: $("#metodo_de_pago").val()
                , cod: $("#factura").val()
                , estado: $("#estado").val()
                , tipodepago: $("#tipodepago").val(),

                //funcion que llama al ar
                detalle: JSON.stringify(arreglo)




            };

            console.log(data);



            peticionapi(data, 'POST', function(res) {
                alert('Guardado con exito')
            });
        }





        function cargarpedido() {
            peticionapi({}, 'GET', function(res) {
                console.log(res);
                alert('respuesta satisfactoria');
            });

        }

        function cargar_detalle() {

            var filas = document.querySelectorAll("#Tabla tbody tr");

            var contador = 0;

            const alto = [];
            const ancho = [];
            const mt2 = [];
            const prec_mt2 = [];
            const costo = [];
            const cantidad = [];
            const sub_total = [];
            const Observacion = [];

            var total = document.getElementById("total").value;

            console.log(filas);






            filas.forEach(function(e) {


                // obtenemos las columnas de cada fila
                var columnas = e.querySelectorAll("td");



                var alto_ = columnas[0].textContent;
                var ancho_ = columnas[1].textContent;
                var mt2_ = columnas[2].textContent;
                var Prec_mt2_ = columnas[3].textContent;
                var insumo = columnas[4].textContent;

                var costo_ = columnas[6].textContent;
                var cantidad_ = parseFloat(columnas[7].textContent);
                var sub_total_ = parseFloat(columnas[8].textContent);
                var Observacion_ = columnas[9].textContent;





                alto[contador] = alto_;
                ancho[contador] = ancho_
                mt2[contador] = mt2_;
                prec_mt2[contador] = Prec_mt2_;
                costo[contador] = costo_;

                cantidad[contador] = cantidad_;
                sub_total[contador] = sub_total_;
                Observacion[contador] = Observacion_;

                arreglo[contador] = {

                    IdCliente: $("#cliente").val()
                    , IdUsuario: $("#recibepedido").val()
                    , IdCategoria: $("#cat").val()
                    , fecha: $("#fecha_fact").val()
                    , notas: $("#notas").val()
                    , total_costo: $("#total").val()
                    , Saldo: $("#saldo").val()
                    , abono: $("#abono").val()
                    , codseguimiento: $("#tipo_de_pedido").val(),

                    IdInsumos: insumo
                    , ancho: ancho_
                    , alto: alto_
                    , mt2: mt2_
                    , p_m: Prec_mt2_
                    , costo: costo_
                    , cantidad: cantidad_
                    , total: sub_total_
                    , observacion: Observacion_,



                };




                contador = contador + 1;


                console.log(arreglo)




            })


            console.log(filas)






        }

    </script>
</body>

</html>
