
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System Computer Setup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('TrackNETbg.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #1e1e1e;
            color: white;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: justify;
            text-align: left;
        }

        .sidebar-logo {
            display: flex;
            align-items: justify;
            gap: 10px;
            margin-bottom: -20px;
            position: relative;
            top: -20px;
        }

        .sidebar-logo img {
            width: 120px;
            height: auto;
        }

        .sidebar-logo-text {
            font-size: 1.8rem;
            font-weight: none;
            color: white;
            position: absolute;
            bottom: 43px;
            right: 35px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            display: block;
        }

        .sidebar a:not(.logout-btn):hover {
            background: #444;
            opacity: 100%;
            border-left: 4px solid #ff7b54;
        }

        .logout-btn {
            background: #ff7b54;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 123, 84, .6);
        }

        .logout-btn:hover {
            background: #ff5733;
        }

        .text-red {
            color: red;
        }

        .text-lime {
            color: lime;
        }
        .active:hover {
            background: #444;
            border-left: 4px solid #ff7b54;

        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="logo.png" alt="TrackNET Logo">
            <span class="sidebar-logo-text">TrackNET</span>
        </div>
        <a href="{{ route('admin.dashboard') }}" id="dashboard-link" class="active" style="font-size:19px;">
            <i class="bi bi-graph-up fs-3 ms-6"></i> &nbsp; Dashboard
        </a>
        <a href="{{ route('admin.stockmanager') }}" id="stock-management" class="active" style="font-size:19px;">
            <i class="bi bi-box-seam fs-3 ms-6"></i> &nbsp; Item Management
        </a>
        <a href="/suppliers" id="supply" class="active" style="font-size:19px;">
            <i class="bi bi-people fs-3 ms-6"></i> &nbsp; Suppliers
        </a>
        <a href="/orders" id="orders" class="active" style="font-size:19px;">
            <i class="bi bi-map fs-3 ms-6"></i> &nbsp; Orders
        </a>
        <a href="/reports" id="reports" class="active" style="font-size:19px;">
            <i class="bi bi-info-lg fs-3 ms-6"></i> &nbsp; Reports
        </a>
        <a href="/" class="btn btn-customs logout-btn"
           style="font-size: 18px; text-align: center; display: flex; align-items: center;
                  justify-content: center; gap: 8px; padding: 7px 15px;
                  border-radius: 12px; font-weight: 600;">
           <i class="bi bi-power fs-4"></i> Sign out
        </a>
    </div>

    <div class="/dashboard" style="text-align:center;">
        Hi Dash
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
