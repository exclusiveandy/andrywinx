$(document).ready(function() { 


	var is_game_started = false;

	$('#yesgame').click(function() {
		

		$('#playground').animate({
	      width: 'toggle'
	    });
	    $('#playground').css('display', 'flex');
		
	});

	$('#nogame').click(function() {
		
		$("#contactsection").show();
		$('html, body').animate({
			scrollTop: $("#contactsection").offset().top
		});
	});

	$('#startgame').click(function() {
			
		if(is_game_started==false)
		{
			gameStart();			
			$('#jet').show();
			$('#gameover').animate({transform: 'scale('+1+')',fontColor: "#990000"}, 500).css('transform', 'scale(1)');
			$('#gameover').fadeOut(50);
			is_game_started = true;
		}
		

	});

	$('#stopgame').click(function() {
			
		// gameInit();
		if(is_game_started==true)
		{
			
			clearInterval(generaterocks);
			clearInterval(moverocks);

			$('.rocks').remove();
			$('#gameover').show().animate({transform: 'scale('+5+')',fontColor: "#990000"}, 500)
			$('#gameover').css('transform', 'scale(5)');
			$('#jet').hide();
			$('#gameoverpoints').hide();			
			is_game_started = false;
			
			
		}

	});

	$('#closegame').click(function() {
			
		$('#playground').animate({
	      width: 'toggle'
	    });

	    if(is_game_started==true)
		{			
			clearInterval(generaterocks);
			clearInterval(moverocks);
			$('.rocks').remove();
			$('#gameover').show().animate({transform: 'scale('+5+')',fontColor: "#990000"}, 500)
			$('#gameover').css('transform', 'scale(5)');
			$('#jet').hide();
			$('#gameoverpoints').hide();			
			is_game_started = false;
		}

		$("#contactsection").show();
		$('html, body').animate({
			scrollTop: $("#contactsection").offset().top
		});


		
	});


	var timeOutLeft;
	$('#gotoleft').on('mousedown touchstart', function(e) {
	    timeOutLeft = setInterval(function(){
	     	var left = parseInt(window.getComputedStyle(jet).getPropertyValue("left"));
			if(is_game_started==true)
			{	
				jet.style.left = left - 13 + "px";
				// console.log(jet.style.left)
			}
	    }, 100);
	}).bind('mouseup mouseleave touchend', function() {
	    clearInterval(timeOutLeft);
	});

	var timeOutRight;
	$('#gotoright').on('mousedown touchstart', function(e) {
	    timeOutRight = setInterval(function(){
	     	var left = parseInt(window.getComputedStyle(jet).getPropertyValue("left"));
			if(is_game_started==true)
			{	
				jet.style.left = left + 13 + "px";
				// console.log(jet.style.left)
			}
	    }, 100);
	}).bind('mouseup mouseleave touchend', function() {
	    clearInterval(timeOutRight);
	});

	var timeOutShoot;
	$('#shootrock').on('mousedown touchstart', function(e) {
	    timeOutShoot = setInterval(function(){
	     	var left = parseInt(window.getComputedStyle(jet).getPropertyValue("left"));
			if(is_game_started==true)
			{	
				//32 is for space key
				var bullet = document.createElement("div");
				bullet.classList.add("bullets");
				board.appendChild(bullet);

				var movebullet = setInterval(() => {

					var rocks = document.getElementsByClassName("rocks");

					for (var i = 0; i < rocks.length; i++) 
					{	
						// console.log(i+"rockmoves")
						var rock = rocks[i];
						if (rock != undefined) 
						{								
							var rockbound = rock.getBoundingClientRect();
							var bulletbound = bullet.getBoundingClientRect();

							//Condition to check whether the rock/alien and the bullet are at the same position..!
							//If so,then we have to destroy that rock

							if (
							bulletbound.left >= rockbound.left &&
							bulletbound.right <= rockbound.right &&
							bulletbound.top <= rockbound.top &&
							bulletbound.bottom <= rockbound.bottom
							) 
							{
								rock.parentElement.removeChild(rock); //Just removing that particular rock;
								//Scoreboard
								document.getElementById("points").innerHTML =
								parseInt(document.getElementById("points").innerHTML) + 1;

								if(parseInt(document.getElementById("points").innerHTML)>=30)
								{
									$('#gameoverpoints').show().animate({fontColor: "#990000"}, 500);
								}
								if(parseInt(document.getElementById("points").innerHTML)>=100)
								{
									$('#gameoverpoints').html("Wow you are so great!<br>That's enough for now. Thank you again for playing!");
								}
								if(parseInt(document.getElementById("points").innerHTML)>=500)
								{
									$('#gameoverpoints').html("Wow you are insane!<br>Go play somewhere else!.<br> Thank you again for playing!");
								}
								if(parseInt(document.getElementById("points").innerHTML)>=1000)
								{
									$('#gameoverpoints').html("This is the last condition! <br> Better refer me to a 6 digit salary company!");
								}
							}
						}
					}
					var bulletbottom = parseInt(window.getComputedStyle(bullet).getPropertyValue("bottom"));

					//Stops the bullet from moving outside the gamebox
					if (bulletbottom >= 400) 
					{
						clearInterval(movebullet);
					}

					bullet.style.left = left + 15+"px"; //bullet should always be placed at the top of my jet..!
					bullet.style.bottom = bulletbottom + 3 + "px";

				});
			}
	    }, 100);
	}).bind('mouseup mouseleave touchend', function() {
	    clearInterval(timeOutShoot);
	});

	// $('#shootrock').click(function() {
	// 	var left = parseInt(window.getComputedStyle(jet).getPropertyValue("left"));
	// 	if(is_game_started==true)
	// 	{			
			
	// 	}
	// });

	







	var jet = document.getElementById("jet");
	var board = document.getElementById("board");
	function gameStart()
	{
		gameInit();
		generateRocks();
		moveRocks();
	}

	function gameInit()
	{
		window.addEventListener("keydown", (e) => {

			var left = parseInt(window.getComputedStyle(jet).getPropertyValue("left"));
			if (e.key == "a" && left > 0)
			{	
				jet.style.left = left - 13 + "px";
			}
			//460  =>  board width - jet width
			else if (e.key == "d" && left <= 360) 
			{
				jet.style.left = left + 13 + "px";
			}

			if (e.key == "c" || e.keyCode == 67) 
			{
				//32 is for space key
				var bullet = document.createElement("div");
				bullet.classList.add("bullets");
				board.appendChild(bullet);

				var movebullet = setInterval(() => {

					var rocks = document.getElementsByClassName("rocks");

					for (var i = 0; i < rocks.length; i++) 
					{	
						// console.log(i+"rockmoves")
						var rock = rocks[i];
						if (rock != undefined) 
						{								
							var rockbound = rock.getBoundingClientRect();
							var bulletbound = bullet.getBoundingClientRect();

							//Condition to check whether the rock/alien and the bullet are at the same position..!
							//If so,then we have to destroy that rock

							if (
							bulletbound.left >= rockbound.left &&
							bulletbound.right <= rockbound.right &&
							bulletbound.top <= rockbound.top &&
							bulletbound.bottom <= rockbound.bottom
							) 
							{
								rock.parentElement.removeChild(rock); //Just removing that particular rock;
								//Scoreboard
								document.getElementById("points").innerHTML =
								parseInt(document.getElementById("points").innerHTML) + 1;

								if(parseInt(document.getElementById("points").innerHTML)>=30)
								{
									$('#gameoverpoints').show().animate({fontColor: "#990000"}, 500);
								}
								if(parseInt(document.getElementById("points").innerHTML)>=100)
								{
									$('#gameoverpoints').html("Wow you are so great!<br>That's enough for now. Thank you again for playing!");
								}
								if(parseInt(document.getElementById("points").innerHTML)>=500)
								{
									$('#gameoverpoints').html("Wow you are insane!<br>Go play somewhere else!.<br> Thank you again for playing!");
								}
								if(parseInt(document.getElementById("points").innerHTML)>=1000)
								{
									$('#gameoverpoints').html("This is the last condition! <br> Better refer me to a 6 digit salary company!");
								}
								

							}
						}
					}
					var bulletbottom = parseInt(window.getComputedStyle(bullet).getPropertyValue("bottom"));

					//Stops the bullet from moving outside the gamebox
					if (bulletbottom >= 400) 
					{
						clearInterval(movebullet);
					}

					bullet.style.left = left + 15+"px"; //bullet should always be placed at the top of my jet..!
					bullet.style.bottom = bulletbottom + 3 + "px";

				});
			}
		});

	}
	
	var generaterocks;
	function generateRocks()
	{
		generaterocks = setInterval(() => {
			var rock = document.createElement("div");
			rock.classList.add("rocks");
			//Just getting the left of the rock to place it in random position...
			var rockleft = parseInt(
			  window.getComputedStyle(rock).getPropertyValue("left")
			);
			//generate value between 0 to 450 where 450 => board width - rock width
			rock.style.left = Math.floor(Math.random() * 365) + "px";

			board.appendChild(rock);
		}, 500);
	}
	

	var moverocks;
	function moveRocks()
	{
		moverocks = setInterval(() => {
			var rocks = document.getElementsByClassName("rocks");

			if (rocks != undefined) {
				for (var i = 0; i < rocks.length; i++) {
					//Now I have to increase the top of each rock,so that the rocks can move downwards..
					var rock = rocks[i]; //getting each rock
					var rocktop = parseInt(
						window.getComputedStyle(rock).getPropertyValue("top")
					);
					//475 => boardheight - rockheight + 25
					if (rocktop>= 375) {

						// alert("Game Over");
						clearInterval(moverocks);
						clearInterval(generaterocks);
						$('.rocks').remove();
						$('#gameover').show().animate({transform: 'scale('+5+')',fontColor: "#990000"}, 500)
						$('#gameover').css('transform', 'scale(5)');
						$('#jet').hide();
						$('#gameoverpoints').hide();
						is_game_started = false;

					}

					rock.style.top = rocktop + 25 + "px";
				}
			}
		}, 450);
	}




});


