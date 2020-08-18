<?php include("../../path.php");
include("../../app/controllers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Section - Manage Topics</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <!-- admin header here -->
    <?php include("../../app/includes/adminHeader.php");
    ?>




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
          <h2 class="page-title">Manage Topics</h2>

              <?php include("../../app/includes/messages.php"); ?>

          <table>
            <thead>
              <th>SN</th>
              <th>Name</th>
              <th colspan="3">Action</th>
            </thead>
            <tbody>

              <?php foreach ($topics as $key => $topic):?>
              <tr>
                <td> <?php echo $key +1; ?> </td>
                <td><?php echo $topic['name']; ?></td>
                <td> <a href="edit.php?id=<?php echo $topic['id'];?>" class="edit">edit</a> </td>
                <td> <a href="index.php?del_id=<?php echo $topic['id'];?>" class="delete">delete</a> </td>

              </tr>
            <?php endforeach;?>

            </tbody>
          </table>

        </div>

      </div>
    </div>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <!-- custom js -->
    <script src="../../assets/js/scripts.js"></script>
    <!-- slick carousel -->
    </body>
</html>
