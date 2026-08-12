<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$consulta = $_POST["consulta"];

echo "<h1>Cita reservada en optica mirasol</h1>";

echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Consulta: " . $consulta . "<br>";

$lista_servicios = [
    "Examen de vista - Bs 50",
    "Armazon clasico - Bs 180",
    "Lentes de sol - Bs 120"
];

echo "<h2>Servicios de la optica</h2>";

foreach ($lista_servicios as $servicios) {
    echo $servicios . "<br>";
}

echo "<p>Te atiende Cesar Romulo Vasquez Soto</p>";
