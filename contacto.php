 <?php include 'includes/header.php' ?>


  <main><h2>Entre em contato comigo</h2>
    <hr>

    <div class="row">
      <div class="col-md-12 mx-auto">
    
        <form id="formulario" name="formulario" method="post" action="#">
          <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Nome Completo" required>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Data de Nacimento:</label>
            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
          </div>
    
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="987654321" required>
          </div>
    
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="seuemail@mail.com" required>
          </div>
    
          <div class="mb-3">
            <label for="message" class="form-label">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Escreva aqui" required></textarea>
          </div>
    
          <input class="btn btn-primary cta" type="submit" value="Enviar">
        </form>
        </div>
    </div>

   
    
  
    <br>
    <br>
    <br>
    <section>
      <h2>Onde estou</h2>
      <hr>
        <p>Qual é a sua localização?</p>
        <input type="text" class="col-md-10 mx-auto form-control"id="origem" value=""> <br>
        <input class="btn btn-primary cta" type="button" onclick="calcularRota()" value="Calcular Rota">
        <div id="map"></div>
              // Leaflet JS 
              <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                // Routing Machine 
                <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
      </section>
    <!-- Adicione esta seção na página de projetos -->
 <section id="simulacao-orcamento">
 <h2>Simulação de Orçamento</h2>
 <form id="form-simulacao"  class="estilo">
 <label for="nome">Nome:</label>
 <input type="text" id="nome" name="nome" required><br>
 <label for="email">Email:</label>
 <input type="email" id="email" name="email" required> <br>
 <label for="tipo-projeto">Tipo de Projeto:</label>
 <select id="tipo-projeto" name="tipo-projeto" required><br>
 <option value="webdesign">Web Design</option>
 <option value="webdevelopment">Web Development</option>
 <option value="uxui">UX/UI</option>
 </select><br>
 <label for="tamanho-projeto">Tamanho do Projeto (páginas):</label>
 <input type="number" id="tamanho-projeto" name="tamanho-projeto" required><br>
 <label for="descricao">Descrição do Projeto:</label>
 <textarea id="descricao" name="descricao" required></textarea><br>
 <button type="submit" class="cta">Simular Orçamento</button>
 </form>
 <div id="resultado-simulacao"></div>
 </section>
<section id="faq">
 <h2>FAQ</h2>
 <div class="faq-item">
 <h3 class="faq-question">O que é Web Design e por
que é importante? </h3>
 <div class="faq-answer">
 <p>Web Design refere-se à criação e ao layout de
um site, incluindo aspectos como a estrutura, o
 design visual, as cores, fontes e imagens.
Um bom design é crucial para atrair e reter
 visitantes, além de melhorar a usabilidade e
a experiência do utilizador.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">Qual é a diferença entre
Web Development e Web Design?</h3>
 <div class="faq-answer">
 <p>Web Design é focado na aparência visual e na
experiência do utilizador de um site, enquanto Web
 Development envolve a construção e a manutenção do site usando código. Os desenvolvedores web
 trabalham com linguagens como HTML, CSS, JavaScript, PHP, e bancos de dados para criar a
 funcionalidade do site.
 </p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">O que é UX/UI Design?</h3>
 <div class="faq-answer">
 <p>UX (User Experience) Design foca-se na usabilidade, acessibilidade e na experiência geral do
 utilizador
 ao interagir com um produto digital. UI
(User Interface) Design é a prática de criar interfaces
 digitais com foco na aparência e no estilo.
Ambos são essenciais para criar produtos digitais
 que sejam fáceis de usar e visualmente atraentes.</p>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">Quanto tempo leva para
desenvolver um site?</h3>
 <div class="faq-answer">
 <p>O tempo para desenvolver um site pode variar dependendo da complexidade do projeto. Sites
 simples podem levar algumas semanas, enquanto projetos mais complexos, como e-commerces ou
 plataformas personalizadas, podem levar
vários meses.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">Quais informações são
necessárias para iniciar um projeto de Web
 Development?</h3>
 <div class="faq-answer">
 <p>Para iniciar um projeto, precisamos de
uma descrição clara do seu negócio, objetivos do site,
 funcionalidades desejadas, conteúdo,
exemplos de sites que você gosta e, se possível,
 wireframes ou protótipos.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">Qual é o custo médio
para desenvolver um site?</h3>
 <div class="faq-answer">
 <p>O custo pode variar amplamente dependendo
do objetivo e das funcionalidades do projeto. Sites
 básicos podem começar a partir de 400€,
enquanto projetos mais avançados podem custar de
 2.000€ a 10.000€ ou mais.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">O que é um site responsivo?</h3>
 <div class="faq-answer">
 <p>Um site responsivo é aquele que se adapta
automaticamente ao tamanho da tela do dispositivo
 do utilizador, proporcionando uma boa
experiência tanto em computadores quanto em
 dispositivos 
 móveis, como smartphones e tablets.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">Por que devo investir
em UX/UI Design?</h3>
 <div class="faq-answer">
 <p>Investir em UX/UI Design pode melhorar
significativamente a satisfação do utilizador,
 aumentar a
 conversão e retenção de clientes, reduzir custos de desenvolvimento no longo prazo e
 proporcionar uma vantagem competitiva ao
oferecer uma experiência de alta qualidade.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">Como posso garantir que
o meu site seja encontrado nos motores de busca?
 </h3>
 <div class="faq-answer">
 <p>Para garantir que seu site seja encontrado, é importante otimizar o seu conteúdo e estrutura
 para motores de busca (SEO), criar conteúdo relevante e de alta qualidade, e obter backlinks
 de outros sites respeitáveis.</p>
 </div>
 </div>
 <div class="faq-item">
 <h3 class="faq-question">O que acontece após o
site ser lançado?</h3>
 <div class="faq-answer">
 <p>Após o lançamento, oferecemos suporte
contínuo e manutenção para garantir que o site funcione
 perfeitamente. Também podemos ajudar com
atualizações, melhorias de segurança, backup de
 dados e otimizações de performance.</p>
 </div>
 </div>
 </div>
 </section>
  
      <h2> Vamos conversar</h2>
      <div class="row center">  
      <hr>
              <div class="col-3 ">
  
                  <H3> Envie-me uma mensagem</h3>
                  <p> Entre em contato através do meu email ou pelas redes sociais</p>
             
              </div>
              <div class="col-3">
                  <H3>Agende uma reunião</h3>
                  <p> Marque uma videochamada para discutirmos seu projeto</p>
                 
              </div>
              <div class="col-3">
                  <h3> Receba uma proposta</h3>
                  <p> Farei uma análise do seu projeto e enviarei uma proposta personalizada</p>
                
              </div>
    <br>
    <br>
    <br>
<hr>
   
        <h2> Jane Doe <br>Portifólio </h2>

      </main>    
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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script  type="text/javascript" src="js/javascript.js"></script>
     <script>
    // LOCAL FIXO (DESTINO)
    var destinoFixo = [41.5362, -8.7820]; // Esposende

    //  Criar mapa
    var map = L.map('map').setView(destinoFixo, 13);

    //  Camada do mapa (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    //  Marcador do destino
    L.marker(destinoFixo).addTo(map)
      .bindPopup("Destino (Você)")
      .openPopup();

    // Variável para controlar a rota
    var controleRota;

    //  Função chamada ao clicar no botão
    function calcularRota() {

      // Pega o texto do input
      var origemTexto = document.getElementById("origem").value;

      // Verifica se está vazio
      if (origemTexto === "") {
        alert("Digite uma localização!");
        return;
      }

      //FETCH = buscar dados na internet
      fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${origemTexto}`)
        
        // Converte resposta para JSON
        .then(response => response.json())

        // Trabalha com os dados recebidos
        .then(data => {

          // Se não encontrou nada
          if (data.length === 0) {
            alert("Localização não encontrada!");
            return;
          }

          // Coordenadas da origem (utilizador)
          var origem = [
            parseFloat(data[0].lat), 
            parseFloat(data[0].lon)
          ];

          // Remove rota antiga (se existir)
          if (controleRota) {
            map.removeControl(controleRota);
          }

          //  Criar rota
       controleRota = L.Routing.control({
  waypoints: [
    L.latLng(origem[0], origem[1]),
    L.latLng(destinoFixo[0], destinoFixo[1])
  ],
  routeWhileDragging: false,

  router: L.Routing.osrmv1({
    serviceUrl: 'https://router.project-osrm.org/route/v1'
  }),

  lineOptions: {
    styles: [
     { color: 'blue', weight: 5 },       // linha principal
      { color: 'white', weight: 2 }       // borda (opcional)
    ]
  }

}).addTo(map);
});
  }
  </script>
  <script type="text/javascript">
document.getElementById('form-simulacao').addEventListener('submit', function (event) {
  event.preventDefault();

  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  const tipoProjeto = document.getElementById('tipo-projeto').value;
  const tamanhoProjeto = document.getElementById('tamanho-projeto').value;
  const descricao = document.getElementById('descricao').value;

  let precoPorPagina;

  switch (tipoProjeto) {
    case 'webdesign':
      precoPorPagina = 200;
      break;
    case 'webdevelopment':
      precoPorPagina = 400;
      break;
    case 'uxui':
      precoPorPagina = 150;
      break;
    default:
      precoPorPagina = 0;
  }

  const orcamento = precoPorPagina * tamanhoProjeto;

  const resultadoDiv = document.getElementById('resultado-simulacao');

  resultadoDiv.innerHTML = `
    <h3>Resultado da Simulação</h3>
    <p>Nome: ${nome}</p>
    <p>Email: ${email}</p>
    <p>Tipo de Projeto: ${tipoProjeto}</p>
    <p>Tamanho do Projeto: ${tamanhoProjeto} páginas</p>
    <p>Descrição: ${descricao}</p>
    <p><strong>Orçamento Estimado: ${orcamento.toFixed(2)} €</strong></p>
  `;
});
        </script>

        <script>
          $(document).ready(function () {
 $('.faq-question').on('click', function () {
 $(this).next('.faq-answer').slideToggle();
 $(this).parent().siblings().find('.faq-answer').slideUp();
 });
}); 
        </script>
    
</body>
</html>


