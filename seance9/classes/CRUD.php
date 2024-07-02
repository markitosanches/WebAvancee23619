<?php
class CRUD extends PDO{
    public function __construct(){
        parent::__construct('mysql:host=localhost;dbname=ecommerce;port=3306; charset=utf8', 'root','');
    }

    public function select($table, $field = 'id', $order = 'ASC'){
        $sql = "SELECT * FROM $table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($table, $value, $field = 'id'){
        $sql = "SELECT * FROM $table WHERE $field = :$field ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
            return false;
        }
    }

    public function insert($table, $data){

        $fieldName = implode(', ', array_keys($data));
        $fieldvalue = ":".implode(', :', array_keys($data));
        // echo "<br>INSERT INTO client(name, address, phone, zip_code, email) values (:name, :address, :phone, :zip_code, :email)<br>";

        $sql = "INSERT INTO $table ($fieldName) values ($fieldvalue)";
        $stmt= $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();

        //echo "<br>".$sql."<br>";
        //INSERT INTO client(name, address, phone, zip_code, email) values (:name, :address, :phone, :zip_code, :email)

        // $sql ="INSERT INTO $table ('name','address'...) VALUES (':name',':address')";
        // $stmt= $this->prepare($sql);
        // $stmt->bindValue(":name", $_POST['name']);
        // $stmt->bindValue(":address", $_POST['address']);
        // $stmt->execute();

        return $this->lastInsertId();
    }

    public function update($table, $data, $field = 'id'){
        $fieldName = null;
        foreach($data as $key=>$value){
            $fieldName .= "$key = :$key, ";
        }
        $fieldName = rtrim($fieldName, ', ');
        //echo $fieldName;
       // echo "<br>UPDATE client SET name = :name, address = :address, phone = :phone, zip_code = :zip_code, email = :email WHERE id = :id<br>" ;

        $sql = "UPDATE $table SET $fieldName WHERE $field = :$field";
        $stmt= $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($table, $value, $field = 'id'){
        $sql = "DELETE FROM $table WHERE $field = :$field";
        $stmt= $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>