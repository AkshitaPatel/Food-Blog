<?php include("../../path.php");
include("../../app/controllers/topics.php");
adminOnly();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Section - Edit Topic</title>
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
          <a href="create.php" class="btn btn-big">Add Topic</a>
          <a href="index.php" class="btn btn-big">Manage Topics</a>

        </div>

        <div class="content">
          <h2 class="page-title">Edit Topic</h2>
          <?php
          include("../../app/helpers/formErrors.php");

           ?>

          <form class="" action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="">
              <label for="">Name</label>
              <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">

              <label for="">Description</label>
              <textarea name="description" id="body" ><?php echo $description; ?></textarea>


              <div>
                <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>

              </div>

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
