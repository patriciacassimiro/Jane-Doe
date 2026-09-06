 <?php include 'includes/header.php' ?>
<body>
    <section>
      <h2> Os meus projetos</h2>

      <hr>
    <a href="image/design.jpg" class="glightbox" data-glightbox="title: Imagem 1; description: Descrição da imagem 1" >
      <img src="image/design.jpg" width="200px" height="auto">
    </a>

    <a href="image/trabalho.jpg" class="glightbox" data-title="Imagem 2" data-description="Descrição da imagem 2">
      <img src="image/trabalho.jpg" width="200px" height="auto">
    </a>

    <a href="image/design2.jpg" class="glightbox" data-title="Imagem 3" data-description="Descrição da imagem 3">
      <img src="image/design2.jpg" width="200px" height="auto">
    </a>

    <a href="image/design3.jpg" class="glightbox" data-glightbox="title: Imagem 4; description: Descrição da imagem 4">
      <img src="image/design3.jpg" width="200px" height="auto">
    </a>
      
    </section>

    <section>
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
      </section>
  </body>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

        <script>
        const lightbox = GLightbox({
              selector: '.glightbox',
             descPosition: 'bottom'

        });
        </script>

      
    <?php include 'includes/footer.php' ?>