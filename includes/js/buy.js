$(() => {
    $(document).on('click', '.buy', (e) => {
        var target = $(e.currentTarget).siblings('select').val()
        if (target != 0)
            window.location.href = 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=' + target + '&qty=1'
    });
    $(document).on('click', '.qtyBuy', (e) => {
        var target = $(e.currentTarget).siblings('label').children('input')
        if (target.val() >= 0 && target.val() >= target.attr('min')) {
            window.location.href = "http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=" + target.attr('id') + "&qty=" + target.val()
        } else {
            $('#errorModal').trigger('err:on', { message: 'Please enter the minimum amount' });
        }
    });
    $(document).on('click', '.buyB', (e) => {
        var target = $(e.currentTarget).siblings('select').val()
        if (target != 0)
            window.location.href = 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&bid=' + target + '&qty=1'
    });
    $(document).on('click', '.multiBuy', (e) => {
        let target = $(e.currentTarget).siblings('select').val()
        let numb = $(e.currentTarget).siblings('label').children('input').val()
        if (target != 0 && numb != 0) {
            window.location.href = 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=' + target + '&qty=' + numb
        }
    })
    $(document).on('click', '.fritBuy', (e) => {
        var target = $(e.currentTarget).siblings('select.targ').val()
        if (target != 0)
            window.location.href = 'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=' + target + '&qty=1'
    })
    $(document).on('change', '.fritSize', (e) => {
        let selected = $(e.currentTarget).siblings('select')
        let me = $(e.currentTarget)
        console.log(selected);
    })
});