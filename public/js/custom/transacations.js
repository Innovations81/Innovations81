$(document).ready(function() {
    if ($('.om-transaction').length > 0) {
        LoadTransactionsDataTable();
            
        $('.search-button').on('click', function() {
            LoadTransactionsDataTable();
        });
            
        if ($('.transacation-datepicker').length > 0) {
            $('.transacation-datepicker').datepicker({
              todayHighlight: true,
              orientation: 'bottom'
            });
         }
    }
});

function LoadTransactionsDataTable() {
    var date = $("input[name='date']").val();
    var user_name = $('.user_name').val();
    var min_amount = $('.min_amount').val();
    var max_amount = $('.max_amount').val();
    
    var table = $('.om-transaction').DataTable({
        order: [[ 2, "desc" ]],
        processing: true,
        serverSide: true,
        searching: true,
        bLengthChange: false,
        bDestroy: true,
        info: false,
        dom: 'frtipB',
        buttons: [
              'csvHtml5'
        ],
        "responsive": true,
        ajax: "./users-transactions?date="+date+"&user_name="+user_name+'&min_amount='+min_amount+'&max_amount='+max_amount,
        columns: [
            {data: 'user_name', name: 'user_name'},
            {data: 'placed_at', name: 'placed_at'},
            {data: 'type', name: 'type'},
            {data: 'transaction_id', name: 'transaction_id'},
            {data: 'amount', name: 'amount'},
            {data: 'amount', name: 'amount'},
            {data: 'balance', name: 'balance'},
            {data: 'profitLoss', name: 'profitLoss'},
            {data: 'round_id', name: 'round_id'},
            {data: 'casino_name', name: 'casino_name'},
            {data: 'table_id', name: 'table_id'},
        ]
    });
}
