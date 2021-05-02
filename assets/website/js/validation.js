var name_regex = /^[a-zA-Z]+$/;
var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
//var add_regex = /^[A-Za-z0-9'\.\,\-\s\/]+$/;
var password_regex = /^[0-9a-zA-Z]+$/;
var locality_regex = /^[0-9a-zA-Z\s]+$/;

var emailStatus = false;

function on_form_submit(){ //validateRegistrationForm()
	debugger;
	if(validate_pass()&&validate_conpass()){
		return true;
	}else{return false;}
}

function validate_pass()
{
	debugger;
	if($('#password').val() == '' || $('#password').val() == null ){
		$('#p1').text("*Password can not be blank.");
		return false;
	}
	
	else if($('#password').val().length < 6 || $('#password').val().length > 15){
		$('#p1').text("*Password Length : Min:6; Max:15 characters.");
		return false;
	}else{
		$('#p1').text("");
		$('#p2').text("");
		return true;
	}
	
} 
		
function validate_conpass()
{
	debugger;
	if ($('#password').val()!=$('#conpass').val()) {
		$('#p2').text("*Re-entered password mismatch");
		return false;
	}
	else{
		$('#p1').text("");
		$('#p2').text("");
		return true;
	}	
}
