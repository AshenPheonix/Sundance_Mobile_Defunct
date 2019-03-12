$(document).ready(function() {
    $(document).on('change', '.swapper', function(e) {
        var target = $(e.currentTarget);
        if (target.data('img') !== undefined) {
            $(target.data('img')).attr('src', target.find(':selected').data('src'));
        }
        if (target.data('price') !== undefined) {
            $(target.data('price')).text('$' + target.find(':selected').data('price'));
        }
    });
});