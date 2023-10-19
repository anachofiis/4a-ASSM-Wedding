<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3308;dbname=4a_assm", "soporte", "L6RJqpxQ@xanAW/q");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
