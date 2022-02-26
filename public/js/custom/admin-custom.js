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
