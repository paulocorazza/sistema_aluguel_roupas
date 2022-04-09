<?php  

namespace App\Entity;

use App\Db\Database;
use PDO;

class User 
{
    public $id;//user id
    public $name;//user name
    public $email;//user email
    public $password;//user password
    public $date;//createad at


    public function createUser()//create user
    {
        
        $db = new Database('users');
        $this->userId = $db->insert([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'date' => $this->date = date('Y-m-d H:i:s')
        ]);

        return true;
    }

    public function updateUser()
    {
        return (new Database('users'))->update('id = '.$this->id,[
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }

    public function deleteUser()
    {
        return (new Database('users'))->delete('id ='.$this->id);
    }

    public static  function getUsers($where = '', $order = '', $limit = '')
    {
        return (new Database('users'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }


    public static function getUser($userId)
    {
        return (new Database('users'))->select('id ='. $userId)
                                      ->fetchObject(self::class);
    }

    public static  function getCountUsers($where = null)
    {
        return (new Database('users'))->select($where, null,null,'COUNT(*) as qtd')
                                      ->fetchObject()
                                      ->qtd;
    }

    public static function getUserByEmail($email)
    {   
        return (new Database('users'))->select('email = "'. $email .'"')->fetchObject(self::class);
    }

}

