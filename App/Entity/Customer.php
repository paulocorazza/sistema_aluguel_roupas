<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Customer
{
    public $id;//customer's id
    public $name;//customer's name
    public $surname;//customer's surname
    public $street;//customer's street
    public $addressNumber;//adress number
    public $addressComplement;//address complement
    public $state;//customer's state
    public $city;//customer's city
    public $phoneNumber;//customer's phone number
    public $email;//customer's email
    public $birthday;//customer's birthday
    public $createdAt;//created at


    public function createCustomer()//create customer
    {
        
        $db = new Database('customers');
        $this->customerId = $db->insert([
            'name' => $this->name,
            'surname' => $this->surname,
            'street' => $this->street,
            'addressNumber' => $this->addressNumber,
            'addressComplement' => $this->addressComplement,
            'state' => $this->state,
            'city' => $this->city,
            'phoneNumber' => $this->phoneNumber,
            'email' => $this->email,
            'birthday' => $this->birthday,
            'created_at' => $this->createdAt =  date('Y-m-d H:i:s')
        ]);

        return true;
    }

    public static function getCustomers($where = '', $order = '', $limit = '')
    {
        return (new Database('customers'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public function updateCustomer()
    {
        return (new Database('customers'))->update('id = '.$this->id,[
            'name' => $this->name,
            'surname' => $this->surname,
            'street' => $this->street,
            'addressNumber' => $this->addressNumber,
            'addressComplement' => $this->addressComplement,
            'state' => $this->state,
            'city' => $this->city,
            'phoneNumber' => $this->phoneNumber,
            'email' => $this->email,
            'birthday' => $this->birthday,
        ]);
    }

    public function deleteCustomer()
    {
        return (new Database('customers'))->delete('id ='.$this->id);
    }

    public static function getCustomer($id)
    {
        return (new Database('customers'))->select('id ='. $id)
                                      ->fetchObject(self::class);
    }



}
