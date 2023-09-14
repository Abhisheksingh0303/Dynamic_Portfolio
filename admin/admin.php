<?php 
require('../connection/db_connection.php');
if(isset($_POST['update-section']))
{
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $resume = $_POST['resume'] ?? 0;
    $services = $_POST['services'] ?? 0;
    $portfolio = $_POST['portfolio'] ?? 0;
    $contact = $_POST['contact'] ?? 0;

    $query = "UPDATE section_control SET ";
    $query.="home_section='$home',";
    $query.="about_section='$about',";
    $query.="resume_section='$resume',";
    $query.="services_section='$services',";
    $query.="portfolio_section='$portfolio',";
    $query.="contact_section='$contact' WHERE id=1";
    $run = mysqli_query($db, $query);
    if($run){
        echo '<script>alert("Update successful!");</script>';
        echo "<script>window.location.href = 'index.php';</script>";
        
    }
}





if(isset($_POST['update-home']))
{
   
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $showicons = $_POST['showicons'] ?? 0;
   


    $query = "UPDATE home SET ";
    $query.="title='$title',";
    $query.="subtitle='$subtitle',";
    $query.="showicons='$showicons' WHERE id=1";


    $run = mysqli_query($db, $query);
    if($run){
        echo '<script>alert("Update successful!");</script>';
        echo "<script>window.location.href = 'index.php?homesetting=true';</script>";
        
    }
}


if (isset($_POST['update-about'])) {
    $title = $_POST['abouttitle'];
    $subtitle = $_POST['aboutsubtitle'];
    $desc = $_POST['aboutdesc'];
    $imagename = time() . $_FILES['profile']['name'];
    $imgtemp = $_FILES['profile']['tmp_name'];

    if ($imgtemp == '') {
        $query = "SELECT * FROM about WHERE id = 1"; // Assuming you want to update the row with id = 1
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $imagename = $row['profile_pic'];
    }

    move_uploaded_file($imgtemp, "../images/$imagename");

    // Decode the HTML entities in about_desc
    $decoded_desc = htmlspecialchars_decode($desc);

    $query = "UPDATE about SET ";
    $query .= "about_title=?, ";
    $query .= "about_subtitle=?, ";
    $query .= "profile_pic=?, ";
    $query .= "about_desc=? WHERE id=1"; // Assuming you want to update the row with id = 1

    $stmt = $db->prepare($query);
    $stmt->bind_param("ssss", $title, $subtitle, $imagename, $decoded_desc); // Use the decoded description here

    if ($stmt->execute()) {
        echo '<script>alert("Update successful!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Update failed!");</script>';
    }

    $stmt->close();
}



if (isset($_POST['add-skill'])) {
    $skillname = $_POST['skillname'];
    $skilllevel = $_POST['skilllevel'];

    $query = "INSERT INTO skills (skill_name, skill_level) VALUES ('$skillname', '$skilllevel')";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Skill added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add skill. Please try again.");</script>';
    }
}






if (isset($_POST['add-counter'])) {
    $counter_icon = $_POST['counter_icon'];
    $project_name = $_POST['project_name'];
    $project_count = $_POST['project_count'];

    // Prepare the INSERT query
    $query = "INSERT INTO counter (counter_icon, counter_title, post) VALUES ('$counter_icon', '$project_name', '$project_count')";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Project counter added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add project counter. Please try again.");</script>';
    }
}





if (isset($_POST['add-interest'])) {
    $interest_icon = $_POST['interest_icon'];
    $interest_title = $_POST['interest_title'];
    $interest_color = $_POST['interest_color'];

    // Prepare the INSERT query
    $query = "INSERT INTO interests (interest_icon, interest_title, color) VALUES ('$interest_icon', '$interest_title', '$interest_color')";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Interest added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add interest. Please try again.");</script>';
    }
}






if (isset($_POST['add-info'])) {
    $info_title = $_POST['info_title'];
    $info_desc = $_POST['info_desc'];

    // Prepare the INSERT query
    $query = "INSERT INTO personal_info (info_title, info_desc) VALUES ('$info_title', '$info_desc')";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Personal info added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?aboutsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add personal info. Please try again.");</script>';
    }
}




if (isset($_POST['add-service'])) {
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    // Perform validation if needed

    // Insert the new service into the database
    $query = "INSERT INTO services (icon, title, text) VALUES ('$icon', '$title', '$text')";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Service added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?servicessetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add Service. Please try again.");</script>';
    }
}


function getCategoryName($categoryId) {
    global $db;
    $query = "SELECT name FROM category WHERE id = $categoryId";
    $result = mysqli_query($db, $query);
    $category = mysqli_fetch_assoc($result);
    return $category['name'];
}

// Check if the form is submitted for adding a new service
if (isset($_POST['add-service'])) {
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    // Perform validation if needed

    // Insert the new service into the database
    $query = "INSERT INTO services (icon, title, text) VALUES ('$icon', '$title', '$text')";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo '<script>alert("Service added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?servicessetting=true';</script>";
        exit(); // Exit after redirect
    } else {
        echo '<script>alert("Failed to add Service. Please try again.");</script>';
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

    // Perform validation if needed

    // Handle file upload
    if (!empty($_FILES["image"]["name"])) {
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
                    exit(); // Exit after redirect
                } else {
                    echo '<script>alert("Failed to add Project. Please try again.");</script>';
                }
            } else {
                echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
            }
        }
    } else {
        // If no image is uploaded, handle the situation accordingly
        echo '<script>alert("Please select an image for the project.");</script>';
    }
}



if (isset($_POST['add-social-icon'])) {
    $social_name = $_POST['name'];
    $social_link = $_POST['link'];

    // Prepare the INSERT query for social media icons
    $social_query = "INSERT INTO social_media (name, link) VALUES ('$social_name', '$social_link')";
    $social_run = mysqli_query($db, $social_query);

    if ($social_run) {
        echo '<script>alert("Social media icon added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?contactsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add social media icon. Please try again.");</script>';
    }
}

if (isset($_POST['add-contact'])) {
    $contact_address = $_POST['address'];
    $contact_phone = $_POST['phone'];
    $contact_email = $_POST['email'];

    // Prepare the INSERT query for contact information
    $contact_query = "INSERT INTO contact_info (address, phone, email) VALUES ('$contact_address', '$contact_phone', '$contact_email')";
    $contact_run = mysqli_query($db, $contact_query);

    if ($contact_run) {
        echo '<script>alert("Contact information added successfully!");</script>';
        echo "<script>window.location.href = 'index.php?contactsetting=true';</script>";
    } else {
        echo '<script>alert("Failed to add contact information. Please try again.");</script>';
    }
}

//resume section//--------->

if (isset($_POST['add-education'])) {
    // Get data from the education form fields
    $educationTitle = $_POST['education_title'];
    $educationDate = $_POST['education_date'];
    $educationLocation = $_POST['education_location'];
    $educationDescription = $_POST['education_description'];

    // Insert data into the 'education' table
    $insertQuery = "INSERT INTO education (title, date, location, description) VALUES ('$educationTitle', '$educationDate', '$educationLocation', '$educationDescription')";

    if (mysqli_query($db, $insertQuery)) {
        echo "Education data added successfully!";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}


if (isset($_POST['add-experience'])) {
    // Get data from the experience form fields
    $experienceTitle = $_POST['experience_title'];
    $experienceDate = $_POST['experience_date'];
    $experienceLocation = $_POST['experience_location'];
    $experienceDescription = $_POST['experience_description'];

    // Insert data into the 'experience' table
    $insertQuery = "INSERT INTO experience (title, date, location, description) VALUES ('$experienceTitle', '$experienceDate', '$experienceLocation', '$experienceDescription')";

    if (mysqli_query($db, $insertQuery)) {
        echo "Experience data added successfully!";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}




if (isset($_POST['add-summary'])) {
    // Get data from the summary form fields
    $summaryName = $_POST['summary_name'];
    $summaryDescription = $_POST['summary_description'];
    $summaryAddress = $_POST['summary_address'];
    $summaryPhone = $_POST['summary_phone'];
    $summaryEmail = $_POST['summary_email'];

    // Insert data into the 'summary' table
    $insertQuery = "INSERT INTO summary (name, description) VALUES ('$summaryName', '$summaryDescription')";

    if (mysqli_query($db, $insertQuery)) {
        echo "Summary data added successfully!";
    } else {
        echo "Error: " . mysqli_error($db);
    }

    // Insert data into the 'contact_info' table
    $contactInfoQuery = "INSERT INTO contact_info (address, phone, email) VALUES ('$summaryAddress', '$summaryPhone', '$summaryEmail')";
    
    if (mysqli_query($db, $contactInfoQuery)) {
        echo "Contact info added successfully!";
    } else {
        echo "Error: " . mysqli_error($db);
    }


    
}



if(isset($_POST['update-background'])){
    $imagename = time().$_FILES['background']['name'];
    $imgtemp = $_FILES['background']['tmp_name'];

    // Move the uploaded file to the destination directory
    move_uploaded_file($imgtemp, "../images/$imagename");

    $query = "UPDATE site_background SET ";
    $query .= "background_img='" . mysqli_real_escape_string($db, $imagename) . "' WHERE id=1";

    $run = mysqli_query($db, $query);
    if($run){
        header("Location: ../admin/index.php?changebackgroundsetting=true");
        exit();
    } else {
        echo "Error: " . mysqli_error($db); // Display an error message for debugging
    }
}

if(isset($_POST['update-seo'])){
    $title = mysqli_real_escape_string($db, $_POST['page_title']);
    $keyword = mysqli_real_escape_string($db, $_POST['keyword']);
    $desc = mysqli_real_escape_string($db, $_POST['description']);
    $imagename = time().$_FILES['siteicon']['name'];
    $imgtemp = $_FILES['siteicon']['tmp_name'];

    if($imgtemp == ''){
        $q = "SELECT * FROM seo WHERE 1";
        $r = mysqli_query($db, $q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['siteicon'];
    }

    // Move the uploaded file to the destination directory
    move_uploaded_file($imgtemp, "../images/$imagename");

    $query = "UPDATE seo SET ";
    $query .= "page_title='$title', ";
    $query .= "keywords='$keyword', ";
    $query .= "description='$desc', ";
    $query .= "siteicon='" . mysqli_real_escape_string($db, $imagename) . "' WHERE id=1";

    $run = mysqli_query($db, $query);
    if($run){
        header("Location: ../admin/index.php?seosetting=true");
        exit();
    } else {
        echo "Error: " . mysqli_error($db); // Display an error message for debugging
    }
}

if(isset($_POST['update-account'])){
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $imagename = time().$_FILES['profilepic']['name'];
    $imgtemp = $_FILES['profilepic']['tmp_name'];

    if($imgtemp == ''){
        $q = "SELECT * FROM admin WHERE 1";
        $r = mysqli_query($db, $q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['admin_profile'];
    }

    // Move the uploaded file to the destination directory
    move_uploaded_file($imgtemp, "../images/$imagename");

    $query = "UPDATE admin SET ";
    $query .= "fullname='$fullname', ";
    $query .= "email='$email', ";
    $query .= "password='$password', ";
    $query .= "admin_profile='" . mysqli_real_escape_string($db, $imagename) . "' WHERE id=1";

    $run = mysqli_query($db, $query);
    if($run){
        header("Location: ../admin/index.php?accountsetting=true");
        exit();
    } else {
        echo "Error: " . mysqli_error($db); // Display an error message for debugging
    }

}

?>

