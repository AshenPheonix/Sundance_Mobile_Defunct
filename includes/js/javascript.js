<!--
$(document).ready(function() {
    $('.email').html('<a href="' + 'ma' + 'i' + 'l' + 'to' + ':' + 'contactus' + '@' + 'sun' + 'dancegl' + 'ass' + '.com">' + 'contactus' + '@' + 'sun' + 'dancegl' + 'ass' + '.com</' + 'a>');
    $('.made_in_usa').html('<img style="width:100px;height:75px;border:1px solid #000;" src="http://sundanceglass.com/images/made_in_usa_100x75.png" alt="Made In the USA" title="Made In the USA">');
    $('.out_of_stock').html('<!-- START Out Of Stock Notice --><div class="center"><div class="center b pad_6" style="width:165px;color:#990000;border:2px solid #990000;">Temporarily Out Of Stock</div></div><!-- END Out Of Stock Notice -->');
    $('.discontinued').html('<!-- START Discontinued --><div class="center"><div class="center b pad_6" style="width:165px;color:#990000;border:2px solid #990000;">Discontinued</div></div><!-- END Discontinued -->');
    $('.temp_discontinued').html('<!-- START Temp Discontinued --><div class="center"><div class="center b pad_6" style="width:165px;color:#990000;border:2px solid #990000;">Temporarily Discontinued</div></div><!-- END Temp Discontinued -->');
    $('div#right_nav').fadeIn('slow');

    $('div#glassblowing_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#glassblowing_a').click(function() {
        $('div#glassblowing_b').slideToggle('slow');
        $('span#glassbowing_plus').toggle();
        $('span#glassbowing_minus').toggle();
    });

    $('div#sculpting_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#sculpting_a').click(function() {
        $('div#sculpting_b').slideToggle('slow');
        $('span#sculpting_plus').toggle();
        $('span#sculpting_minus').toggle();
    });

    $('div#beadmaking_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#beadmaking_a').click(function() {
        $('div#beadmaking_b').slideToggle('slow');
        $('span#beadmaking_plus').toggle();
        $('span#beadmaking_minus').toggle();
    });

    $('div#pipemaking_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#pipemaking_a').click(function() {
        $('div#pipemaking_b').slideToggle('slow');
        $('span#pipemaking_plus').toggle();
        $('span#pipemaking_minus').toggle();
    });

    $('div#fusing_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#fusing_a').click(function() {
        $('div#fusing_b').slideToggle('slow');
        $('span#fusing_plus').toggle();
        $('span#fusing_minus').toggle();
    });


    $('div#lampworking_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#lampworking_a').click(function() {
        $('div#lampworking_b').slideToggle('slow');
        $('span#lampworking_plus').toggle();
        $('span#lampworking_minus').toggle();
    });


    $('div#borosilica_sculpturing_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#borosilica_sculpturing_a').click(function() {
        $('div#borosilica_sculpturing_b').slideToggle('slow');
        $('span#borosilica_sculpturing_plus').toggle();
        $('span#borosilica_sculpturing_minus').toggle();
    });


    $('div#sandblasting_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#sandblasting_a').click(function() {
        $('div#sandblasting_b').slideToggle('slow');
        $('span#sandblasting_plus').toggle();
        $('span#sandblasting_minus').toggle();
    });


    $('div#casting_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#casting_a').click(function() {
        $('div#casting_b').slideToggle('slow');
        $('span#casting_plus').toggle();
        $('span#casting_minus').toggle();
    });


    $('div#flat_stained_a').hover(function() {
        $(this).css({ 'background-color': '#CCFFFF', 'color': '#000', 'text-decoration': 'none', 'cursor': 'pointer' });
    }, function() {
        $(this).css({ 'background-color': '#fff', 'color': '#000' });
    });

    $('div#flat_stained_a').click(function() {
        $('div#flat_stained_b').slideToggle('slow');
        $('span#flat_stained_plus').toggle();
        $('span#flat_stained_minus').toggle();
    });

    $('div#nav1a').click(function() { $('div#nav1b').slideToggle('slow'); });

    $('div#nav2a').click(function() { $('div#nav2b').slideToggle('slow'); });

    $('div#nav3a').click(function() { $('div#nav3b').slideToggle('slow'); });
});
-->