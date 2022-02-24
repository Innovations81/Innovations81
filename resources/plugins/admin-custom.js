var checkfilter = 0;
$(document).ready(function() {

    if ($('#user').length > 0) {
        $('#user').select2();
    }

    if ($('#transactions').length > 0) {
        LoadTransactionsDataTable();

        $('.serach_tran').change(function() {
            var start_date = $("input[name='start_date']").val();
            var end_date = $("input[name='end_date']").val();
            var user_id = $("select[name='user_id']").val();
            $("#transactions").DataTable().destroy();
            LoadTransactionsDataTable(start_date, end_date, user_id)
        });
    }

    if ($('#deposits').length > 0) {

        showDepositsDetail();
        $('.serach_deposit').change(function() {
            var start_date = $("input[name='start_date']").val();
            var end_date = $("input[name='end_date']").val();
            var user_id = $("select[name='user_id']").val();
            $("#deposits").DataTable().destroy();
            checkfilter = 1;
            //console.log(start_date,end_date);
            showDepositsDetail(start_date, end_date, user_id)
        });
    }
    $(document).on('click', '.bonus-submit-btn', function(e) {
        e.preventDefault();
        var amount = $('input[name="bonus"]').val();
        var user_id = $('input[name="user_id"]').val();
        if (amount == '') {
            alert('Add Amount')
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/bonus-detail',
            type: "POST",
            data: { amount, user_id },
            success: function(response) {

                if (response.status == 'success') {
                    $("#bonusModal .modal-body").html(response.data)
                    $.notify({ message: 'Added Successfully' }, { type: response.type });
                    // show_messages('#registerModal',response.msg,'alert-danger',5000);
                } else {
                    $.notify({ message: 'Something went wrong!' }, { type: 'danger' });
                }
            }
        });

    });


});

$('body').on('click', '.tran_detail_btn', function() {
    // $('#transactions').addClass('d-none');
    $("#transactions").DataTable().destroy();

    $('#transactions_detail').removeClass('d-none');
    $('#transactions').addClass('d-none');
    $('.transaction-search').addClass('d-none');
    $('.transaction-details-search').removeClass('d-none');
    var session_id = $(this).attr('data-session-id');
    var user_id = $(this).attr('data-user-id');
    // $('html, body').animate({
    //      'scrollTop' : $(".banner-wrapper").position().top
    //  });
    showTransactionDetail(user_id, session_id);
});

$('body').on('click', '.backToTransaction', function() {
    // $('#transactions').addClass('d-none');
    $("#transactions_detail").DataTable().destroy();
    $('#transactions_detail').addClass('d-none');
    $('.transaction-details-search').addClass('d-none');
    $('.transaction-search').removeClass('d-none');
    $('#transactions').removeClass('d-none');
    LoadTransactionsDataTable();
});

$(document).on('click', '.user_bonus', function(e) {
    var user_id = $(this).attr('data-user-id');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url + '/bonus-detail',
        type: "post",
        data: { user_id },
        success: function(response) {
            $("#bonusModal").modal('show');
            $("#bonusModal .modal-body").html(response.data)
        }
    });
    $("#bonus").modal('show');
});


function LoadTransactionsDataTable(start_date = null, end_date = null, user_id = null) {
    var table = $('#transactions').DataTable({
        order: [
            [2, "desc"]
        ],
        processing: true,
        serverSide: true,
        searching: false,
        bLengthChange: false,
        info: false,
        ajax: url + "/users-transactions?user_id=" + user_id + "&start_date=" + start_date + "&end_date=" + end_date,
        columns: [
            { data: 'user_name', name: 'user_name' },
            { data: 'casino_name', name: 'casino_name' },
            { data: 'session_id', name: 'session_id' },
            { data: 'session_created_at', name: 'session_created_at' },
            { data: 'session_ended_at', name: 'session_ended_at' },
            { data: 'profitLoss', name: 'profitLoss' },
            { data: 'action', name: 'action', orderable: true, searchable: true },
            // {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
}

function showTransactionDetail(user_id, session_id) {
    var table = $('#transactions_detail').DataTable({
        processing: true,
        serverSide: true,
        searching: false,
        bLengthChange: false,
        info: false,
        ajax: url + "/users-transactions?user_id=" + user_id + "&session_id=" + session_id,
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'placed', name: 'placed' },
            { data: 'game_type', name: 'game_type' },
            { data: 'selection_name', name: 'selection_name' },
            { data: 'betId', name: 'betId' },
            { data: 'stake', name: 'stake' },
            { data: 'profit_loss', name: 'profit_loss' },
            { data: 'status', name: 'status' },
            // {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $.fn.dataTable.ext.errMode = 'throw';
}


function showDepositsDetail(start_date = null, end_date = null, user_id = null) {

    const urlParams = new URLSearchParams(window.location.search);
    const param_x = urlParams.get('user_id');
    const enddate = urlParams.get('end_date');
    const startdate = urlParams.get('start_date');

    var table = $('#deposits').DataTable({
        processing: true,
        serverSide: true,
        searching: false,
        bLengthChange: false,
        info: false,
        ajax: url + "/deposits?user_id=" + user_id + "&start_date=" + start_date + "&end_date=" + end_date,
        columns: [
            { data: 'user', name: 'user' },
            { data: 'created_at', name: 'created_at' },
            { data: 'email', name: 'email' },
            { data: 'amount', name: 'amount' },

            // {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $.fn.dataTable.ext.errMode = 'throw';

    if (checkfilter == 1) {
        //console.log(start_date,end_date,"=====");
        //window.location.replace(url+"/deposits?user_id="+user_id+"&start_date="+start_date+"&end_date="+end_date);
    }

}

$('#roleTable').DataTable();
$('.role').on('change', function(e) {

    var url = window.location.href; // get selected value
    var newurl = url.split("?")[0];
    if ($(this).val() != '') {
        newurl += '?role=' + $(this).val(); // get selected value
        if (newurl) { // require a URL
            window.location.href = newurl; // redirect
        }
    } else {
        window.location.href = newurl;
    }
    return false;

});