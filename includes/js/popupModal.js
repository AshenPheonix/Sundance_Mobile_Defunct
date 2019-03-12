$(document).ready(function() {
    $(document).on('click', '.clickWindow', function(e) {
        var popup = $(e.target.dataset)[0];

        $.get('/mobile/includes/subWindow.php', { filename: popup.target }, function(results) {
            $('#popupBody').html(results);
            $('#popupModal').modal('toggle');
        });
    });
});