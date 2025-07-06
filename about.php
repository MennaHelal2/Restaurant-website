<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Grill Restaurant</title>
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
                        <a class="nav-link active" href="about.php">About</a>
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

    <!-- About Hero Section -->
    <header class="about-hero">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-4">Our Story</h1>
                    <p class="lead">Discover the passion behind our grill</p>
                </div>
            </div>
        </div>
    </header>

    <!-- About Content -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="images/food.jpeg" alt="Restaurant Interior" class="img-fluid about-image">
                </div>
                <div class="col-md-6">
                    <h2>Welcome to Grill Restaurant</h2>
                    <p class="lead">Where passion meets perfection</p>
                    <p>Founded in 2010, Grill Restaurant has been serving the finest grilled dishes in town. Our commitment to quality ingredients and exceptional service has made us a favorite destination for food lovers.</p>
                    <p>We take pride in our carefully selected ingredients, sourced from local farmers and suppliers who share our commitment to quality and sustainability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="values-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Values</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="fas fa-utensils fa-3x mb-3 text-primary"></i>
                        <h4>Quality Food</h4>
                        <p>We use only the finest ingredients to create memorable dining experiences.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="fas fa-heart fa-3x mb-3 text-primary"></i>
                        <h4>Passion</h4>
                        <p>Our team is passionate about creating exceptional dishes for our guests.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                        <h4>Community</h4>
                        <p>We believe in building strong relationships with our customers and community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Team</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/chef1.jpeg" class="card-img-top" alt="Head Chef">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Smith</h5>
                            <p class="card-text">Head Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/chef2.jpeg" class="card-img-top" alt="Sous Chef">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sarah Johnson</h5>
                            <p class="card-text">Sous Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/chef3.jpeg" class="card-img-top" alt="Pastry Chef">
                        <div class="card-body text-center">
                            <h5 class="card-title">Michael Brown</h5>
                            <p class="card-text">Pastry Chef</p>
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