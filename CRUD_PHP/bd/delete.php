<?php
    if (isset( $_GET['id'])) {
        $id = $_GET['id'];
        require_once('database.php');
        $database = new Database();
        $database->delete($id);

        header('Location: ../php/index.php');
    } else {
        echo '<html>';
        echo '<h1>ERROR 404</h1>';
        echo '</html>';
    }
