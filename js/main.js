$(function() {
    $('body').removeClass('fade-out');
    $('html').removeClass('fade-out');

});
$(window).on("scroll", function() {
    if($(window).scrollTop() > 400) {
        $(".menu").addClass("menu-active");
    } else {
       $(".menu").removeClass("menu-active");
    }
    if($(window).scrollTop() > 25) {
        $(".fade-koptekst").fadeOut();
    } else {
       $(".fade-koptekst").fadeIn();

    }
});

function initMap() {
        var myLatLng = {lat: 52.43434, lng: 4.659411 };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Woonplaats'
        });
      }
