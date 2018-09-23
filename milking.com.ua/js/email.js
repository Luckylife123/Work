
		function sumbitClick(template_directory,mail){
			var ajaxName = $("#name").val();
			var ajaxNumber = $("#number").val();
			var ajaxAdress = $("#adress").val();
			var ajaxEmail = $("#email").val();	
			var ajaxComment = $("#comment").val();	
			var ajaxCart="";
			var ajaxSend;	
			var i=0;
			var ajaxMymail=mail;
			if(set=='стандартний'&&count<4){
				ajaxSend=10;
			}
			else{
				ajaxSend=0;
			}
			
			for(var key in cart){
				i++;
				ajaxCart+=i+'. '+key+' - '+cart[key][0]+' шт. - '+cart[key][2]+' грн.*';
			}
			
			
			if(ajaxName==""||ajaxNumber==""||ajaxAdress==""||ajaxEmail==""){
					alert("Ви ввели не всі обов'язкові поля!");
			}	
			else if(set==""){
					alert("Ви не вибрали набір!");
			}	
			else if(set=="стандартний"&&count<=1){
					alert("Потрібно добрати ще продукцію, за умовами набору.");
			}	
			else if((set=="дугустаційний"&&count<=3)||(set=="пробний"&&count<=3)){
					alert("Потрібно добрати ще продукцію, за умовами набору.");
			}												
			else{
					$.ajax({
					url:  template_directory+"/email.php",
					type:"POST",
					data:({					
						name: ajaxName,
						number: ajaxNumber,
						adress: ajaxAdress,
						email: ajaxEmail,
						comment: ajaxComment,
						pickedSet: set,
						pickedDay: day,
						pickedCart: ajaxCart,
						pickedPrice: $('#price_of_products').text(),
						pickedSend: ajaxSend,
						mymail: ajaxMymail
					}),
					dataType:"text",		
					success: function(){
						set="";
						cart={};
						day="";
						price=0;
						count=0;
						savePrice();
						showPrice(); 
						saveCount();
						showCount();
						saveSet();
						showSet();
						saveCart();
						showCart();
						saveDay();
						showDay();
						alert("ВІТАЮ! ВАШ ЗАКАЗ ПРИЙНЯТИЙ!");}
							
				});
			}			
		}
