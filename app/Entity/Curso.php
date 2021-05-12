<?php

namespace App\Entity;

use \App\DB\DataBase;
use \PDO;

class Curso{
    /**
     * Horário do agendamento 
     * @var string
     */
    public $nome;

    /**
     * Matrícula aluno
     * @var string
     */
    public $tipoDisciplina;

    /**
     * Método que indica o curso do aluno
     * @var boolean
     */
    public function cursoAluno(){
        $obDatabase = new DataBase('Curso');
        $obDatabase->insert([
                            'nome'              => $this->nome,
                            'tipoDisciplina'    => $this->tipoDisciplina
                            ]);
    }

    /**
    * Método static pois vai retornar muitas instâncias de cursos 
    * Ele é reponsável por obter os cursos dos alunos do BD
    * @param string $where
    * @param string $order
    * @param string $limit
    * @return array
    */
    public static function getCursos($where = null, $order = null, $limit = null){
        return (new DataBase('curso'))->select($where, $order, $limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class); /* define o tipo de array que será retornado, o tipo de objeto sera a classe de curso */
    }
  
    /**
     * Método responsável por atualizar aluno no banco
     * @return boolean
     */
    public function atualizar(){
      return (new Database('curso'))->update('id = '.$this->id,[
                                                                  'nome'            => $this->nome,
                                                                  'matricula'       => $this->matricula,
                                                                  'tipoDisciplina'  => $this->tipoDisciplina,
                                                                  'turma'             => $this->turma
                                                                ]);
    }
  
  
    /**
     * Método responsável por remover aluno do banco
     * @return boolean
     */
    public function removeAluno(){
      return (new Database('aluno'))->delete('id = '.$this->id);
    }
  
  }