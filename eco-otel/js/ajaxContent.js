	function loadPage(id){
		var container = $('.content');
		$(".nav-a").removeClass("active");
		$("#page"+id).addClass('active');
		$(".ui-dialog").css('display','none');
		if($(document).width()<1001){
			  	$('.navbar-toggle').click();
	    }
	    closeTextContent();
	    
	    var page = "<div class=\"container block-content\">"
	    page += $('#pageContent'+id).html();	
	    if($("#page"+id).data('target')=="apartment"){
	    	page += '<div class="gallery">';
		    page += $('#gallery').html();
		    page += '</div>';
	    }	
	    if($("#page"+id).data('target')=='comments'){
	    	page += '<div class="comments">';
		    page += $('#block-commnets').html();
		    page += '</div>';
	    }
	    if($("#page"+id).data('target')=='events'){
	    	page += '<div class="gallery">';
		    page += $('#events').html();
		    page += '</div>';
	    }
	   	
	    page +="</div>";
	    setTimeout(function(){
			  container.html(page);			    
			  openContent();
			  setTimeout(function(){
			  	
			  	if($("#page"+id).data('target')=='calendar'){
			  		$(".house").css('display','block');
				    $(".room").css('display','block');	
				    $(".sidebar").css('display','block');
					$("#calendar").css('display','block');
			    	container.animate({
			    		'min-height': '0px'
			    	},1000);

			   }s
			  },200)
			   
			  	
		},100);													
	}

	function loadAppartaments(id){
		      var container = $('.content');
		      var target = '#titlePost'+id;
		      var title = $(target).html();
		      target = '#contentPost'+id;
		      var content = $(target).html();
		      target = '#aboutPost'+id;
		      var about =  $(target).html();
		      var text='<div class="container block-content"><div class="title"><h3>';
		      text+=title+'</h3></div>';
		      text+='<div class="about-post">'+about+'</div>';
		      text+='<div class="post-content">';
		      text+=content+'</div>';		      
		      text+='</div>';
		      text+="<div class='toBuy' onclick='toForm()'></div>"	      
			  closeTextContent();
			  setTimeout(function(){
			  	container.html(text);
			    openContent();
				$(".post-content a").attr('data-fancybox','fancybox');
				$(".sidebar").css('display','block');
				$("#calendar").css('display','block');
				if(title=='Гостевой дом мегарон'){
					$(".room").css('display','none');
					$(".house").css('display','block');
				}
				else if(title=='Номера'){
					$(".house").css('display','none');
					$(".room").css('display','block');		
				}				
			  },100);
			  return false;	
				
	}

	function loadEvents(id){
		      var container = $('.content');
		      var target = '#titlePost'+id;
		      var title = $(target).html();
		      target = '#contentPost'+id;
		      var content = $(target).html();
		      target = '#aboutPost'+id;
		      var about =  $(target).html();
		      var text='<div class="container block-content"><div class="title"><h3>';
		      text+=title+'</h3></div>';
		      text+='<div class="about-post">'+about+'</div>';
		      text+='<div class="post-content">';
		      text+=content+'</div>';		      
		      text+='</div>';	      
			  closeTextContent();
			  setTimeout(function(){
			  	container.html(text);
			    openContent();
			  },100);
			  return false;	

	}

