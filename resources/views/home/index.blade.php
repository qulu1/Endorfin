<!DOCTYPE html>
<html>
	<head>
		<title>Endorphin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
		<meta name="author" content="Bartosz Wojciechowski">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../fancy/jquery.fancybox.css">
		<link href="../css/owl.carousel.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<div id="preloader">
			<div id="status"></div>
		</div>
		<nav class = "navbar navbar-default container-fluid navmenuen navbar-fixed-top" role = "navigation">
			<div class="container">
				<div class = "navbar-header col-md-2">
					<button type = "button" class = "navbar-toggle"
					data-toggle = "collapse" data-target = "#example-navbar-collapse">
					<span class = "sr-only"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					</button>
					<img src="../images/LOGO1.png" class="scroll logo pull-right" data-section='header' >
				</div>
				<div class = "collapse navbar-collapse uldiv"  id = "example-navbar-collapse">
					<ul class = "nav navbar-nav navul">
						<li class="navli scroll" data-section='header' ><span class="s header">ABOUT</span></li>
						<li class="navli scroll" data-section='services' ><span class="s services">SERVICES</span></li>
						<li class="navli scroll" data-section='portfolio' ><span class="s portfolio">PORTFOLIO</span></li>
						<li class="navli scroll" data-section='staff' ><span class="s staff">STAFF</span></li>
						<li class="navli scroll" data-section='clients' ><span class="s clients">CLIENTS</span></li>
						<li class="navli scroll" data-section='contact' ><span class="s contact">CONTACT</span></li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="header" data-color="0" class="comSec" data-offset>
			<div class="container mainheader module">
				<div class="row">
					<div class="header-a">
						<span class=" module">WE ARE A CREATIVE, DIGITAL & <br> MARKETING AGENCY BASED IN<br> BAKU, AZERBAIJAN</span>
					</div>
					<div class="header-b">
						<span class="module ">AS THE SOCIAL MEDIA NETWORKS GROW WHERE EVERYONE IS CONNECTED TO ONE ANOTHER,<br>MARKETING BECOMES HIGLY DIFFERENTIIATED IN THE DIGITAL AGE.ENDORPHIN IS THE MARKETING<br>EXPERT OF SOCIAL NETWORKS AND IS IN CHARGE OF ALL THE DETALIS.USING CONTEMPORARY<br>TECHNOLOGIY AND DIGITAL TOOLS; ENDORPHIN SHAPES YOUR MARKETING STRATEGY,GETS YOU<br>RESULTS AND HELPS YOUR REACH YOUR MARKETING GOALS</span>
					</div>
					<div class="headericon">
						<ul>
							<li class="module"><a href="https://www.facebook.com/EndorphinBaku/?ref=br_rs" target="_blank"><img src="../images/FACEBOOK.png" class="facebook"></a></li>
							<li class="module"><a href="https://www.instagram.com/endorphinbaku/" target="_blank"><img src="../images/INSTAGRAM.png" class="instagram"></a></li>
							<li class="module"><a href="https://twitter.com/endorphinbaku" target="_blank"><img src="../images/TWITTER.png" class="twitter"></a></li>
							<li class="module"><a href="https://www.youtube.com/channel/UCXLyfuvpSN4BM4EY7ZmyvHQ"><img src="../images/YOUTUBE.png" class="youtube" target="_blank"></a></li>
							<li class="module"><a href="https://www.linkedin.com/company/endorphin-baku"><img src="../images/linkedin.png" class="linkedin" target="_blank"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="services" data-color="1"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container mainservices">
				<div class="row">
					<div class="module">
						<span>SERVICES</span>
					</div>
					<div class="col-md-4 servipadd">
						<div class="module">
							<img src="../images/creative icon.png" alt="">
						</div>
						<div class="module">
							<span>Creative</span>
						</div>
						<div class="toggle module">
							<div class="clicktogle1 fulltoggle">
								<div></div>
								<ul class="toggleCreate">
								@foreach($creative as $key)
									<li>{{ $key->text }}</li>
								@endforeach								
								</ul>
								<div></div>
							</div>
						</div>
					</div>
					<div class="col-md-4 servipadd">
						<div class="module">
							<img src="../images/digital icon.png" alt="">
						</div>
						<div class="module">
							<span>Digital</span>
						</div>
						<div class="toggle module">
							<div class="clicktogle2 fulltoggle">
								<div></div>
								<ul class="toggleDig">
								@foreach($digital as $key)
									<li>{{ $key->text}}</li>
								@endforeach	
								</ul>
								<div></div>
							</div>
						</div>
					</div>
					<div class="col-md-4 servipadd">
						<div class="module">
							<img src="../images/marketing icon.png" alt="">
						</div>
						<div class="module">
							<span>Marketing</span>
						</div>
						<div class="toggle module">
							<div class="clicktogle3 fulltoggle">
								<div></div>
								<ul class="toggleMark">
								@foreach($marketing as $key)
									<li>{{ $key->text}}</li>
								@endforeach	
								</ul>
								<div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio"  data-color="0" class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class=" mainportfolio">
				<div class="module portfolio-header">
					<span>PORTFOLIO</span>
				</div>
				<!-- <div id="jssor_2" class="port-main-slider module ">
						<div data-u="slides" class="port-slider-main-slides">
								<div data-p="225.00" class="sliderContent-mine " style="display: none;">
										<div class="  main-portfolio-images">
												<div class="row">
														<div class=" portimg module" >
																<a class="fancybox" rel="group" href="../images/port (1).jpg"></a>
														</div>
												</div>
										</div>
								</div>
								<div data-p="225.00" style="display: none;" class="sliderContent-mine">
										<div class="  main-portfolio-images">
												<div class="row">
														<div class=" portimg module" >
																<a class="fancybox" rel="group" href="../images/port (2).jpg">
																		<img src="../images/port (2).jpg" alt="" class="image-port">
																</a>
														</div>
												</div>
										</div>
								</div>
						</div>
						<span data-u="arrowleft" class="jssora22l" data-autocenter="2">
								<img src="../images/right.png" style="width: 100%;">
						</span>
						<span data-u="arrowright" class="jssora22r" data-autocenter="2">
								<img src="../images/next.png" style="width: 100%;">
						</span>
				</div> -->
				<div class="port-slider-main" >
					<div id="owl-portfolio" class="owl-carousel module">
					@foreach($portfolio as $key)
						<div class="item">
							<a class="fancybox" rel="group" href="../images/{{$key->photo}}">
								<img src="../images/{{$key->photo}}" class="img-responsive">
								<div class="port-absolute">
									<h3>{{$key->title}}</h3>
								</div>
							</a>
						</div>
					@endforeach
					</div>
					<div class="prev module"><img src="../images/prev-port.png" alt=""></div>
					<div class="next module"><img src="../images/next-port.png" alt=""></div>
				</div>
				
				<div id="jssor_5" class="port-mobil-slider-mine" >
					<div data-u="loading" class="port-mobil-slider-loading">
						<div class="loading-1"></div>
						<div class="loading-2"></div>
					</div>
					<div data-u="slides" class="port-mobil-slides module">
						@foreach($portfolio as $key)
							<div>
								<div class="port-mobil-slide-image">
									<img src="../images/{{$key->photo}}" alt="">
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<section id="staff" data-color="1"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container mainstaff">
				<div class="row">
					<div class="module staff-header">
						<span>STAFF</span>
					</div>
					<div class="clearfix"></div>
					<div class="staff-content">
						@foreach($staff as $key)
							<div class="staffcon">
								<div class="img module">
									<img src="../images/{{$key->photo}}">
								</div>
								<div class="stafftext module">
									<span>{{$key->name.' '.$key->surname}}</span><br>
									<span>{{$key->position}}</span>
								</div>
							</div>
						@endforeach							
					</div>
				</div>
				<div class="staff-slider-padding">
					<div id="jssor_3" class="staff-slider-mine"  >
						<div data-u="loading" class="staff-slider-loading">
							<div class="loading-1"></div>
							<div class="loading-2"></div>
						</div>
						<div data-u="slides" class="staff-slides module">
							@foreach($staff as $key)
								<div>
									<div class="staff-slide-image">
										<img src="../images/{{$key->photo}}" alt="">
									</div>
									<div class="staff-slide-text">
										<p>{{$key->name.' '.$key->surname}}</p>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="clients" data-color="0"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container mainclients ">
				<div class="row">
					<div class="module">
						<span>
							CLIENTS
						</span>
					</div>
					<div class="clients-list">
						<ul>
							@foreach($client as $key)
								<li class="module"><img src="../images/{{$key->photo}}"></li>
							@endforeach							
						</ul>
						<div class="clearfix">
						</div>
						<!-- <div style="width: 100%;">
														<button type="button" class="clients-button btn center-block">See More</button>
						</div> -->
					</div>
					<div>
					</div>
					<div id="jssor_1" class="clients-slider-mine"  >
						<div data-u="loading" class="client-slider-loading">
							<div class="loading-1"></div>
							<div class="loading-2"></div>
						</div>
						<div data-u="slides" class="client-slides module">
						@foreach($client as $key)
							<div>
								<div class="client-slide-image">
									<img src="../images/{{$key->photo}}" alt="">
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact" data-color="1"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container maincontact ">
				<div class="row">
					<div class="contactheader module">
						<span>
							CONTACT
						</span>
					</div>
					<div class="col-md-5">
						<div class="contact-left">
							<div class="module">
								<div class="contactcontent">
									<a href="mailto:info@endorphin.az" title=""><img src="../images/email.png" class="email"></a>
									<a href="mailto:info@endorphin.az" title=""><p>info@endorphin.az</p></a>
								</div>
							</div>
							<div class="module">
								<div class="contactcontent-a">
									<a href="https://www.google.com/maps/place/Endorphin/@40.385134,49.8258933,17z/data=!4m5!3m4!1s0x0:0xb1b4ae08a0541630!8m2!3d40.385134!4d49.828082?hl=ru-RU" title=""><img src="../images/location.png" class="location"></a>
									<a class="map-link" href="https://www.google.com/maps/place/Endorphin/@40.385134,49.8258933,17z/data=!4m5!3m4!1s0x0:0xb1b4ae08a0541630!8m2!3d40.385134!4d49.828082?hl=ru-RU" title=""><p >Globus Center floor 11 <br>Ofis N 11.05</p></a>
								</div>
							</div>
							<div class="module">
								<div class="contactcontent">
									<a href="call:+994 12 408 79 31" title=""><img src="../images/telephone.png" class="telephone"></a>
									<a href="call:+994 12 408 79 31" title=""><p class="phone">(012) 408 79 31</p></a>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="col-md-7">
						<div class="main-form">
							<form action="messages/contact" method="POST" accept-charset="utf-8">
							{{ csrf_field() }}
								<input type="email" name="email" placeholder="Email" class="input module">
								<input type="Text" name="subject" placeholder="Subject" class="input module">
								<textarea name="message" class="textarea module" placeholder="Message"></textarea>
								<button type="submit" class="button module">Send</button>
							</form>							
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
	<script src ="../Js/jquery.js"></script>
	<script src="../Js/jssor.slider-21.1.6.mini.js"></script>
	<script src="../Js/jssor.slider.mini.js"></script>
	<script src="../Js/jssor.slider-21.1.6.debug.js"></script>
	<script src ="../Js/bootstrap.js"></script>
	<script src="../fancy/jquery.fancybox.js"></script>
	<script src="../js/owl.carousel.js"></script>
	<script src="../Js/main.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
	
</html>