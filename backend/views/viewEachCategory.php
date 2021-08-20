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
                    <a href="viewEachCategory.php?var=<?php echo $product['codProduct'];?>">
                        <div>
                            <p><?php echo $product['product'] ?></p>
                            <p>US$<?php echo $product['Precio'] ?></p>
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>
    </section>

    <footer>
        <div class="footer">
          <p class="text">| Copyright 2021 Second Shop todos los derechos reservados |</p>
        </div>
      </footer>
</body>
</html>