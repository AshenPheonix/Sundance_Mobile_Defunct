$(document).ready(function() {
    $('#feedbackButton').on('click', function() {
        if ($('#feedback').val() == '') {
            alert('No Feedback');
        } else {
            var log = $('#feedback').val();
            $.post('/includes/email.php', { message: log }, function(res) {
                if (res == true) {
                    alert(res);
                    alert("Thank you for your feedback");
                    $('#feedbackModal').modal('toggle');
                } else {
                    alert('something went wrong');
                    $('#feedbackDebug').html(res)
                }
                $('#feedback').val('');
            })
        }
    })
})