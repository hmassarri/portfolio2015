<?php 

	function indexMenu() {

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
	

?>