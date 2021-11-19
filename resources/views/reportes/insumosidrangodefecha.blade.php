<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura Impresión Digital</title>
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
                    <br>
                    <br>
                    <h6 class="text-center ">Ventas de insumos: @foreach($detalle ?? '' as $data)

                        {{$data->descripcion}}

                        @endforeach, entre: {{$fecha1}} y {{$fecha2}}</h6>
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

        <label class="" for=""><b> Ventas Por Codigo de Insumo</b></label>





        <table class="table table-sm table-bordered mb">

            <thead class="thead-light">

                <tr>

                    <th scope="col">Codigo-Insumo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Ventas</th>
                </tr>

            </thead>
            <tbody>


                @foreach ($detalle ?? '' as $data)



                <tr>

                    <td>{{ $data->IdInsumo }} </td>
                    <td>{{ $data->tipo }}</td>
                    <td>{{ $data->descripcion }}</td>
                    <td>{{ $data->Total }} </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
    <br>











    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>