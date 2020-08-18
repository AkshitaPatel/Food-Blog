<?php include("../path.php");
include("../app/controllers/posts.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Section - Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include("../app/includes/adminHeader.php") ?>


    <!-- Admin Page wrapper -->
    <div class="admin-wrapper">

      <!-- left side bar -->
      <?php include("../app/includes/adminSidebar.php") ?>


      <!-- admin content -->
      <div class="admin-content">


        <div class="content">
          <h2 class="page-title">Dashboard</h2>

          <?php include("../app/includes/messages.php"); ?>

  
        </div>

      </div>
    </div>






    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ck editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <!-- custom js -->
    <script src="../assets/js/scripts.js"></script>

    </body>
</html>
