<?php
  require "req/funcoesLogin.php";
  include "inc/head.php";
  if ($_REQUEST) {
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
    $preencher = $_REQUEST["preencher"];
    $nomeLogado = logarUsuario($email, $senha);

    if ($nomeLogado) {
      session_start();
      $_SESSION["logado"] = true;
      $_SESSION["nome"] = $nomeLogado;
      $_SESSION["email"] = $email;
      $_SESSION["nivelAcesso"] = mt_rand(0,1);

      if ($preencher) {
        setcookie("senha", $senha, time() + 3600);
        setcookie("email", $email, time() + 3600);
      }

      header("Location: index.php");
    } else {
      $erro = "Email e senha incompatíveis!";
    }
  }
 ?>
 <div class="page-center">
   <h1>Login</h1>
    <?php if (isset($erro)) : ?>
      <div class="alert alert-danger" role="alert">
        <span><?php echo $erro; ?></span>
      </div>
    <?php endif; ?>
   <form action="login.php" method="post" class="col-md-7">
     <div class="col-md-12">
       <label for="exampleInputEmail1">Email</label>
       <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"];} ?>">
     </div>
     <div class="col-md-12">
       <label for="exampleInputSenha">Senha</label>
       <input type="password" name="senha" class="form-control" id="exampleInputSenha" placeholder="Insira sua senha" value="<?php if(isset($_COOKIE["senha"])){echo $_COOKIE["senha"];} ?>">
     </div>
     <div class="col-md-12">
       <label for="examplInputPreencher">Preencher Automaticamente</label>
       <input type="checkbox" name="preencher" id="examplInputPreencher">
     </div>
     <div class="col-md-12">
       <button type="submit" class="btn btn-primary">Logar</button>
       <a class="col-md-offset-9" href="cadastro.php">Fazer cadastro!</a>
     </div>
   </form>
 </div>
 <?php
  include "inc/footer.php";
  ?>
