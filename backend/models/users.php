<?php 
    include '../controllers/conection.php';

    $db=new Connection();
    $db->getConnection();

    class User{
        public $name;
        public $lastName;
        public $email;
        public $pass;
    }

    public function Create(){
        $pdoStm=$db->prepare();
    }
?>