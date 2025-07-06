<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grill Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Grill Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-4">Welcome to Grill Restaurant</h1>
                    <p class="lead">Experience the finest grilled dishes in town</p>
                    <a href="reservation.php" class="btn btn-primary btn-lg">Make a Reservation</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Section -->
    <section class="featured-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Specialties</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/grill1.jpg" class="card-img-top" alt="Grilled Steak">
                        <div class="card-body">
                            <h5 class="card-title">Grilled Steak</h5>
                            <p class="card-text">Premium cut steak grilled to perfection</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/dish2.jpeg" class="card-img-top" alt="Seafood Grill">
                        <div class="card-body">
                            <h5 class="card-title">Seafood Grill</h5>
                            <p class="card-text">Fresh seafood grilled with special herbs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/dish3.jpeg" class="card-img-top" alt="Vegetable Grill">
                        <div class="card-body">
                            <h5 class="card-title">Vegetable Grill</h5>
                            <p class="card-text">Seasonal vegetables grilled to perfection</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Grill Restaurant</h5>
                    <p>Experience the finest grilled dishes in town</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Info</h5>
                    <p>Email: info@grillrestaurant.com<br>
                    Phone: +1 234 567 890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/12JTULPn9E6/" target="_blank" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/emanahmed_444?igsh=dTl0emtweW9xcngy" target="_blank" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 