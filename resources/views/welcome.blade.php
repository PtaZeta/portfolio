<!DOCTYPE html>
<html lang="es" id="htmlRoot">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Desarrollador Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a0a2e 50%, #16213e 100%);
            color: #e0e0e0;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        /* Language Selector */
        .lang-selector {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            gap: 10px;
        }
        
        .lang-btn {
            padding: 8px 16px;
            border: 2px solid #7209b7;
            background: transparent;
            color: #c77dff;
            cursor: pointer;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }
        
        .lang-btn.active {
            background: linear-gradient(135deg, #9d4edd, #7209b7);
            color: #00f5ff;
            box-shadow: 0 0 20px #9d4edd;
            transform: scale(1.05);
        }
        
        .lang-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(114, 9, 183, 0.5);
        }
        
        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.15;
            animation: float 8s ease-in-out infinite;
        }
        
        .orb1 {
            width: 400px;
            height: 400px;
            background: #9d4edd;
            top: -100px;
            left: -100px;
        }
        
        .orb2 {
            width: 300px;
            height: 300px;
            background: #7209b7;
            bottom: -100px;
            right: -100px;
            animation-delay: 2s;
        }
        
        .orb3 {
            width: 250px;
            height: 250px;
            background: #00f5ff;
            top: 50%;
            right: 10%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(30px, -30px); }
        }
        
        /* Header */
        header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease;
        }
        
        .profile-section {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            animation: fadeInDown 1s ease;
        }
        
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #9d4edd;
            object-fit: cover;
            box-shadow: 0 0 30px #9d4edd, inset 0 0 30px rgba(156, 78, 221, 0.2);
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #7209b7, #3a0ca3);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .profile-pic svg {
            width: 80%;
            height: 80%;
            filter: opacity(0.9);
        }
        
        .profile-pic:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px #00f5ff, inset 0 0 30px rgba(0, 245, 255, 0.2);
            filter: brightness(1.2);
        }
        
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        h1 {
            font-size: 3.5rem;
            color: #c77dff;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
            font-weight: 800;
            text-shadow: 0 0 20px rgba(156, 78, 221, 0.5), 0 0 40px rgba(199, 125, 255, 0.3);
        }
        
        .subtitle {
            font-size: 1.3rem;
            color: #b5a3ff;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.2s both;
            font-weight: 600;
        }
        
        .bio {
            max-width: 600px;
            margin: 0 auto 40px;
            color: #c0c0c0;
            line-height: 1.8;
            animation: fadeInUp 1s ease 0.4s both;
        }
        
        .section-title {
            font-size: 2rem;
            color: #c77dff;
            margin: 30px 0 24px;
            text-align: center;
            text-shadow: 0 0 18px rgba(156, 78, 221, 0.4);
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 64px;
            margin-bottom: 80px;
        }
        
        .project-card {
            background: transparent;
            border-radius: 0;
            padding: 32px 0;
            transition: all 0.3s ease;
            animation: slideInUp 0.8s ease both;
            position: relative;
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 36px;
            align-items: center;
            box-shadow: none;
            max-width: 980px;
        }

        .project-card:nth-child(odd) {
            justify-self: start;
        }

        .project-card:nth-child(even) {
            justify-self: end;
        }

        .project-card.featured {
            box-shadow: none;
        }

        .project-media {
            width: 100%;
        }

        .project-media img {
            width: 100%;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 10px 26px rgba(114, 9, 183, 0.22);
            display: block;
        }

        .project-content {
            display: flex;
            flex-direction: column;
        }
        
        .project-card:nth-child(1) { animation-delay: 0.2s; }
        .project-card:nth-child(2) { animation-delay: 0.4s; }
        .project-card:nth-child(3) { animation-delay: 0.6s; }
        .project-card:nth-child(4) { animation-delay: 0.8s; }
        
        .project-card:hover {
            transform: translateY(-6px);
        }

        .project-card:nth-child(even) .project-media {
            order: 2;
        }

        .project-card:nth-child(even) .project-content {
            order: 1;
        }
        
        .project-title {
            font-size: 1.5rem;
            color: #00f5ff;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .project-desc {
            color: #a0a0a0;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tech-chip {
            padding: 6px 12px;
            background: rgba(114, 9, 183, 0.2);
            border-radius: 999px;
            color: #c77dff;
            font-size: 0.85rem;
            border: 1px solid rgba(114, 9, 183, 0.4);
        }
        
        .project-link {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(135deg, #9d4edd, #7209b7);
            color: #00f5ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }
        
        .project-link:hover {
            box-shadow: 0 0 20px #9d4edd;
            transform: scale(1.05);
            color: #ffffff;
        }

        /* Skills */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
            margin-bottom: 80px;
        }

        .skill-card {
            position: relative;
            border-radius: 24px;
            padding: 30px 22px 26px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            display: grid;
            gap: 10px;
            justify-items: center;
        }

        .skill-card::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 26px;
            background: conic-gradient(
                from 0deg,
                rgba(0, 245, 255, 0.6),
                rgba(157, 78, 221, 0.7),
                rgba(255, 0, 110, 0.5),
                rgba(0, 245, 255, 0.6)
            );
            opacity: 0.25;
            animation: spinSlow 12s linear infinite;
        }

        .skill-card::after {
            content: '';
            position: absolute;
            inset: 3px;
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(12, 12, 24, 0.9), rgba(8, 8, 18, 0.85));
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.35);
        }

        .skill-card > * {
            position: relative;
            z-index: 1;
        }

        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0, 245, 255, 0.18);
        }

        .skill-icon {
            width: 92px;
            height: 92px;
            border-radius: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(114, 9, 183, 0.35);
        }

        .skill-icon img {
            width: 70%;
            height: 70%;
            object-fit: contain;
        }

        .skill-name {
            font-weight: 700;
            color: #c77dff;
            letter-spacing: 0.4px;
        }

        .skill-level-text {
            color: #a0a0a0;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        .skill-stars {
            display: inline-flex;
            gap: 5px;
        }

        .skill-stars .star {
            font-size: 1.05rem;
            color: rgba(255, 255, 255, 0.2);
        }

        .skill-stars .star.filled {
            color: #ffcc66;
            text-shadow: 0 0 8px rgba(255, 204, 102, 0.5);
        }

        /* CV Section */
        .cv-section {
            margin-bottom: 80px;
        }

        .cv-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .cv-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .cv-category {
            animation: slideInUp 0.8s ease both;
        }

        .cv-category:nth-child(1) { animation-delay: 0.2s; }
        .cv-category:nth-child(2) { animation-delay: 0.4s; }
        .cv-category:nth-child(3) { animation-delay: 0.6s; }
        .cv-category:nth-child(4) { animation-delay: 0.8s; }

        .cv-category-title {
            font-size: 1.2rem;
            color: #00f5ff;
            margin-bottom: 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cv-item {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(114, 9, 183, 0.3);
        }

        .cv-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .cv-item-title {
            font-size: 1.05rem;
            color: #c77dff;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .cv-item-subtitle {
            font-size: 0.9rem;
            color: #a0a0a0;
            margin-bottom: 8px;
            font-style: italic;
        }

        .cv-item-desc {
            font-size: 0.95rem;
            color: #808080;
            line-height: 1.6;
        }

        .cv-contact {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .cv-contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #a0a0a0;
            font-size: 0.95rem;
        }

        .cv-contact-icon {
            color: #c77dff;
            font-weight: bold;
            min-width: 20px;
        }

        .cv-contact-link {
            color: #c77dff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .cv-contact-link:hover {
            color: #00f5ff;
            text-shadow: 0 0 10px #00f5ff;
        }
        
        /* Hidden content */
        .hidden {
            display: none;
        }
        
        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spinSlow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        @keyframes gradientShift {
            0%, 100% {
                background: linear-gradient(135deg, #9d4edd, #c77dff, #00f5ff);
            }
            50% {
                background: linear-gradient(135deg, #7209b7, #9d4edd, #ff006e);
            }
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid #7209b7;
            color: #808080;
            animation: fadeInUp 1s ease 0.6s both;
        }
        
        footer a {
            color: #c77dff;
            text-decoration: none;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        footer a:hover {
            color: #00f5ff;
            text-shadow: 0 0 10px #00f5ff;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .project-card {
                grid-template-columns: 1fr;
                padding: 28px;
            }

            .project-card:nth-child(even) .project-media,
            .project-card:nth-child(even) .project-content {
                order: unset;
            }
            
            .lang-selector {
                top: 10px;
                right: 10px;
            }
            
            .lang-btn {
                padding: 6px 12px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="animated-bg">
        <div class="orb orb1"></div>
        <div class="orb orb2"></div>
        <div class="orb orb3"></div>
    </div>

    <div class="lang-selector">
        <button class="lang-btn active" onclick="setLanguage('es')">ES</button>
        <button class="lang-btn" onclick="setLanguage('en')">EN</button>
    </div>

    <div class="container">
        <!-- Spanish Version -->
        <div id="es-content">
            <header>
                <div class="profile-section">
                    <div class="profile-pic" id="profile-es">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="35" r="20" fill="#9d4edd"/>
                            <ellipse cx="50" cy="75" rx="28" ry="22" fill="#9d4edd"/>
                        </svg>
                    </div>
                </div>
                <h1>José Manuel Rodríguez Lorenzo</h1>
                <p class="subtitle">Desarrollador Web</p>
                <p class="bio">
                    Soy un chaval de 21 años con experiencia laboral y vocacion por la informatica. Bueno trabajando en equipo y en solitario, puntual y dispuesto a darlo todo a diario. 
                    Con conocimiento avanzado en frameworks PHP y desarrollo web, transformo ideas en soluciones digitales de impacto.
                </p>
            </header>

            <h2 class="section-title">Proyectos Destacados</h2>
            <div class="projects-grid">
                <div class="project-card featured">
                    <div class="project-media">
                        <img src="/images/projects/loopz.jpg" alt="LoopZ - Captura">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">LoopZ</h3>
                        <p class="project-desc">Proyecto Final de Grado. Plataforma de streaming de música con implementación técnica profunda y diseño cuidadosamente elaborado.</p>
                        <div class="project-tech">
                            <span class="tech-chip">Laravel</span>
                            <span class="tech-chip">React</span>
                            <span class="tech-chip">PostgreSQL</span>
                        </div>
                        <a href="https://loopz.up.railway.app/" class="project-link" target="_blank">Ver Proyecto</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-media">
                        <img src="/images/projects/elixir.jpg" alt="Elixir - Captura">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Elixir</h3>
                        <p class="project-desc">Rebranding de página web de moda. Rediseño completo de una plataforma de ecommerce con interfaz moderna y experiencia de usuario optimizada.</p>
                        <div class="project-tech">
                            <span class="tech-chip">HTML</span>
                            <span class="tech-chip">CSS</span>
                        </div>
                        <a href="https://elixir-zet4.up.railway.app/" class="project-link" target="_blank">Ver Proyecto</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-media">
                        <img src="/images/projects/streamer.jpg" alt="Pagina Streamer - Captura">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Pagina Streamer</h3>
                        <p class="project-desc">Proyecto streaming con integracion de APIs externas. Implementacion de consumo de datos en tiempo real y gestion de recursos multimedia.</p>
                        <div class="project-tech">
                            <span class="tech-chip">Laravel</span>
                            <span class="tech-chip">PostgreSQL</span>
                        </div>
                        <a href="https://ptazet4-production.up.railway.app/" class="project-link" target="_blank">Ver Proyecto</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-media">
                        <img src="/images/projects/2048.jpg" alt="Juego 2048 - Captura">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Juego 2048</h3>
                        <p class="project-desc">Aplicacion interactiva que demuestra habilidades tecnicas en JavaScript sencillas. Implementacion de logica de juego y manejo de eventos.</p>
                        <div class="project-tech">
                            <span class="tech-chip">HTML</span>
                            <span class="tech-chip">CSS</span>
                            <span class="tech-chip">JavaScript</span>
                        </div>
                        <a href="https://2048-zet4.up.railway.app/" class="project-link" target="_blank">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Habilidades</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/html.png" alt="HTML">
                    </div>
                    <div class="skill-name">HTML</div>
                    <div class="skill-level-text">Avanzado</div>
                    <div class="skill-stars" title="Avanzado">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/css.png" alt="CSS">
                    </div>
                    <div class="skill-name">CSS</div>
                    <div class="skill-level-text">Avanzado</div>
                    <div class="skill-stars" title="Avanzado">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/javascript.png" alt="JavaScript">
                    </div>
                    <div class="skill-name">JavaScript</div>
                    <div class="skill-level-text">Intermedio</div>
                    <div class="skill-stars" title="Intermedio">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/php.png" alt="PHP">
                    </div>
                    <div class="skill-name">PHP</div>
                    <div class="skill-level-text">Experto</div>
                    <div class="skill-stars" title="Experto">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/laravel.png" alt="Laravel">
                    </div>
                    <div class="skill-name">Laravel</div>
                    <div class="skill-level-text">Experto</div>
                    <div class="skill-stars" title="Experto">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/react.png" alt="React">
                    </div>
                    <div class="skill-name">React</div>
                    <div class="skill-level-text">Avanzado</div>
                    <div class="skill-stars" title="Avanzado">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/yii.png" alt="Yii">
                    </div>
                    <div class="skill-name">Yii</div>
                    <div class="skill-level-text">Avanzado</div>
                    <div class="skill-stars" title="Avanzado">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/postgresql.png" alt="PostgreSQL">
                    </div>
                    <div class="skill-name">PostgreSQL</div>
                    <div class="skill-level-text">Experto</div>
                    <div class="skill-stars" title="Experto">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Currículum</h2>
            <div class="cv-section">
                <div class="cv-container">
                    <div class="cv-grid">
                        <div class="cv-category">
                            <div class="cv-category-title">Educación</div>
                            <div class="cv-item">
                                <div class="cv-item-title">Educación Secundaria Obligatoria</div>
                                <div class="cv-item-subtitle">IES Salmedina, 2015-2019</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Grado Medio Sistemas Microinformáticos y Redes</div>
                                <div class="cv-item-subtitle">IES Salmedina, 2019-2022</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Grado Superior Desarrollo de Aplicaciones Web</div>
                                <div class="cv-item-subtitle">IES Doñana, 2022-2025</div>
                                <div class="cv-item-desc">Formación especializada en desarrollo web full-stack con frameworks PHP (Yii y Laravel) y tecnologías modernas.</div>
                            </div>
                        </div>

                        <div class="cv-category">
                            <div class="cv-category-title">Experiencia</div>
                            <div class="cv-item">
                                <div class="cv-item-title">Camarero</div>
                                <div class="cv-item-subtitle">Heladería Manolín (Junio 2023 - Septiembre 2023 | Junio 2024 - Septiembre 2024)</div>
                                <div class="cv-item-desc">Trabajando principalmente en barra, recepción, reponedor, etc. Experiencia en atención al cliente y trabajo en equipo.</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Informático - Prácticas</div>
                                <div class="cv-item-subtitle">Neoteck Chipiona (Marzo 2022 - Julio 2022)</div>
                                <div class="cv-item-desc">Prácticas formativas: dependiente de tienda, creación de páginas webs, arreglo de equipos informáticos y ordenadores.</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Desarrollador Web - Prácticas</div>
                                <div class="cv-item-subtitle">Ayuntamiento Sanlúcar de Barrameda (Marzo 2025 - Junio 2025)</div>
                                <div class="cv-item-desc">Prácticas Grado Superior: creación de página web y colaboración con departamento informático del ayuntamiento.</div>
                            </div>
                        </div>

                        <div class="cv-category">
                            <div class="cv-category-title">Habilidades</div>
                            <div class="cv-item">
                                <div class="cv-item-title">Actitudinal</div>
                                <div class="cv-item-desc">✓ Trabajador<br>✓ Soltura al hablar con el público<br>✓ Bueno trabajando en equipo<br>✓ Puntual y comprometido</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Técnicas</div>
                                <div class="cv-item-desc">✓ Conocimiento avanzado en frameworks PHP (Yii y Laravel)<br>✓ HTML, CSS y JavaScript avanzado<br>✓ Conocimiento medio en Java, Python y MarkDown</div>
                            </div>
                        </div>

                        <div class="cv-category">
                            <div class="cv-category-title">Contacto</div>
                            <div class="cv-contact">
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">📧</span>
                                    <a href="mailto:ptazet4@gmail.com" class="cv-contact-link">ptazet4@gmail.com</a>
                                </div>
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">📱</span>
                                    <a href="tel:+34627864884" class="cv-contact-link">+34 627 864 884</a>
                                </div>
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">📍</span>
                                    <span>Calle Virgen de Palomares 21 1ºC, España</span>
                                </div>
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">💼</span>
                                    <a href="https://github.com/ptazeta" class="cv-contact-link">GitHub - ptazeta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <p>&copy; 2024 Desarrollado con ❤️ | Todos los derechos reservados</p>
            </footer>
        </div>

        <!-- English Version -->
        <div id="en-content" class="hidden">
            <header>
                <div class="profile-section">
                    <div class="profile-pic" id="profile-en">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="35" r="20" fill="#9d4edd"/>
                            <ellipse cx="50" cy="75" rx="28" ry="22" fill="#9d4edd"/>
                        </svg>
                    </div>
                </div>
                <h1>José Manuel Rodríguez Lorenzo</h1>
                <p class="subtitle">Web Developer</p>
                <p class="bio">
                    I'm a 21-year-old looking for my first job as an IT professional. Good at working in teams and independently, punctual and always willing to do my best. 
                    With advanced knowledge in PHP frameworks and web development, I transform ideas into impactful digital solutions.
                </p>
            </header>

            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card featured">
                    <div class="project-media">
                        <img src="/images/projects/loopz.jpg" alt="LoopZ - Screenshot">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">LoopZ</h3>
                        <p class="project-desc">Final Degree Project. Music streaming platform with deep technical implementation and carefully designed interface.</p>
                        <div class="project-tech">
                            <span class="tech-chip">Laravel</span>
                            <span class="tech-chip">React</span>
                            <span class="tech-chip">PostgreSQL</span>
                        </div>
                        <a href="https://loopz.up.railway.app/" class="project-link" target="_blank">View Project</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-media">
                        <img src="/images/projects/elixir.jpg" alt="Elixir - Screenshot">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Elixir</h3>
                        <p class="project-desc">Rebranding of a fashion website. Complete redesign of an ecommerce platform with modern interface and optimized user experience.</p>
                        <div class="project-tech">
                            <span class="tech-chip">HTML</span>
                            <span class="tech-chip">CSS</span>
                        </div>
                        <a href="https://elixir-zet4.up.railway.app/" class="project-link" target="_blank">View Project</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-media">
                        <img src="/images/projects/streamer.jpg" alt="Streamer Page - Screenshot">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Streamer Page</h3>
                        <p class="project-desc">Streaming project with external API integration. Implementation of real-time data consumption and multimedia resource management.</p>
                        <div class="project-tech">
                            <span class="tech-chip">Laravel</span>
                            <span class="tech-chip">PostgreSQL</span>
                        </div>
                        <a href="https://ptazet4-production.up.railway.app/" class="project-link" target="_blank">View Project</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-media">
                        <img src="/images/projects/2048.jpg" alt="2048 Game - Screenshot">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">2048 Game</h3>
                        <p class="project-desc">Interactive application demonstrating simple JavaScript technical skills. Implementation of game logic and event handling.</p>
                        <div class="project-tech">
                            <span class="tech-chip">HTML</span>
                            <span class="tech-chip">CSS</span>
                            <span class="tech-chip">JavaScript</span>
                        </div>
                        <a href="https://2048-zet4.up.railway.app/" class="project-link" target="_blank">View Project</a>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/html.png" alt="HTML">
                    </div>
                    <div class="skill-name">HTML</div>
                    <div class="skill-level-text">Advanced</div>
                    <div class="skill-stars" title="Advanced">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/css.png" alt="CSS">
                    </div>
                    <div class="skill-name">CSS</div>
                    <div class="skill-level-text">Advanced</div>
                    <div class="skill-stars" title="Advanced">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/javascript.png" alt="JavaScript">
                    </div>
                    <div class="skill-name">JavaScript</div>
                    <div class="skill-level-text">Intermediate</div>
                    <div class="skill-stars" title="Intermediate">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/php.png" alt="PHP">
                    </div>
                    <div class="skill-name">PHP</div>
                    <div class="skill-level-text">Expert</div>
                    <div class="skill-stars" title="Expert">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/laravel.png" alt="Laravel">
                    </div>
                    <div class="skill-name">Laravel</div>
                    <div class="skill-level-text">Expert</div>
                    <div class="skill-stars" title="Expert">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/react.png" alt="React">
                    </div>
                    <div class="skill-name">React</div>
                    <div class="skill-level-text">Advanced</div>
                    <div class="skill-stars" title="Advanced">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/yii.png" alt="Yii">
                    </div>
                    <div class="skill-name">Yii</div>
                    <div class="skill-level-text">Advanced</div>
                    <div class="skill-stars" title="Advanced">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="/images/skills/postgresql.png" alt="PostgreSQL">
                    </div>
                    <div class="skill-name">PostgreSQL</div>
                    <div class="skill-level-text">Expert</div>
                    <div class="skill-stars" title="Expert">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Curriculum</h2>
            <div class="cv-section">
                <div class="cv-container">
                    <div class="cv-grid">
                        <div class="cv-category">
                            <div class="cv-category-title">Education</div>
                            <div class="cv-item">
                                <div class="cv-item-title">Secondary Education</div>
                                <div class="cv-item-subtitle">IES Salmedina, 2015-2019</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Intermediate Degree Microcomputer Systems and Networks</div>
                                <div class="cv-item-subtitle">IES Salmedina, 2019-2022</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Advanced Degree Web Application Development</div>
                                <div class="cv-item-subtitle">IES Doñana, 2022-2025</div>
                                <div class="cv-item-desc">Specialized training in full-stack web development with PHP frameworks (Yii and Laravel) and modern technologies.</div>
                            </div>
                        </div>

                        <div class="cv-category">
                            <div class="cv-category-title">Experience</div>
                            <div class="cv-item">
                                <div class="cv-item-title">Waiter</div>
                                <div class="cv-item-subtitle">Heladería Manolín (June 2023 - September 2023 | June 2024 - September 2024 | June 2025 - September 2025)</div>
                                <div class="cv-item-desc">Mainly bar service, reception, restocking, etc. Experience in customer service and teamwork.</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">IT Technician - Internship</div>
                                <div class="cv-item-subtitle">Neoteck Chipiona (March 2022 - July 2022)</div>
                                <div class="cv-item-desc">Training internship: shop assistant, web page creation, computer and equipment repair.</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Web Developer - Internship</div>
                                <div class="cv-item-subtitle">Municipality Sanlúcar de Barrameda (March 2025 - June 2025)</div>
                                <div class="cv-item-desc">Advanced Degree internship: web page creation and collaboration with municipal IT department.</div>
                            </div>
                        </div>

                        <div class="cv-category">
                            <div class="cv-category-title">Skills</div>
                            <div class="cv-item">
                                <div class="cv-item-title">Attitude</div>
                                <div class="cv-item-desc">✓ Hardworking<br>✓ Comfortable speaking with public<br>✓ Good at teamwork<br>✓ Punctual and committed</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-item-title">Technical</div>
                                <div class="cv-item-desc">✓ Advanced knowledge in PHP frameworks (Yii and Laravel)<br>✓ Advanced HTML, CSS and JavaScript<br>✓ Intermediate knowledge in Java, Python and MarkDown</div>
                            </div>
                        </div>

                        <div class="cv-category">
                            <div class="cv-category-title">Contact</div>
                            <div class="cv-contact">
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">📧</span>
                                    <a href="mailto:ptazet4@gmail.com" class="cv-contact-link">ptazet4@gmail.com</a>
                                </div>
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">📱</span>
                                    <a href="tel:+34627864884" class="cv-contact-link">+34 627 864 884</a>
                                </div>
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">📍</span>
                                    <span>Calle Virgen de Palomares 21 1ºC, Spain</span>
                                </div>
                                <div class="cv-contact-item">
                                    <span class="cv-contact-icon">💼</span>
                                    <a href="https://github.com/ptazeta" class="cv-contact-link">GitHub - ptazeta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <p>&copy; 2024 Developed with ❤️ | All rights reserved</p>
            </footer>
        </div>
    </div>

    <script>
        function setLanguage(lang) {
            const esBtn = document.querySelectorAll('.lang-btn')[0];
            const enBtn = document.querySelectorAll('.lang-btn')[1];
            const esContent = document.getElementById('es-content');
            const enContent = document.getElementById('en-content');

            if (lang === 'es') {
                esBtn.classList.add('active');
                enBtn.classList.remove('active');
                esContent.classList.remove('hidden');
                enContent.classList.add('hidden');
            } else {
                enBtn.classList.add('active');
                esBtn.classList.remove('active');
                enContent.classList.remove('hidden');
                esContent.classList.add('hidden');
            }
        }

        // Cargar imagen de perfil si existe
        window.addEventListener('DOMContentLoaded', function() {
            const imageUrls = ['/images/profile.jpg', '/images/profile.png', '/img/profile.jpg'];
            
            function checkAndLoadImage() {
                for (let url of imageUrls) {
                    fetch(url, { method: 'HEAD' }).then(res => {
                        if (res.ok) {
                            const profileEsEl = document.getElementById('profile-es');
                            const profileEnEl = document.getElementById('profile-en');
                            if (profileEsEl) {
                                profileEsEl.innerHTML = `<img src="${url}" alt="José Manuel Rodríguez Lorenzo">`;
                            }
                            if (profileEnEl) {
                                profileEnEl.innerHTML = `<img src="${url}" alt="José Manuel Rodríguez Lorenzo">`;
                            }
                        }
                    }).catch(err => {
                        // Ignorar errores
                    });
                }
            }
            
            checkAndLoadImage();
        });
    </script>
</body>
</html>
