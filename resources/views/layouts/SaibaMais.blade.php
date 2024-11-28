<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/rodapeSection.css') }}">
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/saibaMais.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
 <x-header/>

 <body>
    <div class="card-texto">
  <h1>Sobre Nós</h1>
  <p>
    Somos um grupo de cinco alunos do Cotemig, que se uniram para desenvolver um projeto
    de software como parte de nossa conclusão de curso. Criamos um site com o objetivo de
    conectar jovens em festas e eventos, facilitando novas amizades e experiências sociais.
  </p>
  <p>
    Esse projeto reflete o conhecimento adquirido ao longo do nosso curso, onde aplicamos
    conceitos de programação, design e desenvolvimento de sistemas para criar uma
    plataforma prática e acessível.
  </p>
  <p>
    Nosso foco é proporcionar uma experiência única e simples para que os jovens possam se
    divertir e interagir em um ambiente seguro e dinâmico.
</div>
<br>
<h1>Nós</h1>
<div class="container">
    <div class="profile-card">
        <img src="{{ asset('images/imagem1.jpg') }}" alt="Imagem de Pedro Aguiar">
        <p>Pedro Aguiar</p>
    </div>
    <div class="profile-card">
        <img src="{{ asset('images/imagem2.jpg') }}" alt="Imagem de Júlia Bispo">
        <p>Júlia Bispo</p>
    </div>
    <div class="profile-card">
        <img src="{{ asset('images/imagem3.jpg') }}" alt="Imagem de Felipe Costa">
        <p>Felipe Costa</p>
    </div>
    <div class="profile-card">
        <img src="{{ asset('images/imagem4.jpg') }}" alt="Imagem de Gabriel Diniz">
        <p>Gabriel Diniz</p>
    </div>
    <div class="profile-card">
        <img src="{{ asset('images/imagem6.jpg') }}" alt="Imagem de Daniel Augusto">
        <p>Daniel Augusto</p>
    </div>
</div>
<br>
   
</body>
 <x-footer />
</html>