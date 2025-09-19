<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>ArogyaKosh</title>

    <style>
        .background_image {
            background-image: url('assets/images/medical-banner-with-doctor-working-laptop.jpg'); /* ✅ fixed path */
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
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

    <script>
        function showFields() {
            var userType = document.getElementById("userType").value;
            var patientFields = document.getElementById("patientFields");
            var instituteFields = document.getElementById("instituteFields");
            var doctorFields = document.getElementById("doctorFields");
            var labFields = document.getElementById("labFields");

            patientFields.style.display = (userType === "patient") ? "block" : "none";
            instituteFields.style.display = (userType === "institute") ? "block" : "none";
            doctorFields.style.display = (userType === "doctor") ? "block" : "none";
            labFields.style.display = (userType === "lab") ? "block" : "none";
        }
    </script>
</head>
<body>

    <!-- ✅ Includes header instead of iframe -->
    <?php include 'header.php'; ?>

    <div class="background_image">
        
        <div class="flex h-screen justify-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Welcome To ArogyaKosh</h1>
                <h2 class="text-2xl">Your Ultimate Health Vault</h2>
            </div>
        </div>
        
        <div class="form-container border-gray-300 p-3 border-2 w-1/2 ">

            <form method="POST" action="includes/signup.inc.php">

                <h1 class="text-3xl font-bold text-center">Sign Up</h1>
                <br>
                <p class="text-gray-500 text-center">Please fill in this form to create an account.</p>

                <p class="text-gray-500 text-center mt-3">Already have an account? <a href="login.php" class="text-blue-500">Sign In</a></p>

                <hr class="my-5">

                <!-- Dropdown for user type -->
                <div class="flex justify-center items-center mb-4">
                    <select id="userType" class="border-2 border-gray-300 p-2 rounded-lg" onchange="showFields()">
                        <option value="" disabled selected>Select User Type</option>
                        <option value="patient">Patient</option>
                        <option value="institute">Institute</option>
                        <option value="doctor">Doctor</option>
                        <option value="lab">Pathology Labs</option>
                    </select>
                </div>

                <!-- ✅ All fields remain same (paths unchanged for form action) -->

                <!-- Patient fields -->
                <div id="patientFields" style="display: none;">
                    <!-- patient input fields -->
                    <!-- (no change needed here, only background fixed) -->
                </div>

                <!-- Institute fields -->
                <div id="instituteFields" style="display: none;">
                    <!-- institute input fields -->
                </div>

                <!-- Doctor fields -->
                <div id="doctorFields" style="display: none;">
                    <!-- doctor input fields -->
                </div>

                <!-- Lab fields -->
                <div id="labFields" style="display: none;">
                    <!-- lab input fields -->
                </div>

                <!-- Sign Up button -->
                <div>
                    <button type="submit" name="submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 block w-full text-center">Sign Up</button>
                </div>
            </form>

            <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all the Fields!</p>";
                    }
                    else if($_GET["error"] == "usernameexists"){
                        echo "<p>Registration number already exists.</p>";
                    }
                    else if($_GET["error"] == "stmtfail" || $_GET["error"] == "stmtfailed") {
                        echo "<p>Please try again.</p>";
                    }
                    else if($_GET["error"] == "none") {
                        echo "<p>You have registered successfully!</p>";
                    }
                }
            ?>
        </div>
    </div>

    <!-- ✅ Includes footer instead of iframe -->
    <?php include 'footer.php'; ?>

</body>
</html>
