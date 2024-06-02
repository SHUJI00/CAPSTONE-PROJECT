document.addEventListener('DOMContentLoaded', (event) => {

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
    const dateapproved = document.getElementById('modal-dateapproved');
    const assignedpersonnel = document.getElementById('modal-assignedpersonnel');
    const prioritylevel = document.getElementById('modalprioritylevel');
    const workcomplexity = document.getElementById('modal-workcomplexity');
    const remarks = document.getElementById('modal-remarks');

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
                req_id: button.getAttribute('data-req-id'),
                date_approved: button.getAttribute('req-assesment-date-approved'),
                assigned_personnell: button.getAttribute('req-assesment-assigned-personnel'),
                priority_lvl: button.getAttribute('req-assesment-priority-level'),
                work_complexity: button.getAttribute('req-assesment-work-complexity'),
                remarks:button.getAttribute('req-remarks')
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
            dateapproved.textContent = details.date_approved;
            assignedpersonnel.textContent = details.assigned_personnell;
            prioritylevel.textContent = details.priority_lvl;
            workcomplexity.textContent = details. work_complexity;
            remarks.textContent = details.remarks;

            modal.classList.remove('hidden');
        });
    });
    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
});