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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/Blog.css">
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
                        <a class="nav-link" href="./AboutUs.php">About
                            Us</a>
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
                <a class="btn btn-custom" href="./contactUs.php">Work with
                    Us</a>
            </div>
        </div>
    </nav>

    <!------------------------------ Navebar End--------------- -->

    <!------------------------------ Hero Section Start --------------- -->
    <section class="blog-hero">
        <div class="container text-center hero">
            <h2>Catch Up with Our Latest Articles</h2>
            <p>Catch up with our latest news and stay in the loop on recent
                updates, insightful stories, and exciting announcements
                shaping our journey forward!</p>
        </div>
    </section>
    <!------------------------------ Hero Section End  --------------- -->
    <!------------------------------ Post Section Start --------------- -->
    <section class="post">
        <div class="container my-5">
            <h4 class="text-light mb-4">Recent Post (08)</h4>
            <div class="row align-items-center post-card">
                <div class="col-md-6">
                    <img src="./image/blog_post1.jpg" alt="Post Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="post-content p-4">
                        <p class="text-light small">22 July 2024 &bull; 4
                            min</p>
                        <h3 class="text-light fw-bold">How Remote work
                            drastically Improved my Design Skills</h3>
                        <p class="text-secondary write">Remote work has
                            drastically improved my design skills by giving
                            me the freedom to experiment, focus, and learn
                            at my own pace. Without the daily commute and
                            office distractions, I found more time for deep,
                            uninterrupted work, allowing me to refine my
                            design techniques and creativity. Collaborating
                            with a global team challenged me.</p>
                        <div class="d-flex gap-2">
                            <span class="badge">Design</span>
                            <span class="badge">Product</span>
                            <span class="badge">Frameworks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!------------------------------ post Section end --------------- -->
    <!------------------------------ Read Blog  Section Start ------------ -->

    <section class="read-blog">
        <div class="container my-5">
            <h4 class="text-light mb-4">Weekly Most Read</h4>

            <!-- Blog Posts Grid -->
            <div class="row g-4">
                <!-- Repeat for each blog post -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-cardr">
                        <img src="image/Read1.jpg" alt="Post Image" class="img-fluid rounded">
                        <div class="post-contentr p-3">
                            <p class="text-light small">22 July 2024
                                • 4 min</p>
                            <h5 class="text-light fw-bold">Our SaaS
                                Product Just Launched!</h5>
                            <p class="text-secondary small">Remote
                                work has drastically improved my
                                design skills...</p>
                            <div class="d-flex gap-2">
                                <span class="badge">Design</span>
                                <span class="badge">Product</span>
                                <span class="badge">SaaS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-cardr">
                        <img src="image/read2.jpg" alt="Post Image" class="img-fluid rounded">
                        <div class="post-contentr p-3">
                            <p class="text-light small">22 July 2024
                                • 4 min</p>
                            <h5 class="text-light fw-bold">Our SaaS
                                Product Just Launched!</h5>
                            <p class="text-secondary small">Remote
                                work has drastically improved my
                                design skills...</p>
                            <div class="d-flex gap-2">
                                <span class="badge">Design</span>
                                <span class="badge">Product</span>
                                <span class="badge">SaaS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-cardr">
                        <img src="image/read3.jpg" alt="Post Image" class="img-fluid rounded">
                        <div class="post-contentr p-3">
                            <p class="text-light small">22 July 2024
                                • 4 min</p>
                            <h5 class="text-light fw-bold">Our SaaS
                                Product Just Launched!</h5>
                            <p class="text-secondary small">Remote
                                work has drastically improved my
                                design skills...</p>
                            <div class="d-flex gap-2">
                                <span class="badge">Design</span>
                                <span class="badge">Product</span>
                                <span class="badge">SaaS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-cardr">
                        <img src="image/read4.jpg" alt="Post Image" class="img-fluid rounded">
                        <div class="post-contentr p-3">
                            <p class="text-light small">22 July 2024
                                • 4 min</p>
                            <h5 class="text-light fw-bold">Our SaaS
                                Product Just Launched!</h5>
                            <p class="text-secondary small">Remote
                                work has drastically improved my
                                design skills...</p>
                            <div class="d-flex gap-2">
                                <span class="badge">Design</span>
                                <span class="badge">Product</span>
                                <span class="badge">SaaS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-cardr">
                        <img src="image/Read5.png" alt="Post Image" class="img-fluid rounded">
                        <div class="post-contentr p-3">
                            <p class="text-light small">22 July 2024
                                • 4 min</p>
                            <h5 class="text-light fw-bold">Our SaaS
                                Product Just Launched!</h5>
                            <p class="text-secondary small">Remote
                                work has drastically improved my
                                design skills...</p>
                            <div class="d-flex gap-2">
                                <span class="badge">Design</span>
                                <span class="badge">Product</span>
                                <span class="badge">SaaS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-cardr">
                        <img src="image/read6.png" alt="Post Image" class="img-fluid rounded">
                        <div class="post-contenrt p-3">
                            <p class="text-light small">22 July 2024
                                • 4 min</p>
                            <h5 class="text-light fw-bold">Our SaaS
                                Product Just Launched!</h5>
                            <p class="text-secondary small">Remote
                                work has drastically improved my
                                design skills...</p>
                            <div class="d-flex gap-2">
                                <span class="badge">Design</span>
                                <span class="badge">Product</span>
                                <span class="badge">SaaS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav class="Page navigation d-flex justify-content-between">
                <div class="pagination">
                    <div class="page-item"><a class="page-link" href="#">« Previous</a></div>
                </div>
                <div class="pagination d-flex justify-content-center mt-4">
                    <span class="page-item"><a class="page-link active" href="#">1</a></span>
                    <span class="page-item"><a class="page-link" href="#">2</a></span>
                    <span class="page-item"><a class="page-link" href="#">3</a></span>
                    <span class="page-item"><a class="page-link" href="#">4</a></span>
                    <span class="page-item"><a class="page-link" href="#">5</a></span>
                </div>
                <div class="pagination">
                    <div class="page-item"><a class="page-link" href="#">Next »</a></div>
                </div>

            </nav>
        </div>
    </section>
    <!-- newsletter-section     start -->

    <section class="newsletter-section">
        <h2>Sign up to our Newsletter</h2>
        <p>Stay up to date with the latest news, announcements, and articles</p>

        <div class="input-group">
            <input type="email" class="form-control" placeholder="Enter your email">
            <button class="btn btn-subscribe">Subscribe</button>
        </div>

    </section>

    <!-- newsletter-section     end  -->




    <section class="bg">
        <!-- Hero Section -->
        <section class="hero-section2 text-center text-white">
            <div class="container d-flex flex-column ">
                <h2>Have a project?</h2>
                <h1>Let’s make it!</h1>
                <button class="btn btn-outline-light mt-4">Tell us about
                    your
                    project</button>
            </div>
        </section>
        <hr class="my-4">

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
                            <a href="#" style="color: #FFF; text-decoration: none;">Terms
                                of
                                Service</a>
                        </ul>
                    </div>

                </div>

                <p class="text-center">© TriMindis | 2025 | All Rights
                    Reserved</p>
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