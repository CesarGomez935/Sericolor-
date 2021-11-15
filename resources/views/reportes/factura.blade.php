<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal reporte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}}
</head>

<body>
    <div class="">



        @foreach($maestro ?? '' as $Maestro)


        <div class="">
            <div class="row">
                <div class="col-sm">
                    {{-- <img style="position: fixed" src="{{ asset('img/ser.png') }}" width="150" alt=""> --}}







                </div>
                <div class="col-sm">
                    <h6 class="text-center "><b>Codigo de Revision:</b> {{ $Maestro->CodSeguimiento}}</h6>
                    <br>


                </div>

                <div class="col-sm">







                </div>

            </div>


        </div>

        <div class="">
            <div class="row">
                <div class="col-sm">
                    {{-- <img style="position: fixed" src="{{ asset('img/ser.png') }}" width="150" alt=""> --}}

                    <label class="text-center "><b>Cliente: </b>{{ $Maestro->Primer_Nombre}} {{ $Maestro->Segundo_Nombre}} {{ $Maestro->Primer_Apellido}} {{ $Maestro->Segundo_Apellido}}</label>
                    <br>

                    <label class="text-center "><b>Teléfono: </b>{{ $Maestro->Telefono}}</label>

                    <br>
                    <label class="text-center "><b>Trabajador: </b>{{ $Maestro->trabajador_primer_nombre}} {{ $Maestro->trabajador_segundo_nombre}} {{ $Maestro->trabajador_primer_apellido}} {{ $Maestro->trabajador_segundo_apellido}}</label>
                    <br>









                </div>
                <div class="col-sm">


                </div>

                <div class="col-sm ">
                    <h6 class="text-right "><b>Factura N°:</b> {{ $Maestro->idmaestro}}</h6>

                    <h6 class="text-right"><b>Recibo N°:</b> {{ $Maestro->Cod_Recibo}}</h6>

                    <h6 class="text-right "><b>Fecha:</b> {{ $Maestro->fecha}}</h6>







                </div>

            </div>
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <h6 class="text-center  "><b>Notas:</b> {{ $Maestro->Notas}}</h6>



                </div>

                <div class="col-sm">



                </div>

            </div>

        </div>








        @endforeach














        {{-- <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('api/pdf/pedidos_diarios/descargar') }}">Export to PDF</a>



    </div> --}}

    <div class="table-responsive-sm mt-1">



        <table class="table table-sm table-bordered mb">

            <thead class="thead-light">

                <tr>

                    <th scope="col">Pecho Izq.</th>
                    <th scope="col">Pecho Der.</th>
                    <th scope="col">Manga Izq.</th>
                    <th scope="col">Manga Der.</th>
                    <th scope="col">Espalda</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Observacion</th>
                    <th scope="col">Sub-Total</th>
                </tr>

            </thead>
            <tbody>
                @foreach($detalle ?? '' as $data)


                <tr>

                    <td>{{ $data->pecho_izquierdo}} </td>
                    <td>{{ $data->pecho_derecho}}</td>
                    <td>{{ $data->manga_izquierda}}</td>
                    <td>{{ $data->manga_derecha}} </td>
                    <td>{{ $data->espalda}}</td>
                    <td>{{ $data->Tipo}} {{ $data->Descripcion}}</td>
                    <td>{{ $data->Cantidad}}</td>
                    <td>{{ $data->precio}}</td>
                    <td>{{ $data->observacion}} </td>
                    <td>{{ $data->total}}</td>












                </tr>
                @endforeach
                @foreach($maestro ?? '' as $Maestro)
                <tr class="table-active">


                    <td colspan="9">Costo Total:</td>
                    <td><b>{{$Maestro->total_costo}}</b></td>

                </tr>
                <tr class="table-active">


                    <td colspan="9">Abono:</td>
                    <td>{{$Maestro->abono}}</td>
                </tr>
                <tr class="table-active">


                    <td colspan="9">Saldo Restante:</td>
                    <td><b>{{$Maestro->saldo}}</b></td>

                </tr>



                @endforeach




            </tbody>

        </table>
    </div>



    <div class="fixed-bottom">


        <div class="">

            <h6 class="text-center mb-3">
                <b>Gracias por su preferencia!
                    <br>
                    <b>Les esperamos!</b>

                    <br>
                    <b>. </b>
                    <br>
                </b>

            </h6>


        </div>



    </div>


    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>
