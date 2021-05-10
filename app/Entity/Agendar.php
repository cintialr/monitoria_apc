<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Agendar{
    /**
     * Horário do agendamento 
     * @var string
     */
    public $horario;

    /**
     * Matrícula aluno
     * @var string
     */
    public $matricula;
}