
## Configuração do projeto 
Setup

Laravel version 8.1,
PHP version 8.1 instalado pelo xampp
Composer version 2.7.4 2024-04-22 21:17:03
MySQL Community Server - GPL version 8.0.36. windows: https://dev.mysql.com/downloads/

Instalação

Despois de clonar o repositorio dentro da pasta root com o composer instalado executar o comando: "composer install".

Crie um novo banco de dados com o nome 'dbgnf'
Crie um novo arquivo de enviroment '.env' seguindo o modelo do arquivo ".env.example" com as credencias do banco local;

O script de execução do banco de dados roda de acordo com os arquivos de migração;

Execute o seguinte comando para o laravel criar todas as tabelas:

"php artisan migrate".

##Para executar 
php artisan serve
acessar a rota /notasfiscais para listar os dados cadastrados

##Sobre o projeto
O projeto no estado atual foi implementado os controllers e os models para as duas tabelas.
E a primeira opeção de Read na tabela de NotaFiscal.
O próximo passo seria a implementação das demais operações crud para o primiero model.

As classes de layout precisam de ajuste nos arquivos de estilo.

A ideia seria utilizar o padrão Repository para acessar os dados fora do Controller de cada entidade.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
