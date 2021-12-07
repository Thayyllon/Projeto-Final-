<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Mapa de caracteres unicode -->

        <meta charset="UTF-8"/> 
        
        <!-- Indexar motores de busca -->

        <meta name="robots" content="index,follow" />

        <meta name="keywords" content="palavras chaves" />
        
        <meta name="description" content="palavras para description" />
        
        <!-- Autor da página -->

        <meta name="author" content="Thaylon Roberto Muniz da Silva"/>

        <!-- Design responsivo/mobile first -->

        <meta name="viweport" content="width-device-width, initial-scale.0" />
       
        <!-- Jquery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Bootstrap -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
          <!--Favicons-->
        <link href="img/logo_detran.png" rel="icon">
        <link href="img/logo_detran.png"rel="apple-touch-icon">
        
        <!-- CSS externo -->

        <link href="../view/css/mex.css" rel="stylesheet" type="text/css">

        <!-- CSS interno -->

      
    
        <!-- Titulo da página -->
        
        <title>Cadastro</title>
    </head>
    <body>

      <!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark " 
        style="background-image: linear-gradient(to bottom,#000 ,#000,#20201d,#000,#000);
        border-bottom: 1px groove #0bb80e; border-top: 1px groove #0bb80e;">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo_detran.png" width="40px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../../index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#" class="active">Cadastrar Veiculo</a>
                  </li>
                 <!--  <li class="nav-item">
                    <a class="nav-link" href="alterar.php">Alterar Dados</a>
                  </li> -->
                 <!--  <li class="nav-item">
                    <a class="nav-link" href="excluir.php">Remover Veiculo</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pesquisar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#000;">
                      <li><a class="dropdown-item" href="#">Pesquisar Tudo</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Id</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Nome</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Sobrenome</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Email</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Gênero</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Escolaridade</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar pelo Profissão</a></li>
                    </ul>
                  </li> -->
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" >Pesquisar</button>
                </form>
              </div>
            </div>
          </nav>
        <!--fim navbar-->

        <!-- Container -->
        
        <div class="container">
            
            <div class="car">
            <form action="../controller/controller.php" method="POST" class="forms">
              <h3 style=" font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:35px;">Cadastro Veicular</h3>
                <hr/>
                <label>Modelo:</label>
                <br/>
                <input type="text" name="modelo" />
                <hr>
                <label>Fabricante:</label>
                <br/>
                <input type="text" name="fabricante" />
                <hr>
                <label>Cor:</label>
                <br/>
                <input type="text" name="cor" />
                <hr>
                <label>Placa:</label>
                <br/>
                <input type="text" name="placa" />
                <hr>
                <label>Ano:</label>
                <br/>
                <input type="text" name="ano" />
                </br>
                <br>
                <button type="submit">Cadastrar</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        
    </body>
</html>