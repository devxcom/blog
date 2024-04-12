<?php
include 'partials/header.php';
?>

<section class="form_section">
  <div class="container form_section-container">
    <h2>Edit User</h2>
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="First Name" id="" />
      <input type="text" placeholder="Last Name" id="" />
      <select name="" id="">
        <option value="0">Author</option>
        <option value="1">Admin</option>
      </select>
      <div class="form_control">
        <label for="avatar">Avatar</label>
        <input type="file" name="" id="avatar" />
      </div>
      <button type="submit" class="btn">Update User</button>
    </form>
  </div>
</section>

<?php
include '../partials/footer.php'
?>