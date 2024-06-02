
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
    // Function to show alert with a message
    function showAlert(message, success = false) {
        alertMessage.textContent = message;
        if (success) {
            alert.classList.remove('text-yellow-800', 'bg-yellow-50');
            alert.classList.add('success');
        } else {
            alert.classList.remove('success');
        }
        alert.classList.remove('hidden');
        setTimeout(function() {
            alert.classList.add('show');
        }, 10); // Adding a short delay to trigger the transition

        setTimeout(function() {
            alert.classList.remove('show');
            setTimeout(function() {
                alert.classList.add('hidden');
            }, 500); // Allow some time for the transition to complete before hiding
        }, 3000);
    }
});
document.addEventListener('DOMContentLoaded', (event) => {
    const overviewButtons = document.querySelectorAll('.overview-btn');
    const modal = document.getElementById('overview-modal');
    const modalServiceId = document.getElementById('modal-service-id');
    const modalDateAdded = document.getElementById('modal-date-added');
    const modalServiceName = document.getElementById('modal-service-name');
    const modalDescription = document.getElementById('modal-description');
    const modalCloseBtn = document.getElementById('modal-close-btn');

    overviewButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const serviceId = button.getAttribute('data-service-id');
            const dateAdded = button.getAttribute('data-date-added');
            const serviceName = button.getAttribute('data-service-name');
            const description = button.getAttribute('data-description');

            modalServiceId.textContent = serviceId;
            modalDateAdded.textContent = dateAdded;
            modalServiceName.textContent = serviceName;
            modalDescription.textContent = description;

            modal.classList.remove('hidden');
        });
    });

    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
});