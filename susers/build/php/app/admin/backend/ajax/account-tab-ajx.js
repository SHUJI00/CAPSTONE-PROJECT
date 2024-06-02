document.addEventListener('DOMContentLoaded', (event) => {    
    document.querySelectorAll('#accept_btn').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const username = row.querySelector('td:nth-child(3)').innerText;

            fetch('/susers/build/php/app/admin/backend/accept_user.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ username: username }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('User accepted successfully.', true);
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

    document.querySelectorAll('#revoke_btn').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const username = row.querySelector('td:nth-child(3)').innerText;

            fetch('/susers/build/php/app/admin/backend/revoke_user.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ username: username }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('User revoked successfully.', true);
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

    const alert = document.getElementById('alert');
    const alertMessage = document.getElementById('alert-message');

    // Function to show alert with a message
    function showAlert(message, success = true) {
        alertMessage.textContent = message;
        if (success) {
            alert.classList.remove('text-yellow-800', 'bg-yellow-50');
            alert.classList.add('text-green-800', 'bg-green-50');
        } else {
            alert.classList.remove('text-green-800', 'bg-green-50');
            alert.classList.add('text-yellow-800', 'bg-yellow-50');
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
