<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tarea #3</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

3. Cree un script PHP embebido que evalúe dos números y muestre en un<br>
div el mensaje los números son menores que 10 si ambos cumplen la condición.<br><br>
<b> 
    <?php
    echo "En el Ejercicio Usaremos los siguientes numeros como pruebra incumpliendose la condicion<br>";
    echo "- Primer Ejemplo: 15 <br>";
    echo "- Segundo Ejemplo: 8 <br><br>";

    $ejemplo1 = 15;
    $ejemplo2 = 8;

    if($ejemplo1 < 10 && $ejemplo2 < 10){
        echo'<div>Uno de Numeros es Menor a 10..<br></div>';
    }else{
        echo'<div>Uno de Numeros es mayor a 10..<br></div>';
    }
    ?>
</b><br>
<b>
    <?php
    echo "En el Ejercicio Usaremos los siguientes numeros como pruebra cumpliendose la condicion<br>";
    echo "- Primer Ejemplo: 3 <br>";
    echo "- Segundo Ejemplo: 7 <br><br>";

    $ejemplo1 = 3;
    $ejemplo2 = 7;

    if($ejemplo1 < 10 && $ejemplo2 < 10){
        echo'<div>Ambos numeros son menores a 10..<br></div>';
    }
    ?>
</b>
    
</body>
</html>