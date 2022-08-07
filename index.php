<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>AndrywinX - Lumikha at Maglaro</title>

	<link rel="icon" href="images/andrywinxico.png">
	<link rel="stylesheet" href="css/adminlte.css">  
	<link rel="stylesheet" href="css/andystyle.css">  
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="js/adminlte.min.js"></script>
	<!-- AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineLite.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



</head>
<style>
html {
	scroll-behavior: smooth;
}
body::-webkit-scrollbar {
  width: 7px;               /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
  background: gray;        /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: black;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid dimgray;  /* creates padding around scroll thumb */
}

.box {
  clip-path: circle(75%);
  transition: clip-path 1s;
}

.box:hover {
  clip-path: circle(40%);
}

</style>



<body class="hold-transition layout-top-nav dark-mode" >

	

	<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar" id="navbar"	style="transition: top 0.3s;"> 
	    <div class="container">

	    	<div onclick="navbar_toggler()" id="navbartoggler" class="navbartoggler" style="background-color:RGB(177,0,0); transition: all .2s linear; position: absolute">
	    		<span class="fa fa-facebook-square fa-2x"></span>
	      	</div>


	      <!-- Collapse -->
	<!--       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	        aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
 -->
	      

	      <!-- Links -->
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">

	        <!-- Left -->
	        <ul class="navbar-nav mr-auto">
	      
	        </ul>

	        <!-- Right -->
	        <div class="andynavs">
		        <ul class="navbar-nav nav-flex-icons" >
		          <li class="nav-item">
		            <a href="#skillsection" class="nav-link" style="color:white">
		              Skills
		            </a>
		          </li>
		          <li class="nav-item">
		            <a href="#experiencesection" class="nav-link" style="color:white">
		              Experience
		            </a>
		          </li>
		          <li class="nav-item">
		            <a href="#contactsection" class="nav-link" style="color:white">
		              Contact
		            </a>
		          </li>
		        </ul>
	        </div>

	      </div>

	    </div>
	  </nav>

	<section class="container-fluid vh-100 login-page" style="background-color:#343a40">
		<!-- data-tilt data-tilt-max="50" data-tilt-speed="400" data-tilt-perspective="500" data-aos="fade-up" data-aos-duration="3000"  -->
		<div style="margin-top: -150px;">
			<h2 class="andymainfont">Andrywin Maquinto</h2>
			<h5 class="andysecondfont">Developer / Musician / Gaming Enthusiast</h5>
			<div class="andylinks" style="padding-top:10px;">
				<a href="https://www.facebook.com/w3schoolscom/" target="_blank" title="Facebook" style="color:blue;">
					<span class="fa fa-facebook-square fa-2x"></span>
				</a>
				<a href="https://www.instagram.com/w3schools.com_official/" target="_blank" title="Github" style="color:black;">
					<span class="fa-brands fa-square-github fa-2x"></span>
				</a>
				<a href="https://www.linkedin.com/company/w3schools.com/" target="_blank" title="LinkedIn" style="color:#006599;">
					<span class="fa fa-linkedin-square fa-2x"></span>
				</a>
				<a href="https://discord.gg/6Z7UaRbUQM" target="_blank" title="Join the W3schools community on Discord" style="color:#6e85d2;">
					<span class="fa fa-discord fa-2x"></span>
				</a>
			</div>
	
		</div>

	</section>
	<section class="container-fluid vh-100" style="background-color:#454d55" id="skillsection">
		<!-- <div data-aos="fade-up" data-aos-duration="3000"> -->
			<div class="row">
				<div class="col-md-8 text-center" >
					<h1>You can call me Andy / Drew!</h1>
					<p>I love coding I love coding I love coding I love coding I love coding I love coding I love coding I love coding I love coding I love coding I love coding </p>
				</div>
				<div class="col-md-3 text-center">
					<img class="m-50 h-100" src="images/andy1.png" style="width: 80%; padding: 0;">
				</div>	

			</div>
		<!-- </div> -->
	</section>
	<section class="section3 vh-100" style="background-color:dimgray" id="experiencesection">
		<div id="target" >
			<img id="plane" src="images/example_bezier.png" style="margin-left: -90px;">
		</div>
		
	

	</section>
	<section class="container-fluid vh-100" style="background-color:#454d55" id="contactsection">
		<div data-aos="fade-up" data-aos-duration="3000">
			<h5 class="andysecondfont">Mukhang Pwet Mabantot si Aldwin</h5>
		</div>
	</section>

	





</body>


<script type="text/javascript">
	
	$('#navbartoggler').click(function() {
	    $(this).toggleClass('vh-100');
	    $(this).toggleClass('vw-100');
	});


</script>

<script>
  AOS.init();
</script>

<script type="text/javascript">
	var lastScrollTop;
	navbar = document.getElementById('navbar');
	window.addEventListener('scroll',function(){
	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if(scrollTop > lastScrollTop){
		
		navbar.style.top= '-80px';
		
	}
	else{
	navbar.style.top='0';
	}
	lastScrollTop = scrollTop;
	});
</script>

<script>
	$(function () { // wait for document ready
		var flightpath = {
			entry : {
				curviness: 1.25,
				autoRotate: true,
				values: [
						{x: 100,	y: -20},
						{x: 300,	y: 10},
						{x: 500,	y: -100},
						{x: 380,	y: 20},
						{x: 500,	y: 60},
						{x: 580,	y: 20},
						{x: window.innerWidth,	y: 0}
					]
			},

		};
		// init controller
		var controller = new ScrollMagic.Controller();

		// create tween
		var tween = new TimelineMax()
			.add(TweenMax.to($("#plane"), 1.2, {css:{bezier:flightpath.entry}, ease:Power1.easeInOut}))
			.add(TweenMax.to($("#plane"), 2, {css:{bezier:flightpath.looping}, ease:Power1.easeInOut}))

		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#experiencesection", duration: 1000,})
						.setPin("#target")
						.setTween(tween)
						// .addIndicators() // ajaxdd indicators (requires plugin)
						.addTo(controller);
	})
</script>
</html>