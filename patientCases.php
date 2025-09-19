<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Cases - ArogyaKosh</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <iframe src="header.php" style="height:65px; width:100%; border:none;" scrolling="no"></iframe>

    <!-- Main Content -->
    <main class="flex-grow p-6 bg-gray-50">
        <h1 class="text-3xl font-bold mb-6 text-center">Patient Cases</h1>
        
        <!-- Example cases -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Case #001</h2>
                <p class="text-gray-600">Patient diagnosed with mild fever. Prescribed rest and paracetamol.</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Case #002</h2>
                <p class="text-gray-600">Diabetes check-up. Blood sugar levels monitored and medication updated.</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Case #003</h2>
                <p class="text-gray-600">Fracture treatment follow-up. X-ray scheduled for next week.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <iframe src="footer.php" style="height:250px; width:100%; border:none;" scrolling="no"></iframe>

</body>
</html>
