$(document).ready(function() {
    $(document).on('click', '.clickImg', function(e) {
        var imgData = $(e.target.dataset)[0];
        if (imgData.zoom !== undefined) {
            $('#imageTitle').text('Zoom In');
            $('#imageBody').attr('src', $(e.target).attr('src'));
        } else {
            $('#imageTitle').text(imgData.title);
            $('#imageBody').attr('src', imgData.bigimg);
        }
        $('#imageModal').modal('toggle');
    })
})