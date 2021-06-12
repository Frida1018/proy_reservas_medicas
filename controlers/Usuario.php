<?php
    include_once('../config/conexion.php');
    class Usuario{

        private $nombre_completo;
        private $correo_electronico;
        private $usuario;
        private $contrasena;
    
    
        function Usuario(){
            $this->nombre_completo = "";
            $this->correo_electronico = "";
            $this->usuario = "";
            $this->contrasena = "";
            $conn = new Conexion();
            $resultado=$conn->getCnx()->query("SHOW TABLES LIKE'usuario");
            var_dump($resultado);
        }
                  
         function setnombre($nombre_completo){
             $this->nombre_completo = $nombre_completo;
       
         }
         function getnombre(){
             return $this->nombre_completo;
         }
         function setcorreo($correo_electronico){
            $this->correo_electronico = $correo_electronico;
      
        }
        function getcorreo(){
            return $this->correo_electronico;
        }
         function setusername($usuario){
            $this->usuario = $usuario;
      
        }
        function getusername(){
            return $this->usuario;
        }
        function setpassword($contrasena){
            $this->contrasena = $contrasena;
      
        }
        function getpassword(){
            return $this->contrasena;
        }
        function obtUsuario(){
            echo "Lista usuarios..";
            $conn = new Conexion();
            $q = "SELECT id, nombre_completo, correo_electronico, usuario, contrasena  password FROM usuario;";
            echo $q;
            $consulta = $conn->getCnx()->prepare($q);
            $consulta->execute();
            var_dump("consulta",$resultado);
            $resultado = $consulta->fetchAll(PDO::FECTCH_obj);
            var_dump("resultado",$resultado);
        }
        function insUsuario(){
            echo "Inserta usuarios..";
        }
        function actUsuario(){
            echo "Actualiza usuarios..";
        }
        function actCampoUsuario(){
            echo "Actualiza un campo del usuario..";
        }
        function delUsuario(){
            echo "Elimina usuarios..";
        }
        function make(){

        }

   }

   $su = new Usuario();
?>