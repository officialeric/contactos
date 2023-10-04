<?php
include ('../partials/header.php');
?>

    <div class="header">
        <h4>Share Contact</h4>
    </div>
    <div class="mt-3">
      <form action="../includes/shareContact.php" method="post">
        <input type="hidden" name="contact_id" value='<?=$_GET['contact_id']?>'>
        <select name="choosenContact" id="" class='form-select' aria-label='Default select example'>
          <?php foreach($allUsers as $user) : ?>
            <option value="<?=$user['user_id']?>"><?=$user['user_name']?></option>
          <?php endforeach ?>
        </select>
        <button type='submit' class="btn btn-primary mt-5" name='share'>Share</button>
      </form>
    </div>


    <!-- Calling data from db -->

</div>

<!-- boostrap js -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>