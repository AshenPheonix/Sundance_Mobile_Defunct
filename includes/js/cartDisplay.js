$(() => {
    $('.buyButton').on('click', (e) => {
        let num = $(e.currentTarget).siblings('label').children('input').val()
        let pid = $(e.currentTarget).val()
        if (num <= 0) {
            $('#errorModal').trigger('err:on', { message: 'Please enter a value that can be sent' })
        } else {
            /*let sender = {
                    mid: '/*private*/',
                    qty: num,
                    pid: pid,
                    qa: 1
                }
                $.post('http://www.1shoppingcart.com/SecureCart/SecureCart.aspx', sender, (ret) => {
                    console.log('returned')
                    console.log(ret);
                })*/
            window.location.href = "http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=" + pid + "&qty=" + num
        }
    })

    $('.prevButton').on('click', (e) => {
        let num = $(e.currentTarget).prev().children('input').val()
        let pid = $(e.currentTarget).val()
        if (num <= 0) {
            $('#errorModal').trigger('err:on', { message: 'Please enter a value that can be sent' })
        } else {
            window.location.href = "http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=" + pid + "&qty=" + num
        }
    })
})