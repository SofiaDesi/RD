<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Sócio RD</title>
  </head>
  <style type="text/css">
      .back{
        background: #B0E0E6;
      }
      .marcador-container {
        background: #5bf946;
        border: 1px solid #36ae26;
      }
      .borda{
        border: 1px solid blue;
      }

    </style>
  <body class="back">
  <br><br>
  <div class="container">
      <div class="row marcador align-items-center">
        <div class="col">
          <img class="img-fluid" src="img/1.jpg">
        </div>
      </div>

    </div>
  <br><br><br><br>
  <div class="container">
  <form method="POST" id="sendbox">
  <h4 align="center">Clique abaixo para realizar o pagamento!</h4>
  <br><br>
  <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=63089510-30ea4943-35a7-411f-882f-fe962e7c0878" class="btn btn-primary btn-lg btn-block" role="button">Plano Mensal</a>
  <br><br><br>
  <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=63089510-eada72d6-df52-4d66-8a82-8904eba423d2" class="btn btn-primary btn-lg btn-block" role="button">Plano Anual</a>
      <br><br>
    <h1 align="center">Sorteios que acontecerá!</h1>
    <br><br>
    <div class="container">
      <div class="row marcador align-items-center">
        <div class="col">
          <img class="img-fluid" src="img/2.gif">
        </div>
      </div>

    </div>
    <br><br>
</form>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
  </body>
</html>