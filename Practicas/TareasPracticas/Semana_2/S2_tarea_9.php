$Nombre = Kevin Amando Lemus Alas;<br>
$Carnet = 170622;<br><br>

2. Imprimir la tabla del 5 en una tabla html (for).<br><br>
<table border="1">
<?php
$tablaNu = 5;
echo "<tr>";
echo '<th>TABLA DEL '. $tablaNu.'</th>';
echo "</tr>"; 
echo '<tr>';
for($i = 1; $i<=10;$i++){
   $resultado = $tablaNu * $i;
   echo '<td>  '. $tablaNu .  '  X  ' . $i . '  =  ' . $resultado . '</td>';
echo '</tr>';
}
echo "</tr>";
?>
</table>