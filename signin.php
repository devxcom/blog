<?php

require 'config/database.php';
unset($_SESSION['signin-data']);
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
        <h2>Sign In</h2>
        <?php if(isset($_SESSION['signup-success'])):?>
          <div class="alert_message success">
          <p>
            <?= $_SESSION['signup-success'];
            unset($_SESSION['signup-success']); ?>
          </p>
        </div>
        <?php elseif(isset($_SESSION['signin'])) :?>
          <div class="alert_message error">
          <p>
            <?= $_SESSION['signin'];
            unset($_SESSION['signin']); ?>
          </p>
        </div>

        <?php endif ?>
        <form action="signin-logic.php" method="POST">
          <input type="text" name="username_email" placeholder="Username or Email" id="" />
          <input type="password" name="password" placeholder="Password" id="" />
          <button type="submit" name="submit" class="btn">Sign In</button>
          <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
      </div>
    </section>
  </body>
</html>
