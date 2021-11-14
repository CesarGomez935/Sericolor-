<html>
<head>
    <style>
        body {
            font-family: sans-serif;
        }

        @page {
            margin: 160px 50px;
        }

        header {
            position: fixed;
            left: 0px;
            top: -160px;
            right: 0px;
            height: 100px;
            background-color: #ddd;
            text-align: center;
        }

        header h1 {
            margin: 10px 0;
        }

        header h2 {
            margin: 0 0 10px 0;
        }

        footer {
            position: fixed;
            left: 0px;
            bottom: -50px;
            right: 0px;
            height: 40px;
            border-bottom: 2px solid #ddd;
        }

        footer .page:after {
            content: counter(page);
        }

        footer table {
            width: 100%;
        }

        footer p {
            text-align: right;
        }

        footer .izq {
            text-align: left;
        }

    </style>
<body>
    <header>
        <h1>Sericolor.com</h1>
        <h2>Reporte</h2>
    </header>
    <footer>
        <table>
            <tr>
                <td>
                    <p class="izq">
                        correo:
                        <a href="mailto:sericolorpublicidad@hotmail.com">sericolorpublicidad@hotmail.com</a>
                        <label for=""> </label>
                        teléfono:
                        <a href="https://web.whatsapp.com/send?phone=+505+55038173">+505-55038173</a>





                    </p>
                </td>
                <td>
                    <p class="page">
                        Página
                    </p>
                </td>
            </tr>
        </table>
    </footer>
    <div id="content">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personal ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->Primer_Nombre }} {{ $data->Segundo_Nombre }} {{ $data->Primer_Apellido }} {{ $data->Segundo_Apellido }}</td>



                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone_number }}</td>
                    <td>{{ $data->dob }}</td>
                </tr>
                @endforeach
            </tbody>


    </div>
</body>
</html>
