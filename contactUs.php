<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./image/icon[1].png">
    <title>TriMindis</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container-fluid w-100">
            <!-- Logo -->
            <a class="navbar-brand" href="./index.php">
                <img src="./image/1b9c460a19ee3114811b6bab4749a92b.png" alt="Logo" />
            </a>

            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <!-- Positioned to the right -->
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Project.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Blog.php">Blog</a>
                    </li>
                </ul>
                <!-- Button Positioned to the Far Right -->
                <a class="btn btn-custom" href="./contactUs.php">Work with Us</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <!-- Section Title -->
            <div class="col-md-12">
                <h4>Contact Us - TriMindis</h4>
                <h1 class="section-title">Get in touch with TriMindis</h1>
                <hr style="border-top: 2px solid rgba(255, 255, 255, 0.25)">
            </div>
        </div>

        <div class="row mt-4">
            <!-- Left Section: Contact Info -->
            <div class="col-md-6 contact-info">
                <h4>Contact Us Online</h4>
                <p>info@trimindis.com</p>
                <ul class="social-links">
                    <li><i class="fab fa-behance"></i><a href="#"> Behance</a></li>
                    <li><i class="fab fa-instagram"></i><a href="#"> Instagram</a></li>
                    <li><i class="fab fa-twitter"></i><a href="#"> Twitter</a></li>
                    <li><i class="fab fa-linkedin"></i><a href="#"> LinkedIn</a></li>
                    <li><i class="fab fa-facebook"></i><a href="#"> Facebook</a></li>
                </ul>
                <hr class="divider">
            </div>

            <!-- Right Section: Contact Form -->
            <div class="col-md-6 form-section">
                <h4>Tell us about your project</h4>
                <p>
                    We’re here to connect, collaborate, and support you. Whether you
                    have a question about our ventures, a partnership idea, or simply
                    want to say hello, we’d love to hear from you.
                </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="project-details" rows="4"
                            placeholder="Tell us about your project and what needs to be done"></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="privacy-policy">
                        <label class="form-check-label" for="privacy-policy">
                            Check here if you accept our terms Privacy Policy
                        </label>
                    </div>
                    <button type="submit" class="btn btn-submit">Send</button>
                </form>
            </div>
        </div>
    </div>

    <section class="bg">

        <!-- Footer Section -->
        <!-- Footer Section -->
        <footer class="footer-section text-white">
            <div class="container py-4">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-3 mb-4">
                        <img src="./image/Vector 1.png" alt="Logo" style="margin-bottom: 30px;">
                        <h5 class="mb-3">TriMindis</h5>
                    </div>
                    <!-- Quick Links -->
                    <div class="col-md-3 mb-4">
                        <h6>Quick Links</h6>
                        <ul class="list-unstyled">
                            <li><a href="./index.php" class="text-white">Home</a></li>
                            <li><a href="./AboutUs.php" class="text-white">About
                                    Us</a></li>
                            <li><a href="./Project.php" class="text-white">Our
                                    Projects</a></li>
                            <li><a href="./Services.php" class="text-white">Service</a></li>
                            <li><a href="./Blog.php" class="text-white">Blog</a></li>
                            <li><a href="./contactUs.php" class="text-white">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-md-3 mb-4">
                        <h6>Contact Us</h6>
                        <p>Email: <a href="mailto:info@trimindis.com" class="text-white">info@trimindis.com</a></p>
                        <p>Phone: <a href="tel:+8801534888889" class="text-white">+880
                                1534888889</a></p>
                        <p>Uttara, Dhaka-1230, Bangladesh</p>
                    </div>

                    <!-- Social Media -->
                    <div class="col-md-3 mb-4">
                        <h6 class="text-right">Follow Us</h6>
                        <ul class="list-unstyled d-flex justify-content-between">
                            <a href="https://www.facebook.com/trimindis"><img src="./image/facebook.png"
                                    alt="Facebook"></a>
                            <a href=" https://www.instagram.com/trimindis.co/"><img src="./image/instagram.png"
                                    alt="Instagram"></a>
                            <a href=" https://x.com/trimindis_
          "><img src="./image/twitter.png" alt="X"></a>
                            <a href="https://www.linkedin.com/company/trimindis/"><img src="./image/linkedin.png"
                                    alt="LinkedIn"></a>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-between" style="margin-top: 100px;">
                            <a href="#" style="color: #FFF; text-decoration: none;">Privacy
                                Policy</a>
                            <a href="#" style="color: #FFF; text-decoration: none;">Terms of
                                Service</a>
                        </ul>
                    </div>

                </div>

                <p class="text-center">© TriMindis | 2025 | All Rights Reserved</p>
                <div class="lastlogo">
                    <img src="./image/TriMindis.png" alt="backimg">
                </div>

            </div>
        </footer>

    </section>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>