<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MF ZOVO - Serviços Profissionais de Desinfecção</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #00ff00;
            --primary-dark: #00dd00;
            --background: #0a0a0a;
            --text: #ffffff;
            --card-bg: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text);
            line-height: 1.6;
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        header {
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            width: 100%;
            z-index: 1000;
            padding: 1rem;
            transition: all 0.3s ease;
        }

        header.scrolled {
            background-color: rgba(0, 0, 0, 0.95);
            box-shadow: 0 2px 10px rgba(0, 255, 0, 0.2);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: var(--primary);
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }

        .menu {
            display: flex;
            gap: 2rem;
        }

        .menu a {
            color: var(--text);
            text-decoration: none;
            transition: all 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 500;
        }

        .menu a:hover {
            color: var(--primary);
            background: rgba(0, 255, 0, 0.1);
            box-shadow: 0 0 15px rgba(0, 255, 0, 0.3);
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('img/000.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            filter: brightness(0.6);
            z-index: -1;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.6);
            padding: 3rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            max-width: 800px;
            margin: 0 1rem;
            border: 1px solid rgba(0, 255, 0, 0.2);
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
            text-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #cccccc;
        }

        .section {
            padding: 6rem 2rem;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 255, 0, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 255, 0, 0.2);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .cta-section {
            background: linear-gradient(45deg, #000000, #1a1a1a);
            text-align: center;
            padding: 6rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%2300ff00" fill-opacity="0.05" fill-rule="evenodd"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');
            z-index: 0;
        }

        .button {
            display: inline-block;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            margin: 1rem;
            border: 2px solid transparent;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .button-primary {
            background-color: var(--primary);
            color: var(--background);
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.4);
        }

        .button-primary:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05) translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 255, 0, 0.6);
        }

        h2 {
            font-size: 2.8rem;
            margin-bottom: 2rem;
            color: var(--primary);
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
            position: relative;
            display: inline-block;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: var(--primary);
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }

        footer {
            background-color: #000;
            color: var(--text);
            text-align: center;
            padding: 3rem 2rem;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--primary), transparent);
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 1rem;
            }

            .menu {
                flex-direction: column;
                align-items: center;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div id="particles-js" class="particles"></div>

    <header>
        <nav>
            <div class="logo">MF ZOVO</div>
            
            <div class="menu">
                
            
                <a href="CELS.HTML.HTML">Home</a>
                <a href="servicos.html">Serviços</a>
                <a href="contato.html">Contato</a>
                <a href="sobre.html">Sobre Nós</a>
                
            </div>
            
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Serviços Profissionais de Desinfecção</h1>
                <p>Proteção e segurança para sua casa ou empresa com a qualidade MF ZOVO</p>
                <a href="https://wa.me/244936930532?text=Puxa%20para%20negociar" class="button button-primary">Solicite um Orçamento Gratuito</a>
            </div>
        </section>

        <section id="servicos" class="section">
            <div class="container">
                <h2>Nossos Serviços</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <h3>Desinfecção Residencial</h3>
                        <p>Proteja sua família com nossos serviços especializados de desinfecção para ambientes residenciais.</p>
                    </div>
                    <div class="service-card">
                        <h3>Desinfecção Comercial</h3>
                        <p>Mantenha seu ambiente de trabalho seguro e livre de contaminações com nossa expertise profissional.</p>
                    </div>
                    <div class="service-card">
                        <h3>Controle de Pragas</h3>
                        <p>Eliminação eficiente de pragas com produtos de alta qualidade e técnicas avançadas.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta-section">
            <div class="container">
                <h2>Por que escolher a MF ZOVO?</h2>
                <p>• Profissionais altamente treinados e certificados</p>
                <p>• Equipamentos de última geração</p>
                <p>• Produtos seguros e eficazes</p>
                <p>• Atendimento personalizado</p>
                <a href="contato.html" class="button button-primary">Solicite um Orçamento</a>
            </div>
        </section>

        <section id="sobre" class="section">
            <div class="container">
                <h2>Nossa Expertise</h2>
                <p>A MF ZOVO é especializada em serviços de desinfecção e controle de pragas, utilizando as mais avançadas técnicas e equipamentos do mercado. Nossa equipe é composta por profissionais altamente qualificados, comprometidos com a segurança e satisfação de nossos clientes.</p>
                <p>Realizamos um trabalho minucioso e eficiente, garantindo a eliminação completa de pragas e a desinfecção adequada de todos os ambientes.</p>
            </div>
        </section>
    </main>

    <footer id="contato">
        <div class="container">
            <h2>Entre em Contato</h2>
            <p>MF ZOVO - Serviços Profissionais de Desinfecção</p>
            <p>Telefone: 936930532</p>
            <p>Email: contato@mfzovo.com</p>
            <p>&copy; <script>document.write(new Date().getFullYear())</script> MF ZOVO. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#00ff00" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: "#00ff00", opacity: 0.4, width: 1 },
                move: { enable: true, speed: 2, direction: "none", random: true, out_mode: "out" }
            },
            interactivity: {
                detect_on: "canvas",
                events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: true, mode: "push" } },
                modes: { repulse: { distance: 100, duration: 0.4 }, push: { particles_nb: 4 } }
            },
            retina_detect: true
        });

        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</body>
</html>Celson Famoroso