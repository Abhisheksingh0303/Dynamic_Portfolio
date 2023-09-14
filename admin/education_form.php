<!-- education_form.php -->

<form role="form" action="../admin/admin.php" method="post">
    <div class="form-group">
        <label for="educationTitleInput">Title</label>
        <input type="text" class="form-control" name="education_title" id="educationTitleInput" placeholder="E.g., Bachelor's Degree" required>
    </div>

    <div class="form-group">
        <label for="educationDateInput">Date</label>
        <input type="text" class="form-control" name="education_date" id="educationDateInput" placeholder="E.g., May 2010 - April 2014" required>
    </div>

    <div class="form-group">
        <label for="educationLocationInput">Location</label>
        <input type="text" class="form-control" name="education_location" id="educationLocationInput" placeholder="E.g., University Name, City" required>
    </div>

    <div class="form-group">
        <label for="educationDescriptionInput">Description</label>
        <textarea class="form-control" name="education_description" id="educationDescriptionInput" rows="4" required></textarea>
    </div>

    <button type="submit" name="add-education" class="btn btn-success">Add Education</button>
</form>
