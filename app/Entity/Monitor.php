<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Monitor{
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

    public function cadastrarMonitor(){
        $obDataBase = new DataBase('monitor');
        $obDataBase->nome = $_POST['nome'];
        $obDataBase->matricula = $_POST['matricula'];
        $obDataBase->turma = $_POST['turma'];
        
    }
}