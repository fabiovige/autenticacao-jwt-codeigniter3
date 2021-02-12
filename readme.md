# Login via JWT & Codeigniter 3

Este projeto é um exemplo simples de como implementar um teste simples e seguro de autenticação JWT e Codeigniter 3.

Neste projeto estou utilizando o Framework Codeigniter 3 com algumas alterações para atender minha necessidade
como COMPOSER AUTOLOAD e ENV LOAD FILE ver (index.php)

- Utilização de gerenciamento com composer
- Pacote Firebase\JWT para geração do token de autenticação
- Utilização do git para versionamento
- Codeigniter 3 com LOAD ENV e COMPOSER integrados
- Design Patterns MVC
- Criação de um service(AuthenticateUserService) somente para autenticação separando a regra do controller

## Requerimento

* "composer"
* "firebase/php-jwt": "^5.0"

## Instalação e instruções

- composer install
- criar o banco de dados bd_teste e importar o dump.sql contendo a tabela usuarios de exemplo
- acessar a url http://localhost/login-jwt
- informar o e-mail fabiovige@gmail.com e a senha 123456

### Codeigniter 3 utilizando .env

- Na raiz do projeto teremos os arquivos 
* env-development - para o ambiente de desenvolvimento
* env-testing - para o ambiente de homologacao
* env-product - para o ambiente de producao

Basta alterar o arquivo index.php da raiz para configurar o ambiente de desenvolvimento. O padrão está como (development)


## License

MIT license

Copyright © 2021 - fabiovige.com.br
