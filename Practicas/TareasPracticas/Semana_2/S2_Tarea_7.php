<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tarea $7 - SWITCH</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<div>
    <p>
        7. Cree un script con PHP embebido que<br>
        sume dos números si la opción deseada es la letra A,<br>
        que reste dos números si la opción deseada es la letra B<br>
        y que multiplique dos números si la opción deseada en la letra C.<br>
        Tome en cuenta que se debe validar que ambos números sean mayores
        que 0, caso contrario mostrar un mensaje de error.<br><br>
    </p>
</div>
<div>
    <?php

    $opcion = 'C';
    $valor1 = 120;
    $valor2 = 30;

    echo"<p>UTILIZAREMOS LA OPCION $opcion </p><br>";

    if($valor1 > 0 && $valor2 > 0){ 
        switch($opcion){
            case 'A':
                echo "En este ejercicicio Operaremos con los Numeros:  $valor1 y $valor2 <br>
                Con la Opcion que corresponde para Sumar: $opcion <br><br>";
                $resutlado = $valor1 + $valor2;
                echo"El Resultado Es:  $resutlado";
                break;
            case 'B':
                echo "En este ejercicicio Operaremos con los Numeros:  $valor1 y $valor2 <br>
                Con la Opcion que corresponde para Restar: $opcion <br><br>";
                $resutlado = $valor1 - $valor2;
                echo"El Resultado Es:  $resutlado";
                break;
            case 'C':
                echo "En este ejercicicio Operaremos con los Numeros:  $valor1 y $valor2 <br>
                Con la Opcion que corresponde para Multiplicar: $opcion <br><br>";
                $resutlado = $valor1 * $valor2;
                echo"<b>El Resultado Es:  $resutlado </b>";
                break;
        }
    }    

    ?>
</div>


</body>
</html>