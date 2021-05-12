<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Tutor{
    /**
     * Nome 
     * @var string
     */
    public $nome;

    /**
     * Matrícula
     * @var integer
     */
    public $matricula;

    /**
     * Turma
     * @var string
     */
    public $turma;

    /**
     * Senha de acesso
     * @var string
     */
    public $senha;

    /**
     * cadastra novo tutor
     * @var boolean
     */
    public function cadastrarTutor(){
        $obDataBase = new DataBase('tutor');
        $obDataBase->nome = $_POST['nome'];
        $obDataBase->matricula = $_POST['matricula'];
        $obDataBase->turma = $_POST['turma'];
        $obDataBase->senha = $_POST['senha'];

        return true;
    }
}