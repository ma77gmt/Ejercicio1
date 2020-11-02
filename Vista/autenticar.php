<?php
    include_once "../Modelo/AutenticacionMock.php";

    $autenticarUsuario = new AutenticacionMock();

    $usuarioRecibido = $_GET['login'];
    $PassRecibido = $_GET['pass'];

   $ret = $autenticarUsuario->autenticarUsuario($usuarioRecibido, $PassRecibido);

   if($ret===false){
       header("Location:errorAutenticacion.php");
   }
   else{
        var_dump($ret);
   }

?>