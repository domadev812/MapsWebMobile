$(document).ready(function() {
	$('.date').html(moment().format('MMM D, YYYY'));
	geoip2.city(
        function(res) {      
        console.log(res)    ;
          // $('.search-input').val(res.city.names.en + ', ' + res.country.names.en);
          $('.location').html(res.city.names.en);
        },
        function(err) {
          console.log(err);
        }
    );
});