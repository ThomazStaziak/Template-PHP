<?php
  $nomeCurso    = $_POST["nomeCurso"];
  $preco        = $_POST["preco"];
  $nomeCompleto = $_POST["nomeCompleto"];
  $cpf          = $_POST["cpf"];
  $nroCartao    = $_POST["nroCartao"];
  $validade     = $_POST["validade"];
  $cvv          = $_POST["cvv"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Compra Realizada com sucesso!</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item"> <strong>Nome Curso:</strong> <?php echo $nomeCurso ?> </li>
              <li class="list-group-item"> <strong>Preço:</strong> <?php echo $preco ?> </li>
              <li class="list-group-item"> <strong>Nome:</strong> <?php echo $nomeCompleto ?> </li>
            </ul>
            <div class="center">
              <a href="index.php">Voltar para a home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
