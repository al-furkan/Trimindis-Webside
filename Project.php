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
    <link rel="stylesheet" href="./css/project.css">
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


    <?php
//     include('./admin/db.php');
//     // Fetch projects from database
//     $sql = "SELECT title, img, link FROM project";
//     $result = $conn->query($sql);
//     ?>

    <section class="project">
        <div class="container mt-5">
            <div class="d-flex header">
                <div class="hr"></div>
                <h2 class="text-center">Our Projects</h2>
                <div class="hr"></div>
            </div>
            <div class="row">
                <?php
//             if ($result->num_rows > 0) {
//                 $counter = 0;
//                 while ($row = $result->fetch_assoc()) {
//                     $title = htmlspecialchars($row['title']);
//                     $img = htmlspecialchars($row['img']);
//                     $link = htmlspecialchars($row['link']);
                    
//                     // Add margin-top for every second project
//                     $marginClass = ($counter % 2 == 1) ? 'mt-4' : '';

//                     echo "
//                     <div class='col-md-6 portfolio-item $marginClass'>
//                         <img src='./admin/project/$img' alt='$title'>
//                         <div class='d-flex justify-content-between cn'>
//                             <h5>$title</h5>
//                             <a href='$link' class='view-project'>VIEW FULL PROJECT →</a>
//                         </div>
//                     </div>";
                    
//                     $counter++;
//                 }
//             } else {
//                 echo "<p class='text-center'>No projects available.</p>";
//             }
             ?>
                <!-- //             </div>
//         </div>
//     </section> -->

                <?php
// // Close connection
// $conn->close();
?>


                <div class="container mt-5">
                    <!-- <div class="d-flex  header">
                <div class="hr"></div>
                <h2 class="text-center"> Our Projects</h2>
                <div class="hr"></div>
            </div> -->
                    <div class="row">
                        <div class="col-md-6 portfolio-item">
                            <img src="./image/Health-track app.jpg" alt="Health Track App">
                            <div class="d-flex justify-content-between cn">
                                <h5>Health Track App</h5>
                                <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                            </div>

                        </div>
                        <div class="col-md-6 portfolio-item" style="margin-top: 100px;">
                            <img src="./image/Personal-Protfolio.jpg" alt="Personal Portfolio">
                            <div class="d-flex justify-content-between cn">
                                <h5>Personal Portfolio</h5>
                                <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                            </div>
                        </div>
                        <div class="col-md-6 portfolio-item">
                            <img src="./image/E-commerce-App.jpg" alt="E-commerce App">
                            <div class="d-flex justify-content-between cn">
                                <h5>E-commerce App</h5>
                                <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                            </div>
                        </div>
                        <div class="col-md-6 portfolio-item" style="margin-top: 100px;">
                            <img src="./image/watch-ui.jpg" alt="Watch UI">
                            <div class="d-flex justify-content-between cn">
                                <h5>Watch UI</h5>
                                <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                            </div>
                        </div>
                        <div class="col-md-6 portfolio-item">

                            <img src="./image/Real-stateWebsite.jpg" alt="Real-estate Website">
                            <div class="d-flex justify-content-between cn">
                                <h5>Real-estate Website</h5>
                                <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                            </div>
                        </div>
                        <div class="col-md-6 portfolio-item" style="margin-top: 100px;">
                            <img src="./image/singleproduvt.jpg" alt="Single Product App">
                            <div class="d-flex justify-content-between cn">
                                <h5>Single Product App</h5>
                                <a href="#" class="view-project">VIEW FULL PROJECT →</a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <?php include('./footer.php');?>