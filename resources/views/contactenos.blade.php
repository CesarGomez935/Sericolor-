<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sericolor</title>
    <link rel="icon" href="/img/Icono.ico" type="image/ico" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>

</head>

<header>

</header>

<body style="background-color:bisque">

    <!-- Seccion que muestra los botones que permiten la navegacion por las estañas de la pagina-->

    <div uk-margin-right class="uk-padding">

        <img class="uk-float-left" uk-margin data-src="/img/Logo_sericolor.png" width="100" height="1200" alt="" uk-img>
        <div class="uk-padding">
            <a href="/revision" class="uk-button uk-button-primary uk-button-large  uk-float-right">Revisa tu pedido</a>
        </div>
        <div class="uk-padding">
            <a href="/Inicio"><button class="uk-button uk-button-primary uk-button-small uk-float-right">Inicio</button></a>
            <a href="/servicio"> <button class="uk-button uk-button-primary uk-button-small uk-float-right">Servicios</button></a>
            <a href="/Acerca"><button class="uk-button uk-button-primary uk-button-small uk-float-right">Acerca de</button></a>
            <a href="/contacto"><button class="uk-button uk-button-primary uk-button-small uk-float-right">Contáctanos</button></a>
        </div>


    </div>

    <!-- Seccion que muestra Una tarjeta con los datos de el prpietario de Sericolor-->
    <div>
        <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:bisque">
            <div class=".uk-margin-left ">
                <img src="/img/Imagen1.png" width="200" alt="">
            </div>

            <h1 class="uk-padding">Propietario
                <div>
                    <h3>Lic.Byron Enrique Lopez Lopez.</h3>
                    <h4>+505 55038173</h4>
                    <a href="https://web.whatsapp.com/send?phone=+505+55038173" class="uk-icon-button   uk-margin-small-right " uk-icon="whatsapp"> </a>
                    <a class="uk-icon-button uk-margin-small-right" href="mailto:"  uk-icon="mail"></a>

                </div>
            </h1>
            <div class="uk-position-right uk-padding">
                <img class="img-thumbnail rounded mx-auto d-block" src="/img/DonByron.jpg" width="200" alt="">
            </div>


        </div>

</body>

<!-- Footer-->
<footer style="background-color: #AEC6CF">

    <div class="uk-grid-divider uk-child-width-expand@s uk-padding" uk-grid>
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.6598222185626!2d-85.92170308581036!3d12.929572019298973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7249d2987e4149%3A0x1e72bbacc5e03499!2sSERICOLOR%20PUBLICIDAD!5e0!3m2!1ses!2sni!4v1626899274980!5m2!1ses!2sni" width="400" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        <div>
            <p>
                <B> Ubicados frente a donde fue metales de Matagalpa


                </B>
            </p>

            <p>
                <B>

                <a href="https://web.whatsapp.com/send?phone=+505+55038173">Whatsapp: 5503-8173</a>


                </B>
            </p>
            <p>
                <B>

                    Todos los derechos reservados
                </B>
            </p>
        </div>
        <div>
            <a href="https://api.whatsapp.com/send?phone=+505 55038173" target="_blank" uk-icon="icon: whatsapp ; ratio: 3.5"></a>
            <a href="https://es-la.facebook.com/pg/sericolorpublicidad" target="_blank" uk-icon="icon: facebook ; ratio: 3.5"></a>
            <a href="https://www.instagram.com/sericolorpublicidad/?hl=es-la" target="_blank" uk-icon="icon: instagram ; ratio: 3.5"></a>
        </div>
    </div>


</footer>

</html>
