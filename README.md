

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1 align="center">QUIZ - Ginástica Laboral</h1>

<p align="center">Este projeto é um sistema web, desenvolvido para empresa grupo volpato. com o objetivo de impementar um formulario de pesquisa de satisfação, senelhante com o Google Form</p>

<p align="center">
 <a href="#features">Features</a> •
 <a href="#pré-requisitos">Pré Requisitos</a> •
 <a href="#rodando-o-mobile">Rodando a aplicação</a> •
 <a href="#tecnologias">Tecnologias</a> •
 <a href="#autor">Autor</a>
</p>

---

<br>

### Features

- [x] Formulario de pesquisa de satisfação
- [x] Relatorio de satisfação - Gráficos
- [x] Gestão de usuarios
  
### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com).

Você também vai precisar configurar o ambiente para desenvolvimento web no seu PC: [Configurando Ambiente WhamServer](https://www.wampserver.com/en/).

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)
  
### Rodando A aplicação

```bash

# Clone o projeto
$ git clone https://github.com/pedronascente/sesmt.git

# Acesse o projeto
cd seuprojeto

# Instale as dependências e o framework
composer install --no-scripts

# Copie o arquivo .env.example
cp .env.example .env

# Crie uma nova chave para a aplicação
php artisan key:generate

# Em seguida você deve configurar o arquivo .env e rodar as migrations com:
php artisan migrate --seed

#Em relação ao npm, isso varia de projeto para projeto, mas provavelmente você também vai precisar rodar os seguintes comandos:
npm install



```  
  
## Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Php](https://www.php.net/manual/pt_BR/index.php)
- [Html](https://reactnative.dev/)
- [Css](https://openweathermap.org/api)
- [Javascript](https://pt-br.reactjs.org/docs/context.html)
- [Bootstrap](https://getbootstrap.com/docs/3.4/)
- [Jquery](https://jquery.com/)
- [Laravel 8](https://jquery.com/](https://laravel.com/docs/8.x))

---

### Autor

<img alt="ARTHUR PC" title="ARTHUR PC" src="https://avatars.githubusercontent.com/u/10846931?s=96&v=4" height="100" width="100" />  
