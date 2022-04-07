<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database
{
    const HOST = 'localhost:3306';
    const NAME = 'loja';
    const USER = 'root';
    const PASSWORD = 'password';

    private $table;
    private $connection;

    public function __construct($table = null)
    {
       $this->table = $table; 
       $this->setConnection();
    }

    //cria a conexão
    private function setConnection()
    {
         try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         }
         catch(PDOException $e){
             die('Error : ' . $e->getMessage());
         }
    }

      /**
   * Método responsável por executar queries dentro do banco de dados **/
    public function execute($query,$params = [])
    {
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
                return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    //método para inserir os dados no banco
    public function insert($values)
    {

        $fields = array_keys($values);
        $binds  = array_pad([],count($fields),'?');
        
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();


    }

    //metodo responsavel por executar a consulta no banco
    public function select($where = '', $order = '', $limit = '', $fields = '*', $offset = '')
    {
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';
        $offset = strlen($offset) ? 'OFFSET' . $offset : '';
    
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit.''.$offset;
    
        return $this->execute($query);
    }

    public function update($where,$values)
    {
        
        $fields = array_keys($values);
    
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
    
        $this->execute($query,array_values($values));
    
        return true;
    }

    public function delete($where)
    {
       
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

        $this->execute($query);

        return true;
    }

} 