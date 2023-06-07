$(document).ready(function () {
    $('#get_cities').click(function () {
        $.ajax({
            url: "/cities",
        }).done(function( data ) {
            var cities_html='<ul>';
            for(var i=0;i<data.data.length;i++) {
                cities_html+='<li>id '+data.data[i].ID+': '+data.data[i].NAME+'</li>';
            }
            cities_html+='</ul>';
            $('.get-cities-list').html(cities_html);
        });
    });
    $('.post-city-form form').submit(function (event) {
        event = event || window.event;
        event.preventDefault();
        var city_id=$(this).find('input[name=id]').val();
        $.ajax({
            url: "/city/"+city_id,
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $('.post-city-res').html(data.data);
            },
            error: function(data) { console.log(data); }
        });
    });
});
