<!-- experience_form.php -->

<form role="form" action="../admin/admin.php" method="post">
    <div class="form-group">
        <label for="experienceTitleInput">Title</label>
        <input type="text" class="form-control" name="experience_title" id="experienceTitleInput" placeholder="E.g., Software Engineer" required>
    </div>

    <div class="form-group">
        <label for="experienceDateInput">Date</label>
        <input type="text" class="form-control" name="experience_date" id="experienceDateInput" placeholder="E.g., June 2018 - Present" required>
    </div>

    <div class="form-group">
        <label for="experienceLocationInput">Location</label>
        <input type="text" class="form-control" name="experience_location" id="experienceLocationInput" placeholder="E.g., Company Name, City" required>
    </div>

    <div class="form-group">
        <label for="experienceDescriptionInput">Description</label>
        <textarea class="form-control" name="experience_description" id="experienceDescriptionInput" rows="4" required></textarea>
    </div>

    <button type="submit" name="add-experience" class="btn btn-success">Add Experience</button>
</form>
