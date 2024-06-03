$(document).ready(function() {
    $('#revoke_btn').click(function() {
        $('#confirm-message').text("Are you sure you want to revoke this assessment?");
        $('#confirmation').css('display', 'flex');
        setTimeout(() => $('#confirmation').addClass('show'), 10);

        // Handle Submit button click
        $('#alert-submit').off('click').on('click', function() {
            $('#confirmation').removeClass('show');
            setTimeout(() => $('#confirmation').css('display', 'none'), 300);
            const reqses = $('#modal-req-id').val();
            $.ajax({
                url: '/susers/build/php/app/admin/backend/delete-req-assessment.php', // Correct URL here
                type: 'POST',
                data: { req_id: reqses },
                success: function(response) {
                    showAlert(response, true);
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    showAlert('An error occurred while updating the data. Status: ' + status + ', Error: ' + error);
                }
            });
        });

        // Handle Cancel button click
        $('#alert-cancel').off('click').on('click', function() {
            $('#confirmation').removeClass('show');
            setTimeout(() => $('#confirmation').css('display', 'none'), 300);
            showAlert("Submitting the assessed form has been cancelled.");
        });
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
