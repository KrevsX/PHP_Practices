<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tarea $6 - SWITCH</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
6. Cree un script con PHP embebido que escriba el nombre del mes a partir
de un número entre 1 y 12. Validar que solo sean números entre 1 y 12.<br><br>

<?php
$numMes = 5;

echo "EL NUMERO ASIGNADO ES - $numMes - Cambiarlo para poder Rectificar los demas resultados...<br><br>";

if($numMes >= 1 && $numMes <= 12){
    switch($numMes){
        case 1:
            echo 'MES DE ENERO';
            break;
        case 2:
            echo 'MES DE FEBRERO';
            break;
        case 3:
            echo 'MES DE MARZO';
            break;
        case 4:
            echo 'MES DE ABRIL';
            break;
        case 5:
            echo 'MES DE MAYO';
            break;
        case 6:
            echo 'MES DE JUNIO';
            break;
        case 7:
            echo 'MES DE JULIO';
            break;
        case 8:
            echo 'MES DE AGOSTO';
            break;
        case 9:
            echo 'MES DE SEPTIEMBRE';
            break;
        case 10:
            echo 'MES DE OCTUBRE';
            break;
        case 11:
            echo 'MES DE NOVIEMBRE';
            break;
        case 12:
            echo 'MES DE DICIEMBRE';
            break;
            default:
        echo '-DEFAULT SWITCH-<BR>
        <p>INGRESE UN NUMERO DEL 1 AL 12<BR>
        Para PODER VER LOS MESES CORRESPONDIENTES...</p>';
        break;    
    }    
}else{
    echo '-ELSE-<BR>
    EL NUMERO EXCEDE A 12....';
}



?>

</body>
</html>