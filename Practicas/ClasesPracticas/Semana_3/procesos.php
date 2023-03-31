<?php
$nombre = $_REQUEST['nombre'];
$genero = $_REQUEST['genero'];
$grupo = $_REQUEST['grupo']; 
$lenguaje = $_REQUEST['lenguajes'];

echo '<h2 align="center">DATOS DEL ESTUDIANTE</h2> <br>';
echo '<table align="center" style="border: 0.1px solid #ccc;width: 500px; height: 200px; background-color: #E6E6FA;">';
echo "<tr>";
echo '<td style="border: 2px solid #ccc;">NOMBRE: </td>';
echo '<td style="border: 2px solid #ccc;">'. $nombre . ':</td>';
echo "</tr>";
echo "<tr>";
echo '<td style="border: 2px solid #ccc;">GENERO: </td>';
foreach ($genero as $genre){

    echo '<td style="border: 2px solid #ccc;">' . $genre . '</td>';

}
echo "</tr>";
echo "<tr>";
echo '<td style="border: 2px solid #ccc;">GRUPO: </td>';
echo '<td style="border: 2px solid #ccc;">' . $grupo . '</td>';
echo "</tr>";
echo "<tr>";
echo '<td style="border: 2px solid #ccc;">LENGUAJES: </td>';
echo '<td td style="border: 2px solid #ccc;">';
foreach ($lenguaje as $lengs) {

    echo "$lengs |";
    
}
echo '</td>';
echo "</tr>";
echo '</table>';

?>