<?php
include 'partials/header.php';
?>

<section class="form_section">
  <div class="container form_section-container">
    <h2>Edit Post</h2>
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Title" id="" />
      <select>
        <option value="1">cat1</option>
        <option value="1">cat1</option>
        <option value="1">cat1</option>
        <option value="1">cat1</option>
        <option value="1">cat1</option>
      </select>
      <textarea placeholder="Body" id="" rows="5"></textarea>
      <div class="form_control inline">
        <input type="checkbox" name="" id="is__featured" checked />
        <label for="is_featured">Featured</label>
      </div>
      <div class="form_control">
        <label for="thumbnail">Edit Thumbnail</label>
        <input type="file" name="" id="thumbnail" />
      </div>
      <button type="submit" class="btn">Update Post</button>
    </form>
  </div>
</section>

<?php
include '../partials/footer.php'
?>