<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once('../bd/database.php');
    $database = new Database();
    $ordenadores = $database->getById($id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel='stylesheet' href='../style/styleForm.css?ver=1.2'>
</head>

<body>
    <form action="../bd/edit.php" method="POST">
        <h1>ACTUALIZAR ORDENADOR</h1>
        <input type="hidden" value="<?php echo $ordenadores['id'] ?>" name="id">
        <input type="text" value="<?php echo $ordenadores['marca'] ?>" name="marca" placeholder="Introduce la marca">
        <input type="text" value="<?php echo $ordenadores['modelo'] ?>" name="modelo" placeholder="Introduce el modelo">
        <input type="number" value="<?php echo $ordenadores['precio'] ?>" name="precio" placeholder="Introduce el precio">
        <input type="text" value="<?php echo $ordenadores['descripcion'] ?>" name="descripcion" placeholder="Introduce la descripcion">
        <button type="submit">Guardar</button>
    </form>
</body>

</html>