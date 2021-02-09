<?php
session_start();


//conexao á base de dados

$db = mysqli_connect('localhost','root','','projetoweb') or die('Conexão falhada');

//Se a sessão está aberta, abre a pagina com login
if(isset($_SESSION['username'])){
    echo '<style type="text/css">
 #semlogin{
        display: none;
        }
         #comlogin{
        display: block;
        }           
              
        </style>';
}
if(isset($_SESSION['admin'])){
    echo '<style type="text/css">       
          .form-signin{
                            display: none;
                            }
                             #mynav{
                            display: block;
                            }             
        </style>';
}

//verificação da conta
if(isset($_GET["vkey"])){
    $vkey1 = $_GET['vkey'];
    $resultSet = ("SELECT 1 FROM user WHERE verificacao=0 AND vkey='$vkey1' ");
    $result = mysqli_query($db, $resultSet);
    if(mysqli_num_rows($result) == 1){
        //validar email
        $update = $db->query("UPDATE user SET verificacao=1 WHERE vkey='$vkey1' LIMIT 1");
        if($update){
            echo '<script type="text/JavaScript">  
     window.alert("A sua conta foi verificada, já pode fazer o login")
     </script>';
        }else{
            echo '<script type="text/JavaScript">  
     window.alert("ERRO")
     </script>';
        }
    }else{
        echo '<script type="text/JavaScript">  
     window.alert("Erro")
     </script>';
    }
}

//registar utilizador
if(isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
//validação do form
    if ($password1 != $password2) {
        echo '<script type="text/JavaScript">  
     window.alert("As passwords não coincidem")
     </script>';

    } else if(strlen($username) < 5){
        echo '<script type="text/JavaScript">  
     window.alert("Username necessita no minimo de 5 caracteres")
     </script>';
    } else{
        //verifcação de username na base de dados
        $user_check_query = "SELECT * FROM user WHERE username = '$username' or email= '$email' LIMIT 1";
        $results = mysqli_query($db, $user_check_query);
        if(mysqli_num_rows($results) > 0){
        $user = mysqli_fetch_assoc($results);
            if ($user['username'] == $username) {
                echo '<script type="text/JavaScript">  
     window.alert("Username existente, tente outro")
     </script>';
            }
            if ($user['email'] == $email) {
                echo '<script type="text/JavaScript">  
     window.alert("Email existente, tente outro")
     </script>';
            }
        }
            else{
                //se não houver erros, regista o utilizador
                $vkey = md5(time().$username);
                $password = password_hash($password1, PASSWORD_DEFAULT);
                $date = date('Y-m-d H:i:s');
                $query = "INSERT INTO user (username, email, password,vkey,data) VALUES ('$username','$email','$password','$vkey','$date')";
                $insert= mysqli_query($db, $query);
                if($insert){
                    $to = $email;
                    $assunto= "Verificação de email";
                    $mensagem= "<p>Obrigado pelo seu registo no MyHollywoodList<br>Para confirmar a sua conta carregue neste link:
                    <a href='http://localhost/ProjetoWebServer2/public/index.php?vkey=$vkey'>Confirmar Registo</a></p>";
                    $headers="From: projetowebual@gmail.com \r\n";
                    $headers .= "MIME-Version: 1.0" . "\r\n";
                    $headers .="Content-type:text/html;charset=UTF-8" ."\r\n";
                    mail($to,$assunto,$mensagem,$headers);
                    echo '<script type="text/JavaScript">
                     window.alert("Obrigado pelo registo, enviamos-lhe um email de confirmação")
                     </script>';
                }
            }
        }
    }

//login
if(isset($_POST['log_user'])) {
    $uname = mysqli_real_escape_string($db, $_POST['username1']);
    $pass = mysqli_real_escape_string($db, $_POST['password1']);

    if (!empty($uname) || !empty($pass)) {
        $query  = "SELECT * FROM user WHERE username = '$uname'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($pass, $row['password'])) {
                    $verificacao =$row['verificacao'];
                    if ($verificacao == 1){
                        $_SESSION['username'] = $uname;
                        echo '<script type="text/JavaScript">  
                         alert("LogIn efetuado com sucesso")
                         </script>';
                        echo '<style type="text/css">
                         #semlogin{
                            display: none;
                            }
                             #comlogin{
                            display: block;
                            }
                        </style>';
                    }else{
                        echo '<script type="text/JavaScript">  
                     alert("A sua conta precisa de ser verificada, por favor verifique o seu email")
                     </script>';
                    }

                }else{
                    echo '<script type="text/JavaScript">  
                     alert("Username ou password incorreto")
                     </script>';
                }
            }
        }else{
            echo '<script type="text/JavaScript">  
     alert("Username ou password incorreto")
     </script>';
        }
    }else{
        echo '<script type="text/JavaScript">  
     alert("Username ou password incorreto")
     </script>';
    }
    }

//login backoffice
if(isset($_POST['log_user2'])) {
    $uname = mysqli_real_escape_string($db, $_POST['username3']);
    $pass = mysqli_real_escape_string($db, $_POST['password3']);
    if (!empty($uname) || !empty($pass)) {
        $query  = "SELECT * FROM admin WHERE username = '$uname'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($pass, $row['password'])) {
                        $_SESSION['admin'] = $uname;
                        echo '<script type="text/JavaScript">  
                         alert("LogIn efetuado com sucesso")
                         </script>';
                        echo '<style type="text/css">
                         .form-signin{
                            display: none;
                            }
                             #mynav{
                            display: block;
                            }
                        </style>';
                }else{
                    echo '<script type="text/JavaScript">  
                     alert("Username ou password incorreto")
                     </script>';
                }
            }
        }else{
            echo '<script type="text/JavaScript">  
     alert("Username ou password incorreto")
     </script>';
        }
    }else{
        echo '<script type="text/JavaScript">  
     alert("Username ou password incorreto")
     </script>';
    }
}


//CRUD
if(isset($_POST['adicionarfilme'])) {
    $nome = mysqli_escape_string($db, $_POST['nomefilme']);
    $trailer = mysqli_escape_string($db, $_POST['trailer']);
    $dur = mysqli_escape_string($db, $_POST['duracao']);
    $data = mysqli_escape_string($db, $_POST['datalancamento']);
    $rating = mysqli_escape_string($db, $_POST['rating']);
    $img = mysqli_escape_string($db, $_POST['imagemfilme']);
    $gender = mysqli_escape_string($db, $_POST['gender']);
    $sql = "INSERT INTO `filmes` (`nomefilme`, `trailer`, `duracao`, `anolancamento`, `rating`, `imagemfilme`, `genero`) VALUES ('$nome', '$trailer', '$dur', '$data', '$rating', '$img', '$gender');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Filme adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }
}
if(isset($_POST['adicionarator'])) {
    $nome = mysqli_escape_string($db, $_POST['nomeator']);
    $altura = mysqli_escape_string($db, $_POST['altura']);
    $data = mysqli_escape_string($db, $_POST['datanascimento']);
    $img = mysqli_escape_string($db, $_POST['imagemator']);
    $sql = "INSERT INTO `atores` (`nomeator`, `datanascimento`, `altura`, `imagemator`) VALUES ('$nome', '$data', '$altura', '$img');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Ator adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }


}
if(isset($_POST['adicionarrealizador'])) {
    $nome = mysqli_escape_string($db, $_POST['nomerealizador']);
    $altura = mysqli_escape_string($db, $_POST['altura']);
    $data = mysqli_escape_string($db, $_POST['datanascimento']);
    $img = mysqli_escape_string($db, $_POST['imagemrealizador']);
    $sql = "INSERT INTO `realizadores` (`nomerealizador`, `datanascimento`, `altura`, `imagemrealizador`) VALUES ('$nome', '$data', '$altura', '$img');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Realizador adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }


}
if(isset($_POST['adicionarestudio'])) {
    $nome = mysqli_escape_string($db, $_POST['nomeestudio']);
    $descricao = mysqli_escape_string($db, $_POST['descricao']);
    $img = mysqli_escape_string($db, $_POST['imagemestudio']);
    $sql = "INSERT INTO `estudios` (`nomeestudio`, `descricao`, `imagemestudio`) VALUES ('$nome', '$descricao', '$img');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Estudio adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }


}

if(isset($_GET['removerfilmes'])){
    $nomefilme = $_GET['removerfilmes'];
    $resultSet = ("DELETE FROM filmes WHERE nomefilme='$nomefilme'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Filme removido com sucesso")
                         </script>';
    }
    header("Location: backoffice.php");
}
if(isset($_GET['removerator'])){
    $nomeator = $_GET['removerator'];
    $resultSet = ("DELETE FROM atores WHERE nomeator='$nomeator'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Ator removido com sucesso")
                         </script>';
    }
    header("Location: backoffice.php");
}
if(isset($_GET['removerrealizador'])){
    $nomerealizador = $_GET['removerrealizador'];
    $resultSet = ("DELETE FROM realizadores WHERE nomerealizador='$nomerealizador'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Realizador removido com sucesso")
                         </script>';
    }
    header("Location: backoffice.php");
}
if(isset($_GET['removerestudio'])){
    $nomeestudio = $_GET['removerestudio'];
    $resultSet = ("DELETE FROM estudios WHERE nomeestudio='$nomeestudio'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Estudio removido com sucesso")
                         </script>';
    }
    header("Location: backoffice.php");
}

if(isset($_POST['editarfilme'])){
    $nomefilme2 = $_POST['nomefilme1'];
    $genero2 = $_POST['genero1'];
    $trailer2 = $_POST['trailer1'];
    $duracao2 = $_POST['duracao1'];
    $datalancamento2 = $_POST['datalancamento1'];
    $rating2 = $_POST['rating1'];
    $imagemfilme2 = $_POST['imagemfilme1'];
    $sql = "UPDATE filmes  SET genero='$genero2', trailer='$trailer2',duracao='$duracao2', anolancamento='$datalancamento2',rating='$rating2',imagemfilme='$imagemfilme2' WHERE nomefilme='$nomefilme2'";
    $resultado = mysqli_query($db,$sql);
    if ($resultado){
        echo '<script type="text/JavaScript">  
                         alert("Filme editado com sucesso")
                         </script>';
        header("Location:backoffice.php");
    }else{
        echo '<script type="text/JavaScript">  
                         alert("ERRO")
                         </script>';
    }
}
if(isset($_POST['editarator'])){
    $nomeator2 = $_POST['nomeator1'];
    $data2 = $_POST['datanascimento1'];
    $altura2 = $_POST['altura1'];
    $imagem2 = $_POST['imagemator1'];
    $sql = "UPDATE atores  SET datanascimento='$data2', altura='$altura2',imagemator='$imagem2' WHERE nomeator='$nomeator2'";
    $resultado = mysqli_query($db,$sql);
    if ($resultado){
        echo '<script type="text/JavaScript">  
                         alert("Ator editado com sucesso")
                         </script>';
        header("Location:backoffice.php");
    }else{
        echo '<script type="text/JavaScript">  
                         alert("ERRO")
                         </script>';
    }
}
if(isset($_POST['editarrealizador'])){
    $nomerealizador2 = $_POST['nomerealizador1'];
    $data3 = $_POST['datanascimento3'];
    $altura3 = $_POST['altura3'];
    $imagem3 = $_POST['imagemrealizador1'];
    $sql = "UPDATE realizadores  SET datanascimento='$data3', altura='$altura3',imagemrealizador='$imagem3' WHERE nomerealizador='$nomerealizador2'";
    $resultado = mysqli_query($db,$sql);
    if ($resultado){
        echo '<script type="text/JavaScript">  
                         alert("Realizador editado com sucesso")
                         </script>';
        header("Location:backoffice.php");
    }else{
        echo '<script type="text/JavaScript">  
                         alert("ERRO")
                         </script>';
    }
}
if(isset($_POST['editarestudio'])){
    $nomeestudio2 = $_POST['nomeestudio1'];
    $descricao3 = $_POST['descricao1'];
    $imagem4 = $_POST['imagemestudio1'];
    $sql = "UPDATE estudios  SET descricao='$descricao3', imagemestudio='$imagem4'WHERE nomeestudio='$nomeestudio2'";
    $resultado = mysqli_query($db,$sql);
    if ($resultado){
        echo '<script type="text/JavaScript">  
                         alert("Estudio editado com sucesso")
                         </script>';
        header("Location:backoffice.php");
    }else{
        echo '<script type="text/JavaScript">  
                         alert("ERRO")
                         </script>';
    }
}


?>