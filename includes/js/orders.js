$(document).ready(function() {
    $("#pay_credit").click(function() {
        $("#credit_form").fadeIn("slow");
    });
    $("#pay_paypal").click(function() {
        $("#credit_form").fadeOut("slow");
    });
    $("#pay_check").click(function() {
        $("#credit_form").fadeOut("slow");
    });
    $('#whatisccv').hover(
        function() {
            $('#ccvpics').toggleClass('hide');
        },
        function() {
            $('#ccvpics').toggleClass('hide');
        }
    );
    $('#shippingmethod').change(
        function() {
            field = $(this).val();
            switch (field) {
                case 'ground [Domestic]':
                    $('#rush').css({ display: 'block' });
                    $('#shipmethod_tip2b').css({ display: 'none' });
                    break;
                case 'Economy [International]':
                    $('#shipmethod_tip2b').css({ display: 'block' });
                    $('#rush').css({ display: 'block' });
                    break;
                case 'Priority [International]':
                    $('#shipmethod_tip2b').css({ display: 'block' });
                    $('#rush').css({ display: 'block' });
                    break;
                default:
                    $('#shipmethod_tip2b').css({ display: 'none' });
                    $('#rush').css({ display: 'none' });
            }
        }
    );
    $('#shipmethod_tip1a').hover(
        function() {
            $('#shipmethod_tip1b').toggleClass('hide');
        },
        function() {
            $('#shipmethod_tip1b').toggleClass('hide');
        }
    );
    $('#rush_tip1a').hover(
        function() {
            $('#rush_tip1b').toggleClass('hide');
        },
        function() {
            $('#rush_tip1b').toggleClass('hide');
        }
    );
    $('#shipshort_tip1a').hover(
        function() {
            $('#shipshort_tip1b').toggleClass('hide');
        },
        function() {
            $('#shipshort_tip1b').toggleClass('hide');
        }
    );
    $('#shipshort_tip2a').hover(
        function() {
            $('#shipshort_tip2b').toggleClass('hide');
        },
        function() {
            $('#shipshort_tip2b').toggleClass('hide');
        }
    );

    $('.required input').css({ border: '2px solid #990000' });
    $('.required input').bind('keydown keyup',
        function() {
            field = $(this).val();
            field = jQuery.trim(field);
            if (field != null && field != '') {
                $(this).css({ border: '' });
            } else {
                $(this).css({ border: '2px solid #990000' });
            }
        }
    );
    $('#shipcountry').change(
        function() {
            field = $(this).val();
            if (field == 'other') {
                $('#shipcountrydiv').append('<span><br><input type="text" name="tmp_ship_country"></span>');
            } else {
                $('#shipcountrydiv').find('span:last').remove();
            }
            if (field != 'United States [US]' && field != 'United States Minor Is. [UM]') {
                $('.province').text('Province');
                $('.province_txt').attr({ size: '26' });
                $('.postal_code').text('Postal');
            } else {
                $('.province').text('State');
                $('.province_txt').attr({ size: '2' });
                $('.postal_code').text('Zip');
            }
        }
    );
    $('#billingcountry').change(
        function() {
            field = $(this).val();
            if (field == 'other') {
                $('#billcountrydiv').append('<span><br><input type="text" name="tmp_bill_country"></span>');
            } else {
                $('#billcountrydiv').find('span:last').remove();
            }
            if (field != 'United States [US]' && field != 'United States Minor Is. [UM]') {
                $('.province').text('Province');
                $('.province_txt').attr({ size: '26' });
                $('.postal_code').text('Postal');
            } else {
                $('.province').text('State');
                $('.province_txt').attr({ size: '2' });
                $('.postal_code').text('Zip');
            }
        }
    );
    $("#place_order").submit(function() {
        $("#place_order").attr("disabled", "disabled");
        $("#order_form").attr("disabled", "disabled");
    });
});