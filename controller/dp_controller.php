<?php
require_once "model/dp_model.php";

class Controller{
    public function all(){
        $model = new Model;
        $users = $model->findAll();
        $user = null;
        require_once "view/dp_view.php";
    }

    public function spesific($id){
        $model = new Model;
        $users = $model->findById($id);
        $user = null;
        require_once "view/dp_view.php";
    }
}

?>