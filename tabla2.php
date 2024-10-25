<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Divisores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php
// Función para recuperar y validar los valores
function recupera($campo) {
    return isset($_POST[$campo]) ? intval($_POST[$campo]) : 0;
}

// Recuperar los valores del formulario
$num1 = recupera('num1');
$num2 = recupera('num2');

// Verificar que los números estén dentro de los rangos adecuados
if ($num1 >= 1 && $num1 <= 10 && $num2 >= 10 && $num2 <= 20) {
    echo "<h2>Divisores entre $num1 y $num2 para los números del 50 al 60</h2>";
    echo "<table>";
    echo "<thead>";
    echo "<tr><th></th>";
    
    // Encabezados de columnas con números del 50 al 60
    for ($col = 50; $col <= 60; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr></thead><tbody>";
    
    // Filas desde el número mínimo hasta el máximo
    for ($row = $num1; $row <= $num2; $row++) {
        echo "<tr>";
        echo "<th>$row</th>"; // Número de la fila
        for ($col = 50; $col <= 60; $col++) {
            // Comprobación de divisibilidad
            if ($col % $row == 0) {
                echo "<td class='divisible'>*</td>";
            } else {
                echo "<td class='not-divisible'>-</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>Los números ingresados no están en el rango permitido.</p>";
}
?>

</body>
</html>
