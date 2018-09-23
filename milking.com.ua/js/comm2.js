// JavaScript Document
function doLoad(value){
    err=document.getElementById('cerror');
	err.innerHTML = "";
	// Create new JsHttpRequest object.
    var req = new JsHttpRequest();
    // Code automatically called on load finishing.
    req.onreadystatechange = function() {
        if (req.readyState == 4) {
		  if (req.responseJS.error == 'no') {
            // Clear error information.
            err.innerHTML = ' ';
			// Write req.responseJS to page element (_req.responseJS become responseJS). 
              err.innerHTML = req.responseJS.ok;
			  
			  form = document.getElementById('addcom');
              form.comtext.value = "";
			  form.email.value = "Электронная почта";
			  form.name.value = "Имя";
			  form.art.value = "";
			  form.tel.value = "Телефон";
			  form.filename.value = "";
			  
          }
		  else
		  {
		  err.innerHTML = req.responseJS.er_mess;
		  }  	
        }
    }
    // Prepare request object (automatically choose GET or POST).
    req.open(null, 'comment2.php', true);
    // Send data to backend.
    req.send( { q: value } );
}