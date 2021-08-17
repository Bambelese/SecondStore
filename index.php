
<!--  include 'backend/class/conection.php';
  $db=new Connection();
 $db->getConnection();
  ?>-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Second Shop</title>
  </head>
  <body>
    <header>
      <div class="nav">
        <!--Logo-->
        <div id="inicio" class="inicio">
          <a href="index.html"><img src="./img/logo/logo_transparent.png" /></a>
        </div> 
        <!--Buscador-->
          <div class="">
            <div class="buscar">
              <input type="text" name="search" class="search" placeholder="Buscar productos, marcas y mas..." required="" />
              <button><img src="img/search.png" /></button>
            </div>
          </div>
        <!--Opciones-->   
          <div class="menu">
            <ul>
              <li id="item">
                <a href="">Categorias</a>
                <ul class="desple">
                  <li><a href="Moda.html">Moda</a></li>
                  <li><a href="Electro.html">Electrodomésticos</a></li>
                  <li><a href="Muebles.html">Muebles</a></li>
                </ul>
              </li>
              <li id="item"><a href="Login.html">Ingresar</a></li>
              <li id="item"><a href="Ayuda.html">Ayuda</a></li>
            </ul>
          </div>
      </div>

      </div>
    </header>

    <!--Slider-->
    <section>
      <div class="contSlider">
        <div class="contenedor-slider">
          <div class="slider" id="slider">
            <div class="slider__seccion">
              <img src="img/slide1.webp" alt="" class="slider__img" />
            </div>
            <div class="slider__seccion">
              <img src="img/slide2.webp" alt="" class="slider__img" />
            </div>
            <div class="slider__seccion">
              <img src="img/slide3.webp" alt="" class="slider__img" />
            </div>
            <div class="slider__seccion">
              <img src="img/slide4.webp" alt="" class="slider__img" />
            </div>
            <div class="slider__seccion">
              <img src="img/slide5.webp" alt="" class="slider__img" />
            </div>
          </div>
          <div class="slider__btn slider__btn--derecha" id="btn-derecha">&#62;</div>
          <div class="slider__btn slider__btn--izquierda" id="btn-izquierda">&#60;</div>
        </div>
      </div>
    </section>

    <section>
    <!--Productos-->
      <section>
        <div class="Sdescubre">
          <div class="contWidget">
            <div class="titleWidget">
              <h2>Descubre</h2>
            </div>
            <div class="widget">
              <div>
                <p>DESCUBRE</p>
                <p>LO MEJOR EN<br> SUPLEMENTOS</p>
              </div>
              <img src="./img/products/suplements.webp" alt="">
            </div>
          
            <div class="widget">
              <div>
                <p>HASTA 40% DSCTO</p>
                <p>RENUEVA <br> TU CELULAR</p>
              </div>
              <img src="./img/products/smartphone.webp" alt="">
            </div>
          </div>
        </div>
      </section>
    
      <!--Te puede Interesar-->
      <section>
        <div class="Sdescubre">
          <div class="contWidget">
            <div class="titleWidget">
              <h2>Te puede interesar</h2>
            </div>
            <div class="widget">
              <div>
                <p>HASTA 40% DSCTO</p>
                <p>EQUIPA<br> TU COCINA</p>
              </div>
              <img src="./img/products/cook.webp" alt="">
            </div>
          
            <div class="widget">
              <div>
                <p>TECNOLOGÍA</p>
                <p>30% DSCTO<br>EN COOLBOX</p>
              </div>
              <img src="./img/products/ps5.webp" alt="">
            </div>
          </div>
        </div>
      </section>
    </section>

        

      <footer>
        <div class="footer">
          <p class="text">| Copyright 2021 Second Shop todos los derechos reservados |</p>
        </div>
      </footer>

    <script src="slider.js"></script>
  </body>
</html>
