<?php
  $currentPage = 'index';
  include_once(__DIR__ . '/componentes/header.php');
?>

<main class="container pt-5">
    <div class="jumbotron">
        <h1 class="display-4">
            Crie sua conta
        </h1>
        <p class="lead">
            Junte-se a mais nova comunidade de culinária do mundo!
        </p>
    </div>
    <form action="register_post.php" method="post">
    <form>
        <div class="form group">
            <label for="name">Digite seu nome completo</label>
            <input type="text" class="form-control" name="name" id="name">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compatilhar seu email com mais ninguém </small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">
    Cadastrar-se
</button>
</form>
    </form>
</main>

<?php
  include_once(__DIR__ . '/componentes/footer.php');
?>