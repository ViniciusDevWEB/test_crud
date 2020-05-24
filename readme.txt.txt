Caro Usuário

Antes de executar a aplicação é necessário criar uma base de dados. Portanto, existe um arquivo chamado set_database.php,
que será responsável por criar automaticamente essa base de dados e tabelas. Assim que executado esse arquivo, uma mensagem de
confirmação será mostrada na window do navegador juntamente com o botão 'ir para a aplicação'. É só clicar nesse botão e será redirecionado
para a aplicão (index.php) do teste crud.

Se caso for necessário alterar parametros da porta de conexão, usuario, senha e nome do banco, basta acessar e editar o arquivo
connection.php, por padrão está configurado com servidor = '127.0.0.1' usuario = 'root', senha = 'root' e banco = 'test_crud'.
O arquivo connection.php está localizado na pasta scripts.

No diretório de acesso pelo seu servidor local, execute como já mencionado o arquivo set_database.php.
Feito isso basta acessar através do servidor, o arquivo index.php quantas vezes for necessário, e navegar pela aplicação!



