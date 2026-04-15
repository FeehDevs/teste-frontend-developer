<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabiliza+</title>

    <link rel="stylesheet" href="../frontend/css/main.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-container">
            <img src="" alt="Logo da marca">

            <nav class="header-nav">
                <a href="#about" class="nav-link">Quem Somos</a>
                <a href="#services" class="nav-link">Benefícios</a>
                <a href="#faq" class="nav-link">Dúvidas</a>
            </nav>

            <a href="#contact" class="btn cta-link">Cadastro</a>
        </div>
    </header>

    <main>

        <!-- HERO -->
        <section class="hero" data-animate="fade-up">
            <div class="hero-container">
                <div class="hero-text" data-animate="fade-up">
                    <h1>Soluções contábeis para seu negócio</h1>
                    <p>Organize suas finanças, reduza burocracias e cresça com mais segurança.</p>

                    <a href="#contact" class="btn cta-link">Começar agora</a>
                </div>

                <div class="hero-image" data-animate="fade-up">
                    <!-- imagem aqui -->
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about" id="about" data-animate="fade-up">
            <div class="about-container">
                <div class="about-card">Serviço 1</div>
                <div class="about-card">Serviço 2</div>
                <div class="about-card">Serviço 3</div>
            </div>
        </section>

        <!-- HIGHLIGHT -->
        <section class="highlight" data-animate="fade-up">
            <div class="highlight-container">
                <h2>Mais de 500 empresas atendidas</h2>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services" id="services" data-animate="fade-up">
            <div class="services-container">
                <div class="services-card">Item</div>
                <div class="services-card">Item</div>
                <div class="services-card">Item</div>
                <div class="services-card">Item</div>
                <div class="services-card">Item</div>
                <div class="services-card">Item</div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="faq" id="faq" data-animate="fade-up">
            <div class="faq-container">
                <div class="faq-logo">Logo Inteira</div>

                <ul class="faq-list">
                    <li class="faq-item">Pergunta 1</li>
                    <li class="faq-item">Pergunta 2</li>
                    <li class="faq-item">Pergunta 3</li>
                </ul>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact" id="contact" data-animate="fade-up">
            <div class="contact-container">
                <h2>Fale com a gente</h2>

                <form class="contact-form" action="../backend/handlers/contact-handler.php" method="POST">
                    <input class="contact-input" type="text" name="name" placeholder="Seu nome" required>

                    <input class="contact-input" type="email" name="email" placeholder="Seu e-mail" required>

                    <input class="contact-input" type="tel" name="phone" placeholder="Seu telefone" required>

                    <textarea class="contact-textarea" name="message" placeholder="Digite sua mensagem"
                        required></textarea>

                    <button class="contact-button" type="submit">Enviar</button>
                </form>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <p>© 2026 Contabiliza+ - Todos os direitos reservados</p>
        </div>
    </footer>

</body>

</html>