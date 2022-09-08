$(function () { // wait for document ready
	var flightpath = {
		entry : {
			curviness: 1.25,
			autoRotate: true,
			values: [
					{x: 100,	y: -20},
					{x: 300,	y: 10}
				]
		},
		looping : {
			curviness: 1.25,
			autoRotate: true,
			values: [
					{x: 510,	y: 60},
					{x: 700,	y: -60},
					{x: 900,	y: -100},
					{x: 1200,	y: 20},
					{x: 1300,	y: 60},
					{x: 1400,	y: 20},
					{x: 1800,	y: 10},
					// {x: 1500,	y: 10},
					// {x: 1800,	y: 12},
					// {x: 620,	y: 15},
					// {x: 510,	y: 60},
					// {x: 450,	y: -60},
					// {x: 380,	y: -100},
					// {x: 600,	y: 20},

					// {x: 510,	y: 60},
					// {x: 700,	y: -60},
					// {x: 900,	y: -100},
					// {x: 1200,	y: 20},
					// {x: 1300,	y: 60},
					// {x: 1400,	y: 20},
					// {x: 1800,	y: 12},
					// {x: 620,	y: 15},
					// {x: 510,	y: 60},
					// {x: 450,	y: -60},
					// {x: 380,	y: -100},
					// {x: 600,	y: 20},
					// {x: 212,	y: 60},
					// {x: -130,	y: 100},
				]
		},	
	};
	// init controller
	var controller = new ScrollMagic.Controller();

	// create tween
	var tween = new TimelineMax()
		.add(TweenMax.to($("#plane"), 1.2, {css:{bezier:flightpath.entry}, ease:Power1.easeInOut}))
		.add(TweenMax.to($("#plane"), 2, {css:{bezier:flightpath.looping}, ease:Power1.easeInOut}));

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 800, offset: 0})
					.setPin("#target")
					.setTween(tween)
					// .addIndicators() // add indicators (requires plugin)
					.addTo(controller);
})