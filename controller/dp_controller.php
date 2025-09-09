<?php
require_once "model/dp_model.php";

class Controller{
    public function all(){
        $model = new Model;
        $products = $model->findAll();
        $product = null;
        require_once "view/dp_view.php";
    }

    public function spesific($id){
        $model = new Model;
        $products = $model->findAll();
        $product = $model->findById($id);   
        require_once "view/dp_view.php";
    }
}

?>