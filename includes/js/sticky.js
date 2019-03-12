$(document).ready(function() {
    var top = 38;
    $(window).scroll(function() {
        if ($(window).scrollTop() > top) {
            $('#chromemenu').addClass('sticky');
            $('#chromemenu .navbar-brand').text('Sundance');
        } else {
            $('#chromemenu').removeClass('sticky');
            $('#chromemenu .navbar-brand').text('Sundance Art Glass');
        }
    });
    $(window).scroll();
});