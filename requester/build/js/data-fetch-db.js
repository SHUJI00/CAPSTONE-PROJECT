$(document).ready(function() {
    const validate = document.getElementById('validate');
    const success = document.getElementById('success-modal');
    const messageElement = document.getElementById('text');
    const successMessage = document.getElementById('text-success');
    const detailsModal = document.getElementById('req-details');
    const detailsText = document.getElementById('details-text');

    var inputs = [
        { field: $('#fname'), message: $('#valmess1'), requiredMessage: 'Please fill this field.' },
        { field: $('#lname'), message: $('#valmess2'), requiredMessage: 'Please fill this field.' },
        { field: $('#service'), message: $('#valmess5'), requiredMessage: 'Please select or add services.' },
        { field: $('#des-req'), message: $('#valmess7'), requiredMessage: 'Please fill this field.' },
        { field: $('#location-req'), message: $('#valmess8'), requiredMessage: 'Please fill this field.' },
        { field: $('#date'), message: $('#valmess9'), requiredMessage: 'Please select date service needed.' },
        { field: $('#time'), message: $('#valmess10'), requiredMessage: 'Select time range 7:00 AM to 5:00 PM.' }
    ];
    var departmentField = { field: $('#department'), message: $('#valmess4'), requiredMessage: 'Please select or input department' };
    var emailField = { field: $('#email'), message: $('#valmess3'), requiredMessage: 'Please enter a valid email address.' };
    var agreementField = { field: $('#agreement'), message: $('#valmess11'), requiredMessage: 'Please agree to the terms and agreement.' };
    var valid = true;
    
    // Function to reset input styles to default
    function resetInputStyles(input, message) {
        input.css({
            'border-color': '',
            '--tw-ring-color': ''
        });
        message.addClass('hidden').text('');
    }
    
    // Function to validate a specific input
    function validateInput(input, message, requiredMessage) {
        if (input.attr('id') === 'time') {
            const timeValue = input.val();
            const startTime = new Date();
            startTime.setHours(7, 0, 0); // 7:00 AM
    
            const endTime = new Date();
            endTime.setHours(17, 0, 0); // 5:00 PM
    
            const parts = timeValue.split(':');
            const inputTime = new Date();
            inputTime.setHours(parseInt(parts[0]), parseInt(parts[1]), 0, 0);
    
            if (inputTime < startTime || inputTime > endTime) {
                message.removeClass('hidden').text(requiredMessage);
                input.css({
                    'border-color': '#DC2626',
                    '--tw-ring-color': '#EF4444'
                });
                return false;
            } else {
                resetInputStyles(input, message);
                return true;
            }
        } else {
            if (input.val().trim() === '') {
                message.removeClass('hidden').text(requiredMessage);
                input.css({
                    'border-color': '#DC2626',
                    '--tw-ring-color': '#EF4444'
                });
                return false;
            } else {
                resetInputStyles(input, message);
                return true;
            }
        }
    }
    
    // Validate each input on 'input' event (excluding email and agreement)
    $.each(inputs, function(index, item) {
        var input = item.field;
        var message = item.message;
        var requiredMessage = item.requiredMessage;
    
        input.on('input', function() {
            valid = validateInput(input, message, requiredMessage);
        });
    });
    
    // Validate email on 'blur' event
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
    
    // Validate agreement checkbox on 'click' event
    agreementField.field.on('click', function() {
        if (!agreementField.field.prop('checked')) {
            agreementField.message.removeClass('hidden').text(agreementField.requiredMessage);
            agreementField.field.css({
                'border-color': '#DC2626',
                '--tw-ring-color': '#EF4444'
            });
            valid = false;
        } else {
            resetInputStyles(agreementField.field, agreementField.message);
            valid = true;
        }
    });
    
    // Validate department on 'change' event
    departmentField.field.on('change', function() {
        if ($('#department').val() === 'Other') {
            // Show other department input if 'Other' is selected
            $('#otherdept').removeClass('hidden');
        } else {
            // Hide other department input if different option is selected
            $('#otherdept').addClass('hidden');
            // Reset validation message and border color
            resetInputStyles($('#department'), departmentField.message);
        }
    });
    
    // Validate all inputs on form submission (including email, department, and agreement)
    $('#form-btn').click(function() {
        valid = true; // Reset valid flag before re-validation
    
        // Validate all inputs except email, department, and agreement
        $.each(inputs, function(index, item) {
            var input = item.field;
            var message = item.message;
            var requiredMessage = item.requiredMessage;
    
            if (!validateInput(input, message, requiredMessage)) {
                valid = false;
            }
        });
    
        // Validate Department
        if ($('#department').val().trim() === '') {
            departmentField.message.removeClass('hidden').text(departmentField.requiredMessage);
            $('#department').css({
                'border-color': '#DC2626',
                '--tw-ring-color': '#EF4444'
            });
            valid = false;
        } else {
            $('#department').css({
                'border-color': '',
                '--tw-ring-color': ''
            });
            departmentField.message.addClass('hidden').text('');
        }
    
        // Validate Other Department input if visible
        if (!$('#otherdept').hasClass('hidden') && $('#otherdept').val().trim() === '') {
            departmentField.message.removeClass('hidden').text(departmentField.requiredMessage);
            $('#department').css({
                'border-color': '#DC2626',
                '--tw-ring-color': '#EF4444'
            });
            valid = false;
        }
    
        // Validate email
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
    
        // Validate agreement checkbox
        if (!agreementField.field.prop('checked')) {
            agreementField.message.removeClass('hidden').text(agreementField.requiredMessage);
            agreementField.field.css({
                'border-color': '#DC2626',
                '--tw-ring-color': '#EF4444'
            });
            valid = false;
        } else {
            resetInputStyles(agreementField.field, agreementField.message);
        }
    
        // If all validations pass, show details in modal
        if (valid) {
            let details = '';
            const formFields = {
                'fname': 'First Name',
                'lname': 'Last Name',
                'email': 'Email Address',
                'otherdept': 'Department',
                'service': 'Services',
                'date': 'Date of Service Needed',
                'time': 'Time of Service Needed',
                'des-req': 'Purpose of Services',
                'location-req': 'Location'
            };
    
            $.each(formFields, function(id, name) {
                details += `<p><strong>${name}:</strong> ${$('#' + id).val()}</p>`;
            });
    
            // Update details text in the modal
            $('#details-text').html(details);
    
            // Show details modal
            $('#req-details').removeClass('hidden');
        }
    });
    
    // Close details modal on cancel button click
    $('#cancelDetailsModalBtn').click(function() {
        $('#req-details').addClass('hidden');
    });
    
    
    // Handle submit button in request details modal
    $('#submitDetailsModalBtn').click(function() {
        const formData = {};
        const formFields = {
            'fname': 'First Name',
            'lname': 'Last Name',
            'email': 'Email Address',
            'otherdept': 'Department',
            'service': 'Services',
            'service_added': 'Added Service',
            'des-req': 'Purpose of Services',
            'location-req': 'Location',
            'date': 'Date',
            'time': 'Time',
            'agreement': 'Agreement'
        };
        $.each(formFields, function(id) {
            formData[id] = $('#' + id).val();
        });
        formData['req-con-no'] = $('#req-con-no').val();
        $.ajax({
            url: 'add-req-data.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response === 'Successfully submitted') {
                    detailsModal.classList.add('hidden');
                    showModal(success, successMessage, response, function() {
                        location.reload();
                    });
                } else {
                    alert(response);
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                alert('An error occurred while updating the data. Status: ' + status + ', Error: ' + error);
            }
        });
    });
    // Handle cancel button in request details modal
    $('#cancelDetailsModalBtn').click(function() {
        detailsModal.classList.add('hidden');
    });

    // Close error validate button handler
    $('#closeModalBtn').click(function() {
        validate.classList.add('hidden');
    });

    // Close success modal button handler
    $('#closesuccess').click(function() {
        success.classList.add('hidden');
        location.reload();
    });

    function showModal(modalElement, messageElement, message, callback) {
        messageElement.textContent = message;
        modalElement.classList.remove('hidden');
        $('#closeModalBtn').off('click').on('click', function() {
            modalElement.classList.add('hidden');
            if (callback) callback();
        });
    }
});
