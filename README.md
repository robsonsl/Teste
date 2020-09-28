#### para criar o imagem rodar o comando dentro da pasta raiz
#### docker build -t testes .
#### depois abaixar imagem do MYSQL com o comando
#### docker pull mysql
#### apos abaixar as imagem criar os containers com os comandos
#### docker run --name teste -e MYSQL_ROOT_PASSWORD=123456 -e MYSQL_DATABASE=desenvolvedores -d mysql:5.7.30
#### docker run -p 80:80 -v ${pwd}:/var/www/html --name teste-gazin -d --link teste testes
#### apos instalar os cantainer entrar no container do teste-gazin e rodar o comando composer-install e depois o migrate para gerar as tabelas arquivo com configuração do banco.env
#### docker exec -it teste-gazin bash
#### composer install
#### php artisan migrate
#### apos criação da tabela acessar pelo link http://localhost/developers
