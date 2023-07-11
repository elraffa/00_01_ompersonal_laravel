<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OMPersonal English</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
        @vite(['resources/sass/main.scss', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/3a69b944ac.js" crossorigin="anonymous"></script>

    </head>
    <body>

    <header class="navbar">
        <div class="navbar navbar__container container">
            <a href="/"><img src="{{ asset('/img/logo.png') }}" width="100" alt="Ompersonal Logo" /></a>
            <!-- Main navigation Menu -->
            <nav class="navbar__navbar toggle-mobile">
                <ul class="navbar__navbar-menu">

                    <li class="navbar__navbar-menu-item">
                        <a href="#" id="navbtn_cursos">
                            Cursos gratis
                            <i class="fa fa-caret-down"></i>
                            <i class="fa fa-caret-up" style="display: none"></i>
                        </a>

                        <!-- Dropdown Cursos -->
                        <nav id="nav_cursos" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <!-- Cursos Gratis Dropdown -->
                                <div class="om_dropdown">

                                    <h2><i class="fas fa-chalkboard-teacher"></i> Cursos Gratis</h2>
                                    <div class="om_dropdown-featured">
                                        <a href="http://original.ompersonal.com.ar/test/"><span class="bold">OM Placement Test</span> (Examen de Nivel y
                                            Ubicación)</a>
                                    </div>
                                    <div class="om_dropdown_menu">
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Iniciación</h3>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omkids/presentacion.htm">Principiantes (A1)</a>
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Aprendizaje</h3>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/ELEMENTARY/presentacion.htm">Básico a Intermedio Bajo (A2)</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/INTERMEDIATE/presentacion.htm">Intermedio a Intermedio Alto (B1 -
                                                Primera Parte)</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/ADVANCED/presentacion.htm">Avanzado Conversacional (B1 -
                                                Segunda Parte)</a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Académica</h3>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/OMFIRST/presentacion.htm">FCE - First Certificate (B2)</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omcae/presentacion.htm">CAE - Advanced (C1)</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omcpe/presentacion.htm">CPE - Proficiency (C2)</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omtoefl/contenidotematico.htm">TOEFL Test</a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Especialización</h3>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omcompany/presentacion.htm">Avanzado de Negocios</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/ompronounce/presentacion.htm">Pronunciación en Inglés</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/OMWRITE/contenidotematico.htm">Redacción en Inglés</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omtalk/presentacion.htm">Conversación en Inglés</a>
                                            <a class="om_dropdown_menu-item" href="http://original.ompersonal.com.ar/omdeaf/presentacion.htm">Básico a Intermedio Bajo para
                                                Sordos e Hipoacúsicos (A2)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>

                    <li class="navbar__navbar-menu-item"><a href="#" id="navbtn_aprendizaje"
                            >Aprendizaje y
                            práctica <i class="fa fa-caret-down"></i> <i class="fa fa-caret-up"
                                style="display: none"></i></a>
                        <!-- Dropdown Aprendizaje -->
                        <nav id="nav_aprendizaje" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <h2><i class="fas fa-pencil-alt"></i> Aprendizaje y práctica</h2>
                                    <div class="om_dropdown_menu-aprendizaje">
                                        <div class="om_dropdown_menu-aprendizaje-col">
                                            <a href="http://original.ompersonal.com.ar/omexpress/indicetematico.htm"><span class='bold'>OM Express</span><br><span class="small">200
                                                    diccionarios
                                                    sonoros bilingües</span></a>
                                            <a href="http://original.ompersonal.com.ar/omconnector/contenidotematico.htm"><span class='bold'>OM Connector</span><br><span
                                                    class="small">150 conectores
                                                    con ejemplos y actividades</span></a>
                                            <a href="http://original.ompersonal.com.ar/omgrammar/indicetematico.htm"><span class='bold'>OM Grammar</span><br><span class="small">Toda
                                                    la
                                                    gramática inglesa en español</span></a>
                                            <a href="http://original.ompersonal.com.ar/omverbs/contenidotematico.htm"><span class='bold'>OM Verbs</span><br><span class="small">Listas
                                                    de verbos
                                                    regulares e irregulares</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-aprendizaje-col">
                                            <a href="http://original.ompersonal.com.ar/omphrasal/contenidotematico.htm"><span class='bold'>OM Phrasal</span><br><span class="small">1000
                                                    phrasal
                                                    verbs con ejemplos y actividades</span></a>
                                            <a href="http://original.ompersonal.com.ar/ommistake/contenidotematico.htm"><span class='bold'>OM Mistake</span><br><span class="small">300
                                                    errores
                                                    comunes de los hispanohablantes</span></a>
                                            <a href="http://original.ompersonal.com.ar/omphonetics/contenidotematico.htm"><span class='bold'>OM Phonetics</span><br><span
                                                    class="small">Todos los
                                                    sonidos ingleses con audio</span></a>
                                            <a href="http://original.ompersonal.com.ar/omexercise/contenidotematico.htm"><span class='bold'>OM Exercise</span><br><span
                                                    class="small">Ejercicios
                                                    interactivos e imprimibles</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>
                    <li class="navbar__navbar-menu-item">
                        <a href="#" id="navbtn_listening">Listening <i
                                class="fa fa-caret-down"></i> <i class="fa fa-caret-up" style="display: none"></i>
                        </a>

                        <!-- Dropdown Listening -->
                        <nav id="nav_listening" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <h2><i class="fas fa-headphones"></i> Listening</h2>
                                    <div class="om_dropdown_menu-listening">
                                        <div class="om_dropdown_menu-listening-col">
                                            <h3 class="om_dropdown_menu-heading-3">Conversaciones</h3>
                                            <a href="http://original.ompersonal.com.ar/omquestion/contenidotematico.htm"><span class='bold'>OM Question</span><br><span class="small">200
                                                    preguntas
                                                    en 3 niveles</span></a>
                                            <a href="http://original.ompersonal.com.ar/omvideo/contenidotematico.htm"><span class='bold'>OM Video</span><br><span
                                                    class="small">Videoclips en 6
                                                    niveles</span></a>
                                            <a href="http://original.ompersonal.com.ar/omaudio/contenidotematico.htm"><span class='bold'>OM Audio</span><br><span class="small">
                                                    Diálogos con
                                                    ejercicios</span></a>
                                            <a href="http://original.ompersonal.com.ar/omlisten/contenidotematico.htm"><span class='bold'>OM Listen</span><br><span
                                                    class="small">Actividades de
                                                    comprensión oral</span></a>
                                            <a href="http://original.ompersonal.com.ar/ombus/contenidotematico.htm"><span class='bold'>OM Bus</span><br><span class="small">Charlas
                                                    a bordo de
                                                    un autobús</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3 mobile-hide">&nbsp;</h3>
                                            <a href="http://original.ompersonal.com.ar/omtheatre/contenidotematico.htm"><span class='bold'>OM Theatre</span><br><span class="small">Una
                                                    divertida
                                                    obra de teatro de los 70</span></a>
                                            <a href="http://original.ompersonal.com.ar/omaccents/contenidotematico.htm"><span class='bold'>OM Accents</span><br><span
                                                    class="small">Acentos nativos
                                                    y no nativos del inglés</span></a>
                                            <a href="http://www.cuentoseningles.com.ar/shortstories/podcasts/index.html"><span class='bold'>OM Podcasts</span><br><span
                                                    class="small">Famosos
                                                    audiocuentos descargables</span></a>
                                            <a href="http://original.ompersonal.com.ar/omdetective/contenidotematico.htm"><span class='bold'>OM Detective</span><br><span
                                                    class="small">Resuelve 8
                                                    misterios con el Dr. Delator</span></a>
                                            <a href="http://original.ompersonal.com.ar/omsmiles/contenidotematico.htm"><span class='bold'>OM Smiles</span><br><span class="small">Risa
                                                    terapéutica
                                                    en divertidas historias</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Variedades</h3>
                                            <a href="http://original.ompersonal.com.ar/singinggrammar/index.htm"><span class='bold'>OM Sinatra</span><br><span class="small">El
                                                    mejor
                                                    profesor de inglés americano</span></a>
                                            <a href="http://original.ompersonal.com.ar/omcafe/contenidotematico.htm"><span class='bold'>OM Café</span><br><span
                                                    class="small">Canciones favoritas
                                                    del "Café Nostalgia"</span></a>
                                            <a href="http://original.ompersonal.com.ar/ombroadway/contenidotematico.htm"><span class='bold'>OM Broadway</span><br><span class="small">Los
                                                    shows de
                                                    Londres y Nueva York</span></a>
                                            <a href="http://original.ompersonal.com.ar/omsongs/contenidotematico.htm"><span class='bold'>OM Songs</span><br><span
                                                    class="small">Canciones
                                                    gramaticales no comerciales</span></a>
                                            <a href="http://original.ompersonal.com.ar/omchristmas/contenidotematico.htm"><span class='bold'>OM Christmas</span><br><span
                                                    class="small">Nuestra
                                                    colección de música navideña</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>

                    </li>
                    <li class="navbar__navbar-menu-item">
                        <a href="#" id="navbtn_servicios">Servicios <i
                                class="fa fa-caret-down"></i><i class="fa fa-caret-up" style="display: none"></i>
                        </a>

                        <!-- Dropdown Servicios -->
                        <nav id="nav_servicios" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <h2><i class="fas fa-tools"></i> Servicios</h2>
                                    <div class="om_dropdown_menu-servicios">
                                        <div class="om_dropdown_menu-servicios-col">
                                            <a href="http://original.ompersonal.com.ar/niveldeingles.htm">Cómo estudiar en esta web</a>
                                            <a href="https://original.ompersonal.com.ar/FAQ/britanico-americano.htm">¿Británico o Americano?</a>
                                            <a href="http://original.ompersonal.com.ar/FAQ/certificados2.htm">Nuestros certificados</a>
                                            <a href="http://original.ompersonal.com.ar/test">Exámenes automatizados</a>
                                            <a href="https://www.cuentoseningles.com.ar/">Cuentos y artículos en inglés</a>
                                        </div>
                                        <div class="om_dropdown_menu-servicios-col">
                                            <a href="http://original.ompersonal.com.ar/FAQ/faq.htm">Preguntas frecuentes</a>
                                            <a href="http://original.ompersonal.com.ar/mapadelsitio.htm">Mapa del sitio</a>
                                            <a href="https://www.boletineningles.com/">Boletín mensual gratuito</a>
                                            <a href="https://original.ompersonal.com.ar/awards/ITbusiness.htm">Prensa y Entrevistas</a>
                                            <a href="http://original.ompersonal.com.ar/legales.htm">Términos legales</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>
                </ul>
            </nav>
            <a href="/register" class="btn btn__primary">Inscríbete gratis</a>

            <button href="" class="navbar__hamburger-button js-hamburger-button" aria-label="Navigation Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


    </header>