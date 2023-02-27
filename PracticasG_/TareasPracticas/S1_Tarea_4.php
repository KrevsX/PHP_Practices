<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tarea $4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
4. Cree un script PHP embebido que escriba en una etiqueta h1 si un
número es cero, positivo o negativo.<br><br>
<div>
    <b>
        <?php
        echo 'En el siguiente Ejercicio utilizare un numero Negativo<br><br>';
        echo 'Primer Ejemplo = -15 <br>';
        echo 'Segundo Ejemplo = 35<br>';
        echo 'Tercer Ejemplo = 0<br><br>';

        $ejemplo1 = -15;
        $ejemplo2 = 35;
        $ejemplo3 = 0;

        echo 'Primero Ejemplo.......<br>';
        if($ejemplo1 > 0){
            echo "El numero procesado es: $ejemplo1<br>";
            echo '<h1>EL NUMERO ES POSITIVO</h1>';
        }else if($ejemplo1 < 0){
            echo "El numero procesado es: $ejemplo1<br>";
            echo '<h1>EL NUMERO ES NEGATIVO</h1>';
        }elseif($ejemplo1 == 0){
            echo "El numero procesado es: $ejemplo1<br>";
            echo '<h1>EL NUMERO ES CERO......</h1>';
        }
        ?>
    </b>
</div>
<div>
    <b>
        <?php
        echo 'En el siguiente Ejercicio utilizare un numero Positivo<br><br>';
        echo 'Primer Ejemplo = -2 <br>';
        echo 'Segundo Ejemplo = 95<br>';
        echo 'Tercer Ejemplo = 0<br><br>';

        $ejemplo1 = -2;
        $ejemplo2 = 95;
        $ejemplo3 = 0;

        echo 'Primero Ejemplo.......<br>';
        if($ejemplo2 > 0){
            echo "El numero procesado es: $ejemplo2<br>";
            echo '<h1>EL NUMERO ES POSITIVO</h1>';
        }else if($ejemplo2 < 0){
            echo "El numero procesado es: $ejemplo2<br>";
            echo '<h1>EL NUMERO ES NEGATIVO</h1>';
        }elseif($ejemplo2 == 0){
            echo "El numero procesado es: $ejemplo2<br>";
            echo '<h1>EL NUMERO ES CERO......</h1>';
        }
        ?>
    </b>
</div>
<div>
    <b>
        <?php
        echo 'En el siguiente Ejercicio utilizare el numero CERO<br><br>';
        echo 'Primer Ejemplo = -2 <br>';
        echo 'Segundo Ejemplo = 95<br>';
        echo 'Tercer Ejemplo = 0<br><br>';

        $ejemplo1 = -77;
        $ejemplo2 = 100;
        $ejemplo3 = 0;

        echo 'Primero Ejemplo.......<br>';
        if($ejemplo3 > 0){
            echo "El numero procesado es: $ejemplo3<br>";
            echo '<h1>EL NUMERO ES POSITIVO</h1>';
        }else if($ejemplo3 < 0){
            echo "El numero procesado es: $ejemplo3<br>";
            echo '<h1>EL NUMERO ES NEGATIVO</h1>';
        }elseif($ejemplo3 == 0){
            echo "El numero procesado es: $ejemplo3<br>";
            echo '<h1>EL NUMERO ES CERO......</h1>';
        }
        ?>
    </b>
</div>


</body>
</html>