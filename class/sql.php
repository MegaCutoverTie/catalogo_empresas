<?php
class sql
{
    public $conn; //Conexiuon 

    public function __construct() //definiendo la conexion  a la bases de datos
    {
        $user = "root";
        $pass = "";
        $serv = "localhost";
        $db = "agenda2023";

        $this->conn = new mysqli($serv, $user, $pass, $db);

    }

    public function select($sql) //Clase de la conexion 
    {
        $result = $this->conn->query($sql);
        return $result;
    }

}
?>