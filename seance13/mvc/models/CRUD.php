<?php
namespace App\Models;

abstract class CRUD extends \PDO{
   final public function __construct(){
        parent::__construct('mysql:host=localhost;dbname=ecommerce;port=3306; charset=utf8', 'root','');
    }

   final public function select($field = null, $order = 'ASC'){
        if($field == null){
            $field = $this->primaryKey;
        }
        $sql = "SELECT * FROM $this->table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

}

?>