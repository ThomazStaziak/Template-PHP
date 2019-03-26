<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>

  <?php
    $nomeCurso1 = "Full Stack";
    $descricaoCurso1 = "Curso de desenvolvimento web";

    $nomeCurso2 = "Marketing Digital";
    $descricaoCurso2 = "Curso de Marketing digital... não o orgânico";
   ?>

  <main>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Cursos" src="...">
          </a>
        </div>

        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3><?php echo $nomeCurso1; ?></h3>
              <p><?php echo $descricaoCurso1; ?></p>
              <a href="#" class="btn btn-primary" role="button">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3><?php echo $nomeCurso2; ?></h3>
              <p><?php echo $descricaoCurso2; ?></p>
              <a href="#" class="btn btn-primary" role="button">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>



</body>
</html>
