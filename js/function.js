$(document).ready(function(){
	$('.building-wrap h2 button').click(function(){
		$('.nmap').hide();
		$('.gmap').show();
	});


	$('.bb-show').click(function(){
		$('.listings').hide();
		$('.buildings').show();
	});

	$('.ll-show').click(function(){
		$('.buildings').hide();
		$('.listings').show();
	});


	$('.carousel ul li img').click(function(){
		var ImgData = $(this).attr('src');
		$('.main-img').attr('src', ImgData);
	});
}); 