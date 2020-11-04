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
       //$rtet es un usuario
       $loginRetornado=$ret->getLogin();
       $passRetornado=$ret->getPassword();
        $url="datosUsuario.php?login=$loginRetornado&pass=$passRetornado";
        $url='datosUsuario.php?login='.$loginRetornado.'&pass='.$passRetornado;
        header("Location:".$url);
        header("Location:datosUsuario.php?login=$loginRetornado&pass=$passRetornado");
        header("Location:datosUsuario.php?login=Matias&pass=1234"); //el header cambia la cabecera de la peticion http
        
   }
   if(is_set$cookie['intentosLogin']){
       $valorantiguo=$cookie[''];
       setcookie()
   }
   setcookie('intentosLogin',$_COOKIE['intentosLogin']+1,time()+ 60);
   header("Location/Vista/errorAutenticacion.php");

?>