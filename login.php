<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>ArogyaKosh</title>

    <style>
        .background_image {
            background-image: url('assets/images/medical-banner-with-doctor-working-laptop.jpg'); /* ✅ Fixed */
            background-size: cover;
            background-repeat: no-repeat;
            height: 150vh;
            background-position: center;
            padding: 20px;
            border: 2px ;
            border-radius: 10px;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 10px;
            margin-bottom: 20px;
            opacity: 0.8;
            position: relative;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 10px;
            opacity: 0.9;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

    <!-- ✅ Use include instead of iframe -->
    <?php include 'header.php'; ?>

    <div class="background_image">
        
        <form action="includes/login.inc.php" method="POST" class="form-container border-gray-300 p-3 border-2 w-1/2">

            <h1 class="text-3xl font-bold text-center">Sign In</h1>
            <hr class="my-5">
    
            <div class="text-left mb-5">

                <!-- Username / Institute ID -->
                <div class="flex justify-between items-center mb-2">
                    <label for="username" class="mr-2 font-semibold">User/Institute ID :</label>
                    <input type="text" id="username" name="username" placeholder="Enter your ID" class="border-2 border-gray-300 p-2 rounded-lg mr-14" required>
                </div>

                <!-- Password -->
                <div class="flex justify-between items-center mb-2">
                    <label for="password" class="mr-2 font-semibold">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14" required>
                </div>

                <!-- User Type -->
                <div class="flex justify-between items-center mb-2">
                    <label for="user-type" class="mr-2 font-semibold">User Type :</label>
                    <select class="border-2 border-gray-300 px-14 py-2 rounded-lg mr-16" id="user-type" name="usertype" required>
                        <option value="patient">Patient</option>
                        <option value="institute">Institute</option>
                        <option value="doctor">Doctor</option>
                        <option value="lab">Lab</option>
                    </select>
                </div>
                
                <!-- Submit button -->
                <input type="submit" value="Sign In" name="submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 block w-full">

                <!-- Forgot password -->
                <p class="text-gray-500 text-center mt-3">Forgot password? <a href="forgot-password.php" class="text-blue-500">Reset password</a></p>

                <!-- CSRF token -->
                <input type="hidden" name="csrf_token" value="<?php echo bin2hex(random_bytes(32)); ?>">

                <!-- Sign up link -->
                <p class="text-gray-500 text-center mt-3">Don't have an account? <a href="landing.php" class="text-blue-500">Sign up</a></p>
            </div>
        </form>
    </div>
    
    <!-- ✅ Use include instead of iframe -->
    <?php include 'footer.php'; ?>

</body>
</html>
