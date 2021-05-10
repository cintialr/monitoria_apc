<?php

 namespace App\Entity;

 use \PDO;
 use \App\DB\DataBase;

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
    * @var blob 
    */
   public $arquivo;

   /**
   * Data de publicação da vaga
   * @var string
   */
   public $dataDuvida;

   /**
    * Métofo que envia a duvida para o bd
    * @var boolean
    */
   public function enviarDuvida(){
     /* insere a data */ 
     $this->dataDuvida = date('Y-m-d H:i:s');

     $obDataBase = new DataBase('Duvida');
     /* insert() vai montar um sql de insert nas tabelas */
     $this->id = $obDataBase->insert([
                          'assunto'   => $this->assunto,
                          'matricula' => $this->matricula,
                          'descricao' => $this->descricao,
                          'arquivo'   => $this->arquivo
                        ]);
    return true;
   }

   /**
    * Método static pois vai retornar muitas instâncias de duvida dos alunos 
    * Ele é reponsável por obter as duvidas do BD
    * @param string $where
    * @param string $order
    * @param string $limit
    * @return array
    */
   public static function getDuvida($where = null, $order = null, $limit = null){
     return (new DataBase('duvida'))->select($where, $order, $limit)
                                    ->fetchAll(PDO::FETCH_CLASS,self::class); /* define o tipo de array que será retornado, o tipo de objeto sera a classe de duvida */
   }


   /**
   * Método responsável por buscar uma dúvida com base em seu ID
   * @param  integer $id
   * @return Vaga
   */
   public static function getVaga($id){
    return (new Database('duvida'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

   /**
   * Método responsável por excluir a vaga do banco
   * @return boolean
   */
   public function excluir(){
    return (new Database('vagas'))->delete('id = '.$this->id);
  }

}
