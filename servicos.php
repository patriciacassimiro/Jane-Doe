<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serviços</title>
    <meta name="description" content="Criação de web site com bootstrap">
    <meta name="author" content="Patricia Cassimiro">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="keywords" content="Jane Doe, desenvolvedora web, web developer, front-end, back-end, UX/UI, portfólio, projetos web, serviços de desenvol-vimento web">
    <script src="https://kit.fontawesome.com/d132031da6.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

  </head>


  <body>
    <header>
       <nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
    <a class="navbar-brand" style="color: rgb(163, 235, 40)" href="index.html">JANE DOE<br>PORTIFÓLIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="sobre.html">Sobre</a>
       </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Projetos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Projeto 1</a></li>
            <li><a class="dropdown-item" href="#">Projeto 2</a></li>
            <li><a class="dropdown-item" href="#">Projeto </a></li>
          </ul>
        </li> 
          <li class="nav-item">
            <a class="nav-link active" href="servicos.html">Serviços</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contato</a>
          </li>
      </ul>
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>
  </div>
</nav>

    </header>


<main class="container my-5">
 <div class="row" style="display: flex;">
  <h2>Serviços Oferecidos</h2>

  <div class="col-md-3">
    <div id="servicos-container" class="list-group">
      <!-- Botões dos serviços -->
    </div>
  </div>

  <div class="col-md-9 ">
    <div id="servico-detalhes" class="service-details estilo">
  
      <!-- Detalhes do serviço selecionado -->
    </div>
  </div>
</div>
</main>

<div class="row ">  
    <h2> Vamos conversar</h2>
    <hr>
            <div class="col-4 center">

                <H3> Envie-me uma mensagem</h3>
                <p> Entre em contato através do meu email ou pelas redes sociais</p>
           
            </div>
            <div class="col-4 center">
                <H3>Agende uma reunião</h3>
                <p> Marque uma videochamada para discutirmos seu projeto</p>
               
            </div>
            <div class="col-4 center">
                <h3> Receba uma proposta</h3>
                <p> Farei uma análise do seu projeto e enviarei uma proposta personalizada</p>
                <script src="https://kit.fontawesome.com/1bca288182.js" crossorigin="anonymous"></script>
              
            </div>
    </div>
    
    <div class="center">

        <a href="contacto.html" class="btn btn-secondary cta ">Contacte-me</a>
    </div>
       <br>
       <br>
       <br>
    <footer class="footer1  col-12">
        <p>&copy;2025 Jane Doe | Web Developer | <a href="#">Política de privacidade</a>   <a href="#">Termos de uso</a></p>
  
            <a href="https://www.facebook.com/" style="color: rgb(163, 235, 40)" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
  
            <a href="https://x.com/?lang=pt" style="color: rgb(163, 235, 40)" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
  
            <a href="https://pt.linkedin.com/" style="color: rgb(163, 235, 40)" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
  
            <a href="https://www.instagram.com/" style="color: rgb(163, 235, 40)" target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
  
      </footer>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

        <script>
 document.addEventListener('DOMContentLoaded', function () {
 const servicosContainer = document.getElementById('servicos-container');
 const servicoDetalhes = document.getElementById('servico-detalhes');
 function loadServicos() {
 fetch('servicos.json')
 .then(response => {
 if (!response.ok) throw new Error('Erro na resposta da rede: ' + response.statusText);
 return response.json();
 })
 .then(data => {
 const servicos = data.servicos;
 let html = '';
 servicos.forEach((servico, index) => {
 html += `
 <button class="list-group-item list-group-item-action" data-index="${index}">
 ${servico.titulo}
 </button>
 `;
 });
 servicosContainer.innerHTML = html;
 document.querySelectorAll('.list-group-item').forEach(button => {
 button.addEventListener('click', function () {
 const index =
this.getAttribute('data-index')
showServicoDetalhes(servicos[index]);
 });
 });
 })
 .catch(error => {
 servicosContainer.innerHTML = '<p>Desculpe,houve um erro ao carregar os serviços: ' + error.message + '</p>';
 });
 }
 function showServicoDetalhes(servico) {
 servicoDetalhes.innerHTML = `
 <h3>${servico.titulo}</h3>
 <p>${servico.descricao}</p>
 <img src="${servico.imagem}"
alt="${servico.titulo}" class="img-fluid">
 `;
 }
 loadServicos();
 });
 </script>

    </body>
  </html>