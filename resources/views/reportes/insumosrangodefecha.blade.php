<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos los insumos rango de fecha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}}
</head>

<body>



    <div class="">






        <div class="">
            <br>
            <img style="position: fixed" src="{{ public_path('img/Sericolor_ Logo.png') }}" height="50" alt="">

            <div class="row">
                <div class="col-sm">








                </div>
                <div class="col-sm">
                    <h6 class="text-center ">Ventas de insumos entre: {{ $fecha1 }} y {{ $fecha2 }}</h6>
                    <br>


                </div>

                <div class="col-sm">







                </div>

            </div>


        </div>
















        {{-- <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('api/pdf/pedidos_diarios/descargar') }}">Export to PDF</a>



    </div> --}}

        <div class="table-responsive-sm mt-1">

            <label class="" for=""><b> Ventas de sublimación</b></label>





            <table class="table table-sm table-bordered mb">

                <thead class="thead-light">

                    <tr>

                        <th scope="col">Codigo-Insumo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Ventas</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <th colspan="5">Sublimación</th>


                    </tr>

                    @foreach ($sublimacion ?? '' as $data)



                        <tr>

                            <td>{{ $data->IdInsumo }} </td>
                            <td>{{ $data->tipo }}</td>
                            <td>{{ $data->descripcion }}</td>
                            <td>{{ $data->Cantidad }}</td>

                            <td>{{ $data->Total }} C$</td>

                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="5">Serigrafía</th>

                    </tr>

                    @foreach ($serigrafia ?? '' as $data)



                        <tr>

                            <td>{{ $data->IdInsumo }} </td>
                            <td>{{ $data->tipo }}</td>
                            <td>{{ $data->descripcion }}</td>
                            <td>{{ $data->Cantidad }}</td>
                            <td>{{ $data->Total }} C$</td>

                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="5">Impresión Digital</th>

                    </tr>

                    @foreach ($impresion ?? '' as $data)



                        <tr>

                            <td>{{ $data->IdInsumo }} </td>
                            <td>{{ $data->tipo }}</td>
                            <td>{{ $data->descripcion }}</td>
                            <td>{{ $data->Cantidad }}</td>
                            <td>{{ $data->Total }} C$</td>

                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="5">Bordado</th>

                    </tr>

                    @foreach ($bordado ?? '' as $data)



                        <tr>

                            <td>{{ $data->IdInsumo }} </td>
                            <td>{{ $data->tipo }}</td>
                            <td>{{ $data->descripcion }}</td>
                            <td>{{ $data->Cantidad }}</td>

                            <td>{{ $data->Total }} C$</td>

                        </tr>
                    @endforeach







                </tbody>

            </table>
        </div>
        <br>











        {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>
