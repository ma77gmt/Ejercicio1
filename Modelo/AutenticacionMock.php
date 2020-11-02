<?php
include_once "Usuario.php";
    class autenticacionMock{
       public function autenticarUsuario($login, $password){

            $listaUsuarios= array(
                1=> new Usuario ("Matias", "1234"),
                2=> new Usuario ("Vanesa", "aaa"),
                3=> new Usuario ("Adrian", "bbb")
            );


            //recorrer array
            foreach($listaUsuarios as $usuario){
                $loginUsuarioLista= $usuario->getLogin();
                $passUsuarioLista= $usuario->getPassword();
                if(strcmp($login,$loginUsuarioLista) ===0){//coinciden los login
                    if(strcmp($password,$passUsuarioLista) ===0){//coinciden pass
                        return $usuario;
                    }
                }

            }


            return false;

        }
    }
?>