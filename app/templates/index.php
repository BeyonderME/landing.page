<!DOCTYPE html>
<html>
    <head>
		<!-- Favicon -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/images/favicomatic/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicomatic/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicomatic/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicomatic/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/images/favicomatic/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/images/favicomatic/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/images/favicomatic/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/images/favicomatic/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="assets/images/favicomatic/#FFFFFF" />
		<meta name="msapplication-TileImage" content="assets/images/favicomatic/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="assets/images/favicomatic/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="assets/images/favicomatic/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="assets/images/favicomatic/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="assets/images/favicomatic/mstile-310x310.png" />
		
        <meta charset="UTF-8">
        <title>Beyonder.ME</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="assets/css/style.min.css" />
		
		<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="assets/bower_components/bootstrap/js/tooltip.js"></script>
		<script src="assets/bower_components/bootstrap/js/popover.js"></script>
		<script src="assets/bower_components/OwlCarousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/js/main.js"></script> 
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-79742972-1', 'auto');
			ga('send', 'pageview');
		</script>
    </head>
    <body>
		<div id="total">
			<header>
				<div id="how-it-works" class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<a id="hide-how-it-works" href="javascript: void(0)" role="button">
								<i class="fa fa-times fa-2x"></i>
							</a>
						</div>
					</div>
					<div id="how-it-works-carousel" class="row">
						<div class="how-it-works-step col-xs-12 col-sm-3">
							<img src="assets/images/how-it-works/01.png" alt="Wander" />
							<h3>Wander</h3>
							<p>Explore the possibilities of a different culture and develop new skills, with locals, wherever you are.</p>
						</div>
						<div class="how-it-works-step col-xs-12 col-sm-3">
							<img src="assets/images/how-it-works/02.png" alt="Plan" />
							<h3>Plan</h3>
							<p>Get in touch with local residents through our platform and plan out what and where you're going to learn - the world is your classroom!</p>
						</div>
						<div class="how-it-works-step col-xs-12 col-sm-3">
							<img src="assets/images/how-it-works/03.png" alt="Learn" />
							<h3>Learn</h3>
							<p>Go fot it! Meet at the scheduled date and spot and dive into a deep cultural learning experience growing your toolbox of personal abilities.</p>
						</div>
						<div class="how-it-works-step col-xs-12 col-sm-3">
							<img src="assets/images/how-it-works/04.png" alt="Share" />
							<h3>Share</h3>
							<p>One skill down, many more to go! Review your experience, explore new possibilities for your next trip or become a local teacher yourself.</p>
						</div>
						
					</div>
				</div>
				
				<div id="header-main" class="container">
					<div class="row">
						<div class="col-xs-12">
							<img src="assets/images/logo.png" alt="Beyonder.me logo" class="img-responsive" />
						</div>
						<div class="col-xs-12"><h1><small>Learn from locals - The world is your classroom</small></h1></div>
						<div class="col-xs-12 text-center">
							<a id="show-how-it-works" href="javascript: void(0)" class="btn btn-default btn-lg" role="button">
								How It Works
							</a>
						</div>
					</div>
				</div>
			</header>

			<section id="main-content">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<form action="<?php echo $router->pathFor('submitBackend') ?>" method="POST" id="landing-page-form" novalidate>
								<h2><small>Want to be the first to know more about?</small></h2>
								<div class="input-group">
									<input name="email" class="form-control input-lg email-popover" type="email" placeholder="Your email" 
										   data-toggle="popover" data-placement="top" />
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default btn-lg pull-right">
											<span class="submit-btn-text">Send</span>
										</button>
									</span>
								</div>
								<h3><small>* Don't worry. We hate spams too.</small></h3>
							</form>
						</div>
					</div>
				</div>
			</section>
			
			<section id="our-team">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>We are</h2>
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1-5">
							<h3 class="visible-xs">Tai Barroso <a href="https://www.facebook.com/tehfzinha" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a></h3>
							<img src="assets/images/our-team/tai.jpg" alt="Tai Barroso" class="img-responsive img-circle" />
							<h3 class="hidden-xs">Tai Barroso <a href="https://www.facebook.com/tehfzinha" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a></h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-3">
							<h3 class="visible-xs">Julia Abreu <a href="https://www.facebook.com/julia.abreu" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a></h3>
							<img src="assets/images/our-team/dora-aventureira.jpg" alt="Julia Abreu" class="img-responsive img-circle" />
							<h3 class="hidden-xs">Julia Abreu <a href="https://www.facebook.com/julia.abreu" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a></h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-3">
							<h3 class="visible-xs">Julian Andrade <a href="https://www.facebook.com/julianchaos" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a></h3>
							<img src="assets/images/our-team/julian.jpg" alt="Julian Andrade" class="img-responsive img-circle" />
							<h3 class="hidden-xs">Julian Andrade <a href="https://www.facebook.com/julianchaos" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a></h3>
						</div>
					</div>
				</div>
			</section>
			
			<section id="partners">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Partners</h2>
						</div>
					</div>
					
					<!-- _Social Starters -->
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<h3>Social Starters</h3>
						</div>
						
						<div class="hidden-xs col-sm-offset-1 col-sm-2">
							<a href="http://www.socialstarters.org/" target="_blank">
								<img src="assets/images/partners/social-starters.jpg" alt="Social Starters" class="img-responsive" />
							</a>
						</div>
						<div class="col-xs-12 col-sm-8">
							<a href="http://www.socialstarters.org/" target="_blank" class="visible-xs">
								<img src="assets/images/partners/social-starters.jpg" alt="Social Starters" class="small-thumbnail" />
							</a>
							<p><a href="http://www.socialstarters.org/" target="_blank">_SocialStarters</a> run immersive experiences for volunteer business consultants who want to share their skills, travel with purpose and have a meaningful adventure. They match business professionals with grassroots entrepreneurs who are working hard to be financially sustainable whilst tackling issues in their communities in India, Sri Lanka & Brazil.</p>
							
							<ul class=" links fa-ul">
								<li>
									<i class="fa fa-li fa-link"></i>
									<a href="http://www.socialstarters.org/" target="_blank">
										 Site
									</a>
									
								</li>
								<li>
									<i class="fa fa-li fa-facebook-square"></i>
									<a href="https://www.facebook.com/WeAreSocialStarters/" target="_blank">
										 Facebook
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- Rio Criativo -->
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<h3>Rio Criativo</h3>
						</div>
						<div class="hidden-xs col-sm-offset-1 col-sm-2">
							<a href="http://riocriativo.com/" target="_blank">
								<img src="assets/images/partners/rio-criativo.png" alt="Rio Criativo" class="img-responsive" />
							</a>
						</div>
						<div class="col-xs-12 col-sm-8">
							<a href="http://riocriativo.com/" target="_blank" class="visible-xs">
								<img src="assets/images/partners/rio-criativo.png" alt="Rio Criativo" class="small-thumbnail" />
							</a>
							<p><a href="http://riocriativo.com/" target="_blank">Rio Criativo</a> has been formed within a department in the government of Rio. Their work involves developing and boosting cultural, creative and entrepreneurial projects & opportunities across Rio.</p>
						
							<ul class=" links fa-ul">
								<li>
									<i class="fa fa-li fa-link"></i>
									<a href="http://riocriativo.com/" target="_blank">
										 Site
									</a>
									
								</li>
								<li>
									<i class="fa fa-li fa-facebook-square"></i>
									<a href="https://www.facebook.com/riocriativo" target="_blank">
										 Facebook
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<img src="assets/images/logo-footer.png" alt="Beyonder.ME logo" />
						</div>
					</div>
				</div>
				<hr />
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<p>
								<a href="https://www.facebook.com/BeyonderME-608683155965574/" target="_blank">
									<i class="fa fa-facebook-square fa-2x"></i>
								</a>
								<a href="javascript: void(0)" target="_blank">
									<i class="fa fa-instagram fa-2x"></i>
								</a>
							</p>
						</div>
						<div class="col-xs-12">
							<p><a href="mailto: beyonder.me@gmail.com">beyonder.me@gmail.com</a></p>
							<p>&COPY; 2016 Beyonder.ME</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
    </body>
</html>
