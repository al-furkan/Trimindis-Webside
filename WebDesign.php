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
    <link rel="stylesheet" href="./css/webdesign.css">
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
    <!------------------------------------ Services We Offer -------------------------------->
    <div class="container mt-5">
        <h2 class="text-left">Services we offer</h2>
        <div class="list-group">
            <div class="service-item">
                <h3 class="tittle-text"><span>01</span> Web Design</h3>
                <img src="./image/Webdesign.png" class="service-img img-fluid" alt="Web Design">
            </div>
            <div class="service-content">
                <p>Crafting intuitive and beautiful interfaces for your audience.</p>
                <ul>
                    <li>Wireframing and prototyping.</li>
                    <li>Interactive design mockups.</li>
                    <li>Usability testing.</li>
                    <li>Accessibility optimization.</li>
                </ul>
                <a href="./AboutUs.php" class="btn btn-learn-more mt-3">Learn More
                    →</a>
            </div>
            <hr class="dvr">

            <div class="service-item">
                <h3 class="tittle-text"><span>02</span> Web Development</h3>
                <img src="./image/webDevelopment.png" class="service-img img-fluid" alt="Web Development">
            </div>
            <div class="service-content">
                <p>Building responsive and scalable web applications.</p>
                <ul>
                    <li>Frontend & Backend Development.</li>
                    <li>Database Management.</li>
                    <li>Performance Optimization.</li>
                </ul>
                <a href="./AboutUs.php" class="btn btn-learn-more mt-3">Learn More
                    →</a>
            </div>
            <hr class="dvr">

            <div class="service-item">
                <h3 class="tittle-text"><span>03</span> SEO Services</h3>
                <img src="./image/Seo.png" class="service-img img-fluid" alt="SEO Services">
            </div>
            <div class="service-content">
                <p>Enhancing website visibility and search engine rankings.</p>
                <ul>
                    <li>Keyword Research.</li>
                    <li>On-Page & Off-Page SEO.</li>
                    <li>Analytics & Reporting.</li>
                </ul>
                <a href="./AboutUs.php" class="btn btn-learn-more mt-3">Learn More
                    →</a>
            </div>
            <hr class="dvr">

            <div class="service-item">
                <h3 class="tittle-text"><span>04</span> Digital Marketing</h3>
                <img src="./image/DigitalMarkting.png" class="service-img img-fluid" alt="Digital Marketing">
            </div>
            <div class="service-content">
                <p>Creating impactful marketing strategies for online growth.</p>
                <ul>
                    <li>Social Media Marketing.</li>
                    <li>Email Campaigns.</li>
                    <li>Content Marketing.</li>
                </ul>
                <a href="./AboutUs.php" class="btn btn-learn-more mt-3">Learn More
                    →</a>
            </div>
            <hr class="dvr">
        </div>
    </div>

    <!-- ---------------------------------------Service Section end---------------  -->

    <!-- ---------------------------------------From Idea to Masterpiece ---------------  -->
    <section class="container Masterpiece">
        <div class="col-8">
            <h1>From Idea to Masterpiece</h1>
        </div>
        <div class="img">
            <img src="./image/from_idea_to_masterpieace[1].png" alt="Masterpiece" class="img-fluid">
        </div>
    </section>

    <!-- ---------------------------------------From Idea to Masterpiece---------------  -->
    <section class="project">

        <div class="container mt-5">
            <div class="d-flex  header">
                <h2 class="text-center" style="margin-bottom: 60px;"> Our
                    Projects</h2>
            </div>
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <img src="./image/Health-track app.jpg" alt="Health Track App">
                    <div class="d-flex justify-content-between cn">
                        <h5>Health Track App</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT
                            →</a>
                    </div>

                </div>
                <div class="col-md-6 portfolio-item">
                    <img src="./image/Personal-Protfolio.jpg" alt="Personal Portfolio">
                    <div class="d-flex justify-content-between cn">
                        <h5>Personal Portfolio</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT
                            →</a>
                    </div>
                </div>
                <div class="col-md-6 portfolio-item">
                    <img src="./image/E-commerce-App.jpg" alt="E-commerce App">
                    <div class="d-flex justify-content-between cn">
                        <h5>E-commerce App</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT
                            →</a>
                    </div>
                </div>
                <div class="col-md-6 portfolio-item">
                    <img src="./image/watch-ui.jpg" alt="Watch UI">
                    <div class="d-flex justify-content-between cn">
                        <h5>Watch UI</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT
                            →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------Project Section End??  ------------------>

    <!----------------------- Why Us??  Start ------------------>

    <section class="why-us py-5">
        <div class="container">
            <h2 class="section-title">Why Us?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="stat-box text-left">
                        <h3 class="counter">0%</h3>
                        <p>User Engagement Boost.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-box text-left">
                        <h3 class="counter">0+</h3>
                        <p>Industry we served</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-box text-left">
                        <h3 class="counter">0+</h3>
                        <p>Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------- Why Us??  end ------------------>

    <!----------------------- Why Us Client??  Start ------------------>
    <section class="testimonial-section text-white mx-auto">
        <div class="container mx-auto ">
            <!-- Section Title -->
            <div class="hr">
                <h2 class="mb-4">What Our Clients Say</h2>
            </div>
            <div class="cd">

                <div class="carousel mx-auto">
                    <div class="track">
                        <div class=slide>
                            <!-- Testimonial Quote -->
                            <blockquote class="blockquote mx-auto">
                                <p class="mb-4">
                                    “Working with them was the greatest
                                    collaboration I have had
                                    so
                                    far.
                                    As <strong>35% increase in my business
                                        profit</strong>. Must
                                    Recommendation.”
                                </p>
                            </blockquote>

                            <!-- Client Info -->
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <img src="./image/ede9882a5b3a88ed2fd85ce47144b493.png" alt="Client Image"
                                    class="rounded-circle me-3" width="88" height="88">
                                <div class="dis">
                                    <h5 class="mx-0">Petite Dianka</h5>
                                    <small>International Strategy and <br>
                                        Operations Manager,
                                        Wolt</small>
                                </div>
                            </div>
                        </div>
                        <div class="slide mx-auto">
                            <!-- Testimonial Quote -->
                            <blockquote class="blockquote mx-auto">
                                <p class="mb-4">
                                    “Working with them was the greatest
                                    collaboration I have had
                                    so
                                    far.
                                    As <strong>35% increase in my business
                                        profit</strong>. Must
                                    Recommendation.”
                                </p>
                            </blockquote>

                            <!-- Client Info -->
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <img src="./image/ede9882a5b3a88ed2fd85ce47144b493.png" alt="Client Image"
                                    class="rounded-circle me-3" width="88" height="88">
                                <div class="dis">
                                    <h5 class="mb-0">Petite Dianka</h5>
                                    <small>International Strategy and <br>
                                        Operations Manager,
                                        Wolt</small>
                                </div>
                            </div>
                        </div>
                        <div class="slide  mx-auto">
                            <!-- Testimonial Quote -->
                            <blockquote class="blockquote mx-auto">
                                <p class="mb-4">
                                    “Working with them was the greatest
                                    collaboration I have had
                                    so
                                    far.
                                    As <strong>35% increase in my business
                                        profit</strong>. Must
                                    Recommendation.”
                                </p>
                            </blockquote>

                            <!-- Client Info -->
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <img src="./image/ede9882a5b3a88ed2fd85ce47144b493.png" alt="Client Image"
                                    class="rounded-circle me-3" width="88" height="88">
                                <div class="dis">
                                    <h5 class="mb-0">Petite Dianka</h5>
                                    <small>International Strategy and <br>
                                        Operations Manager,
                                        Wolt</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="prev">&#8592;</button>
                    <button class="next">&#8594</button>
                </div>
            </div>
        </div>
    </section>

    <!----------------------- Why Us Cliend??  end ------------------>

    <!----------------------- Wow Section??  Start ------------------>
    <div class="container d-flex justify-content-center align-items-center Wow">
        <div class="hero-section23 w-75 shadow-lg">
            <div class="hero-content23">
                <!-- <img src="logo.png" alt="Logo" width="50"> -->
                <h1>Ready to Make Your Users Say <span class="text-white">‘Wow’?</span></h1>
                <p class="w-75 mx-auto">Let’s turn your vision into an
                    experience
                    people can’t
                    quit.</p>
                <a href="#" class="btn btn-custom mx-auto">Start with a Free
                    Consultation</a>
            </div>
        </div>
    </div>

    <!----------------------- Wow Section??  end -------------------->

    <!---------------------- Have Questions??  Start ----------------->
    <div class="faq-section">
        <h2>Have Questions?</h2>
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
                        The timeline depends on the complexity and
                        requirements of the
                        project, usually ranging from a few weeks to a few
                        months.
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
                        Our SEO services include keyword research, on-page
                        optimization,
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
                        The cost varies depending on the project scope and
                        complexity.
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
                        Yes, we offer a free initial consultation to discuss
                        your project
                        needs and how we can help.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------- Have Questions??  End ------------------>

    <!----------------------- Have Questions??  End ------------------>
    <?php include("./footer.php"); ?>