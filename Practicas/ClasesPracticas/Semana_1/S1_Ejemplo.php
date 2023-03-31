<?php
$Disponibilidad_dou = 65;
$precio_dou = 200;
echo "Hola mundo"; 

if($Disponibilidad_dou == $precio_dou){
    echo "Tiene fondos para comprarlo";
}else{
    echo "No tiene fondos para realizar la compra "
    ." Recarga para poder realizar la compra"." Tus fondos Son de " . $Disponibilidad_dou;
}
?>