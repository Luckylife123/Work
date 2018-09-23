function openContent(){
		$('.content').css('top','0px');
		$('.content').css('height','100%');
		$('.content').css('min-height','100vh');
		setTimeout(function(){$('.block-content').css('left','0px');},100);
		setTimeout(function(){$('html').animate({scrollTop: "0"},1000)},100);
		setTimeout(function(){$(".toBuy").css('opacity','1');},100);
		$(".title_site").css('opacity','0');				
		$("#calendar").css('display','none');
}
function closeTextContent(){
		$('.block-content').css('left','-5000px');
		
}
function closeContent(){
		$('.content').css('min-height','0px');
		$('.content').css('top','2000px');
		$('.content').css('height','0px');
		$('.block-content').css('left','-5000px');
		$(".nav-a").removeClass("active");
		$("#calendar").css('display','none');
		$(".ui-dialog").css('display','none');
		$(".toBuy").css('display','none');
		$(".title_site").css('opacity','1');
		setTimeout(function(){$('html').animate({scrollTop: "0"},1000)},100);
}

function toForm(){
	$('body,html').animate({scrollTop: $('#form').offset().top},1000);
}
