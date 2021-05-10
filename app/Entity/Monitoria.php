<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Monitoria{
    /**
     * Horário da monitoria 
     * @var string
     */
    public $horario;

    /**
     * data da monitoria
     * @var string
     */
    public $dia;
}