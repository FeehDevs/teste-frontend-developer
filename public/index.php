<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabiliza+</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/main.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-container">
            <a href="/" class="header-logo-link">
                <img src="/frontend/assets/logos/logo-text.svg" alt="Contabiliza+" class="logo logo-desktop">

                <img src="/frontend/assets/logos/logo-icon.svg" alt="Contabiliza+" class="logo logo-mobile">
            </a>

            <nav class="header-nav">
                <a href="#about" class="nav-link">Quem Somos</a>
                <a href="#services" class="nav-link">Benefícios</a>
                <a href="#faq" class="nav-link">Dúvidas</a>
            </nav>

            <a href="#contact" class="btn header-cta">Cadastro</a>

            <button class="hamburger" type="button" aria-label="Abrir menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>

        <!-- HERO -->
        <section class="hero">
            <div class="hero-container">
                <div class="hero-text">
                    <span class="hero-badge">Contabilidade digital para empresas modernas</span>

                    <h1>
                        Simplifique sua contabilidade e foque no crescimento
                    </h1>

                    <p>
                        Cuidamos da parte burocrática para você ter mais tempo para seu negócio,
                        com organização, clareza e suporte especializado.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="btn cta-link">Começar agora</a>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="/frontend/assets/images/mockup.png" alt="Mockup do aplicativo Contabiliza+">
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about" id="about">
            <div class="about-container">
                <div class="about-heading">
                    <span class="about-badge">Quem Somos</span>
                    <h2 class="section-title">Uma contabilidade mais próxima, clara e estratégica</h2>
                    <p class="section-description">
                        Ajudamos empresas a organizarem sua rotina financeira com mais agilidade,
                        suporte e visão de crescimento.
                    </p>
                </div>

                <div class="about-carousel">
                    <div class="about-track">

                        <article class="about-card">
                            <div class="about-card__icon">
                                <img src="/frontend/assets/icons/icon-coin.svg" alt="Ícone de atendimento próximo">
                            </div>

                            <div class="about-card__content">
                                <h3>Atendimento próximo</h3>
                                <p>Suporte humanizado para acompanhar as necessidades do seu negócio.</p>
                            </div>
                        </article>

                        <article class="about-card">
                            <div class="about-card__icon">
                                <img src="/frontend/assets/icons/icon-coin.svg" alt="Ícone de organização financeira">
                            </div>

                            <div class="about-card__content">
                                <h3>Organização financeira</h3>
                                <p>Mais clareza sobre obrigações, prazos e rotinas contábeis.</p>
                            </div>
                        </article>

                        <article class="about-card">
                            <div class="about-card__icon">
                                <img src="/frontend/assets/icons/icon-coin.svg" alt="Ícone de visão estratégica">
                            </div>

                            <div class="about-card__content">
                                <h3>Visão estratégica</h3>
                                <p>Dados organizados para ajudar sua empresa a crescer com segurança.</p>
                            </div>
                        </article>

                        <article class="about-card">
                            <div class="about-card__icon">
                                <img src="/frontend/assets/icons/icon-coin.svg" alt="Ícone de processos modernos">
                            </div>

                            <div class="about-card__content">
                                <h3>Processos modernos</h3>
                                <p>Digitalização e praticidade para reduzir burocracia no dia a dia.</p>
                            </div>
                        </article>

                        <article class="about-card">
                            <div class="about-card__icon">
                                <img src="/frontend/assets/icons/icon-coin.svg"
                                    alt="Ícone de confiança e transparência">
                            </div>

                            <div class="about-card__content">
                                <h3>Confiança e transparência</h3>
                                <p>Comunicação clara para você entender cada etapa do processo.</p>
                            </div>
                        </article>

                    </div>
                </div>
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

    <script defer src="/frontend/js/main.js"></script>
</body>

</html>