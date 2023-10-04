<?php
include ('../partials/header.php');
?>

    <div class="header">
        <h4>Edit Profile</h4>
    </div>
    <form action='../includes/editProfile.php' method='post' class='p-3'>
        <input type="hidden" name="user_id" value='<?=$_SESSION['user_id']?>'>
    <div class="mb-3">
        <label for="name" class="form-label">Username</label>
        <input type="text" class="form-control" id="name" name='username' value='<?=$logged_user['user_name'] ?? null?>' required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="text" class="form-control" id="email" name='email' value='<?=$logged_user['user_email'] ?? null?>'  required>
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Your Contact</label>
        <input type="text" class="form-control" id="contact" name='contact' value='<?=$logged_user['user_contact'] ?? null?>' required>
    </div>

    
    <button type="submit" name='edit' class="btn btn-primary">Edit Contact</button>
</form>

    <!-- Calling data from db -->

</div>

<!-- boostrap js -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>