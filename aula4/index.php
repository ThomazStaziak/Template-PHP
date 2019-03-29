<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>
<body>

  <?php
    $cursos = [
      "Full Stack" => ["full.jpeg", "Curso de desenvolvimento web", 41.99, "fullstack"],
      "Marketing Digital" => ["marketing.jpg", "Curso de marketing", 51.99, "marketing"],
      "User Experience" => ["ux.png", "Curso de Experiência de usuário", 71.99, "ux"],
      "Mobile Android" => ["android.png", "Curso de desenvolvimento android", 31.99, "android"]
    ];

    $usuario = [
      "nome" => "Thomaz Staziak",
      "email" => "thomaz@digitalhouse.com",
      "senha" => "123456",
      "nivelAcesso" => 1
    ]
   ?>

  <main>
    <?php if ($usuario["nivelAcesso"] == 0) : ?>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <span>Cursos</span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesquisar...">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>

            <p class="navbar-text navbar-right">Logado como <a href="#" class="navbar-link"><?php echo $usuario["nome"] ?></a></p>
          </div>
        </div>
      </nav>
    <?php else : ?>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <span>Cursos</span>
            </a>

          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Adicionar Produto</a></li>
                  <li><a href="#">Editar Produto</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
            <p class="navbar-text navbar-right">Logado como <a href="#" class="navbar-link"><?php echo $usuario["nome"] ?></a></p>
          </div>
        </div>
      </nav>
    <?php endif; ?>

    <div class="container">
      <div class="row">
        <?php foreach ($cursos as $nome => $infos) : ?>
            <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
              <div class="thumbnail">
                <img src="<?php echo "assets/img/".$infos[0] ?>" alt="<?php echo "Foto " . $cursos["nome"][$i]; ?>">
                <div class="caption">
                  <h3><?php echo $nome  ?></h3>
                  <p><?php echo $infos[1]  ?></p>
                  <p><strong>R$ <?php echo $infos[2]  ?> </strong></p>
                  <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="<?php echo "#$infos[3]" ?> ">Comprar</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
    </div>

    <?php foreach ($cursos as $nome => $infos): ?>
      <div class="modal fade" id="<?php echo $infos[3] ?>" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Digite seus dados para efetuar a compra</h4>
            </div>
            <div class="modal-body">
              <p>Curso de <?php echo $nome ?>.</p>
              <p>Valor: R$ <?php echo $infos[2] ?></p>
              <form class="" action="" method="">
                <input type="text" name="" value="">
                <input type="text" name="" value="">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
