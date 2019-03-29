<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>
<body>

  <!-- variaveis de conteudo -->
  <?php
    $nomeCurso1 = "Full Stack";
    $descricaoCurso1 = "Curso de desenvolvimento web";
    $imagemCurso1 = "full.jpeg";
    $precoCurso1 = 49.99;

    $nomeCurso2 = "Marketing Digital";
    $descricaoCurso2 = "Curso de Marketing digital... não o orgânico";
    $imagemCurso2 = "marketing.jpg";
    $precoCurso2 = 71.99;

    $usuario = [
      "nome" => "Thomaz Staziak",
      "email" => "thomaz@digitalhouse.com",
      "senha" => "123456",
      "nivelAcesso" => 0
    ]
   ?>

  <main>
    <!-- navBar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <span>Cursos</span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php if ($usuario["nivelAcesso"] == 1): ?>
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Adicionar Produto</a></li>
                  <li><a href="#">Editar Produto</a></li>
                </ul>
              </li>
            </ul>
          <?php endif; ?>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Pesquisar...">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </form>
          <p class="navbar-text navbar-right">
            Logado como
            <strong>
              <a href="#" class="navbar-link"><?php echo $usuario["nome"] ?></a>
            </strong>
          </p>
        </div>
      </div>
    </nav>

    <!-- produtos -->
    <div class="container">
      <div class="row">
        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
          <div class="thumbnail">
            <img src="<?php echo "assets/img/$imagemCurso1"; ?>" alt="Full Stack">
            <div class="caption">
              <h3><?php echo $nomeCurso1; ?></h3>
              <p><?php echo $descricaoCurso1; ?></p>
              <p><strong>R$ <?php echo $precoCurso1; ?> </strong></p>
              <a href="#" class="btn btn-primary" role="button">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
          <div class="thumbnail">
            <img src="<?php echo "assets/img/$imagemCurso2"; ?>" alt="Marketing Digital">
            <div class="caption">
              <h3><?php echo $nomeCurso2; ?></h3>
              <p><?php echo $descricaoCurso2; ?></p>
              <p><strong>R$ <?php echo $precoCurso2; ?> </strong></p>
              <a href="#" class="btn btn-primary" role="button">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
