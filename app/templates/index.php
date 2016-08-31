<!DOCTYPE html>
<html>
    <head>
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
						<div class="col-xs-12"><h1>Learn from locals - The world is your classroom</h1></div>
						<div class="col-xs-12">
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
								<h2>Want to be the first to know more about?<br/>* Don't worry we hate spams too</h2>
								<div class="input-group">
									<input name="email" class="form-control input-lg email-popover" type="email" placeholder="Your email" 
										   data-toggle="popover" data-placement="top" />
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default btn-lg pull-right">
											<span class="submit-btn-text">Send</span>
										</button>
									</span>
								</div>
							</form>
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
							<p><a href="mailto: contato@beyonder.me">contato@beyonder.me</a></p>
							<p>&COPY; 2016 Beyonder.ME</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
    </body>
</html>
