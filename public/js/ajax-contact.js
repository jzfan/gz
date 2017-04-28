$(function () {

    // Get the form.
    var form = $('#main_contact_form_register');

    // Get the messages div.
    var formMessages = $('#success_fail_info');

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text('信息提交成功');

                // Clear the form.
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');
                if($('.gz-sign').find('input').eq(1).is(':checked')){
                    setTimeout(function(){
                        window.location.href = '/me'
                    },1000)
                }else{
                    setTimeout(function(){
                        window.location.href = '/'
                    },1000)
                }
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('信息有误');
                }
            });

    });

});