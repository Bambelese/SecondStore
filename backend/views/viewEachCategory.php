<?php 
    require_once("../models/producto.php");
    require_once("../models/categoria.php");
    session_start();
    error_reporting(0);

    $session=$_SESSION['username'];

    $product = new Product();
    $category = new Categoria();

    $product->codCategoria=$_GET['var'];

    $cd=$product->ViewProductsCategory();
    $ct=$category->View();

    //Producto
    $listJsonProd=json_encode($cd);
    $listJsonDecodeProd=json_decode($listJsonProd,true);

    //Categoria
    $listJson=json_encode($ct);
    $listJsonDecode=json_decode($listJson,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="../../estilos.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../frontend/css/viewEachCategory.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="nav">
            <!--Logo-->
            <div id="inicio" class="inicio">
              <a href="../index.php"><img src="../../img/logo/logo_transparent.png" /></a>
            </div> 
                <!--Buscador-->
              <div class="">
                <div class="buscar">
                  <input type="text" name="search" class="search" placeholder="Buscar productos, marcas y mas..." required="" />
                  <button><img src="../../img/search.png" /></button>
                </div>
              </div>
                <!--Opciones-->   
              <div class="menu">
                <ul>
                  <li class="item">
                    <a href="">Categorias</a>
                    <ul class="desple">
                      <?php foreach ($listJsonDecode as $categories) {
                        echo "<li><a href='viewEachCategory.php?var=".$categories['CodCategoria']."'>".$categories['Categoria']."</a></li>";
                      }?>
                    </ul>
                  </li>
                  <?php if($session == null || ''){?>
                    <li class="item"><a href="../Registro.html">Ingresar</a></li>
                  <?php }else{ ?>
                    <li class="item">
                        <a href="#"><?php echo $_SESSION['username'] ?></a>
                        <ul class="desple">
                            <li><a href="publishProduct.php">Vender</a></li>
                        </ul>
                    </li>
                    <li class="item"><a href="../controllers/logOut.php">Cerrar Sesion</a></li>
                  <?php }?>
                </ul>
              </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <?php foreach ($listJsonDecodeProd as $product) { ?>
                <div class="contProduct">
                    <div class="dProd">
                        <p class="prod"><?php echo $product['product'] ?></p>
                        <p class="prod">Vendido por <?php echo $product['proveedor'] ?></p>
                        <p class="prod">$ <?php echo $product['Precio'] ?></p>
                    </div>
                    <div class="opProd">
                      <input type="number" value="1" min="1" max="<?php echo $product['Cantidad'];?>">
                      <button type="button" id="<?php echo $product['codProduct'];?>" class="buyProd" data-id="<?php echo $product['codProduct'];?>" 
                      data-prod="<?php echo $product['product'];?>" data-cat="<?php echo $product['codCategoria'];?>" data-cl="<?php echo $product['codClient'];?>"
                      data-prov="<?php echo $product['proveedor'];?>" data-price="<?php echo $product['Precio'];?>">Buy</button>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>

    <footer>
        <div class="footer">
          <p class="text">| Copyright 2021 Second Shop todos los derechos reservados |</p>
        </div>
      </footer>
      
      <script src="../js/class/product.js"></script>
      <script src="../js/buyProduct.js"></script>
</body>
</html>