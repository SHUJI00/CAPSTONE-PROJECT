$(document).ready(function() {
    const validate = document.getElementById('validate');
    const messageElement = document.getElementById('text');
    const success = document.getElementById('success-modal');
    const successMessage = document.getElementById('text-success');
    
    $('#signupForm').click(function() {
        const user_type = $('#user_type').val();

        if (user_type === 'select user type') {
            showModal(validate, messageElement, 'Please select what kind of user you are.');
            return;
        }
    
        const validation = {
            '_fname': 'First Name',
            '_lname': 'Last Name',
            '_username': 'User Name',
        };
        let valid = true;
    
        $.each(validation, function(id, name) {
            if ($('#' + id).val() === '') {
                showModal(validate, messageElement, 'Please Fill Input ' + name + '.');
                valid = false;
                return false; // break the loop
            }
        });

        // Validate password match
            if($('#_conpassword').val()===''){
                showModal(validate, messageElement, 'Please Confirm your password.');
                valid = false;
                return;
            }else if($('#_password').val()===''){
                showModal(validate, messageElement, 'Input your password.');
                valid = false;
                return;
            } else if ($('#_password').val() !== $('#_conpassword').val()) {
                showModal(validate, messageElement, 'Passwords do not match.');
                valid = false;
                return;
            }
        
        
        // Validate mobile number if previous checks passed
        if (valid) {
            const mobileNumber = $('#_mobilenum').val();
            if (!validateMobileNumber(mobileNumber)) {
                showModal(validate, messageElement, 'Invalid Mobile Number Format.');
                valid = false;
                return;
            }
        }

        if (valid) {
            const regdata = {
                'user_type': $('#user_type').val(),
                '_fname': $('#_fname').val(),
                '_lname': $('#_lname').val(),
                '_mobilenum': $('#_mobilenum').val(),
                '_username': $('#_username').val(),
                '_password': $('#_password').val(),
                '_profimg': $('#_profimg').val()
            };

            $.ajax({
                url: 'reg-acc-post.php',
                type: 'POST',
                data: regdata,
                success: function(response) {
                    if (response.trim() === 'Successfully created.') {
                        showModal(success, successMessage, response, function() {
                            location.reload();
                        });
                    } else {
                        showModal(validate, messageElement, response);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    showModal(validate, messageElement, 'An error occurred while submitting the form. Status: ' + status + ', Error: ' + error);
                }
            });
        }
    });
    
    // Close success modal button handler
    $('#closesuccess').click(function() {
        success.classList.add('hidden');
        location.reload();
    });

    // Close error validate button handler
    $('#closeModalBtn').click(function() {
        validate.classList.add('hidden');
    });

    function showModal(modalElement, messageElement, message, callback) {
        messageElement.textContent = message;
        modalElement.classList.remove('hidden');
        $('#closeModalBtn').off('click').on('click', function() {
            modalElement.classList.add('hidden');
            if (callback) {
                callback();
            }
        });
    }

    function validateMobileNumber(number) {
        const regex = /^(09)\d{9}$/;
        return regex.test(number);
    }
});
