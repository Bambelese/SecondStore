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
        $username=$cd[1];
        $_SESSION['username']=$username;
        header("location:../index.php");
    }
}

    //$cd=$user->VerifyLogin();
//
    //if(empty($cd)){
    //    echo ("Datos incorrectos");
    //}else{
    //    echo "$cd[1]";
    //    //header("location:index.php");
    //}
    //
    //$cd=$user->VerifyLogin();
    //print_r ($cd[0]);
    //if($cd===1){
    //    echo "funciona";
    //}else{
    //    echo "no";
    //}
?>