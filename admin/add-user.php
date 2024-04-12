<?php
include 'partials/header.php';
?>

<section class="form_section">
  <div class="container form_section-container">
    <h2>Add User</h2>
    <div class="alert_message error">
      <p>This is a error message.</p>
    </div>
    <form action="<?=ROOT_URL?>admin/add-user-logic.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="First Name" name="firstname" />
      <input type="text" placeholder="Last Name" name="lastname" />
      <input type="text" placeholder="Username" name="username" />
      <input type="email" placeholder="Email" name="email" />
      <input type="password" placeholder="Create Password" name="createpassword" />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" />
      <select name="userrole" id="">
        <option value="0">Author</option>
        <option value="1">Admin</option>
      </select>
      <div class="form_control">
        <label for="avatar">Avatar</label>
        <input type="file" name="avatar" id="avatar" />
      </div>
      <button type="submit" name="submit" class="btn">Add User</button>
    </form>
  </div>
</section>

<?php
include '../partials/footer.php'
?>