# Projeto_web_php_mysql
  Neste projeto, criei uma pagina simples onde o usuario pode fazer seu cadastro no site e realizar o login com o email e senha cadastrados. Uma vez realizado o login, o usuario poderá cadastrar o livro que ele deseja pegar emprestado, preenchendo os campos com seu nome, o nome do livro, o nome do autor, a data em que ele está pegando o livro emprestado e a data de devolução.
  
  Todas as informações fornecidas pelo usuário, tanto no seu cadastro, como no cadastro dos livros, são armazenadas em um banco de dados MySQL, utilizamos o PHPmyAdmin como administrador do nosso banco. Para realizar a conexão é necessário fornecer o login, senha, e nome do banco para que a conexão seja realizada. No caso deste projeto utilizamos o localhost. Da mesma forma, ao realizar o login, também é realizada uma consulta no banco de dados, para verificar se aquele usuário possui cadastro, caso seu login e senha estejam corretos, será permitido o acesso.
  
  Como na máquina que utilizo o sistema operacional é o Linux, para carregar essa aplicação via localhost, a pasta com os scripts devem estar localizados em /usuario/srv/http.
  
  Por enquanto, essas são as aplicações da página, posteriormente faremos mais modificações para buscar os dados do usuário em uma sessão e mostrá-los conforme a utilidade. 
