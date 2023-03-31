<h3>Tipos de Arrays...</h3>
<?php

echo"Array Escalar...";
//Tipo de Arreglo 1.. 
$arregloA = array('Kevs', 'van','winkle');
//Tipo de Arreglo 2..
$arregloB = ['KevsAR2', 'vanAR2','winkleAR2'];

echo'<pre>';
print_r('Tipos de Arrays');
print_r($arregloA);
print_r($arregloB);

//----------------------------------

echo '<br>';
echo 'Array Asociativo..."';
//tipo arreglo 1..
$mascotaA = array(
    'Nombre' =>'Hunt',
    'Raza'=>'Huskey'
);
//tipo arreglo 2..
$mascotaB = [ 
    'Nombre' =>'Hunt',
    'Raza'=>'Huskey'
];

echo '<pre>';
print_r($mascotaA);
print_r($mascotaB);

//----------------------------------

echo '<br>';
echo('Array Asociativo con Arreglo simple como valor...');

$data =[
    'Propietario' => 'Kevs McIntyre',
    'Mascota' => array('Perro','Conejo','Tortuga')
];
echo '<pre>';
print_r($data);

//----------------------------------

echo '<br>';
echo 'Array Asociativo con otro Arreglo asociativo como valor<br>
y un arreglo como valor simple...';

$productosEsc = array(
    'Lapicero'=> array(
        'Marca' => 'Cross',
        'Precio' => '8.61',
        'Colores' => ['Azul','Negro']
    ),
    'Marcador' => array(
        'Marca' => 'BIC',
        'Precio' => '6.55',
        'Colores' => ['Morado','Rojo']
    )
    );

    echo'<pre>';
    print_r($productosEsc);
    echo '</pre>';

    //----------------------------------

echo '<br>';
echo 'Matrices por Arrays y por Claves...';

echo'Matriz de indices escalares';
$matrizNum =[
    [2,4,5,8],
    [3,6,7,10],
    [4,8,9,12],
    [5,10,11,14]
];
echo '<br>';

$matrizCiudades = [
    'Espana' => ['Valencia', 'Madrid', 'Barcelona'],
    'Francia' => ['Paris', 'Marsella', 'Lion'],
    'Italia' => ['Roma', 'Napoles','BValencia']
];


print_r($matrizNum);
print_r($matrizCiudades);

//----------------------------------

echo '<br>';
echo 'Acceso a los valores en los Arrays....';

$productosMerch = [
    'Camisa' =>[
        'Marca' => 'Nautica',
        'Colores' => ['Rojo', 'Azul','Negro'],
        'Talla' => ['S','M','L','XL']
        ]
    ];

    echo '<pre>';
    print_r($productosMerch);
    echo '</pre>';
    //Acceso por Sintaxis del Corchete...
    echo 'Arreglo completo...<br>';
    print_r($productosMerch['Camisa']);

    echo 'Colores de Camisa...<br>';
    print_r($productosMerch['Camisa']['Colores']);

    echo'Talla de camisas<br>';
    print_r($productosMerch['Camisa']['Talla'][3]);



    ?>