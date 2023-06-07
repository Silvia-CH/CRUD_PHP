<?php
require_once('../bd/database.php');
$database = new Database();
$tablaResul = $database->getAll();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Práctica Ordenadores</title>
    <link rel='stylesheet' href='../style/style.css?ver=1.2'>
</head>

<body>
    <div id="divCrear"><a id="crear" href="create.php">Crear Ordenador</a></div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($tablaResul as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['marca'] . "</td>";
                    echo "<td>" . $row['modelo'] . "</td>";
                    echo "<td>" . $row['precio'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo '<td> <a href="../bd/delete.php?id=' . $row['id'] . '">Eliminar</a>';
                    echo '<a href="update.php?id=' . $row['id'] . '">Editar</a></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>