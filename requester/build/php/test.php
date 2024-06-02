<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document</title>
    <link rel="stylesheet" href="/requester/build/css/output.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT service_id, date_added, service_name, description FROM service_details");
$stmt->execute();
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php if (isset($services) && !empty($services)) : ?>
    <?php foreach ($services as $index => $service) : ?>
        <div>
            <input type="checkbox" id="<?php echo $service['service_name']; ?>" value="<?php echo $service['service_name']; ?>">
            <label for="service_name"><?php echo $service['service_name']; ?></label>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
            <p class="p-5 text-lg font-semibold text-green-600">No record found.</p>
        <?php endif; ?>

        <div id="selected-services" class="mt-4">
            <h3 class="text-lg font-medium">Selected Services:</h3>
            <textarea name="selected-service" id="selected-services-list" disabled></textarea>
        </div>
</body>
<script src="/requester/build/js/service-fetch.js"></script>
<script src="/requester/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>
