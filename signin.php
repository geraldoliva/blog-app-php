<?php 
session_start();
require 'config/constants.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP & MySQL Blog Application with Admin Panel</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css" />
  </head>
  <body>
    <section class="form__section">
      <div class="container form__section-container">
        <h2>Sign In</h2>
        <div class="alert__message success">
          <p>This is a success message</p>
        </div>
        <form action="">
          <input type="text" placeholder="Username or Email" />
          <input type="password" placeholder="Password" />
          <button class="btn" type="submit">Sign In</button>
          <small
            >Don't have an account? <a href="signup.php">Sign Up</a></small
          >
        </form>
      </div>
    </section>
  </body>
</html>