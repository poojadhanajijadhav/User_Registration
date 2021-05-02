
$("#country_id").change(function(){
	debugger;
    var value = $("#country_id").val();
    resetStateAddressDdl();
    bindDropDownList(value, "state_id", "countrywise_states", "Select State");
});


$("#state_id").change(function(){
    var value = $("#state_id").val();
    resetAllAddressDdl();
    bindDropDownList(value, "city_id", "statewise_cities", "Select City");
});

$("#city_id").change(function(){
    var value = $("#city_id").val();
    resetPincodeAndLocalityDdl();
    bindDropDownList(value, "pincode_id", "citywise_pincodes", "Select Pincode");
});

/************ Bind Dropdown List *************/
function bindDropDownList(value, dropDownList, actionMethod, defaultSelectString)
{
    if(value !== undefined || value !== ''){

        $.ajax ({
            //async: false,
            url : site_url+'Addresses/'+actionMethod, 
            type: 'GET', 
            data: {'id' : value},
            cache: false, 
            success: function(data)
            {
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

function resetStateAddressDdl()
{
    $('#state').html('');
    $('#state').append($('<option/>', {
        value: '',
        text: "Select State"
    })).attr('selected', true);
    resetAllAddressDdl();
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
}