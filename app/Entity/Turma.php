<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Turma{
    /**
     * Turma 
     * @var string
     */
    public $turma;

    /**
     * Horário
     * @var integer
     */
    public $horario;

    /**
     * dias das aulas
     * @var string
     */
    public $diaDaSemana;

}