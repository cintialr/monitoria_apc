<?php

namespace app\Entity;

use app\DB\DataBase;

class Duvida{
    /**
     * Assunto da dúvida
     * @var string
     */
    public $assunto;

    /**
     * Matrícula do aluno que tem a dúvida
     * @var integer
     */
    public $matricula;

    /**
     * Descrição da dúvida
     * @var string
     */
    public $descricao;

    /**
     * Arquivo que o aluno pode enviar
     * @var string //ou blob ainda não sei
     */
    public $arquivo;
    
    /**
     * Métofo que envia a duvida para o bd
     * @var boolean
     */
    public function enviarDuvida(){
        /* insere a data */
        date('Y-m-d H:i:s');

        $obDataBase = new DataBase('Duvida');
        
        print_r($obDataBase);
    }
}


?>