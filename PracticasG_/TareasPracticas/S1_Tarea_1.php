
1.  Cree un script PHP que escriba el saldo es insuficiente si el monto<br>
    actual de una cuenta es menor que $500.00.<br><br>

<?php 
$saldoActual = 350.55;
$saldoNecesiado = 500.00;

echo "El Saldo Disponible es: <b>$saldoActual</b>.<br>";

if($saldoActual < $saldoNecesiado){
    echo"<b>El monto actual de tu cuenta es menor que $saldoNecesiado</b><br>";
  
}
 ?>