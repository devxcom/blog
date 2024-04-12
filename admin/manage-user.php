<?php
include 'partials/header.php';
?>




<section class="dashboard">
  <div class="container dashboard_container">
    <button class="sidebar_toggle" id="show_sidebar-btn"><i class="uil uil-angle-right-b"></i></button>
    <button class="sidebar_toggle" id="hide_sidebar-btn"><i class="uil uil-angle-left-b"></i></button>
    <aside>
            <ul>
                <li><a href="add-post.php"><i class="uil uil-pen"></i>
                    <h5>Add Post</h5>
                </a></li>
                <li><a href="index.php" class="active"><i class="uil uil-postcard"></i>
                    <h5>Manage Posts</h5>
                </a></li>
                <?php if(isset($_SESSION['user_is_admin'])): ?>
                <li><a href="add-user.php"><i class="uil uil-plus"></i>
                    <h5>Add User</h5>
                </a></li>
                <li><a href="manage-user.php"><i class="uil uil-users-alt"></i>
                    <h5>Manage User</h5>
                </a></li>
                <li><a href="add-category.php"><i class="uil uil-edit"></i>
                    <h5>Add Category</h5>
                </a></li>
                <li><a href="manage-category.php"><i class="uil uil-list-ul"></i>
                    <h5>Manage Category</h5>
                </a></li>
                <?php endif ?>
            </ul>
        </aside>
    <main>
      <h2>Manage Users</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Admin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lorem, ipsum. (name)</td>
            <td>Lorem, ipsum. (username)</td>
            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Lorem, ipsum. (name)</td>
            <td>Lorem, ipsum. (username)</td>
            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Lorem, ipsum. (name)</td>
            <td>Lorem, ipsum. (username)</td>
            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>

        </tbody>
      </table>
    </main>
  </div>

</section>


<?php
include '../partials/footer.php'
?>