<footer>
    <div class="footer text-center">
        <div class="container footer-box">
            <h2 class="text-center">
                The Little Gym Colombia
            </h2>
            <p class="text-center">Sigue a The Little Gym Colombia</p>

        <div class="social-tlg text-center">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/static/img/facebook.svg"></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/static/img/instagram.svg"></a>

        </div>
            <p class="text-center"><a href="#">@thelittlegymcolombia</a></p>
            <ul class="nav-footer text-center list-inline">
                <li class="text-capitalize"><a href="">Clases -</a></li>
                <li class="text-capitalize"><a href="">Fiestas -</a></li>
                <li class="text-capitalize"><a href="">Campamentos -</a></li>
                <li class="text-capitalize"><a href="">Horarios -</a></li>
                <li class="text-capitalize"><a href="">Quiénes Somos -</a></li>
                <li class="text-capitalize"><a href="">Encuentra un The Little Gym </a></li>
            </ul>
            <ul class="legal-footer-nav list-inline">
                <li class="small"><a href="">Políticas de privacidad -</a></li>
                <li class="small"><a href="">Términos de Uso </a></li>
            </ul>
            <h6>&copy;<?php echo date("Y") ?> The Little Gym Colombia</h6>
        </div>


    </div>
</footer>
    <?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/static/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){

        /**
         * This object controls the nav bar. Implement the add and remove
         * action over the elements of the nav bar that we want to change.
         *
         * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
         */
        var myNavBar = {

            flagAdd: true,

            elements: [],

            init: function (elements) {
                this.elements = elements;
            },

            add : function() {
                if(this.flagAdd) {
                    for(var i=0; i < this.elements.length; i++) {
                        document.getElementById(this.elements[i]).className += " fixed-theme";
                    }
                    this.flagAdd = false;
                }
            },

            remove: function() {
                for(var i=0; i < this.elements.length; i++) {
                    document.getElementById(this.elements[i]).className =
                            document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
                }
                this.flagAdd = true;
            }

        };

        /**
         * Init the object. Pass the object the array of elements
         * that we want to change when the scroll goes down
         */
        myNavBar.init(  [
            "header",
            "header-container",
            "brand"
        ]);

        /**
         * Function that manage the direction
         * of the scroll
         */
        function offSetManager(){

            var yOffset = 0;
            var currYOffSet = window.pageYOffset;

            if(yOffset < currYOffSet) {
                myNavBar.add();
            }
            else if(currYOffSet == yOffset){
                myNavBar.remove();
            }

        }

        /**
         * bind to the document scroll detection
         */
        window.onscroll = function(e) {
            offSetManager();
        }

        /**
         * We have to do a first detectation of offset because the page
         * could be load with scroll down set.
         */
        offSetManager();
    });
</script>
  </body>
</html>