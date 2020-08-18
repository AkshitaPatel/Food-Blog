<?php include("../../path.php");
include("../../app/controllers/users.php");
adminOnly();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Section - Add Users</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- admin style -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!-- admin header here -->
    <?php include("../../app/includes/adminHeader.php") ?>


    <!-- Admin Page wrapper -->
    <div class="admin-wrapper">

      <!-- left side bar -->
      <?php include("../../app/includes/adminSidebar.php") ?>



      <!-- admin content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add User</a>
          <a href="index.php" class="btn btn-big">Manage Users</a>

        </div>

        <div class="content">
          <h2 class="page-title">Add User</h2>

          <?php include("../../app/helpers/formErrors.php"); ?>

          <form class="" action="create.php" method="post">

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
              <?php if (isset($admin) && $admin == 1):?>
              <label for="">Admin</label>
              <input type="checkbox" name="admin" value="" checked>
            <?php else: ?>
              <label for="">Admin</label>
              <input type="checkbox" name="admin" value="">
            <?php endif; ?>

            </div>




              <div>
                <button type="submit" name="create-admin" class="btn btn-big">Add User</button>

              </div>



          </form>

        </div>

      </div>
    </div>






    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ck editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <!-- custom js -->
    <script src="../../assets/js/scripts.js"></script>

    </body>
</html>
