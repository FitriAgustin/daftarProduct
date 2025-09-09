<?php
require_once "controller/dp_controller.php";

$controller = new Controller();
 if(isset($_GET['id'])){
    $controller = $spesific($_GET['id']);
 }
 else {
    $controller = $all();
 }

?>