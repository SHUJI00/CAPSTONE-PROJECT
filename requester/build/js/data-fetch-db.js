$(document).ready(function() {
    const validate = document.getElementById('validate');
    const success = document.getElementById('success-modal');
    const messageElement = document.getElementById('text');
    const successMessage = document.getElementById('text-success');
    const detailsModal = document.getElementById('req-details');
    const detailsText = document.getElementById('details-text');

    $('#form-btn').click(function() {
        const formFields = {
            'fname': 'First Name',
            'lname': 'Last Name',
            'contactinfo': 'Mobile Number',
            'department': 'Department',
            'service': 'Services',
            'date': 'Date',
            'time': 'Time',
            'des-req': 'Purpose of Services',
            'location-req': 'Location',
            'agreement': 'Agreement'
        };
        let valid = true;

        // Validate empty fields first
        $.each(formFields, function(id, name) {
            if (id === 'agreement') {
                if (!$('#agreement').prop('checked')) {
                    showModal(validate, messageElement, 'Please agree with the terms and agreement.');
                    valid = false;
                    return false;
                }
            } else if($('#' + id).val() === '') {
                showModal(validate, messageElement, 'Please Fill Input ' + name + '.');
                valid = false;
                return false;
            }
        });

        // If all fields are filled, validate the mobile number
        if (valid) {
            const mobileNumber = $('#contactinfo').val();
            if (!validateMobileNumber(mobileNumber)) {
                showModal(validate, messageElement, 'Invalid Mobile Number Format.');
                valid = false;
            }
        }

        // Validate the time field for 12:00 AM
        if (valid) {
            const timeValue = $('#time').val();
            if (timeValue === '00:00') {
                showModal(validate, messageElement, 'Time cannot be 12:00 AM.');
                valid = false;
            }
        }
        // If all validations pass, show the request details modal
        if (valid) {
            let details = '';
            $.each(formFields, function(id, name) {
                details += `<p class="flex flex-col gap-2 w-full px-3"><strong>${name}:</strong> ${$('#' + id).val()}</p><hr>`;
            });
            detailsText.innerHTML = details;
            detailsModal.classList.remove('hidden');
        }
    });
    // Handle submit button in request details modal
    $('#submitDetailsModalBtn').click(function() {
        const formData = {};
        const formFields = {
            'fname': 'First Name',
            'lname': 'Last Name',
            'contactinfo': 'Mobile Number',
            'department': 'Department',
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

    function validateMobileNumber(number) {
        const regex = /^(09)\d{9}$/;
        return regex.test(number);
    }
});
