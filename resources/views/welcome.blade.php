@include('header')

    <main id="main" class="main">
        <!-- Begin Hero -->
        <div class="hero container">
            <div class="hero__content">
                <h2 class="hero__title">Cursos y certificados</h2>
                <h1 class="hero__subtitle bold">Estudia inglés 100% gratis</h1>
                <a href="/register" class="btn btn__primary-lg">Inscríbete gratis</a>
            </div>
            <div class="hero__image">
                <img src="img/ilustracion-hero.png" alt="Estudia ingles 100% gratis" style="width:auto;">

            </div>
        </div><!-- End hero -->

        @if($message && !empty($message->content))
        <div class="home-message">
            <div class="home-message__content container">
            {!! $message->content !!} 
            </div>
        </div>
        @endif

        <!-- Begin novedades -->
        <div class="novedades">
            <div class="novedades__content container">
                <div class="novedades__image">
                    <img src="img/ilustracion-novedad.png" alt="Examenes automaticos y certificados de ingles">
                </div>
                <div class="novedades__text">
                    <div class="novedades__copy">
                        <h3>Novedad</h3>
                        <h2 class="novedades__title title__heading-1">Certificados</h2>
                        <h3 class="novedades__text title__heading-2 bold">Estrenamos nuevos exámenes automatizados</h3>
                        <p class="title__heading-3">Con evaluación automática y generación de certificados</p>
                    </div>
                    <a href="http://original.ompersonal.com.ar/test/" class="btn btn__primary-lg">Ver mas</a>
                </div>
            </div>
        </div><!-- End novedades -->

        <!-- Begin FAQ-->
        <div class="faq">
            <div class="faq__content">

                <h2 class="faq__title title__heading-1 align-center">FAQ</h2>

                <div class="faq__accordion">

                    <button class="accordion">1. ¿Me aseguran que todo es realmente gratis?</button>
                    <div class="panel">
                        <p>Desde el año 1999 todos nuestros cursos, exámenes finales y certificados son 100% gratuitos.
                            Nada tienes que pagar desde el comienzo hasta el final de tu capacitación.</p>
                    </div>

                    <button class="accordion">2. ¿Dónde puedo inscribirme?</button>
                    <div class="panel">
                        <p>Regístrate gratuitamente en <a href="https://ompersonal.com.ar/register"><strong>https://ompersonal.com.ar/register</strong></a>. Como respuesta a tu inscripción recibirás un mensaje que debes confirmar pulsando el botón "Confirma aquí tu email". Si no lo ves en la Bandeja de Entrada de tu cuenta de correo, revisa las carpetas "Spam" o "Mensajes No Solicitados". <strong>IMPORTANTE: Si te inscribes con un correo GMAIL -- y tienes una cuenta gratuita de Google Drive -- asegúrate que te encuentras dentro del máximo de GB ofrecidos sin cargo. Si te has excedido nunca podrás inscribirte porque Google lo rechaza.</strong></p>
                    </div>

                    <button class="accordion">3. ¿Los miembros de una misma familia o grupo de amigos pueden inscribirse
                        con un mismo Email?</button>
                    <div class="panel">
                        <p>
                            <span class="bold">Cada estudiante debe inscribirse con su email personal</span> porque al momento de solicitar los exámenes finales verificamos que los datos del solicitante coincidan en un 100% con los datos declarados al momento de inscribirse. La coincidencia de datos debe ser total: nombres completos y apellidos completos para que podamos extender correctamente cada certificado.
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
                <a href="http://original.ompersonal.com.ar/FAQ/faq.htm" class="faq__btn btn btn__primary-lg">Ver Todas</a>
            </div>

        </div><!-- End FAQ -->
    </main>

   @include('footer')