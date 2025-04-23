
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-image: url('TrackNETbg.jpg');
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 8px;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 8px;
        }

        label {
            margin-bottom: 2px;
        }

        .form-control {
            margin-bottom: 8px;
            font-size: 15px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px !important ;
            padding: 10px;
            border: 1px solid #ccc;
            outline: none;
        }

        input[type="password"],
        input[type="text"],
        input[type="email"] {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #303134;
            transition: all 0.3s;
            box-shadow: 2px 2px 8px rgba(80, 80, 80, 0.2);
            background-color: #303134;
            color: #E8EAED;
        }


        input::placeholder {
            color: #ccc;
        }

        input.form-control::placeholder {
            color: #ccc !important;
        }


        input[type="password"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus {
            background-color: #303134;
            outline: none;
            box-shadow: 0 0 5px rgba(255, 123, 84, 0.5);
            color: #ccc;
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

        .eye-button {
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
        }

        .eye-button:hover {
            color: #ff5733;
        }



        .card {
            background: #1E1E1E;
            border-radius: 35px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }


        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.4;
            z-index: 0;
            pointer-events: none;
        }


        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }


        .card::after {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            border-radius: 35px;
            border: 2px solid rgba(255, 255, 255, 0.6);
            opacity: 0.2;
            pointer-events: none;
        }

        @media (max-width: 768px) {
            .card {
                padding: 18px;
                border-radius: 25px;
            }
        }

        .btn-custom {
            background: #ff7b54;
            color: white;
            transition: 0.3s;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 123, 84, 0.6);
        }

        .btn-custom:hover {
            background: #ff5733;
        }

        .btn-custom-success {
            background: #4CAF50;
            color: white;
            transition: 0.3s;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(51, 159, 66, 0.6);
        }

        .btn-custom-success:hover {
            background: #3e9144;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 35rem; padding: 40px; background-color: none;">
            <h2 style="font-size: 30px; color:#ccc;">
                <i class="bi bi-person-fill-add fs-1"></i> <b>Create Account</b>
            </h2>
            <p style="color: #ccc; font-size: 15px;"><b>Please fill out the form to create an account</b>
            </p>
            <br>



            <form action="{{ route('savecontacts') }}" method="POST">
                @csrf
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                @if (session('success'))
                    <p style="color: #4CAF50;">{{ session('success') }}

                    </p>
                @endif

                @if (session('error'))
                    <p style="color: rgb(160, 24, 24);">{{ session('error') }}

                    </p>
                @endif

                <div class="row">
                    <div class="col mt-2">
                        <input type="text" name="uname" class="form-control" placeholder="Username"
                            value="<?= isset($_POST['uname']) ? htmlspecialchars($_POST['uname']) : '' ?>" required
                            autofocus>
                    </div>
                    <div class="col mt-2">
                        <div class="input-group">
                            <input type="password" name="pword" id="password" class="form-control"
                                placeholder="Password" required>
                            <button type="button" class="eye-button" onclick="togglePassword()">
                                <i id="toggleIcon" class="bi bi-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col mt-2">
                        <input type="text" name="contact_number" class="form-control" placeholder="Contact number"
                            value="<?= isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number']) : '' ?>"
                            required>
                    </div>
                    <div class="col mt-2">
                        <input type="email" name="email" class="form-control" placeholder="Email address"
                            value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-between mb-4 mt-4">
                    <a href="/index" class="btn btn-custom w-45"><i class="bi bi-arrow-left fs-5"></i> &nbsp;
                        Back to Login
                    </a>
                    <button type="submit" class="btn btn-custom-success w-45"><i class="bi bi-check2-circle fs-5"></i>
                        &nbsp;
                        Confirm Details
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("toggleIcon");

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
