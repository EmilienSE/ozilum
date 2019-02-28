$(function() {
    var form = $('#contactForm');
    var formMessages = $('#form-message');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: '../mailer.php',
            data: formData
        })
        .done(function(response) {
            $(formMessages).removeClass('alert alert-danger');
            $(formMessages).addClass('alert alert-success');
            $(formMessages).text(response);
            $('#inputNom').val('');
            $('#inputPrenom').val('');
            $('#inputEmail').val('');
            $('#inputPhone').val('');
            $('#inputMessage').val('');

            function dropAlert(){
                $(formMessages).removeClass('alert alert-success');
                $(formMessages).text('');
            }

            setTimeout(dropAlert, 5000);
        })
        .fail(function(data) {
            $(formMessages).removeClass('alert alert-success');
            $(formMessages).addClass('alert alert-danger');
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Une erreur est survenue, réessayez plus tard.');
            }
        });
    });
});