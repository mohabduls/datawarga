$(document).ready(function(){
	var uLogin = $("#uLogin");
	uLogin.on('input',function(){
		if(uLogin.val() != ''){
			$("#uLabel").text(uLogin.val());
		}
		else{
			$("#uLabel").text('Silahkan masukan username');
		}
	});
});