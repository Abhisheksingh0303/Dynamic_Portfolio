<?php require('connection/db_connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Personal Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM `portfolio` WHERE `portfolio`.`id` = $id";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_assoc($result);

  $category = $data['category'];
  $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
  $category_result = mysqli_query($db, $category_sql);
  $category_data = mysqli_fetch_assoc($category_result);
}

?>
    <main id="main">

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div id="project-image"> <!-- This div will display the project image -->
                                    <img src="images/<?=$data['image']?>" alt=""  style="width: 100%;">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h3><?=$data['title']?></h3>
                        <ul>
                            <li><strong>Category</strong>: <?=$category_data['name']?></li>
                            <li><strong>Technologies</strong>: <?=$data['client']?></li>
                            <li><strong>Project date</strong>: <?php echo date('D M Y', strtotime($data['project_date']))?></li>
                            <li><strong>Project URL</strong>: <a href="<?=$data['url']?>" target="_blank"><?=$data['url']?></a></li>

                        </ul>

                        <p>
                            <?=$data['text']?>
                        </p>
                    </div>

                </div>

            </div>
        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Include Lightbox CSS and JavaScript -->
    <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Initialize Lightbox -->
    <script>
        $(document).ready(function() {
            // Initialize lightbox for portfolio images
            $('[data-gallery="portfolioGallery"]').each(function() {
                $(this).glightbox();
            });

            // Initialize lightbox for portfolio details
            $('[data-gallery="portfolioDetailsGallery"]').each(function() {
                $(this).glightbox({
                    type: 'external'
                });
            });
        });

        // JavaScript code to update the project image when the link icon is clicked
        document.addEventListener('DOMContentLoaded', function () {
            const linkIcon = document.querySelector('.portfolio-details-lightbox');
            const projectImage = document.getElementById('project-image').querySelector('img');

            // Add a click event listener to the link icon
            linkIcon.addEventListener('click', function (e) {
                e.preventDefault();
                // Get the image source from the clicked project's data-image attribute
                const newImageSrc = this.getAttribute('data-image');
                // Update the project image source
                projectImage.src = newImageSrc;
            });
        });
    </script>
</body>

</html>
