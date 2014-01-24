$(document).ready(function(){
	
	var stage = new Kinetic.Stage({container: 'container', width: 828, height: 680});
	var layer = new Kinetic.Layer();

	// Draw purple shape

	var purplegroup = new Kinetic.Group({x: 0, y: 0});

	var purple = new Kinetic.Shape({
		sceneFunc: function(context) {
			context.beginPath();context.moveTo(153,0);context.lineTo(192,114);context.lineTo(196.5,132);context.lineTo(198.5,165);context.lineTo(200.5,233.5);context.lineTo(318.5,233.5);context.lineTo(318.5,126.5);context.lineTo(222,0);context.lineTo(153,0);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(167,94,168,.5)'
      });

	var purpletext = new Kinetic.Text({x: 227, y: 130, text: 'LITTLE ITALY', fontSize: 16, width: 60, fontFamily: 'Helvetica', fill: 'black'});

    var purpleline = new Kinetic.Line({points: [227, 165, 280,165], stroke: 'black', strokeWidth: 1, lineCap: 'round', lineJoin: 'round'});

    purplegroup.add(purple);purplegroup.add(purpletext);purplegroup.add(purpleline);

  	// Draw blue shape

  	var bluegroup = new Kinetic.Group({x: 0, y: 0});

  	var blue = new Kinetic.Shape({
  		sceneFunc: function(context) {
  			context.beginPath();context.moveTo(547.5, 127);context.lineTo(559.5, 174);context.lineTo(559.5, 252);context.lineTo(578, 251);context.lineTo(578, 382);context.lineTo(538, 382);context.lineTo(538, 467);context.lineTo(474, 467);context.lineTo(474, 556);context.lineTo(431.5, 556);context.lineTo(425.5, 586.5);context.lineTo(520, 643);context.lineTo(722, 642.5);context.lineTo(718.5, 634.5);context.lineTo(717, 279.33);context.lineTo(713,253.5);context.lineTo(707,229.5);context.lineTo(696.5,201.5);context.lineTo(687,182.5);context.lineTo(677.5,166);context.lineTo(669.5,153);context.lineTo(652.5,137.5);context.lineTo(643.5, 130.5);context.lineTo(626, 124);context.lineTo(613.5, 121);context.lineTo(595.5, 121);context.lineTo(574.5, 122);context.lineTo(547.5,127);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
        },
        fill: 'rgba(0,125,190,.5)'
    });

    var bluetext = new Kinetic.Text({x: 610,y: 344,text: 'EAST VILLAGE',fontSize: 16,width: 70,fontFamily: 'Helvetica',fill: 'black'});

    var blueline = new Kinetic.Line({points: [610, 380, 677,380],stroke: 'black',strokeWidth: 1,lineCap: 'round',lineJoin: 'round'});

    bluegroup.add(blue);bluegroup.add(bluetext);bluegroup.add(blueline);

  	// Draw green shape

  	var greengroup = new Kinetic.Group({x: 0,y: 0});

  	var green = new Kinetic.Shape({
  		sceneFunc: function(context) {
  			context.beginPath();context.moveTo(45,348.5);context.lineTo(120, 347);context.lineTo(322, 347.5);context.lineTo(322, 441.5);context.lineTo(409, 441.5);context.lineTo(410, 556);context.lineTo(431.5, 556);context.lineTo(425.5, 586.5);context.lineTo(392, 659);context.lineTo(367.5, 638.5);context.lineTo(350.5, 660);context.lineTo(372, 679);context.lineTo(309, 679);context.lineTo(286, 659);context.lineTo(286, 651.5);context.lineTo(297.5, 643.5);context.lineTo(323, 663);context.lineTo(350.5, 631.5);context.lineTo(350.5, 624.5);context.lineTo(263, 553.5);context.lineTo(221, 553.5);context.lineTo(221.5, 579.5);context.lineTo(272, 621);context.arc(265,629, 10, -.25 * Math.PI, .75 * Math.PI, false);context.lineTo(197.5, 587.5);context.lineTo(195.5, 554.5);context.lineTo(171, 553.5);context.lineTo(153.5, 534);context.lineTo(119, 447);context.lineTo(69, 475);context.lineTo(114.5, 524.5);context.lineTo(111.5, 524.5);context.lineTo(65.5, 474.5);context.lineTo(69, 470.5);context.lineTo(66, 468);context.lineTo(71, 463.5);context.lineTo(69.50, 453.5);context.lineTo(66, 434.5);context.lineTo(93.5, 423.5);context.lineTo(106.5, 434.5);context.lineTo(118, 437);context.lineTo(120, 400);context.lineTo(98.5, 397.5);context.lineTo(98.5, 400);context.lineTo(115.5, 401.5);context.lineTo(115, 410.5);context.lineTo(106, 411.5);context.lineTo(105, 415.5);context.lineTo(65.5, 417);context.lineTo(60.5, 410.5);context.lineTo(43, 409.5);context.lineTo(43, 403.5);context.lineTo(63, 402);context.lineTo(62.5, 397.5);context.lineTo(45.5, 396.5);context.lineTo(46.5, 379);context.lineTo(121, 377.5);context.lineTo(121, 359);context.lineTo(45,360);context.lineTo(45,348.5);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(49,195,120,.5)'
    });

	var greentext = new Kinetic.Text({x: 167,y: 433,text: 'MARINA',fontSize: 16,width: 70,fontFamily: 'Helvetica',fill: 'black'});

    var greenline = new Kinetic.Line({points: [167, 452, 230,452],stroke: 'black',strokeWidth: 1,lineCap: 'round',lineJoin: 'round'});

    greengroup.add(green);greengroup.add(greentext);greengroup.add(greenline);

	// Draw yellow shape

	var yellowgroup = new Kinetic.Group({x: 0,y: 0});

	var yellow = new Kinetic.Shape({
		sceneFunc: function(context) {
			context.beginPath();context.moveTo(318.5,126.5);context.arc(410,38, 125, .65*Math.PI,.35*Math.PI, true );context.lineTo(503,132.5);context.lineTo(514,130);context.lineTo(547.5,127);context.lineTo(558.5,174);context.lineTo(559,233.5);context.lineTo(318.5,232.5);context.lineTo(318.5,126.5);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(244,197,35,.5)'
      });

	var yellowtext = new Kinetic.Text({x: 385,y: 193,text: 'CORTEZ HILL',fontSize: 16,width: 115,fontFamily: 'Helvetica',fill: 'black'});

    var yellowline = new Kinetic.Line({points: [385, 212, 490, 212],stroke: 'black',strokeWidth: 1,lineCap: 'round',lineJoin: 'round'});

    yellowgroup.add(yellow);yellowgroup.add(yellowtext);yellowgroup.add(yellowline);

  	// Draw orange shape

  	var orangegroup = new Kinetic.Group({x: 0,y: 0});

  	var orange = new Kinetic.Shape({
  		sceneFunc: function(context) {
  			context.beginPath();context.moveTo(410,347);context.lineTo(474.5,347);context.lineTo(474,556);context.lineTo(410.5,555.5);context.lineTo(410,347);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(250,157,54,.5)'
      });

  	var orangetext = new Kinetic.Text({x: 433,y: 486,text: 'GASLAMP',fontSize: 16,width: 90,fontFamily: 'Helvetica',fill: 'black',rotation: -90});

    var orangeline = new Kinetic.Line({points: [452, 486, 452, 408],stroke: 'black',strokeWidth: 1,lineCap: 'round',lineJoin: 'round'});

    orangegroup.add(orange);orangegroup.add(orangetext);orangegroup.add(orangeline);

  	// Draw red shape

  	var redgroup = new Kinetic.Group({x: 0,y: 0});

  	var red = new Kinetic.Shape({
  		sceneFunc: function(context) {
  			context.beginPath();context.moveTo(559,233.5);context.lineTo(560,251.5);context.lineTo(578,251.5);context.lineTo(578,382);context.lineTo(538,382);context.lineTo(538,468);context.lineTo(474,468);context.lineTo(474.5,347);context.lineTo(341,347);context.lineTo(341,233.5);context.lineTo(559,233.5);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(187,46,34,.5)'
      });

  	var redtext = new Kinetic.Text({x: 423,y: 295,text: 'CORE',fontSize: 16,width: 115,fontFamily: 'Helvetica',fill: 'black'});

    var redline = new Kinetic.Line({points: [423, 312, 470, 312],stroke: 'black',strokeWidth: 1,lineCap: 'round',lineJoin: 'round'});

    redgroup.add(red);redgroup.add(redtext);redgroup.add(redline);

  	// Draw darkgrey shape

  	var darkgreygroup = new Kinetic.Group({x: 0,y: 0});

  	var darkgrey = new Kinetic.Shape({
  		sceneFunc: function(context) {
  			context.beginPath();context.moveTo(119,234);context.lineTo(341,234);context.lineTo(341,347);context.lineTo(120,347);context.lineTo(120,321.5);context.lineTo(45.5,320);context.lineTo(46,291.5);context.lineTo(120,290);context.lineTo(119,234);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(114,99,88,.5)'
      });

  	var darkgreytext = new Kinetic.Text({x: 147,y: 283,text: 'COLUMBIA DISTRICT',fontSize: 16,width: 180,fontFamily: 'Helvetica',fill: 'black'});

    var darkgreyline = new Kinetic.Line({points: [147, 302, 310, 302],stroke: 'black',strokeWidth: 1,lineCap: 'round',lineJoin: 'round'});

    darkgreygroup.add(darkgrey);darkgreygroup.add(darkgreytext);darkgreygroup.add(darkgreyline);

  	// Draw lightgrey shape

  	var lightgreygroup = new Kinetic.Group({x: 0,y: 0});

  	var lightgrey = new Kinetic.Shape({
  		sceneFunc: function(context) {
  			context.beginPath();context.moveTo(322,347.5);context.lineTo(322,441.5);context.lineTo(409,441.5);context.lineTo(410,347);context.lineTo(322,347.5);context.closePath();
          	// KineticJS specific context method
          	context.fillStrokeShape(this);
          },
          fill: 'rgba(223,219,212,.5)'
      });

  	var lightgreytext = new Kinetic.Text({x: 335,y: 383,text: 'HORTON PLAZA',fontSize: 14,width: 70,fontFamily: 'Helvetica',fill: 'rgba(0,0,0,.5)'});

    lightgreygroup.add(lightgrey);lightgreygroup.add(lightgreytext);

    // add the shapes to the layer
    layer.add(purplegroup);layer.add(bluegroup);layer.add(greengroup);layer.add(yellowgroup);layer.add(orangegroup);layer.add(redgroup);layer.add(darkgreygroup);layer.add(lightgreygroup);

    // add the layer to the stage
    stage.add(layer);

    // Hover actions

    purplegroup.on('mouseover touchstart',function(){purple.fill('rgba(167,94,168,1)');purple.shadowColor('black');purple.shadowBlur(25);purple.shadowOpacity(0.5);purpletext.fill('rgba(255,255,255,1)');purpleline.stroke('rgba(255,255,255,1)');layer.draw();});
    purplegroup.on('mouseout touchend',function(){purple.fill('rgba(167,94,168,.5)');purple.shadowColor('black');purple.shadowBlur(3);purple.shadowOpacity(0);purpletext.fill('black');purpleline.stroke('black');layer.draw();});
    bluegroup.on('mouseover touchstart',function(){blue.fill('rgba(0,125,190,1)');blue.shadowColor('black');blue.shadowBlur(25);blue.shadowOpacity(0.5);bluetext.fill('rgba(255,255,255,1)');blueline.stroke('rgba(255,255,255,1)');layer.draw();});
    bluegroup.on('mouseout touchend',function(){blue.fill('rgba(0,125,190,.5)');blue.shadowColor('black');blue.shadowBlur(25);blue.shadowOpacity(0);bluetext.fill('black');blueline.stroke('black');layer.draw();});
    greengroup.on('mouseover touchstart',function(){green.fill('rgba(49,195,120,1)');green.shadowColor('black');green.shadowBlur(25);green.shadowOpacity(0.5);greentext.fill('rgba(255,255,255,1)');greenline.stroke('rgba(255,255,255,1)');layer.draw();});
    greengroup.on('mouseout touchend',function(){green.fill('rgba(49,195,120,.5)');green.shadowColor('black');green.shadowBlur(25);green.shadowOpacity(0);greentext.fill('black');greenline.stroke('black');layer.draw();});
    yellowgroup.on('mouseover touchstart',function(){yellow.fill('rgba(244,197,35,1)');yellow.shadowColor('black');yellow.shadowBlur(25);yellow.shadowOpacity(0.5);yellowtext.fill('rgba(255,255,255,1)');yellowline.stroke('rgba(255,255,255,1)');layer.draw();});
    yellowgroup.on('mouseout touchend',function(){yellow.fill('rgba(244,197,35,.5)');yellow.shadowColor('black');yellow.shadowBlur(25);yellow.shadowOpacity(0);yellowtext.fill('black');yellowline.stroke('black');layer.draw();});
    orangegroup.on('mouseover touchstart',function(){orange.fill('rgba(250,157,54,1)');orange.shadowColor('black');orange.shadowBlur(25);orange.shadowOpacity(0.5);orangetext.fill('rgba(255,255,255,1)');orangeline.stroke('rgba(255,255,255,1)');layer.draw();});
    orangegroup.on('mouseout touchend',function(){orange.fill('rgba(250,157,54,.5)');orange.shadowColor('black');orange.shadowBlur(25);orange.shadowOpacity(0);orangetext.fill('black');orangeline.stroke('black');layer.draw();});
    redgroup.on('mouseover touchstart',function(){red.fill('rgba(187,46,34,1)');red.shadowColor('black');red.shadowBlur(25);red.shadowOpacity(0.5);redtext.fill('rgba(255,255,255,1)');redline.stroke('rgba(255,255,255,1)');layer.draw();});
    redgroup.on('mouseout touchend',function(){red.fill('rgba(187,46,34,.5)');red.shadowColor('black');red.shadowBlur(25);red.shadowOpacity(0);redtext.fill('black');redline.stroke('black');layer.draw();});
    darkgreygroup.on('mouseover touchstart',function(){darkgrey.fill('rgba(114,99,88,1)');darkgrey.shadowColor('black');darkgrey.shadowBlur(25);darkgrey.shadowOpacity(0.5);darkgreytext.fill('rgba(255,255,255,1)');darkgreyline.stroke('rgba(255,255,255,1)');layer.draw();});
    darkgreygroup.on('mouseout touchend',function(){darkgrey.fill('rgba(114,99,88,.5)');darkgrey.shadowColor('black');darkgrey.shadowBlur(25);darkgrey.shadowOpacity(0);darkgreytext.fill('black');darkgreyline.stroke('black');layer.draw();});
    lightgreygroup.on('mouseover touchstart',function(){lightgrey.fill('rgba(223,219,212,1)');layer.draw();});
    lightgreygroup.on('mouseout touchend',function(){lightgrey.fill('rgba(223,219,212,.5)');layer.draw();});

    // Click actions

    purplegroup.on('mouseup',function(){
    });

    bluegroup.on('mouseup',function(){
    });

    // etc

});