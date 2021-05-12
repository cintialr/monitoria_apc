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
     * Método que adiciona aluno na turma
     * @var boolean
     */
    public function novoAluno(){
        $obDataBase = new DataBase('Aluno');
        $this->id = $obDataBase->insert([
                                          'matricula'         => $this->matricula,
                                          'nome'              => $this->nome,
                                          'tipoDisciplina'    => $this->tipoDisciplina,
                                          ]);
        return true;
    }
    
    /**
    * Método static pois vai retornar muitas instâncias de novos alunos 
    * Ele é reponsável por obter os alunos do BD
    * @param string $where
    * @param string $order
    * @param string $limit
    * @return array
    */
    public static function getAlunos($where = null, $order = null, $limit = null){
      return (new DataBase('aluno'))->select($where, $order, $limit)
                                    ->fetchAll(PDO::FETCH_CLASS,self::class); /* define o tipo de array que será retornado, o tipo de objeto sera a classe de aluno */
  }

   /**
   * Método responsável por buscar um aluno com base em sua matricula
   * @param  integer $id
   * @return Aluno
   */
  public static function getAluno($id){
    return (new Database('aluno'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

    /**
   * Método responsável por atualizar aluno no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('aluno'))->update('id = '.$this->id,[
                                                                'nome'            => $this->nome,
                                                                'matricula'       => $this->matricula,
                                                                'tipoDisciplina'  => $this->tipoDisciplina,
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