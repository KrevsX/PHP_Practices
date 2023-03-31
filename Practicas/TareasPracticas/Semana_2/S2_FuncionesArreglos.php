is_array()
Comprueba si una variable es un array. Devuelve true (1) si la variable
es un arreglo; de lo contrario, devuelve false (nada/vacío).<br><br>

<?php 
$notasEst = [8,2,9];
$edadEst = 13;

echo 'Nota es: '.is_array($notasEst).'<br>Edad es:'.is_array($edadEst);

echo '<br><br>explode() Divide un string en un arreglo de strings.';

$textoExp ='  Escuela de Computacion e Ingenierias';

echo '<pre>';
//Aqui utilizaremos el Delimitador de los espacios en blanco.....
print_r(explode('/',$textoExp));

echo '<br><br>';

//Aqui utilizaremos el delimitador de los espacios en blanco.....
$urlExp = 'www.php.net/manual/es/funcion.explode.php';

print_r(explode('/',$urlExp));


echo '<br>implode()Une elementos de un array en un string.<br>';

$arregloAI = array('rip','van','winkle');
echo 'Arreglo 1'.implode($arregloAI);
echo '<br><br>';
$arregloAI2 = [
    'Nombre' => 'RIP',
    'Apellido' => 'WINKLE'
];
echo 'Arreglo 2' .implode($arregloAI2);

echo '<br><br>';
echo 'array_merge() Combina dos o más arrays..';

$arregloMerge1 = array('Nombre 1','Nombre 2','Nombre 3');
$arregloMerge2 = array('Nombre 4','Nombre 5','Nombre 6');

print_r(array_merge($arregloMerge1,$arregloMerge2));

echo '<br><br>';
echo 'array_search() Busca un valor determinado en un array y devuelve la primera clave
correspondiente en caso de éxito.';

$arregloSearchNombres = array('Nombre1','Nombre2','Nombre3');
$arrregloSearchAnimales = array(
    "Perro" => "Jake",
    "Tortuga" => "Tort"
);
echo'<br>';

echo array_search('Nombre2',$arregloSearchNombres).'<br>';
echo array_search('Tort', $arrregloSearchAnimales);

echo'<br><br>';

echo 'count() Cuenta todos los elementos de un array.';

$arregloCount = array(
    "Perro" => "Jackson",
    "Tortuga" => "Tiger",
    "Ave" => "Lawson"
);

echo '<br>';
echo count($arregloCount);




















?>