<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Clothe
{
    public $id;//clothe id
    public $code;//clothe code
    public $photo;//clothe photo
    public $buyPrice;//buyPrice
    public $rentPrice;//rentprice
    public $salePrice;//salePrice
    public $status;//clothe status
    public $size;//clothe size
    public $type;//clothe type



    public function createClothe()//create user
    {
        
        $db = new Database('clothes');
        $this->id = $db->insert([
            'code' => $this->code,
            'photo' => $this->photo,
            'buyPrice' => $this->buyPrice,
            'rentPrice' => $this->rentPrice,
            'salePrice' => $this->salePrice,
            'status' => $this->status,
            'size' => $this->size,
            'type' => $this->type
        ]);

        return true;
    }

    public static  function getDresses($where = 'type = "dress"', $order = '', $limit = '')
    {
        return (new Database('clothes'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getDress($id)
    {
        return (new Database('clothes'))->select('id ='. $id)
                                      ->fetchObject(self::class);
    }


    public function updateDress()
    {
        return (new Database('clothes'))->update('id = '.$this->id,[
            'code' => $this->code,
            'photo' => $this->photo,
            'buyPrice' => $this->buyPrice,
            'rentPrice' => $this->rentPrice,
            'salePrice' => $this->salePrice,
            'status' => $this->status,
            'size' => $this->size,
        ]);
    }

    public function deleteDress()
    {
        return (new Database('clothes'))->delete('id ='.$this->id);
    }



}