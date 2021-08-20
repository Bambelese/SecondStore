<?php 
    require_once("../models/producto.php");

    $product = new Product();
    session_start();
    $session=$_SESSION['idUser'];

    if($_POST){
        $product->codCliente=$session;
        $product->codCategoria=$_POST['idCategory'];
        $product->product=$_POST['product'];
        $product->precio=$_POST['price'];
        $product->cantidad=$_POST['quantity'];

        $product->Create();

        header("location:../index.php");
    }
?>