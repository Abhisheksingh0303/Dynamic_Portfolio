<!-- summary_form.php -->

<form role="form" action="../admin/admin.php" method="post">
    <div class="form-group">
        <label for="summaryNameInput">Name</label>
        <input type="text" class="form-control" name="summary_name" id="summaryNameInput" placeholder="E.g., John Doe" required>
    </div>

    <div class="form-group">
        <label for="summaryDescriptionInput">Description</label>
        <textarea class="form-control" name="summary_description" id="summaryDescriptionInput" rows="4" required></textarea>
    </div>

    <!-- Add fields for contact info -->
    <div class="form-group">
        <label for="summaryAddressInput">Address</label>
        <input type="text" class="form-control" name="summary_address" id="summaryAddressInput" placeholder="E.g., Urrunabond T.E, P.0: salganga, P.S: Udharbond, Sil..." required>
    </div>

    <div class="form-group">
        <label for="summaryPhoneInput">Phone</label>
        <input type="text" class="form-control" name="summary_phone" id="summaryPhoneInput" placeholder="E.g., 9876654332" required>
    </div>

    <div class="form-group">
        <label for="summaryEmailInput">Email</label>
        <input type="email" class="form-control" name="summary_email" id="summaryEmailInput" placeholder="E.g., abhisheksingh81037272@gmail.com" required>
    </div>

    <button type="submit" name="add-summary" class="btn btn-success">Add Summary</button>
</form>
