<?php
require_once("../models/categoria.php");

    $category = new Categoria();
    $cd=$category->View();

    $listJson=json_encode($cd);
    $listJsonDecode=json_decode($listJson,true);

    

    foreach ($listJsonDecode as $categories) {
        $id=$categories['CodCategoria'];
        $sd=$categories['Categoria'];
         

         print '<div id="'.$id.'" class="itCategories">
                    <button type=button class="opCategory" data-id="'.$id.'">
                        <div data-id="'.$id.'">
                            <p data-id="'.$id.'">'.$sd.'</p>
                        </div>
                    </button>
                </div>';
    }
?>