<?php 
include_once('config.php');

if(isset($_POST['cadastro_item'])){
    $nome_de_quem_emprestou = $_POST['nome_de_quem_emprestou'];
    $nome_do_livro = $_POST['nome_do_livro'];
    $nome_do_autor = $_POST['nome_do_autor'];
    $data_do_emprestimo = $_POST['data_do_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

/*     print_r($_POST['nome_de_quem_emprestou']);
    print_r('<br>');
    print_r($_POST['nome_do_livro']);
    print_r('<br>');
    print_r($_POST['nome_do_autor']);
    print_r('<br>');
    print_r($_POST['data_do_emprestimo']);
    print_r('<br>');
    print_r($_POST['data_devolucao']);
    print_r('<br>');

    echo "variaveis criadas com sucesso";
    print_r('<br>'); */

    $sql = "insert into `formCadastro`.cadastroItens (nome_de_quem_emprestou, nome_do_livro, nome_do_autor, data_do_emprestimo, data_devolucao) values ('$nome_de_quem_emprestou', '$nome_do_livro', '$nome_do_autor', '$data_do_emprestimo', '$data_devolucao')";

    if ($conn->query($sql) == TRUE){
        echo '<script>alert("Cadastro realizado com sucesso!!!")</script>';
    } else {
        echo "ERROR".$conn->error;  
    }
    //$stmt = mysqli_prepare($conn, $sql);
    //echo "2";
    
    //mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha);
    //echo "3";

    //mysqli_stmt_execute($stmt);
    //echo "insert realizado";

    //echo($result);
    //mysqli_close($conn);
}

?>


<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initi">
            <title>Cadastro de um Novo Item</title>
            <link href="estilo_login_cadastro.css" rel="stylesheet">
        </head>

          <body>
                <main>

                        <h1>Cadastrar Novo Item</h1>

                            <div>
                                <form method="POST" action="cadastro_itens.php">
                                    <thead>Cadastre um novo item aqui</thead>
                        
                                    <label for="nome_de_quem_emprestou">
                                        <span>Seu nome</span>
                                        <input type="text" id="nome_de_quem_emprestou" name="nome_de_quem_emprestou" class="inputUser" required>
                                    </label>

                                    <label for="nome_do_livro">
                                        <span>Nome do Livro</span>
                                        <input type="text" id="nome_do_livro" name="nome_do_livro" class="inputUser" required>
                                    </label>

                                    <label for="nome_do_autor">
                                        <span>Nome do Autor</span>
                                        <input type="text" id="nome_do_autor" name="nome_do_autor" class="inputUser" required>
                                    </label>

                                    <label for="data_do_emprestimo">
                                        <span>Data atual</span>
                                        <input type="date" id="data_do_emprestimo" name="data_do_emprestimo" class="inputUser" required>
                                    </label>

                                    <label for="data_devolucao">
                                        <span>Data da devolução</span>
                                        <input type="date" id="data_devolucao" name="data_devolucao" class="inputUser" required>
                                    </label>
                        
                                    <input type="submit" name="cadastro_item" value="Cadastrar Item" id="cadastro_item">

                                </form>
                            </div>

                        </main>

                        <section class="images">
                            <div class="circle"></div>
                        </section>
          </body>

        </html>
        