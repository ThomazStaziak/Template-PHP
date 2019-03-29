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

  <?php
    $cursos = [
      "Full Stack" => ["full.jpeg", "Curso de desenvolvimento web", 41.99],
      "Marketing Digital" => ["marketing.jpg", "Curso de marketing", 51.99],
      "User Experience" => ["ux.png", "Curso de Experiência de usuário", 71.99],
      "Mobile Android" => ["android.png", "Curso de desenvolvimento android", 31.99]
    ];
   ?>

  <main>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <span>Cursos</span>
          </a>
        </div>

        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquisar...">
          </div>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </form>
      </div>
    </nav>

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
                  <a href="#" class="btn btn-primary" role="button">Comprar</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
    </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
</body>
</html>
