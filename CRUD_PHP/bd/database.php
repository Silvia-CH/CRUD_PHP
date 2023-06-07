<?php
    class Database {
        public function conectar(){
            
            $driver = 'mysql';
            $host = 'localhost';
            $port = '3306';
            $bd = 'practicaordenadores';
            $user = 'silvia';
            $password = "123456";

            $dsn = "$driver:dbname=$bd;host=$host;port=$port";

            try {
                $gbd = new PDO($dsn, $user, $password);
                //echo "<b>". 'Conectado correctamente' . "</b><br>";
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }

            return $gbd;
        }

        public function getAll(){
            $sql = "SELECT * FROM ordenadores;";
            $resultados = self::conectar()->query($sql);
            return $resultados;        
        }

        public function delete($id){
            $sql = "DELETE FROM ordenadores WHERE id = $id;";
            self::conectar()->exec($sql);
        }

        public function create($valores){
            $sql = "INSERT INTO ordenadores (marca, modelo, precio, descripcion) VALUES('$valores[marca]', '$valores[modelo]', $valores[precio], '$valores[descripcion]');";
            self::conectar()->exec($sql);
        }

        public function update($valores){
            $sql = "UPDATE ordenadores SET marca='$valores[marca]', modelo='$valores[modelo]', precio=$valores[precio], descripcion='$valores[descripcion]' WHERE id=$valores[id];";
            self::conectar()->exec($sql);
        }

        public function getById($id){
            $sql = "SELECT * FROM ordenadores WHERE id=$id;";
            $resultados = self::conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);        
        }

    }
?>
