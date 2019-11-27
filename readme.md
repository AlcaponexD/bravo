# API BRAVO

Desenvolvimento de api com intuito de conversão de moedas.

Para facilitar avaliação os arquivos desenvolvidos foram , models , controllers,
migrations , seeds.

Foi utilizado laravel 5.8 e o pacote JWT para autenticação que pode ser verificado no
arquivo composer.json

### Documentação da API

https://documenter.getpostman.com/view/6064006/SW7ey5mX?version=latest

Com o postman instalado é possivel importar as rotas para testes.

### Instruções para rodar a aplicação : 


►composer install.

►Copiar o arquivo .env.example , e renomear para .env

►php artisan key:generate

►Criar banco de dados e configurar usuário e senha no arquivo .env.

►php artisan jwt:secret

►php artisan migrate --seed

►Para teste local , ligar o servidor com o comando php artisan serve.

►Acesso pela url http://localhost:8000/

►Usuário para login na API :
 
 
    {
        "email":"admin@admin.com.br",
        "password":"123456"
    }

►API Já contém alguns paises já pré cadastrados na seed , basta acessar a rota 
publica no postman  "Listar paises cadastrados" o mesmo retornará um array com 
os dados.


### Informações de servidor utilizados:

versão do PHP: 7.2.11
