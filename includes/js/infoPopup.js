$(document).ready(function() {
    $('.infoPopper').on('click', function(e) {
        $.post('/mobile/includes/scripts/infoPage.php', $(e.target).data(), function(returned) {
            $('#infoTitle').text((returned === 'File not Found, bad location') ? 'Error' : $(e.target).data().title);
            $('#infoModal').html(returned);
            $('#infoPopup').modal('toggle');
        });
    });
});