<?php
    session_start();
?>

<!DOCTYPE html>
        <html lang="pt-br">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initi">
            <title>Site para empréstimo de livros</title>
            <link href="estilo_inicial.css" rel="stylesheet">
          </head>
          <body>
            <main>
                <h1>Empréstimo de Livros</h1>
        
                <div class="box">
                  <h2>Este site tem como finalidade manter o controle dos livros emprestados. 
                      Monitorando quantos livros foram emprestados, data de empréstimo, 
                      nome de quem pegou o(s) livro(s) emprestado(s) e data em que o(s) livro(s) 
                      deve(m) ser devolvido(s). 
                  </h2>
                </div>
<div>
  <table>
        <tr>
          <td>
                <div>
                  <a href="index_cadastro.php" display:inlin>
                    <input class="one" type="submit" value="Cadastrar-se" id="buttom">
                  </a>
                </div>
          </td>
          <td>
                <div>
                  <a href= "index_login.php" display:inline>
                    <input class="two" type="submit" value="Fazer Login" id="buttom">
                  </a>
                </div>
          </td>
        </table>
      </tr>
    </td>
</div>
            </main>

            <section class="images">
                <img src="assets/emprestar.webp" alt="mobile">
        
                <div class="circle"></div>
            </section>

          </body>
        </html>