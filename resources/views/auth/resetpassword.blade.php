
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Reset Password</title>
    <style>
        body {
            background-image: url('/images/TrackNETbg.jpg');
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 35px;
            padding: 40px;
            background: #1E1E1E;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5), inset 0px 2px 5px rgba(0, 0, 0, 0.6);
            position: relative;
            transition: all 0.3s ease;
            overflow: visible;
            width: 450px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.6);
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #1E1E1E 10%, transparent 80%);
            opacity: 0.4;
            z-index: 0;
            pointer-events: none;
        }

        .card::after {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            border-radius: 35px;
            border: 2px solid rgba(255, 255, 255, 0.4);
            opacity: 0.2;
            pointer-events: none;
        }

        input[type="password"], input[type="email"] {
            border-radius: 8px !important;
            padding: 12px;
            border: 1px solid #303134;
            transition: all 0.3s;
            box-shadow: 2px 2px 8px rgba(80, 80, 80, 0.2);
            background-color: #303134;
            color: #E8EAED;
        }

        input[type="text"] {
            border-radius: 8px ;
            padding: 12px;
            border: 1px solid #303134;
            box-shadow: 2px 2px 8px rgba(80, 80, 80, 0.2);
            background-color: #303134;
            color: #E8EAED;
        }

        input::placeholder {
            color: #E8EAED;
        }

        input[type="password"]:focus, input[type="email"]:focus, input[type="text"]:focus {
            background-color: #303134;
            outline: none;
            box-shadow: 0 0 5px rgba(255, 123, 84, 0.5);
            color: #ccc;
        }

        .btn-custom {
            background: #ff7b54;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #ff5733;
        }

        .btn-custom-res {
            background: #4CAF50;
            color: white;
            transition: 0.3s;
        }

        .btn-custom-res:hover {
            background: #3e9144;
        }

        #toggleIcon, #toggleIcon2 {
            background-color: #303134;
            border: none;
            cursor: pointer;
        }

        #toggleIcon i, #toggleIcon2 i {
            color: #E8EAED;
            transition: color 0.3s ease;
        }

        #toggleIcon:hover i, #toggleIcon2:hover i {
            color: #ff7b54;
        }
        input::placeholder {
            color: #ccc;
        }

        input.form-control::placeholder {
            color: #ccc !important;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        input[type="password"] {
            padding-right: 50px;
            border-radius: 10px;
            position: relative;
            z-index: 0;
        }

        #toggleIcon, #toggleIcon2 {
            position: absolute;
            top: 0;
            right: 0;
            height: 90%;
            width: 50px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            background-color: transparent;
            color: #ccc;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
            pointer-events: auto;
            cursor: pointer;
        }

        #toggleIcon:hover i, #toggleIcon2:hover i {
            color: #ff5733;
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <h4 class="mb-3 text-center" style="color: #ccc; font-weight: bold;">Reset Password</h4>
        <p class="mb-4 text-center" style="color: #9AA0A6; font-size: 14px;">Enter a valid email to reset your password.</p>
        <form method="POST" action="/resetpassword">
            @csrf
            <?php if (isset($_SESSION['success'])): ?>
                <div class="success-message">
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="error-message">
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            </div>
            <div class="mb-3 input-group">
                <input type="password" name="new_password" id="new_password" class="form-control" placeholder="New Password" required>
                <span id="toggleIcon" onclick="togglePassword('new_password', 'toggleIcon')">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>
            <div class="mb-3 input-group">
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                <span id="toggleIcon2" onclick="togglePassword('confirm_password', 'toggleIcon2')">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>
            <button type="submit" class="btn btn-custom-res w-100"><i class="bi bi-arrow-repeat fs-5"></i> &nbsp; Reset Password</button>
        </form>
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-custom w-100"><i class="bi bi-arrow-left fs-5"></i> &nbsp; Back to Login</a>
        </div>
    </div>
    <script>
        function togglePassword(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            var toggleIcon = document.getElementById(iconId).querySelector("i");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("bi-eye-slash");
                toggleIcon.classList.add("bi-eye-fill");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("bi-eye-fill");
                toggleIcon.classList.add("bi-eye-slash");
            }
        }
    </script>
</body>
</html>
