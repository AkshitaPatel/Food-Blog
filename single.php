<?php include('path.php');
include(ROOT_PATH . '/app/controllers/posts.php');

if(isset($_GET['id'])){
  $post = selectOne('posts', [ 'id' => $_GET['id']]);

}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $post['title']; ?> | AwaInspires</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <?php include("app/includes/header.php"); ?>


    <!-- Page slider -->
    <div class="page-wrapper">


      <div class="content clearfix">

        <div class="main-content-wrapper">



        <div class="main-content single">

          <h1 class="post-title"> <?php echo $post['title']; ?></h1>

          <img src="<?php echo 'assets/images/' . $post['image'];?>" alt="" class="slider-image">
          

          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
          </div>

        </div>


        </div>
        <!-- sidebar -->

        <div class="sidebar single">

          <div class="section popular">
            <h2 class="section-title">Popular</h2>

            <?php foreach ($posts as $p): ?>

            <div class="post">
              <img src="<?php echo 'assets/images/' . $p['image'];?>" alt="">
              <a href="single.php?id=<?php echo $p['id']; ?>" class="title"><h4><?php echo $p['title']; ?></h4></a>

            </div>

          <?php endforeach; ?>

          </div>



          <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
              <?php foreach($topics as $topic): ?>
              <li> <a href="<?php echo 'index.php?t_id=' . $topic['id']. '&name=' . $topic['name']; ?>"><?php echo $topic['name'];?></a> </li>
            <?php endforeach; ?>

            </ul>
          </div>

        </div>

      </div>

      </div>









    </div>

<!-- footer -->
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>





    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <!-- custom js -->
    <script src="assets/js/scripts.js"></script>
    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
