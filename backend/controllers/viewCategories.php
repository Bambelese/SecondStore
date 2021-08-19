<?php
require_once("../models/categoria.php");

    $category = new Categoria();
    $cd=$category->View();

    $listJson=json_encode($cd);
    $listJsonDecode=json_decode($listJson,true);

    

    foreach ($listJsonDecode as $categories) {
         $sd=$categories['Categoria'];
         //print_r ($sd);
         print '<div><p class="opCategory">'.$sd.'</p></div';
         //$array = array(["category" => $categories]);
         //$s=json_encode($array);
         //print_r($s); json_decode($s,true);
    }
?>