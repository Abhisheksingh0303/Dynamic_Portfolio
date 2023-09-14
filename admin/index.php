<?php
session_start();
require('../connection/db_connection.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href = 'login.php';</script>";
}

$query = "SELECT * FROM home, section_control, social_media, about, personal_info, skills, site_background, seo,admin";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN | DASHBOARD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="image">
          <img src="../images/<?=$user_data['admin_profile']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$user_data['fullname']?></a>
        </div>
      </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php?sectioncontrol=true" class="nav-link">
              <i class="fa fa-th-large" aria-hidden="true"></i>
                <p>
                  SECTION CONTROL
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="index.php?homesetting=true" class="nav-link">
              <i class="fa fa-home" aria-hidden="true"></i>
                <p>
                  HOME SETTING
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="index.php?aboutsetting=true" class="nav-link">
              <i class="fa fa-question-circle" aria-hidden="true"></i>
                <p>
                  ABOUT SETTING
                </p>
              </a>
            </li>


            <li class="nav-item menu-open">
              <a href="index.php?resumesetting=true" class="nav-link">
              <i class="fa fa-briefcase" aria-hidden="true"></i>
                <p>
                  RESUME SETTING
                </p>
              </a>
            </li>


            <li class="nav-item menu-open">
              <a href="index.php?servicessetting=true" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i> <!-- This generates a cogwheel icon -->

                <p>
                  SERVICES SETTING
                </p>
              </a>
            </li>


            <li class="nav-item menu-open">
              <a href="index.php?projectssetting=true" class="nav-link">
              <i class="fa fa-desktop" aria-hidden="true"></i>
                <p>
                  PROJECTS SETTING
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="index.php?contactsetting=true" class="nav-link">
              <i class="fa fa-phone" aria-hidden="true"></i>
                <p>
                  CONTACT SETTING
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="index.php?changebackgroundsetting=true" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>

                <p>
                  CHANGE BACKGROUND                
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="index.php?seosettingsetting=true" class="nav-link">
              <i class="fa fa-search" aria-hidden="true"></i>
                <p>
                  SEO SETTING
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="index.php?accountsetting=true" class="nav-link">
              <i class="fa fa-user" aria-hidden="true"></i>

                <p>
                  ACCOUNT SETTING
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">SECTION CONTROL</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">

<?php if(isset($_GET['homesetting'])){ ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../admin/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Headline</label>
                    <input type="text" class="form-control" name="title" value="<?=$user_data['title']?>" id="exampleInputEmail1" placeholder="Enter headline">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subtitle</label>
                    <input type="text" class="form-control" name="subtitle" value="<?=$user_data['subtitle']?>" id="exampleInputPassword1" placeholder="Enter Subtile">
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" name="showicons" class="form-check-input" id="exampleCheck1" checked="">

                    <?php 
                    if($user_data['showicons']){
                    echo "checked";
                    }
                ?>    
                    
                    <label class="form-check-label" for="exampleCheck1">Show Social Icons</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home" class="btn btn-success">Save Changes</button>
                </div>
              </form>
            </div>



  <?php }else if(isset($_GET['aboutsetting'])){ ?>

    <div class="card card-primary col-lg-12">
  <div class="card-header">
    <h3 class="card-title">Update About</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <div class="card-body">
    <img src="../images/<?= $user_data['profile_pic'] ?>" class="col-2" alt="Profile Picture">
    <form role="form" action="../admin/admin.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="profile">About Profile Pic</label>
        <input type="file" class="form-control" name="profile" id="profile">
      </div>

      <div class="form-group">
        <label for="abouttitle">About Headline</label>
        <input type="text" class="form-control" name="abouttitle" value="<?= $user_data['about_title'] ?>" id="abouttitle" placeholder="Enter headline">
      </div>

      <div class="form-group">
        <label for="aboutsubtitle">About Subtitle</label>
        <input type="text" class="form-control" name="aboutsubtitle" value="<?= $user_data['about_subtitle'] ?>" id="aboutsubtitle" placeholder="Enter Subtitle">
      </div>

      <div class="form-group">
        <label for="aboutdesc">About Description</label><br>
        <textarea cols="50" rows="5" name="aboutdesc" id="aboutdesc"><?= $user_data['about_desc'] ?></textarea>
        <!-- Add the "name" and "id" attributes to the textarea -->
      </div>

      <!-- Add any other form fields or elements here if needed -->

      <div class="card-footer">
        <button type="submit" name="update-about" class="btn btn-success">Save Changes</button>
      </div>
    </form>
  </div>
  <!-- /.card-body -->
</div>



            

            <div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Skills</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Skills</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Skill Name</th>
                        <th>Skill Level</th>
                        <th style="width: 40px">Level</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM skills";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($skill = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><?= $skill['skill_name'] ?></td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" style="width: <?= $skill['skill_level'] ?>%"></div>
                                </div>
                                <span class="badge bg-danger"><?= $skill['skill_level'] ?>%</span>
                            </td>
                            <td>
                                <a href="../admin/deleteskill.php?id=<?= $skill['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Skill Name</label>
                <input type="text" class="form-control" name="skillname">
            </div>

            <div class="form-group col-6">
                <label for="exampleInputEmail1">Skill Level</label>
                <input type="range" min="1" max="100" class="form-control" name="skilllevel" id="exampleInputEmail1" placeholder="Enter headline">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-skill" class="btn btn-success">Add Skills</button>
            </div>
        </div>
    </form>
</div>





<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Project Counter</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Project Counter</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Icon</th>
                        <th>Project Name</th>
                        <th>No. of Projects</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM counter";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($counter = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><i class="<?= $counter['counter_icon'] ?>"></i></td>
                            <td><?= $counter['counter_title'] ?></td>
                            <td><?= $counter['post'] ?></td>
                            <td>
                                <a href="../admin/delete_counter.php?id=<?= $counter['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="iconInput">Icon</label>
                <input type="text" class="form-control" name="counter_icon" id="iconInput" placeholder="E.g., bi bi-headset">
            </div>

            <div class="form-group col-6">
                <label for="projectNameInput">Project Name</label>
                <input type="text" class="form-control" name="project_name" id="projectNameInput" placeholder="Enter project name">
            </div>

            <div class="form-group col-6">
                <label for="projectCountInput">No. of Projects</label>
                <input type="number" min="0" class="form-control" name="project_count" id="projectCountInput" placeholder="Enter number of projects">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-counter" class="btn btn-success">Add Project Counter</button>
            </div>
        </div>
    </form>
</div>




<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Interests</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Interests</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Icon</th>
                        <th>Interest Title</th>
                        <th>Color</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM interests";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($interest = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><i class="<?= $interest['interest_icon'] ?>"></i></td>
                            <td><?= $interest['interest_title'] ?></td>
                            <td style="color: #<?= $interest['color'] ?>"><?= $interest['color'] ?></td>
                            <td>
                                <a href="../admin/delete_interest.php?id=<?= $interest['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="iconInput">Icon</label>
                <input type="text" class="form-control" name="interest_icon" id="iconInput" placeholder="E.g., ri-base-station-line">
            </div>

            <div class="form-group col-6">
                <label for="interestTitleInput">Interest Title</label>
                <input type="text" class="form-control" name="interest_title" id="interestTitleInput" placeholder="Enter interest title">
            </div>

            <div class="form-group col-6">
                <label for="colorInput">Color</label>
                <input type="color" class="form-control" name="interest_color" id="colorInput">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-interest" class="btn btn-success">Add Interest</button>
            </div>
        </div>
    </form>
</div>





<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Personal Info</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Personal Info</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Info Title</th>
                        <th>Info Description</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM personal_info";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($info = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><?= $info['info_title'] ?></td>
                            <td><?= $info['info_desc'] ?></td>
                            <td>
                                <a href="../admin/delete_info.php?id=<?= $info['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="infoTitleInput">Info Title</label>
                <input type="text" class="form-control" name="info_title" id="infoTitleInput" placeholder="E.g., Name">
            </div>

            <div class="form-group col-6">
                <label for="infoDescInput">Info Description</label>
                <input type="text" class="form-control" name="info_desc" id="infoDescInput" placeholder="Enter info description">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-info" class="btn btn-success">Add Personal Info</button>
            </div>
        </div>
    </form>
</div>



  <?php
  }else if(isset($_GET['resumesetting'])){
    
    ?>

<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Resume Info</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
            <ul class="nav nav-tabs" id="resumeTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">Professional Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="summary-tab" data-toggle="tab" href="#summary" role="tab" aria-controls="summary" aria-selected="false">Summary</a>
                </li>
            </ul>

            <div class="tab-content" id="resumeTabContent">
                <!-- Education Section -->
                <div class="tab-pane fade show active" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <!-- Add your code for Education section here -->
                    <?php include 'education_form.php'; ?>
                </div>

                <!-- Professional Experience Section -->
                <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <!-- Add your code for Experience section here -->
                    <?php include 'experience_form.php'; ?>
                </div>

                <!-- Summary Section -->
                <div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                    <!-- Add your code for Summary section here -->
                    <?php include 'summary_form.php'; ?>
                </div>
            </div>
        </div>
    </div>


        </div>
    </form>
</div>


<?php
  }else if(isset($_GET['servicessetting'])){
    ?>

<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Services</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Services List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM services";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($service = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><?= $service['icon'] ?></td>
                            <td><?= $service['title'] ?></td>
                            <td><?= $service['text'] ?></td>
                            <td>
                                <a href="../admin/delete_service.php?id=<?= $service['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="iconInput">Icon</label>
                <input type="text" class="form-control" name="icon" id="iconInput" placeholder="E.g., bx bxl-dribbble">
            </div>

            <div class="form-group col-6">
                <label for="titleInput">Title</label>
                <input type="text" class="form-control" name="title" id="titleInput" placeholder="Enter service title">
            </div>

            <div class="form-group col-6">
                <label for="textInput">Text</label>
                <input type="text" class="form-control" name="text" id="textInput" placeholder="Enter service text">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-service" class="btn btn-success">Add Service</button>
            </div>
        </div>
    </form>
</div>



<?php
  }else if(isset($_GET['projectssetting'])){
    ?>

<?php
// Include the database connection file
include("../connection/db_connection.php"); // Adjust the path as needed

// Function to get category name by ID
function getCategoryName($categoryId, $db) {
    $categoryId = intval($categoryId); // Ensure it's an integer
    $query = "SELECT name FROM category WHERE id = $categoryId";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $category = mysqli_fetch_assoc($result);
        return $category['name'];
    } else {
        // Handle the case where the category ID is not found
        return "Category not found";
    }
}

// Check if the form is submitted for adding a new project
if (isset($_POST['add-project'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $client = $_POST['client'];
    $project_date = $_POST['project_date'];
    $url = $_POST['url'];
    $text = $_POST['text'];

    // Handle file upload
    
    $targetDirectory = "../images/"; // Change this path to your desired image upload directory
    $image = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDirectory . $image;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Check if the image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo '<script>alert("File is not an image.");</script>';
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFilePath)) {
        echo '<script>alert("Sorry, file already exists.");</script>';
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) { // Adjust the file size limit as per your requirements
        echo '<script>alert("Sorry, your file is too large.");</script>';
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script>';
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo '<script>alert("Sorry, your file was not uploaded.");</script>';
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // File uploaded successfully, continue with database insert
            $query = "INSERT INTO portfolio (title, category, client, project_date, url, text, image) VALUES ('$title', '$category', '$client', '$project_date', '$url', '$text', '$image')";
            $run = mysqli_query($db, $query);

            if ($run) {
                echo '<script>alert("Project added successfully!");</script>';
                echo "<script>window.location.href = 'index.php?projectssetting=true';</script>";
            } else {
                echo '<script>alert("Failed to add Project. Please try again.");</script>';
            }
        } else {
            echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
        }
    }
}
?>

<!-- Rest of your HTML code -->
<div class="card card-primary col-lg-12">
    <!-- ... Rest of the card content ... -->
</div>
<!-- ... Rest of your HTML code ... -->

<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Projects</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Technologies</th>
                        <th>Project Date</th>
                        <th>URL</th>
                        <th>Text</th>
                        <th>Image</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM portfolio";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($project = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><?= $project['title'] ?></td>
                            <td><?= getCategoryName($project['category'], $db) ?></td>
                            <td><?= $project['client'] ?></td>
                            <td><?= $project['project_date'] ?></td>
                            <td><?= $project['url'] ?></td>
                            <td><?= $project['text'] ?></td>
                            <td>
                              
                                <img src="images/<?= $project['image'] ?>" alt="<?= $project['title'] ?>" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td>
                                <a href="../admin/delete_project.php?id=<?= $project['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<div class="container"> <!-- Add a Bootstrap container here -->
    <form role="form" action="../admin/admin.php" method="post" enctype="multipart/form-data">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Project</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group col-6">
                    <label for="titleInput">Title</label>
                    <input type="text" class="form-control" name="title" id="titleInput" placeholder="Enter project title">
                </div>

                <div class="form-group col-6">
                    <label for="categorySelect">Category</label>
                    <select class="form-control" name="category" id="categorySelect">
                        <?php
                        $categoryQuery = "SELECT * FROM category";
                        $categoryResult = mysqli_query($db, $categoryQuery);
                        while ($category = mysqli_fetch_array($categoryResult)) {
                            echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="clientInput">Technologies</label>
                    <input type="text" class="form-control" name="client" id="clientInput" placeholder="Enter client name">
                </div>

                <div class="form-group col-6">
                    <label for="projectDateInput">Project Date</label>
                    <input type="date" class="form-control" name="project_date" id="projectDateInput">
                </div>

                <div class="form-group col-6">
                    <label for="urlInput">URL</label>
                    <input type="text" class="form-control" name="url" id="urlInput" placeholder="Enter project URL">
                </div>

                <div class="form-group col-6">
                    <label for="textInput">Text</label>
                    <input type="text" class="form-control" name="text" id="textInput" placeholder="Enter project text">
                </div>

                <div class="form-group col-6">
                    <label for="imageInput">Image</label>
                    <input type="file" class="form-control" name="image" id="imageInput">
                </div>
                <!-- ... Rest of the form ... -->
            </div>
            <div class="card-footer">
                <button type="submit" name="add-project" class="btn btn-success">Add Project</button>
            </div>
        </div>
    </form>
</div>







<?php
  }else if(isset($_GET['contactsetting'])){
    ?>

<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Contact</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Information</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM contact_info";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($contact = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><?= $contact['address'] ?></td>
                            <td><?= $contact['phone'] ?></td>
                            <td><?= $contact['email'] ?></td>
                            <td>
                                <a href="../admin/delete_contact.php?id=<?= $contact['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="addressInput">Address</label>
                <input type="text" class="form-control" name="address" id="addressInput" placeholder="Enter address">
            </div>

            <div class="form-group col-6">
                <label for="phoneInput">Phone</label>
                <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="Enter phone number">
            </div>

            <div class="form-group col-6">
                <label for="emailInput">Email</label>
                <input type="email" class="form-control" name="email" id="emailInput" placeholder="Enter email">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-contact" class="btn btn-success">Add Contact</button>
            </div>
        </div>
    </form>
</div>

<div class="card card-primary col-lg-12">
    <div class="card-header">
        <h3 class="card-title">Manage Social Icons</h3>
    </div>
    <!-- /.card-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Social Icons List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $q = "SELECT * FROM social_media";
                    $r = mysqli_query($db, $q);
                    $c = 1;
                    while ($socialIcon = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?= $c ?></td>
                            <td><?= $socialIcon['name'] ?></td>
                            <td><?= $socialIcon['link'] ?></td>
                            <td>
                                <a href="../admin/delete_social_icon.php?id=<?= $socialIcon['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $c++;
                    }  
                    ?>            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <form role="form" action="../admin/admin.php" method="post">
        <div class="card-body">
            <div class="form-group col-6">
                <label for="nameInput">Name</label>
                <input type="text" class="form-control" name="name" id="nameInput" placeholder="Enter social media name">
            </div>

            <div class="form-group col-6">
                <label for="linkInput">Link</label>
                <input type="text" class="form-control" name="link" id="linkInput" placeholder="Enter social media link">
            </div>

            <div class="card-footer">
                <button type="submit" name="add-social-icon" class="btn btn-success">Add Social Icon</button>
            </div>
        </div>
    </form>
</div>




<?php
          }elseif(isset($_GET['changebackgroundsetting'])){
            ?>
<div class="card card-primary col-lg-12">
        <div class="card-header">
            <h3 class="card-title">Change Site Background</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <img src="../images/<?=$user_data['background_img']?>" class="col-6">
        <form role="form" action="../admin/admin.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Choose Background Image</label>
                    <input type="file" class="form-control" name="background">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="update-background" class="btn btn-success">Update Background</button>
            </div>
        </form>
    </div>
<?php
}elseif(isset($_GET['seosettingsetting'])){
    ?>
    <div class="card card-primary col-lg-12">
        <div class="card-header">
            <h3 class="card-title">Update SEO</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <img src="../images/<?=$user_data['siteicon']?>" class="col-2">
        <form role="form" action="../admin/admin.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Siteicon</label>
                    <input type="file" class="form-control" name="siteicon">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" class="form-control" name="page_title" value="<?=$user_data['page_title']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Keywords (separate with ,)</label>
                    <input type="text" class="form-control" name="keyword" value="<?=$user_data['keywords']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" value="<?=$user_data['description']?>">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="update-seo" class="btn btn-success">Save Changes</button>
            </div>
        </form>
    </div>
<?php
}elseif(isset($_GET['accountsetting'])){
    ?>
    <div class="card card-primary col-lg-12">
        <div class="card-header">
            <h3 class="card-title">Update Account Setting</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <img src="../images/<?=$user_data['profile_pic']?>" class="col-2">
        <form role="form" action="../admin/admin.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Profile Pic</label>
                    <input type="file" class="form-control" name="profilepic">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" name="fullname" value="<?=$user_data['fullname']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="Email" value="<?=$user_data['email']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" name="password" value="<?=$user_data['password']?>">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="update-account" class="btn btn-success">Update Account</button>
            </div>
        </form>
            </div>




    <?php
}else{
  ?>

            <form method="post" action="../admin/admin.php">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="home" class="custom-control-input" id="customSwitch1"
                  <?php echo $user_data['home_section'] ? 'checked' : ''; ?>>
                <label class="custom-control-label" for="customSwitch1">Home Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="about" class="custom-control-input" id="customSwitch2"
                  <?php echo $user_data['about_section'] ? 'checked' : ''; ?>>
                <label class="custom-control-label" for="customSwitch2">About Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="resume" class="custom-control-input" id="customSwitch3"
                  <?php echo $user_data['resume_section'] ? 'checked' : ''; ?>>
                <label class="custom-control-label" for="customSwitch3">Resume Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="services" class="custom-control-input" id="customSwitch4"
                  <?php echo $user_data['services_section'] ? 'checked' : ''; ?>>
                <label class="custom-control-label" for="customSwitch4">Services Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="portfolio" class="custom-control-input" id="customSwitch5"
                  <?php echo $user_data['portfolio_section'] ? 'checked' : ''; ?>>
                <label class="custom-control-label" for="customSwitch5">Projects Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="contact" class="custom-control-input" id="customSwitch6"
                  <?php echo $user_data['contact_section'] ? 'checked' : ''; ?>>
                <label class="custom-control-label" for="customSwitch6">Contact Section</label>
              </div>

              <input type="submit" name="update-section" class="btn btn-sm btn-success" value="Save Changes">
            </form>

            <?php 
}
            ?>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <strong>&copy; 2023 <a href="https://abhisheksingh.com">Abhishek Singh</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->




  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>