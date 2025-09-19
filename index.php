<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ArogyaKosh</title>
</head>
<body>

    <!-- Header -->
    <iframe src="header.php" style="height:65px; width:100%; border:none;"></iframe>

    <!-- Background Section -->
    <div class="background_image">

        <div class="flex h-screen justify-center items-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Welcome To ArogyaKosh</h1>
                <h2 class="text-2xl">Your Ultimate Health Vault</h2>
            </div>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container border-gray-300 p-5 border-2 w-1/2">
            <h1 class="text-3xl font-bold text-center">Sign Up</h1>
            <p class="text-gray-500 text-center mt-2">Please fill in this form to create an account.</p>

            <p class="text-gray-500 text-center mt-3">
                Already have an account? <a href="login.php" class="text-blue-500">Sign In</a>
            </p>

            <hr class="my-5">

            <div class="text-left mb-5 space-y-3">

                <div class="flex justify-between items-center">
                    <label for="name" class="mr-2 font-semibold">Full Name :</label>
                    <input type="text" id="name" placeholder="Enter your full name" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div class="flex justify-between items-center">
                    <label for="username" class="mr-2 font-semibold">Username :</label>
                    <input type="text" id="username" placeholder="Enter your username" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div class="flex justify-between items-center">
                    <label for="password" class="mr-2 font-semibold">Password :</label>
                    <input type="password" id="password" placeholder="Enter your password" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div class="flex justify-between items-center">
                    <label for="confirm-password" class="mr-2 font-semibold">Confirm Password :</label>
                    <input type="password" id="confirm-password" placeholder="Confirm your password" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div class="flex justify-between items-center">
                    <label for="dob" class="mr-2 font-semibold">Date of Birth :</label>
                    <input type="date" id="dob" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div class="flex justify-between items-center">
                    <label for="aadhar" class="mr-2 font-semibold">Aadhar Number :</label>
                    <input type="text" id="aadhar" placeholder="XXXX-XXXX-XXXX" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div class="flex justify-between items-center">
                    <label for="phone" class="mr-2 font-semibold">Phone Number :</label>
                    <input type="text" id="phone" placeholder="Enter your phone number" class="border-2 border-gray-300 p-2 rounded-lg w-2/3">
                </div>

                <div>
                    <a href="login.php" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 block w-full text-center">Sign Up</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <iframe src="footer.php" style="height:40%; width:100%; border:none;"></iframe>

</body>
</html>
