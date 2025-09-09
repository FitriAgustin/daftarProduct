<?php
 class Connection{
    private $h = "localhost";
    private $u = "admin";
    private $p = "admin123";
    private $db = "daftarProduct";

    function connect(){
        return  new mysqli($this->h, $this->u, $this->p, $this->db);
    }


 }


?>