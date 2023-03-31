$Nombre = Kevin Amando Lemus Alas;<br>
$Carnet = 170622;<br><br>

3. Imprimir los elementos de la siguiente matriz en una tabla 2x3 html (for).<br>
$ArrayA = [
    ['Rosa','German','Sara']
    ['Pedro','Sergio','Gerardo']
    ];<br>


<table border="1">
    <?php
    echo '<br><b>MATRIZ 2 X 3</b><br><br>';
    $ArrayA = array(
        array('Rosa', 'German', 'Sara'),
        array('Pedro', 'Sergio', 'Gerardo')
    );
    for ($i = 0; $i < count($ArrayA); $i++) {
      echo '<tr>';
    for ($j = 0; $j < count($ArrayA[$i]); $j++) {
        echo '<td>' . $ArrayA[$i][$j] . '</td>';
      }
      echo '</tr>';
    }
    ?>
</table>