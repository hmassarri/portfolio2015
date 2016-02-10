<?php 


        
    // PRINT COMMON ELEMENTS
    // ----------------------------------------

    // Header - printHeader()
    function printHeader() {
        echo '<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hugo M. Freelance Developer / Designer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>';
    }

    //Menu - navMenu()
    function navMenu() {
        echo '<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
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

    //Footer - printFooter()
    function printFooter() {
        echo '<footer>
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
        <a class="btn btn-lg btn-dark" href="#top">Back to Top</a>
    </div>';
    }

    function printProjectFooter() {
        echo '<footer>
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
        <a class="btn btn-lg btn-dark" href="#chad">Back to Top</a>
    </div>';
    }


    
    // FUNCTIONS
    // ----------------------------------------

    //Quotes - printQuotes()
    function printQuotes($quote, $who, $type) {
        echo '<section id="about" class="' . $type . '">';
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-lg-12 text-center">';
                        echo '<h2>' . $quote . '</h2>';
                        echo '<p class="lead"><i>' . $who . '</i></p>';
                    echo '</div>';
                echo '</div>';
                echo '<!-- /.row -->';
            echo '</div>';
            echo '<!-- /.container -->';
        echo '</section>';
    }

    //Skills - printSkills()
    function printSkills() {
        $fontawesome = array("fa-html5", "fa-css3", "fa-code", "fa-coffee", "fa-apple", "fa-joomla", "fa-drupal", "fa-wordpress", "fa-linux", "fa-codepen", "fa-bicycle", "fa-motorcycle");
        $percents = array(99, 95, 95, 99, 99, 98, 89, 85, 90, 81, 98, 100);
        $length = count($fontawesome);
        for ($x = 0; $x < $length; $x++) {
            echo '<div class="col-md-3 col-sm-6">' ."\n\t\t\t\t\t\t\t";
            echo '<div class="service-item">' ."\n\t\t\t\t\t\t\t\t";
            echo '<span class="fa-stack fa-4x">' ."\n\t\t\t\t\t\t\t\t\t";
            echo '<i class="fa fa-circle fa-stack-2x"></i>' ."\n\t\t\t\t\t\t\t\t\t";
            echo '<i class="fa ' . $fontawesome[$x] . ' fa-stack-1x text-primary"></i>' ."\n\t\t\t\t\t\t\t\t";
            echo '</span>' ."\n\t\t\t\t\t\t\t\t";
            echo '<h4><strong>' . $percents[$x] . '%</strong></h4>' ."\n\t\t\t\t\t\t\t";
            echo '</div>' ."\n\t\t\t\t\t\t";
            echo '</div>' ."\n\t\t\t\t\t\t";
        }
    }

    //Projects - printProjects()
    function printProjects() {
        $projects = array("chad", "chem", "convocation", "decadence", "hpcc", "iamdn", "irw", "juma", "math", "mountainview", "rei", "sas-deans", "showmay", "unidentified", "valentine", "wram");
        $length = count($projects);
        for ($p = 0; $p < $length; $p++) {
            echo '<div class="col-sm-4 col-xs-12">' ."\n\t\t\t\t";
            echo '<a href="project-items.php#' . $projects[$p] . '">' ."\n\t\t\t\t\t";
            echo '<img alt="" class="img-responsive portfolio-item thumb thumb" src="img/web/' . $projects[$p] . '.png">' ."\n\t\t\t\t";
            echo '</a>' ."\n\t\t\t";
            echo '</div>' ."\n\t\t\t";
        }
    }
    

?>