<?php include 'includes/header.php'; ?>

<main>
  <h2>Entre em contato comigo</h2>
  <hr>

  <div class="row">
    <div class="col-12 col-lg-6">
      <h3>Informações de Contato</h3>
      <p><strong>Email:</strong> seuemail@mail.com</p>
      <p><strong>Telefone:</strong> 987654321</p>
      <p><strong>Endereço:</strong> Rua Exemplo, 123, Cidade, País</p>
      <p><strong>Redes Sociais: Jane Doe</strong></p>
      <img src="image/jane.jpg" alt="Imagem de Contato" class="img-fluid mt-3">
    </div>

    <div class="col-12 col-lg-6">
      <form id="formulario" class="form-page" name="formulario" method="post" action="#">
        <div class="mb-3">
          <label for="name" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo" required>
        </div>
        <div class="mb-3">
          <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
          <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone:</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="987654321" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@mail.com" required>
        </div>
        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem:</label>
          <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Escreva aqui" required></textarea>
        </div>
        <button class="btn cta" type="submit">Enviar</button>
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
    <input type="text" class="form-control mb-3" id="origem" value="" placeholder="Ex.: Braga">
    <button class="btn cta" type="button" onclick="calcularRota()">Calcular Rota</button>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
  </section>

  <section id="simulacao-orcamento">
    <h2>Simulação de Orçamento</h2>
    <form id="form-simulacao" class="estilo form-page">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" required>

      <label for="email-orcamento">Email:</label>
      <input type="email" class="form-control" id="email-orcamento" name="email" required>

      <label for="tipo-projeto">Tipo de Projeto:</label>
      <select class="form-control" id="tipo-projeto" name="tipo-projeto" required>
        <option value="webdesign">Web Design</option>
        <option value="webdevelopment">Web Development</option>
        <option value="uxui">UX/UI</option>
      </select>

      <label for="tamanho-projeto">Tamanho do Projeto (páginas):</label>
      <input type="number" class="form-control" id="tamanho-projeto" name="tamanho-projeto" min="1" required>

      <label for="descricao">Descrição do Projeto:</label>
      <textarea class="form-control" id="descricao" name="descricao" required></textarea>

      <button type="submit" class="cta">Simular Orçamento</button>
    </form>
    <div id="resultado-simulacao"></div>
  </section>

  <section id="faq">
    <h2>FAQ</h2>

    <div class="faq-item">
      <h3 class="faq-question">O que é Web Design e por que é importante?</h3>
      <div class="faq-answer">
        <p>Web Design refere-se à criação e ao layout de um site, incluindo aspectos como a estrutura, o design visual, as cores, fontes e imagens. Um bom design é crucial para atrair e reter visitantes, além de melhorar a usabilidade e a experiência do utilizador.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">Qual é a diferença entre Web Development e Web Design?</h3>
      <div class="faq-answer">
        <p>Web Design é focado na aparência visual e na experiência do utilizador de um site, enquanto Web Development envolve a construção e a manutenção do site usando código. Os desenvolvedores web trabalham com linguagens como HTML, CSS, JavaScript, PHP e bases de dados para criar a funcionalidade do site.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">O que é UX/UI Design?</h3>
      <div class="faq-answer">
        <p>UX (User Experience) Design foca-se na usabilidade, acessibilidade e na experiência geral do utilizador ao interagir com um produto digital. UI (User Interface) Design é a prática de criar interfaces digitais com foco na aparência e no estilo. Ambos são essenciais para criar produtos digitais fáceis de usar e visualmente atraentes.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">Quanto tempo leva para desenvolver um site?</h3>
      <div class="faq-answer">
        <p>O tempo para desenvolver um site pode variar dependendo da complexidade do projeto. Sites simples podem levar algumas semanas, enquanto projetos mais complexos, como e-commerces ou plataformas personalizadas, podem levar vários meses.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">Quais informações são necessárias para iniciar um projeto de Web Development?</h3>
      <div class="faq-answer">
        <p>Para iniciar um projeto, precisamos de uma descrição clara do seu negócio, objetivos do site, funcionalidades desejadas, conteúdo, exemplos de sites que você gosta e, se possível, wireframes ou protótipos.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">Qual é o custo médio para desenvolver um site?</h3>
      <div class="faq-answer">
        <p>O custo pode variar amplamente dependendo do objetivo e das funcionalidades do projeto. Sites básicos podem começar a partir de 400€, enquanto projetos mais avançados podem custar de 2.000€ a 10.000€ ou mais.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">O que é um site responsivo?</h3>
      <div class="faq-answer">
        <p>Um site responsivo é aquele que se adapta automaticamente ao tamanho da tela do dispositivo do utilizador, proporcionando uma boa experiência em computadores, smartphones e tablets.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">Por que devo investir em UX/UI Design?</h3>
      <div class="faq-answer">
        <p>Investir em UX/UI Design pode melhorar significativamente a satisfação do utilizador, aumentar a conversão e retenção de clientes, reduzir custos de desenvolvimento no longo prazo e proporcionar uma vantagem competitiva ao oferecer uma experiência de alta qualidade.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">Como posso garantir que o meu site seja encontrado nos motores de busca?</h3>
      <div class="faq-answer">
        <p>Para garantir que o seu site seja encontrado, é importante otimizar o conteúdo e a estrutura para motores de busca (SEO), criar conteúdo relevante e de alta qualidade e obter backlinks de sites respeitáveis.</p>
      </div>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">O que acontece após o site ser lançado?</h3>
      <div class="faq-answer">
        <p>Após o lançamento, oferecemos suporte contínuo e manutenção para garantir que o site funcione perfeitamente. Também podemos ajudar com atualizações, melhorias de segurança, backups de dados e otimizações de performance.</p>
      </div>
    </div>
  </section>

  <h2>Vamos conversar</h2>
  <div class="row center">
    <hr>
    <div class="col-3">
      <h3>Envie-me uma mensagem</h3>
      <p>Entre em contato através do meu email ou pelas redes sociais</p>
    </div>
    <div class="col-3">
      <h3>Agende uma reunião</h3>
      <p>Marque uma videochamada para discutirmos seu projeto</p>
    </div>
    <div class="col-3">
      <h3>Receba uma proposta</h3>
      <p>Farei uma análise do seu projeto e enviarei uma proposta personalizada</p>
    </div>
  </div>

  <hr>
  <h2>Jane Doe<br>Portfólio</h2>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script>
  var destinoFixo = [41.5362, -8.7820];
  var mapa = L.map('map').setView(destinoFixo, 13);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(mapa);

  L.marker(destinoFixo).addTo(mapa)
    .bindPopup('Destino (Você)')
    .openPopup();

  var controleRota;

  function calcularRota() {
    var origemTexto = document.getElementById('origem').value;

    if (origemTexto === '') {
      alert('Digite uma localização!');
      return;
    }

    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${origemTexto}`)
      .then(response => response.json())
      .then(data => {
        if (data.length === 0) {
          alert('Localização não encontrada!');
          return;
        }

        var origem = [
          parseFloat(data[0].lat),
          parseFloat(data[0].lon)
        ];

        if (controleRota) {
          mapa.removeControl(controleRota);
        }

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
              { color: 'blue', weight: 5 },
              { color: 'white', weight: 2 }
            ]
          }
        }).addTo(mapa);
      });
  }
</script>
<script type="text/javascript">
  document.getElementById('form-simulacao').addEventListener('submit', function (event) {
    event.preventDefault();

    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email-orcamento').value;
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

<?php include 'includes/footer.php'; ?>
