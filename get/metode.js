$(document).ready(function(){
 
$("#submit").click(function(){ 
	var fnama = $("#fnama").val();
	var lalamat = $("#lalamat").val();
	var talamat = $("#talamat").val();
	
	if( fnama != '' || lalamat !=''){
		return true; 
	}	
	else{
		alert("Tolong diisi...!!!!!!");
		return false;
	}
});
});
