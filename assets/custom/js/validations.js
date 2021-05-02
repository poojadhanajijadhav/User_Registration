var test = 'The functiona is call is successful.'
var testSuccess = 'The function called or the condition checked is successful.';
var testFailed = 'The function call or the condition check has failed.';
/***** Change Password *****/
function validateChangePasswordForm(){
	$('.errorLbl').remove();
	$('#confirmPassword').parent().removeClass('has-error');
	var retunrResult = true;
	var oldPassword = $('#oldPassword').val();
	var newPassword = $('#newPassword').val();
	var confirmPassword = $('#confirmPassword').val();
	if(newPassword != confirmPassword){
		if(newPassword != confirmPassword){
			$('#confirmPassword').parent().addClass('has-error');
			$('#confirmPassword').parent().append('<label class="errorLbl">New password and Confirm password doesnot match.</label>');
			retunrResult = false;
		}
	}
	return retunrResult;
}



/***** /Change Password *****/
