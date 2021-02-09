<?php include "server.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="backofficestyle.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>MyHollywoodList BackOffice</title>
</head>
<body>

<form method="POST" class="form-signin" action="backoffice.php">
    <div class="text-center mb-4">
        <img class="mb-4" src="https://vignette.wikia.nocookie.net/mako-movies/images/1/12/Universal_Studios_Hollywood_Logo_%282016%29.png/revision/latest?cb=20180529201535" >
        <h1 class="h2 mb-5 font-weight-bold text-dark p-2">BackOffice</h1>
    </div>
    <div class="form-label-group w-25 mx-auto mb-4">
        <label for="username3 ">Username</label><input id="username3 " name="username3" type="text" class="form-control">
    </div>

    <div class="form-label-group w-25 mx-auto mb-5">
        <label for="password3">Password</label><input id="password3" name="password3" type="password" class="form-control">
    </div>
    <button name='log_user2' class="btn btn-lg btn-warning btn-block w-25 mx-auto text-white font-weight-bold " type="submit" id="submit">Sign in</button>
<a href="index.php" style="left: 44%; position: relative;">Regressar ao MyHollywodList</a>
</form>

<div id="mynav" class="mynav ">
    <h1 class="titulobackoffice">BackOffice</h1>
    <ul class="lolitos nav justify-content-center">
        <li class="nav-item">
            <a class="tablink text-dark " onclick="openPage('filmes', this)" id="default">Filmes</a><i class="far fa-arrow-alt-circle-down"></i>
        </li>
        <li class="nav-item">
            <a class="tablink text-dark" onclick="openPage('atores', this)">Atores</a><i class="far fa-arrow-alt-circle-down"></i>
        </li>
        <li class="nav-item">
            <a class="tablink text-dark" onclick="openPage('realizadores', this)">Realizadores</a><i class="far fa-arrow-alt-circle-down"></i>
        </li>
        <li class="nav-item">
            <a class="tablink text-dark" onclick="openPage('estudios', this)">Estudios</a><i class="far fa-arrow-alt-circle-down"></i>
        </li>
        <button class="ml-3 "><a class="text-dark" href="logout.php">Logout</a></button>
    </ul>
    <div id="filmes" class="tabcontent">
        <div class="lolelos col-md-12 text-center">
            <button type="button" ><a  class="nav-link text-dark" data-toggle="modal" data-target="#addfilmes" >Adicionar</a></button>
        </div>
                    <div class=" justify-content-center mt-5">
                        <div class="container">
                            <?php
                            $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                            $sql = "SELECT * FROM filmes ";
                            $resultado = mysqli_query($db,$sql);
                            ?>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Género</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Ano Lançamento</th>
                                <th scope="col">Rating</th>

                            </tr>
                            </thead>
                            <?php
                            if($resultado){
                            foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['nomefilme']?></td>
                                <td><?php echo $dados['genero']?></td>
                                <td style="display: none"><?php echo $dados['trailer']?></td>
                                <td><?php echo $dados['duracao']?></td>
                                <td><?php echo $dados['anolancamento']?></td>
                                <td><?php echo $dados['rating']?></td>
                                <td style="display: none"><?php echo $dados['imagemfilme']?></td>
                                <td><button type="button" class="btn btn-sm btn-outline-secondary verfilme "><a class="fas fa-eye"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary editfilme "><a class="fas fa-pencil-alt"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary "><a class="far fa-trash-alt" href="server.php?removerfilmes=<?php echo $dados['nomefilme']; ?>"></a></button></td>
                            </tr>
                            </tbody>
                                <?php
                            }
                            }else{
                                echo "Erro";
                            }
                            ?>
                        </table>
                        </div>
        </div>
    </div>

    <div id="atores" class="tabcontent">

        <div class="lolelos col-md-12 text-center">
            <button type="button" ><a  class="nav-link text-dark" data-toggle="modal" data-target="#addator" >Adicionar</a></button>
        </div>
        <div class=" justify-content-center mt-5">
            <div class="container">
                <?php
                $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                $sql = "SELECT * FROM atores ";
                $resultado = mysqli_query($db,$sql);
                ?>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Funções</th>
                    </tr>
                    </thead>
                    <?php
                    if($resultado){
                        foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['nomeator']?></td>
                                <td style="display: none"><?php echo $dados['datanascimento']?></td>
                                <td style="display: none"><?php echo $dados['altura']?></td>
                                <td style="display: none"><?php echo $dados['imagemator']?></td>
                                <td><button type="button" class="btn btn-sm btn-outline-secondary verator"><a  class="fas fa-eye"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary editarator "><a class="fas fa-pencil-alt"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary "><a class="far fa-trash-alt"href="server.php?removerator=<?php echo $dados['nomeator']; ?>"></a></button></td>
                            </tr>
                            </tbody>
                            <?php
                        }
                    }else{
                        echo "Erro";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div id="realizadores" class="tabcontent">

        <div class="lolelos col-md-12 text-center">
            <button type="button" ><a  class="nav-link text-dark" data-toggle="modal" data-target="#addrealizador" >Adicionar</a></button>
        </div>
        <div class=" justify-content-center mt-5">
            <div class="container">
                <?php
                $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                $sql = "SELECT * FROM realizadores ";
                $resultado = mysqli_query($db,$sql);
                ?>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Funções</th>
                    </tr>
                    </thead>
                    <?php
                    if($resultado){
                        foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['nomerealizador']?></td>
                                <td style="display: none"><?php echo $dados['datanascimento']?></td>
                                <td style="display: none"><?php echo $dados['altura']?></td>
                                <td style="display: none"><?php echo $dados['imagemrealizador']?></td>
                                <td><button type="button" class="btn btn-sm btn-outline-secondary verrealizador"><a  class="fas fa-eye"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary editrealizador "><a class="fas fa-pencil-alt"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary removerrealizador"><a class="far fa-trash-alt" href="server.php?removerrealizador=<?php echo $dados['nomerealizador']; ?>"></a></button></td>
                            </tr>
                            </tbody>
                            <?php
                        }
                    }else{
                        echo "Erro";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div id="estudios" class="tabcontent">

        <div class="lolelos col-md-12 text-center">
            <button type="button" class=""><a  class="nav-link text-dark" data-toggle="modal" data-target="#addestudio" >Adicionar</a></button>
        </div>
        <div class=" justify-content-center mt-5">
            <div class="container">
                <?php
                $db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');
                $sql = "SELECT * FROM estudios ";
                $resultado = mysqli_query($db,$sql);
                ?>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Funções</th>
                    </tr>
                    </thead>
                    <?php
                    if($resultado){
                        foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['nomeestudio']?></td>
                                <td style="display: none"><?php echo $dados['descricao']?></td>
                                <td style="display: none"><?php echo $dados['imagemestudio']?></td>
                                <td><button type="button" class="btn btn-sm btn-outline-secondary verestudio"><a  class="fas fa-eye"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary editestudio "><a class="fas fa-pencil-alt"></a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary "><a class="far fa-trash-alt" href="server.php?removerestudio=<?php echo $dados['nomeestudio']; ?>"></a></button>
                                </td>
                            </tr>
                            </tbody>
                            <?php
                        }
                    }else{
                        echo "Erro";
                    }
                    ?>
                </table>
            </div>
        </div>
</div>


<div class="modal fade" id="addfilmes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false">
    <div class="modal-dialog bg-light" role="document">
        <div class="modal-content card card-image bg-light " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Filme</strong> <a
                                class=" font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login" method="POST" action="backoffice.php">
                        <div class="md-form mb-5">
                            <input type="text" id="nomefilme" class="form-control validate text-dark" name="nomefilme" required>
                            <label data-error="wrong" data-success="right" for="nomefilme" class="text-dark">Nome </label>
                        </div>
                        <div class="md-form mb-5">
                            <select name="gender" class="form-control" id="sel1">
                                <option>Ação</option>
                                <option>Animação</option>
                                <option>Animes</option>
                                <option>Aventura</option>
                                <option>Comédia</option>
                                <option>Drama</option>
                                <option>Guerra</option>
                                <option>Terror</option>
                            </select>
                            <label for="sel1" class="text-dark">Genero</label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="trailer" class="form-control validate text-dark" name="trailer" >
                            <label data-error="wrong" data-success="right" for="trailer" class="text-dark">Trailer </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="duracao" class="form-control validate text-dark" name="duracao" required>
                            <label data-error="wrong" data-success="right" for="duracao" class="text-dark">Duração </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="datalancamento" class="form-control validate text-dark" name="datalancamento" required>
                            <label data-error="wrong" data-success="right" for="datalancamento" class="text-dark">Ano de Lançamento </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="number" id="rating" class="form-control validate text-dark" name="rating" required>
                            <label data-error="wrong" data-success="right" for="rating" class="text-dark">Rating </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="imagemfilme" class="form-control validate text-dark" name="imagemfilme" required>
                            <label data-error="wrong" data-success="right" for="imagemfilme" class="text-dark">URL da Imagem </label>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="adicionarfilme" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="editarfilmes" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Editar Filme</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="updatefilme" id="updatefilme">
                        <form class="login" method="POST" action="server.php">
                            <div class="md-form mb-5">
                                <input  id="nomefilme1" class="form-control validate text-dark" name="nomefilme1" readonly>
                                <label data-error="wrong" data-success="right" for="nomefilme" class="text-dark">Nome </label>
                            </div>
                            <div class="md-form mb-5">
                                <select name="genero1" class="form-control" id="genero1">
                                    <option>Ação</option>
                                    <option>Animação</option>
                                    <option>Animes</option>
                                    <option>Aventura</option>
                                    <option>Comédia</option>
                                    <option>Drama</option>
                                    <option>Guerra</option>
                                    <option>Terror</option>
                                </select>
                                <label for="sel1" class="text-dark">Genero</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="trailer1" class="form-control validate text-dark" name="trailer1" >
                                <label data-error="wrong" data-success="right" for="trailer" class="text-dark">Trailer </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="duracao1" class="form-control validate text-dark" name="duracao1"  required>
                                <label data-error="wrong" data-success="right" for="duracao" class="text-dark">Duração </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="datalancamento1" class="form-control validate text-dark" name="datalancamento1"  required>
                                <label data-error="wrong" data-success="right" for="datalancamento" class="text-dark">Ano de Lançamento </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="number" id="rating1" class="form-control validate text-dark" name="rating1"  required>
                                <label data-error="wrong" data-success="right" for="rating" class="text-dark">Rating </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="imagemfilme1" class="form-control validate text-dark" name="imagemfilme1" required>
                                <label data-error="wrong" data-success="right" for="imagemfilme" class="text-dark">URL da Imagem </label>
                            </div>

                            <div class="row d-flex align-items-center mb-4">
                                <div class="text-center mb-3 col-md-12">
                                    <button name="editarfilme" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Concluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="verfilmes" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Filme</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="server.php">
                            <div class="md-form mb-5">
                                <input  id="nomefilme3" class="form-control validate text-dark" name="nomefilme3" readonly>
                                <label data-error="wrong" data-success="right" for="nomefilme" class="text-dark">Nome </label>
                            </div>
                            <div class="md-form mb-5" aria-readonly="true">
                                <select name="genero3" class="form-control" id="genero3" readonly>
                                    <option readonly>Ação</option>
                                    <option readonly>Animação</option>
                                    <option readonly>Animes</option>
                                    <option readonly>Aventura</option>
                                    <option readonly>Comédia</option>
                                    <option readonly>Drama</option>
                                    <option readonly>Guerra</option>
                                    <option readonly>Terror</option>
                                </select>
                                <label for="sel1" class="text-dark">Genero</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="trailer3" class="form-control validate text-dark" name="trailer3" readonly>
                                <label data-error="wrong" data-success="right" for="trailer" class="text-dark">Trailer </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="duracao3" class="form-control validate text-dark" name="duracao3"  readonly>
                                <label data-error="wrong" data-success="right" for="duracao" class="text-dark">Duração </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="datalancamento3" class="form-control validate text-dark" name="datalancamento3"  readonly>
                                <label data-error="wrong" data-success="right" for="datalancamento" class="text-dark">Ano de Lançamento </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="number" id="rating3" class="form-control validate text-dark" name="rating3"  readonly>
                                <label data-error="wrong" data-success="right" for="rating" class="text-dark">Rating </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="imagemfilme3" class="form-control validate text-dark" name="imagemfilme3" readonly>
                                <label data-error="wrong" data-success="right" for="imagemfilme" class="text-dark">URL da Imagem </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="addator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false">
    <div class="modal-dialog bg-light" role="document">
        <div class="modal-content card card-image bg-light " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Ator</strong> <a
                                class=" font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login" method="POST" action="backoffice.php">
                        <div class="md-form mb-5">
                            <input type="text" id="nomeator" class="form-control validate text-dark" name="nomeator" required>
                            <label data-error="wrong" data-success="right" for="nomeator" class="text-dark">Nome do Ator </label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="datanascimento" class="form-control validate text-dark" name="datanascimento" required>
                            <label data-error="wrong" data-success="right" for="datanascimento" class="text-dark">Data de Nascimento </label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="altura" class="form-control validate text-dark" name="altura" required>
                            <label data-error="wrong" data-success="right" for="altura" class="text-dark">Altura </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="imagemator" class="form-control validate text-dark" name="imagemator" required>
                            <label data-error="wrong" data-success="right" for="imagemator" class="text-dark">URL da Imagem </label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="adicionarator" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="editarator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Editar Ator</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="server.php">
                            <div class="md-form mb-5">
                                <input type="text" id="nomeator1" class="form-control validate text-dark" name="nomeator1" readonly>
                                <label data-error="wrong" data-success="right" for="nomeator" class="text-dark">Nome do Ator </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="datanascimento1" class="form-control validate text-dark" name="datanascimento1" required>
                                <label data-error="wrong" data-success="right" for="datanascimento" class="text-dark">Data de Nascimento </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="altura1" class="form-control validate text-dark" name="altura1" required>
                                <label data-error="wrong" data-success="right" for="altura" class="text-dark">Altura </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="imagemator1" class="form-control validate text-dark" name="imagemator1" required>
                                <label data-error="wrong" data-success="right" for="imagemator" class="text-dark">URL da Imagem </label>
                            </div>
                            <div class="row d-flex align-items-center mb-4">
                                <div class="text-center mb-3 col-md-12">
                                    <button name="editarator" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Concluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="verarator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Ator</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="server.php">
                            <div class="md-form mb-5">
                                <input type="text" id="nomeator3" class="form-control validate text-dark" name="nomeator3" readonly>
                                <label data-error="wrong" data-success="right" for="nomeator" class="text-dark">Nome do Ator </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="datanascimento3" class="form-control validate text-dark" name="datanascimento3" readonly>
                                <label data-error="wrong" data-success="right" for="datanascimento" class="text-dark">Data de Nascimento </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="altura3" class="form-control validate text-dark" name="altura3" readonly>
                                <label data-error="wrong" data-success="right" for="altura" class="text-dark">Altura </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="imagemator3" class="form-control validate text-dark" name="imagemator3" readonly>
                                <label data-error="wrong" data-success="right" for="imagemator" class="text-dark">URL da Imagem </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="addrealizador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false">
    <div class="modal-dialog bg-light" role="document">
        <div class="modal-content card card-image bg-light " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Realizador</strong> <a
                                class=" font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login" method="POST" action="backoffice.php">
                        <div class="md-form mb-5">
                            <input type="text" id="nomerealizador" class="form-control validate text-dark" name="nomerealizador" required>
                            <label data-error="wrong" data-success="right" for="nomerealizador" class="text-dark">Nome do Realizador </label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="datanascimento" class="form-control validate text-dark" name="datanascimento" >
                            <label data-error="wrong" data-success="right" for="trailer" class="text-dark">Data de Nascimento </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="altura" class="form-control validate text-dark" name="altura" required>
                            <label data-error="wrong" data-success="right" for="altura" class="text-dark">Altura </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="imagemrealizador" class="form-control validate text-dark" name="imagemrealizador" required>
                            <label data-error="wrong" data-success="right" for="imagemrealizador" class="text-dark">URL da Imagem </label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="adicionarrealizador" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="editarrealizador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Editar Realizador</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="backoffice.php">
                            <div class="md-form mb-5">
                                <input type="text" id="nomerealizador1" class="form-control validate text-dark" name="nomerealizador1" readonly>
                                <label data-error="wrong" data-success="right" for="nomerealizador" class="text-dark">Nome do Realizador </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="datanascimento3" class="form-control validate text-dark" name="datanascimento3" >
                                <label data-error="wrong" data-success="right" for="trailer" class="text-dark">Data de Nascimento </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="altura3" class="form-control validate text-dark" name="altura3" required>
                                <label data-error="wrong" data-success="right" for="altura" class="text-dark">Altura </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="imagemrealizador1" class="form-control validate text-dark" name="imagemrealizador1" required>
                                <label data-error="wrong" data-success="right" for="imagemrealizador" class="text-dark">URL da Imagem </label>
                            </div>
                            <div class="row d-flex align-items-center mb-4">
                                <div class="text-center mb-3 col-md-12">
                                    <button name="editarrealizador" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Concluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="verrealizador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Realizador</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="backoffice.php">
                            <div class="md-form mb-5">
                                <input type="text" id="nomerealizador4" class="form-control validate text-dark" name="nomerealizador4" readonly>
                                <label data-error="wrong" data-success="right" for="nomerealizador" class="text-dark">Nome do Realizador </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="datanascimento4" class="form-control validate text-dark" name="datanascimento4" readonly>
                                <label data-error="wrong" data-success="right" for="trailer" class="text-dark">Data de Nascimento </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="altura4" class="form-control validate text-dark" name="altura4" readonly>
                                <label data-error="wrong" data-success="right" for="altura" class="text-dark">Altura </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="imagemrealizador4" class="form-control validate text-dark" name="imagemrealizador4" readonly>
                                <label data-error="wrong" data-success="right" for="imagemrealizador" class="text-dark">URL da Imagem </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="addestudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false">
    <div class="modal-dialog bg-light" role="document">
        <div class="modal-content card card-image bg-light " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Estudio</strong> <a
                                class=" font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login" method="POST" action="backoffice.php">
                        <div class="md-form mb-5">
                            <input type="text" id="nomeestudio" class="form-control validate text-dark" name="nomeestudio" required>
                            <label data-error="wrong" data-success="right" for="nomefilme" class="text-dark">Nome do Estudio </label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" id="descricao" class="form-control validate text-dark" name="descricao" required>
                            <label data-error="wrong" data-success="right" for="descricao" class="text-dark">Descrição </label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="imagemestudio" class="form-control validate text-dark" name="imagemestudio" required>
                            <label data-error="wrong" data-success="right" for="imagemestudio" class="text-dark">URL da Imagem </label>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="adicionarestudio" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="editarestudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Editar Estudio</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="backoffice.php">
                            <div class="md-form mb-5">
                                <input type="text" id="nomeestudio1" class="form-control validate text-dark" name="nomeestudio1" readonly>
                                <label data-error="wrong" data-success="right" for="nomefilme" class="text-dark">Nome do Estudio </label>
                            </div>
                            <div class="md-form mb-5">
                                <textarea  id="descricao1"rows="4" cols="50" class="form-control validate text-dark" name="descricao1" required>
                                </textarea>
                                <label data-error="wrong" data-success="right" for="descricao" class="text-dark">Descrição </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="imagemestudio1" class="form-control validate text-dark" name="imagemestudio1" required>
                                <label data-error="wrong" data-success="right" for="imagemestudio" class="text-dark">URL da Imagem </label>
                            </div>

                            <div class="row d-flex align-items-center mb-4">
                                <div class="text-center mb-3 col-md-12">
                                    <button name="editarestudio" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Concluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="verestudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content card card-image bg-light " >
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Estudio</strong> <a
                                    class=" font-weight-bold"><strong></strong></a></h3>
                        <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login" method="POST" action="backoffice.php">
                            <div class="md-form mb-5">
                                <input type="text" id="nomeestudio2" class="form-control validate text-dark" name="nomeestudio2" readonly>
                                <label data-error="wrong" data-success="right" for="nomefilme" class="text-dark">Nome do Estudio </label>
                            </div>
                            <div class="md-form mb-5">
                                <textarea  id="descricao2" rows="4" cols="50" class="form-control validate text-dark" name="descricao2" readonly>
                                </textarea>
                                <label data-error="wrong" data-success="right" for="descricao" class="text-dark">Descrição </label>
                            </div>

                            <div class="md-form mb-5">
                                <input type="text" id="imagemestudio2" class="form-control validate text-dark" name="imagemestudio2" readonly>
                                <label data-error="wrong" data-success="right" for="imagemestudio" class="text-dark">URL da Imagem </label>
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

    $(document).ready(function (){
        $('.editfilme').on('click', function (){

            $('#editarfilmes').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();


            $('#nomefilme1').val(data[0]);
            $('#genero1').val(data[1]);
            $('#trailer1').val(data[2]);
            $('#duracao1').val(data[3]);
            $('#datalancamento1').val(data[4]);
            $('#rating1').val(data[5]);
            $('#imagemfilme1').val(data[6]);
        });
    });
    $(document).ready(function (){
        $('.verfilme').on('click', function (){

            $('#verfilmes').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();


            $('#nomefilme3').val(data[0]);
            $('#genero3').val(data[1]);
            $('#trailer3').val(data[2]);
            $('#duracao3').val(data[3]);
            $('#datalancamento3').val(data[4]);
            $('#rating3').val(data[5]);
            $('#imagemfilme3').val(data[6]);
        });
    });
    $(document).ready(function (){
        $('.editarator').on('click', function (){

            $('#editarator').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();

            console.log(data);

            $('#nomeator1').val(data[0]);
            $('#datanascimento1').val(data[1]);
            $('#altura1').val(data[2]);
            $('#imagemator1').val(data[3]);
        });
    });
    $(document).ready(function (){
        $('.verator').on('click', function (){

            $('#verarator').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();

            console.log(data);

            $('#nomeator3').val(data[0]);
            $('#datanascimento3').val(data[1]);
            $('#altura3').val(data[2]);
            $('#imagemator3').val(data[3]);
        });
    });
    $(document).ready(function (){
        $('.editrealizador').on('click', function (){

            $('#editarrealizador').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();

            console.log(data);

            $('#nomerealizador1').val(data[0]);
            $('#datanascimento3').val(data[1]);
            $('#altura3').val(data[2]);
            $('#imagemrealizador1').val(data[3]);
        });
    });
    $(document).ready(function (){
        $('.verrealizador').on('click', function (){

            $('#verrealizador').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();

            console.log(data);

            $('#nomerealizador4').val(data[0]);
            $('#datanascimento4').val(data[1]);
            $('#altura4').val(data[2]);
            $('#imagemrealizador4').val(data[3]);
        });
    });
    $(document).ready(function (){
        $('.editestudio').on('click', function (){

            $('#editarestudio').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();

            console.log(data);

            $('#nomeestudio1').val(data[0]);
            $('#descricao1').val(data[1]);
            $('#imagemestudio1').val(data[2]);
        });
    });
    $(document).ready(function (){
        $('.verestudio').on('click', function (){

            $('#verestudio').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function (){
                return $(this).text();
            }).get();

            console.log(data);

            $('#nomeestudio2').val(data[0]);
            $('#descricao2').val(data[1]);
            $('#imagemestudio2').val(data[2]);
        });
    });

</script>
</body>
</html>