<?php
require_once("../models/categoria.php");

    $category = new Categoria();
    $cd=$category->View();

    $listJson=json_encode($cd);
    $listJsonDecode=json_decode($listJson,true);

    

    foreach ($listJsonDecode as $categories) {
         $sd=$categories['Categoria'];
         
         print '<div class="itCategories">
                    <div class="opCategory">
                        <div>
                            <p>'.$sd.'</p>
                        </div>
                    </div>
                </div';
    }
?>