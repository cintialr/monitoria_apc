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
     * @var string
     */
    public $horario;

    /**
     * dias das aulas
     * @var string
     */
    public $diaDaSemana;

    /**
     * Método que cria uma nova turma
     * @var boolean 
     * */
    public function criarTurma(){
        
        $obDataBase = new DataBase('Turma');
        /* insert() vai montar um sql de insert nas tabelas */
        $obDataBase->insert([
                             'turma'   => $this->turma,
                             'horario' => $this->horario,
                             'diaDaSemana' => $this->diaDaSemana,
                           ]);
       return true;
      }
   
      /**
       * Método static pois vai retornar muitas instâncias de turma
       * Ele é reponsável por obter as turmas do BD
       * @param string $where
       * @param string $order
       * @param string $limit
       * @return array
       */
      public static function getDuvidas($where = null, $order = null, $limit = null){
        return (new DataBase('turma'))->select($where, $order, $limit)
                                       ->fetchAll(PDO::FETCH_CLASS,self::class); /* define o tipo de array que será retornado, o tipo de objeto sera a classe de turma */
      }
   
}