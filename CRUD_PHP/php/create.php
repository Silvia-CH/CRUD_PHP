<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel='stylesheet' href='../style/styleForm.css?ver=1.2'>
</head>

<body>
    <form action="../bd/save.php" method="POST">
        <h1>CREAR ORDENADOR</h1>
        <input type="text" name="marca" placeholder="Introduce la marca">
        <input type="text" name="modelo" placeholder="Introduce el modelo">
        <input type="number" name="precio" placeholder="Introduce el precio">
        <input type="text" name="descripcion" placeholder="Introduce la descripcion">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>