// Contact Form Scripts

$(function() {
/*
    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
*/

    $('#contactForm').on('submit', function(e) {
            $('#submit').prop('disabled', true);
            var form = $(this);
            var formData = form.serialize();

            var firstName = $("input#contactform-name").val(); // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: form.attr("action"),
                type: "POST",
                data: formData,
                cache: false,
                success: function(response) {
                    $('#submit').prop('disabled', false);
                    var data = JSON.parse(response);
                    if (data.send){
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>" + data.message + "</strong>");
                        $('#success > .alert-success')
                            .append('</div>');
                    } else {
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append("<strong>" + data.message + "<strong/>");
                        $('#success > .alert-danger').append('</div>');
                    }
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    $('#submit').prop('disabled', false);
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
    }).on('submit', function(e){
        e.preventDefault();
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#contactform-name').focus(function() {
    $('#success').html('');
});
