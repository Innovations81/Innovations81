$(document).ready(function() {
    jQuery.validator.addMethod("noSpace", function(value, element) {
        return value == '' || value.trim().length != 0;
    }, "No space please and don't leave it empty");

    /*Player Form Submit*/
    $(".player-add-form").validate({
        rules: {

            first_name: {
                required: true,
                minlength: 3,
                noSpace: true,
            },
            last_name: {
                required: true,
                minlength: 3,
                noSpace: true,
            },
            user_name: {
                required: true,
                remote: {
                    url: url + '/verify_username',
                    type: "post",
                    data: {
                        username: function() {
                            return $("#user_name").val();
                        },
                        "_token": csrf_token
                    }
                },
                noSpace: true,
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: url + '/verify_email',
                    type: "post",
                    data: {
                        email: function() {
                            return $("#email").val();
                        },
                        "_token": csrf_token
                    }
                }
            },
            phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 14,
            }
        },
        messages: {
            password: {
                minlength: "Length is short, minimum 8 required.",
                maxlength: "Length is not valid, maximum 14 allowed."
            },
            email: {
                remote: "Email id already registred"
            },
            user_name: {
                remote: "User name already registred"
            }
        },
        submitHandler: function submitHandler(form) {
            form.submit();
        }
    });

    if ($('#errors').length > 0) {
        // alert('Hi');
        showModal();
    }
});

function showModal() {
    $('#createNewModal').modal('show');
}