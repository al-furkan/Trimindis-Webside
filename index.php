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
    <link rel="stylesheet" href="./css/home.css">
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
    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white">
        <div class="container">
            <h1 class>Empowering lives through transformative IT solutions,
                convenient
                lifestyle services, and impactful mental health support.</h1>
            <hr style=" width: 90%;border-top: 1px solid rgba(255, 255, 255, 0.25);">
            <div class="sr d-flex justify-content-between align-items-center mt-4">
                <p>At Trimindis, we believe in improving lives by providing
                    personalized solutions across various domains.</p>
                <a href="./Services.php" class="btn">Our Services →</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us-section py-5">
        <div class="container text-white">
            <div class="hr">
                <h2 class="section-title">About Us</h2>
            </div>

            <p class="section-text">
                TriMindis is more than just a business conglomerate; we are a
                vision-driven enterprise committed to transforming ideas into
                impactful realities. Rooted in innovation and guided by values, we
                strive to deliver excellence across all our ventures – technology,
                creativity, and strategy. With a global outlook and local expertise,
                we empower businesses to thrive in an ever-changing world.
            </p>
            <a href="./aboutUs.php" class="btn btn-learn-more mt-3">Learn More
                →</a>
        </div>
    </section>

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

    <!-- what we Offer 

    <section class="container py-5">
      <div class="ht">
        <h2 class="titl">What We Offer</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-card">
            <div class="icon"><img src="./image/icon2.png" alt></div>
            <h4>Technology Solutions</h4>
            <p>Streamline your business operations with tailored IT
              solutions.</p>
            <button class="btn btn-custom2">View Services →</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <div class="icon"><img src="./image/icon1.png" alt></div>
            <h4>Creative Design</h4>
            <p>Enhance your brand with world-class UI/UX and visual
              storytelling.</p>
            <button class="btn btn-custom2">View Services →</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <div class="icon"><img src="./image/icon3.png" alt></div>
            <h4>Strategic Growth</h4>
            <p>Amplify your presence with targeted marketing strategies.</p>
            <button class="btn btn-custom2">View Services →</button>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <button class="btn btnls btn-custom2">Discover Our Services →</button>
      </div>
    </section> -->

    <section class="project">
        <div class="container mt-5">
            <div class="d-flex  header">
                <h1 class="text-center" style="margin-bottom: 60px;"> Our
                    Projects</h1>
            </div>
            <div class=" row">
                <div class="col-md-6 portfolio-item">
                    <img src="./image/Health-track app.jpg" alt="Health Track App" class="img-fluid">
                    <div class="d-flex justify-content-between cn">
                        <h5>Health Track App</h5>
                        <a href="./WebDesign.php" class="view-project">VIEW FULL PROJECT
                            →</a>
                    </div>

                </div>
                <div class="col-md-6 portfolio-item" style="margin-top: 100px;">
                    <img src="./image/Personal-Protfolio.jpg" alt="Personal Portfolio" class="img-fluid">
                    <div class="d-flex justify-content-between cn">
                        <h5>Personal Portfolio</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                    </div>
                </div>
                <div class="col-md-6 portfolio-item">
                    <img src="./image/E-commerce-App.jpg" alt="E-commerce App" class="img-fluid">
                    <div class="d-flex justify-content-between cn">
                        <h5>E-commerce App</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                    </div>
                </div>
                <div class="col-md-6 portfolio-item" style="margin-top: 100px;">
                    <img src="./image/watch-ui.jpg" alt="Watch UI" class="img-fluid">
                    <div class="d-flex justify-content-between cn">
                        <h5>Watch UI</h5>
                        <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project Section End  -->

    <section class="container projects-section">
        <div class="text-white">

        </div>
        <div class="scroll-container">

            <div class="project-card">

                <div class="project-info ">
                    <h5>Mobile App</h5>
                    <p>Latest health tracking application. →</p>
                </div>
            </div>

            <div class="project-card">

                <div class="project-info">
                    <h5>E-commerce Platform</h5>
                    <p>Modern shopping experience. →</p>
                </div>
            </div>
            <div class="project-card">

                <div class="project-info">
                    <h5>Business Website</h5>
                    <p>Innovative corporate solutions. →</p>
                </div>
            </div>
            <div class="project-card">

                <div class="project-infol">
                    <h5>View All Projects →</h5>
                </div>
            </div>
        </div>
    </section>

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
                                    “Working with them was the greatest collaboration I have had
                                    so
                                    far.
                                    As <strong>35% increase in my business profit</strong>. Must
                                    Recommendation.”
                                </p>
                            </blockquote>

                            <!-- Client Info -->
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <img src="./image/ede9882a5b3a88ed2fd85ce47144b493.png" alt="Client Image"
                                    class="rounded-circle me-3" width="88" height="88">
                                <div class="dis">
                                    <h5 class="mx-0">Petite Dianka</h5>
                                    <small>International Strategy and <br> Operations Manager,
                                        Wolt</small>
                                </div>
                            </div>
                        </div>
                        <div class="slide mx-auto">
                            <!-- Testimonial Quote -->
                            <blockquote class="blockquote mx-auto">
                                <p class="mb-4">
                                    “Working with them was the greatest collaboration I have had
                                    so
                                    far.
                                    As <strong>35% increase in my business profit</strong>. Must
                                    Recommendation.”
                                </p>
                            </blockquote>

                            <!-- Client Info -->
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <img src="./image/ede9882a5b3a88ed2fd85ce47144b493.png" alt="Client Image"
                                    class="rounded-circle me-3" width="88" height="88">
                                <div class="dis">
                                    <h5 class="mb-0">Petite Dianka</h5>
                                    <small>International Strategy and <br> Operations Manager,
                                        Wolt</small>
                                </div>
                            </div>
                        </div>
                        <div class="slide  mx-auto">
                            <!-- Testimonial Quote -->
                            <blockquote class="blockquote mx-auto">
                                <p class="mb-4">
                                    “Working with them was the greatest collaboration I have had
                                    so
                                    far.
                                    As <strong>35% increase in my business profit</strong>. Must
                                    Recommendation.”
                                </p>
                            </blockquote>

                            <!-- Client Info -->
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <img src="./image/ede9882a5b3a88ed2fd85ce47144b493.png" alt="Client Image"
                                    class="rounded-circle me-3" width="88" height="88">
                                <div class="dis">
                                    <h5 class="mb-0">Petite Dianka</h5>
                                    <small>International Strategy and <br> Operations Manager,
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

    <!-- <section class="container blog-section">

      <div class="d-flex justify-content-between mb-3">
        <h2 class="text-sm-left mb-4">Upper Blog & Articles</h2>
        <a href="./Blog.php"><button class="btn btn-secondary">More
            Blogs</button></a>
      </div>
      <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="blog-card">
                  <img src="./image/blog2 (1).png" alt="SEO Strategy">
                  <div class="blog-content">
                    <h5 class="blog-title">SEO is not about overnight results.
                      It's a long-term strategy.</h5>
                    <p class="author-info">By K.M Arafat - Jan 15, 2025 - 5 min
                      read</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="blog-card">
                  <img src="./image/blog2 (2).png" alt="UI/UX Design">
                  <div class="blog-content">
                    <h5 class="blog-title">Top UI/UX Design Hacks You Must Learn
                      in 2025!</h5>
                    <p class="author-info">By Md. Marzur Islam - Jan 16, 2025 -
                      8 min read</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="blog-card">
                  <img src="./image/blog2 (1).png" alt="Marketing Trends">
                  <div class="blog-content">
                    <h5 class="blog-title">Latest Marketing Trends for 2025</h5>
                    <p class="author-info">By John Doe - Jan 18, 2025 - 6 min
                      read</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="blog-card">
                  <img src="./image/blog2 (1).png" alt="Content Strategy">
                  <div class="blog-content">
                    <h5 class="blog-title">Building a Winning Content
                      Strategy</h5>
                    <p class="author-info">By Jane Smith - Jan 20, 2025 - 7 min
                      read</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button"
          data-bs-target="#blogCarousel" data-bs-slide>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
          data-bs-target="#blogCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section> -->

    <section class="container blog-section">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-sm-left mb-4">Upper Blog & Articles</h2>
            <a href="./Blog.php">
                <button class="btn btn-secondary">More Blogs</button>
            </a>
        </div>

        <div class="base-template">
            <div class="wrapper base-template__wrapper">

                <div class="base-template__content">
                    <div class="emotions-slider">

                        <!-- Slider Navigation -->

                        <div class="emotions-slider__nav slider-nav">
                            <div tabindex="0" class="slider-nav__item slider-nav__item_prev">
                                <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 26L2 14L14 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div tabindex="0" class="slider-nav__item slider-nav__item_next">
                                <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 26L14 14L2 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- Slider Content -->

                        <div class="emotions-slider__slider swiper">
                            <div class="emotions-slider__wrapper swiper-wrapper">

                                <!-- Slider: Slide 1 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__image">
                                            <img src="./image/webDesign.jpg" alt="Winds of Change" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">Jan 15,
                                                        2025</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="./image/blog_post1.jpg" alt="Andrew Kelman" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Andrew Kelman
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Winds of Change
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    Gentle pink and blue hues remind us of moments when
                                                    everything changes for the better.
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <p class="author-info">By K.M Arafat - Jan 15,
                                                    2025 - 5 min
                                                    read</p>
                                            </div>
                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 2 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__badge">Popular Now</div>

                                        <div class="emotions-slider-item__image">
                                            <img src="./image/E-commerce-App.jpg" alt="Flames of Passion" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price"> </div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-2.jpg"
                                                                alt="Alex Bilyk" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Alex Bilyk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Flames of Passion
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    This piece represents the fire of inspiration
                                                    burning
                                                    within us all. Feel the warmth of emotions in a
                                                    swirl
                                                    of red and yellow tones.
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <p class="author-info">By K.M Arafat - Jan 15,
                                                    2025 - 5 min
                                                    read</p>
                                            </div>
                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 3 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__image">
                                            <img src="./image/1b9c460a19ee3114811b6bab4749a92b.png"
                                                alt="Oceans of Serenity" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$225</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-3.jpg"
                                                                alt="Inna Grande" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Inna Grande
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Oceans of Serenity
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    Immerse yourself in the depths of calm and harmony.
                                                    Blue waves of art take you into a world of
                                                    meditation
                                                    and inner balance.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 4 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__image">
                                            <img src="./image/blog2 (1).png" alt="Winds of Change" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$175</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-1.jpg"
                                                                alt="Andrew Kelman" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Andrew Kelman
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Winds of Change
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    Gentle pink and blue hues remind us of moments when
                                                    everything changes for the better.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 5 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__badge">Popular Now</div>

                                        <div class="emotions-slider-item__image">
                                            <img src="./image/DigitalMarkting.jpg" alt="Flames of Passion" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$270</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-2.jpg"
                                                                alt="Alex Bilyk" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Alex Bilyk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Flames of Passion
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    This piece represents the fire of inspiration
                                                    burning
                                                    within us all. Feel the warmth of emotions in a
                                                    swirl
                                                    of red and yellow tones.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 6 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__image">
                                            <img src="./image/Real-stateWebsite.jpg" alt="Oceans of Serenity" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$225</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-3.jpg"
                                                                alt="Inna Grande" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Inna Grande
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Oceans of Serenity
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    Immerse yourself in the depths of calm and harmony.
                                                    Blue waves of art take you into a world of
                                                    meditation
                                                    and inner balance.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 7 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__image">
                                            <img src="./image/singleproduvt.jpg" alt="Winds of Change" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$175</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-1.jpg"
                                                                alt="Andrew Kelman" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Andrew Kelman
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Winds of Change
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    Gentle pink and blue hues remind us of moments when
                                                    everything changes for the better.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 8 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__badge">Popular Now</div>

                                        <div class="emotions-slider-item__image">
                                            <img src="./image/blog2 (1).png" alt="Flames of Passion" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$270</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-2.jpg"
                                                                alt="Alex Bilyk" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Alex Bilyk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Flames of Passion
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    This piece represents the fire of inspiration
                                                    burning
                                                    within us all. Feel the warmth of emotions in a
                                                    swirl
                                                    of red and yellow tones.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider: Slide 9 -->

                                <div class="emotions-slider__slide swiper-slide">
                                    <div class="emotions-slider__item emotions-slider-item">
                                        <div class="emotions-slider-item__image">
                                            <img src="./image/DigitalMarkting.jpg" alt="Oceans of Serenity" />
                                        </div>

                                        <div class="emotions-slider-item__content">
                                            <div class="emotions-slider-item__header">
                                                <div class="emotions-slider-item__header-inner">
                                                    <div class="emotions-slider-item__price">$225</div>
                                                    <div class="emotions-slider-item__author">
                                                        <div class="emotions-slider-item__author-image">
                                                            <img src="https://bato-web-agency.github.io/bato-shared/img/slider-1/author-3.jpg"
                                                                alt="Inna Grande" />
                                                        </div>
                                                        <div class="emotions-slider-item__author-name">
                                                            Inna Grande
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__info">
                                                <h2 class="emotions-slider-item__title">
                                                    Oceans of Serenity
                                                </h2>
                                                <div class="emotions-slider-item__text">
                                                    Immerse yourself in the depths of calm and harmony.
                                                    Blue waves of art take you into a world of
                                                    meditation
                                                    and inner balance.
                                                </div>
                                            </div>

                                            <div class="emotions-slider-item__footer">
                                                <a class="emotions-slider-item__btn" href="/"
                                                    onclick="event.preventDefault();">
                                                    <span class="emotions-slider-item__btn-text">View
                                                        more</span>
                                                    <span class="emotions-slider-item__btn-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Pagination -->

                        <div class="emotions-slider__pagination slider-pagination"></div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- blog Slide Section  end  -->

    <!--====================  blog Slide Section   new start  =====================  -->

    <!--====================   blog Slide Section   new end  =======================--><?php  include('./footer.php');?>