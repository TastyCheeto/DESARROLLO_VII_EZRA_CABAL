<?php
$nombre_completo= "Ezra Cabal";
$edad = 23;
$correo = "ezra.cabal@utp.ac.pa";
$telefono = 62631649;

define ("OCUPACION","Estudiante");

$mensaje1 = "Hola mi nombre es ". $nombre_completo . " Y tengo ". $edad." años.";
$mensaje2 = "Mi correo electrónico es ". $correo ." y mi numero de telefono es ". $telefono. ".";

// parrafo
echo $mensaje1."<br>";
print ($mensaje2 ."<br>");
printf("Solo para recordarles, el correo es %s y soy  %s actualmente<br>", $correo, OCUPACION);


// Usando var_dump (útil para debugging)
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";

?>
