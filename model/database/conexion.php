<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Conexion{
     
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "1234qwer";
    public $db = "sie";
    
    public function getConexion() {
        $conexion = mysql_connect(self::$host, self::$user, self::$pass) or die("problemas con la conexion");;
        return $conexion;
    }
    
    public function getDB() {
        return $db;
    }
    
    
}
?>
