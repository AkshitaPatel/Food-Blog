<?php include("../../path.php");
include("../../app/controllers/posts.php");
adminOnly();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Section - Edit Post</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include("../../app/includes/adminHeader.php") ?>


    <!-- Admin Page wrapper -->
    <div class="admin-wrapper">

      <!-- left side bar -->
      <?php include("../../app/includes/adminSidebar.php") ?>


      <!-- admin content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add Post</a>
          <a href="index.php" class="btn btn-big">Manage Post</a>

        </div>

        <div class="content">
          <h2 class="page-title">Edit Post</h2>
          <?php include("../../app/helpers/formErrors.php"); ?>


          <form class="" action="edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="">
              <label for="">Title</label>
              <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">

              <label for="">Body</label>
              <textarea name="body" id="body" ><?php echo $body; ?></textarea>

              <div class="">
                <label for="">Image</label>
                <input type="file" name="image" value="" class="text-input">

              </div>

              <div class="">
                <label for="">Topic</label>
                <select class="" name="topic_id" class="text-input">
                  <option value=""></option>

                  <?php foreach ($topics as $key => $topic): ?>

                    <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                      <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>

                    <?php else: ?>
                      <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>


                    <?php endif; ?>


                <?php endforeach; ?>

                </select>

              </div>

              <div class="">

                <?php if(empty($published) && $published== 0): ?>
                <label for="">
                  <input type="checkbox" name="published" value="">
                  Publish
                </label>
              <?php else: ?>
                <label for="">
                  <input type="checkbox" name="published" value="" checked>
                  Publish
                </label>
              <?php endif; ?>

              </div>
              <div>
                <button type="submit" name="update-post" class="btn btn-big">Update Post</button>

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
