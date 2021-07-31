<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos | Bordado</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <nav class="uk-navbar uk-navbar-container uk-margin">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Facturación Sublimación</span>
            </a>
        </div>

        <a href="#my-id" uk-toggle></a>

        <!-- This is the off-canvas -->
        <div id="my-id" uk-offcanvas>
            <div class="uk-offcanvas-bar">

                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <a href="/menu">Menú</a>
                <hr class="uk-divider-icon">

                <ul class="uk-nav uk-parent">
                    <li class="uk-parent"> <a href=""> Facturación </a></li>
                    <ul class="uk-nav-sub">
                        <li> <a href="">Bordado </a></li>
                        <li> <a href="">Sublimación </a></li>
                        <li> <a href="">Serigrafía </a></li>
                        <li> <a href="">Impresión digital </a></li>
                    </ul>
                    <hr class="uk-divider-icon">
                    <li class="uk-active"> <a href=""> Pedidos Bordado </a></li>
                    <li class="uk-active"> <a href=""> Pedidos Sublimación </a></li>
                    <li class="uk-active"> <a href=""> Pedidos Serigrafía </a></li>
                    <li class="uk-active"> <a href=""> Pedidos Impresión digital </a></li>
                    <hr class="uk-divider-icon">
                    <li class="uk-parent"> <a href=""> Administración </a></li>

                    <ul class="uk-nav-sub">
                        <li> <a href="">Resumen de pedidos</a></li>
                        <li> <a href="">Personal</a></li>
                        <li> <a href="">Reportes</a></li>
                        <li> <a href="">Restaurar y generar Back-up</a></li>
                        <li> <a href="">Clientes</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>


    

    <div class="uk-div uk-margin uk-padding">

    <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
    <thead>
        <tr>
            <th>Pedidos y Clientes</th>
            <th>Estado</th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <u>

            </u>            
        </tr>
        
    </tbody>
</table>

    </div>

    
    <div class="uk-padding uk-background-muted uk-padding  ">
        <div class="uk-div uk-margin position-relative .uk-padding-large" style="text-align: center;">
            <button class="uk-button uk-button-primary "style="margin-left: 100px">Atrás</button>
            <button class="uk-button uk-button-secondary"style="margin-left: 100px">Guardar</button> 
                
        </div>
</div>
</body>
</html>