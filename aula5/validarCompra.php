<?php
  $nomeCurso    = $_POST["nomeCurso"];
  $preco        = $_POST["preco"];
  $nomeCompleto = $_POST["nomeCompleto"];
  $cpf          = $_POST["cpf"];
  $nroCartao    = $_POST["nroCartao"];
  $validade     = $_POST["validade"];
  $cvv          = $_POST["cvv"];
  $erros        = [];

  // retorna true se o cpf tiver 11 caracteres
  function validarCpf($cpf) {
    return strlen($cpf) == 11;
  }

  // retorna true apenas se o cartao comecar com 4, 5 ou 6
  function validarNroCartao($nroCartao) {
    $primLetra = substr($nroCartao, 0, 1);
    return  $primLetra == 4 || $primLetra == 5 || $primLetra == 6;
  }

  // retorna true se a data for maior que a data atual
  function validarData($data) {
    return true;
  }

  // retorna true se o cvv tiver 3 caracteres
  function validarCvv($cvv) {
    return strlen($cvv) == 3;
  }

  // retorna true se todas as funções acima retornarem true
  function validarCompra($cpf, $nroCartao, $data, $cvv) {
    global $erros;

    if (!validarCpf($cpf)) {
      array_push($erros, "o seu CPF precisa ter 11 caracteres");
    }

    if (!validarNroCartao($nroCartao)) {
      array_push($erros, "o número do seu cartão precisa começar com 4, 5 ou 6");
    }

    if (!validarData($data)) {
      array_push($erros, "A data de validade não pode ser inferior a data atual");
    }

    if (!validarCvv($cvv)) {
      array_push($erros, "o CVV precisa ter 3 caracteres");
    }
  }

  validarCompra($cpf, $nroCartao, $data, $cvv);
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
        <?php if (count($erros) < 0): ?>
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
        <?php else: ?>
          <div class="panel panel-danger">
            <div class="panel-heading">Por favor preencha seus dados corretamente!</div>
            <div class="panel-body">
              <ul class="list-group">
                <?php foreach ($erros as $chave => $valorErro): ?>
                  <li class="list-group-item"> <?php echo $valorErro; ?> </li>
                <?php endforeach; ?>
              </ul>
              <div class="center">
                <a href="index.php">Voltar para a home</a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>
