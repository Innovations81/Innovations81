$(document).ready(function() {
    $('.admin-login-form .submit-btn').on('click', function() {
        $(".admin-login-form").validate();
    });
    
    $(".admin-login-form").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            password: {
                minlength: "Length is short, minimum 8 required.",
                maxlength: "Length is not valid, maximum 14 allowed.",
            },
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});

