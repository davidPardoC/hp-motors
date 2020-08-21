<?php
$mesagge_button = 'Iniciar Sesion | Registrarse';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">HP Motors</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">COMPRAR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">VENDER</a>
      </li>
    </ul>
    <button class="btn btn-primary"><?= $mesagge_button ?></button>
  </div>
  
</nav>