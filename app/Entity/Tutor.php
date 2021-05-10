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

    public function cadastrarTutor(){
        $obDataBase = new DataBase('tutor');
        $obDataBase->nome = $_POST['nome'];
        $obDataBase->matricula = $_POST['matricula'];
        $obDataBase->turma = $_POST['turma'];
        
    }
}