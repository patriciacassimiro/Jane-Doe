<?php include 'includes/header.php'; ?>

<main>
    <section>
        <h2>Sobre Mim</h2>
        <hr>

        <div class="accordion" id="accordionSobre">
            <?php
            $sections = [
                'Dados e contactos' => 'Nome completo: Jane Doe<br>Endereço: Rua das Flores, 123, Lisboa, Portugal<br>Telefone: +351 912 345 678<br>Email: janedoe@mail.com<br>LinkedIn: linkedin.com/janedoe<br>GitHub: github.com/janedoe',
                'Perfil profissional' => 'Desenvolvedora web focada na criação de experiências digitais intuitivas, acessíveis e responsivas.',
                'Experiência de trabalho' => 'Web Designer Sénior, freelancer de desenvolvimento web e estagiária de desenvolvimento.',
                'Habilidades técnicas' => 'HTML, CSS, JavaScript, PHP, bases de dados, Bootstrap e integração de APIs.',
                'Educação' => 'Formação na área de desenvolvimento e design de aplicações web.',
                'Projetos' => 'Aplicações web, projetos de SEO, interfaces responsivas e soluções personalizadas.',
                'Certificações' => 'Certificações e formação contínua nas áreas de desenvolvimento web e UX/UI.',
                'Idiomas' => 'Português e Inglês.',
                'Interesses' => 'Tecnologia, design, acessibilidade e aprendizagem contínua.',
                'Referências' => 'Referências profissionais disponíveis mediante solicitação.'
            ];
            $sectionIndex = 0;
            foreach ($sections as $title => $content):
                $sectionIndex++;
                $sectionId = 'collapseSobre' . $sectionIndex;
                $isFirst = $sectionIndex === 1;
            ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSobre<?= $sectionIndex ?>">
                        <button
                            class="accordion-button<?= $isFirst ? '' : ' collapsed' ?>"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#<?= $sectionId ?>"
                            aria-expanded="<?= $isFirst ? 'true' : 'false' ?>"
                            aria-controls="<?= $sectionId ?>">
                            <?= htmlspecialchars($title) ?>
                        </button>
                    </h2>
                    <div
                        id="<?= $sectionId ?>"
                        class="accordion-collapse collapse<?= $isFirst ? ' show' : '' ?>"
                        aria-labelledby="headingSobre<?= $sectionIndex ?>"
                        data-bs-parent="#accordionSobre">
                        <div class="accordion-body">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section>
        <h2>Vamos conversar</h2>
        <hr>
        <div class="row center">
            <div class="col-3">
                <h3>Envie-me uma mensagem</h3>
                <p>Entre em contato através do meu email ou pelas redes sociais.</p>
            </div>
            <div class="col-3">
                <h3>Agende uma reunião</h3>
                <p>Marque uma videochamada para discutirmos o seu projeto.</p>
            </div>
            <div class="col-3">
                <h3>Receba uma proposta</h3>
                <p>Farei uma análise do seu projeto e enviarei uma proposta personalizada.</p>
            </div>
        </div>

        <div class="center">
            <a href="contacto.php" class="btn btn-secondary cta">Contacte-me</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
