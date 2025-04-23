
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
            background-image: url('/images/TrackNETbg.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: white;
            display: flex;
            overflow: hidden;
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

        .main-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 250px;
            height: 110vh;
            width: 90%;
            margin: -50;
            padding: 20px;
        }

        .content {
            background: #1e1e1e;
            padding: 0px;
            border-radius: 25px;
            width: 95%;
            max-width: 1250px;
            min-height: 85vh;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            flex-grow: 1;
        }

        .tabs {
            display: flex;
            justify-content: flex-start;
            gap: 5px;
            margin-bottom: 0px;
            position: relative;
            top: -60px;
            max-width: 25;
            min-width: 25;
            right: -10%;
        }

        .tab {
            width: 180px;
            height: 60px;
            background: #4b4b4b;
            color: white;
            padding: 15px 25px;
            border-radius: 20px 20px 0 0;
            border: none;
            cursor: pointer;
            transition: background 0.3s; transform 0.2s;
            z-index:5;
            position: relative;
        }

        .tab:hover {
            background: #ff7b54;
            border-bottom: 2px solid white;
        }

        .active-tab {
            background: #1e1e1e;
            position: relative;
            z-index: 11;
        }

        .tab-content {
            display: none;
            margin-top: 0px;
            background: #1e1e1e;
            padding: 0px 30px;
            border-radius: 15px;
            width: 100%;
        }

        .tab-content.active {
            display: block;
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

        .text-lime {
            color: lime;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 50px;
            bottom: 320px;
            left: 58%;
            transform: translateX(-50%);
            width: max-content;
            position: absolute;
        }

        .btn-new, .btn-assign {
            width: 350px;
            height: 140px;
            border-radius: 15px;
            color: white;
            font-size: 28px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            transition: all 0.3s ease-in-out;
        }

        .btn-new {
            background: #d8a005;
        }

        .btn-new:hover {
            background: #b38704;
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        .btn-assign {
            background: #4CAF50;
        }

        .btn-assign:hover {
            background: #3e9144;
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        .btn-new:active, .btn-assign:active {
            transform: scale(0.98);
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
        }

        .hidden {
            display: none;
        }

        .form-container {
            background: none;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: -30px;
            justify-content: center;
            align-items: center;
        }

        #category {
            appearance: none;
            background-color: #1e1e1e;
            color: white;
            padding: 7px;
            border: 2px solid #444;
            border-radius: 5px;
            width: 160x;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #category:hover {
            background-color: #444;
        }

        #category option {
            background-color: #1e1e1e;
            color: white;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 10px;
        }

        #category option:hover {
            background-color: #ff7b54;
        }

        .form-input {
            color:white;
            padding: -20px;
            align-content: center;
            justify-content: center;
            background-color: #1e1e1e;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container {
            min-width: 1000px;
            min-height: -100vh;
            margin: auto;
            padding: 20px;
            position: absolute;
        }

        .card {
            border: none;
            border-radius: 20px;
            color: white;
            min-height: 10vh;
            position: absolute;
            right: -125px;
            bottom: -50px;

        }

        .card-body {
            min-height: 70vh;
            align-items: center;
            justify-content: center;
            background: none;
        }

        .card-header {
            background-color: #ff7b54;
            color: white;
            border-radius: 0%;
        }


        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

    </style>
</head>
<body >

    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="/images/logo.png" alt="TrackNET Logo">
            <span class="sidebar-logo-text">TrackNET</span>
        </div>
        <a href="{{ route('admin.dashboard') }}" id="dashboard-link" class="active" style="font-size:19px;">
            <i class="bi bi-graph-up fs-3 ms-6"></i> &nbsp; Dashboard
        </a>

        <a href="{{ route('admin.stockmanager') }}" id="stock-management" class="active" style="font-size:19px;">
            <i class="bi bi-box-seam fs-3 ms-6"></i> &nbsp; Item Management
        </a>

        <a href="{{ route('admin.suppliers') }}" id="supply" class="active" style="font-size:19px">
            <i class="bi bi-people fs-3 ms-6"></i> &nbsp; Suppliers
        </a>

        <a href="{{ route('admin.orders') }}" id="orders" class="active" style="font-size:19px">
            <i class="bi bi-map fs-3 ms-6"></i> &nbsp; Orders
        </a>

        <a href="{{ route('admin.reports') }}" id="reports" class="active" style="font-size:19px">
            <i class="bi bi-info-lg fs-3 ms-6"></i> &nbsp; Reports
        </a>

        <a href="{{ route('clientwebsite.website') }}" class="btn btn-customs logout-btn"
           style="font-size: 18px; text-align: center; display: flex; align-items: center;
                  justify-content: center; gap: 8px; padding: 7px 15px;
                  border-radius: 12px; font-weight: 600;">
           <i class="bi bi-power fs-4"></i> Sign out
        </a>
    </div>

    <div class="main-container">

        <div class="content">
            <div class="tabs">
                <div class="tab active-tab" onclick="openTab(event, 'allItems')">Items</div>
                <div class="tab" onclick="openTab(event, 'stocks')">Stocks</div>
                <div class="tab" onclick="openTab(event, 'logs')">Logs</div>
                <div class="tab" onclick="openTab(event, 'addNew')">New</div>
            </div>

            <div id="allItems" class="tab-content active">


                <label for="categoryFilter">Category :
                <select id="categoryFilter" onchange="filterItems()" class="form-select" style="border-radius: 5px; width: 200px;">
                    <option value="all">All</option>
                    <option value="core">Core Components</option>
                    <option value="peripherals">Peripherals</option>
                    <option value="storage">Storage & Backup</option>
                    <option value="networking">Networking Equipment</option>
                    <option value="cases">Computer Cases</option>
                    <option value="accessories">Accessories</option>
                </select>
            </label>

                {{-- <table class="table table-dark table-striped mt-4">
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody id="itemsTableBody">
                        @foreach ($items as $item)
                            <tr data-category="{{ $item->category }}">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->brand }}</td>
                                <td>{{ $item->model }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->unit_price }}</td>
                                <td>{{ $item->supplier }}</td>
                                <td>{{ $item->date_acquired }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>

            <div id="stocks" class="tab-content">
                <h3>Stock Management</h3>
                <p>Manage your stock levels here.</p>
            </div>

            <div id="logs" class="tab-content">
                <h3>Logs</h3>
                <p>View system activity logs.</p>
            </div>

            <div id="addNew" class="tab-content">
                <div class ="button-group">
               <button class="submit btn-new" style="background: rgb(231, 181, 0);     box-shadow: 0px 0px 8px rgba(231, 181, 0.5); text-decoration:none;"
               onclick = "toggleForm()">

                <i class= "bi bi-tags-fill fs-1"> </i> &nbsp; Add Item

               </button>

               <button class="submit btn-assign " style="background: rgb(73, 231, 0);     box-shadow: 0px 0px 8px rgba(73, 231, 0.5); text-decoration:none;">

                <i class= "bi bi-diagram-3-fill fs-1"> </i> &nbsp; Assign

               </button>
            </div>

                    <div id="newItemForm" class="form-container hidden">
    <div class="card h-100">
        <div class="card-header text-center bg-btn-primary text-white">
            <h4>Add New Item</h4>
        </div>
        <div class="card-body overflow-hidden">
            <form id="itemForm" class="row g-3" method="POST" > 
                {{-- action="{{ route('items.store') }}" --}}
                @csrf
                <div class="col-md-6">
                    <label for="itemName" class="form-label">Item Name :</label>
                    <input type="text" id="itemName" name="itemName" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Category :</label>
                    <select id="category2" name="category" class="form-select" required>
                        <option value="" disabled selected>Select category</option>
                        <option value="core">Core Components</option>
                        <option value="peripherals">Peripherals</option>
                        <option value="storage">Storage & Backup</option>
                        <option value="networking">Networking Equipment</option>
                        <option value="cases">Computer Cases</option>
                        <option value="accessories">Accessories</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="brand" class="form-label">Brand/Manufacturer :</label>
                    <input type="text" id="brand" name="brand" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="model" class="form-label">Model/Specification :</label>
                    <input type="text" id="model" name="model" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Quantity :</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
                </div>
                <div class="col-md-6">
                    <label for="unitPrice" class="form-label">Unit Price :</label>
                    <input type="number" id="unitPrice" name="unitPrice" class="form-control" min="0" step="0.01" required>
                </div>
                <div class="col-md-6">
                    <label for="supplier" class="form-label">Supplier :</label>
                    <input type="text" id="supplier" name="supplier" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="dateAcquired" class="form-label">Date Acquired :</label>
                    <input type="date" id="dateAcquired" name="dateAcquired" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status :</label>
                    <select id="status" name="status" class="form-select" required>
                        <option value="" disabled selected>Select status</option>
                        <option value="available">Available</option>
                        <option value="low-stock">Low Stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                    </select>
                </div>
                <div class="col-md-6">
<label for="imageUpload" class="form-label">Upload Image :</label>
                    <input type="file" id="imageUpload" class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="description" class="form-label">Description/Notes :</label>
                    <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-4">Submit</button>
&nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp;
                    <button type="button" class="btn btn-secondary px-4" onclick="toggleForm()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#1e1e1e; color: #fff">
                <h5 class="modal-title" id="confirmModalLabel">Add Item</h5>
            </div>
            <div class="modal-body" style="color: #fff; background-color: #1e1e1e ">
                <p><strong>Item Name:</strong> <span id="confirmItemName"></span></p>
                <p><strong>Category:</strong> <span id="confirmCategory2"></span></p>
                <p><strong>Brand/Manufacturer:</strong> <span id="confirmBrand"></span></p>
                <p><strong>Model/Specification:</strong> <span id="confirmModel"></span></p>
                <p><strong>Quantity:</strong> <span id="confirmQuantity"></span></p>
                <p><strong>Unit Price:</strong> <span id="confirmUnitPrice"></span></p>
                <p><strong>Supplier:</strong> <span id="confirmSupplier"></span></p>
                <p><strong>Date Acquired:</strong> <span id="confirmDateAcquired"></span></p>
                <p><strong>Status:</strong> <span id="confirmStatus"></span></p>
                <p><strong>Description/Notes:</strong> <span id="confirmDescription"></span></p>
            </div>
            <div class="modal-footer" style="background-color: #1e1e1e; color: #fff">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmSubmit">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('confirmButton').addEventListener('click', function () {
        document.getElementById('confirmItemName').textContent = document.getElementById('itemName').value;
        document.getElementById('confirmCategory2').textContent = document.getElementById('category2').value;
        document.getElementById('confirmBrand').textContent = document.getElementById('brand').value;
        document.getElementById('confirmModel').textContent = document.getElementById('model').value;
        document.getElementById('confirmQuantity').textContent = document.getElementById('quantity').value;
        document.getElementById('confirmUnitPrice').textContent = document.getElementById('unitPrice').value;
        document.getElementById('confirmSupplier').textContent = document.getElementById('supplier').value;
        document.getElementById('confirmDateAcquired').textContent = document.getElementById('dateAcquired').value;
        document.getElementById('confirmStatus').textContent = document.getElementById('status').value;
        document.getElementById('confirmDescription').textContent = document.getElementById('description').value;


        const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
        confirmModal.show();
    });

    document.getElementById('confirmSubmit').addEventListener('click', function () {

        document.getElementById('itemForm').submit();
    });
</script>

<style>
    .form-container {
        min-width: 1250px;
        height: auto;
        margin: auto;
        padding: 0px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: none;
    }

    .card {
        color: white;
        max-height: 90vh;
        position: relative;
        background: none;

    }

    .card-body {
        max-height: calc(90vh - 150px);
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        background: none;


    }

    .form-label {
        font-weight: bold;
        background-color: #1e1e1e;
    }

    .form-control, .form-select {
        background-color: #1e1e1e;
        color: white;
        border: 2px solid #444;
    }

    .form-control:focus, .form-select:focus {
        background-color: #2a2a2a;
        color: white;
        border-color: #ff7b54;
        box-shadow: 0 0 5px rgba(255, 123, 84, 0.5);
    }

    .btn-primary {
        background-color: #ff7b54;
        border: none;
    }

    .btn-primary:hover {
        background-color: #ff5733;
    }

    .btn-secondary {
        background-color: #444;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #666;
    }
</style>
                </div>
            </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#1e1e1e; color: #fff;">
                <h5 class="modal-title" id="submitModalLabel" style="color: lime;">Success &nbsp;<i class="bi bi-check2-circle fs-4" style="color: lime;"></i></h5>
            </div>
            <div class="modal-body" style="background-color: #1e1e1e; color: #fff">
                New item added.
            </div>
            <div class="modal-footer" style="background-color:#1e1e1e; color: #fff;">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#1e1e1e; color: #fff">
                <h5 class="modal-title" id="confirmModalLabel">Add Item</h5>
            </div>
            <div class="modal-body" style="color: #fff; background-color: #1e1e1e ">
                <p><strong>Item Name:</strong> <span id="confirmItemName"></span></p>
                <p><strong>Category:</strong> <span id="confirmCategory2"></span></p>
                <p><strong>Brand/Manufacturer:</strong> <span id="confirmBrand"></span></p>
                <p><strong>Model/Specification:</strong> <span id="confirmModel"></span></p>
                <p><strong>Quantity:</strong> <span id="confirmQuantity"></span></p>
                <p><strong>Unit Price:</strong> <span id="confirmUnitPrice"></span></p>
                <p><strong>Supplier:</strong> <span id="confirmSupplier"></span></p>
                <p><strong>Date Acquired:</strong> <span id="confirmDateAcquired"></span></p>
                <p><strong>Status:</strong> <span id="confirmStatus"></span></p>
                <p><strong>Description/Notes:</strong> <span id="confirmDescription"></span></p>
            </div>
            <div class="modal-footer" style="background-color: #1e1e1e; color: #fff">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmSubmit">Confirm</button>
            </div>
        </div>
    </div>
</div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active-tab");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active-tab");

        }

        function toggleForm() {
            let form = document.getElementById("newItemForm");
            let buttonGroup = document.querySelector(".button-group");

            if (form.classList.contains("hidden")) {
                form.classList.remove("hidden");
                buttonGroup.style.display = "none";
            } else {
                form.classList.add("hidden");
                buttonGroup.style.display = "flex";
            }
        }

        function submitForm(){
            alert("Item successfully added.")
            toggleForm();
        }

        const items = {
            all: [],
            core: [],
            peripherals: [],
            storage: [],
            networking: [],
            cases: [],
            accessories: []
        };

        document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('itemForm').onsubmit = function (event) {
        event.preventDefault();

        const itemName = document.getElementById('itemName').value;
        const category2 = document.getElementById('category2').value;
        const brand = document.getElementById('brand').value;
        const model = document.getElementById('model').value;
        const quantity = document.getElementById('quantity').value;
        const unitPrice = document.getElementById('unitPrice').value;
        const supplier = document.getElementById('supplier').value;
        const dateAcquired = document.getElementById('dateAcquired').value;
        const status = document.getElementById('status').value;
        const description = document.getElementById('description').value;

        document.getElementById('confirmItemName').textContent = itemName;
        document.getElementById('confirmCategory2').textContent = category2;
        document.getElementById('confirmBrand').textContent = brand;
        document.getElementById('confirmModel').textContent = model;
        document.getElementById('confirmQuantity').textContent = quantity;
        document.getElementById('confirmUnitPrice').textContent = unitPrice;
        document.getElementById('confirmSupplier').textContent = supplier;
        document.getElementById('confirmDateAcquired').textContent = dateAcquired;
        document.getElementById('confirmStatus').textContent = status;
        document.getElementById('confirmDescription').textContent = description;

        const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
        confirmModal.show();
    };

    document.getElementById('confirmSubmit').onclick = function () {
        const confirmModal = bootstrap.Modal.getInstance(document.getElementById('confirmModal'));
        confirmModal.hide();

        const submitModal = new bootstrap.Modal(document.getElementById('submitModal'));
        submitModal.show();


    };
});

    function filterItems() {
        const selectedCategory = document.getElementById('categoryFilter').value;
        const rows = document.querySelectorAll('#itemsTableBody tr');

        rows.forEach(row => {
            const itemCategory = row.getAttribute('data-category');
            if (selectedCategory === 'all' || itemCategory === selectedCategory) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }


</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
