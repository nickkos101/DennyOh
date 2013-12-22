$(document).ready(function(){
	var canvas = document.getElementById("myChart");
	var ctx = canvas.getContext("2d");


	drawShape();

	function getMousePos(canvas, evt) {
		var rect = canvas.getBoundingClientRect();
		return {
			x: evt.clientX - rect.left,
			y: evt.clientY - rect.top
		};
	}
	var imageData = ctx.getImageData(0,0,828,680);
	var data = imageData.data;

	canvas.addEventListener('mousemove', function(evt) {
		var mousePos = getMousePos(canvas, evt);
		var red = data[((828 * mousePos.y) + mousePos.x) * 4];
		var green = data[((828 * mousePos.y) + mousePos.x) * 4 + 1];
		var blue = data[((828 * mousePos.y) + mousePos.x) * 4 + 2];
		if (blue == 191) {
			drawHover('blue');
		} else if (red == 167) {
			drawHover('purple');
		} else if (red == 49) {
			drawHover('green');
		} else if (red == 245) {
			drawHover('yellow');
		} else if (red == 251) {
			drawHover('orange');
		} else if (red == 187) {
			drawHover('red');
		} else if (red == 115) {
			drawHover('darkgrey');
		} else if (red == 223) {
			drawHover('lightgrey');
		}
	}, false);

	function drawHover(color) {
		var canvas = document.getElementById("myChart");
		var ctx = canvas.getContext("2d");
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		drawShape(color);
	}

	function drawShape(color) {
		/* Purple */

		ctx.beginPath();ctx.moveTo(153,0);ctx.lineTo(192,114);ctx.lineTo(196.5,132);ctx.lineTo(198.5,165);ctx.lineTo(200.5,232.5);ctx.lineTo(318.5,232.5);ctx.lineTo(318.5,126.5);ctx.lineTo(222,0);ctx.lineTo(153,0);ctx.closePath();
		if (color == 'purple'){
			ctx.fillStyle = 'rgba(167,94,168,1)';
		} else {
			ctx.fillStyle = 'rgba(167,94,168,.5)';			
		}
		ctx.fill();

		/* Blue */
		ctx.beginPath();ctx.moveTo(547.5, 127);ctx.lineTo(559.5, 174);ctx.lineTo(559.5, 252);ctx.lineTo(578, 251);ctx.lineTo(578, 382);ctx.lineTo(538, 382);ctx.lineTo(538, 467);ctx.lineTo(474, 467);ctx.lineTo(474, 556);ctx.lineTo(431.5, 556);ctx.lineTo(425.5, 586.5);ctx.lineTo(520, 643);ctx.lineTo(722, 642.5);ctx.lineTo(718.5, 634.5);ctx.lineTo(717, 279.33);ctx.lineTo(713,253.5);ctx.lineTo(707,229.5);ctx.lineTo(696.5,201.5);ctx.lineTo(687,182.5);ctx.lineTo(677.5,166);ctx.lineTo(669.5,153);ctx.lineTo(652.5,137.5);ctx.lineTo(643.5, 130.5);ctx.lineTo(626, 124);ctx.lineTo(613.5, 121);ctx.lineTo(595.5, 121);ctx.lineTo(574.5, 122);ctx.lineTo(547.5,127);ctx.closePath();
		if (color == 'blue') {
			ctx.fillStyle = 'rgba(0,125,190,1)';
		} else {
			ctx.fillStyle = 'rgba(0,125,190,.5)';	
		}
		ctx.fill();

		/* Green */
		ctx.beginPath();ctx.moveTo(45,348.5);ctx.lineTo(120, 347);ctx.lineTo(322, 347.5);ctx.lineTo(322, 441.5);ctx.lineTo(409, 441.5);ctx.lineTo(410, 556);ctx.lineTo(431.5, 556);ctx.lineTo(425.5, 586.5);ctx.lineTo(392, 659);ctx.lineTo(367.5, 638.5);ctx.lineTo(350.5, 660);ctx.lineTo(372, 679);ctx.lineTo(309, 679);ctx.lineTo(286, 659);ctx.lineTo(286, 651.5);ctx.lineTo(297.5, 643.5);ctx.lineTo(323, 663);ctx.lineTo(350.5, 631.5);ctx.lineTo(350.5, 624.5);ctx.lineTo(263, 553.5);ctx.lineTo(221, 553.5);ctx.lineTo(221.5, 579.5);ctx.lineTo(272, 621);ctx.arc(265,629, 10, -.25 * Math.PI, .75 * Math.PI, false);ctx.lineTo(197.5, 587.5);ctx.lineTo(195.5, 554.5);ctx.lineTo(171, 553.5);ctx.lineTo(153.5, 534);ctx.lineTo(119, 447);ctx.lineTo(69, 475);ctx.lineTo(114.5, 524.5);ctx.lineTo(111.5, 524.5);ctx.lineTo(65.5, 474.5);ctx.lineTo(69, 470.5);ctx.lineTo(66, 468);ctx.lineTo(71, 463.5);ctx.lineTo(69.50, 453.5);ctx.lineTo(66, 434.5);ctx.lineTo(93.5, 423.5);ctx.lineTo(106.5, 434.5);ctx.lineTo(118, 437);ctx.lineTo(120, 400);ctx.lineTo(98.5, 397.5);ctx.lineTo(98.5, 400);ctx.lineTo(115.5, 401.5);ctx.lineTo(115, 410.5);ctx.lineTo(106, 411.5);ctx.lineTo(105, 415.5);ctx.lineTo(65.5, 417);ctx.lineTo(60.5, 410.5);ctx.lineTo(43, 409.5);ctx.lineTo(43, 403.5);ctx.lineTo(63, 402);ctx.lineTo(62.5, 397.5);ctx.lineTo(45.5, 396.5);ctx.lineTo(46.5, 379);ctx.lineTo(121, 377.5);ctx.lineTo(121, 359);ctx.lineTo(45,360);ctx.lineTo(45,348.5);ctx.closePath();
		if (color == 'green') {
			ctx.fillStyle = 'rgba(49,195,120,1)';
		} else {
			ctx.fillStyle = 'rgba(49,195,120,.5)';
		}
		ctx.fill();

		/* Yellow */

		ctx.beginPath();ctx.moveTo(318.5,126.5);ctx.arc(410,38, 128, .65*Math.PI,.35*Math.PI, true );ctx.lineTo(503,132.5);ctx.lineTo(514,130);ctx.lineTo(547.5,127);ctx.lineTo(558.5,174);ctx.lineTo(559,233.5);ctx.lineTo(318.5,232.5);ctx.lineTo(318.5,126.5);ctx.closePath();
		if (color == 'yellow') {
			ctx.fillStyle = 'rgba(244,197,35,1)';
		} else {
			ctx.fillStyle = 'rgba(244,197,35,.5)';
		}
		ctx.fill();

		/* Orange */

		ctx.beginPath();ctx.moveTo(410,347);ctx.lineTo(474.5,347);ctx.lineTo(474,556);ctx.lineTo(410.5,555.5);ctx.lineTo(410,347);ctx.closePath();
		if (color == 'orange') {
			ctx.fillStyle = 'rgba(250,157,54,1)';
		} else {
			ctx.fillStyle = 'rgba(250,157,54,.5)';
		}
		ctx.fill();

		/* Red */

		ctx.beginPath();ctx.moveTo(559,233.5);ctx.lineTo(560,251.5);ctx.lineTo(578,251.5);ctx.lineTo(578,382);ctx.lineTo(538,382);ctx.lineTo(538,468);ctx.lineTo(474,468);ctx.lineTo(474.5,347);ctx.lineTo(341,347);ctx.lineTo(341,233.5);ctx.lineTo(559,233.5);ctx.closePath();
		if (color == 'red') {
			ctx.fillStyle = 'rgba(187,46,34,1)';
		} else {
			ctx.fillStyle = 'rgba(187,46,34,.5)';
		}
		ctx.fill();

		/* Dark Grey */

		ctx.beginPath();ctx.moveTo(119,234);ctx.lineTo(341,234);ctx.lineTo(341,347);ctx.lineTo(120,347);ctx.lineTo(120,321.5);ctx.lineTo(45.5,320);ctx.lineTo(46,291.5);ctx.lineTo(120,290);ctx.lineTo(119,234);ctx.closePath();
		if (color == 'darkgrey') {
			ctx.fillStyle = 'rgba(114,99,88,1)';
		} else {
			ctx.fillStyle = 'rgba(114,99,88,.5)';
		}
		ctx.fill();

		/* Light Grey */

		ctx.beginPath();ctx.moveTo(322,347.5);ctx.lineTo(322,441.5);ctx.lineTo(409,441.5);ctx.lineTo(410,347);ctx.lineTo(322,347.5);ctx.closePath();
		if (color == 'lightgrey') {
			ctx.fillStyle = 'rgba(223,219,212,1)';
		} else {
			ctx.fillStyle = 'rgba(223,219,212,.5)';
		}
		ctx.fill();
	}

});