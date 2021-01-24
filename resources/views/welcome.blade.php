<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Lead Generation Agency</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{asset('frontend/css/templatemo-style.css')}}">
		<script src="{{asset('frontend/js/jquery.js')}}"></script>
		
		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.singlePageNav.min.js')}}"></script>
		<script src="{{asset('frontend/js/typed.js')}}"></script>
		<script src="{{asset('frontend/js/wow.min.js')}}"></script>
		<script src="{{asset('frontend/js/custom.js')}}"></script>
		<script src="{{asset('frontend/js/pricing.js')}}"></script>



		
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

        <!-- start header -->
   
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">LEAD AGENCY</a>
				</div>
				<div class="collapse navbar-collapse">
					<p class="alert-success" >
						<?php
					  $message=Session::get('message');
					  if($message){
						echo $message;
						Session::put('message',null);
					  }
					 
					 
					  ?>
					  </p>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#team">CLIENTS</a></li>
						<li><a href="#service">SERVICE</a></li>
						<li><a href="#portfolio">PRICING</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

    	<!-- start home -->
    	<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">Find Your Highly Targeted Verified Lead
							 <span>For Only 30¢</span></h1>
							 <h4>We find and build list in real-time on your specific criteria. Truly super affordable way to fill your pipeline with highly targeted high-quality leads</h4>
    					<div class="element">
                            <div class="sub-element">Hello, this is Jubayer</div>
                            <div class="sub-element">Upwork Top Lead generation Agency</div>
                            <div class="sub-element">Lead Generation, Data Entry, Web Reseaech Expert</div>
                        </div>
    					<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Let us do all the <span>work for you </span></h2>
						<p class="text-center">Our super expert research team targets and finds your most qualified prospects and validate 

							with prior technology by hands.</p>
    				</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-users"></i>
								</div>
								<h3 class="media-heading">Get More Qualified Leads</h3>
							</div>
							<div class="media-body">
								<p>When you work with us, we take an granular approach to looking at your <a rel="nofollow" href="#" target="_parent">Target Audience, Sales Process, Competition & USP.</a>  We then overlay our process & strategies onto yours in order to create improved quality, online B2B leads that your sales team loves.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">Fastest Response</h3>
							</div>
							<div class="media-body">
								<p>If you need copy writing for your email marketing, blog posts, ebooks or transcriptions, we can help. <a rel="nofollow" href="#"></a>Our extensive knowledge of the B2B space gives us unrivaled knowledge in to most niches. <a rel="nofollow" href="#"></a>   If we’ve never worked inside your B2B niche, we’ll immerse ourselves into it and create writing samples for your review from our talented writers.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-list-alt"></i>
								</div>
								<h3 class="media-heading">Date &AMP; & Time</h3>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- end about -->

    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>OUR GLOBAL </span> CLIENTS</h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{asset('frontend/images/team-img5.jpg')}}" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>James Woodworth </h4>
    								<span>CEO at Geri's Hamburgers</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{asset('frontend/images/team-img5.jpg')}}" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>James Woodworth </h4>
    								<span>CEO at Geri's Hamburgers</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{asset('frontend/images/team-img5.jpg')}}" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>James Woodworth </h4>
    								<span>CEO at Geri's Hamburgers</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{asset('frontend/images/team-img5.jpg')}}" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>James Woodworth </h4>
    								<span>CEO at Geri's Hamburgers</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end team -->

    	<!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">OUR <span>SERVICE</span> FOR YOU</h2>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-search"></i>
    					<h4>Web Research</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-users"></i>
    					<h4>Lead Generation</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-database"></i>
    					<h4>Data Entry</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-user"></i>
    					<h4>Admin Support</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-search"></i>
    					<h4> Email Searching</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-headset"></i>
    					<h4>Digital Marketing</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end servie -->

    	<!-- start portfolio -->
    	<section id="portfolio">
    		<div class="container"  id="portfolio">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>SOLUTION AND </span> PRICING</h2>
					</div>
					



					<div class="snip1404 ">
						<div class="plan wow fadeInLeft">
						  <header>
							<h4 class="plan-title">
							  Starter
							</h4>
							<div class="plan-cost"><span class="plan-price">$0.30</span><span class="plan-type">/per data</span></div>
						  </header>
						  <ul class="plan-features">
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>24/7 week</li>
							<li><i class="ion-checkmark"> </i>Daily conect</li>
						  </ul>
						  <div class="plan-select"><a href="">Select Plan</a></div>
						</div>
						<div class="plan wow fadeInUP">
						  <header>
							<h4 class="plan-title">
							   
							  Basic
							</h4>
							<div class="plan-cost"><span class="plan-price">$30</span><span class="plan-type">/400 data</span></div>
						  </header>
						  <ul class="plan-features">
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>24/7 </li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
						  </ul>
						  <div class="plan-select"><a href="">Select Plan</a></div>
						</div>
						<div class="plan featured wow fadeInUp">
						  <header>
							<h4 class="plan-title">
							   
							  Professional
							</h4>
							<div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/600 Data</span></div>
						  </header>
						  <ul class="plan-features">
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>24/7 </li>
							<li><i class="ion-checkmark"> </i>Daily </li>
						  </ul>
						  <div class="plan-select"><a href="">Select Plan</a></div>
						</div>
						<div class="plan wow fadeInRight">
						  <header>
							<h4 class="plan-title">
							   
							  Ultra
							</h4>
							<div class="plan-cost"><span class="plan-price">$7.50</span><span class="plan-type">/Hourly</span></div>
						  </header>
						  <ul class="plan-features">
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited </li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
							<li><i class="ion-checkmark"> </i>24/7 </li>
							<li><i class="ion-checkmark"> </i>Unlimited Email</li>
						  </ul>
						  <div class="plan-select"><a href="">Select Plan</a></div>
						</div>
					  </div>
					







    			</div>
    		</div>
    	</section>
    	<!-- end portfolio -->

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>ME</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
					<form action="{{url('/send-message')}}" method="post">
						@csrf
    						<label>NAME</label>
    						<input name="name" type="text" class="form-control" id="fullname">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message_body" rows="4" class="form-control" id="message"></textarea>
    						
                            <input type="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</span>
    						<p><i class="fa fa-phone"></i>+8801738561653</p>
    						<p><i class="fa fa-envelope-o"></i>tofael.hoqueit@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> College Road, Purna Tola, Sherpur, Bogra, Bangladesh </p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>Social Address</h4></li>
    						<li><a href="https://www.facebook.com/Tat.Tonmoy"  target="_blank" class="fa fa-facebook"></a></li>
    						<li><a href="https://twitter.com/ahmmad_tofael" target="_blank" class="fa fa-twitter"></a></li>
                            <li><a href=" https://www.instagram.com/tofaelahmmadtonmoy/" target="_blank" class="fa fa-instagram"></a></li>
                            <li><a href=" https://www.linkedin.com/in/tofaelahmmad/" target="_blank" class="fa fa-linkedin"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                       	Copyright &copy; 2020 jubayer</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

	</body>
</html>