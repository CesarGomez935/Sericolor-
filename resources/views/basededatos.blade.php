<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
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
                <span uk-toggle="target: #my-id" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Base de datos</span>
            </a>
        </div>
 </nav> 
 <div>
 <h3 class="uk-padding">
            Generar Back-up
        </h3>
        <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-left uk-padding " style="background-color:white">
        
        <button class="uk-button  uk-padding uk-button-primary uuk-width-1-1 uk-margin-small-bottom" uk-icon="icon:pull;ratio: 4">
            <h1 style="color:white">
            Descargar Base de Datos
        </h1></button>
            </div>
        </div></div>
    <div class="uk-div uk-padding">
        <div class="uk-section-secondary uk-margin uk-padding" style="text-align: center;">
            <h1>Restaurar Base de datos</h1>
            <div class="uk-margin" uk-margin>
                <div uk-form-custom="target: true">
                    <input type="file">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                </div>
                <button class="uk-button uk-button-default">Submit</button>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
