<?php 
include_once('config.php');
?>


<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initi">
            <title>Fazer login no site para empréstimo de itens</title>
            <link href="estilo_login_cadastro.css" rel="stylesheet">
        </head>

          <body>

            <main>

            <h1>Entrar no site</h1>

                <div>
                    <form method="POST" action="apos_login.php">
                    
                        <label for="email">
                            <span>E-mail</span>
                            <input type="email" id="email" name="email" class="inputUser" required>
                        </label>
            
                        <label for="password">
                            <span>Senha</span>
                            <input type="text" id="password" name="password" class="inputUser" required>
                        </label>
            
                        <input type="submit" name="Entrar" value="Entrar" id="Entrar">

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