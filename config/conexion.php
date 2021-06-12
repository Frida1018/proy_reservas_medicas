<?php
class Conexion {
    private $host;
    private $bd;
    private $user;
    private $pass;
    private $port;
    private $cnx;

    public function Conexion(){
        $this->host = "localhost";
        $this->port = "3306";
        $this->bd = "reserva_citas";
        $this->user = "root";
        $this->pass = "raíz";

        //conexion con mysqli

        $this->cnx = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->bd,
            $this->port,
        );
        if($this->cnx->connet_error){
            echo "Error";
            $this->cnx = null;
        } 
      
        
    }
    function getCnx(){
        return $this->cnx;
    }
}

$conn = new Conexion();
//var_dump($conn->getCnx());