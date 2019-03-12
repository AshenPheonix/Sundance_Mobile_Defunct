$(document).ready(function() {
    $('select').on('change', function() {
        $(this).siblings('div')[0].children[0].href = "http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=" + $(this).val();
    });
});