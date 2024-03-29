# Enviando Email com Laravel

Este projeto é um exemplo simples de como enviar e-mails usando o framework Laravel. Ele demonstra o uso do Mailtrap para testar o envio de e-mails em um ambiente de desenvolvimento e também utiliza filas (queues) e jobs do Laravel para processar o envio de e-mails de forma assíncrona.

## Pré-requisitos

Antes de começar, certifique-se de que você tenha os seguintes requisitos atendidos:

- [Laravel](https://laravel.com/docs) instalado em sua máquina.
- Conta no [Mailtrap](https://mailtrap.io/) para testar o envio de e-mails em um ambiente de desenvolvimento.
- Conhecimento básico sobre o uso de filas (queues) e jobs no Laravel.

## Instalação

Siga os passos abaixo para configurar e executar o projeto:

1. Clone este repositório para sua máquina local:

   ```bash
   git clone https://github.com/seu-usuario/enviando-email-com-laravel.git
  
Navegue até o diretório do projeto:
  cd enviando-email-com-laravel
  
Instale as dependências do Laravel usando o Composer:
  composer install
  
Crie o arquivo de ambiente .env e configure suas credenciais do Mailtrap:
  cp .env.example .env
  
Edite o arquivo .env com suas informações do Mailtrap:
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=seu-username-do-mailtrap
  MAIL_PASSWORD=sua-senha-do-mailtrap
  MAIL_ENCRYPTION=null

Gere a chave do aplicativo Laravel:
  php artisan key:generate
  
Execute as migrações do banco de dados (se necessário):
  php artisan migrate
  
Inicie o servidor de desenvolvimento:
  php artisan serve
  
## Uso
Após configurar e iniciar o servidor, você pode acessar a página inicial em http://localhost:8000 e experimentar o envio de e-mails. Certifique-se de verificar a caixa de entrada do Mailtrap para visualizar os e-mails enviados.

## Filas e Jobs
Este projeto também demonstra o uso de filas e jobs para processar o envio de e-mails de forma assíncrona. Os jobs são responsáveis por enfileirar e processar o envio de e-mails em segundo plano. Para executar os jobs, execute o seguinte comando:
  php artisan queue:work
