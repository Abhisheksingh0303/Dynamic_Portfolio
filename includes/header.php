<?php require('connection/db_connection.php');

$query = "SELECT * FROM home,section_control,social_media";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
// print_r($user_data);
?>


<!-- ======= Header ======= -->
<link rel="stylesheet" href="../assets/css/style.css">
<header id="header">
  <div class="container">
    <!-- Add an ID to the Hello text to make it easy to target with JavaScript -->
    <h5 id="hello-text" style="color: rgb(255 53 174);font-weight:bold;font-size:23px;text-shadow: 2px 0px 0px #ffffff;">Hello<span class="wave">👋</span>, I am </h5>
    <h1><a href="index.php"><?= $user_data['title'] ?></a></h1>
    <h2><?= $user_data['subtitle'] ?></h2>
    <br>

    <nav id="navbar" class="navbar">
      <ul>
        <!-- Add a data-section attribute to each link to specify the corresponding section -->
        <?php if ($user_data['home_section']) { ?>
          <li><a class="nav-link active" href="#header" data-section="home">Home</a></li>
        <?php } ?>

        <?php if ($user_data['about_section']) { ?>
          <li><a class="nav-link" href="#about" data-section="about">About</a></li>
        <?php } ?>

        <?php if ($user_data['resume_section']) { ?>
          <li><a class="nav-link" href="#resume" data-section="resume">Resume</a></li>
        <?php } ?>

        <?php if ($user_data['services_section']) { ?>
          <li><a class="nav-link" href="#services" data-section="services">Services</a></li>
        <?php } ?>

        <?php if ($user_data['portfolio_section']) { ?>
          <li><a class="nav-link" href="#portfolio" data-section="portfolio">Projects</a></li>
        <?php } ?>

        <?php if ($user_data['contact_section']) { ?>
          <li><a class="nav-link" href="#contact" data-section="contact">Contact</a></li>
        <?php } ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <?php
    if ($user_data['showicons']) {
      $socialMediaQuery = "SELECT * FROM social_media";
      $socialMediaResult = mysqli_query($db, $socialMediaQuery);
      $socialMediaData = mysqli_fetch_all($socialMediaResult, MYSQLI_ASSOC);
      ?>


      <div class="social-links">
        <?php foreach ($socialMediaData as $socialMedia) { ?>
          <a href="<?= $socialMedia['link'] ?>" class="<?= $socialMedia['name'] ?>"><i
              class="bi bi-<?= $socialMedia['name'] ?>"></i></a>
        <?php } ?>
      </div>

    <!-- Animated Download Button -->

<!-- Animated Download Button -->
<div id="download-container">
  <a href="../Abhishek Singh CV.doc" download class="download-button">Download CV</a>
</div>

<script>
  // Wait for the DOM to be fully loaded
  document.addEventListener("DOMContentLoaded", function () {
    // Get all navigation links
    const navLinks = document.querySelectorAll("#navbar a.nav-link");

    // Get the download container
    const downloadContainer = document.getElementById("download-container");

    // Function to handle the click event on navigation links
    function handleNavLinkClick(event) {
      // Check if the clicked link is the "Home" link
      const isHomeLink = event.target.getAttribute("href") === "#header";

      // If it's the "Home" link, show the download button; otherwise, hide it
      if (isHomeLink) {
        downloadContainer.style.display = "block";
      } else {
        downloadContainer.style.display = "none";
      }
    }

    // Add click event listeners to all navigation links
    navLinks.forEach(function (link) {
      link.addEventListener("click", handleNavLinkClick);
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
        const helloText = document.getElementById("hello-text");
        const navLinks = document.querySelectorAll("#navbar a.nav-link");

        function handleNavLinkClick(event) {
          const section = event.target.getAttribute("data-section");
          if (section === "home") {
            helloText.style.display = "block";
          } else {
            helloText.style.display = "none";
          }
        }

        navLinks.forEach(function (link) {
          link.addEventListener("click", handleNavLinkClick);
        });
      });
</script>


    <?php } ?>

  </div>
</header><!-- End Header -->


