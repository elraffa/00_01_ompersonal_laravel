<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>

    <header class="navbar">
        <div class="navbar navbar__container container">
            <a href="index.html"><img src="img/logo.png" width="100" alt="Ompersonal Logo" /></a>
            <!-- Main navigation Menu -->
            <nav class="navbar__navbar toggle-mobile">
                <ul class="navbar__navbar-menu">

                    <li class="navbar__navbar-menu-item">
                        <a href="#" id="navbtn_cursos" onclick="om_open_nav('cursos')">
                            Cursos gratis
                            <i class="fa fa-caret-down"></i>
                            <i class="fa fa-caret-up" style="display: none"></i>
                        </a>

                        <!-- Dropdown Cursos -->
                        <nav id="nav_cursos" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn" onclick="om_close_nav('cursos')">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <!-- Cursos Gratis Dropdown -->
                                <div class="om_dropdown">

                                    <h2><i class="fas fa-chalkboard-teacher"></i> Cursos Gratis</h2>
                                    <div class="om_dropdown-featured">
                                        <a href="#"><span class="bold">OM Placement Test</span> (Examen de Nivel y
                                            Ubicación)</a>
                                    </div>
                                    <div class="om_dropdown_menu">
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Iniciación</h3>
                                            <a class="om_dropdown_menu-item" href="#">Principiantes (A1)</a>
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Aprendizaje</h3>
                                            <a class="om_dropdown_menu-item" href="#">Básico a Intermedio Bajo (A2)</a>
                                            <a class="om_dropdown_menu-item" href="#">Intermedio a Intermedio Alto (B1 -
                                                Primera Parte)</a>
                                            <a class="om_dropdown_menu-item" href="#">Avanzado Conversacional (B1 -
                                                Segunda Parte)</a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Académica</h3>
                                            <a class="om_dropdown_menu-item" href="#">FCE - First Certificate (B2)</a>
                                            <a class="om_dropdown_menu-item" href="#">CAE - Advanced (C1)</a>
                                            <a class="om_dropdown_menu-item" href="#">CPE - Proficiency (C2)</a>
                                            <a class="om_dropdown_menu-item" href="#">TOEFL Test</a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Especialización</h3>
                                            <a class="om_dropdown_menu-item" href="#">Avanzado de Negocios</a>
                                            <a class="om_dropdown_menu-item" href="#">Pronunciación en Inglés</a>
                                            <a class="om_dropdown_menu-item" href="#">Redacción en Inglés</a>
                                            <a class="om_dropdown_menu-item" href="#">Conversación en Inglés</a>
                                            <a class="om_dropdown_menu-item" href="#">Básico a Intermedio Bajo para
                                                Sordos e Hipoacúsicos (A2)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>

                    <li class="navbar__navbar-menu-item"><a href="#" id="navbtn_aprendizaje"
                            onclick="om_open_nav('aprendizaje')">Aprendizaje y
                            práctica <i class="fa fa-caret-down"></i> <i class="fa fa-caret-up"
                                style="display: none"></i></a>
                        <!-- Dropdown Aprendizaje -->
                        <nav id="nav_aprendizaje" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn" onclick="om_close_nav('aprendizaje')">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <h2><i class="fas fa-pencil-alt"></i> Aprendizaje y práctica</h2>
                                    <div class="om_dropdown_menu-aprendizaje">
                                        <div class="om_dropdown_menu-aprendizaje-col">
                                            <a href="#"><span class='bold'>OM Express</span><br><span class="small">200
                                                    diccionarios
                                                    sonoros bilingües</span></a>
                                            <a href="#"><span class='bold'>OM Connector</span><br><span
                                                    class="small">150 conectores
                                                    con ejemplos y actividades</span></a>
                                            <a href="#"><span class='bold'>OM Grammar</span><br><span class="small">Toda
                                                    la
                                                    gramática inglesa en español</span></a>
                                            <a href="#"><span class='bold'>OM Verbs</span><br><span class="small">Listas
                                                    de verbos
                                                    regulares e irregulares</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-aprendizaje-col">
                                            <a href="#"><span class='bold'>OM Phrasal</span><br><span class="small">1000
                                                    phrasal
                                                    verbs con ejemplos y actividades</span></a>
                                            <a href="#"><span class='bold'>OM Mistake</span><br><span class="small">300
                                                    errores
                                                    comunes de los hispanohablantes</span></a>
                                            <a href="#"><span class='bold'>OM Phonetics</span><br><span
                                                    class="small">Todos los
                                                    sonidos ingleses con audio</span></a>
                                            <a href="#"><span class='bold'>OM Exercise</span><br><span
                                                    class="small">Ejercicios
                                                    interactivos e imprimibles</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>
                    <li class="navbar__navbar-menu-item">
                        <a href="#" id="navbtn_listening" onclick="om_open_nav('listening')">Listening <i
                                class="fa fa-caret-down"></i> <i class="fa fa-caret-up" style="display: none"></i>
                        </a>

                        <!-- Dropdown Listening -->
                        <nav id="nav_listening" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn" onclick="om_close_nav('listening')">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <div class="nav_close_btn">
                                        <i class="fa-solid fa-rectangle-xmark"></i>
                                    </div>
                                    <h2><i class="fas fa-headphones"></i> Listening</h2>
                                    <div class="om_dropdown_menu-listening">
                                        <div class="om_dropdown_menu-listening-col">
                                            <h3 class="om_dropdown_menu-heading-3">Conversaciones</h3>
                                            <a href="#"><span class='bold'>OM Question</span><br><span class="small">200
                                                    preguntas
                                                    en 3 niveles</span></a>
                                            <a href="#"><span class='bold'>OM Video</span><br><span
                                                    class="small">Videoclips en 6
                                                    niveles</span></a>
                                            <a href="#"><span class='bold'>OM Audio</span><br><span class="small">
                                                    Diálogos con
                                                    ejercicios</span></a>
                                            <a href="#"><span class='bold'>OM Listen</span><br><span
                                                    class="small">Actividades de
                                                    comprensión oral</span></a>
                                            <a href="#"><span class='bold'>OM Bus</span><br><span class="small">Charlas
                                                    a bordo de
                                                    un autobús</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3 mobile-hide">&nbsp;</h3>
                                            <a href="#"><span class='bold'>OM Theatre</span><br><span class="small">Una
                                                    divertida
                                                    obra de teatro de los 70</span></a>
                                            <a href="#"><span class='bold'>OM Accents</span><br><span
                                                    class="small">Acentos nativos
                                                    y no nativos del inglés</span></a>
                                            <a href="#"><span class='bold'>OM Podcasts</span><br><span
                                                    class="small">Famosos
                                                    audiocuentos descargables</span></a>
                                            <a href="#"><span class='bold'>OM Detective</span><br><span
                                                    class="small">Resuelve 8
                                                    misterios con el Dr. Delator</span></a>
                                            <a href="#"><span class='bold'>OM Smiles</span><br><span class="small">Risa
                                                    terapéutica
                                                    en divertidas historias</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Variedades</h3>
                                            <a href="#"><span class='bold'>OM Sinatra</span><br><span class="small">El
                                                    mejor
                                                    profesor de inglés americano</span></a>
                                            <a href="#"><span class='bold'>OM Café</span><br><span
                                                    class="small">Canciones favoritas
                                                    del "Café Nostalgia"</span></a>
                                            <a href="#"><span class='bold'>OM Broadway</span><br><span class="small">Los
                                                    shows de
                                                    Broadway y Nueva York</span></a>
                                            <a href="#"><span class='bold'>OM Songs</span><br><span
                                                    class="small">Canciones
                                                    gramaticales no comerciales</span></a>
                                            <a href="#"><span class='bold'>OM Christmas</span><br><span
                                                    class="small">Nuestra
                                                    colección de música navideña</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>

                    </li>
                    <li class="navbar__navbar-menu-item">
                        <a href="#" id="navbtn_servicios" onclick="om_open_nav('servicios')">Servicios <i
                                class="fa fa-caret-down"></i><i class="fa fa-caret-up" style="display: none"></i>
                        </a>

                        <!-- Dropdown Servicios -->
                        <nav id="nav_servicios" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn" onclick="om_close_nav('servicios')">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <h2><i class="fas fa-tools"></i> Servicios</h2>
                                    <div class="om_dropdown_menu-servicios">
                                        <div class="om_dropdown_menu-servicios-col">
                                            <a href="#">Cómo estudiar</a>
                                            <a href="#">¿Británico o Americano?</a>
                                            <a href="#">Nuestros certificados</a>
                                            <a href="#">Exámenes automatizados</a>
                                            <a href="#">Cuentos y artículos en inglés</a>
                                        </div>
                                        <div class="om_dropdown_menu-servicios-col">
                                            <a href="#">Preguntas frecuentes</a>
                                            <a href="#">Mapa del sitio</a>
                                            <a href="#">Boletín mensual gratuito</a>
                                            <a href="#">Prensa y Entrevistas</a>
                                            <a href="#">Términos legales</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>
                </ul>
            </nav>
            <a class="btn btn__primary">Inscríbete gratis</a>

            <button href="javascript:void(0)" class="navbar__hamburger-button js-hamburger-button"
                onclick="mobileMenu()" aria-label="Navigation Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


    </header>

    <main id="main" class="main">
        <!-- Begin Hero -->
        <div class="hero container">
            <div class="hero__content">
                <h1 class="hero__title">Cursos y certificados</h1>
                <h1 class="hero__subtitle">Estudia inglés 100% gratis</h1>
                <button class="btn btn__primary-lg">Inscríbete gratis</button>
            </div>
            <div class="hero__image">
                <img src="img/ilustracion-hero.png" alt="Estudia ingles 100% gratis" style="width:auto;">

            </div>
        </div><!-- End hero -->

        <!-- Begin novedades -->
        <div class="novedades">
            <div class="novedades__content container">
                <div class="novedades__image">
                    <img src="img/ilustracion-novedad.png" alt="Examenes automaticos y certificados de ingles">
                </div>
                <div class="novedades__text">
                    <div class="novedades__copy">
                        <h3>Novedad</h3>
                        <h1 class="novedades__title title__heading-1">Certificados</h1>
                        <h3 class="novedades__text title__heading-2 bold">Estrenamos nuevos exámenes automatizados</h3>
                        <p class="title__heading-3">Con evaluación automática y generación de certificados</p>
                    </div>
                    <button class="btn btn__primary-lg">Ver mas</button>
                </div>
            </div>
        </div><!-- End novedades -->

        <!-- Begin FAQ-->
        <div class="faq">
            <div class="faq__content">

                <h1 class="faq__title title__heading-1 align-center">FAQ</h1>

                <div class="faq__accordion">

                    <button class="accordion">1. ¿Me aseguran que todo es realmente gratis?</button>
                    <div class="panel">
                        <p>Desde el año 1999 todos nuestros cursos, exámenes finales y certificados son 100% gratuitos.
                            Nada tienes que pagar desde el comienzo hasta el final de tu capacitación.</p>
                    </div>

                    <button class="accordion">2. ¿Dónde puedo inscribirme?</button>
                    <div class="panel">
                        <p>Apúntate gratuitamente en http://tinyurl.com/62el78 Como respuesta a tu inscripción recibirás
                            nuestro mensaje "Te Damos la Bienvenida". Si no lo ves en la Bandeja de Entrada de tu
                            casilla, revisa las carpetas "Spam", "Mensajes No Solicitados" o "Promociones"). IMPORTANTE:
                            La ética es un valor fundamental en nuestro trabajo. Respétala y no te inscribas con emails
                            falsos o con emails de "uso temporario" porque no lograrás inscribirte y el sistema te
                            rechazará automáticamente. Ver lista de dominios de email prohibidos.</p>
                    </div>

                    <button class="accordion">3. ¿Los miembros de una misma familia o grupo de amigos pueden inscribirse
                        con un mismo Email?</button>
                    <div class="panel">
                        <p>
                            <span class="bold">Cada estudiante debe inscribirse con su email personal</span> porque al
                            momento de solicitar los exámenes finales verificamos –no sólo la antigüedad como estudiante
                            inscrito– sino también que los datos del solicitante coincidan en un 100% con los datos
                            declarados al momento de inscribirse. La coincidencia de datos debe ser total: nombres
                            completos y apellidos completos para que podamos extender correctamente cada certificado.
                        </p>
                    </div>
                    <button class="accordion">4. ¿Existe algún requisito de edad para realizar los cursos?</button>
                    <div class="panel">
                        <p>
                            No hemos establecido límites de edad (ni mínimos ni máximos) para completar nuestros 17
                            cursos gratuitos y certificados de inglés. Desde luego existen limitaciones naturales: es
                            poco factible que un niño de 6 años pueda realizar satisfactoriamente nuestros cursos
                            académicos (FCE, CAE, CPE y TOEFL).</p>
                    </div>
                    <button class="accordion">
                        5. ¿En qué horarios se puede estudiar en OM PERSONAL ENGLISH?</button>
                    <div class="panel">
                        <p>
                            Nuestro portal está habilitado para todos los países durante las 24 horas del día, los 365
                            días del año (feriados y fines de semana incluidos). Como todos nuestros cursos son
                            autodidactas, puedes estudiar incluso durante la madrugada, si ese horario te resulta más
                            conveniente.</p>
                    </div>
                </div>
                <button class="faq__btn btn btn__primary-lg">Ver Todas</button>
            </div>

        </div><!-- End FAQ -->
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__content container">
            <div class="footer__col-1">
                <div class="title__heading-4 bold">Hola</div>
            </div>
            <div class="footer__col-1">
                <div class="footer__menu-heading-4 bold align-center">Todos los cursos</div>
                <h3 class="footer__menu-heading-3 align-center"><a href="#"><span class="bold">OM Placement Test</span>
                        (Examen de Nivel y Ubicación)</a></h3>
                <div class="footer__menu-col">
                    <h3 class="footer__menu-heading-3">Etapa Iniciación</h3>
                    <a class="footer__menu-item" href="#">Principiantes (A1)</a>
                    <h3 class="footer__menu-heading-3">Etapa Aprendizaje</h3>
                    <a class="footer__menu-item" href="#">Básico a Intermedio Bajo (A2)</a>
                    <a class="footer__menu-item" href="#">Intermedio a Intermedio Alto (B1 - Primera Parte)</a>
                    <a class="footer__menu-item" href="#">Avanzado Conversacional (B1 - Segunda Parte)</a>
                </div>
                <div class="footer__menu-col">
                    <h3 class="footer__menu-heading-3">Etapa Académica</h3>
                    <a class="footer__menu-item" href="#">FCE - First Certificate (B2)</a>
                    <a class="footer__menu-item" href="#">CAE - Advanced (C1)</a>
                    <a class="footer__menu-item" href="#">CPE - Proficiency (C2)</a>
                    <a class="footer__menu-item" href="#">TOEFL Test</a>
                </div>
                <div class="footer__menu-col">
                    <h3 class="footer__menu-heading-3">Etapa Especialización</h3>
                    <a class="footer__menu-item" href="#">Avanzado de Negocios</a>
                    <a class="footer__menu-item" href="#">Pronunciación en Inglés</a>
                    <a class="footer__menu-item" href="#">Redacción en Inglés</a>
                    <a class="footer__menu-item" href="#">Conversación en Inglés</a>
                    <a class="footer__menu-item" href="#">Básico a Intermedio Bajo para Sordos e Hipoacúsicos (A2)</a>
                </div>
            </div>
            <div class="footer__col-1">
                <div class="title__heading-4 bold">Hola</div>
            </div>
            <div class="footer__col-1">
                <div class="title__heading-4 bold">Hola</div>
            </div>
        </div>
        <div class="footer__copyright">
            <p class="footer__text-legales"><span class="bold">2022 - OM PERSONAL MULTIMEDIA ENGLISH: Desde 1999 en
                    Internet.<br>© Orlando Moure - Todos los derechos reservados</span>
            <p class="footer__text-legales"> Buenos Aires, República Argentina | <a
                    href="http://www.ompersonal.com.ar">Home page</a> | Correo: info@ompersonal.com.ar</p>
            <p class="footer__text-legales"> Términos Legales | Política de Tratamiento de Datos Personales</p>
            <p class="footer__text-legales">Queda absolutamente prohibida la reproducción o descarga de contenidos de
                este portal.</p>
        </div>
    </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="js/swiper.js"></script> -->
    <script src="js/app.js"></script>
</body>

</html>
