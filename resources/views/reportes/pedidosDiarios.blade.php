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

        {{-- <img style="position: fixed" src="{{ asset('img/ser.png') }}" width="150" alt=""> --}}
        <h2 class="text-center mb-3">Reporte de Pedidos Fecha: Sericolor</h2>






        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('api/pdf/pedidos_diarios/descargar') }}">Export to PDF</a>



        </div>

        <div class="table-responsive-sm">



            <table class="table table-sm table-bordered mb-5">

                <thead>
                    <tr class="table-danger">

                        <th scope="col">Nombre del cliente</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Costo</th>








                    </tr>

                </thead>
                <tbody>
                    @foreach($pedidosdiarios ?? '' as $data)

                    <tr>

                        <td>{{ $data->Primer_Nombre }} {{ $data->Segundo_Nombre }} {{ $data->Primer_Apellido }} {{ $data->Segundo_Apellido }}</td>

                        <td>{{ $data->fecha }}</td>
                        <td>{{ $data->total_costo }}</td>





                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">Costo Total:</td>
                        <td>{{$suma}}</td>

                    </tr>

                </tbody>

            </table>
        </div>



    </div>

    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>
