<?php 
    require_once("../models/user.php");

    $user = new User();

    if($_POST){
        $user->name=$_POST['txtName'];
        $user->lastName=$_POST['txtLastName'];
        $user->email=$_POST['txtEmail'];
        $user->pass=$_POST['txtPass'];

        $user->Create();
    }

?>