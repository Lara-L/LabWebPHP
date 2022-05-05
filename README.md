Repositório utilizado para aprendizagem da linguagem PHP.

Preparando ambiente:
1.	Baixar PHP versão 8.1.5
2.	Criar uma pasta no diretório C:\ e extrair o .zip do PHP nela
3.	Instalar o XAMPP
4.	Instalar o composer
5.	Criar pasta em xampp\htdocs onde ficará o projeto
6.	Baixar Laravel via composer dentro da pasta do projeto: "composer create-project laravel/laravel . "

Eventuais erros durante instalação:
1.	Algumas pastas do Laravel podem não ser criadas durante a instalação (como a pasta "vendor" por exemplo), para corrigir basta utilizar o comando "composer install --ignore-platform-reqs" ou "composer update --ignore-platform-reqs"

Erros durante configuração do banco de dados:
1.	Caso o comando "php artisan migrate" retorne “Illuminate\Database\QueryException”, basta ir até a pasta php.ini e tirar o comentário do extension=pdo_mysql.
