function changeBG(template_directory, nextBG){
	setTimeout(function(){
			$('.wrapper').css('background-image', 'url('+template_directory+'/img/bg_img'+nextBG+'.jpg)');
			if(nextBG==3){
				nextBG=1;
			}
			else{
				nextBG++;
			}
			changeBG(template_directory,nextBG);
	},20000);
		
}