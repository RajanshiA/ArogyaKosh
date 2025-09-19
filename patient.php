<?php
session_start();

// If user not logged in, redirect to login
if (!isset($_SESSION['user_type'])) {
    header("Location: login.php");
    exit();
}

// If user type is NOT patient, redirect to login
if ($_SESSION['user_type'] !== 'patient') {
    header("Location: login.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <iframe src="header.php" style="height:65px; width:100%;" frameborder="0"></iframe>

    <!-- Main Content -->
    <main class="flex-grow overflow-y-auto">
        <section class="container mx-auto mt-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-items-center">

            <!-- Card 1: View Cases -->
            <a href="patientCases.php" class="block rounded-lg border border-gray-300 hover:border-gray-800 hover:shadow-lg transition p-6 w-64">
                <div class="flex flex-col items-center justify-center">
                    <div class="icon mb-3">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                            <path fill="#2563eb" d="M5.482 33.956h5.547c.421 0 .811.21 1.043.556c0 0 1.057 1.596 2.112 3.179c.585-5.186 2.622-23.314 2.622-23.314c.07-.598.561-1.07 1.171-1.105a1.245 1.245 0 0 1 1.287.956s2.656 11.137 3.913 16.399l1.663-4.708a1.248 1.248 0 0 1 2.35-.014s2.467 6.701 2.961 8.051h4.814c.421 0 .811.21 1.042.556c0 0 1.058 1.596 2.111 3.18c.587-5.186 2.624-23.314 2.624-23.314a1.25 1.25 0 0 1 2.458-.149l3.911 16.399l1.666-4.708a1.247 1.247 0 0 1 2.348-.014s2.47 6.701 2.963 8.051h4.92c2.39-4.112 4.135-11.726 4.135-17.271c0-7.075-5.149-15.621-15.183-15.621c-14.338 0-16.181 13.431-16.181 13.431S30.263.63 15.934.63C6.254.63 1.061 8.866 1.061 16.186c0 6.322 2.768 14.126 4.186 17.331z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 hover:text-blue-600">View Active/Past Cases</h3>
                </div>
            </a>

            <!-- Card 2: Upload Reports -->
            <a href="patientUpload.php" class="block rounded-lg border border-gray-300 hover:border-gray-800 hover:shadow-lg transition p-6 w-64">
                <div class="flex flex-col items-center justify-center">
                    <div class="icon mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                            <path fill="#16a34a" d="M30.946 27.5a.676.676 0 0 1-.68.676H6.631a.676.676 0 0 1-.679-.677v-17.07c0-.578.431-1.048 1.022-1.048h8.745c.592 0 1.024.469 1.024 1.046v1.002h13.523c.377 0 .68.303.68.676zm-10.484-9.719v-4.026h-4.028v4.026h-4.027v4.028h4.027v4.027h4.028v-4.027h4.027v-4.028z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 hover:text-blue-600">Upload Reports</h3>
                </div>
            </a>

            <!-- Card 3: Subscription -->
            <a href="Subscription.php" class="block rounded-lg border border-gray-300 hover:border-gray-800 hover:shadow-lg transition p-6 w-64">
                <div class="flex flex-col items-center justify-center">
                    <div class="icon mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                            <path fill="#f59e0b" d="M56.104 13.545a4.372 4.372 0 0 1 4.373 4.369l-.007 13.414h2.815v5.499l-5.696.003v22.774c0 1.592-1.306 2.883-2.899 2.883a2.884 2.884 0 0 1-2.881-2.883V36.832h-1.837v22.772a2.885 2.885 0 0 1-2.886 2.883a2.894 2.894 0 0 1-2.895-2.883v-22.77l-42.945.013v-5.519h42.945V18.413z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 hover:text-blue-600">Subscription</h3>
                </div>
            </a>

        </section>
    </main>

    <!-- Footer -->
    <iframe src="footer.php" style="height:40%; width:100%;" frameborder="0"></iframe>

</body>
</html>
