
<?php
// Ejemplo de uso de str_replace()
$frase = "El gato negro saltó sobre el perro negro";
$fraseModificada = str_replace("negro", "blanco", $frase);

echo "Frase original: $frase
";
echo "Frase modificada: $fraseModificada
";

// Ejercicio: Crea una variable con una frase que contenga al menos tres veces la palabra "PHP"
// y usa str_replace() para cambiar "PHP" por "JavaScript"
$miFrase = "Tres tristes PHP comian PHP en un PHP"; // Reemplaza esto con tu frase
$miFraseModificada = str_replace("PHP", "JavaScript", $miFrase);

echo "
Mi frase original: $miFrase
";
echo "Mi frase modificada: $miFraseModificada
";

// Bonus: Usa str_replace() para reemplazar múltiples palabras a la vez
$texto = "No me gusta comer y dormir. Me gusta ser silly y tener plata.";
$buscar = ["comer", "dormir"];
$reemplazar = ["cantar", "dar DS VIII"];
$textoModificado = str_replace($buscar, $reemplazar, $texto);

echo "
Texto original: $texto
";
echo "Texto modificado: $textoModificado
";
?>
          