<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
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

<body>
    <!-- Nav Bar -->
    <nav class="uk-navbar uk-navbar-container ">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu
                    Principal</span>
            </a>

        </div>
        <div class="uk-navbar-right">


            <a href="#my-id" uk-toggle></a>

            <!-- Off Canvas, Elemento desplegable de UiKit -->
            <div id="my-id" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <a href="/menu">Men??</a>
                    <hr class="uk-divider-icon">

                    <ul class="uk-nav uk-parent">

                        <li class="uk-parent"> <a href="/menu">Men??</a></li>


                        <ul class="uk-nav-sub">
                            <li class="uk-parent"> <a href="/menu/facturacion"> Facturaci??n </a></li>
                            <li> <a href="/menu/resumen_pedidos">Pedidos </a></li>
                            <li> <a href="/menu/clientes">Clientes </a></li>
                            <li> <a href="/menu/insumos">Insumos </a></li>

                        </ul>
                        <hr class="uk-divider-icon">
                        <li class="uk-parent"> <a href="/menu/menuadmon"> Administraci??n </a></li>

                        <ul class="uk-nav-sub">

                            <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                            <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>

                            <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>


                            <li> <a href="/menu/menuadmon/promociones">P??gina de Inicio</a></li>
                        </ul>
                        <hr class="uk-divider-icon">

                        <li class="uk-parent"> Sesi??n </li>
                        <ul class="uk-nav-sub">
                            <li><a href="/login/cerrar"><b> Cerrar Sesi??n </b></a></li>
                        </ul>

                    </ul>

                </div>
            </div>
    </nav>


    <form action="{{ url('/menu/menuadmon/promociones/create') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="uk-section uk-section-muted">





            <div>
                <div class="uk-div uk-padding">
                    <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
                        <h1>Cargar Imagen promocional</h1>
                        <div class="uk-margin" uk-margin>
                            <div uk-form-custom="target: true">
                                <input accept="image/*" name="imagen" id="imagen" type="file">

                                <script>
                                    function logimagen() {

                                        var imagen = document.getElementById("imagen").value;
                                        console.log(imagen)
                                    }
                                </script>

                                <input class="uk-input uk-form-width-medium" name="imagen" type="text"
                                    placeholder="Subir Imagen" disabled>
                                @error('imagen')


                                    <small>*{{ $message }}</small>

                                @enderror

                            </div>


                            <textarea class="form-control" id="descripcion" name="descripcion"
                                placeholder="Descripci??n" rows="3"></textarea>
                            @error('descripcion')


                                <small>*{{ $message }}</small>

                            @enderror

                            <button onclick="return confirm('??Est?? seguro que desea continuar?')" id="guardar"
                                type="submit" class="uk-button uk-button-default">Cargar Imagen Promocional</button>



                        </div>

                    </div>
                </div>
            </div>

    </form>





    <!-- Bot??n de atr??s  -->
    <div class="uk-padding-small uk-background-muted uk-padding">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

            <a href="/menu/menuadmon/promociones" class="uk-button uk-button-primary "
                style="margin-left: 100px">Atr??s</a>


        </div>
    </div>

    </div>



    {{-- insersion de las imagenes --}}








</body>

</html>
