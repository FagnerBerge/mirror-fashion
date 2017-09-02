<!DOCTYPE html>
<html>
  <head>
    <title><?php print $cabecalho_title; ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width"/>
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"
  </head>
  <body>  
    <?php include("header.php"); ?>
      
      <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
          </section><!-- fim .busca -->
          
          <section class="menu-departamentos">
              <h2>Departamentos</h2>
              
              <nav>
                <ul>
                    <li>
                        <a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</li>
                        </ul>
                    </li>
                    <li><a href="#">Calcas</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsa e Carteiras</a></li>
                    <li><a href="#">Acessorios</a></li>
                </ul>
              </nav>
        </section><!-- fim .menu-departamentos -->
          
        <img src="img/destaque-home.png" alt="Promocao: Big City Night">
      </div><!-- fim .container .destaque -->
      
      <div class="container paineis">
        <!--Os paineis de novidades e mais vendidos entrarao aqui dentro -->
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura1.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura2.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura3.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura4.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura5.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura6.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura7.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura8.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura9.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura10.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura11.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura12.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                
            </ol>

            <button type="button">Mostrar mais</button>
            
        </section>
          
        <section class="painel mais-vendidos  painel-compacto">
            <h2>Mais Vendidos</h2>
            <ol>
                <!-- Primeiro produto -->
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura7.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura8.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura9.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura10.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura11.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura12.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura13.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura14.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura15.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura1.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura2.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                       <figure>
                           <img src="img/produtos/miniatura3.png">
                           <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                       </figure>
                    </a>
                </li>
            </ol>

            <button type="button">Mostrar mais</button>

        </section>
      </div>
    <?php include("footer.php"); ?>
    <script src="js/jquery.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/home.js"></script>
  </body>
</html>
