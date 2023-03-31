$Nombre = Kevin Amando Lemus Alas;<br>
$Carnet = 170622;<br><br>

4. Para el array asociativo anterior realizar lo siguiente:<br>
• Imprimir los nombres de personas (foreach) <br>
• Imprimir los nombres de todos los equipos (foreach)<br> 
• Imprimir los nombre de equipos ingleses (for y foreach)<br>

$arreglo = [<br>
    'Personas' => ['Adela','Marta','Franco','German'],<br>    'Equipos' => [
        'Espano;es' =>['Barcelona','Real Madrid','Valencia'],<br>
        'Ingleses' => ['chelsea','Arsenal','Liverpool']<br>
        ]<br>
    ];<br>

<?php
$arregloEj = [
    'Personas' => ['Adela','Marta','Franco','German'],
    'Equipos' => [
        'Espanoles' =>['Barcelona','Real Madrid','Valencia'],
        'Ingleses' => ['chelsea','Arsenal','Liverpool']
        ]
    ];

    echo'<br><br> NOMBRE DE PERSONAS / FOREACH <br><br>';
    foreach($arregloEj['Personas'] as $namePers){
    print_r('Nombre: '.$namePers . '<br>');
    }

    echo'<br><br> NOMBRE DE EQUIPOS / FOREACH <br><br>';
    foreach($arregloEj['Equipos'] as $liga => $nameEquipos){
        foreach($nameEquipos as $equipos){
            print_r("LIGA: $liga :".$equipos. '<br>');
        }
    }
    echo'<br><br> NOMBRE DE EQUIPOS ingleses / FOR / FOREACH <br><br>';

    echo '  --  FOR <br>';
    for($i = 0; $i < count($arregloEj['Equipos']['Ingleses']); $i++) {
        print_r('Equipos LIGA Inglesa: '.$arregloEj['Equipos']['Ingleses'][$i].'<br>');
    }

    echo'<br><br>';

    echo '  --  FOREACH <br>';
    foreach($arregloEj['Equipos']['Ingleses'] as $inglTeam){
        print_r('Equipos LIGA Inglesa: '.$inglTeam. '<br>');
    }

   



  
?>    