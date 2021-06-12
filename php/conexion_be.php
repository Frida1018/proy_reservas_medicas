<?php
$conexion= mysqli_connect("localhost","root","","login");
if($conexion){
    echo 'Conectado exitosamente a la base de datos';

}else{
    echo 'no se ha podico conectar a la base de datos'
}

?>