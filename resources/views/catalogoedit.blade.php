<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
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
                    <a href="/menu">Menú</a>
                    <hr class="uk-divider-icon">

                    <ul class="uk-nav uk-parent">

                        <li class="uk-parent"> <a href="/menu">Menú</a></li>


                        <ul class="uk-nav-sub">
                            <li class="uk-parent"> <a href="/menu/facturacion"> Facturación </a></li>
                            <li> <a href="/menu/resumen_pedidos">Pedidos </a></li>
                            <li> <a href="/menu/clientes">Clientes </a></li>
                            <li> <a href="/menu/insumos">Insumos </a></li>

                        </ul>
                        <hr class="uk-divider-icon">
                        <li class="uk-parent"> <a href="/menu/menuadmon"> Administración </a></li>

                        <ul class="uk-nav-sub">

                            <li> <a href="/menu/menuadmon/personal">Personal</a></li>
                            <li> <a href="/menu/menuadmon/reportes">Reportes</a></li>

                            <li> <a href="/menu/menuadmon/bd">Base de Datos</a></li>


                            <li> <a href="/menu/menuadmon/promociones">Página de Inicio</a></li>
                        </ul>
                        <hr class="uk-divider-icon">

                        <li class="uk-parent"> Sesión </li>
                        <ul class="uk-nav-sub">
                            <li><a href="/login/cerrar"><b> Cerrar Sesión </b></a></li>
                        </ul>

                    </ul>

                </div>
            </div>
    </nav>


    <form action="{{ url('menu/menuadmon/catalogo/edit/' . $catalogo->idcatalogo) }}" method="post"
        enctype="multipart/form-data">


        @csrf
        @method('put')

        <div class="uk-section uk-section-muted">





            <div>
                <div class="uk-div uk-padding">
                    <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
                        <h1>editar Imagen promocional</h1>
                        <div class="uk-margin" uk-margin>
                            <div uk-form-custom="target: true">
                                <input accept="application/pdf" name="pdf" id="pdf" type="file">
                                <input class="uk-input uk-form-width-medium" type="text" placeholder="Subir PDF"
                                    disabled>

                                <div class="uk-padding">

                                </div>



                            </div>
                            <div class="uk-padding">


                                <iframe src="{{ asset('uploads/catalogo/' . $catalogo->pdf) }}" srcset=""> PDF
                                </iframe>
                            </div>


                            <input value="{{ $catalogo->descripcion }}" class="form-control" id="descripcion"
                                name="descripcion" placeholder="Descripción" rows="3">


                            <br>

                            <div>
                                <h4>Información de la Empresa:</h4>
                            </div>

                            <div class="uk-form-stacked">

                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Teléfono</label>
                                    <div class="uk-form-controls">
                                        <input value="{{ $catalogo->telefono }}" name="telefono"
                                            class="uk-input" id="form-stacked-text" type="number"
                                            placeholder="Teléfono">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Correo</label>
                                    <div class="uk-form-controls">
                                        <input value="{{ $catalogo->correo }}" name="correo" class="uk-input"
                                            id="form-stacked-text" type="email" placeholder="Correo">
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div>
                                <h4>Cita Bíblica</h4>
                            </div>

                            <div class="uk-form-stacked">

                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">cita</label>
                                    <div class="uk-form-controls">
                                        <input value="{{ $catalogo->cita }}" name="cita" class="uk-input"
                                            id="form-stacked-text" type="text"
                                            placeholder='Ej. "Y me dijo: Tú eres mi siervo, Israel, en quien yo mostraré mi gloria."'>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Versículo</label>
                                    <div class="uk-form-controls">
                                        <input value="{{ $catalogo->versiculo }}" name="versiculo"
                                            class="uk-input" id="form-stacked-text" type="text"
                                            placeholder="Ej. Isaías 49:3">
                                    </div>
                                </div>
                            </div>

                            <button onclick="return confirm('¿Está seguro que desea continuar?')" id="guardar"
                                type="submit" class="uk-button uk-button-default">Actualizar Catálogo + Info </button>




                        </div>

                    </div>
                </div>
            </div>

    </form>





    <!-- Botón de atrás  -->
    <div class="uk-padding-small uk-background-muted uk-padding">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">

            <a href="/menu/menuadmon/promociones" class="uk-button uk-button-primary " style="">Atrás</a>


        </div>
    </div>

    </div>



    {{-- insersion de las imagenes --}}








</body>

</html>
