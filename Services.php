<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriMindis</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/services.css">
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

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Innovative IT Services Designed for Your Success.</h1>
            <p>Your partner in Web Development, SEO, Digital Marketing, and
                more.</p>
            <a href="#" class="hero-btn">Get a Free Quote</a>
        </div>
    </div>

    <!-- ----------------------------------------------Service Section---------------  -->
    <div class="container service-section">
        <div class="row align-items-center">
            <!-- Web Design -->
            <div class="col-lg-12 d-flex flex-wrap justify-content-between srbox">
                <div class="col-md-6 service-box">
                    <h3>Web Design</h3>
                    <p>Crafting intuitive and beautiful interfaces for your
                        audience.</p>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="./WebDesign.php" class="text-white">UI
                                    Research</a></li>
                            <li>Wireframes<a href="./WebDesign.php" class="text-white">Wireframes</a></li>
                            <li>Prototyping <a href="./WebDesign.php" class="text-white">Prototyping</a></li>
                        </ul>
                        <ul>
                            <li> <a href="./WebDesign.php" class="text-white">Usability
                                    Testing</a></li>
                            <li>User Research</li>
                            <li>Interactive Design</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="./image/webDesign.jpg" alt="Landing Page Design" class="w-100 img-fluid">
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-lg-12 d-flex flex-wrap flex-md-row-reverse justify-content-between srbox">
                <div class="col-md-6 service-box">
                    <h3>Web Development</h3>
                    <p>We build responsive, fast, and SEO-friendly websites that drive
                        results.</p>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <a href="./WebDesign.php">
                                <li>UI/UX Design</li>
                                <li>Mobile-Friendly Solutions</li>
                                <li>CRM Integration</li>
                            </a>
                        </ul>
                        <ul>
                            <a href="./WebDesign.php">
                                <li>E-commerce Solutions</li>
                                <li>WordPress & Custom Solutions</li>
                                <li>API Integration</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="./image/WebDevelopment.jpg" alt="Web Development Image" class="w-100 img-fluid">
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-lg-12 d-flex flex-wrap justify-content-between srbox">
                <div class="col-md-6 service-box">
                    <h3>Digital Marketing</h3>
                    <p>Engage your audience with creative and
                        data-driven marketing
                        campaigns.</p>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li>Social Media Management</li>
                            <li>Pay-Per-Click (PPC)</li>
                        </ul>
                        <ul>
                            <li>Content Marketing</li>
                            <li>Email Marketing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="./image/DigitalMarkting.jpg" alt="Digital Marketing Image" class="w-100 img-fluid">
                </div>
            </div>

            <!-- SEO Services -->
            <div class="col-lg-12 d-flex flex-wrap flex-md-row-reverse justify-content-between srbox">
                <div class="col-md-6 service-box">
                    <h3>SEO Services</h3>
                    <p>Climb the search rankings with our tailored SEO strategies.</p>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li>Keyword Research</li>
                            <li>Optimization</li>
                            <li>On-Page and Technical SEO</li>
                        </ul>
                        <ul>
                            <li>Link Building</li>
                            <li>Authority Management</li>
                            <li>Local SEO</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="./image/SeoServices.jpg" alt="SEO Services Image" class="w-100 img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------------Service Section End ----------------- -->

    <!----------------------- why busnesses Choose Trimindise  start  ------------------>
    <section class="busness">

        <div class="container">
            <h2 class="mb-5 col-md-8">Why Businesses Choose Trimindis</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-title">User-centric Core</h5>
                        <p>People are first, always. We immerse ourselves in your users’
                            perspectives, shaping them into intuitive and meaningful
                            interactions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-title">Expert Team</h5>
                        <p>Our skilled designers bring diverse expertise, ensuring a
                            holistic approach to every project for superior results.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-title">Strategic Innovation</h5>
                        <p>We don’t merely follow trends; we help define them. Our designs
                            are driven by insights that result in impactful experiences.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-title">Data-Driven Decisions</h5>
                        <p>Our approach combines creativity with insights, ensuring our
                            solutions are both engaging and effective.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-title">Transparent Process</h5>
                        <p>Our open communication ensures informed steps, fostering trust
                            and confidence in the design journey.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-title">Responsive Agility</h5>
                        <p>Our flexible structure allows us to adapt swiftly, ensuring our
                            designs remain responsive to changing user needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------- why busnesses Choose Trimindise  End ------------------>

    <!----------------------- Need Customised Plan or Have Any Inquiry? start  ------------------>

    <section class="contact">
        <div class="container my-5">
            <div class="row contact-section">
                <div class="col-md-5 contact-info text-white">
                    <h3>Need Customised Plan or Have Any Inquiry?</h3>
                    <div class="contact-info-link">
                        <p><i class="fa-solid fa-phone"></i> +972 5426 789</p>
                        <p><i class="fa-solid fa-envelope"></i> info@triminid.com</p>
                        <div>
                            <i class="fa-brands fa-facebook me-2"></i>
                            <i class="fa-brands fa-twitter me-2"></i>
                            <i class="fa-brands fa-instagram me-2"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 contact-input">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Subject?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="subject" id="webDesign">
                                <label class="form-check-label" for="webDesign">Web
                                    Design</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="subject" id="webDev">
                                <label class="form-check-label" for="webDev">Web
                                    Development</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="subject" id="digitalMarketing">
                                <label class="form-check-label" for="digitalMarketing">Digital
                                    Marketing</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="subject" id="seoService">
                                <label class="form-check-label" for="seoService">SEO
                                    Service</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Write your message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom input-btn">Book A
                            Meeting</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!----------------------- Need Customised Plan or Have Any Inquiry?  End ------------------>

    <!----------------------- Have Questions??  Start ------------------>
    <div class="faq-section">
        <h1>Have Questions?</h1>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How long does it take to build a website?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        The timeline depends on the complexity and requirements of the
                        project, usually ranging from a few weeks to a few months.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What’s included in your SEO services?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our SEO services include keyword research, on-page optimization,
                        link building, and performance tracking.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How much does a UI/UX design project cost?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        The cost varies depending on the project scope and complexity.
                        Contact us for a custom quote.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Do you offer free consultations?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we offer a free initial consultation to discuss your project
                        needs and how we can help.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------- Have Questions??  End ------------------>
    <?php include('./footer.php'); ?>