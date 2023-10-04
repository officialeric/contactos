<?php
include ('../partials/header.php');
?>

    <div class="header">
        <h4>Edit Contact</h4>
    </div>
    <form action='../includes/editContact.php' method='post' class='p-3'>
        <input type="hidden" name="contact_id" value='<?=$_GET['contact_id']?>'>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name='name' value='<?=$contact['contact_name'] ?? null?>' required>
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Your Contact</label>
        <input type="text" class="form-control" id="number" name='contact' value='<?=$contact['contact'] ?? null?>'  required>
    </div>

    
    <button type="submit" name='edit' class="btn btn-primary">Edit Contact</button>
</form>

    <!-- Calling data from db -->

</div>

<!-- boostrap js -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>