$(document).ready(function(){
    var inputFields = [
        {field:$('#reqtrfname'),message:$('#reqtrvalmess1'),requiredMessage:'Please input your first name.'},
        {field:$('#reqtrlname'),message:$('#reqtrvalmess2'),requiredMessage:'Please input your last name.'},
        {field:$('#reqtrotherdept'),message:$('#reqtrvalmess4'),requiredMessage:'Please select or input department.'},
        {field:$('#reqtrusername'),message:$('#reqtrvalmess5'),requiredMessage:'Please input your username.'},
        {field:$('#reqtrpassword'),message:$('#reqtrvalmess6'),requiredMessage:'Please input your password.'},
        {field:$('#reqtrcon-password'),message:$('#reqtrvalmess7'),requiredMessage:'Please confirm your password.'}
    ];
    var emailField = {field:$('#reqtremail'),message:$('#reqtrvalmess3'),requiredMessage:'Please input valid email.'};
    var valid = true;

    emailField.field.on('blur', function() {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailField.field.val().trim())) {
            emailField.message.removeClass('hidden').text(emailField.requiredMessage);
            emailField.field.css({
                'border-color': '#DC2626',
                '--tw-ring-color': '#EF4444'
            });
            valid = false;
        } else {
            resetInputStyles(emailField.field, emailField.message);
        }
    });

    $('#signupbtn').click(function(){
            $.each(inputFields, function(){
                if (this.field.val().trim() === '') {
                    this.message.removeClass('hidden').text(this.requiredMessage);
                    this.field.css({
                        'border-color': '#DC2626',
                        '--tw-ring-color': '#EF4444'
                    });
                    valid = false;
                }
            });
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailField.field.val().trim())) {
                    emailField.message.removeClass('hidden').text(emailField.requiredMessage);
                    emailField.field.css({
                        'border-color': '#DC2626',
                        '--tw-ring-color': '#EF4444'
                    });
                    valid = false;
                } else {
                    resetInputStyles(emailField.field, emailField.message);
                }
        });
        $.each(inputFields, function(){
            this.field.on('input', function(){
                this.message.addClass('hidden').text('');
                this.field.css({
                    'border-color': '',
                    '--tw-ring-color': ''
                });
            }.bind(this));
        });
    $('#reqtrdepartment').on('change', function(){
        if($(this).val() === 'Other'){
            $('#reqtrotherdept').removeClass('hidden').val('');
        }else if($('#reqtrdepartment').val() !== 'Other'){
            $('#reqtrotherdept').addClass('hidden').val($(this).val());
        }
    });
});