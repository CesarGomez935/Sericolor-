<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación|Bordado</title>
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


<body onpageshow="Validacion();">
    <!-- Nav Bar-->
    <nav class="uk-navbar uk-navbar-container">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span
                    class="uk-margin-small-left">Facturación Bordado</span>

            </a>
        </div>
        <a href="#my-id" uk-toggle></a>

        <!-- Off canvas, Elemento desplegable de UiKit -->
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
    <div>

        <div class="uk-padding uk-background-muted">

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div class="uk-grid-small" uk-grid>
                <div class="uk-inline uk-width-1-2 ">
                    <label for="fecha_fact">Fecha de Facturación</label>
                    <input id="fecha_fact" name="fecha_facturacion" type="date" class="uk-input">
                </div>
                <div class="uk-inline uk-width-1-2 ">
                    <label for="fecha_ent">Fecha de entrega</label>
                    <input id="fecha_ent" name="fecha_entrega" type="date" class="uk-input">
                </div>


                <div class="uk-inline uk-width-1-2">
                    <button class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></button>
                    <input id="cliente" name="nombre_cliente" class="uk-input" placeholder="Cliente">
                </div>

                <div class="uk-inline uk-width-1-2">
                    <input id="RUC" name="Num_ruc" class="uk-input" placeholder="N° RUC">
                </div>

                <div class="uk-inline uk-width-1-2">
                    <button class="uk-form-icon uk-form-icon-flip" href="" uk-icon="icon: search"></button>
                    <input class="uk-input" id="nombre" name="nombre_emp" placeholder="Nombre">
                </div>

                <div class="uk-inline uk-width-1-2">
                    <input id="telefono" name="Num_telefono" class="uk-input" placeholder="N° Telefono">
                </div>


            </div>
        </div>
    </div>


    <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
        <div>

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->

            <div class="uk-form-horizontal uk-margin-large">
                <div class="uk-margin">
                    <label for="pecho_izq" class="uk-form-label" for="form-horizontal-text">Pecho Izquierdo</label>
                    <div class="uk-form-controls">
                        <input id="pecho_izq" name="pecho_izquierdo" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="pecho_der" class="uk-form-label" for="form-horizontal-text">Pecho Derecho</label>
                    <div class="uk-form-controls">
                        <input id="pecho_der" name="pecho_derecho" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="manga_izq" class="uk-form-label" for="form-horizontal-text">Manga Izquierda</label>
                    <div class="uk-form-controls">
                        <input id="manga_izq" name="manga_izquierda" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="manga_der" class="uk-form-label" for="form-horizontal-text">Manga Derecha</label>
                    <div class="uk-form-controls">
                        <input id="manga_der" name="manga_derecha" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="espalda" class="uk-form-label" for="form-horizontal-text">Espalda</label>
                    <div class="uk-form-controls">
                        <input id="espalda" name="espalda" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>

                <div class="uk-margin">
                    <label for="tipo_producto" class="uk-form-label" for="form-horizontal-text">Tipo de
                        producto</label>
                    <div class="uk-form-controls">
                        <input id="tipo_producto" name="tipo_producto" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>

            </div>

        </div>
        <div>
            <div class="uk-child-width-1-1 " uk-grid>
                <div>
                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
                    <div class="uk-grid-small" uk-grid>
                        <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
                            <thead>
                                <tr>
                                    <th>Talla</th>
                                    <th>Cantidad</th>
                                    <th>Observacion</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>
                                        <select onchange="Validacion();" name="Tallas"
                                            class="uk-select uk-form-width-xsmall" id="Tallas">

                                            <option value="2">2</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                            <option value="8">8</option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                            <option value="14">14</option>
                                            <option value="16">16</option>
                                            <option value="18">18</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="2XL">2XL</option>
                                            <option value="3XL">3XL</option>
                                            <option value="5XL">5XL</option>




                                        </select>




                                        <select name="Genero" class="uk-select uk-form-width-small" id="Genero">
                                            <option value="Dama">Dama</option>
                                            <option value="Caballero">Caballero</option>
                                        </select>


                                    </td>
                                    <td>
                                        <input id="cantidad" type="number" min="0"
                                            class="uk-input uk-form-width-xsmall">

                                    </td>

                                    <td>
                                        <textarea id="Observacion" name="Observacion"
                                            class="uk-input uk-form-width-medium" type="text"> </textarea>
                                        <button class=" uk-icon-button" uk-icon="icon: plus-circle; ratio: 0.9"
                                            onclick="insertar();"></button>





                                    </td>




                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->

                </div>
            </div>
        </div>
    </div>
    <div class="uk-background-muted uk-padding">

        <div class="uk-grid-small" uk-grid>
            <table id="Tabla" class="uk-table uk-table-hover uk-table-divider uk-table-small">
                <thead>
                    <tr>
                        <th>Pecho Izq.</th>
                        <th>Pecho Der.</th>
                        <th>Manga Izq.</th>
                        <th>Manga Der.</th>
                        <th>Espalda</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Observación</th>
                        <th>precio</th>
                        <th>Opciones</th>


                    </tr>
                </thead>
                <tbody>
                    <tr> </tr>
                </tbody>
            </table>
        </div>

        <br>



        <script type="text/javascript">
            function insertar(pecho_izq, pecho_der, manga_izq, manga_der, espalda, talla, cant, obs) {

                var table = document.getElementById("Tabla");
                var row = table.insertRow(1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);
                var cell10 = row.insertCell(9);


                var pecho_izq = document.getElementById("pecho_izq").value;
                var pecho_der = document.getElementById("pecho_der").value;
                var manga_izq = document.getElementById("manga_izq").value;
                var manga_der = document.getElementById("manga_der").value;
                var espalda = document.getElementById("espalda").value;
                var talla = document.getElementById("Tallas").value;
                var Genero = document.getElementById("Genero").value;
                var cant = document.getElementById("cantidad").value;
                var obs = document.getElementById("Observacion").value;





                cell1.innerHTML = pecho_izq;
                cell2.innerHTML = pecho_der;
                cell3.innerHTML = manga_izq;
                cell4.innerHTML = manga_der;
                cell5.innerHTML = espalda;
                cell6.innerHTML = talla + " " + Genero;
                cell7.innerHTML = cant;
                cell8.innerHTML = obs;
                cell9.innerHTML = "<input type='number' class='uk-input uk-form-width-small '>";
                cell10.innerHTML = "<button class=' uk-icon-button' uk-icon='icon: trash; ratio: 0.9' ></button>";
            }
        </script>
        </table>
    </div>
    </div>
    </div>

    <div class="uk-child-width-1-2 uk-text-center uk-background-muted uk-padding" uk-grid>
        <div>

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div class="uk-form-horizontal uk-margin-large">

                <div class="uk-margin">
                    <label for="abono" class="uk-form-label" for="form-horizontal-text">Abono</label>
                    <div class="uk-form-controls">
                        <input id="abono" name="Abono" class="uk-input uk-form-width-large" id="form-horizontal-text"
                            type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="saldo" class="uk-form-label" for="form-horizontal-text">Saldo</label>
                    <div class="uk-form-controls">
                        <input id="saldo" name="Saldo" class="uk-input uk-form-width-large" id="form-horizontal-text"
                            type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">

                    <div class="uk-form-controls">

                        <input class="uk-checkbox" id="form-horizontal-text" type="checkbox"> Transferencia</label>
                    </div>
                </div>
                <div class="uk-margin uk-form-small">
                    <label for="banco" class="uk-form-label" for="form-horizontal-text">Banco</label>
                    <select class="uk-select uk-form-width-medium" id="Banco">


                        <option value='BAC'>BAC</option>
                        <option value='BDF'>BDF</option>
                        <option value='BANPRO'>BANPRO</option>
                        <option value='BANCENTRO'>LAFISE BANCENTRO</option>
                    </select>
                </div>


            </div>

        </div>
        <div>

            <!-- Formulario para el llenado de los campos requeridos por el pedido y el cliente-->
            <div class="uk-form-horizontal uk-margin-large">

                <div class="uk-margin">
                    <label for="autriza" class="uk-form-label" for="form-horizontal-text">Autoriza Pedido</label>
                    <div class="uk-form-controls">
                        <input id="autoriza" name="Autoriza_pedido" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="recibe" class="uk-form-label" for="form-horizontal-text">Recibe Pedido</label>
                    <div class="uk-form-controls">
                        <input id="recibe" name="recibe_pedido" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="factura" class="uk-form-label" for="form-horizontal-text">N° Factura</label>
                    <div class="uk-form-controls">
                        <input id="factura" name="num_factura" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="recibo" class="uk-form-label" for="form-horizontal-text">N° Recibo</label>
                    <div class="uk-form-controls">
                        <input id="recibo" name="numero_recibo" class="uk-input uk-form-width-large"
                            id="form-horizontal-text" type="text" placeholder="">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Seccion que contiene los botones de atrás y guardar-->
    <div class="uk-padding uk-background-muted uk-padding " style="text-align: center;">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <a href="/menu/menu_facturacion" class="uk-button uk-button-primary " style="margin-left: 100px">Atrás</a>
            <a onclick="return confirm('¿Está seguro que desea continuar?')" id="guardar"
                href="/menu/menu_facturacion/form_bordado" class="uk-button uk-button-secondary"
                style="margin-left: 100px">Guardar</a>


        </div>
        <select class="uk-select" id="tipo_de_pedido" disabled hidden>
            <option value='Bordado'>serigrafia</option>
        </select>
    </div>
    </div>
    </div>

</body>
<script>
    let detallesdepedido = [];

    cargarpedido();

    $('#guardar').click(function(res) {
        guardarpedido();
        alert("Se agrego su orden");

    });

    function peticionapi(data, method, onSucess) {
        let url = '/api/detalledelpedido';
        if (method == 'PUT' || method == 'DELETE') {
            url += '/' + data.IDdetalledelpedido;
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
            Tipo_de_pedido: $("#tipo_de_pedido").val(),
            tipo_de_producto: $("#tipo_producto").val(),
            pechoizquierdo: $("#pecho_izq").val(),
            pechoderecho: $("#pecho_der").val(),
            mangaizquierda: $("#manga_izq").val(),
            mangaderecha: $("#manga_der").val(),
            espalda: $("#espalda").val(),
            tallasCaballero: $("#talla_s_caballero").val(),
            tallasDama: $("#talla_s_dama").val(),
            tallamCaballero: $("#talla_m_caballero").val(),
            tallamDama: $("#talla_m_dama").val(),
            tallalCaballero: $("#talla_l_caballero").val(),
            tallalDama: $("#talla_l_dama").val(),
            tallaxlCaballero: $("#talla_xl_caballero").val(),
            tallaxlDama: $("#talla_xl_dama").val(),
            talla2xlCaballero: $("#talla_2xl_caballero").val(),
            talla2xlDama: $("#talla_2xl_dama").val(),
            talla3xlCaballero: $("#talla_3xl_caballero").val(),
            talla3xlDama: $("#talla_3xl_dama").val(),
            talla5xlCaballero: $("#talla_5xl_caballero").val(),
            talla5xlDama: $("#talla_5xl_dama").val(),
            tallainfantil: $("#talla_18").val(),
            tallainfantil: $("#talla_16").val(),
            tallainfantil: $("#talla_14").val(),
            tallainfantil: $("#talla_12").val(),
            tallainfantil: $("#talla_10").val(),
            tallainfantil: $("#talla_8").val(),
            tallainfantil: $("#talla_6").val(),
            tallainfantil: $("#talla_4").val(),
            tallainfantil: $("#talla_2").val(),
            preciounitario1: $("#precio_und_pedido_1").val(),
            preciounitario2: $("#precio_und_pedido_2").val(),
            preciounitario3: $("#precio_und_pedido_3").val(),
            preciounitario4: $("#precio_und_pedido_4").val(),
            cantidadespe1: $("#cantidad_pedido_1").val(),
            cantidadespe2: $("#cantidad_pedido_2").val(),
            cantidadespe3: $("#cantidad_pedido_3").val(),
            cantidadespe4: $("#cantidad_pedido_4").val(),
            especifaciones1: $("#especifaciones_pedido_1").val(),
            especifaciones2: $("#especifaciones_pedido_2").val(),
            especifaciones3: $("#especifaciones_pedido_3").val(),
            especifaciones4: $("#especifaciones_pedido_4").val(),
            preciototal1: $("#precio_pedido_1").val(),
            preciototal2: $("#precio_pedido_2").val(),
            preciototal3: $("#precio_pedido_3").val(),
            preciototal4: $("#precio_pedido_4").val(),
            cantidadtotal: $("#total_pedido").val(),
            nota: $("#notas").val(),
            Nombredelcomprador: $("#nombre").val(),
            Telefono: $("#telefono").val(),
            NumeroRuc: $("#Ruc").val(),
            fechadepedido: $("#fecha_fact").val(),
        };
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
</script>



</html>
