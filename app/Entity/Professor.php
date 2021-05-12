<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Professor{
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

    public function cadastrarProfessor(){
        $obDataBase = new DataBase('professor');
        $obDataBase->nome = $_POST['nome'];
        $obDataBase->matricula = $_POST['matricula'];
        $obDataBase->turma = $_POST['turma'];
        $obDataBase->senha = $_POST['senha'];
    }
}