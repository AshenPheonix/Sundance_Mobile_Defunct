$(() => {
    $(document).on('change', '.multiSetSel', (e) => {
        $.each($('.multiSetSel'), (i, item) => {
            if (item != e.currentTarget) {
                $(item).children(':first').prop('selected', true);
            } else {
                $($(item).find(':selected').data('target')).attr('src', 'images/' + $(item).find(':selected').data('src'));
                if ($(item).find(':selected').data('sub') !== undefined) {
                    $('.subby').hide();
                    var innerTarget = $($($(item).find(':selected').data('sub')).find(':selected'));
                    var innerSel = $('input' + $(item).find(':selected').data('sub'));
                    $($(item).find(':selected').data('sub')).show();
                    $(innerSel.data('target')).attr('src', 'images/' + innerSel.data('src'));
                    $($(innerSel[1]).data('buy-targ')).attr('href', 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=47BF3DAF%2DA2C9%2D4D74%2D94CA%2D0EBA5234BE11&' + innerTarget.data('type') + '=' + $(item).val());
                } else if ($(item).attr('type') == 'hidden') {
                    $($(item).data('buy-targ')).attr('href', 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=47BF3DAF%2DA2C9%2D4D74%2D94CA%2D0EBA5234BE11&' + $(item).data('type') + '=' + $(item).val())
                } else {
                    $($(item).data('buy-targ')).attr('href', 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=47BF3DAF%2DA2C9%2D4D74%2D94CA%2D0EBA5234BE11&' + $(item).find(':selected').data('type') + '=' + $(item).val())
                }
            }
        })
        if ($(e.currentTarget).find(':selected').data('sub') == undefined && $(e.currentTarget).hasClass('subby') == false) {
            $('.subby').hide();
        }
    })
})