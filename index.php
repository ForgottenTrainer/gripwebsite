<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica GRIP</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                Clinica GRIP<i class='bx bxs-heart' ></i>
            </a>
            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#inicio" class="nav__link active-link">
                            <i class='bx bx-home-alt-2' ></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bxs-heart' ></i>
                            <span>Acerca de nosotros</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#value" class="nav__link">
                            <i class='bx bxs-award' ></i>
                            <span>Logros</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bxs-contact' ></i>
                            <span>Contactanos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <i class='bx bx-moon change-theme' id="theme-button"></i>

            <a href="pages/blog.php" class="button nav__button">
                Visita nuestro Blog
            </a>
        </nav>
    </header>

    <main class="main">
        <section class="home section" id="inicio">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Gestion en resiliencia <br> e intervencion <br> Psicologica
                    </h1>
                    <p class="home__description">
                        Atencion Psicologica con perspectiva de derechos humanos <br>
                        y genero desde la psicotraumatologia para la resiliencia <br>
                        en Playa del Carmen.
                    </p>
                    <form action="" class="home__search" method="post">
                        <i class='bx bxs-map'></i>
                        <input type="search" class="home__search-input" placeholder="Buscar locacion"/>
                        <button class="button">Enviar</button>
                    </form>
                    <div class="home__value">
                        <div class="">
                            <h1 class="home__value-number">
                                9k <span>+</span>
                            </h1>
                            <span class="home__value-description">Personas <br> atendidas</span>
                        </div>
                        <div class="">
                            <h1 class="home__value-number">
                                2k <span>+</span>
                            </h1>
                            <span class="home__value-description">Horas <br> consultadas</span>
                        </div>
                        <div class="">
                            <h1 class="home__value-number">
                                4k <span>+</span>
                            </h1>
                            <span class="home__value-description">Seguidores <br> redes </span>
                        </div>
                    </div>
                </div>
                <div class="home__images">
                    <div class="home__orbe">
                        <div class="home__img">
                            <img src="./images/gripp2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logo section">
            <div class="logos__container container grid">
                <div class="logo__img">
                    <img src="./images/logo1.png" alt="">
                </div>
                <div class="logo__img">
                    <img src="./images/logo2.png" alt="">
                </div>
                <div class="logo__img">
                    <img src="./images/logo3.png" alt="">
                </div>
                <div class="logo__img">
                    <img src="./images/logo4.png" alt="">
                </div>
            </div>
        </section>
        <section class="popular section" id="about">
            <div class="container">
                <span class="section__subtitle">Atencion Psicologica</span>
                <br>
                <h2 class="section__title">
                    Planes de Atencion Psicologica <span>.</span>
                </h2>
                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>800.00 MXN
                                </h2>
                                <h3 class="popular___title">
                                    Atencion Psicologica Familiar.
                                </h3>
                                <p class="popular__description">
                                ¿Sientes que tu familia está atravesando una crisis y necesitan ayuda? Nuestros profesionales en atención psicológica familiar están aquí para apoyarte. Ofrecemos sesiones individuales y grupales para ayudarte a identificar y resolver problemas en un ambiente seguro y confidencial. Con nuestra ayuda, puedes mejorar la comunicación, 
                                fortalecer los lazos familiares y encontrar nuevas formas de afrontar desafíos juntos. Contáctanos hoy mismo para una consulta y comienza el camino hacia una familia más saludable y feliz.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular2.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>600.00 MXN
                                </h2>
                                <h3 class="popular___title">
                                    Atencion Psicologica de Pareja.
                                </h3>
                                <p class="popular__description">
                                ¿Estás pasando por problemas en tu relación de pareja? Nuestros terapeutas especializados en atención psicológica de pareja pueden ayudarte a resolver conflictos, mejorar la comunicación y fortalecer los lazos emocionales. 
                                Ofrecemos un ambiente seguro y confidencial donde puedes expresarte libremente y recibir apoyo en un proceso de terapia personalizado. Aprende nuevas habilidades para manejar conflictos, fortalece tu relación y vuelve a conectarte con tu pareja. Contáctanos hoy mismo para una consulta y comienza a trabajar en tu relación.  
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular3.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>420.00 MXN
                                </h2>
                                <h3 class="popular___title">
                                    Atencion Psicologica Individual.
                                </h3>
                                <p class="popular__description">
                                ¿Te sientes abrumado por tus emociones y pensamientos? Nuestros psicólogos especializados en atención psicológica individual están aquí para ayudarte. Ofrecemos un ambiente seguro y confidencial donde puedes explorar tus preocupaciones,
                                mejorar tu bienestar emocional y desarrollar estrategias para enfrentar tus desafíos. Desde la ansiedad y la depresión hasta el estrés y la falta de autoestima, nuestros profesionales pueden trabajar contigo en un proceso personalizado para ayudarte a recuperar el control de tu vida. Contáctanos hoy mismo para una consulta y comienza a trabajar en tu bienestar mental y emocional.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular4.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>375.00 MXN *
                                </h2>
                                <h3 class="popular___title">
                                    Paquete de Sesion de Atencion Psicologica.
                                </h3>
                                <p class="popular__description">
                                ¿Buscas mejorar tu bienestar mental y emocional? Nuestro paquete de sesiones de atención psicológica es perfecto para ti. Ofrecemos un enfoque personalizado para abordar tus preocupaciones y desafíos, ayudándote a mejorar tu bienestar emocional y
                                recuperar el control de tu vida. Ya sea que estés lidiando con ansiedad, depresión, estrés, problemas de relación u otros desafíos, nuestros profesionales pueden ayudarte a superarlos. Con nuestro paquete de sesiones, puedes disfrutar de un precio reducido y un enfoque continuo en tu crecimiento personal y bienestar. Contáctanos hoy mismo para obtener más información y comenzar tu viaje hacia una vida más saludable y feliz.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular5.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>999.99 MXN
                                </h2>
                                <h3 class="popular___title">
                                    Psiconalizada :D
                                </h3>
                                <p class="popular__description">
                                ¿Te cuesta controlar tus emociones y sientes que están afectando tu vida diaria? Nuestros psicólogos especializados en atención psicológica y manejo de emociones pueden ayudarte a aprender habilidades para regular tus emociones y
                                mejorar tu bienestar emocional. Ofrecemos un ambiente seguro y confidencial donde puedes explorar tus preocupaciones y trabajar en un proceso personalizado para alcanzar tus objetivos. Desde la ansiedad y la ira hasta la tristeza y el estrés, nuestros profesionales pueden ayudarte a identificar y manejar tus emociones de una manera saludable y efectiva. Contáctanos hoy mismo para una consulta y comienza a trabajar en el manejo de tus emociones para una vida más saludable y equilibrada.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-button-next">
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="value section" id="value">
            <div class="value__container container grid">
                <div class="value__images">
                    <div class="value__orbe"></div>

                    <div class="value__img">
                        <img src="./images/rian-ramirez-rm7rZYdl3rY-unsplash.jpg" alt="">
                    </div>
                </div>
                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Nuestros Valores</span>
                        <h2 class="section__title">
                            Nosotros <span>.</span>
                        </h2>
                        <p class="value__description">Clínica de Atención en Playa del Carmen para la Gestión en Resiliencia e Intervención Psicológica (GRIP).</p>
                    </div>
                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield-x value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                  Empatía
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>
                            <div class="value__accordition-content">
                                <p class="value__accordion-description">
                                La capacidad de comprender y sentir las emociones y perspectivas de los demás. Implica la habilidad de ponerse en el lugar de otra persona y comprender su punto de vista.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            
                            <header class="value__accordion-header">
                                <i class='bx bxs-message-square-x value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Resiliencia
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>
                            <div class="value__accordition-content">
                                <p class="value__accordion-description">
                                La habilidad de adaptarse y recuperarse de situaciones difíciles. La resiliencia implica la capacidad de enfrentar la adversidad, superar las dificultades y salir fortalecido.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-scatter-chart value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Autoestima
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>
                            <div class="value__accordition-content">
                                <p class="value__accordion-description">
                                La valoración que hacemos de nosotros mismos. La autoestima positiva implica tener una imagen positiva de uno mismo y una actitud de confianza y respeto hacia uno mismo. Una autoestima saludable es fundamental para el bienestar psicológico y emocional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe"></div>
                    <div class="contact__img">
                        <img src="./images/contactogrip.jpg" alt="">
                    </div>
                </div>
                <div class="contact__content">
                    <div class="contact__data">
                        <span class="section__subtitle">Contactanos</span>
                        <h2 class="section__title">
                            Es facil de contactarnos <span>.</span>
                        </h2>
                        <p class="contact__description">
                            Es tiempo de dar el siguiente paso a una mejor salud mental,
                            consulta nuestro expertos para agendar una cita.
                        </p>
                    </div>
                    <div class="contact__card">

                        <div class="contact__card-box">
                            <i class='bx bx-chat' ></i>
                            <div class="contact__card-info">
                                <div class="">
                                    <h3 class="contact_card-title">
                                        Chat
                                    </h3>
                                    <p class="contact__card-description">
                                        Mandanos un Whatsapp
                                    </p>
                                </div>
                            </div>
                            <button class="button contact__card-button">
                                Enviar Mensaje
                            </button>
                        </div>

                        <div class="contact__card-box">
                            <i class='bx bxs-envelope' ></i>
                            <div class="contact__card-info">
                                <div class="">
                                    <h3 class="contact_card-title">
                                        Correo
                                    </h3>
                                    <p class="contact__card-description">
                                        clinicasgrip@gmail.com
                                    </p>
                                </div>
                            </div>
                            <button class="button contact__card-button">
                                Correo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribe section">
            <div class="subscribe__container container">
                <h1 class="subscribe__title">Clinicas GRIP <br>Atencion Psicologica </h1>
                <p class="subscribe__description">Atencion Psicologica con perspectiva de derechos humanos y genero desde la psicotraumatologia para la resiliencia en Playa del Carmen.</p>
                <a href="https://www.facebook.com/GRIPAtencionPsicologica/" class="button subscribe__button">Iniciar</a>    
            </div>        
        </section>
    </main>
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="">
                <a href="#" class="footer__logo">
                    GRIP <i class='bx bxs-home-alt-2'></i>
                </a>
                <p class="footer__description">
                    Atención <br>
                    psicologica.
                </p>
            </div>
            <div class="footer__content">
                <div class="">
                    <h3 class="footer__title">
                        Blog
                    </h3>
                    <ul class="footer__links">
                        <li>
                            <a href="pages/blog.php" class="footer__link">Visita nuestro blog</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="footer__title">
                        Siguenos
                    </h3>
                    <ul class="footer__social">
                        <a href="https://www.facebook.com/GRIPAtencionPsicologica" class="footer__social-link">
                            <i class='bx bxl-facebook-circle' ></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__info container">
            <span class="footer__copy">
                Todos los derechos reservados
            </span>
            <div class="footer__privacy">
                <a href="#">Terminos y condiciones</a>
                <a href="#">Politica de privacidad</a>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-chevron-up-circle'></i>
    </a>

    <style>
        .swiper-button-next::after,
        .swiper-button-prev::after {
            content: '';
        }
        .swiper-button-next,
        .swiper-button-prev{
            top: initial;
            bottom: 0;
            width: initial;
            height: initial;
            background-color: var(--container-color);
            padding: 6px;
            border: 2px solid var(--text-color-light);
            border-radius: .5rem;
            font-size: 1.5rem;
            color: var(--first-color);
        }

        .swiper-button-prev{
            left: calc(50% - 3rem);
        }

        .swiper-button-next {
            right: calc(50% - 3rem);
        }

        .popular__container{
            padding: 1rem 0 5rem;
        }

        .popular__card{
            width: 290px;
            background: var(--container-color);
            padding: .5rem .5rem 1.5rem;
            border-radius: 1rem;
            margin: 0 auto;
            transition: .4s;
        }

        .popular__img{
            border-radius: 1rem;
            margin-bottom: 1rem;
        }

        .popular__data{
            padding: 0 1rem 0 .5rem;
        }

        .popular__price{
            font-size: var(--h2-font-size);
            color: var(--text-color);
            margin-bottom: .25rem;
        }

        .popular__price span {
            color: var(--second-color);
        }

        .popular___title{
            font-size: var(--h3-font-size);
            margin-bottom: .75rem;
        }

        .popular__description{
            font-size: var(--small-font-size);
        }

        .popular__card:hover{
            box-shadow: 0 12px 16px hsla(228, 66%, 45%, .1);
        }

        @media screen and (min-width: 1024px) {
            .popular__container {
                padding-top: 3rem;
            }
            .popular__card{
                width: 320px;
                padding: .75rem .75rem 2rem;
            }

            .popular__data {
                padding: 0 .25rem 0 .75rem;
            }


        }
        
    </style>

    <script src="./js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'      
        var swiperPopular = new Swiper(".popular__container", {
            spaceBetween: 32,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });     
        const sr = ScrollReveal({
            origin: 'top',
            distance: '60px',
            duration: 2500,
            delay: 400,

        })

        sr.reveal(`.home__title, .home__img`, {delay: 300})
        sr.reveal(`.home__description, .footer_info`, {delay: 500}) 
        sr.reveal(`.home__search`, {delay: 600}) 
        sr.reveal(`.home__value`, {delay: 700})
        sr.reveal(`.home__images`, {delay: 800, origin: 'bottom'}) 
        sr.reveal(`.logos__img`, {finterval: 100}) 
        sr.reveal(`.value__images, .contact__content`, {forigin: 'left'})
        sr.reveal (`.value__content, .contact__images`, {forigin: 'right'})
    </script>
</body>
</html>