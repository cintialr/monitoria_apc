<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Usuario{
    /**
     * Qual sua função: professor, monitor ou tutor 
     * @var string
     */
    public $funcao;

    /**
     * Matrícula
     * @var integer
     */
    public $matricula;

    /**
     * senha para o acesso
     * @var string
     */
    public $senha;

    /** 
     * Método para o usuário fazer login
     * @var boolean */
    public function cadastrarUser(){
        $obDataBase = new DataBase('usuario');

        $obDataBase->matricula = $_POST['matricula'];
        $obDataBase->senha = $_POST['senha'];


        return true;
    }

       
}