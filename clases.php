<?php
/*
*Template Name: Clases
*/
?>
<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>


<!--Classes Template -->

    <div class="our-classes">
        <img src="<?php bloginfo('template_url'); ?>/static/img/nuestras-clases.png" class="img-responsive">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Nuestras clases</h2>
            </div>
        </div>
        </div>
    </div>

<!--Classes Navigation-->
	<?php 
              $args = array(
                "theme_location"=>"", 
                "menu"=>"Menu 2",       
                "container"=>"div",   
                "container_class"=>"classes-nav",  
                "container_id"=>"",   
                "menu_class"=>"list-inline text-center", 
                "menu_id"=>"",
                "echo"=>true,    
                "fallback_cb"=>"wp_page_menu",  
                "depth"=>0     
              );
            wp_nav_menu($args); ?>
    

    <div class="container classes-intro-text">
        <h1 class="text-center">Una progresión positiva</h1>
        <p>
            ¡Nuestras actividades para niños adaptadas a sus edades son Serious Fun! Utilizamos movimientos,  música, métodos de aprendizaje y risas para nutrir el desarrollo de sus habilidades y reforzar su autoestima. Los niños progresan a su propio ritmo, desarrollando su confianza mientras obtienen distintas capacidades. Explora nuestros programas y encuentra el ideal para tu hijo en The Little Gym Bogotá
        </p>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-6 tlg-classes-img">
                <img src="<?php bloginfo('template_url'); ?>/static/img/parent-child.png" class="img-responsive">
        </div>
        <div class="col-sm-6 parent-child-text">
            <div class="row">
                <div class="col-sm-9">
                    <h1>Un comienzo perfecto</h1>
                    <p>Desde bebés hasta infantes, nuestras clases Padre/Hijo en Bogotá promueven el desarrollo progresivo y ofrecen un cimiento fuerte para los primeros –y críticos—tres años de vida de tu hijo.</p>
                </div>
                <div class="col-sm-3">
                        barrita
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-sm btn-tlg">Detalles y horario</a>
        </div>

    </div>
    <div class="space"></div><!--This is white space-->
    <div class="row">
        <div class="col-sm-6 parent-child-text">
            <div class="row">
                <div class="col-sm-9">
                    <h1>Un comienzo perfecto</h1>
                    <p>Desde bebés hasta infantes, nuestras clases Padre/Hijo en Bogotá promueven el desarrollo progresivo y ofrecen un cimiento fuerte para los primeros –y críticos—tres años de vida de tu hijo.</p>
                </div>
                <div class="col-sm-3">
                    barrita
                </div>
            </div>

            <a href="#" class="btn btn-primary btn-sm btn-tlg">Detalles y horario</a>
        </div>
        <div class="col-sm-6 tlg-classes-img">
            <img src="<?php bloginfo('template_url'); ?>/static/img/pre-kinder.png" class="img-responsive">
        </div>
    </div>
    <div class="space"></div><!--This is white space-->
    <div class="row">
        <div class="col-sm-6 tlg-classes-img">
            <img src="<?php bloginfo('template_url'); ?>/static/img/grade-school.png" class="img-responsive">
        </div>
        <div class="col-sm-6 parent-child-text">
            <div class="row">
                <div class="col-sm-9">
                    <h1>Un comienzo perfecto</h1>
                    <p>Desde bebés hasta infantes, nuestras clases Padre/Hijo en Bogotá promueven el desarrollo progresivo y ofrecen un cimiento fuerte para los primeros –y críticos—tres años de vida de tu hijo.</p>
                </div>
                <div class="col-sm-3">
                    barrita
                </div>
            </div>

            <a href="#" class="btn btn-primary btn-sm btn-tlg">Detalles y horario</a>
        </div>

    </div>

</div>

<div class="space"></div><!--This is white space-->

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
                        “Me encantan sus clases porque he podido notar los avances de Miguel, tanto físicos como sociales.”
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


<!--Classes Template -->
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>