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
        
        <!-- Bootstrap Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
      

        <link href="css/op.css" rel="stylesheet" type="text/css" media="all">

        


        <!-- Titulo da página -->
        
        <title>Formulario-PHP</title>
    </head>
    <body>

  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" 
        style="background-image: linear-gradient(to bottom,#000 ,#000,#20201d,#000,#000);
        border-bottom: 1px groove #0bb80e; border-top: 1px groove #0bb80e;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" class="active">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Alterar Dados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Excluir Cadastro</a>
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
                  </li>
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" >Pesquisar</button>
                </form>
              </div>
            </div>
          </nav>
        <!--fim navbar-->


            <!--JavaScript Bootstrap-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>