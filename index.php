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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css"/>

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>



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
		            <a href="#skillsection" class="nav-link" style="color:white" id="skillbutton">
		              <small style="color:#a8a8a8">1. </small>Skills
		            </a>
		          </li>
		          <li class="nav-item">
		            <a href="#experiencesection" class="nav-link" style="color:white" id="experiencebutton">
		              <small style="color:#a8a8a8">2. </small>Experience
		            </a>
		          </li>
		          <li class="nav-item">
		            <a href="#contactsection" class="nav-link" style="color:white" id="contactbutton">
		              <small style="color:#a8a8a8">3. </small>Contact
		            </a>
		          </li>
		        </ul>
	        </div>

	      </div>

	    </div>
	  </nav>

	<section class="container-fluid vh-100 login-page" id="homesection">
		
			<!-- data-tilt data-tilt-max="50" data-tilt-speed="400" data-tilt-perspective="500" data-aos="fade-up" data-aos-duration="3000"  -->
		<div style="margin-top: -150px; " >
			<h2 class="andymainfont">Andrywin Maquinto</h2>
			<h5 class="andysecondfont" id="andytyping"><span class="typed"></span></h5>			
			<div class="andylinks" style="padding-top:10px;">
				<a href="https://www.facebook.com/w3schoolscom/" target="_blank" title="Facebook" style="color:blue;" class="hvr-grow-rotate">
					<span class="fa fa-facebook-square fa-2x"></span>
				</a>
				<a href="https://www.instagram.com/w3schools.com_official/" target="_blank" title="Github" style="color:black;" class="hvr-grow-rotate">
					<span class="fa-brands fa-square-github fa-2x"></span>
				</a>
				<a href="https://www.linkedin.com/company/w3schools.com/" target="_blank" title="LinkedIn" style="color:#006599;" class="hvr-grow-rotate">
					<span class="fa fa-linkedin-square fa-2x"></span>
				</a>
				<a href="https://discord.gg/6Z7UaRbUQM" target="_blank" title="Join the W3schools community on Discord" style="color:#6e85d2;" class="hvr-grow-rotate">
					<span class="fa fa-discord fa-2x"></span>
				</a>
			</div>

			<!-- <div class="position-absolute" style="bottom:1%; right:2%;" id="andymainimagelocation">
					<img class="andymainimage" src="images/ani1.png">
			</div> -->
			
			<div class="position-absolute text-center andyscroll" style="bottom:1%; left:50%; transform: translate(-50%, -50%);" id="andyscroll">
				<p style="margin: 0; font-size: 12pt;font-style: 'Raleway', cursive; color: #a8a8a8;">Scroll to see my story</p><br>
				<img class="img-responsive" width="50px" height="50px" src="images/scroll.gif" >
			</div>
	
		</div>
			




	</section>
	<section class="container-fluid vh-100" style="background-image: linear-gradient(#454d55,#454d55,#7d4949)" id="skillsection">
		<!-- <div data-aos="fade-up" data-aos-duration="3000"> -->
			<div class="row" style="padding-top:10%;">
				<div class="col-md-8 text-center" >
					<h1>You can call me Andy / Drew!</h1>
					<p class="andyskillsectiontext">The things you read above, are the things that I usually do, what I think of myself and things that I like. </p>
				</div>
				<div class="col-md-3 text-center">
					<img class="m-50 h-100" src="images/andy1anim.gif" style="width: 80%; padding: 0;">
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
<!-- FOR NAVIGATION CONTROLS -->
<script>

	document.addEventListener('keydown', (event) => {
		var keypress = event.key;
		var keycode = event.code;

		if(keycode === "Space")
		{	
			$('html, body').animate({
				scrollTop: $("#homesection").offset().top
			});
		}
		if(keypress === "1")
		{	
			$('html, body').animate({
				scrollTop: $("#skillsection").offset().top
			});
		}
		if(keypress === "2")
		{	
			$('html, body').animate({
				scrollTop: $("#experiencesection").offset().top
			});
		}
		if(keypress === "3")
		{	
			$('html, body').animate({
				scrollTop: $("#contactsection").offset().top
			});
		}
		
	}, false);


</script>

<!-- FOR NAVBAR -->
<script type="text/javascript">
	
	$('#navbartoggler').click(function() {
	    $(this).toggleClass('vh-100');
	    $(this).toggleClass('vw-100');
	});


</script>


<script>
  AOS.init();
</script>
<script>
	$(function(){
	$(".typed").typed({
		strings: ["Developer, Editor, Gaming Enthusiast", "Curious, Reliable, Cooperative","Games, Movies, Foods"],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 30,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 2,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// show cursor
		showCursor: true,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});

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