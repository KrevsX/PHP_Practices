//$Bucle WHILE...

<?php

//Recorrer el array hasta encontrar el numero mayor a 7.5
echo '<br><br>';
$data = array(7,5,3,1,5,9,8,4);
$flag =true;
$i = 0;
while($flag) {
    if($data[$i]>7.5){
        $flag=false;
        echo 'Ultimo Dato Recorrido ---><br>' .$data[$i];
    }
    $i++;
}
?>
<br><br>
//$Bucle DO WHILE...
<?php
echo '<br><br>';
//Recorrer el array hasta encontrar el numero mayor a 7.5
//con DO WHILE

$dataDW = array(4,2,5,1,0,2,6,7,8,9);
$flagDW = true;
$iDW = 0;

do{
    if($dataDW[$iDW]>7.5){
        echo 'Ultimo Dato Recorrido ---><br>'.$dataDW[$iDW];
        $flagDW=false;
    }
    $iDW++;
}while($flagDW);
?>
<br><br>
//$Bucle FOR...<br><br>
<?php
//Recorrer el array hasta encontrar el numero mayor a 7.5

$dataFOR = array(1,2,3,4,2,1,2,45,1);
 for($i = 0; $i< count($dataFOR); $i++){
    if($dataFOR[$i]>7.5){
        echo 'Ultimo Dato Recorrido ---><br>'.$dataFOR[$i];
    }
 }
?>
<br><br>
//Bucle FOREACH

<?php
echo '<br><br>';
$dataFOREACH = array('Kevin','Alas','Winkle');
foreach($dataFOREACH as $key =>$value){
    echo 'Indice: '.$key.'<br>Valor: '.$value.'<br>';
}

?>