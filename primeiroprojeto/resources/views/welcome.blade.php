<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>
<body>
<h2>@yield('conteudo')</h2>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary pl-5 pr-5">
    <div class="container-fluid">
        <a href="#">
            <img src="images/logo2.png" alt="logo" width="140" height="140"/>
        </a>
        <!--<a class="navbar-brand" href="#">Minha Loja</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Sobre nós</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item disabled" href="#">Masculino</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Camisas</a></li>
                        <li><a class="dropdown-item" href="#">Camisetas</a></li>
                        <li><a class="dropdown-item" href="#">Bermudas</a></li>
                        <li><a class="dropdown-item" href="#">Calças</a></li>
                        <li><a class="dropdown-item" href="#">Sapatos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item disabled" href="#">Feminino</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Blusas</a></li>
                        <li><a class="dropdown-item" href="#">Calças</a></li>
                        <li><a class="dropdown-item" href="#">Calçados</a></li>
                        <li><a class="dropdown-item" href="#">Acessórios</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <i class="fa fa-shopping"></i> -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
</nav>

<section class="bg-dark p-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-secondary text-light border-warning">
                    <img src="images/produto1.jpg" alt="produto1" class="card-img-top" width="300px" height="300px">
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <p class="card-text"> R$0,00</p>
                        <a href="#" class="btn btn-sm btn-warning justify-center">Adicionar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-secondary text-light border-warning">
                    <img src="images/produto2.jpg" alt="produto2" class="card-img-top" width="300px" height="300px">
                    <div class="card-body">
                        <h6 class="card-title">Produto 2</h6>
                        <p class="card-text"> R$0,00</p>
                        <a href="#" class="btn btn-sm btn-warning justify-center">Adicionar</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 3</h6>
                        <p class="card-text"> R$0,00</p>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 4</h6>
                        <p class="card-text"> R$0,00</p>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
