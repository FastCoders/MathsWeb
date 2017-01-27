<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Teaching an Education School Category Flat Bootstrap Responsive Website Template | Portfolio :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Teaching Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/imagehover.css" rel="stylesheet" media="all">
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->















	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- //for-mobile-apps -->
	<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- animation-effect -->
	<link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
	<script src="{{ URL::asset('js/wow.min.js') }}"></script>
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="../home/index.blade.php"><span>T</span>eaching</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--shylock">
							<div class="agileinfo_social_icons">
								<ul class="agileinfo_social_icons1">
									<li><a href="#" class="facebook"></a></li>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="google"></a></li>
									<li><a href="#" class="pinterest"></a></li>
								</ul>
							</div>
							<ul class="nav navbar-nav">
								<li><a href="/index" class="hvr-bounce-to-bottom">Home</a></li>
								<li><a href="/services" class="hvr-bounce-to-bottom">Services</a></li>

								<li class="active"><a href="/portfolio">Portfolio</a></li>



								<li><a href="/downloads" class="hvr-bounce-to-bottom">Downloads</a></li>
								<li><a href="/mail" class="hvr-bounce-to-bottom">Mail Us</a></li>
							</ul>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- Portfolio -->
	<div class="portfolio">
		<div class="container">
			<h3 class="head head2">P<span>Latest <i>portfolio</i> grids</span></h3>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
						<li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Learning</a></li>
						<li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Playing</a></li>
						<li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Painting</a></li>
						<li role="presentation"><a href="#school" role="tab" id="school-tab" data-toggle="tab" aria-controls="school">School</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/6.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/6.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/1.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/1.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/7.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/7.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/8.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/8.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/9.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/9.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/10.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/10.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/11.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/11.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/12.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/12.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/13.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/13.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/1.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/1.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/10.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/10.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/13.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/13.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/6.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/6.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/7.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/7.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/9.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/9.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/11.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/11.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/12.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/12.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="school" aria-labelledby="school-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/8.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/8.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<script src="js/jquery.tools.min.js"></script>
				<script src="js/jquery.mobile.custom.min.js"></script>
				<script src="js/jquery.cm-overlay.js"></script>
				<script>
					$(document).ready(function(){
						$('.cm-overlay').cmOverlay();
					});
				</script>
		</div>
	</div>
<!-- //Portfolio -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-7 w3ls_newsletter_left">
				<h3>N<span>Subscribe to our newsletter</span></h3>
				<p>Suspendisse lacinia rutrum tincidunt.</p>
			</div>
			<div class="col-md-5 w3ls_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 w3l_footer_grid">
				<h2><a href="../home/index.blade.php"><span>T</span>eaching</a></h2>
				<p>Vestibulum sed convallis massa, eu aliquet massa. Suspendisse 
					lacinia rutrum tincidunt. Integer id erat porta, convallis tortor a, 
					ullamcorper magna.</p>
			</div>
			<div class="col-md-3 w3l_footer_grid">
				<h3>Address</h3>
				<ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
				</ul>
			</div>
			<div class="col-md-2 w3l_footer_grid">
				<h3>Navigation</h3>
				<ul class="agileinfo_footer_grid_nav">
					<li><a href="../Services/services.blade.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Services</a></li>
					<li><a href="portfolio.blade.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Portfolio</a></li>
					<li><a href="../short-codes/short-codes.blade.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Short Codes</a></li>
					<li><a href="../contact/index.blade.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3l_footer_grid">
				<h3>Social Media</h3>
				<ul class="agileinfo_social_icons1 agileinfo_social">
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="google"></a></li>
					<li><a href="#" class="pinterest"></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2016 Teaching. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>