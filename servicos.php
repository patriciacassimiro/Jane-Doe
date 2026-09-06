 <?php include 'includes/header.php' ?>

<body>
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

            <a href="contacto.php" class="btn btn-secondary cta">Contacte-me</a>
        </div>
          <br>
          <br>
          <br>

  </body>  
  
  
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

 <?php include 'includes/footer.php' ?>