<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ventas de Insumos</title>
     <link rel="icon" href="/img/Icono.ico" type="image/ico" />

</head>

<body>
    
    <div >
        <table>
            <tr>
                <td colspan="5" id="container"></td>
            </tr>
        </table>
    </div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">

 


   Highcharts.chart('container', {
   chart: {
   plotBackgroundColor: null,
   plotBorderWidth: null,
   plotShadow: false,
   type: 'pie'
   },
   title: {
   text: 'Insumos entre {{$fecha1}} y {{$fecha2}}'

   },
   tooltip: {
   pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   },
   accessibility: {
   point: {
   valueSuffix: '%'
   }
   },
   plotOptions: {
   pie: {
   allowPointSelect: true,
   cursor: 'pointer',
   dataLabels: {
   enabled: true,
   format: '<b>{point.name}</b>: {point.percentage:.1f} %'
   }
   }
   },
   series: [{
        
        data: <?=$data ?>



   }]
   
   });


</script>



</html>
