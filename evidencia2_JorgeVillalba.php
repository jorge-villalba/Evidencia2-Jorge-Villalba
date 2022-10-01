<!DOCTYPE html>
<html>

<head>
    <title>Unidad 2 - Ejemplo 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
    <!--Estilos de la tabla-->
    <style>
        table{
            border-collapse: collapse;
        }
        thead{
            background-color: #99d6ff;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
        }
    </style>
</head>

<body>
<h2>Actividad de aprendizaje 2</h2>
<h2>Evidencia: Taller “Uso de arreglos”</h2>
<?php
/*
Nombre: Jorge Armando Villalba Velasquez
Programa de Formacion: Desarrollo web con PHP
Actividad de aprendizaje 2
Evidencia: Taller "Uso de arreglos"
*/

// Se hace un array con los datos de las personas
$array_personas = array(
    array("Juan Pérez ", "Cra. 45 # 45 -56", "3456789", "23/12/1997", "Amarillo"),
    array("Pablo Manrique", "Clle. 23 # 12-19 Sur", "3214567", "12/10/1980", "Verde"),
    array("Nancy Peña ", "Av. 34 # 16 -12 ", "2135423", "07/06/2000", "Rojo")
);

// Se hace un array con los colores y su significado

$array_colores = array(
    "Blanco" => "Persona enérgica y vitalista",
    "Naranja" => "Persona divertida y sensual",
    "Amarillo" => "Riqueza y alegría",
    "Azul" => "Persona comunicativa",
    "Violeta" => "Rebelde y perceptivo"
);
?>
<table>
    <!--Cabeceras de la tabla-->
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Fecha de cumpleaños</th>
        <th>Color favorito</th>
        <th>Significado</th>
    </tr>
    </thead>
    <tbody>
    <?php
    //Crea una fila por cada lista de personas en array_personas
    foreach ($array_personas as $array_persona) {
    ?>
    <tr>
        <?php
        // Imprime en cada celda el valor correspondiente de las caracteristicas de la persona
        for ($i = 0; $i < count($array_persona); $i++) {
            ?>
            <td><?php echo $array_persona[$i] ?></td>
            <?php

        }
        // Verifica que el color de la persona exista e imprime en la celda de "significado" el valor de esta
        if (array_key_exists($array_persona[count($array_persona) - 1], $array_colores)) {
            ?>
            <td><?php echo $array_colores[$array_persona[count($array_persona) - 1]] ?></td>
            <?php
        } else {
            // Imprime el valor por defecto de los colores que no tengan significado
            echo "<td>No se encuentra el significado.</td>";
        }
        }
        ?>
    </tr>

    </tbody>
</table>
</body>

</html>