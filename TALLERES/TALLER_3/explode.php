
<?php
// Ejemplo de uso de explode()
$frase = "Manzana,Naranja,Plátano,Uva";
$frutas = explode(",", $frase);

echo "Frase original: $frase
";
echo "Array de frutas:
";
print_r($frutas);

// Ejercicio: Crea una variable con una lista de tus 5 películas favoritas separadas por guiones (-)
// y usa explode() para convertirla en un array
$misPeliculas = "Interestellar, Oppenhaimer, Alien Romulus, The Dark Knight Rises"; // Reemplaza esto con tu lista de películas
$arrayPeliculas = explode("-", $misPeliculas);

echo "
Mis películas favoritas:
";
print_r($arrayPeliculas);

// Bonus: Usa explode() con un límite
$texto = "Uno,Dos,Tres,Cuatro,Cinco, seis, siete, ocho, nueve";
$array = explode(",", $texto, 4);

echo "
Texto original: $texto
";
echo "Array con límite:
";
print_r($array);
?>
      