<?php
/*
namespace app\Session;

class Login{

    /** 
    * Método que verifica se o usuário está logado 
    * @return boolean
    /
    public static function isLogged(){
        return false;
    }

    /**
     * Método que requer que o usuário esteja logado
     /
    public static function requireLogin(){
        if(!self::isLogged()){ /* Se não estiver logado é enviado para a telad e login *
            header('location: Login.php');
            exit;
        }
    }
    /**
     * Método que obriga o usuário esteja deslogado para acessar o login
     
    public static function requireLogout(){
        if(self::isLogged()){ /* Se não estiver logado é enviado para a telad e login *
            header('location: index.php');
            exit;
        }
    }
}
 ?>
