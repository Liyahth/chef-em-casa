
<?php
function isActivePage($currentPage, $pageName ){
    if($currentPage == $pageName){
        return 'active';
    }
    return '';
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/main.css">
    <title>
        <?= $currentPage == 'index' ? 'Chefe em casa - Pagina Inicial' : ''; ?>
        <?= $currentPage == 'about' ? 'Chefe em casa - Sobre' : ''; ?>
        <?= $currentPage == 'contact' ? 'Chefe em casa - Contato' : ''; ?>
    </title>
</head>
<body> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="index.php">
<img src="./img/logo-min.jpg" alt="" width="100">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= isActivePage($currentPage, 'index')?>">
        <a class="nav-link" href="index.php">Pagina inicial <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= isActivePage($currentPage, 'about')?>">
        <a class="nav-link" href="about.php">Sobre</a>
      </li>
      <li class="nav-item <?= isActivePage($currentPage, 'contact') ?>">
        <a class="nav-link" href="contact.php">contato</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 text-light btn btn-primary" href="register.php">Cadastro</a>
    </form>
  </div>
</div>
</nav>