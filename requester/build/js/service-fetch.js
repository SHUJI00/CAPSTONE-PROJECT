// Function to update selected services list
function updateSelectedServices() {
    // Initialize an empty string to hold selected services
    var selectedServices = '';

    // Loop through checkboxes to find selected services
    $('input[type="checkbox"]').each(function() {
        if ($(this).is(':checked') && $(this).attr('id') !== 'agreement') {
            // Append the value of selected checkboxes to the selectedServices string
            selectedServices += '- ' + $(this).val() + '\n';
        }
    });

    // Get the value of the additional services textarea
    var additionalServices = $('#service_added').val().trim();

    // Add additional services if present
    if (additionalServices !== '') {
        selectedServices += '- ' + additionalServices + '\n';
    }

    // Set the value of the textarea to the concatenated string of selected services
    $('#service').val(selectedServices.trim());
}

// Call the function initially when the page loads
$(document).ready(function() {
    updateSelectedServices();
    
    // Event listener for checkbox change
    $('input[type="checkbox"]').change(function() {
        // Update the selected services list
        updateSelectedServices();
    });

    // Event listener for service_added textarea change
    $('#service_added').on('input', function() {
        // Update the selected services list
        updateSelectedServices();
    });
});
