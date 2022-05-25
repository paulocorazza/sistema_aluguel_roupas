<?php

namespace App\Entity;

use App\Db\Database;
use PDO;


class LeaseItem 
{
    public $id;
    public $leaseId;
    public $clotheCode;
    public $clotheId;
    public $rentPrice;
    public $comments;

    public function saveLeaseItem()
    {
        $db = new Database('lease_items');
        $this->id = $db->insert([
            'lease_id' => $this->leaseId,
            'clothe_id'=> $this->clotheId,
            'clothe_code' => $this->clotheCode,
            'comments'  => $this->comments,
            'rentPrice' => $this->rentPrice
        ]);
        return true;
    }

    public static function updateClotheStatus()
    {
        try {  
            $pdo = new PDO('mysql:host='.Database::HOST.';dbname='.Database::NAME,Database::USER,Database::PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('UPDATE clothes SET status = "alugado" WHERE id = :clothe_id');
            $stmt->execute(array(
                ':clothe_id' => $_POST['clothe_id']
            ));
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            header("Location: /views/erro.php");
            exit;

        }
    }

    public static function getLeaseItemsDress()
    {
        try {  
            $pdo = new PDO('mysql:host='.Database::HOST.';dbname='.Database::NAME,Database::USER,Database::PASSWORD);
            $id = $_GET['id'];
            $sql = 'SELECT id,lease_id,clothe_code,comments,rentPrice FROM lease_items WHERE lease_id = '.$id;
            $stmt = $pdo->query($sql);
            $leaseItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $leaseItems;
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            header("Location: /views/erro.php");
            exit;

        }
    }
    public static function getLeaseItemsTotal()
    {
        try {  
            $pdo = new PDO('mysql:host='.Database::HOST.';dbname='.Database::NAME,Database::USER,Database::PASSWORD);
            $id = $_GET['id'];
            $sql = 'SELECT sum(rentPrice) FROM lease_items WHERE lease_id = '.$id;
            $stmt = $pdo->query($sql);
            $leaseItemsTotal = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $leaseItemsTotal;
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            header("Location: /views/erro.php");
            exit;

        }
    }

    public static function getLeaseItem($id)
    {
        return (new Database('lease_items'))->select('id ='. $id)
                                      ->fetchObject(self::class);
    }

    public function deleteLeaseItem()
    {
        try {  
            $pdo = new PDO('mysql:host='.Database::HOST.';dbname='.Database::NAME,Database::USER,Database::PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('DELETE FROM lease_items WHERE id = :id');
            $stmt->execute(array(
                ':id' => $_GET['id']
            ));
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            header("Location: /views/erro.php");
            exit;

        }
    }

    public static function getClotheFromLeaseItem()
    {
        try {
            $pdo = new PDO('mysql:host='.Database::HOST.';dbname='.Database::NAME,Database::USER,Database::PASSWORD);
            $id = $_GET['id'];
            $sql = 'SELECT clothe_id,clothe_code FROM lease_items WHERE id = '.$id;
            $stmt = $pdo->query($sql);
            $clotheCode = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clotheCode;
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            header("Location: /views/erro.php");
            exit;

        }
    }

    public static function getLeaseFromLeaseItems()
    {
        try {  
            $pdo = new PDO('mysql:host='.Database::HOST.';dbname='.Database::NAME,Database::USER,Database::PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('SELECT lease_id FROM lease_items WHERE id = :id');
            $stmt->execute(array(
                ':id' => $_GET['id']
            ));
            $leaseId = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $leaseId;
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            header("Location: /views/erro.php");
            exit;

        }   
    }

}