<?php
// Recuperar los datos enviados por el formulario
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$carrera = $_POST["carrera"];
$pais = $_POST["pais"];
$deportes = isset($_POST["deportes"]) ? implode(", ", $_POST["deportes"]) : "";
$colores = isset($_POST["colores"]) ? implode(", ", $_POST["colores"]) : "";

// Aquí puedes hacer lo que quieras con los datos recuperados.
// Por ejemplo, puedes insertarlos en una base de datos, enviar un correo electrónico, etc.

// Para este ejemplo, simplemente los mostraremos en una tabla HTML
echo "<table class='table'>";
echo "<tr><th>Nombres</th><td>$nombres</td></tr>";
echo "<tr><th>Apellidos</th><td>$apellidos</td></tr>";
echo "<tr><th>Teléfono</th><td>$telefono</td></tr>";
echo "<tr><th>Dirección</th><td>$direccion</td></tr>";
echo "<tr><th>Carrera</th><td>$carrera</td></tr>";
echo "<tr><th>País</th><td>$pais</td></tr>";
echo "<tr><th>Deportes favoritos</th><td>$deportes</td></tr>";
echo "<tr><th>Colores favoritos</th><td>$colores</td></tr>";
echo "</table>";
?>
