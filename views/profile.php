<?php
include ('../partials/header.php');
?>

    <div class="header">
        <h4>My Profile</h4>
    </div>
    <div class="mt-3">
      <p>Username : <b><?=$logged_user['user_name']?></b></p>
      <p>Your Email : <b><?=$logged_user['user_email']?></b></p>
      <p>Your contact : <b><?='+'.$logged_user['user_contact']?></b></p>
    </div>
    <div class="mt-3">
       <a href="editProfile.php"> <button class='btn btn-secondary'>Edit Profile</button></a>
        <button class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#staticBackdrop">Change Password</button>
    </div>

    <!-- Calling data from db -->

</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Change password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action='../includes/changePassword.php' method='post' class=' p-3' id='form'>
    
    <div class="mb-3">
        <label for="op" class="form-label">Old Password</label>
        <input type="password" class="form-control" id="op" aria-describedby="emailHelp" name='op' required>
    </div>

    <div class="mb-3">
        <label for="np" class="form-label">New Password</label>
        <input type="password" class="form-control" id="np" aria-describedby="emailHelp" name='np'  required>
    </div>

    <div class="mb-3">
        <label for="rp" class="form-label">Repeat New Password</label>
        <input type="password" class="form-control" id="rp" aria-describedby="emailHelp" name='rp'  required>
    </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form='form' name='change' class="btn btn-primary">Change</button>
      </div>
    </div>
  </div>
</div>
<!-- boostrap js -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>