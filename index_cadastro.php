<?php 
include_once('config.php');

if(isset($_POST['submit'])){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

/* 
  Essa parte do script serve para verificarmos se os metodos POST estao sendo realizados
da maneira correta, ou seja, se estamos recebendo os dados que o usuario coloca em nossa 
pagina

    print_r($_POST['name']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['password']);
    print_r('<br>');

    echo "variaveis criadas com sucesso";
    print_r('<br>'); 
*/

    $sql = "insert into `formCadastro`.cadastroUsuarios (nome, email, senha) values ('$nome','$email','$senha')";

    if ($conn->query($sql) == TRUE){
        echo"<script language='javascript' type='text/javascript'>
        alert('Cadastro realizado com sucesso');window.location
        .href='index_cadastro.php';</script>";
    } else {
        echo "Erro ao realizar cadastro".$conn->error;  
    }
}

?>


<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initi">
            <title>Cadastrar do site</title>
            <link href="estilo_login_cadastro.css" rel="stylesheet">
        </head>

          <body>
                <main>

                        <h1>Cadastre-se no site</h1>

                            <div>
                                <form method="POST" action="index_cadastro.php">

                                    <label for="name">
                                        <span>Nome</span>
                                        <input type="text" id="name" name="name" class="inputUser" required>
                                    </label>
                                
                                    <label for="email">
                                        <span>E-mail</span>
                                        <input type="email" id="email" name="email" class="inputUser" required>
                                    </label>
                        
                                    <label for="password">
                                        <span>Senha</span>
                                        <input type="text" id="password" name="password" class="inputUser" required>
                                    </label>
                        
                                    <input type="submit" name="submit" value="Cadastre-se" id="submit">

                                </form>
                                <a href= "index_inicial.php">
                                    <input class="voltar" type="submit" value="Voltar" id="voltar">
                                </a>
                            </div>

                        </main>

                        <section class="images">
                            <div class="circle"></div>
                        </section>
          </body>

        </html>