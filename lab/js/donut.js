$(document).ready(function(){
	$("#days-6").css("display","inline");
	$("#days-5").css("display","none");
	$("#days-4").css("display","none");
	$("#days-3").css("display","none");
	$("#days-2").css("display","none");
	$("#days-1").css("display","none");
	$("#today").css("display","none");

	$('.one').click(function(){
		$('.two, .three, .four, .five, .six, .seven ').removeClass('active');
		$('.one').addClass('active');
		$('#days-6').css("display","inline");
		$("#days-5").css("display","none");
		$("#days-4").css("display","none");
		$("#days-3").css("display","none");
		$("#days-2").css("display","none");
		$("#days-1").css("display","none");
		$("#today").css("display","none");
	});

	$('.two').click(function(){
		$('.one, .three, .four, .five, .six, .seven').removeClass('active');
		$('.two').addClass('active');
		$('#days-6').css("display","none");
		$("#days-5").css("display","inline");
		$("#days-4").css("display","none");
		$("#days-3").css("display","none");
		$("#days-2").css("display","none");
		$("#days-1").css("display","none");
		$("#today").css("display","none");
	});

	$('.three').click(function(){
		$('.one, .two, .four, .five, .six, .seven').removeClass('active');
		$('.three').addClass('active');
		$('#days-6').css("display","none");
		$("#days-5").css("display","none");
		$("#days-4").css("display","inline");
		$("#days-3").css("display","none");
		$("#days-2").css("display","none");
		$("#days-1").css("display","none");
		$("#today").css("display","none");
	});

	$('.four').click(function(){
		$('.one, .two, .three, .five, .six, .seven').removeClass('active');
		$('.four').addClass('active');
		$('#days-6').css("display","none");
		$("#days-5").css("display","none");
		$("#days-4").css("display","none");
		$("#days-3").css("display","inline");
		$("#days-2").css("display","none");
		$("#days-1").css("display","none");
		$("#today").css("display","none");
	});

	$('.five').click(function(){
		$('.one, .two, .three, .four, .six, .seven').removeClass('active');
		$('.five').addClass('active');
		$('#days-6').css("display","none");
		$("#days-5").css("display","none");
		$("#days-4").css("display","none");
		$("#days-3").css("display","none");
		$("#days-2").css("display","inline");
		$("#days-1").css("display","none");
		$("#today").css("display","none");
	});

	$('.six').click(function(){
		$('.one, .two, .three, .four, .five, .seven').removeClass('active');
		$('.six').addClass('active');
		$('#days-6').css("display","none");
		$("#days-5").css("display","none");
		$("#days-4").css("display","none");
		$("#days-3").css("display","none");
		$("#days-2").css("display","none");
		$("#days-1").css("display","inline");
		$("#today").css("display","none");
	});

	$('.seven').click(function(){
		$('.one, .two, .three, .four, .five, .six').removeClass('active');
		$('.seven').addClass('active');
		$('#days-6').css("display","none");
		$("#days-5").css("display","none");
		$("#days-4").css("display","none");
		$("#days-3").css("display","none");
		$("#days-2").css("display","none");
		$("#days-1").css("display","none");
		$("#today").css("display","inline");
	});

});