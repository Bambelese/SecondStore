<?php 
    require_once("../models/users.php");

    $user = new User();

    if($_POST){
        $user->name=$_POST['nombre'];
        $user->lastName=$_POST['apellido'];
        $user->email=$_POST['email'];
        $user->pass=$_POST['contra'];
        //$pru=$_POST['nombre'];
        //echo $pru;
        $user->Create();
    }
    
?>