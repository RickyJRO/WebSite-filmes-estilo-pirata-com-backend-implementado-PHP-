<?php include "server.php"
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.php" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>MyHollywoodList</title>
</head>
<body>

<div class="mynav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light  bg-transparent">
            <div class="titulosite  mr-4 text-warning" onclick="openPage('Home', this)" id="default">MyHollywoodList</div>
            <div class="collapse navbar-collapse " id="navbarSite" >
                <button class="tablink" onclick="openPage('Filmes', this)" >Filmes</button>
                <button class="tablink" onclick="openPage('Atores', this)" >Atores</button>
                <button class="tablink" onclick="openPage('Realizadores', this)">Realizadores</button>
                <button class="tablink" onclick="openPage('Estudios', this)">Estudios</button>
                <img class="logouniversal d-flex justify-content-center" src="Imagens/universal.png" alt="">
                <div id="semlogin">
                    <div  class=" ">
                        <div class="nav-item2 ">
                            <a id="login2" class="nav-link text-dark" data-toggle="modal" data-target="#loginForm" >Login</a>
                        </div>
                        <div class="botaoregistar">
                            <a id="register2" class="nav-link text-info" data-toggle="modal" data-target="#registerForm" >Registar</a>
                        </div>
                    </div>
                </div>
                <div id="comlogin" class="comlogin">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item4">
                            <a class="nav-link text-danger" HREF="backoffice.php"">Área reservada</a>
                        </li>
                        <li class="nav-item3">
                            <a class="nav-link text-warning" onclick="openPage('favoritos', this)">Favoritos</a>
                        </li>
                        <li class="nav-item3">
                            <a class="nav-link text-info" onclick="openPage('perfil', this)">Perfil</a>
                        </li>
                        <a class="nav-item3" href="logout.php" ><button id="botaologout" class="rounded">Logout</button></a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div id="favoritos" class="tabcontent">
    <ul class="nav nav-tabs justify-content-center text-white" id="myTabfav" role="tablist">
        <li class="nav-item ">
            <a class="nav-link active" id="filmes-tab" data-toggle="tab" href="#filmesfav" role="tab" aria-controls="filmes" aria-selected="true">Filmes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="atores-tab" data-toggle="tab" href="#atoresfav" role="tab" aria-controls="atores" aria-selected="false">Atores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="realizadores-tab" data-toggle="tab" href="#realizadoresfav" role="tab" aria-controls="realizadores" aria-selected="false">Realizadores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="estudios-tab" data-toggle="tab" href="#estudiosfav" role="tab" aria-controls="estudios" aria-selected="false">Estudios</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContentfav" style="min-height:800px">
        <div class="tab-pane fade show active" id="filmesfav" role="tabpanel" aria-labelledby="filmes-tab">
            <div class="espaçamentocards">
                <div id="favfilmes" class="row justify-content-center">
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="atoresfav" role="tabpanel" aria-labelledby="atores-tab" style="min-height:800px">
            <div  class="album py-5 bg-light">
                <div class="container">
                    <div id="favatores" class="row">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="realizadoresfav" role="tabpanel" aria-labelledby="realizadores-tab" style="min-height:800px">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div id="favrealizadores" class="row">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="estudiosfav" role="tabpanel" aria-labelledby="estudios-tab" style="min-height:800px">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div id="favestudios" class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbottom1">
        <div class="mt-5 pt-5 pb-5 footer ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>MyHolyWoodList llc</h2>
                        <p class="pr-5 text-white-50">© 2020 MyHolyWoodList LLC. MyHolyWoodList, AND ALL RELATED MARKS AND LOGOS ARE REGISTERED TRADEMARKS OR TRADEMARKS OF MyHolyWoodList LLC. ALL RIGHTS RESERVED. </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links1">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0 ">
                            <li >- <a class="text-info" href="index.php">Home</a></li>
                            <li>- <a class="text-info" href="#">Suporte</a></li>
                            <li>- <a class="text-info" href="#">Perguntas Frequentes</a></li>
                            <li>- <a class="text-info" href="#">FAQ</a></li>
                            <li>- <a class="text-info" href="#">Candidaturas</a></li>
                            <li>- <a class="text-info" href="backoffice.php">BackOffice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localização</h4>
                        <p>Rua do Intendente nº23 R/c dt</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+351) 917773323</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@MHLIST.com</p>
                        <div class="col-md-6">
                            <ul class="list-inline social-buttons ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="Home" class="tabcontent">
    <div class="colunas">
        <div class="bannerestreias"><p>ESTREIAS </p></div>
        <div class="bannernovembro"><p>NOVEMBRO</p></div>

        <div id="carouselSite" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1" ></li>
                <li data-target="#carouselSite" data-slide-to="2 "></li>
                <li data-target="#carouselSite" data-slide-to="3" ></li>
                <li data-target="#carouselSite" data-slide-to="4" ></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Imagens/Filmes/avengers.jpg" class="img-fluid d-block" alt="">
                    <div class="carousel-caption">
                        <h2>Avengers Ultimate Warfare</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Imagens/Filmes/starwars.png" class="img-fluid d-block" alt="">
                    <div class="carousel-caption">
                        <h2>Star Wars The New Republic</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Imagens/Filmes/borat-monster-children-1068x570.jpg" class="img-fluid d-block" alt="">
                    <div class="carousel-caption">
                        <h2>BORAAAAT</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Imagens/Filmes/kimi.jpg" class="img-fluid d-block" alt="">
                    <div class="carousel-caption">
                        <h2>Kimi No Nawa</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Imagens/Filmes/mini.jpg" class="img-fluid d-block" alt="">
                    <div class="carousel-caption">
                        <h2>MotoGP for Newbies</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="tituloDestaque">
        <p>DESTAQUES</p>
    </div>
    <div class="espaçamentocards">
        <div class="row justify-content-center">
            <div id="starwars1" class="card movie_card">
                <img src="https://lumiere-a.akamaihd.net/v1/images/star-wars-the-rise-of-skywalker-theatrical-poster-1000_ebc74357.jpeg?region=0%2C0%2C891%2C1372" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://www.youtube.com/watch?v=8Qn_spdM5Zg" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark text-dark"></i></button></a>
                    <div class="btn-group float-right ">
                        <button id="botaostarwars1" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('starwars1','botaostarwars1','iconestarwars1')"><i id="iconestarwars1" class="fas fa-heart text-danger text-danger "></i></button>
                    </div>
                    <h5 class="card-title">Star Wars the Rise of Skywalker</h5>
                    <p>2h</p>
                    <span class="movie_info">2019</span>
                    <span class="movie_info float-right"><i class="fas fa-star text-warning text-warning"></i> 9 / 10</span>
                </div>
            </div>

            <div id="lionking1" class="card movie_card">
                <img src="https://images-na.ssl-images-amazon.com/images/I/91kXw97IUBL._AC_SL1500_.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://www.youtube.com/watch?v=7TavVZMewpY" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark text-dark"></i></button></a>
                    <div class="btn-group float-right">
                        <button id="botaolionking1" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('lionking1','botaolionking1','iconelionking1')"><i id="iconelionking1" class="fas fa-heart text-danger text-danger"></i></button>
                    </div>
                    <h5 class="card-title">The Lion King</h5>
                    <p>1h10min</p>
                    <span class="movie_info">2018</span>
                    <span class="movie_info float-right"><i class="fas fa-star text-warning text-warning"></i> 10 / 10</span>
                </div>
            </div>

            <div id="lotr1" class="card movie_card">
                <img src="https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://www.youtube.com/watch?v=V75dMMIW2B4" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark text-dark"></i></button></a>
                    <div class="btn-group float-right">
                        <button id="botaolotr1" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('lotr1','botaolotr1','iconelotr1')"><i id="iconelotr1" class="fas fa-heart text-danger text-danger"></i></button>
                    </div>
                    <h5 class="card-title">The Lord of The Rings</h5>
                    <p>3h</p>
                    <span class="movie_info">2000</span>
                    <span class="movie_info float-right"><i class="fas fa-star text-warning text-warning"></i> 10 / 10</span>
                </div>
            </div>

            <div id="19171" class="card movie_card">
                <img src="https://mb.web.sapo.io/d222dd0c9e570785f1414129aea8ff4700f3b727.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://www.youtube.com/watch?v=YqNYrYUiMfg" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark text-dark"></i></button></a>
                    <div class="btn-group float-right">
                        <button id="botao19171" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('19171','botao19171','icone19171')"><i id="icone19171" class="fas fa-heart text-danger text-danger"></i></button>
                    </div>
                    <h5 class="card-title">1917</h5>
                    <p>1h30min</p>
                    <span class="movie_info">2020</span>
                    <span class="movie_info float-right"><i class="fas fa-star text-warning text-warning"></i> 9 / 10</span>
                </div>
            </div>

            <div id="alita1" class="card movie_card">
                <img src="https://www.joblo.com/assets/images/joblo/posters/2019/01/Alita-character-poster-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://www.youtube.com/watch?v=w7pYhpJaJW8" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark text-dark"></i></button></a>
                    <div class="btn-group float-right">
                        <button id="botaoalita1" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('alita1','botaoalita1','iconealita1')"><i id="iconealita1" class="fas fa-heart text-danger text-danger"></i></button>
                    </div>
                    <h5 class="card-title">Alita: Battle Angel</h5>
                    <p>2h</p>
                    <span class="movie_info">2019</span>
                    <span class="movie_info float-right"><i class="fas fa-star text-warning text-warning"></i> 5 / 10</span>
                </div>
            </div>


        </div>
    </div>
    <div class="noticias">
        <div class="titulonoticias">
            <p>NOTICIAS</p>
        </div>
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="newscard">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#">Sean Connery RIP</a>
                                </h3>
                                <div class="mb-1 text-muted">Nov 01</div>
                                <p class="card-text mb-auto">Sean Connery encontrado morto no seu quarto de hotel na presença de mais duas prostitutas e 2 quilos de cocaína.</p>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="https://www.usmagazine.com/wp-content/uploads/2020/10/Sean-Connery-Dead-James-Bond-Actor-Dies-at-90.jpg?w=700&quality=86&strip=all" data-holder-rendered="true">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newscard">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#">Super-Homem é Gay</a>
                                </h3>
                                <div class="mb-1 text-muted">Nov 02</div>
                                <p class="card-text mb-auto">Henry Cavill confirmou na conferência da multicor que a sua orientação sexual é na verdade para o lado gay.</p>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/jpeg;base64,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" data-holder-rendered="true" style="width: 200px; height: 250px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Brad Pitt é um Alien</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 04</div>
                            <p class="card-text mb-auto">Fontes confirmam juntamente com a INTERPOL que Brad Pitt é na verdade um ser de um mundo desconhecido.</p>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="https://www.refinery29.com/images/9381032.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Chegada de Lana</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">Lana Rhoades vai finalmente brilhar no mundo Hollywood para o filme "Uma mãe sozinha em casa".</p>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="https://starsunfolded.com/wp-content/uploads/2020/09/Lana-Rhoades.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <h1 class="tituloDestaque">Sobre nós</h1>
        <p class="textosobre">Somos o melhor grupo da turma de Engenharia Informática na Universidade Autónoma de Lisboa.</p>
    </div>

    <h2 style="text-align:center" class="tituloDestaque mt-5">A nossa equipa</h2>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div id="ricky" class="col-md-4">
                    <div class="card  mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 420px; width: 100%; display: block;" src="Imagens/Filmes/ricky.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Ricardo Oliveira</p>
                            <p class="title">CEO & Founder</p>
                            <p class="infoatores">Nasceu a 4 de Abril de 1998 (22 anos)</p>
                            <p class="infoatores">Altura: 1,84 m</p>
                            <button class="botaocontacto">Contacto</button>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="rocha" class="col-md-4">
                    <div class="card  mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 420px; width: 100%; display: block;" src="Imagens/Filmes/rocha.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Rafael Rocha</p>
                            <p class="title">Art Director</p>
                            <p class="infoatores">Nasceu a 11 de Setembro de 1998 (22 anos)</p>
                            <p class="infoatores">Altura: 1,86 m</p>
                            <button class="botaocontacto">Contacto</button>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="david" class="col-md-4">
                    <div class="card  mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 420px; width: 100%; display: block;" src="Imagens/Filmes/david.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">David Oliveira</p>
                            <p class="title">Designer</p>
                            <p class="infoatores">Nasceu a 19 de Abril de 1997 (23 anos)</p>
                            <p class="infoatores">Altura: 1,74 m</p>
                            <button class="botaocontacto">Contacto</button>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbottom">
        <div class="mt-5 pt-5 pb-5 footer ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>MyHolyWoodList llc</h2>
                        <p class="pr-5 text-white-50">© 2020 MyHolyWoodList LLC. MyHolyWoodList, AND ALL RELATED MARKS AND LOGOS ARE REGISTERED TRADEMARKS OR TRADEMARKS OF MyHolyWoodList LLC. ALL RIGHTS RESERVED. </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links1">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0 ">
                            <li >- <a class="text-info" href="index.php">Home</a></li>
                            <li>- <a class="text-info" href="#">Suporte</a></li>
                            <li>- <a class="text-info" href="#">Perguntas Frequentes</a></li>
                            <li>- <a class="text-info" href="#">FAQ</a></li>
                            <li>- <a class="text-info" href="#">Candidaturas</a></li>
                            <li>- <a class="text-info" href="backoffice.php">BackOffice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localização</h4>
                        <p>Rua do Intendente nº23 R/c dt</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+351) 917773323</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@MHLIST.com</p>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="361" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=universidade%20autonoma%20de%20lisboa&t=k&z=15&ie=UTF8&iwloc=&output=embed" ></iframe><a href="https://123movies-en.org">123 movies</a></div></div>
                        <div class="col-md-6">
                            <ul class="list-inline social-buttons ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="Filmes" class="tabcontent">
    <div class="categorias">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <div class="nav-link active" id="ação-tab" data-toggle="tab" href="#ação" role="tab" aria-controls="ação" aria-selected="true">Ação</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="animação-tab" data-toggle="tab" href="#animação" role="tab" aria-controls="animação" aria-selected="false">Animação</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="animes-tab" data-toggle="tab" href="#animes" role="tab" aria-controls="animes" aria-selected="false">Animes</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="aventura-tab" data-toggle="tab" href="#aventura" role="tab" aria-controls="aventura" aria-selected="false">Aventura</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="comédia-tab" data-toggle="tab" href="#comédia" role="tab" aria-controls="comédia" aria-selected="false">Comédia</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="drama-tab" data-toggle="tab" href="#drama" role="tab" aria-controls="drama" aria-selected="false">Drama</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="guerra-tab" data-toggle="tab" href="#guerra" role="tab" aria-controls="guerra" aria-selected="false">Guerra</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="terror-tab" data-toggle="tab" href="#terror" role="tab" aria-controls="terror" aria-selected="false">Terror</div>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ação" role="tabpanel" aria-labelledby="ação-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">
                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Ação'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                        ?>
                        <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                            <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                            <div class="card-body" >
                                <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                <div class="btn-group float-right">
                                    <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                </div>
                                <p></p>
                                <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                <div>
                                    <p><?php echo $dados['nomefilme']?></p>
                                    <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                    <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="animação" role="tabpanel" aria-labelledby="animação-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">

                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Animação'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>


                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="animes" role="tabpanel" aria-labelledby="animes-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">

                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Animes'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="aventura" role="tabpanel" aria-labelledby="aventura-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">
                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Aventura'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="comédia" role="tabpanel" aria-labelledby="comédia-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">
                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Comédia'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="drama" role="tabpanel" aria-labelledby="drama-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">
                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Drama'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="guerra" role="tabpanel" aria-labelledby="guerra-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">
                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Guerra'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>


                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="terror" role="tabpanel" aria-labelledby="terror-tab">
                <div class="espaçamentocards">
                    <div class="row justify-content-center">
                        <?php
                        $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes WHERE genero='Terror'";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <div id="id<?php echo $dados['nomefilme']?>" class="card movie_card">
                                <img src="<?php echo $dados['imagemfilme']?>" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <a href="<?php echo $dados['trailer']?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-play text-dark"></i></button></a>
                                    <div class="btn-group float-right">
                                        <button id="botao<?php echo $dados['nomefilme']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavfilme('id<?php echo $dados['nomefilme']?>','botao<?php echo $dados['nomefilme']?>','icone<?php echo $dados['nomefilme']?>')"><i id="icone<?php echo $dados['nomefilme']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                    <p></p>
                                    <h5 class="card-title"><?php echo $dados['nomefilme']?></h5>
                                    <div>
                                        <p><?php echo $dados['nomefilme']?></p>
                                        <span class="movie_info"><?php echo $dados['anolancamento']?></span>
                                        <span class="movie_info float-right"><i class="fas fa-star text-warning"></i> <?php echo $dados['rating']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbottom">
        <div class="mt-5 pt-5 pb-5 footer ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>MyHolyWoodList llc</h2>
                        <p class="pr-5 text-white-50">© 2020 MyHolyWoodList LLC. MyHolyWoodList, AND ALL RELATED MARKS AND LOGOS ARE REGISTERED TRADEMARKS OR TRADEMARKS OF MyHolyWoodList LLC. ALL RIGHTS RESERVED. </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links1">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0 ">
                            <li>- <a class="text-info" href="#">Home</a></li>
                            <li>- <a class="text-info" href="#">Perguntas Frequentes</a></li>
                            <li>- <a class="text-info" href="#">LOLOLO</a></li>
                            <li>- <a class="text-info" href="#">FAQ</a></li>
                            <li>- <a class="text-info" href="#">Candidaturas</a></li>
                            <li>- <a class="text-info" href="backoffice.php">BackOffice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localização</h4>
                        <p>Rua do Intendente nº23 R/c dt</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+351) 917773323</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@MHLIST.com</p>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="361" height="300"  src="https://maps.google.com/maps?q=universidade%20autonoma%20de%20lisboa&t=k&z=15&ie=UTF8&iwloc=&output=embed"></iframe><a href="https://123movies-en.org">123 movies</a></div></div>
                        <div class="col-md-6">
                            <ul class="list-inline social-buttons ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="Atores" class="tabcontent">
    <div class="TituloAtores">
        <nav class="navbar navbar-light justify-content-center text-white">
            <div class="tituloatores1">
                <p>Atores</p>
            </div>
        </nav>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                $sql = "SELECT * FROM atores";
                $resultado = mysqli_query($db,$sql);
                while ($dados = mysqli_fetch_array($resultado)):
                ?>
                <div id="id<?php echo $dados['nomeator']?>" class="col-md-4">
                    <div class="card  mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo $dados['imagemator']?>" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text"><?php echo $dados['nomeator']?></p>
                            <p class="infoatores">Nasceu a <?php echo $dados['datanascimento']?></p>
                            <p class="infoatores"><?php echo $dados['altura']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button id="botao<?php echo $dados['nomeator']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavator('id<?php echo $dados['nomeator']?>','botao<?php echo $dados['nomeator']?>','icone<?php echo $dados['nomeator']?>')"><i id="icone<?php echo $dados['nomeator']?>" class="fas fa-heart text-danger "></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="navbottom">
        <div class="mt-5 pt-5 pb-5 footer ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>MyHolyWoodList llc</h2>
                        <p class="pr-5 text-white-50">© 2020 MyHolyWoodList LLC. MyHolyWoodList, AND ALL RELATED MARKS AND LOGOS ARE REGISTERED TRADEMARKS OR TRADEMARKS OF MyHolyWoodList LLC. ALL RIGHTS RESERVED. </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links1">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0 ">
                            <li >- <a class="text-info" href="index.php">Home</a></li>
                            <li>- <a class="text-info" href="#">Suporte</a></li>
                            <li>- <a class="text-info" href="#">Perguntas Frequentes</a></li>
                            <li>- <a class="text-info" href="#">FAQ</a></li>
                            <li>- <a class="text-info" href="#">Candidaturas</a></li>
                            <li>- <a class="text-info" href="#">Equipa</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localização</h4>
                        <p>Rua do Intendente nº23 R/c dt</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+351) 917773323</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@MHLIST.com</p>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="361" height="300"  src="https://maps.google.com/maps?q=universidade%20autonoma%20de%20lisboa&t=k&z=15&ie=UTF8&iwloc=&output=embed" ></iframe><a href="https://123movies-en.org">123 movies</a></div></div>
                        <div class="col-md-6">
                            <ul class="list-inline social-buttons ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="Realizadores" class="tabcontent">
    <div class="TituloRealizadores">
        <nav class="navbar navbar-light justify-content-center text-white ">
            <div class="tituloatores1">
                <p>Realizadores</p>
            </div>
        </nav>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                $sql = "SELECT * FROM realizadores";
                $resultado = mysqli_query($db,$sql);
                while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <div id="id<?php echo $dados['nomerealizador']?>" class="col-md-4">
                        <div class="card  mb-4 box-shadow">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo $dados['imagemrealizador']?>" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text"><?php echo $dados['nomerealizador']?></p>
                                <p class="infoatores">Nasceu a <?php echo $dados['datanascimento']?></p>
                                <p class="infoatores"><?php echo $dados['altura']?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button id="botao<?php echo $dados['nomerealizador']?>" type="button" class="btn btn-sm btn-outline-secondary " onclick="adicionarfavrealizador('id<?php echo $dados['nomerealizador']?>','botao<?php echo $dados['nomerealizador']?>','icone<?php echo $dados['nomerealizador']?>')"><i id="icone<?php echo $dados['nomerealizador']?>" class="fas fa-heart text-danger "></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="navbottom">
        <div class="mt-5 pt-5 pb-5 footer ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>MyHolyWoodList llc</h2>
                        <p class="pr-5 text-white-50">© 2020 MyHolyWoodList LLC. MyHolyWoodList, AND ALL RELATED MARKS AND LOGOS ARE REGISTERED TRADEMARKS OR TRADEMARKS OF MyHolyWoodList LLC. ALL RIGHTS RESERVED. </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links1">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0 ">
                            <li >- <a class="text-info" href="index.php">Home</a></li>
                            <li>- <a class="text-info" href="#">Suporte</a></li>
                            <li>- <a class="text-info" href="#">Perguntas Frequentes</a></li>
                            <li>- <a class="text-info" href="#">FAQ</a></li>
                            <li>- <a class="text-info" href="#">Candidaturas</a></li>
                            <li>- <a class="text-info" href="#">Equipa</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localização</h4>
                        <p>Rua do Intendente nº23 R/c dt</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+351) 917773323</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@MHLIST.com</p>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="361" height="300"  src="https://maps.google.com/maps?q=universidade%20autonoma%20de%20lisboa&t=k&z=15&ie=UTF8&iwloc=&output=embed" ></iframe><a href="https://123movies-en.org">123 movies</a></div></div>
                        <div class="col-md-6">
                            <ul class="list-inline social-buttons ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="Estudios" class="tabcontent">
    <div class="TituloEstudios">
        <nav class="navbar navbar-light justify-content-center text-white ">
            <div class="tituloatores1">
                <p>Estudios</p>
            </div>
        </nav>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                $sql = "SELECT * FROM estudios";
                $resultado = mysqli_query($db,$sql);
                while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <div id="id<?php echo $dados['nomeestudio']?>" class="col-md-4">
                        <div class="card  mb-4 box-shadow">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo $dados['imagemestudio']?>" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text"><?php echo $dados['nomeestudio']?></p>
                                <p class="infoestudio"><?php echo $dados['descricao']?></p>
                                <div class="btn-group">
                                    <button id="botao<?php echo $dados['nomeestudio']?>" type="button" class="btn btn-sm btn-outline-secondary" onclick="adicionarfavestudio('id<?php echo $dados['nomeestudio']?>','botao<?php echo $dados['nomeestudio']?>','icone<?php echo $dados['nomeestudio']?>')"><i id="icone<?php echo $dados['nomeestudio']?>" class="fas fa-heart text-danger"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
    <div class="navbottom">
        <div class="mt-5 pt-5 pb-5 footer ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>MyHolyWoodList llc</h2>
                        <p class="pr-5 text-white-50">© 2020 MyHolyWoodList LLC. MyHolyWoodList, AND ALL RELATED MARKS AND LOGOS ARE REGISTERED TRADEMARKS OR TRADEMARKS OF MyHolyWoodList LLC. ALL RIGHTS RESERVED. </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links1">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0 ">
                            <li >- <a class="text-info" href="index.php">Home</a></li>
                            <li>- <a class="text-info" href="#">Suporte</a></li>
                            <li>- <a class="text-info" href="#">Perguntas Frequentes</a></li>
                            <li>- <a class="text-info" href="#">FAQ</a></li>
                            <li>- <a class="text-info" href="#">Candidaturas</a></li>
                            <li>- <a class="text-info" href="backoffice.php">BackOffice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localização</h4>
                        <p>Rua do Intendente nº23 R/c dt</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+351) 917773323</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@MHLIST.com</p>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="361" height="300"  src="https://maps.google.com/maps?q=universidade%20autonoma%20de%20lisboa&t=k&z=15&ie=UTF8&iwloc=&output=embed"></iframe><a href="https://123movies-en.org">123 movies</a></div></div>
                        <div class="col-md-6">
                            <ul class="list-inline social-buttons ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="perfil" class="tabcontent">

    <div class="container bootstrap snippets">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h4 class="panel-title mt-5">Info do Utilizador</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Localização</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option selected="">Selecione o País</option>
                                    <option>Portugal</option>
                                    <option>Brasil</option>
                                    <option>Espanha</option>
                                    <option>China</option>
                                    <option>França</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Contacto</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nrº de serviço</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nrº telemóvel</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Morada de Serviço</label>
                            <div class="col-sm-10">
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Segurança</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password presente</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nova password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_1">
                                    <label for="checkbox_1">Tornar esta conta publica</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                                <button type="reset" class="btn btn-default">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content card card-image " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="Login1"><strong>LOG IN</strong> <a
                            class=" font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login" method="POST" action="index.php">
                        <div class="md-form mb-5">
                            <input type="text" id="username1" class="form-control validate white-text" name="username1" required>
                            <label data-error="wrong" data-success="right" for="username1">Username</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="password1" class="form-control validate white-text" name="password1" required>
                            <label data-error="wrong" data-success="right" for="password1">Password</label>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="log_user" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">LogIn</button>
                            </div>
                            <div class="text-center mb-3">
                                <p>Não tem conta? <a class="text-warning" data-toggle="modal" data-target="#registerForm" href="#">Registe-se</a> </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card card-image " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Registo</strong> <a
                            class="font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose1" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="index.php" id="registo">
                        <div class="md-form mb-5">
                            <input type="text" id="username" class="form-control validate white-text" name="username" required>
                            <label data-error="wrong" data-success="right" for="username">Username</label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="email" id="email" class="form-control validate white-text" name="email" required>
                            <label data-error="wrong" data-success="right" for="email">Email</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="password" id="password" class="form-control validate white-text" name="password" required>
                            <label data-error="wrong" data-success="right" for="password">Password</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="password" id="password2" class="form-control validate white-text" name="password2" required>
                            <label data-error="wrong" data-success="right" for="password2">Re-type Password</label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="reg_user" id="submitregister" type="submit" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Registar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="myjs.js"></script>
<script>
    function openPage(pageName) {
        let i, tabcontent;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        document.getElementById(pageName).style.display = "block";
    }
    document.getElementById("default").click();

</script>
</body>
</html>