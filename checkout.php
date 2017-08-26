<!DOCTYPE html>
<html>
  <head>
    <title>Checkout Mirror Fashion</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/checkout.css">
  </head>
    
  <body>
      
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Otima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion!
                    Preencha seus dados para efetivar a compra.</p>
            </div><!-- Fim segunda .container -->
        </div><!-- Fim .jumbotron -->
        
        <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h2>Sua compra</h2>
                  </div><!-- Fim .panel-heading -->
                  <div class="panel-body">
                    <img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
                    <dl>
                        <dt>Produto</dt>
                        <dd><?= $_POST["nome"] ?></dd>
                        
                        <dt>Cor</dt>
                        <dd><?= $_POST["cor"] ?></dd>

                        <dt>Tamanho</dt>
                        <dd><?= $_POST["tamanho"] ?></dd>

                        <dt>Preco</dt>
                        <dd><?= $_POST["preco"] ?></dd>
                    </dl>
                  </div><!-- Fim .panel-body -->
                </div><!-- Fim .panel-default -->
            </div><!-- Fim .col-sm-4 -->

            <form class="col-sm-8">
                <div class="col-sm-6">
                    <fieldset> 
                        <legend>Dados Pessoais</legend>

                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber spam da Mirror Fashion
                            </label>
                        </div>
                        
                    </fieldset>
                </div><!-- Fim .col-sm-6 -->

                <div class="col-sm-6">
                    <fieldset>
                        <legend>Cartao de credito</legend>

                        <div class="form-group">
                            <label for="numero-cartao">Numero - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>
                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">Visa</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                        
                    </fieldset>
                </div><!-- Fim .col-sm-6 -->

                <button type="submit" class="btn btn-primary btn-lg pull-right">
                  <span class="glyphicon glyphicon-thumbs-up"></span>
                  Confirmar Pedido
                </button>
            </form><!-- Fim .col-sm-8 -->
        </div><!-- Fim .row -->
    </div><!-- Fim primeira .container -->
      
  </body>
</html>