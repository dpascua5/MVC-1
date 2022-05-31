<?php
class Conectar
    {
    public static function conexion()
        {
        $servername = "localhost";
        $username = "username";
        $password = "password";

        try 
            {
            $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET CHARACTER SET UTF8");
            echo "Connected successfully";
            } catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            echo "Depurar codigo. Linea error:" . $e->getLine();
            }
        return $conn;
        }   
    }
?>