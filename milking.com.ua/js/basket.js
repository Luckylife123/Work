var cart={};
var set="";
var count=0;
var price=0;
var day="";

		

			function addToBasket(url_img,name,cost){		

				if (cart[name]==undefined){
					cart[name]=[1,url_img,cost];							
				}
				else{
					cart[name][0]++;
				}
				plusCount();
				getPrice();							
				showCart();
				saveCart();
			}


			function saveCart(){
				localStorage.setItem('cart', JSON.stringify(cart));;
			}

			function showCart(){		
				if(!isEmpty(cart)){
					$('#basket_body').html('Кошик порожній!');
				}				
				else{		
					var out="";							
					for (var key in cart){	
						out+='<hr>';
						out+='<div class="basket_info">';
						out+='<div class="container-fluir">';							
						out+='<div class="row">';				
							out+='<div class="col-sm-3 basket_col"><img src="'+cart[key][1]+'" alt="'+key+'" class="basket_img"></div>';
							out+='<div class="col-sm-3 basket_col">'+key+'</div>';
							out+='<div class="col-sm-3 basket_col">'+cart[key][2]+' грн.</div>';							
							out+='<div class="col-sm-3 basket_col">Кількість: <a class="count_minus" data-name="'+key+'">-</a> '+cart[key][0]+'<a class="count_plus" data-name="'+key+'">+</a></div>';
							out+='<button class="del-Product" data-name="'+key+'">x</button>';
						out+='</div>';	
						out+='</div>';	
						out+='</div>';															
					}			
					$('#basket_body').html(out);	
					$('.del-Product').on('click',delProduct);
					$('.count_minus').on('click',currentlyCountMinus);
					$('.count_plus').on('click',currentlycountPlus);
									}	
					
			}


			function delProduct(){
				var name = $(this).attr('data-name');				
				for(var i=cart[name][0];i>0;i--){					
					minusCount();
				}
				delete cart[name];
				getPrice();
				saveCart();
				showCart();
			}
			
			function currentlyCountMinus(){
				var name = $(this).attr('data-name');
				if(cart[name][0]==1){
					delete cart[name];
				}
				else{
					cart[name][0]--;
				}	
				getPrice();		
				minusCount();
				saveCart();
				showCart();
							
			}


			function currentlycountPlus(){
				var name = $(this).attr('data-name');
				cart[name][0]++;
				getPrice();
				plusCount();
				saveCart();
				showCart();
			}
		
		

			function addSet(nameSet){	
				if(nameSet=='стандартний'){
					$('#close_modal').css('display','none');
					var out="";
					out+='Ви обрали '+nameSet+' набір.<br>';
					out+='Виберіть кількість днів:<br>';
					out+='<button onclick="getDay(7)">7 днів.</button>';
					out+='<button onclick="getDay(14)">14 днів.</button>';
					out+='<button onclick="getDay(30)">30 днів.</button>';
					$('#chooseSet').html(out);	
				}
				else{
					delDay();
					$('#chooseSet').html('Ви обрали '+nameSet+' набір.');
				}				
				$('.button_choose_set').css("display",'none');
				set=nameSet;
				getPrice();
				saveSet();
				showSet();
			}


			function saveSet(){
				localStorage.setItem('set', JSON.stringify(set));;
			}

		

			

			function showSet(){
				var out="";
				if(set==""){
					$('#set_body').html('Набір не вибрано!');
				}						
				else{		
					out+="набір "+set;
					out+='<button class="del-Set">x</button>';				
					$('#set_body').html(out);
					$('.del-Set').on('click',delSet)
				}						
			}

			

			function delSet(){				
				$('.button_choose_set').css("display",'static');
				$('#chooseSet').html('Спочатку виберіть набір.');
				set="";
				delDay();
				saveSet();
				showSet();
			}

			

		





			


			function saveCount(){
				localStorage.setItem('count', JSON.stringify(count));;
			}

		

			

			function showCount(){				
				$('#count_of_products').html(count);
			}


			function plusCount(){
				count++;			
				saveCount();
				showCount();
			}
			

			function minusCount(){
				count--;
				saveCount();
				showCount();

			}			


		
		








			function savePrice(){
				localStorage.setItem('price', JSON.stringify(price));;
			}

		

			
			function getPrice(){
				price=0;
				var count_of_product=0;
				if(set=='дегустаційний'){					
					for (var key in cart){
						for (var i=0;i<cart[key][0];i++){
							count_of_product++;
							if(count_of_product<=4){
								price+=parseFloat(cart[key][2])/2;
							}
							else{
								price+=parseFloat(cart[key][2]);
							}					
						}						
					}
				}	
				if(set=='пробний'){					
					for (var key in cart){
						for (var i=0;i<cart[key][0];i++){										
							price+=parseFloat(cart[key][2]);
						}						
					}
				}		
				if(set=='стандартний'){	
					price=10;				
					for (var key in cart){
						for (var i=0;i<cart[key][0];i++){	
							count_of_product++;														
							price+=parseFloat(cart[key][2]);
						}						
					}
					if(count_of_product>3){
								price-=10;
					}	
				}
				price=parseFloat(price.toFixed(2));			
				savePrice();
				showPrice(); 
			}

			function showPrice(){	
				if(set=='стандартний'){
					$('#price_of_products').html('Загальна ціна з доставкою: '+(price*day)+' грн.');
				}
				else{
					$('#price_of_products').html('Загальна ціна: '+price+' грн.');
				}
				

			}


				

		


			
			function getDay(pickedDay){				
				day=pickedDay;				
				$('#ModalSet').modal("hide");
				$('#close_modal').css('display','block');
				getPrice();
				saveDay();
				showDay();
			}


			function saveDay(){
				localStorage.setItem('day', JSON.stringify(day));;
			}

		

			

			function showDay(){
				if(day!=""){
					$('#day').html(day+' днів.');
				}		
				else{
					$('#day').html("");
				}		
			}

			function delDay(){
				day="";
				saveDay();
				showDay();
			}

			 





			function loadLocalStorage(){

				//load price
				if (localStorage.getItem('price'))	
				{
					price = JSON.parse(localStorage.getItem('price'));			
					showPrice();				
				}
				else {
					$('#price_of_products').html('Загальна ціна '+ price);
				}	


				//load all count
				if (localStorage.getItem('count'))	
				{
					count = JSON.parse(localStorage.getItem('count'));			
					showCount();				
				}
				else {
					$('#count_of_products').html('0');	
				}

				//load set
				if (localStorage.getItem('set'))	
				{
					set = JSON.parse(localStorage.getItem('set'));	
					$('.button_choose_set').css("display",'none');							
					showSet();					
				}
				else {					
					$('#basket_body').html('Набір не вибрано!');
				}		
				if(set==""){
					$('.button_choose_set').css("display",'static');
				}


				//load cart
				if (localStorage.getItem('cart'))
				{
					cart = JSON.parse(localStorage.getItem('cart'));			
					showCart();					
				}
				else {
						$('#basket_body').html('Кошик порожній!');
				}		

				//load day
				if (localStorage.getItem('day'))	
				{
					day = JSON.parse(localStorage.getItem('day'));			
					showPrice();				
				}
				else {
					$('#day').html('Загальна ціна '+ day);
				}		
					
			}


			function init() {
		        loadLocalStorage(); 
		     
		    }
		    window.onload = init;


		    function isEmpty(object){
				for(var key in object){
					if (object.hasOwnProperty(key)) return true;
				}
				return false;
			}

	
		    //scroll to set
			$("#ModalChooseSet").on("hidden.bs.modal", function(){
			    var elementClick = '#sets';
			    var destination = $(elementClick).offset().top;
			    jQuery("html:not(:animated),body:not(:animated)").animate({
			      scrollTop: destination
			    }, 1500);
			    return false;
			});

			//scroll to product
			$("#ModalSet").on("hidden.bs.modal", function(){
			    var elementClick = '#products';
			    var destination = $(elementClick).offset().top;
			    jQuery("html:not(:animated),body:not(:animated)").animate({
			      scrollTop: destination
			    }, 1500);
			    return false;
			});




		//scroll to product
			$("#SingleModalChooseSet").on("hidden.bs.modal", function(){
			    history.back();			    
			});