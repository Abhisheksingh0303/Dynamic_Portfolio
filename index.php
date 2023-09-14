<?php
include 'includes/header.php';
require 'connection/db_connection.php';
$query = "SELECT * FROM home, section_control, social_media, about, personal_info, skills";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
    <?= $user_data['title'] ?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  
  <!-- Favicons -->


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
  <!-- Custom CSS -->
  <style>
    /* Add custom CSS for the layout */
    /* .video-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    #video-bg {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
    } */

    .content {
      margin-top: 100px;
      padding: 20px;
    }
  </style>
</head>

<body>


  <!-- <div class="video-container">
  <video autoplay muted loop id="video-bg">
    <source src="video.mp4#t=9,19" type="video/mp4">
  </video>
</div> -->


  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="images/<?= $user_data['profile_pic'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>
            <?= $user_data['about_title'] ?>
          </h3>
          <p class="fst-italic">
            <?= $user_data['about_subtitle'] ?>
          </p>

          <div class="row">
            <?php
            $query2 = "SELECT * FROM personal_info";
            $run2 = mysqli_query($db, $query2);
            $counter = 0;
            while ($personal_info = mysqli_fetch_array($run2)) {
              if ($counter % 2 == 0) {
                echo '<div class="row">';
              }
              ?>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>
                      <?= $personal_info['info_title'] ?>:
                    </strong> <span>
                      <?= $personal_info['info_desc'] ?>
                    </span></li>
                </ul>
              </div>
              <?php
              if ($counter % 2 != 0 || $counter == mysqli_num_rows($run2) - 1) {
                echo '</div>';
              }
              $counter++;
            }
            ?>
          </div>

          <p>
            <?= $user_data['about_desc'] ?>
          </p>
        </div>
      </div>
    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">
      <div class="row">
        <?php
        // Retrieve the counter values from the database
        $counterQuery = "SELECT * FROM counter";
        $counterResult = mysqli_query($db, $counterQuery);

        while ($counterData = mysqli_fetch_array($counterResult)) {
          $counterId = $counterData['id'];
          $counterTitle = $counterData['counter_title'];
          $counterIcon = $counterData['counter_icon'];
          $preValue = $counterData['pre'];
          $postValue = $counterData['post'];

          // Calculate the difference between pre and post values
          $difference = $postValue - $preValue;
          ?>
          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box">
              <i class="<?= $counterIcon ?>"></i>
              <span data-purecounter-start="<?= $preValue ?>" data-purecounter-end="<?= $postValue ?>"
                data-purecounter-duration="1" class="purecounter"></span>
              <p>
                <?= $counterTitle ?>
              </p>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div><!-- End Counts -->

    <!-- ======= Skills ======= -->
    <div class="skills container">
      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">
        <?php
        // Retrieve the skill details from the database
        $skillQuery = "SELECT * FROM skills";
        $skillResult = mysqli_query($db, $skillQuery);

        $counter = 0; // Counter to keep track of the number of skills
        
        while ($skillData = mysqli_fetch_array($skillResult)) {
          $skillName = $skillData['skill_name'];
          $skillLevel = $skillData['skill_level'];

          // Create a new row after every two skills
          if ($counter % 2 == 0 && $counter > 0) {
            echo '</div><div class="row skills-content">';
          }
          ?>

          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">
                <?= $skillName ?><i class="val">
                  <?= $skillLevel ?>%
                </i>
              </span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skillLevel ?>" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <?php
          $counter++;
        }

        // Add empty divs to complete the 2x2 grid if there are an odd number of skills
        if ($counter % 2 != 0) {
          echo '<div class="col-lg-6"></div>';
        }
        ?>
      </div>
    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">
      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <?php
        $query3 = "SELECT * FROM interests";
        $run3 = mysqli_query($db, $query3);
        if ($run3->num_rows > 0) {
          while ($query3_row = $run3->fetch_assoc()) {
            ?>
            <div class="col-lg-3 col-md-4 mt-5">
              <div class="icon-box">
                <i class="<?= $query3_row['interest_icon'] ?>" style="color: #<?= $query3_row['color'] ?>;"></i>
                <h3>
                  <?= $query3_row['interest_title'] ?>
                </h3>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div><!-- End Interests -->
  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">
      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <?php
            // Retrieve the summary data from the database
            $summaryQuery = "SELECT name, description FROM summary";
            $summaryResult = mysqli_query($db, $summaryQuery);

            if ($summaryResult && mysqli_num_rows($summaryResult) > 0) {
              $summaryRow = mysqli_fetch_assoc($summaryResult);
              $summaryName = $summaryRow['name'];
              $summaryDescription = $summaryRow['description'];

              // Generate the HTML dynamically
              echo "<h4>" . $summaryName . "</h4>";
              echo "<p><em>" . $summaryDescription . "</em></p>";
            }
            ?>
            <!-- Inside the div with class "resume-item pb-0" -->
            <?php
            // Retrieve the contact information from the database
            $contactQuery = "SELECT * FROM contact_info";
            $contactResult = mysqli_query($db, $contactQuery);

            if ($contactResult && mysqli_num_rows($contactResult) > 0) {
              $contactRow = mysqli_fetch_assoc($contactResult);
              $contactAddress = $contactRow['address'];
              $contactPhone = $contactRow['phone'];
              $contactEmail = $contactRow['email'];

              // Generate the HTML dynamically
              echo "<p>";
              echo "<ul>";
              echo "<li>" . $contactAddress . "</li>";
              echo "<li>" . $contactPhone . "</li>";
              echo "<li>" . $contactEmail . "</li>";
              echo "</ul>";
              echo "</p>";
            }
            ?>
          </div>

          <h3 class="resume-title">Education</h3>
          <?php
          // Retrieve the education data from the database
          $educationQuery = "SELECT * FROM education";
          $educationResult = mysqli_query($db, $educationQuery);

          if ($educationResult && mysqli_num_rows($educationResult) > 0) {
            while ($educationRow = mysqli_fetch_assoc($educationResult)) {
              $educationTitle = $educationRow['title'];
              $educationDate = $educationRow['date'];
              $educationLocation = $educationRow['location'];
              $educationDescription = $educationRow['description'];

              // Generate the HTML dynamically
              echo "<div class='resume-item'>";
              echo "<h4>" . $educationTitle . "</h4>";
              echo "<h5>" . $educationDate . "</h5>";
              echo "<p><em>" . $educationLocation . "</em></p>";
              echo "<p>" . $educationDescription . "</p>";
              echo "</div>";
            }
          }
          ?>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <?php
          // Retrieve the professional experience data from the database
          $experienceQuery = "SELECT * FROM experience";
          $experienceResult = mysqli_query($db, $experienceQuery);

          if ($experienceResult && mysqli_num_rows($experienceResult) > 0) {
            while ($experienceRow = mysqli_fetch_assoc($experienceResult)) {
              $experienceTitle = $experienceRow['title'];
              $experienceDate = $experienceRow['date'];
              $experienceLocation = $experienceRow['location'];
              $experienceDescription = $experienceRow['description'];

              // Generate the HTML dynamically
              echo "<div class='resume-item'>";
              echo "<h4>" . $experienceTitle . "</h4>";
              echo "<h5>" . $experienceDate . "</h5>";
              echo "<p><em>" . $experienceLocation . "</em></p>";
              echo "<p>" . $experienceDescription . "</p>";
              echo "</div>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section><!-- End Resume Section -->



  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <?php
      $services = "SELECT * FROM `services`";
      $services_result = mysqli_query($db, $services);
      ?>


      <div class="row">
        <?php
        $query3 = "SELECT * FROM interests";
        $run3 = mysqli_query($db, $query3);
        if ($services_result->num_rows > 0) {
          while ($services_data = $services_result->fetch_assoc()) {
            ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="<?= $services_data['icon'] ?>"></i></div>
                <h4><a href="">
                    <?= $services_data['title'] ?>
                  </a></h4>
                <p>
                  <?= $services_data['text'] ?>
                </p>
              </div>
            </div>
            <?php
          }
        } else {
          echo "Sorry, No Services Found";
        }
        ?>
      </div>
    </div>
    </div>
  </section><!-- End Services Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Projects</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
            $cat_list = "SELECT * FROM `category`";
            $cat_result = mysqli_query($db, $cat_list);
            if ($cat_result->num_rows > 0) {
              while ($cat_data = $cat_result->fetch_assoc()) {
                ?>
                <li data-filter=".<?php echo $cat_data['name'] ?>"><?php echo $cat_data['name'] ?></li>
                <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
        $portfolio = "SELECT * FROM `portfolio`";
        $portfolio_result = mysqli_query($db, $portfolio);

        if ($portfolio_result->num_rows > 0) {
          while ($portfolio_data = $portfolio_result->fetch_assoc()) {
            $category = $portfolio_data['category'];
            $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
            $category_result = mysqli_query($db, $category_sql);
            $category_data = mysqli_fetch_assoc($category_result);
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item <?= $category_data['name'] ?>">
              <div class="portfolio-wrap">
                <img src="images/<?= $portfolio_data['image'] ?>" class="img-fluid" alt="<?= $portfolio_data['title'] ?>">
                <div class="portfolio-info">
                  <h4>
                    <?= $portfolio_data['title'] ?>
                  </h4>
                  <p>
                    <?= $category_data['name'] ?>
                  </p>
                  <div class="portfolio-links">
                    <!-- Lightbox button -->
                    <a href="images/<?= $portfolio_data['image'] ?>" data-gallery="portfolioGallery"
                      class="portfolio-lightbox" title="<?= $portfolio_data['title'] ?>"><i class="bx bx-plus"></i></a>
                    <!-- Link to project details -->
                    <a href="portfolio-details.php?id=<?php echo $portfolio_data['id'] ?>"
                      data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                      class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        } else {
          echo "No Portfolio Found.";
        }
        ?>
      </div>

    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- Include Lightbox CSS and JavaScript -->
  <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Initialize Lightbox -->
  <script>
    $(document).ready(function () {
      // Initialize lightbox for portfolio images
      $('[data-gallery="portfolioGallery"]').each(function () {
        $(this).glightbox();
      });

      // Initialize lightbox for portfolio details
      $('[data-gallery="portfolioDetailsGallery"]').each(function () {
        $(this).glightbox({
          type: 'external'
        });
      });
    });
  </script>




<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">
    <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Me</p>
    </div>
    <div class="row mt-2">
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h3>My Address</h3>
          <?php
          // Retrieve the contact information from the database
          $contactQuery = "SELECT * FROM contact_info";
          $contactResult = mysqli_query($db, $contactQuery);

          if ($contactResult && mysqli_num_rows($contactResult) > 0) {
            $contactRow = mysqli_fetch_assoc($contactResult);
            $contactAddress = $contactRow['address'];

            // Generate the HTML dynamically
            echo "<p> $contactAddress </p>";
          }
          ?>
        </div>
      </div>

      <?php if ($user_data['showicons']) {
        $socialMediaQuery = "SELECT * FROM social_media";
        $socialMediaResult = mysqli_query($db, $socialMediaQuery);
        $socialMediaData = mysqli_fetch_all($socialMediaResult, MYSQLI_ASSOC);
        ?>
        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php
              if ($user_data['showicons']) {
                $count = 0;
                foreach ($socialMediaData as $socialMedia) {
                  if ($count < 4) {
                    echo '<a href="' . $socialMedia['link'] . '" class="' . $socialMedia['name'] . '"><i class="bi bi-' . $socialMedia['name'] . '"></i></a>';
                    $count++;
                  }
                }
              }
              ?>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          <h3>Email Me</h3>
          <?php
          // Retrieve the contact information from the database
          $contactQuery = "SELECT * FROM contact_info";
          $contactResult = mysqli_query($db, $contactQuery);

          if ($contactResult && mysqli_num_rows($contactResult) > 0) {
            $contactRow = mysqli_fetch_assoc($contactResult);
            $contactEmail = $contactRow['email'];

            // Generate the HTML dynamically
            echo "<p> $contactEmail </p>";
          }
          ?>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-phone-call"></i>
          <h3>Call Me</h3>

          <?php
          // Retrieve the contact information from the database
          $contactQuery = "SELECT * FROM contact_info";
          $contactResult = mysqli_query($db, $contactQuery);

          if ($contactResult && mysqli_num_rows($contactResult) > 0) {
            $contactRow = mysqli_fetch_assoc($contactResult);
            $contactPhone = $contactRow['phone'];

            // Generate the HTML dynamically
            echo "<p> $contactPhone </p>";
          }
          ?>
        </div>
      </div>
    </div>

    <?php
$success_message = "";
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['send_message'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $subject = mysqli_real_escape_string($db, $_POST['subject']);
        $message = mysqli_real_escape_string($db, $_POST['message']);

        $contact_form = "INSERT INTO contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($db, $contact_form);
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $subject, $message);

        if (mysqli_stmt_execute($stmt)) {
            $success_message = "Your message has been sent. Thank you!";
        } else {
            $error_message = "Error: " . mysqli_error($db);
        }

        mysqli_stmt_close($stmt);
    }
}
?>

<div class="container contact-container">
    <div class="section-title">
        <p>Connect With Me</p>
    </div>

    <?php
    if (!empty($success_message)) {
        echo '<div class="alert alert-success">' . $success_message . '</div>';
    }
    if (!empty($error_message)) {
        echo '<div class="alert alert-danger">' . $error_message . '</div>';
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" role="form" class="contact-form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message" class="btn btn-success">Send Message</button></div>
    </form>
</div>

</section><!-- End Contact Section -->




  <?php include 'includes/footer.php' ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>