<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baucher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}}
</head>

<body style="font-size: 12px">

    <style>
        h6 {
            font-size: 12px;
            position: fixed;
            text-align: right;
            right: 0px;
        }

        thead {
            font-size: 10px;

        }


        tbody {
            font-size: 9px;

        }

    </style>
    <div class="">



        @foreach ($maestro ?? '' as $Maestro)

            <div class="table-responsive-sm">

                <table class="table table-sm table-borderless ">




                    <tbody>



                        <tr class="">


                            <td class="col-sm-3">
                                <b> Cliente: </b>{{ $Maestro->Primer_Nombre }} {{ $Maestro->Segundo_Nombre }}
                                {{ $Maestro->Primer_Apellido }} {{ $Maestro->Segundo_Apellido }} <br>
                                <b> Teléfono: </b>{{ $Maestro->Telefono }}<br>
                                <b> Trabajador: </b>{{ $Maestro->trabajador_primer_nombre }}
                                {{ $Maestro->trabajador_segundo_nombre }} {{ $Maestro->trabajador_primer_apellido }}
                                {{ $Maestro->trabajador_segundo_apellido }}<br>
                                <b> Notas: </b>{{ $Maestro->Notas }}






                            </td>
                            <td style="text-align: center" class="col-sm-3">
                                <img src="{{ public_path('img/Sericolor_ Logo.png') }}" height="50" alt="">


                            </td>
                            <td style="text-align:right" class="col-sm-3">


                                <b>Fecha:</b> {{ $Maestro->fecha }}<br>
                                <b>Factura N°:</b> {{ $Maestro->idmaestro }}<br>
                                <b>Recibo N°:</b> {{ $Maestro->Cod_Recibo }} <br>
                                <b>Código de Revision:</b> <i>{{ $Maestro->CodSeguimiento }}</i>








                            </td>




                        </tr>


                    </tbody>

                </table>
            </div>





        @endforeach














        {{-- <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('api/pdf/pedidos_diarios/descargar') }}">Export to PDF</a>



    </div> --}}

        <div class="table-responsive-sm">

            <table class="table table-sm table-bordered ">

                <tbody class="thead-light">

                    <tr>

                        <th scope="col">Categoria</th>
                        <th scope="col">Pecho Izq.</th>
                        <th scope="col">Pecho Der.</th>
                        <th scope="col">Manga Izq.</th>
                        <th scope="col">Manga Der.</th>
                        <th scope="col">Espalda</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cant.</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Sub-Total</th>
                    </tr>

                </tbody>
                <tbody>
                    @foreach ($detalle ?? '' as $data)


                        <tr>

                            <td> @if ($data->IdCategoria == 4) Bordado @endif @if ($data->IdCategoria == 1) Sublimación @endif @if ($data->IdCategoria == 2) Serigrafía @endif </td>
                            <td>{{ $data->pecho_izquierdo }} </td>
                            <td>{{ $data->pecho_derecho }}</td>
                            <td>{{ $data->manga_izquierda }}</td>
                            <td>{{ $data->manga_derecha }} </td>
                            <td>{{ $data->espalda }}</td>
                            <td>{{ $data->Tipo }} {{ $data->Descripcion }}</td>
                            <td>{{ $data->Cantidad }}</td>
                            <td>{{ $data->precio }}</td>
                            <td>{{ $data->observacion }} </td>
                            <td>{{ $data->total }} C$</td>













                        </tr>
                    @endforeach

                <tbody class="thead-light">

                    <tr>

                        <th scope="col">Alto</th>
                        <th scope="col">Ancho</th>
                        <th scope="col">mt²</th>
                        <th scope="col">Prec. x mt² </th>
                        <th scope="col">Costo</th>
                        <th colspan="3" scope="col">Insumo</th>
                        <th scope="col">Cant.</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Sub-Total</th>
                    </tr>

                </tbody>
                <tbody>
                    @foreach ($detalleimp ?? '' as $data)


                        <tr>

                            <td>{{ $data->alto }} </td>
                            <td>{{ $data->ancho }}</td>
                            <td>{{ $data->mt2 }}</td>
                            <td>{{ $data->p_m }} </td>
                            <td>{{ $data->costo }}</td>
                            <td colspan="3">{{ $data->Tipo }} {{ $data->Descripcion }}</td>
                            <td>{{ $data->cantidad }}</td>
                            <td>{{ $data->observacion }}</td>
                            <td>{{ $data->total }} C$</td>














                        </tr>
                    @endforeach
                    @foreach ($maestro ?? '' as $Maestro)
                        <tr class="table-active">


                            <td colspan="10">Costo Total:</td>
                            <td><b>{{ $Maestro->total_costo }} C$</b></td>


                        </tr>
                        <tr class="table-active">


                            <td colspan="10">Abono:</td>
                            <td>{{ $Maestro->abono }} C$</td>

                        </tr>
                        <tr class="table-active">


                            <td colspan="10">Saldo Restante:</td>
                            <td><b>{{ $Maestro->saldo }} C$</b></td>


                        </tr>



                    @endforeach




                </tbody>

                {{-- @foreach ($maestro ?? '' as $Maestro)
                        <tr class="table-active">


                            <td colspan="9">Costo Total:</td>
                            <td><b>{{ $Maestro->total_costo }} C$</b></td>


                        </tr>
                        <tr class="table-active">


                            <td colspan="9">Abono:</td>
                            <td>{{ $Maestro->abono }} C$</td>

                        </tr>
                        <tr class="table-active">


                            <td colspan="9">Saldo Restante:</td>
                            <td><b>{{ $Maestro->saldo }} C$</b></td>

                        </tr>



                    @endforeach --}}




                </tbody>

            </table>

        </div>
        {{-- <div class="table-responsive-sm">

            <table class="table table-sm table-bordered ">

                <tbody class="thead-light">

                    <tr>

                        <th scope="col">Alto</th>
                        <th scope="col">Ancho</th>
                        <th scope="col">mt²</th>
                        <th scope="col">Prec. x mt² </th>
                        <th scope="col">Costo</th>
                        <th scope="col">Insumo</th>
                        <th scope="col">Cant.</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Sub-Total</th>
                    </tr>

                </tbody>
                <tbody>
                    @foreach ($detalleimp ?? '' as $data)


                        <tr>

                            <td>{{ $data->alto }} </td>
                            <td>{{ $data->ancho }}</td>
                            <td>{{ $data->mt2 }}</td>
                            <td>{{ $data->p_m }} </td>
                            <td>{{ $data->costo }}</td>
                            <td>{{ $data->Tipo }} {{ $data->Descripcion }}</td>
                            <td>{{ $data->cantidad }}</td>
                            <td>{{ $data->observacion }}</td>
                            <td>{{ $data->total }} C$</td>














                        </tr>
                    @endforeach
                    @foreach ($maestro ?? '' as $Maestro)
                        <tr class="table-active">


                            <td colspan="8">Costo Total:</td>
                            <td><b>{{ $Maestro->total_costo }} C$</b></td>


                        </tr>
                        <tr class="table-active">


                            <td colspan="8">Abono:</td>
                            <td>{{ $Maestro->abono }} C$</td>

                        </tr>
                        <tr class="table-active">


                            <td colspan="8">Saldo Restante:</td>
                            <td><b>{{ $Maestro->saldo }} C$</b></td>


                        </tr>



                    @endforeach




                </tbody>

            </table>

        </div> --}}
        <div class="table-responsive-sm">

            <table class="table table-sm table-borderless ">




                <tbody>

                    <tr class="">


                        <td style="text-align:center" class="col-sm-2">

                            <b>Entregué Conforme:_____________________________</b>
                        </td>

                        <td style="text-align:center" class="col-sm-2">

                            <b>Recibí Conforme:_______________________________</b>


                        </td>




                    </tr>
                    <tr class="">


                        <td colspan="2" style="text-align:center" class="col-sm-1">

                            <b>¡Muchas Gracias Por Preferirnos!</b> <br>
                            Le Esperamos Pronto.
                            <br> RUC: 8881704900001T
                            <br> Tel: +505-55038173

                        </td>






                    </tr>



                </tbody>

            </table>
        </div>
        <div class="table-responsive-sm">

            <table class="table table-sm table-borderless ">




                <tbody>

                    <tr class="">


                        <td style="text-align:center" class="col-sm-1">

                            *Cortar aquí* <br>
                            _____________________________________________________________________________________________________________________________________________
                        </td>






                    </tr>


                </tbody>

            </table>
        </div>
        <div class="">



            @foreach ($maestro ?? '' as $Maestro)

                <div class="table-responsive-sm">

                    <table class="table table-sm table-borderless ">




                        <tbody>



                            <tr class="">


                                <td class="col-sm-3">
                                    <b> Cliente: </b>{{ $Maestro->Primer_Nombre }} {{ $Maestro->Segundo_Nombre }}
                                    {{ $Maestro->Primer_Apellido }} {{ $Maestro->Segundo_Apellido }} <br>
                                    <b> Teléfono: </b>{{ $Maestro->Telefono }}<br>
                                    <b> Trabajador: </b>{{ $Maestro->trabajador_primer_nombre }}
                                    {{ $Maestro->trabajador_segundo_nombre }}
                                    {{ $Maestro->trabajador_primer_apellido }}
                                    {{ $Maestro->trabajador_segundo_apellido }}<br>
                                    <b> Notas: </b>{{ $Maestro->Notas }}






                                </td>
                                <td style="text-align: center" class="col-sm-3">
                                    <img src="{{ public_path('img/Sericolor_ Logo.png') }}" height="50" alt="">


                                </td>
                                <td style="text-align:right" class="col-sm-3">


                                    <b>Fecha:</b> {{ $Maestro->fecha }}<br>
                                    <b>Factura N°:</b> {{ $Maestro->idmaestro }}<br>
                                    <b>Recibo N°:</b> {{ $Maestro->Cod_Recibo }} <br>
                                    <b>Código de Revision:</b> <i>{{ $Maestro->CodSeguimiento }}</i>








                                </td>




                            </tr>


                        </tbody>

                    </table>
                </div>





            @endforeach














            {{-- <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('api/pdf/pedidos_diarios/descargar') }}">Export to PDF</a>



    </div> --}}


            <div class="table-responsive-sm">

                <table class="table table-sm table-bordered ">

                    <tbody class="thead-light">

                        <tr>

                            <th scope="col">Categoria</th>
                            <th scope="col">Pecho Izq.</th>
                            <th scope="col">Pecho Der.</th>
                            <th scope="col">Manga Izq.</th>
                            <th scope="col">Manga Der.</th>
                            <th scope="col">Espalda</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Observacion</th>
                            <th scope="col">Sub-Total</th>
                        </tr>

                    </tbody>
                    <tbody>
                        @foreach ($detalle ?? '' as $data)


                            <tr>

                                <td> @if ($data->IdCategoria == 4) Bordado @endif @if ($data->IdCategoria == 1) Sublimación @endif @if ($data->IdCategoria == 2) Serigrafía @endif </td>
                                <td>{{ $data->pecho_izquierdo }} </td>
                                <td>{{ $data->pecho_derecho }}</td>
                                <td>{{ $data->manga_izquierda }}</td>
                                <td>{{ $data->manga_derecha }} </td>
                                <td>{{ $data->espalda }}</td>
                                <td>{{ $data->Tipo }} {{ $data->Descripcion }}</td>
                                <td>{{ $data->Cantidad }}</td>
                                <td>{{ $data->precio }}</td>
                                <td>{{ $data->observacion }} </td>
                                <td>{{ $data->total }} C$</td>













                            </tr>
                        @endforeach

                    <tbody class="thead-light">

                        <tr>

                            <th scope="col">Alto</th>
                            <th scope="col">Ancho</th>
                            <th scope="col">mt²</th>
                            <th scope="col">Prec. x mt² </th>
                            <th scope="col">Costo</th>
                            <th colspan="3" scope="col">Insumo</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Observacion</th>
                            <th scope="col">Sub-Total</th>
                        </tr>

                    </tbody>
                    <tbody>
                        @foreach ($detalleimp ?? '' as $data)


                            <tr>

                                <td>{{ $data->alto }} </td>
                                <td>{{ $data->ancho }}</td>
                                <td>{{ $data->mt2 }}</td>
                                <td>{{ $data->p_m }} </td>
                                <td>{{ $data->costo }}</td>
                                <td colspan="3">{{ $data->Tipo }} {{ $data->Descripcion }}</td>
                                <td>{{ $data->cantidad }}</td>
                                <td>{{ $data->observacion }}</td>
                                <td>{{ $data->total }} C$</td>














                            </tr>
                        @endforeach
                        @foreach ($maestro ?? '' as $Maestro)
                            <tr class="table-active">


                                <td colspan="10">Costo Total:</td>
                                <td><b>{{ $Maestro->total_costo }} C$</b></td>


                            </tr>
                            <tr class="table-active">


                                <td colspan="10">Abono:</td>
                                <td>{{ $Maestro->abono }} C$</td>

                            </tr>
                            <tr class="table-active">


                                <td colspan="10">Saldo Restante:</td>
                                <td><b>{{ $Maestro->saldo }} C$</b></td>


                            </tr>



                        @endforeach




                    </tbody>

                    {{-- @foreach ($maestro ?? '' as $Maestro)
                        <tr class="table-active">


                            <td colspan="9">Costo Total:</td>
                            <td><b>{{ $Maestro->total_costo }} C$</b></td>


                        </tr>
                        <tr class="table-active">


                            <td colspan="9">Abono:</td>
                            <td>{{ $Maestro->abono }} C$</td>

                        </tr>
                        <tr class="table-active">


                            <td colspan="9">Saldo Restante:</td>
                            <td><b>{{ $Maestro->saldo }} C$</b></td>

                        </tr>



                    @endforeach --}}




                    </tbody>

                </table>

            </div>
            {{-- <div class="table-responsive-sm">

            <table class="table table-sm table-bordered ">

                <tbody class="thead-light">

                    <tr>

                        <th scope="col">Alto</th>
                        <th scope="col">Ancho</th>
                        <th scope="col">mt²</th>
                        <th scope="col">Prec. x mt² </th>
                        <th scope="col">Costo</th>
                        <th scope="col">Insumo</th>
                        <th scope="col">Cant.</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Sub-Total</th>
                    </tr>

                </tbody>
                <tbody>
                    @foreach ($detalleimp ?? '' as $data)


                        <tr>

                            <td>{{ $data->alto }} </td>
                            <td>{{ $data->ancho }}</td>
                            <td>{{ $data->mt2 }}</td>
                            <td>{{ $data->p_m }} </td>
                            <td>{{ $data->costo }}</td>
                            <td>{{ $data->Tipo }} {{ $data->Descripcion }}</td>
                            <td>{{ $data->cantidad }}</td>
                            <td>{{ $data->observacion }}</td>
                            <td>{{ $data->total }} C$</td>














                        </tr>
                    @endforeach
                    @foreach ($maestro ?? '' as $Maestro)
                        <tr class="table-active">


                            <td colspan="8">Costo Total:</td>
                            <td><b>{{ $Maestro->total_costo }} C$</b></td>


                        </tr>
                        <tr class="table-active">


                            <td colspan="8">Abono:</td>
                            <td>{{ $Maestro->abono }} C$</td>

                        </tr>
                        <tr class="table-active">


                            <td colspan="8">Saldo Restante:</td>
                            <td><b>{{ $Maestro->saldo }} C$</b></td>


                        </tr>



                    @endforeach




                </tbody>

            </table>

        </div> --}}
            <div class="table-responsive-sm">

                <table class="table table-sm table-borderless ">




                    <tbody>

                        <tr class="">


                            <td style="text-align:center" class="col-sm-2">

                                <b>Entregué Conforme:_____________________________</b>
                            </td>

                            <td style="text-align:center" class="col-sm-2">

                                <b>Recibí Conforme:_______________________________</b>


                            </td>




                        </tr>
                        <tr class="">


                            <td colspan="2" style="text-align:center" class="col-sm-1">

                                <b>¡Muchas Gracias Por Preferirnos!</b> <br>
                                Le Esperamos Pronto.
                                <br> RUC: 8881704900001T
                                <br> Tel: +505-55038173

                            </td>






                        </tr>



                    </tbody>

                </table>
            </div>







            {{-- <div class="fixed-bottom">


        <div class="">

            {{-- <h6 class="text-center mb-3">
                <b>Gracias por su preferencia!
                    <br>
                    <b>Les esperamos!</b>

                    <br>
                    <b>. </b>
                    <br>
                </b>

            </h6>


        </div>




    </div> --}}




</body>



</html>
