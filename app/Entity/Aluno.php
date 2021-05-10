<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Aluno{
    /**
     * Matrícula
     * @var integer
     */
    public $matricula;

    /**
     * Nome
     * @var string
     */
    public $nome;

    /**
     * Qual o tipo da disciplina se é OBR, OPT ou ML
     * @var string
     */
    public $tipoDisciplina;

    /**
     * turma
     * @var string
     */
    public $turma;
}