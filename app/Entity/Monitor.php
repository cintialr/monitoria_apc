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
    
    /**
     * Senha de acesso
     * @var string
     */
    public $senha;

    public function cadastrarMonitor(){
        $obDataBase = new DataBase('monitor');
        $obDataBase->matricula = $_POST['matricula'];
        $obDataBase->nome = $_POST['nome'];
        $obDataBase->turma = $_POST['turma'];
        $obDataBase->senha = $_POST['senha']; 
    }
}