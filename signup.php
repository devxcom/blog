<?php
require 'config/constants.php';

$fname = $_SESSION['signup-data']['firstname'] ?? null;
$lname = $_SESSION['signup-data']['lastname'] ?? null;
$uname = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null; 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog-website-Multipage-Responsive</title>
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
  </head>
  <body>
    <section class="form_section">
      <div class="container form_section-container">
        <h2>Sign Up</h2>
        <?php if(isset($_SESSION['signup'])):?>
          <div class="alert_message error">
          <p>
            <?= $_SESSION['signup'];
            unset($_SESSION['signup']); ?>
          </p>
        </div>

        <?php endif ?>
        <form action="<?=ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="POST">
          <input type="text" name="firstname" placeholder="First Name" value="<?=$fname?>" id="" />
          <input type="text" name="lastname" placeholder="Last Name" value="<?=$lname?>" id="" />
          <input type="text" name="username" placeholder="Username" value="<?=$uname?>" id="" />
          <input type="email" name="email" placeholder="Email" value="<?=$email?>" id="" />
          <input type="password" name="createpassword" placeholder="Create Password" id="" />
          <input type="password" name="confirmpassword" placeholder="Confirm Password" id="" />
          <div class="form_control">
            <label for="avatar"></label>
            <input type="file" name="avatar" id="avatar" />
          </div>
          <button type="submit" name="submit" class="btn">Sign Up</button>
          <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
      </div>
    </section>
  </body>
</html>
