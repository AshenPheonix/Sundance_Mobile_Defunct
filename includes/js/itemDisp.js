$(function() {
    $('.itemPopper').on('click', function(e) {
        var grabber = $(e.target).data();
        $.post('/mobile/includes/scripts/item.php', grabber, function(returned) {
            $('#itemModalHead').text(grabber.id);
            $('#itemModalBody').html(returned);
            $('#itemModal').modal({ backdrop: 'static' });
            $('#itemModal').modal('toggle');
            $('#itemModalBody').children('.row').children('.col, .col-6').children('.btn, a').remove();
        });
    });
});