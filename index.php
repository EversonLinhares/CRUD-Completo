<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      body {
       
      }
    </style>
    <title>Hospital</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Hospital</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hospital
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="?page=cadastrar-hospital">Cadastrar</a>
              <a class="dropdown-item" href="?page=listar-hospital">Listar</a>
            </div>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Recepcionista
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="?page=cadastrar-recepcionista">Cadastrar</a>
              <a class="dropdown-item" href="?page=listar-recepcionista">Listar</a>
            </div>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paciente
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a>
              <a class="dropdown-item" href="?page=listar-paciente">Listar</a>
            </div>
          </li>
      
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <?php
                    include("config.php");
                   switch (@$_REQUEST["page"]) {
                      //Hospital
                     case 'cadastrar-hospital':
                        include("hospital-cadastrar.php");
                       break;
                     case 'listar-hospital':
                        include("hospital-listar.php");
                       break;
                     case 'editar-hospital':
                        include("hospital-editar.php");
                       break;
                     case 'salvar-hospital':
                        include("hospital-salvar.php");
                       break;
                       //recepcionista
                     case 'cadastrar-recepcionista':
                        include("recepcionista-cadastrar.php");
                       break;
                     case 'listar-recepcionista':
                        include("recepcionista-listar.php");
                       break;
                     case 'editar-recepcionista':
                        include("recepcionista-editar.php");
                       break;
                     case 'salvar-recepcionista':
                        include("recepcionista-salvar.php");
                       break;
                     //paciente
                     case 'cadastrar-paciente':
                        include("paciente-cadastrar.php");
                       break;
                     case 'listar-paciente':
                        include("paciente-listar.php");
                       break;
                     case 'editar-paciente':
                        include("paciente-editar.php");
                       break;
                     case 'salvar-paciente':
                        include("paciente-salvar.php");
                       break;
                     
                     
                     
                     default:
                       include("main.php");
                       
                   }
                ?>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


  </body>
</html>