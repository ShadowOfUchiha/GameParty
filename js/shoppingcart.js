function loadPage(href, callback, id, action) {

	var formdata = new FormData;
	formdata.append('id', id);
	formdata.append('action', action);
	console.log(id , action);
	var xhr = new XMLHttpRequest(); // Usual mix-and-matching for x-browser omitted for brevity
	xhr.onload = function() {
		// readyState 4 means the request is done, If the HTTP request has completed
		// status 200 is a successful return, If the HTTP response code is 200 (e.g. successful)
		if (this.readyState == 4 && this.status == 200) {
			callback(this); // Retrieve the response text
		}
		// An error occurred during the request.
	};
	
	xhr.open("POST", href, true);
	xhr.send(formdata);
}

function sendToContent(result){
	console.log(result);
	// 'This is the returned text.'
	// return document.getElementById("content").innerHTML = result;
	
}


function cartAlert() {
	// Get the snackbar DIV
	var x = document.getElementById("addtocartalert");
  
	// Add the "show" class to DIV
	x.className = "show";
  
	// After 3 seconds, remove the show class from DIV
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}