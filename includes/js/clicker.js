$(() => {
    $('.hoverImg').hover((e) => {
        console.log($(e.delegateTarget).children())
        $(e.delegateTarget).children().toggle();
    })
})