<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos por Cliente</title>
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
                    <h6 class="text-center ">Ventas de Cliente entre: {{ $fecha1 }} y {{ $fecha2 }}</h6>
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

            <label class="" for="">Id Cliente: <b> @foreach ($nombre ?? '' as $data) {{ $data->IdCliente }} @endforeach</b></label>
            <br>
            <label class="" for="">Cliente: <b> @foreach ($nombre ?? '' as $data) {{ $data->Primer_Nombre }} {{ $data->Segundo_Nombre }} {{ $data->Primer_Apellido }} {{ $data->Segundo_Apellido }} @endforeach</b></label>
            <br>
            <label class="" for="">Contacto: <b> @foreach ($nombre ?? '' as $data) {{ $data->Telefono }}, {{ $data->Correo }} @endforeach</b></label>











            <table class="table table-sm table-bordered mb">

                <thead class="thead-light">

                    <tr>

                        <th scope="col">N° Pedido</th>

                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>

                        <th scope="col">Sub-Total</th>
                        <th scope="col">Abono</th>
                        <th scope="col">Saldo Restante</th>



                    </tr>

                </thead>
                <tbody>


                    @foreach ($pedidosrango ?? '' as $data)



                        <tr>

                            <td>{{ $data->idmaestro }} </td>

                            <td>{{ $data->fecha }}</td>
                            <td>{{ $data->Estado }}</td>

                            <td>{{ $data->total_costo }} C$</td>

                            <td>{{ $data->abono }} C$</td>

                            <td>{{ $data->saldo }} C$</td>







                        </tr>
                    @endforeach
                    @foreach ($suma ?? '' as $data)



                        <tr>

                            <td colspan="3"><b>Total:</b> </td>

                            <td>{{ $data->Total }} C$</td>

                            <td>{{ $data->Abono }} C$</td>

                            <td>{{ $data->Saldo }} C$</td>







                        </tr>
                    @endforeach










                </tbody>

            </table>
        </div>
        <br>











        {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>
