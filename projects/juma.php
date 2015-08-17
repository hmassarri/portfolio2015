<?php include '../../assets/head.php'; ?>

			<div class="row rowFix">
				<div class="col-md-12">
					<p>&nbsp;</p>
					<h1>JUMA Creative, LLC</h1>
					<h3 class="text-muted">Design Studio</h3>
					<p>&nbsp;</p>
				</div>
			</div>


			<div id="projectContainerRow" class="row rowFix">
				<div id="mainContent" class="col-md-8">
					<div id="myCarousel" class="carousel fade" data-interval="7000" data-ride="carousel" style="margin-top: 0px;">
						<!-- Carousel indicators
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>-->

					   <!-- Carousel items -->
					    <div class="carousel-inner">
					        <div class="active item">
					            <a href="http://www.hugomassarri.com/portfolio/jumacreative/" target="_blank"><img src="<?php echo $publicPath; ?>images/juma.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
				    	</div>
					</div>
				</div>


				<div id="projectDesc" class="col-md-4">
					<h3 class="text-left">Design, Brand, & Development</h3>
					<p class="text-muted">I was approached to co-found a design studio in Somerville, NJ.  I decided to pursue and see what would happen.  It turned out that not only did I hone my skills as designer and developer, It was an awesome experience and I look forward to doing it again.  Much respect to the original members of JUMA.  I hope to work with them again in the future.</p>
					<p>&nbsp</p>
					<p><a href="http://www.hugomassarri.com/portfolio/jumacreative/" target="_blank">/portfolio/jumacreative</a></p>
				</div>
			</div>


			<?php
				include '../../controller/projectControls.php';
				include '../../controller/controller.php';
				include '../../assets/footer.php';
			?>