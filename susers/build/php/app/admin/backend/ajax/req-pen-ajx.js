$(document).ready(function() {
    $('#approved_btn').click(function() {
        const sp = $('#selectedPersonnel').val();
        const splvl = $('#selectedPriolevel').val();
        const swc = $('#selectedWorkcomplx').val();

        if (sp.trim() === '') {
            showAlert("There's no selected personnel.");
            return;
        }
        if (splvl.trim() === '') {
            showAlert("There's no selected priority level.");
            return;
        }
        if (swc.trim() === '') {
            showAlert("There's no selected work complexity.");
            return;
        }
        const formFields = {
            'modal-req-id': 'Request ID',
            'selectedPersonnel': 'Selected Personnel',
            'selectedPriolevel': 'Priority Level',
            'selectedWorkcomplx': 'Work Complexity',
            'remark': 'Request Assessment Remark'
        };
        let formData = {};
        $.each(formFields, function(id) {
            formData[id] = $('#' + id).val();
        });

        $.ajax({
            url: '/susers/build/php/app/admin/backend/req-pen-post.php',
            type: 'POST',
            data: formData,
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
    $('#disapproved_btn').click(function() {
        const formFields = {
            'modal-req-id': 'Request ID',
            'remark': 'Request Assessment Remark'
        };
        let formData = {};
        $.each(formFields, function(id) {
            formData[id] = $('#' + id).val();
        });

        $.ajax({
            url: '/susers/build/php/app/admin/backend/disapproved-post.php',
            type: 'POST',
            data: formData,
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
});
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

document.addEventListener('DOMContentLoaded', (event) => {
    const searchPersonnelInput = document.getElementById('search-personnel');
    const personnelList = document.getElementById('personnel-list');

    const overviewButtons = document.querySelectorAll('.overview-btn');
    const modal = document.getElementById('overview-modal');
    const modalCloseBtn = document.getElementById('modal-close-btn');

    const req_id = document.getElementById('modal-req-id');
    const req_con = document.getElementById('modal-req-con');
    const date_req = document.getElementById('modal-date-req');
    const date_needed = document.getElementById('modal-date-needed');
    const time_needed = document.getElementById('modal-time-needed');
    const req_name = document.getElementById('modal-requestername');
    const mobilenum = document.getElementById('modal-mobilenum');
    const department = document.getElementById('modal-department');
    const service = document.getElementById('modal-service');
    const description = document.getElementById('modal-description');
    const location = document.getElementById('modal-location');

    const assignedpersonnel = document.querySelectorAll('input[name="personnellist"]');
    const priorityLevel = document.querySelectorAll('input[name="priority-level"]');
    const workcomplexity = document.querySelectorAll('input[name="work-complexity"]');
    const selectedPersonnelInput = document.getElementById('selectedPersonnel');
    const selectedPriolevelInput = document.getElementById('selectedPriolevel');
    const selectedWorkcomplxInput = document.getElementById('selectedWorkcomplx');

    assignedpersonnel.forEach(function(radioInput) {
        radioInput.addEventListener('change', function(event) {
            var selectedPerson = event.target.value;
            selectedPersonnelInput.value = selectedPerson;
            console.log('Selected personnel:', selectedPerson);
        });
    });

    priorityLevel.forEach(function(radioInput) {
        radioInput.addEventListener('change', function(event) {
            var selectedPriolevel = event.target.value;
            selectedPriolevelInput.value = selectedPriolevel;
            console.log('Selected priority level:', selectedPriolevel);
        });
    });

    workcomplexity.forEach(function(radioInput) {
        radioInput.addEventListener('change', function(event) {
            var selectedWorkcomplx = event.target.value;
            selectedWorkcomplxInput.value = selectedWorkcomplx;
            console.log('Selected Work Complexity:', selectedWorkcomplx);
        });
    });

    searchPersonnelInput.addEventListener('input', function() {
        const searchQuery = this.value.toLowerCase();
        const personnelItems = personnelList.getElementsByTagName('li');
        for (let i = 0; i < personnelItems.length; i++) {
            const item = personnelItems[i];
            const label = item.getElementsByTagName('label')[0];
            const textValue = label.textContent || label.innerText;
            if (textValue.toLowerCase().indexOf(searchQuery) > -1) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        }
    });

    overviewButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const details = {
                req_con: button.getAttribute('data-req-con-num'),
                date_req: button.getAttribute('data-date-req'),
                date_needed: button.getAttribute('data-date-need'),
                time_needed: button.getAttribute('data-time-need'),
                req_name: button.getAttribute('data-req-name'),
                mobilenum: button.getAttribute('data-mobile-num'),
                department: button.getAttribute('data-department'),
                service: button.getAttribute('data-service-selected'),
                description: button.getAttribute('data-purpose'),
                location: button.getAttribute('data-location'),
                req_id: button.getAttribute('data-req-id')
            };

            req_con.textContent = details.req_con;
            date_req.textContent = details.date_req;
            date_needed.textContent = details.date_needed;
            time_needed.textContent = details.time_needed;
            req_name.textContent = details.req_name;
            mobilenum.textContent = details.mobilenum;
            department.textContent = details.department;
            service.textContent = details.service;
            description.textContent = details.description;
            location.textContent = details.location;
            req_id.value = details.req_id;

            modal.classList.remove('hidden');
        });
    });

    modalCloseBtn.addEventListener('click', () => {
        const radioButtons = modal.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            radio.checked = false;
        });

        const textInputs = modal.querySelectorAll('input[name="selectedPersonnel"], input[name="selectedPriolevel"], input[name="selectedWorkcomplx"], textarea');
        textInputs.forEach(input => {
            input.value = '';
        });

        modal.classList.add('hidden');
    });
});
