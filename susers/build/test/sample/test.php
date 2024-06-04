<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/susers/build/css/output.css">
    <script src="/susers/build/php/script.js"></script>
</head>
<body>

<?php
include 'config.php';
$stmt = $pdo->prepare("SELECT service_id, service_name, description FROM service_details");
$stmt->execute();
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1 class="text-3xl font-bold mb-4">Service Details</h1>
<div class="max-w border" style="height: 38rem;">
<div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
        <?php if (isset($services) && !empty($services)) : ?>
            <table class="table-fixed w-full">
                <thead class="sticky top-0 bg-green-500 text-white">
                    <tr>
                        <th class="text-left p-1.5 font-medium">Service ID</th>
                        <th class="text-left p-1.5 font-medium">Service Name</th>
                        <th class="hidden text-left p-1.5 font-medium">Description</th>
                        <th class="text-left p-1.5 font-medium">Date</th>
                        <th class="w-10"></th>
                        <th class="w-10"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $index => $service) : ?>
                        <tr class="<?php echo $index % 2 === 0 ? 'bg-green-100' : 'bg-white'; ?>">
                            <td class="px-2 py-4 text-gray-900"><?php echo $service['service_id']; ?></td>
                            <td class="px-2 py-4 text-gray-900"><?php echo $service['service_name']; ?></td>
                            <td class="px-2 py-4 text-gray-900 hidden"><?php echo $service['description']; ?></td>
                            <td class="px-2 py-4 text-gray-900">Empty</td>
                            <td class="py-3 justify-center">
                                <button class="overview-btn bg-green-500 hover:bg-green-600 py-2 px-2 rounded-md" data-service-id="<?php echo $service['service_id']; ?>" data-service-name="<?php echo $service['service_name']; ?>" data-description="<?php echo $service['description']; ?>">
                                    <img class="h-5" src="/susers/asset/icons/view.png" alt="viewicon">
                                </button>
                            </td>
                            <td class="py-3 justify-center">
                                <button data-modal-target="delete_btn" data-modal-toggle="delete_btn" class="bg-[#EB6B23] hover:bg-[#AE501C] py-2 px-2 rounded-md">
                                    <img class="h-5" src="/susers/asset/icons/delete.png" alt="viewicon">
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No services found.</p>
        <?php endif; ?>
    </div>
</div>

<div id="overview-modal" class="hidden">
<div id="overview-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
    <div name="content" class="bg-white rounded-lg shadow flex flex-col max-w-sm w-full mx-4">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
            <h3 class="text-xl font-medium text-gray-900">
                Service Details
            </h3>
            <button id="modal-close-btn" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-1 font-semibold text-base">
            <p>Service ID: <span class="font-medium" id="modal-service-id"></span></p>
            <p>Service Name: <span class="font-medium" id="modal-service-name"></span></p>
            <p>Description: <span class="font-medium" id="modal-description"></span></p>
        </div>
    </div>
        </div>
</div>



<script>
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
            const serviceName = button.getAttribute('data-service-name');
            const description = button.getAttribute('data-description');

            modalServiceId.textContent = serviceId;
            modalServiceName.textContent = serviceName;
            modalDescription.textContent = description;

            modal.classList.remove('hidden');
        });
    });

    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
});

</script>

</body>
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>