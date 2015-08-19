<?php require_once 'includes/structure.php'; ?>
<?php printHeader(); ?>
<body>
    
    <!-- Navigation -->
    <?php navMenu(); ?>

    <!-- Header -->
    <header class="header" id="top">
        <div class="text-vertical-center">
            <img src="img/brandlogo.png"> 
            <!-- 
            <h1>Hugo M.</h1>
            <h3>Visual Designer / Front End Developer</h3> 
            -->
            <br>
            <br>
            <br>
            <a class="btn btn-dark btn-lg" href="#about">Check It Out</a>
        </div>
    </header>


    <!-- About -->
    <?php printQuotes("Visual Designer / Front End Developer<br />Design Junkie / Part-time Bike Builder", "Let's collaborate on your next project :)", "about"); ?>


    <!-- Skills -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section class="services bg-skills" id="skills">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Skills</h2>
                    <hr class="small">

                    <div class="row">
                        
                        <?php printSkills(); ?>

                    </div><!-- /.row (nested) -->
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Quote -->
    <?php printQuotes("Design is not just what it looks like and feels like. Design is how it works.", "-Steve Jobs", "quote1"); ?><!-- Page Content -->

    <div class="container" id="projects">
        <!-- Project Row 1 -->

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="page-header">Projects</h2>
            </div>
            <?php printProjects(); ?>
        </div><!-- /.row -->
        <hr>
    </div><!-- /.container -->
    

    <!-- Quote -->
    <?php printQuotes("Good design is as little design as possible", "-Deiter Rams", "quote3"); ?>

    <!-- Call to Action
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>
    -->


    <!-- Map -->
    <section class="map" id="contact">
        <iframe frameborder="0" height="100%" marginheight="0" marginwidth="0"
        scrolling="no" src=
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24275.336937773416!2d-74.44128245000002!3d40.48815845000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c65b6f09cf79%3A0x26738ad34043ac7a!2sNew+Brunswick%2C+NJ+08901!5e0!3m2!1sen!2sus!4v1439583979886"
        width="100%"></iframe><br>
        <small><a href=
        "https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A">
        </a></small> 
    </section>


    <!-- Footer -->        
    <?php printFooter(); ?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom -->
     <script>
    // Close the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

    // Open the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

    // Scroll to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name="' + this.hash.slice(1) + '"]');
                
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
</body>
</html>