<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK Profiling System - Registration</title>
    <style>
        /* Existing styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .terms {
            display: flex;
            align-items: center;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        .btn, .google-signin, .facebook-signin {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            background-color: #4285F4;
            color: white;
            border: none;
            text-align: center;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .facebook-signin {
            background-color: #3b5998;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register as SK</h2>

        <!-- Custom Website Sign In -->
        <!-- Sign In Form -->
<form action="signin.php" method="post" class="signin-form">
    <h3>Sign In</h3>
    
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="button" class="signin-btn" onclick="signIn()">Sign In</button>

<script>
function signIn() {
    alert("Signed In!");
}
</script>


<!-- Other Buttons -->
<div class="social-signin-buttons">
    <button class="social-btn google-btn">Sign in with Google</button>
    <button class="social-btn facebook-btn">Sign in with Facebook</button>
    <button class="view-btn1" onclick="location.href='view_sk_officials.php'">View Current SK Officials</button>
    <button class="view-btn1" onclick="location.href='view_sk_candidates.php'">View Aspiring SK Candidates</button>

</div>

<style>
    .view-btn1 {
        width: 50%;
        padding: 12px;
        margin: 10px 0;
        background-color: #4285F4;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        color: white
        
    }


    /* Sign In Form Styles */
    .signin-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f7f7f7;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .signin-form h3 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 22px;
    }
    .signin-btn {
        width: 100%;
        padding: 12px;
        background-color: #45a049;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }
    .signin-btn:hover {
        background-color: #444a50;
    }

    /* Social Sign-in and View Buttons */
    .social-signin-buttons {
        margin: 20px 0;
        text-align: center;
    }
    .social-btn, .view-btn {
        width: 50%;
        padding: 12px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        color: white;
    }
    .google-btn {
        background-color: #d34836; /* Google red */
    }
    .google-btn:hover {
        background-color: #b33c2d;
    }
    .facebook-btn {
        background-color: #3b5998; /* Facebook blue */
    }
    .facebook-btn:hover {
        background-color: #2d4373;
    }
    .view-btn {
        background-color: #6c757d; /* More professional gray-blue */
    }
    .view-btn:hover {
        background-color: #565e64;
    }
</style>


        <!-- Terms and Conditions -->
        <a href="termsandservices.php" target="_blank" style="color: #6c757d;">View Terms and Services</a>
        <div class="terms">
            <input type="checkbox" id="accept-tos" required>
            <label for="accept-tos">I accept the terms and services</label>
        </div>

        <!-- Barangay and other inputs (same as before) -->
        <!-- Personal Information Fields -->
        <!-- Submit and View Info Buttons -->
    </div>

    <script>
        document.getElementById('view-terms').addEventListener('click', function() {
            alert(`<?php include('terms_and_services.php'); ?>`);
        });
    </script>



<body>
    <div class="container">
        <h2>Register as SK</h2>
        <form action="save.php" method="post" class="registration-form">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="civil_status">Civil Status</label>
                <select id="civil_status" name="civil_status" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </div>

            <div class="form-group">
                <label for="barangay">Barangay</label>
                <select id="barangay" name="barangay" required>
                    <option value="hagonoy">Hagonoy</option>
                    <option value="south_signal">South Signal</option>
                </select>
            </div>

            <div class="form-group">
                <label for="province">Province</label>
                <select id="province" name="province" required>
                    <option value="province1">Province 1</option>
                    <option value="province2">Province 2</option>
                </select>
            </div>

            <div class="form-group">
                <label for="city">City/Municipality</label>
                <select id="city" name="city" required>
                    <option value="hagonoy">Hagonoy</option>
                    <option value="south_signal">South Signal</option>
                </select>
            </div>

            <button type="submit" class="register-btn">Register</button>
        </form>
    </div>
</body>
</body>
</html>
