
/*--------------- Coded By JK - 06/09/2018 -------------*/
$("#state").change(function(){
    debugger;
    var value = $("#state").val();
    resetAllAddressDdl();
    bindDropDownList(value, "city", "statewise_cities", "Select City");
});

$("#city").change(function(){
    debugger;
    var value = $("#city").val();
    resetPincodeAndLocalityDdl();
    bindDropDownList(value, "pincode", "citywise_pincodes", "Select Pincode");
});

$("#pincode").change(function(){
    debugger;
    var value = $("#pincode").val();
    resetLocalityDdl();
    bindDropDownList(value, "area", "pincodewise_localities", "Select area");
});


/************ Bind Dropdown List *************/
function bindDropDownList(value, dropDownList, actionMethod, defaultSelectString)
{
    debugger;
    if(value !== undefined || value !== ''){

        $.ajax ({
            //async: false,
            url : site_url+'Jobs/'+actionMethod, 
            type: 'POST', 
            data: {'id' : value},
            cache: false, 
            beforeSend: function()
            {
                $('.customLoader').show();
            },
            success: function(data)
            {debugger;
                $('.customLoader').hide();
                data = JSON.parse(data);
                $('#'+dropDownList).html('');
                $('#'+dropDownList).append($('<option/>', {
                    value: '',
                    text: defaultSelectString
                })).attr('selected', true);
                delete data[""]; // Remove element - no others index change
                $.each(data, function (key, value) {
                    $('#'+dropDownList).append($('<option/>', {
                        value: key,
                        text: value
                    }));
                });
            },
            error: function (error) {
                alert('error' + error);
            }
        });
    }
}

function resetAllAddressDdl()
{
    $('#city').html('');
    $('#city').append($('<option/>', {
        value: '',
        text: "Select City"
    })).attr('selected', true);

    resetPincodeAndLocalityDdl();
}

function resetPincodeAndLocalityDdl()
{
    $('#pincode').html('');
    $('#pincode').append($('<option/>', {
        value: '',
        text: "Select Pincode"
    })).attr('selected', true);

    resetLocalityDdl();
}

function resetLocalityDdl()
{
    $('#locality').html('');
    $('#locality').append($('<option/>', {
        value: '',
        text: "Select Locality"
    })).attr('selected', true);
}

var name_regex = /^[a-zA-Z\S]+$/;	
var mobile_regex = /^[789]\d{9}$/;
var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

function validateName()
{
	
	if($('#pname').val() == '' || $('#pname').val() == null ) {
		$('#Error-msg-name').text("*Please Enter Person Name");
	}
	else if(!$('#pname').val().match(name_regex)) {
		$('#Error-msg-name').text("*Only Alphabets are allowed."); 
		return false;
	}else
	{
		$('#Error-msg-name').text("");
		return true;
	}
}

function validatemobile()
{
	mobileStatus = false;
	if($('#mobile').val() == '' || $('#mobile').val() == null ) {
		$('#Error-msg-mobile').text("*Please Enter Mobile");
	}else if (!$('#mobile').val().match(mobile_regex)) {
		$('#Error-msg-mobile').text("*Invalid Mobile Number");
		mobileStatus = false;
		return mobileStatus;
	}else
	{
		$('#Error-msg-mobile').text("");
		return true;
	}
}