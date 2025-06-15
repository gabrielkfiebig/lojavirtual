## 🛒 Loja Virtual - Projeto UPF / Professor Clayton

Este repositório contém o código-fonte de uma Loja Virtual desenvolvida em Laravel (PHP), com o objetivo de cumprir os requisitos de um trabalho de faculdade. O projeto utiliza o motor de templates Blade para o front-end e segue a arquitetura MVC.

## ✅ Tecnologias utilizadas:
PHP (>= 7.4 ou superior)

Laravel (versão 10.x ou superior)

Composer

MySQL (ou MariaDB)

Bootstrap (para o estilo visual)

## 🚀 Requisitos para rodar o projeto localmente:
Antes de começar, você precisa ter instalado na sua máquina:

PHP (recomendo PHP 8.x)

Composer

MySQL ou MariaDB

Um servidor local como XAMPP, Laragon, WampServer, ou usar Laravel Sail (Docker)

## 🛠️ Passo a passo da instalação:
1. Clone o projeto:

git clone https://github.com/gabrielkfiebig/lojavirtual.git

2. Entre na pasta do projeto:

cd lojavirtual

3. Instale as dependências PHP via Composer:

composer install
Se pedir, permita a instalação de dependências não seguras usando:


composer install --ignore-platform-reqs
(Opcional: só se houver problemas de versão do PHP local.)

4. Configure o ambiente .env:
Copie o arquivo .env.example e renomeie para .env:


cp .env.example .env
Abra o .env e configure os dados de conexão com o banco de dados:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lojavirtual
DB_USERNAME=root
DB_PASSWORD= (coloque a senha do seu MySQL)

5. Gere a chave da aplicação:

php artisan key:generate

6. Crie o banco de dados:
Abra o MySQL e crie um banco com o nome definido no .env (por exemplo: lojavirtual).

Exemplo no MySQL CLI:

CREATE DATABASE lojavirtual;

7. Rode as migrações para criar as tabelas:

php artisan migrate
(Se houver seeds futuramente, você pode rodar: php artisan db:seed)

8. Inicie o servidor de desenvolvimento:

php artisan serve
O Laravel vai rodar o projeto em:

http://localhost:8000

## ✔️ Estrutura Básica do Projeto:

app/	Lógica da aplicação: Controllers, Models
resources/views/	Frontend em Blade (ex.: telas como home, cadastro de produto)
routes/web.php	Definição de rotas
database/migrations/	Estrutura do banco de dados
public/	Arquivos acessíveis publicamente

## 📌 Observação Importante:

Este projeto ainda está em desenvolvimento. Como se trata de um trabalho de faculdade, algumas funcionalidades podem estar incompletas ou em fase de testes.