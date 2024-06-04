
$(document).ready(function() {
    const alert = document.getElementById('alert');
    const alertMessage = document.getElementById('alert-message');

    $('#add-services-btn').click(function() {
        const serviceName = $('#servicename').val();
        let description = $('#description').val();

        // If description is empty, replace it with "None"
        if (description.trim() === '') {
            description = 'None';
        }

        // Validate service name
        if (serviceName.trim() === '') {
            showAlert('Please Fill Input Service Name.');
            return; // Exit the function if service name is empty
        }

        // Prepare form data
        const formData = {
            'servicename': serviceName,
            'description': description
        };

        // Submit the form via AJAX
        $.ajax({
            url: '/susers/build/php/app/admin/backend/service-bckend.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                showAlert(response, true);
                setTimeout(function() {
                    window.location.reload();
                }, 3000);  // Wait for the alert to display for 3 seconds before reloading
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                showAlert('An error occurred while updating the data. Status: ' + status + ', Error: ' + error, false);
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', (event) => {
    const overviewButtons = document.querySelectorAll('.overview-btn');
    const modal = document.getElementById('overview-modal');
    const modalDateAdded = document.getElementById('modal-date-added');
    const modalServiceName = document.getElementById('modal-service-name');
    const modalDescription = document.getElementById('modal-description');
    const modalCloseBtn = document.getElementById('modal-close-btn');

    overviewButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const dateAdded = button.getAttribute('data-date-added');
            const serviceName = button.getAttribute('data-service-name');
            const description = button.getAttribute('data-description');

            modalDateAdded.textContent = dateAdded;
            modalServiceName.textContent = serviceName;
            modalDescription.textContent = description;

            modal.classList.remove('hidden');
        });
    });

    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    document.querySelectorAll('#delete_btn').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const sid = row.querySelector('td:nth-child(1)').innerText;
            $('#confirm-message').text("Are you sure you want to delete this service?");
            $('#confirmation').css('display', 'flex');
            setTimeout(() => $('#confirmation').addClass('show'), 10);

            $('#alert-submit').off('click').on('click', function() {
                $('#confirmation').removeClass('show');
                setTimeout(() => $('#confirmation').css('display', 'none'), 300);
            // console.log(sid);
            fetch('/susers/build/php/app/admin/backend/delete-service.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ sid: sid }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('Service delete successfully.', true);
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);
                } else {
                    showAlert('An error occurred: ' + data.message, false);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
    });

    // Handle Cancel button click
    $('#alert-cancel').off('click').on('click', function() {
        $('#confirmation').removeClass('show');
        setTimeout(() => $('#confirmation').css('display', 'none'), 300);
        showAlert("Deleting the service has been cancelled.");
    });
});
    // Show alert function
    function showAlert(message, success = false) {
        const alertMessage = document.getElementById('alert-message');
        const alert = document.getElementById('alert');
        alertMessage.textContent = message;
        if (success) {
            alert.classList.remove('text-yellow-800', 'bg-yellow-50');
            alert.classList.add('success');
        } else {
            alert.classList.add('text-yellow-800', 'bg-yellow-50');
            alert.classList.remove('success');
        }
        alert.classList.remove('hidden');
        setTimeout(function() {
            alert.classList.add('show');
        }, 10);
        setTimeout(function() {
            alert.classList.remove('show');
            setTimeout(function() {
                alert.classList.add('hidden');
            }, 500);
        }, 3500);
    }