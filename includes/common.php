<?php 
    
    function printMainMenu() {

    echo '<!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                Main Menu
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#projects" onclick = $("#menu-close").click(); >Projects</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>';

    }

    function printFooter() {

        echo '<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Hugo M.</strong>
                    </h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (408) 805-4846</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:hugo@hugomassarri.com">hugo@hugomassarri.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://github.com/hmassarri" target="_blank"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/blurtreynolds" target="_blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/hmassarri" target="_blank"><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Hugo M. / hugomassarri.com 2010-2015</p>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="col-lg-12 text-center">
        <a href="#top" class="btn btn-dark">Back to Top</a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $("a[href*=#]:not([href=#])").click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $("[name="" + this.hash.slice(1) + "]"");
                if (target.length) {
                    $("html,body").animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>';
}
?>    