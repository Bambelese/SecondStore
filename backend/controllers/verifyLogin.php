<?php 

require_once("../models/users.php");

$user = new User();

if($_POST){
    $user->email=$_POST['email'];
    $user->pass=$_POST['pass'];
    $cd=$user->VerifyLogin();

    if(empty($cd)){
        echo ("Datos incorrectos");
    }else{
        session_start();

        $idUser=$cd[0];
        $username=$cd[1];
        
        $_SESSION['username']=$username;
        $_SESSION['idUser']=$idUser;
        
        header("location:../index.php");
    }
}
?>