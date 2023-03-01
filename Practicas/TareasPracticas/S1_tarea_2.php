

2. Cree un script PHP que escriba Aprobado si la nota es mayor que 7,<br>
caso contrario escriba Reprobado.<br><br>

<?php

echo "<b>Para Pasar la nota debe ser mayor a 7.0</b><br><br>";
echo "Primero Ejemplo la nota es de 9.0 <br><br>";
$primeraNota = 9.0;

if( $primeraNota > 7){
    echo"<b>Felicidades haz Aprobado con nota de: $primeraNota</b><br><br>";
}

echo "Segundo Ejemplo la nota es de 5.0 <br><br>";

$segundaNota = 5.0;

if( $segundaNota > 7){
    echo"<b>Felicidades haz Aprobado con nota de: $segundaNota</b><br><br>";
}else{
    echo "<b>Lamentablemte haz Reprobado con nota de: $segundaNota</b><br><br>";
}
?>