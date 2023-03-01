5. Cree un script PHP que muestre en pantalla el nivel de acceso de un
usuario que intenta acceder a una aplicación.<br>
(Nivel 1: Administrador,Nivel 2: Supervisor, Nivel 3: Empleado)<br><br>

<?php
echo 'Nivel de Acceso de usuario Funcion(-Switch-)<br><br>';
$nivelAdmin = 1;
$nivelSupervisor = 2;
$nivelEmpleado = 3;

echo '<b>Nivel de Acceso de ADMINISTRADOR</b><br>';
switch($nivelAdmin) {
    case 1:
        echo 'Tu Nivel de Acceso es de  = Administrador<br><br>';
        break;
    case 2:
        echo 'Tu Nivel de Acceso es de  = Supervisor<br><br>';
        break;
    case 3:
        echo 'Tu Nivel de Acceso es de  = Empleado<br><br>';
        break;
}
echo '<b>Nivel de Acceso de SUPERVISOR</b><br>';
switch($nivelSupervisor){
    case 1:
        echo 'Tu Nivel de Acceso es de  = Administrador';
        break;
    case 2:
        echo 'Tu Nivel de Acceso es de  = Supervisor<br><br>';
        break;
    case 3:
        echo 'Tu Nivel de Acceso es de  = Empleado<br><br>';
        break;
}
echo '<b>Nivel de Acceso de EMPLEADO</b><br>';
switch($nivelEmpleado){
    case 1:
        echo 'Tu Nivel de Acceso es de  = Administrador';
        break;
    case 2:
        echo 'Tu Nivel de Acceso es de  = Supervisor<br><br>';
        break;
    case 3:
        echo 'Tu Nivel de Acceso es de  = Empleado<br><br>';
        break;
}

?>