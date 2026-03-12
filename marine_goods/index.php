<?php
// Keep your existing PHP logic here
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marine Goods System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN (for modern design) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f8ff;
        }

        .hero {
            background: linear-gradient(rgba(0, 119, 182, 0.8), rgba(0, 180, 216, 0.8)),
            url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }

        .navbar {
            background-color: #003f5c !important;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        footer {
            background-color: #003f5c;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Marine Goods</a>
        <div>
            <a class="nav-link d-inline" href="products.php">Products</a>
            <a class="nav-link d-inline" href="inventory.php">Inventory</a>
            <a class="nav-link d-inline" href="orders.php">Orders</a>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<div class="hero">
    <h1>Marine Goods Management System</h1>
    <p>Manage Marine Products Efficiently & Securely</p>
</div>

<!-- PRODUCTS SECTION -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Marine Products</h2>

    <div class="row">

        <div class="col-md-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1579783901586-d88db74b4fe4" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Fresh Fish</h5>
                    <p class="card-text">High quality ocean fresh fish.</p>
                    <a href="products.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1604908177522-4027c7c08b64" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Shrimps & Prawns</h5>
                    <p class="card-text">Premium export quality seafood.</p>
                    <a href="products.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Marine Equipment</h5>
                    <p class="card-text">Navigation & safety equipment.</p>
                    <a href="products.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

    </div>
</div>

<footer>
    © 2026 Marine Goods System | Developed by Bhavana
</footer>

</body>
</html>