<?php 
  session_start();
  error_reporting(0);
  $session=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../estilos.css" />
    <link rel="stylesheet" type="text/css" href="../../frontend/css/publishProduct.css" />
    <title>Publicar</title>
</head>
<body>
    <header>
      <div class="nav">
        <!--Logo-->
        <div id="inicio" class="inicio">
          <a href="../index.php"><img src="../../img/logo/logo_transparent.png" /></a>
        </div> 
            <!--Opciones-->   
          <div class="menu">
            <ul>
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
            <div>
                <div class="contS">
                    <div class="cont">
                      <form method="POST" action="../controllers/createProduct.php">
                        <div class="contSFirst">
                            <h1>Empecemos completando algunos datos</h1>
                            <img src="../../img/publish.svg" alt="">
                        </div>
                        <div class="contSecond" id="firstSection">
                          <h1>Indica tu producto, marca y modelo</h1>
                          <p>Este será el título. Ten en cuenta que cuando tengas ventas, no podrás editarlo</p>
                          <div class="formProd">
                            <input type="text" name="product" id="product" class="input" placeholder="Name Product">
                            <input type="number" name="price" id="priceProduct" class="input" placeholder="Price" min="1">
                            <input type="number" name="quantity" id="quantityProduct" class="input" placeholder="Quantity" min="1">
                            <select class="select" id="conditionProd" aria-label="Disabled select example">
                              <option value="Nuevo" selected>Nuevo</option>
                              <option value="Usado">Usado</option>
                            </select>
                          </div>
                          <button type="button" id="getCategories">Continue</button>
                        </div>
                        <div class="contSecond" id="secondSection">
                            <h1>Indica la categoria que pertenece tu producto</h1>
                            <div id="s" class="itCategories"> 
                            </div>
                        </div>

                        <div>
                          <button type="submit" id="newProduct">Crear</button>
                        </div>
                      </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer">
          <p class="text">| Copyright 2021 Second Shop todos los derechos reservados |</p>
        </div>
    </footer>

      <script src="../js/getCategories.js"></script>
</body>
</html>