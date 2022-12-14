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
                                        <a href="http://www.ompersonal.com.ar/test/"><span class="bold">OM Placement Test</span> (Examen de Nivel y
                                            Ubicaci??n)</a>
                                    </div>
                                    <div class="om_dropdown_menu">
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Iniciaci??n</h3>
                                            <a class="om_dropdown_menu-item" href="#">Principiantes (A1)</a>
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Aprendizaje</h3>
                                            <a class="om_dropdown_menu-item" href="#">B??sico a Intermedio Bajo (A2)</a>
                                            <a class="om_dropdown_menu-item" href="#">Intermedio a Intermedio Alto (B1 -
                                                Primera Parte)</a>
                                            <a class="om_dropdown_menu-item" href="#">Avanzado Conversacional (B1 -
                                                Segunda Parte)</a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Acad??mica</h3>
                                            <a class="om_dropdown_menu-item" href="#">FCE - First Certificate (B2)</a>
                                            <a class="om_dropdown_menu-item" href="#">CAE - Advanced (C1)</a>
                                            <a class="om_dropdown_menu-item" href="#">CPE - Proficiency (C2)</a>
                                            <a class="om_dropdown_menu-item" href="#">TOEFL Test</a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Etapa Especializaci??n</h3>
                                            <a class="om_dropdown_menu-item" href="#">Avanzado de Negocios</a>
                                            <a class="om_dropdown_menu-item" href="#">Pronunciaci??n en Ingl??s</a>
                                            <a class="om_dropdown_menu-item" href="#">Redacci??n en Ingl??s</a>
                                            <a class="om_dropdown_menu-item" href="#">Conversaci??n en Ingl??s</a>
                                            <a class="om_dropdown_menu-item" href="#">B??sico a Intermedio Bajo para
                                                Sordos e Hipoac??sicos (A2)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>

                    <li class="navbar__navbar-menu-item"><a href="#" id="navbtn_aprendizaje"
                            >Aprendizaje y
                            pr??ctica <i class="fa fa-caret-down"></i> <i class="fa fa-caret-up"
                                style="display: none"></i></a>
                        <!-- Dropdown Aprendizaje -->
                        <nav id="nav_aprendizaje" class="nav_dropdown">
                            <div class="container">
                                <button class="nav_close_btn">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                                <div class="om_dropdown">
                                    <h2><i class="fas fa-pencil-alt"></i> Aprendizaje y pr??ctica</h2>
                                    <div class="om_dropdown_menu-aprendizaje">
                                        <div class="om_dropdown_menu-aprendizaje-col">
                                            <a href="#"><span class='bold'>OM Express</span><br><span class="small">200
                                                    diccionarios
                                                    sonoros biling??es</span></a>
                                            <a href="#"><span class='bold'>OM Connector</span><br><span
                                                    class="small">150 conectores
                                                    con ejemplos y actividades</span></a>
                                            <a href="#"><span class='bold'>OM Grammar</span><br><span class="small">Toda
                                                    la
                                                    gram??tica inglesa en espa??ol</span></a>
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
                                            <a href="#"><span class='bold'>OM Question</span><br><span class="small">200
                                                    preguntas
                                                    en 3 niveles</span></a>
                                            <a href="#"><span class='bold'>OM Video</span><br><span
                                                    class="small">Videoclips en 6
                                                    niveles</span></a>
                                            <a href="#"><span class='bold'>OM Audio</span><br><span class="small">
                                                    Di??logos con
                                                    ejercicios</span></a>
                                            <a href="#"><span class='bold'>OM Listen</span><br><span
                                                    class="small">Actividades de
                                                    comprensi??n oral</span></a>
                                            <a href="#"><span class='bold'>OM Bus</span><br><span class="small">Charlas
                                                    a bordo de
                                                    un autob??s</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3 mobile-hide">&nbsp;</h3>
                                            <a href="#"><span class='bold'>OM Theatre</span><br><span class="small">Una
                                                    divertida
                                                    obra de teatro de los 70</span></a>
                                            <a href="#"><span class='bold'>OM Accents</span><br><span
                                                    class="small">Acentos nativos
                                                    y no nativos del ingl??s</span></a>
                                            <a href="#"><span class='bold'>OM Podcasts</span><br><span
                                                    class="small">Famosos
                                                    audiocuentos descargables</span></a>
                                            <a href="#"><span class='bold'>OM Detective</span><br><span
                                                    class="small">Resuelve 8
                                                    misterios con el Dr. Delator</span></a>
                                            <a href="#"><span class='bold'>OM Smiles</span><br><span class="small">Risa
                                                    terap??utica
                                                    en divertidas historias</span></a>
                                        </div>
                                        <div class="om_dropdown_menu-col">
                                            <h3 class="om_dropdown_menu-heading-3">Variedades</h3>
                                            <a href="#"><span class='bold'>OM Sinatra</span><br><span class="small">El
                                                    mejor
                                                    profesor de ingl??s americano</span></a>
                                            <a href="#"><span class='bold'>OM Caf??</span><br><span
                                                    class="small">Canciones favoritas
                                                    del "Caf?? Nostalgia"</span></a>
                                            <a href="#"><span class='bold'>OM Broadway</span><br><span class="small">Los
                                                    shows de
                                                    Londres y Nueva York</span></a>
                                            <a href="#"><span class='bold'>OM Songs</span><br><span
                                                    class="small">Canciones
                                                    gramaticales no comerciales</span></a>
                                            <a href="#"><span class='bold'>OM Christmas</span><br><span
                                                    class="small">Nuestra
                                                    colecci??n de m??sica navide??a</span></a>
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
                                            <a href="#">C??mo estudiar</a>
                                            <a href="#">??Brit??nico o Americano?</a>
                                            <a href="#">Nuestros certificados</a>
                                            <a href="#">Ex??menes automatizados</a>
                                            <a href="#">Cuentos y art??culos en ingl??s</a>
                                        </div>
                                        <div class="om_dropdown_menu-servicios-col">
                                            <a href="#">Preguntas frecuentes</a>
                                            <a href="#">Mapa del sitio</a>
                                            <a href="#">Bolet??n mensual gratuito</a>
                                            <a href="#">Prensa y Entrevistas</a>
                                            <a href="#">T??rminos legales</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </nav>
                    </li>
                </ul>
            </nav>
            <a href="{{ route('register') }}" class="btn btn__primary">Inscr??bete gratis</a>

            <button href="" class="navbar__hamburger-button js-hamburger-button" aria-label="Navigation Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


    </header>