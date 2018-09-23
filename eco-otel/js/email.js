function send(template_directory,mail){
            $.ajax({
	            url: template_directory + "/email.php",
	            type: "POST",
	            data:({
	            	aparatment: $('#aparatment').val(),
	                name: $('#name').val(),	 
	                number: $('#number').val(),	 
	                date: $('#date').val(),               
	                email: $('#email').val(),
	                comment: $('#comment').val(),
	                mymail: mail
	            }),
	            dataType: "text",
	            success: function() {	            	
	             	document.location.href = "http://www.megaron-crimea.com/thanks/";
	            }
	        })	
	return false;   
}