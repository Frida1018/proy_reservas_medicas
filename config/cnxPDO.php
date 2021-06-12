<?php

    include_once('./config/parametros.php');
    class CnxPDO {
        private $cnx;
        function CnxPDO(){
            $cadena = HOSTGESTOR . ':host=' . HOSTHOST. ';dbname=' . HOSTBD . ';port=' . HOSTPORT;
            try {
                $this->cnx = new PDO($cadena, HOSTUSER, HOSTPASS);
                //echo "conectado";
            } catch(PDOException $e){
                //var_dump("Error al conectarse", $e);
                $msg = arrary(msg=> "Error al conectarse");
                echo json_encode($msg);
            }
        }
        function getCnx(){
            return $this->cnx;
        }
    }
//$c = new CnxPDO();