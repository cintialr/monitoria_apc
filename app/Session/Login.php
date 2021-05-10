<?php

namespace app\Session;

class Login{

    /** 
    * Método que verifica se o usuário está logado 
    * @return boolean
    */
     public static function isLogged(){
        return false;
    }

    /**
     * Método que requer que o usuário esteja logado
     */
     public static function requireLogin(){
        if(!self::isLogged()){ /* Se não estiver logado é enviado para a tela de login */
            header('location: login.php');
            exit;
        }
    }
}
 ?>
