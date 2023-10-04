<?php
include ('../partials/header.php');
?>

    <div class="header">
        <h4>My Contacts</h4>
    </div>
    <?php if($status == true) : ?>
       <div class="card">
        <div class="card-body">
          Someone share to you a contact :
          <p>Name : <?=$contactShared['contact_name']?><br>
          contact : <?=$contactShared['contact']?></p>
        </div>
        <div class="card-footer">
          <a href="../includes/processShare.php?denied&contact_id=<?=$contactShared['contact_id']?>"><button class='btn btn-danger'>Deny</button></a>
          <a href="../includes/processShare.php?accepted&contact_id=<?=$contactShared['contact_id']?>&contact_name=<?=$contactShared['contact_name']?>&contact=<?=$contactShared['contact']?>"><button class='btn btn-primary'>Accept</button></a>
        </div>
       </div>
    <?php endif ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach($contacts as $contact) : ?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?=$contact['contact_name']?></td>
      <td><a href="tel:+"><?='+'.$contact['contact']?></a></td>
      <td>
        <a href="editContact.php?contact_id=<?=$contact['contact_id']?>">
      <span class="material-symbols-outlined">
        edit
        </span>
        </a>
        <a href="../includes/deleteContact.php?contact_id=<?=$contact['contact_id']?>">
        <span class="material-symbols-outlined">
        delete
        </span>
        </a>
        <a href="shareContact.php?contact_id=<?=$contact['contact_id']?>">
        <span class="material-symbols-outlined">
        share
        </span>
        </a>
      </td>
    </tr>
    <?php endforeach ?>

  </tbody>
</table>

<div class="add bg-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<span class="material-symbols-outlined">
add
</span>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action='../includes/addContact.php' method='post' class=' p-3' id='form'>
    
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name='name' required>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="number" aria-describedby="emailHelp" name='contact' placeholder='begin with 255' required>
    </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form='form' name='add' class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- boostrap js -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>