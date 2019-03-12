$(() => {
    $('.controlMe').hover((e) => {
        $(e.currentTarget).toggleClass('bg-chrome')
    })
})