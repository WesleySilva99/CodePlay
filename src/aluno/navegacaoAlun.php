
<?php

  include 'imports.php';

  
?>


 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/index.php">CodePlay</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/aluno/ranking.php">Ranking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/aluno/telas/listar_problemas.php">Ver problemas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/aluno/telas/problemas.php">Ver ranking</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/aluno/telas/problemas.php" > Responder Problemas </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Usuario: <br> <?= $_SESSION['nome']?></a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/loginCadastro/logoff.php" > LogOff </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>