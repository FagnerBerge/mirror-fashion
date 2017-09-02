<!DOCTYPE html>
<html>
  <head>
    <title><?php print $cabecalho_title; ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
  </head>
  <body>  

    <?php include("header.php"); ?>

    <div class="produto-back">
            <div class="container">
                <div class="produto">
                <h1>Fuzzy Cardian</h1>
                <p>por apenas R$ 129,00</p>
                
                <form action="checkout.php" method="post">
                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>
                        
                        <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto2-verde.png" alt="verde">
                        </label>
                        
                        <input type="radio" name="cor" value="rosa" id="rosa">
                        <label for="rosa">
                            <img src="img/produtos/foto2-rosa.png" alt="rosa">
                        </label>
                        
                        <input type="radio" name="cor" value="azul" id="azul">
                        <label for="azul">
                            <img src="img/produtos/foto2-azul.png" alt="azul">
                        </label>
                    </fieldset>
                    
                    <fieldset class="tamanho">
                        <legend>Escolha o tamanho:</legend>
                        <input type="range" min="36" max="46" step="2" value="42" name="tamanho" id="tamanho" oninput="output.value=this.value">
                        <output for="tamanho" id="output">42</output>
                    </fieldset>
                    
                    <input type="submit" class="comprar" value="Comprar">
                    
                    <input type="hidden" name="nome" value="Fuzzy Cardigan">
                    <input type="hidden" name="preco" value="129,00">
                </form>
                </div>
                <div class="detalhes">
                    <h2>Detalhes do produto</h2>
                    
                    <p>Esse e o melhor casaco de Cardiga que voce ja viu. Excelente material italiano com estampa 
                    desenhada pelos artesaos da comunidade de krotor nas ilhas gregas. Compre ja e receba hoje 
                    mesmo pela nossa entrega a jato.</p>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Caracteristicas</th>
                                <th>Detalhe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>Cardiga</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Algodao e poliester</td>
                            </tr>
                            <tr>
                                <td>Cores</td>
                                <td>Azul, Rosa e Verde</td>
                            </tr>
                            <tr>
                                <td>Lavagem</td>
                                <td>Lavar a mao</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
    </div>
            
    <?php include("footer.php"); ?>
      
  </body>
</html>