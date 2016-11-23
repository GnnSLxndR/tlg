<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<div class="jumbotron intro-img-tlg center-block">
    <div class="container">
        <div class="row">
            <div class="intro-text-box text-center">
                <p class="intro-first-line">¡El gimnasio preferido por niños</p>
                <p class="intro-second-line">en el norte de Bogotá!</p>
            </div>


                <div class="col-xs-2 circle hidden-sm hidden-xs">
                    <span class="circle-text-md"><h2>¡Pruébanos!</h2>
                        <p>Vive la experiencia con nuestras <strong>clases de iniciación</strong></p>
                    </span>
                    <a href="#" class="btn btn-primary btn-lg btn-tlg hidden-xs hidden-sm">Inscríbete</a>


                </div>
        </div>
    </div>

</div>

<!--Home Intro Text-->
<div class="home-intro-text-big text-center hidden-xs">
    <div class="container">
        <h1>¡Clases, Campamentos y Fiestas!</h1>
        <p>En el desarrollo de cada etapa de tu hijo - desde los 4 meses hasta los 12 años -  The Little Gym ofrece diversas clases, campamentos y fiestas llenas de movimiento, música, aprendizaje y risas. Sus hijos harán amigos, lograrán metas y crearán confianza en si mismos mientras experimentan Serious Fun.</p>
    </div>
</div>



<!-- Free Trial Class The Little Gym Hidden on Big devices-->

<div class="row try-tlg hidden-lg">
        <div class="container">
            <div class="col-xs-7">
                <h2>¡Pruébanos!</h2>
                <p class="lead">Vive la experiencia con nuestras <strong>clases de iniciación</strong></p>
            </div>
            <div class="col-xs-5">
                <a href="#" class="btn btn-primary btn-sm btn-tlg">Solicítala ya</a>
            </div>
        </div>

</div>

<div class="home-intro-text-small hidden-lg hidden-md">
    <div class="container">
        <h1>¡Clases, Campamentos y Fiestas!</h1>
        <p>En el desarrollo de cada etapa de tu hijo - desde los 4 meses hasta los 12 años -  The Little Gym ofrece diversas clases, campamentos y fiestas llenas de movimiento, música, aprendizaje y risas. Sus hijos harán amigos, lograrán metas y crearán confianza en si mismos mientras experimentan Serious Fun.</p>
    </div>
</div>

<!--Intro Paragraph-->

<!--Intro Home Images-->

<div class="class-img">

    <div class="container-fluid">
        <div class="row">

                <div class="col-xs-1 circle">
                    <span class="circle-text-md hidden-xs hidden-sm"><h2>¡Las mejores clases!</h2>
                        <p>Desde gimnasia hasta danza, incluso clases de Parent/Chid. Nuestro curriculum está diseñado para facilitar el desarrollo de habilidades y máxima diversión.</p>
                    </span>

                    <span class="circle-text-sm hidden-md hidden-lg"><h2>¡Las mejores clases!</h2></span>
                    <a href="#" class="btn btn-primary btn-sm btn-tlg hidden-lg hidden-md">Revísalas</a>
                    <a href="#" class="btn btn-primary btn-lg btn-tlg hidden-xs hidden-sm">Revísalas</a>

                </div>

        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/static/img/class-home.png" class="img-responsive" alt="The Little Gym Classes">
</div>

<div class="space"></div> <!--This is white space-->

<div class="party-img">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-1 circle">
                    <span class="circle-text-md hidden-xs hidden-sm"><h2>¡Las mejores fiestas!</h2>
                        <p>En The Little Gym al norte de Bogotá podrás disfrutar de nuestas increíbles fiestas de cumpleaños</p>
                    </span>

                <span class="circle-text-sm hidden-md hidden-lg"><h2>¡Las mejores fiestas!</h2></span>
                <a href="#" class="btn btn-primary btn-sm btn-tlg hidden-lg hidden-md">Celebra</a>
                <a href="#" class="btn btn-primary btn-lg btn-tlg hidden-xs hidden-sm">Celebra</a>

            </div>

        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/static/img/party-home.png" class="img-responsive" alt="The Little Gym Parties">
</div>

<div class="space"></div>

<div class="camp-img">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-1 circle">
                    <span class="circle-text-md hidden-xs hidden-sm"><h2>¡La diversión continúa en vacaciones!</h2>
                        <p>No te aburras en casa, ven a descubrir grandes aventuras durante el verano
o las vacaciones.</p>
                    </span>

                <span class="circle-text-sm hidden-md hidden-lg"><h2>¡La diversión continúa en vacaciones!</h2></span>
                <a href="#" class="btn btn-primary btn-sm btn-tlg hidden-lg hidden-md">Inscríbete</a>
                <a href="#" class="btn btn-primary btn-lg btn-tlg hidden-xs hidden-sm">Inscríbete</a>

            </div>

        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/static/img/camp-img.png" class="img-responsive" alt="The Little Gym Parties">
</div>

<div class="space"></div>

<!--Comments Big Carousel-->
<div id="carousel-comments" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php bloginfo('template_url'); ?>/static/img/comments.png" alt="The Little Gym">
            <div class="carousel-caption comments-tlg">
                <h1>¿Que está diciendo la gente?</h1>
                <div class="comment-bubble">
                    <h5 class="text-left">
                        “Me encantan sus clase porque he podido notar los avances de Miguel, tanto físicos como sociales.”
                    </h5>
                </div>

            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_url'); ?>/static/img/comments.png" alt="The Little Gym">
            <div class="carousel-caption comments-tlg">
                <h1>¿Que está diciendo la gente?</h1>
                <div class="comment-bubble">
                    <h5 class="text-left">
                        “Santi solía ser un niño inseguro, en The Little Gym lo he visto hacer cosas que nunca imaginé”
                    </h5>
                </div>

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-comments" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="right carousel-control" href="#carousel-comments" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div>

<!--Small Carousel-->
<div id="carousel-comments-sm" class="carousel slide hidden-md hidden-lg" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php bloginfo('template_url'); ?>/static/img/comments-small.png" alt="The Little Gym">
            <div class="carousel-caption comments-tlg-sm">
                <h1>¿Que está diciendo la gente?</h1>
                <div class="comment-bubble-sm">
                    <h5>
                        “Santi solía ser un niño inseguro, en The Little Gym lo he visto hacer cosas que nunca imaginé”
                    </h5>
                </div>

            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_url'); ?>/static/img/comments-small.png" alt="The Little Gym">
            <div class="carousel-caption comments-tlg-sm">
                <h1>¿Que está diciendo la gente?</h1>
                <div class="comment-bubble-sm">
                    <h5>
                        "Me encanta The Little Gym"
                    </h5>
                </div>

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-comments" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="right carousel-control" href="#carousel-comments" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div>

<div class="class-intro-img">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-1 circle">
                    <span class="circle-text-md hidden-xs hidden-sm"><h2>¿Pensando en Unirte?</h2>
                        <p>No esperes más y solicita
una clase de iniciación.</p>
                    </span>

                <span class="circle-text-sm hidden-md hidden-lg"><h2>¿Pensando en Unirte?</h2></span>
                <a href="#" class="btn btn-primary btn-sm btn-tlg hidden-lg hidden-md">Agendar</a>
                <a href="#" class="btn btn-primary btn-lg btn-tlg hidden-xs hidden-sm">Agendar</a>

            </div>

        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/static/img/class-intro.png" class="img-responsive" alt="The Little Gym Classes">
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>