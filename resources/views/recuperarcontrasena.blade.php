<head>
    <title>Sericolor</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />
</head>
<section class="vh-100">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        < script src = "https://code.jquery.com/jquery-3.6.0.min.js"
        integrity = "sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin = "anonymous" >
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/Logo_sericolor.png" width="400" height="300" class="img-fluid" alt="Sample image">
                <div class="container" style="">
                    <div class="row mt-5">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div class="">
                    <div class="card-body">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertSuccess"
                            style="display:none">

                            <div class="col-12">

                                <p id="msjExitoRegistro"></p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>


                            </div>
                        </div>


                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertError"
                            style="display:none">

                            <div class="col-12">

                                <ul id="listaErrores"></ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>


                            </div>
                        </div>

                    </div>
                </div>

                <form method="POST" id="frmlogin" class="my-login-validation">
                    @csrf
                    <h1>Recuperar contrase??a</h1>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="usuario" name="usuario" class="form-control form-control-lg"
                            placeholder="Introduce tu correo" value="{{ old('email') }}" />
                        <label class="form-label" for="usuario">Ingrese el correo de recuperacion</label>
                    </div>
                    <!-- Password input -->
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <a type="button" href="/login" class="btn btn-danger btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Atras</a>
                        <button type="submit" class="btn btn-success btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Recuperar</button>


                    </div>
                </form>
            </div>
        </div>
    </div>


    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright ?? 2021. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>
