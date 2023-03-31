$Nombre = Kevin Amando Lemus Alas;<br>
$Carnet = 170622;<br><br>

1. Mostrar en un < select > los elementos de los siguientes arreglos(FOR/FOREACH)<br>
$edades = [10,45,36,45];<br>
$animales =array('Conejo','Culebra', 'Elefante');

<br><br>
CLICLO FOR..<BR>
<select>
  <?php

    

    $edades = [10, 45, 36, 45];
    $animales = array('Conejo', 'Culebra', 'Elefante');
    for ($i = 0; $i < count($edades); $i++) {
      echo '<option>' . $edades[$i] . '</option>';
    }
    for ($i = 0; $i < count($animales); $i++) {
      echo '<option>' . $animales[$i] . '</option>';
    }
  ?>
</select>
<br><br>
CLICLO FOREACH..<BR>
<select>
    <?php
    foreach($edades as $datos){
        echo '<option>'. $datos. '</option>';
    }

    foreach($animales as $dato){
        echo '<option>'. $dato. '</option>';
    }
    ?>
</select>


