<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Registration Form</title>

    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome for Eye Icon -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<div class="container">

    <div class="form-box">

        <h1>🎉 Event Registration</h1>
        <p>Register for your favourite event</p>

        <form action="register.php" method="POST">

            <!-- Full Name -->

            <div class="input-group">
                <label>Full Name</label>
                <input
                type="text"
                name="full_name"
                placeholder="Enter your full name"
                required>
            </div>


            <!-- Email -->

            <div class="input-group">
                <label>Email</label>
                <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required>
            </div>


            <!-- Phone -->

            <div class="input-group">
                <label>Phone Number</label>
                <input
                type="text"
                name="phone"
                placeholder="Enter phone number"
                required>
            </div>


            <!-- College -->

            <div class="input-group">
                <label>College</label>

                <input
                type="text"
                name="college"
                placeholder="College name"
                required>

            </div>



            <!-- Department + Branch -->

            <div class="row">

                <div class="input-group">

                    <label>Department</label>

                    <input
                    type="text"
                    name="department"
                    placeholder="Department"
                    required>

                </div>

                <div class="input-group">

                    <label>Branch</label>

                    <input
                    type="text"
                    name="branch"
                    placeholder="Branch"
                    required>

                </div>

            </div>




            <!-- Gender + Event -->

            <div class="row">

                <div class="input-group">

                    <label>Gender</label>

                    <select name="gender" required>

                        <option value="">Choose Gender</option>

                        <option>Male</option>

                        <option>Female</option>

                        <option>Other</option>

                    </select>

                </div>


                <div class="input-group">

                    <label>Event</label>

                    <select name="event_name" required>

                        <option value="">Choose Event</option>

                        <option>Hackathon</option>

                        <option>Paper Presentation</option>

                        <option>Poster Presentation</option>

                        <option>Quiz</option>

                        <option>Coding Contest</option>

                        <option>Project Expo</option>

                    </select>

                </div>

            </div>




            <!-- PASSWORDS -->

            <div class="row">

                <!-- Password -->

                <div class="input-group">

                    <label>Create Password</label>

                    <div class="password-box">

                        <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter Password"
                        required>

                        <i
                        class="fa-solid fa-eye-slash togglePassword"
                        id="togglePassword"></i>

                    </div>

                </div>



                <!-- Confirm Password -->

                <div class="input-group">

                    <label>Confirm Password</label>

                    <div class="password-box">

                        <input
                        type="password"
                        id="confirmPassword"
                        name="confirm_password"
                        placeholder="Confirm Password"
                        required>

                        <i
                        class="fa-solid fa-eye-slash togglePassword"
                        id="toggleConfirmPassword"></i>

                    </div>

                </div>

            </div>

<div class="button-row">
    <button type="submit" class="register-btn">
        Register
    </button>
</div>

<div class="login-buttons">

    <div class="button-box">
        <p>Already Registered?</p>

        <a href="login.php" class="student-btn">
            Student Login
        </a>
    </div>

    <div class="button-box">
        <p>Administrator?</p>

        <a href="admin_login.php" class="admin-btn">
            Admin Login
        </a>
    </div>

</div>



<script src="script.js"></script>

</body>
</html>