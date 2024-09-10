<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">PetSitter</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?menu=home">Home</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tutores
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.php?menu=tutores">Lista de Tutores</a></li>
                      <li><a class="dropdown-item" href="#">Cadastro de Tutores</a></li>
                      <!-- Mais um item da lista do dropdown com linha divisoria -->
                      <!-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Animais
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.php?menu=animais">Lista de Animais</a></li>
                      <li><a class="dropdown-item" href="#">Cadastro de Animais</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- Barra de procura. Search -->
                <!-- <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
              </div>
            </div>
          </nav>
    </header>

<main>
  <?php
    if(isset($_GET["menu"])){
      $menu = $_GET["menu"];
    } else {
      $menu = "";
    }

    switch ($menu) {
      case 'animais':
        include("lista-animais.php");
        break;

      case 'home':
        include("home.php");
        break;
      
      case 'tutores':
        include("lista-tutores.php");
        break;

      default:
        include("home.php");
        break;
    }

  ?>
</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>