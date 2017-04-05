(function(){

	//var infobee = document.querySelector('#infobee');
	var beesvg = document.querySelector('#infobee');
	var btn1 = document.querySelector('#btn1');
	var btn2 = document.querySelector('#btn2');
	var btn3 = document.querySelector('#btn3');
	var btn4 = document.querySelector('#btn4');
	var btn5 = document.querySelector('#btn5');
	var btns = document.querySelectorAll('.bee-btn');
	var svgs6 = document.querySelectorAll('.container');
	var j = 0;
	var i;

	var infotitle = document.querySelector('#infoText h2');
	var infotext = document.querySelector('#infoText p');

	//Fill text on load
	infotitle.innerHTML = infoObj[0].title;
	infotext.innerHTML = infoObj[0].text;
	
	beesvg.addEventListener('load', beesvgLoaded, false);

	//switch text on click
	function switchText(e){
		var k = e.currentTarget.id.slice(3) -1;
		
		TweenMax.fromTo([infotitle,infotext], .8, {opacity:0},{opacity:1});
		infotitle.innerHTML = infoObj[k].title;
		infotext.innerHTML = infoObj[k].text;
	}

	function windowSize(){
		console.log(window.innerWidth);
		if(window.innerWidth <= 640){
			TweenMax.pauseAll();
		} else {
			TweenMax.resumeAll();
		}
	}



	function beesvgLoaded(e){ //What are bees?
		// General SVG
		var animate = beesvg.contentDocument;
		var bg = animate.querySelector('#bg');
		var info1 = animate.querySelector('#info1');
		var info2 = animate.querySelector('#info2');
		var info3 = animate.querySelector('#info3');
		var info4 = animate.querySelector('#info4');
		var info5 = animate.querySelector('#info5');
		var body = animate.querySelectorAll('.body');
		var heart = animate.querySelectorAll('.st4');

		//SVG BEES - Info 1
		var bee11 = animate.querySelector('#bee1-1');
		var body11 = animate.querySelector('#body_18_');
		var lwing11 = animate.querySelector('#l-wing_18_');
		var rwing11 = animate.querySelector('#r-wing_18_');

		var bee12 = animate.querySelector('#bee1-2');
		var body12 = animate.querySelector('#body_19_');
		var lwing12 = animate.querySelector('#l-wing_19_');
		var rwing12 = animate.querySelector('#r-wing_19_');

		var bee13 = animate.querySelector('#bee1-3');
		var body13 = animate.querySelector('#body_20_');
		var lwing13 = animate.querySelector('#l-wing_20_');
		var rwing13 = animate.querySelector('#r-wing_20_');

		//SVG BEES - Info 2
		var bee21 = animate.querySelector('#bee2-1');
		var lwing21 = animate.querySelector('#l-wing_1_');
		var rwing21 = animate.querySelector('#r-wing_1_');

		var bee22 = animate.querySelector('#bee2-2');
		var lwing22 = animate.querySelector('#l-wing_22_');
		var rwing22 = animate.querySelector('#r-wing_22_');

		var bee23 = animate.querySelector('#bee2-3');
		var lwing23 = animate.querySelector('#l-wing_21_');
		var rwing23 = animate.querySelector('#r-wing_21_');

		//SVG BEES - Info 3
		var bee31 = animate.querySelector('#bee3-1');
		var lwing31 = animate.querySelector('#l-wing_5_');
		var rwing31 = animate.querySelector('#r-wing_5_');

		var bee32 = animate.querySelector('#bee3-2');
		var lwing32 = animate.querySelector('#l-wing_4_');
		var rwing32 = animate.querySelector('#r-wing_4_');

		var bee33 = animate.querySelector('#bee3-3');
		var lwing33 = animate.querySelector('#l-wing_3_');
		var rwing33 = animate.querySelector('#r-wing_3_');

		var nozzle = animate.querySelector('#nozzle');
		var spray = animate.querySelector('#spray');
		var spraycan = animate.querySelector('#spraycan');

		//SVG BEES - Info 4
		var bee41 = animate.querySelector('#bee4-1');
		var lwing41 = animate.querySelector('#l-wing_8_');
		var rwing41 = animate.querySelector('#r-wing_8_');

		var bee42 = animate.querySelector('#bee4-2');
		var lwing42 = animate.querySelector('#l-wing_7_');
		var rwing42 = animate.querySelector('#r-wing_7_');

		var bee43 = animate.querySelector('#bee4-3');
		var lwing43 = animate.querySelector('#l-wing_6_');
		var rwing43 = animate.querySelector('#r-wing_6_');

		var keeper = animate.querySelector('#keeper');

		//SVG BEES - Info 5
		var bee51 = animate.querySelector('#bee5-1');
		var lwing51 = animate.querySelector('#l-wing_11_');
		var rwing51 = animate.querySelector('#r-wing_11_');

		var bee52 = animate.querySelector('#bee5-2');
		var lwing52 = animate.querySelector('#l-wing_10_');
		var rwing52 = animate.querySelector('#r-wing_10_');

		var bee53 = animate.querySelector('#bee5-3');
		var lwing53 = animate.querySelector('#l-wing_9_');
		var rwing53 = animate.querySelector('#r-wing_9_');

		var flowers = animate.querySelector('#flowers_1_');
		var leaves = animate.querySelector('#leaves_1_');
		

		//Button reveal functions
		function reveal1(){
			for(i=0; i<btns.length; i++){
				btns[i].style.backgroundColor="#fff";
			}
			btn1.style.backgroundColor = "#f6c421";

			TweenMax.to(info1, .5, {opacity:1});
		}
		function reveal2(){
			for(i=0; i<btns.length; i++){
				btns[i].style.backgroundColor="#fff";
			}
			btn2.style.backgroundColor = "#f6c421";

			TweenMax.to(info1, .5, {opacity:0});
			TweenMax.to(info2, .5, {opacity:1});
		}
		function reveal3(){
			for(i=0; i<btns.length; i++){
				btns[i].style.backgroundColor="#fff";
			}
			btn3.style.backgroundColor = "#f6c421";

			TweenMax.to([info1,info2], .5, {opacity:0});
			TweenMax.to(info3, .5, {opacity:1});
		}
		function reveal4(){
			for(i=0; i<btns.length; i++){
				btns[i].style.backgroundColor="#fff";
			}
			btn4.style.backgroundColor = "#f6c421";

			TweenMax.to([info1,info2,info3], .5, {opacity:0});
			TweenMax.to(info4, .5, {opacity:1});
		}
		function reveal5(){
			for(i=0; i<btns.length; i++){
				console.log(btns.length);
				btns[i].style.backgroundColor="#fff";
			}
			btn5.style.backgroundColor = "#f6c421";

			TweenMax.to([info1,info2,info3,info4], .5, {opacity:0});
		}

		//----- BODY WIGGLE ANIMATION -----//
		TweenMax.fromTo([body11,body12,body13], .1, {rotation:1.5, transformOrigin: "50% 50%", yoyo: true, repeat: -1, ease:Linear.easeNone},{rotation:-1.5, transformOrigin: "50% 50%", yoyo: true, repeat: -1, ease:Linear.easeNone});

		//----- HAPPY BOUNCE ANIMATION -----//
		TweenMax.to([keeper,flowers,leaves], .7, {y:4, yoyo: true, repeat: -1, ease:Linear.easeNone});


		//----- HEART ANIMATION -----//
		for (var i=0; i<heart.length; i++){
			TweenMax.to(heart, .5, {y:-5, yoyo: true, repeat: -1, ease:Linear.easeNone});
		}

		//----- FLYING ANIMATION -----//
			TweenMax.to([bee21,bee22,bee23,bee41,bee42,bee43,bee51,bee52,bee53], .5, {y:-5, yoyo: true, repeat: -1, ease:Linear.easeNone});

		//----- WING ANIMATION -----//

		//Bee Wing Animation - Facing Left
		TweenMax.to([lwing11,lwing51,lwing52], .15, {rotation: 15, transformOrigin: "top left", yoyo: true, repeat: -1, ease:Linear.easeNone});
		TweenMax.to([rwing11,rwing51,rwing52], .15, {rotation: -15, transformOrigin: "bottom left", yoyo: true, repeat: -1, ease:Linear.easeNone});

		//Bee Wing Animation - Facing Up
		TweenMax.to([lwing12,lwing22,lwing41,lwing42,lwing43], .15, {rotation: 15, transformOrigin: "top right", yoyo: true, repeat: -1, ease:Linear.easeNone});
		TweenMax.to([rwing12,rwing22,rwing41,rwing42,rwing43], .15, {rotation: -15, transformOrigin: "top left", yoyo: true, repeat: -1, ease:Linear.easeNone});

		//Bee Wing Animation - Facing Right
		TweenMax.to([lwing13,lwing21,lwing23,rwing53], .15, {rotation: 15, transformOrigin: "bottom right", yoyo: true, repeat: -1, ease:Linear.easeNone});
		TweenMax.to([rwing13,rwing21,rwing23,lwing53], .15, {rotation: -15, transformOrigin: "top right", yoyo: true, repeat: -1, ease:Linear.easeNone});



		//----- DETAILED ANIMATIONS -----//

		//--- INFO 1 ---//
		//Bee 1-1 Walking Animation (far right)
		var tl = new TimelineMax({repeat:-1});
			tl.add( TweenLite.to(bee11, 1.5, {x: -30, ease:Linear.easeNone}) );
			tl.add( TweenLite.to(bee11, .6, {rotation: 180, transformOrigin: "50% 50%", ease:Linear.easeNone}) );
			tl.add( TweenLite.to(bee11, 1.5, {x: 0, ease:Linear.easeNone}) );
			tl.add( TweenLite.to(bee11, .6, {rotation: 0, transformOrigin: "50% 50%", ease:Linear.easeNone}) );

		//Bee 1-2 Walking Animation (middle)
		var tl2 = new TimelineMax({repeat:-1});
			tl2.add( TweenLite.to(bee12, 4, {y: -50, ease:Linear.easeNone}) );
			tl2.add( TweenLite.to(bee12, .6, {rotation: 180, transformOrigin: "50% 50%", ease:Linear.easeNone}) );
			tl2.add( TweenLite.to(bee12, 4, {y:0, ease:Linear.easeNone}) );
			tl2.add( TweenLite.to(bee12, .6, {rotation: 0, transformOrigin: "50% 50%", ease:Linear.easeNone}) );

		//Bee 1-3 Walking Animation (far left)
		var tl3 = new TimelineMax({repeat:-1});
			tl3.add( TweenLite.to(bee13, 2, {x: 40, ease:Linear.easeNone}) );
			tl3.add( TweenLite.to(bee13, .6, {rotation: 180, transformOrigin: "50% 50%", ease:Linear.easeNone}) );
			tl3.add( TweenLite.to(bee13, 2, {x: 0, ease:Linear.easeNone}) );
			tl3.add( TweenLite.to(bee13, .6, {rotation: 0, transformOrigin: "50% 50%", ease:Linear.easeNone}) );

		//--- INFO 2 ---//
		//Bee 2-1 Flying Animation
		var tl4 = new TimelineMax({repeat:-1});
			tl4.add( TweenLite.to(bee21, 2, {x: 40, y:-25, ease:Linear.easeNone}) );
			tl4.add( TweenLite.to(bee21, 2, {rotation: 180, transformOrigin: "50% 50%", ease:Linear.easeNone}) );
			tl4.add( TweenLite.to(bee21, 2, {x: 0, y:0, ease:Linear.easeNone}) );
			tl4.add( TweenLite.to(bee21, .6, {rotation: 0, transformOrigin: "50% 50%", ease:Linear.easeNone}) );

		//Bee 2-2 Flying Animation
		var tl5 = new TimelineMax({repeat:-1});
			tl5.add( TweenLite.to(bee22, 3, {x: 20, y:-65, ease:Linear.easeNone}) );
			tl5.add( TweenLite.to(bee22, 2, {rotation: 180, transformOrigin: "50% 50%", ease:Linear.easeNone}) );
			tl5.add( TweenLite.to(bee22, 3, {x: 0, y:0, ease:Linear.easeNone}) );
			tl5.add( TweenLite.to(bee22, .5, {rotation: 0, transformOrigin: "50% 50%", ease:Linear.easeNone}) );

		//Bee 2-3 Flying Animation
		var tl6 = new TimelineMax({repeat:-1});
			tl6.add( TweenLite.to(bee23, 3.5, {x: 30, y:-65, ease:Linear.easeNone}) );
			tl6.add( TweenLite.to(bee23, 3.5, {rotation: -180, transformOrigin: "50% 50%", ease:Linear.easeNone}) );
			tl6.add( TweenLite.to(bee23, 3.5, {x: 0, y:0, ease:Linear.easeNone}) );
			tl6.add( TweenLite.to(bee23, .6, {rotation: 0, transformOrigin: "50% 50%", ease:Linear.easeNone}) );

		//--- INFO 3 ---//
		//Bee  Dying Animation
		var tl7 = new TimelineMax({repeat:-1});
			tl7.add( TweenLite.to([bee32,bee31], 0, {opacity: 0}) );
			tl7.add( TweenLite.to(bee33, 2, {x: -59, y:42, ease:Linear.easeNone}) );
			tl7.add( TweenLite.to(bee33, .5, {opacity: 0}) );
			tl7.add( TweenLite.to(bee32, .5, {opacity: 1}), '-=0.5' );
			tl7.add( TweenLite.to(bee32, 2, {x: -79, y:52, ease:Linear.easeNone}) );
			tl7.add( TweenLite.to(bee32, .5, {opacity: 0}) );
			tl7.add( TweenLite.to(bee31, .5, {opacity: 1}), '-=0.5' );
			tl7.add( TweenLite.to(bee31, .5, {x: -5, y:15, rotation: -15, ease:Linear.easeNone}) );
			tl7.add( TweenLite.to(bee31, .5, {x: -5, y:15, rotation: -15, ease:Linear.easeNone}) );

		//Spraycan Animation
		var tl7 = new TimelineMax({repeat:-1});
			tl7.add( TweenLite.to(spray, 0, {opacity:0}));
			tl7.add( TweenLite.to(nozzle, 2.5, {y:4}));
			tl7.add( TweenLite.to(spray, 1.25, {opacity:1}), '-=2.5');
			tl7.add( TweenLite.to(spray, 1.25, {x: 20, y: 5, opacity:0}), '-=1.25');
			tl7.add( TweenLite.to(nozzle, .5, {y:0}));
		var tl8 = new TimelineMax({repeat:-1});
			tl8.add( TweenLite.to(spraycan, 5, {rotation:30, transformOrigin: "30% 30%",  ease:Linear.easeNone}));
			tl8.add( TweenLite.to(spraycan, .5, {rotation:30, transformOrigin: "30% 30%",  ease:Linear.easeNone}));
			tl8.add( TweenLite.to(spraycan, .5, {rotation:0, transformOrigin: "30% 30%",  ease:Linear.easeNone}));


		//Buttons
		window.addEventListener('load', windowSize, false);
		window.addEventListener('resize', windowSize, false);

		btn1.addEventListener('click', reveal1, false);
		btn1.addEventListener('click', switchText, false);
		btn2.addEventListener('click', reveal2, false);
		btn2.addEventListener('click', switchText, false);
		btn3.addEventListener('click', reveal3, false);
		btn3.addEventListener('click', switchText, false);
		btn4.addEventListener('click', reveal4, false);
		btn4.addEventListener('click', switchText, false);
		btn5.addEventListener('click', reveal5, false);
		btn5.addEventListener('click', switchText, false);
		
	}

})();