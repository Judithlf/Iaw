<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Divisores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<table>
    <thead>
        <tr>
            <th></th>
            <?php
                for ($col = 50; $col <= 60; $col++) {
                    echo "<th>$col</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";
                for ($col = 50; $col <= 60; $col++) {
                    if ($col % $row == 0) {
                        echo "<td class='divisible'>*</td>";
                    } else {
                        echo "<td class='not-divisible'>-</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

</body>
</html>
