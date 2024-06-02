document.addEventListener('DOMContentLoaded', (event) => {
    const overviewButtons = document.querySelectorAll('.overview-btn');
    const modal = document.getElementById('overview-modal');
    const modalServiceId = document.getElementById('modal-service-id');
    const modalServiceName = document.getElementById('modal-service-name');
    const modalDescription = document.getElementById('modal-description');
    const modalCloseBtn = document.getElementById('modal-close-btn');

    overviewButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const serviceId = button.getAttribute('data-service-id');

            // Send AJAX request to fetch service details
            fetch(`susers/build/test/get_service_details.php?service_id=${serviceId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        // Populate modal with service details
                        modalServiceId.textContent = data.service_id;
                        modalServiceName.textContent = data.service_name;
                        modalDescription.textContent = data.description;
                        
                        // Show the modal
                        modal.classList.remove('hidden');
                    }
                })
                .catch(error => console.error('Error fetching service details:', error));
        });
    });

    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
});
