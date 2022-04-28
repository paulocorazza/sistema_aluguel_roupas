<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Lease
{
    public $id;//rent id
    public $customerId;
    public $tryDate;
    public $takeDate;
    public $returnDate;

    public function createLease()
    {
        $db = new Database('leases');
        $this->id = $db->insert([
            'customerId' => $this->customerId,
            'tryDate' => $this->tryDate,
            'takeDate' => $this->takeDate,
            'returnDate' => $this->returnDate

        ]);
    }

    public static  function getLeases($where = '', $order = '', $limit = '')
    {
        return (new Database('leases'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getLease($userId)
    {
        return (new Database('leases'))->select('id ='. $userId)
                                      ->fetchObject(self::class);
    }

    public function updateLease()
    {
        return (new Database('leases'))->update('id = '.$this->id,[
            'customerId' => $this->customerId,
            'tryDate' => $this->tryDate,
            'takeDate' => $this->takeDate,
            'returnDate' => $this->returnDate
        ]);
    }

    public function deleteLease()
    {
        return (new Database('leases'))->delete('id ='.$this->id);
    }

}