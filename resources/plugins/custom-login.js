$(document).ready(function() {
    /*Register Form Submit*/
    $('.admin-login-form .submit-btn').on('click', function() {
        $(".admin-login-form").validate();
    });
    $('.admin-register-form .submit-btn').on('click', function() {
        $(".admin-register-form").validate();
    });
    $(".admin-register-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            password: {
                minlength: "Length is short, minimum 8 required.",
                maxlength: "Length is not valid, maximum 14 allowed."
            }
        },
        submitHandler: function submitHandler(form) {
            form.submit();
        }
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

    $('.withdrawChange').on('change', function(e) {

        var status = $(this).val();
        var id = $(this).attr('data-id');
        if (status != '') {
            $.confirmModal('Are you sure?', function(el) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url + '/update-withdraw-status',
                    type: "post",
                    data: { id, status },
                    success: function(response) {
                        $.notify({ message: response.message }, { type: response.type });
                    }
                });

            });
        }
    });

    $("#withdraw_table").dataTable();

    $("#user_list_table").dataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "searching": true,
        "info": false
    });

    setTimeout(function() {
        if ($('.alert-block').length > 0) {
            $('.alert-block .close').trigger('click');
        }
    }, 5000);

    checkmessage();

});
$(document).on('click', '.document-verify-form .submit-btn', function(e) {
    e.preventDefault();
    $.confirmModal('Are you sure?', function(el) {
        $(".document-verify-form").submit();
    });
});

$(document).on('click', '.verify_document', function(e) {
    var id = $(this).attr('data-id');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url + '/document-detail/' + id,
        type: "get",
        data: {},
        success: function(response) {
            $("#documentVeirfy").modal('show');
            $("#documentVeirfy .modal-body").html(response.data)
        }
    });
});

function checkmessage() {
    if (document.body.dataset.notification === undefined)
        return false;
    $.notify({ title: "", message: document.body.dataset.notificationMessage }, { type: document.body.dataset.notificationType });
}

/*City values based on coutnry*/
$('#agentCountry').on('change', function(e) {
    var countryId = $(this).val();
    // alert(countryId);
    if (countryId != '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url + '/get_city/' + countryId,
            type: "get",
            dataType: "json",
            success: function(json) {
                var html = '';
                $.each(json, function(idx, response) {
                    html += '<option id=' + response.id + '>' + response.name + '</option>';
                });
                if (html != '') {
                    $('#agentCity').html('');
                    $('#agentCity').append('<option value="">Select City</option>');
                    $('#agentCity').append(html);
                } else {
                    $('#agentCity').html('');
                    $('#agentCity').append('<option value="">City Not Available</option>');
                }
            }
        });
    }
});
/*Over*/