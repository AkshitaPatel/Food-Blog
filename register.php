<?php include("path.php"); ?>
<?php

include("app/controllers/users.php");
// guestsOnly();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php include("app/includes/header.php"); ?>

    <div class="auth-content">

      <form  action="register.php" method="post">

        <h2 class="form-title"> Register</h2>

        <?php
        include("app/helpers/formErrors.php");

         ?>


        <div class="">
          <label for="">Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">

        </div>

        <div class="">
          <label for="">Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">

        </div>

        <div class="">
          <label for="">Password</label>
          <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">

        </div>

        <div class="">
          <label for="">Password Confirmation</label>
          <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">

        </div>

        <div class="">
          <button type="submit" name="register-btn" class="btn btn-big">Register</button>

        </div>

        <p>Or <a href="login.php">Sign In</a>  </p>



      </form>

    </div>




<!-- footer -->
<?php include("app/includes/footer.php"); ?>





    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <!-- custom js -->
    <script src="assets/js/scripts.js"></script>
    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
