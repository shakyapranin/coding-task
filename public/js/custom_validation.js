/**
 * Created by pranin on 7/10/16.
 */
$(document).ready(function(){
    $("#personnel-form").validate({
        rules: {
            phone: {
                isValidPhoneNumber: true,
                minlength: 7,
                maxlength: 15,
            },
            address: {
                maxlength: 254,
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    $("#date_of_birth").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1972:2011'
    });

    $.validator.addMethod('isValidPhoneNumber', checkValidPhoneNumber, 'Phone number is invalid.');
    function checkValidPhoneNumber(value, element){
        var filter = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
        if (filter.test(value)) {
            return true;
        }
        else {
            return false;
        }
    }
});