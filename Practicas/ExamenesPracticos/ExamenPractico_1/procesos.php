<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$dui = $_POST['dui'];
$direc = $_POST['direccion'];
$carrera = $_POST['carrera'];
$pais = $_POST['pais'];
$deporte = $_POST['dpfav'];
$colfav = $_POST['colfav'];

echo '<table class="table">';
echo '<thead>' . '<tr>';
echo '<th scope="col">' . 'NOMBRES' . '</th>';
echo '<th scope="col">' . 'APELLIDOS' . '</th>';
echo '<th scope="col">' . 'DUI' . '</th>';
echo '<th scope="col">' . 'DIRECCION' . '</th>';
echo '<th scope="col">' . 'CARRERA' . '</th>';
echo '<th scope="col">' . 'PAISES' . '</th>';
echo '<th scope="col">' . 'DEPORTES' . '</th>';
echo '<th scope="col">' . 'COLORES' . '</th>';
echo '</tr>' . '</thead>';
echo '<tbody>' . '<tr>';
echo '<td>' . $nombre1 . ' '  . $nombre2 . '</td>';
echo '<td>' . $apellido1 . ' ' . $apellido2 . '</td>';
echo '<td>' . $dui . '</td>';
echo '<td>' . $direc . '</td>';
echo '<td>' . $carrera . '</td>';
echo '<td>' . $pais . '</td>';
echo '<td>';
foreach ($deporte as $dptes) {
    echo "$dptes |";
}
echo '</td>';
echo '<td>';
foreach ($colfav as $clfvs) {
    echo " $clfvs |";
}
echo '</td>';
echo '</tr>' . '</tbody>';
echo '  </table>';
