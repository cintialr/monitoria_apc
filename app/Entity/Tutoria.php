<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Tutoria{
    /**
     * Horário da tutoria 
     * @var string
     */
    public $horario;

    /**
     * data da tutoria
     * @var string
     */
    public $dia;
}