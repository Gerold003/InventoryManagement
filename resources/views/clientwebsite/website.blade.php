<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackNET - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: #1E1E1E;
            color: white;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            overflow: auto;
            scrollbar-width: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .header-container {
            background-color: #ff7b54;
            padding: 4px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            height: 4vh;
            position: relative;
            margin: 2% auto;
        }

        .header-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-logo img {
            width: 12%;
            height: 150px;
            position: absolute;
            top: -60px;
            left: -100px;

        }

        .header-logo-text {
            font-size: 2rem;
            font-weight: none;
            color: white;
            font-family: 'Arial', sans-serif;
            left: 15px;
            position: absolute;
            top: -40%;

        }

        .nav-menu {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #ffd1b3;
        }

        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                background-color: #ff7b54;
                position: absolute;
                top: 60px;
                right: 0;
                width: 200px;
                padding: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        }

        .overlay {
            background: none;
            width: 100%;
            height: auto;
            position: relative;
            margin-top: 100px;
            padding: 20px;
        }

        .description {
            font-size: 2rem;
            line-height: 2.5;
            margin-bottom: 35px;
            justify-content: center;
            text-align: justify;
        }

        .btn-container {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn-custom {
            width: 220px;
            height: 55px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 12px;
            margin: 10px;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-login {
            background-color: #4CAF50;
            color: white;
        }

        .btn-login:hover {
            background-color: #3e9144;
            transform: scale(1.1);
        }

        .btn-create {
            background-color: #ff7b54;
            color: white;
        }

        .btn-create:hover {
            background-color: #ff5733;
            transform: scale(1.1);
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
            color: #ccc;
            margin-top: 20px;
            background: #3b3b3b;
        }

        .section {
            padding: 100px 20px;
            text-align: left;
        }

        .section#home {
            background-color: #1E1E1E;
            color: white;
            padding: 150px 20px;
            text-align: left;
        }

        .home-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: -50px;
        }

        .home-description-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: -110px;
            font-size: 1.8rem;
            text-align: justify;
        }

        .home-btn-container {
            margin-top: 10px;
            margin-bottom: 36px;

        }

        .home-btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .home-btn:hover {
            background-color: #3e9144;
            transform: scale(1.05);
        }

        .section#features {
            background-color: #1E1E1E;
            display: start;
            align-content: start;
            justify-content: space-between;
            font-size: 1.2rem;
            text-align: justify;
            align-items: center;



        }

        .section#pricing {
            background-color: #1E1E1E;
        }

        .section#about {
            background-color: #1E1E1E;
        }

        .section#contact {
            background-color: #1E1E1E;
        }

        .search-bar-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
            padding: 10px;
            background: #1E1E1E;
            border-radius: 15px;

        }

        .search-form {
            display: flex;
            align-items: center;
            gap: 10px;


        }

        .search-input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 500px;
            border: white;
        }

        .search-input {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border-radius: 20px;
            font-size: 1.1rem;
            background: #3b3b3b;
            color: #ccc;
            border: 2px solid #3b3b3b;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            border-color: #3b3b3b;
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 10px;
            font-size: 1.2rem;
            color: #ccc;
        }

        .search-input::placeholder {
            color: #ccc;
            opacity: 1;

        }
    </style>
</head>

<body>
    <div class="header-container">
        <div class="header-content">
            <div class="header-logo">
                <a href="/" style="text-decoration: none;">
                    <img src="/images/logo.png" alt="TrackNET Logo"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <span class="header-logo-text">TrackNET</span>
                </a>
            </div>
            <nav>
                <div class="nav-menu">
                    <a href="#home">Home</a>
                    <a href="#features">Features</a>
                    <a href="#pricing">Pricing</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                    <p style="font-size: 40px;"> | </p>
                    <a href="/login">Login</a>
                    <a href="/createclient">Register</a>


                </div>
            </nav>
        </div>
    </div>
    <div class="search-bar-container">
        <form action="/search" method="GET" class="search-form">
            <div class="search-input-wrapper">
                <i class="bi bi-search search-icon"></i>
                <input type="text" name="query" class="search-input" placeholder="Search..." required autofocus>
            </div>
        </form>
    </div>
    <div id="home" class="section">
        <h1 class="home-title">Welcome!</h1>
        <div class="home-description-container">
            <p class="home-description">
                The TrackNET Inventory System for Computer Setup is designed to efficiently track and manage computer
                parts, accessories, and related assets within an organization.
                The system enables seamless stock monitoring, supplier management, and automated inventory updates to
                streamline operations.
            </p>
            <img src="/images/welcomepic.png" alt="Welcome Picture" class="home-image">
        </div>
        <div class="home-btn-container">
            <a href="/login" class="home-btn">Get Started</a>
        </div>
    </div>
    <div id="features" class="section">
        <h2>Features</h2>
        <br>
        <h4>1. Authentication and Authorization</h4>
        <p>TrackNET ensures secure access by implementing role-based authentication and authorization.
            Admins, employees, departments, and clients have controlled access based on their roles, preventing
            unauthorized entry and safeguarding critical inventory data.</p>
        <br>
        <h4>2. Input and Validation</h4>
        <p>TrackNET enforces strict input validation to prevent incorrect or malicious data entries. This feature
            enhances data accuracy, prevents SQL injection,
            and ensures system stability by verifying all user inputs before processing.</p>
        <br>
        <h4>3. Logging and Monitoring</h4>
        <p>TrackNET keeps a detailed record of all system activities, including inventory updates, user actions, and
            security events.
            This logging and monitoring feature enhances accountability, helps detect anomalies, and provides insights
            for system improvements.</p>
        <br>

        <h4>4. Backup and Recovery</h4>
        <p>TrackNET protects critical inventory data with automated backup and recovery mechanisms. Regular backups
            prevent data loss due to system failures or cyber threats,
            ensuring seamless recovery and business continuity.</p>
    </div>
    <div id="pricing" class="section">
        <h2>Pricing</h2>
        <p>Choose a plan that fits your needs.</p>
    </div>
    <div id="about" class="section">
        <h2>About</h2>
        <p>Learn more about TrackNET and our mission.</p>
    </div>
    <div id="contact" class="section">
        <h2>Contact</h2>
        <p>Get in touch with us for any inquiries.</p>
    </div>
    <footer>
        &copy; {{ date('Y') }} TrackNET. All rights reserved.
    </footer>
</body>

</html>
