<?php
    
namespace app\DB;

use \PDO;
use PDOException;

class DataBase{

    /* Host de conexão com o banco de dados */
    const HOST  = 'db';

    /* Nome do banco de dados */
    const NAME = 'Monitoria_apc';

    /* Usuário para acesso do banco */
    const USER = 'root';

    /* Senha para acesso do banco */
    const PASS = 'monitoria';
    
    /**
      * Tabela a ser manipulada
      * @var string
    */
    private $table;

    /**
     * Intancia de conexão 
     * @var PDO
     */
    private $connection;


    /**
     * Define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

     /**
      * Método responsável por criar uma conexão com o bd
      */
    public function setConnection(){
        try{
            $this->connection = new PDO('mysql:host=' .self::HOST. ';dbname=' .self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }        
   
}

?>