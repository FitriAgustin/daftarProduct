<?php
require_once "connect.php";

class Model extends Connection{
    function findAll(){
        $sql = "SELECT * FROM products";
        $result = $this->connect()->query($sql);

        $data = [];
        if($result->num_rows> 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    function findById($id){
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = $this->connect()->query($sql);

        if($result->num_rows > 0){

        return $result->fetch_assoc();
        }
        return null;    
    }
    
}


?>