 function searchAddress () {
    var search = $('#textSearch').val();
    var url = "./loadmaps.php";
    if (search.length > 0) {
        $('#divLocaion').html('Loading...');
        $.post(url, {'search': search}, function(data) {
            var htmlContent = '';
            $.each(data, function(name, val) {
            htmlContent += "<h2 class='text-success'>"+ name +":</h2>";
                $.each(val, function(key, res) {
                htmlContent += "<div>Address "+ (key + 1) +" : <strong>Latitude :</strong> "+ res.lat +" <strong>Longitude :</strong> "+ res.lon +"</div><hr />";
                });
            });
            $('#divLocaion').html(htmlContent);
        }, 'json');
    }else{
        alert('Please enter location');
    }
}