$(() => {
    $('#errorModal').on('err:on', (e, data) => {
        $('#errRender').text(data.message)
        $('#errorModal').modal('toggle')
    })
})